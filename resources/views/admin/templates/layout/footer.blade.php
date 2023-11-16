<!-- Main Footer -->

<footer class="main-footer text-center text-sm">

</footer>
<script type="text/javascript">
    // function deleteAll(url)
	// {
	// 	var listid = "";
	//     $("input.select-checkbox").each(function(){
	//         if(this.checked) listid = listid+","+this.value;
	//     });
	//     listid = listid.substr(1);
	//     if(listid == "")
	//     {
	//     	notifyDialog("Bạn hãy chọn ít nhất 1 mục để xóa");
	//     	return false;
	//     }
	//     document.location = url+"&listid="+listid;
	// }
    // function confirmDialog(action, text, value) {
    //     const swalconst = Swal.mixin({
    //         customClass: {
    //             confirmButton: 'btn btn-sm bg-gradient-primary text-sm mr-2',
    //             cancelButton: 'btn btn-sm bg-gradient-danger text-sm'
    //         },
    //         buttonsStyling: false
    //     })
    //     swalconst.fire({
    //         text: text,
    //         icon: "warning",
    //         showCancelButton: true,
    //         confirmButtonText: '<i class="fas fa-check mr-2"></i>Đồng ý',
    //         cancelButtonText: '<i class="fas fa-times mr-2"></i>Hủy',
    //         showClass: {
    //             popup: 'animated zoomIn faster'
    //         },
    //         hideClass: {
    //             popup: 'animated fadeOut faster'
    //         }
    //     }).then((result) => {
    //         if (result.value) {
    //             if (action == "create-seo") seoCreate();
    //             if (action == "push-onesignal") pushOneSignal(value);
    //             if (action == "send-email") sendEmail();
    //             if (action == "delete-filer") deleteFiler(value);
    //             if (action == "delete-all-filer") deleteAllFiler(value);
    //             if (action == "delete-item") deleteItem(value);
    //             if (action == "delete-all") deleteAll(value);
    //         }
    //     })
    // }
    
    // $('body').on('click', '#delete-all', function() {
    //     var url = $(this).data("url");
    //     confirmDialog("delete-all", "Bạn có chắc muốn xóa những mục này ?", url);
    // });


    $('body').on('click', '#selectall-checkbox', function() {
        var parentTable = $(this).parents('table');
        var input = parentTable.find('input.select-checkbox');
        if ($(this).is(':checked')) {
            input.each(function() {
                $(this).prop('checked', true);
            });
        } else {
            input.each(function() {
                $(this).prop('checked', false);
            });
        }
    });
   
</script>
