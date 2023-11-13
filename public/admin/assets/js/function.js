function deleteItems(id) {
    $result = confirm('Dữ liệu xoá sẽ không thể khôi phuc! Bạn chắc chắn xoá?');
    if ($result == true) {

        var href = $("#delete-item-" + id).data('href');
        //alert(href);
        document.location = href;

    }
}
function deleteListItems() {
    $result = confirm('Dữ liệu xoá sẽ không thể khôi phuc! Bạn chắc chắn xoá danh sách?');
    if ($result == true) {
        var listid = "";
        $("input.select-checkbox").each(function () {
            if (this.checked) listid = listid + "," + this.value;
        });
        listid = listid.substr(1);
        if (listid == "") {
            //notifyDialog("Bạn hãy chọn ít nhất 1 mục để xóa");
            alert("Bạn hãy chọn ít nhất 1 mục để xóa");
            return false;
        }
        var href = $("#delete-all").data('href');
        document.location = href + "&listid=" + listid;

    }
}
function changeStatus(id,textId){
    //var id = $(this).attr('data-id');
    var table = $('.'+textId+id).attr('data-table');
    var loai = $('.'+textId+id).attr('data-loai');
    var $this = $('.'+textId+id);
    var href = $('.'+textId+id).data('href');
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({
        url: href,
        type: 'POST',
        dataType: 'html',
        data: {id:id,table:table,loai:loai},
        //data: JSON.stringify(href), 
        success: function(result)
        {
            // if($this.is(':checked')) $this.prop('checked',false);
            // else $this.prop('checked',true); 
            console.log(result);
        }
    });
    return false;
}
function onchange_category(id_list){
    
    // var id = id_list.attr('selected');
    // alert(id);
    var value = id_list.val();
    var href = id_list.data('href')
    var id = id_list.attr('id');
    //console.log(href + "?" +id +"="+value);
    return window.location = (href + "?" +id + "=" +value);
    // var name = '';
	// 	var keyword = $("#keyword").val();
	// 	var url = "<?=(isset($linkFilter) && $linkFilter != '') ? $linkFilter : ''?>";
	// 	obj.parents(".form-group").nextAll().each(function(){
	// 		name = $(this).find(".filer-category").attr("name");
	// 		if($(this) != obj)
	// 		{
	// 			$(this).find(".filer-category").val(0);
	// 		}
	// 	});
	// 	url = filter_category(url);
	// 	if(keyword)
	// 	{
	// 		url += "&keyword="+encodeURI(keyword);
	// 	}
	// 	return window.location = url;
}
$(document).ready(function(){
    $(".format-price").priceFormat({
        limit: 13,
        prefix: '',
        centsLimit: 0
    });
    $(".form-control-ckeditor").each(function(){
        var id = $(this).attr("id");
        CKEDITOR.replace(id);
    })
})