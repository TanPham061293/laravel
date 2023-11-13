<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\admin\ValidateForm;
use Illuminate\Support\Facades\DB;
use App\Helper\classFunctions\Functions;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\URL;
use App\Models\admin\Photo;

class userAdmin extends Controller
{
    //
    public function loginAdmin(Request $req)
    {
		if ($req->session()->has('loginAdmin')) {
            // dd($active);
			$url = Url::previousPath();
			$url = Str::substr($url,1);
            return redirect($url);
		}
		$favicon = Photo::where('type','favicon')->where('hienthi','>',0)->first();
        return view('admin.templates.user.login',compact('favicon'));
    }
	public function postlogoutAdmin(Request $req){
		if($req->session()->has('loginAdmin')){
			$req->session()->flush();
			return redirect(route('login'));
		}
	}
    public function postloginAdmin(ValidateForm $request)
    {
        $rule = [
            //
            'username' => 'required',
            'password' =>'required',
        ];
        $mess = [
            //
            'username.required' => ':attribute không được rỗng.',
            'username.required' => ':attribute độ dài tối thiểu 5 ký tự.',
            'password.required' => ':attribute không được rỗng.',
        ];
            $vali = $request->validate($rule,$mess);
            $username = $request->username;
            $password = $request->password;
            $error = "";
            $success = "";
            $login_failed = false;
            $row = DB::table('user')->where('username',$username)->get();
            //$row = $d->rawQueryOne("select * from #_user where username = ? and hienthi>0 limit 0,1",array($username));
            if(isset($row[0]->id) && $row[0]->id > 0)
			{
				if((Str::contains($row[0]->username,$username) == true && $row[0]->password == md5($password)))
				{
					$timenow = time();
					$id_user = $row[0]->id;
					$ip= getRealIPAddress();
					$token = md5(time());
					$user_agent = $_SERVER['HTTP_USER_AGENT'];
					$sessionhash = md5(sha1($row[0]->password.$row[0]->username));
					/* Ghi log truy cập thành công */
                    $data_insert =['id_user'=>$id_user, 'ip'=>$ip, 'timelog'=>$timenow, 'user_agent'=>$user_agent];
                    DB::table('user_log')->insert($data_insert)	;			
					//$d->rawQuery("insert into #_user_log (id_user, ip, timelog, user_agent) values (?,?,?,?)",array($id_user,$ip,$timenow,$user_agent));
					/* Tạo log và login session */	
                    DB::table('user')->where('id',$id_user)->update(['login_session'=>$sessionhash,'lastlogin'=>$timenow,'user_token'=>$token]);		
					//$d->rawQuery("update #_user set login_session = ?, lastlogin = ?, user_token = ? where id = ?",array($sessionhash,$timenow,$token,$id_user));
					/* Khởi tạo Session để kiểm tra số lần đăng nhập */
                    DB::table('user')->where('id',$id_user)->update(['login_session'=>$sessionhash,'lastlogin'=>$timenow]);		
					//$d->rawQuery("update #_user set login_session = ?, lastlogin = ? where id = ?",array($sessionhash,$timenow,$id_user));
					/* Reset số lần đăng nhập và thời gian đăng nhập */
					$limitlogin = DB::table('user_limit')->select('id', 'login_ip', 'login_attempts', 'attempt_time', 'locked_time')->where('login_ip',$ip)->get();
					//$limitlogin = $d->rawQuery("select id, login_ip, login_attempts, attempt_time, locked_time from #_user_limit where login_ip = ? order by id desc",array($ip));
				
                    if(count($limitlogin)==1)
					{
				        $id_login = $limitlogin[0]->id;
                        DB::table('user_limit')->where('id',$id_login)->update(['login_attempts' => 0, 'locked_time' => 0]);
						//$d->rawQuery("update #_user_limit set login_attempts = 0, locked_time = 0 where id = ?",array($id_login));
				   	}
				   	/* Tạo Session login */
					$loginAdmin = array();
					$loginAdmin['active'] = true;
					$loginAdmin['username'] = $row[0]->username;
					$loginAdmin['id'] = $row[0]->id;

					session(['loginAdmin'=>$loginAdmin]);
					
					$_SESSION['login_admin']['quyen'] = $row[0]->quyen;
					$_SESSION['login_admin']['token'] = $sessionhash;
					$_SESSION['login_admin']['password'] = $row[0]->password;
					$_SESSION['login_admin']['login_session'] = $sessionhash;
					$_SESSION['login_admin']['login_token'] = $token;
					/* Cập nhật quyền của user đăng nhập */
					$quyen = $_SESSION['login_admin']['token'];
                    DB::table('user')->where('id',$row[0]->id)->update(['quyen'=>$quyen]);
					//$d->rawQuery("update #_user set quyen = ? where id = ?",array($quyen,$row[0]->id));
					$success = "Đăng nhập thành công";
                  
				}
				else
				{
					$login_failed = true;
					$error = "Tên đăng nhập hoặc mật khẩu không chính xác";
				}
			}
			else
			{
				$error = "Tên đăng nhập hoặc mật khẩu không chính xác";
				$login_failed = true;
			}
            if($error != ''){
                return redirect()->back()->withErrors($error)->withInput(); 
            }else{
                return redirect('admin/product/list');
            }
        //return response()->json($username);
    }
}
