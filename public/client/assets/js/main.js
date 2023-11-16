
function buyNow(href, id) {
    var parent = document.getElementById('qtySelector');
    var qty = $(parent).find('input#qty').val()
    return document.location = href + '?id=' + id + '&qty=' + qty;
}

function viewCart() {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({
        url: '/xem-gio-hang',
        type: "POST",
    }).done(function (data) {
        //alert(data);
        if (Array.isArray(data)) {
            console.log('ok');
        }

    });
}

function addCart_Qty(href, id = 0) {
    var value = parseInt($('#qty').val());
    var id = id;
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({
        url: '/them-gio-hang',
        type: 'POST',
        data: {
            id: id,
            qty: value,
        }
    }).done(function (data) {
        alert(data);
        $('._cartheader').load(' ._cartheader');
    });
}

function cartRemove(id) {
    $conform = confirm('Bạn có chắc xoá sản phẩm khỏi giỏ hàng?')
    if ($conform) {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            url: '/xoa-gio-hang',
            type: "POST",
            data: {
                id: id
            }
        }).done(function (data) {
            $('._load').load(' ._load');
            $('._cartheader').load(' ._cartheader');
            alert(data);
        });
    }
   
}

function cartChange(qty, changeQty, id) {
    if (changeQty <= 0) {
        alert('Số lượng mua phải lớn hơn 0.')
        return false;
    }

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({
        url: '/mua-hang',
        type: "POST",
        data: {
            'qty': changeQty,
            'id': id
        }
    }).done(function (data) {
        $('._load').load(' ._load');

    });

}

$(document).on('click', '.bootstrap-touchspin-down', function () {
    var value = parseInt($('#qty').val());
    value = value - 1;
    var href = location.href;
    if (value <= 0)
        return false;
    if (href.includes('id')) {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            url: '/mua-hang',
            type: "POST",
            data: {
                'qty': value,
                'href': href
            }
        }).done(function (data) {
            $('#total_tt').html('<strong>' + data + '</strong>');
            $('#totalQty').html(value);
            $('#totalM').html('<strong>' + data + ' vnđ</strong>');
        });
    }
    $('#qty').val(value);
    return false;
})
$(document).on('click', '.bootstrap-touchspin-up', function () {
    var value = parseInt($('#qty').val());
    value = value + 1;
    var href = location.href;
    if (value <= 0)
        return false;
    if (href.includes('id')) {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            url: '/mua-hang',
            type: "POST",
            data: {
                'qty': value,
                'href': href
            }
        }).done(function (data) {
            $('#total_tt').html('<strong>' + data + '</strong>');
            $('#totalQty').html(value);
            $('#totalM').html('<strong>' + data + ' vnđ</strong>');
        });
    }
    $('#qty').val(value);
    return false;
})
function congContentProduct() {
    $('._box-des-prditail').attr('style', 'overflow: unset;max-height: none;');
    $(".xemthemProducts").html('<a onclick="truContentProduct()" class="tru">Thu gọn<i class="fas fa-sort-up"></i></a>');
}
function truContentProduct() {
    $('._box-des-prditail').attr('style', 'overflow: hidden;max-height: 100px;');
    $(".xemthemProducts").html('<a onclick="congContentProduct()" class="cong">Xem thêm...</a>');
}

function showCart() {
    $('._cart-info').slideToggle('slow');
}

function showTk() {
    $('._box-search').slideToggle('slow');
}
jQuery(document).ready(function () {
    jQuery('#sendnewsletter').on('click', function () {
        var newsLetter = $('#email').val();
        var fullname = $('#fullname').val();
        var phone = $('#phone').val();
        var contactdk = $('#contactdk').val();

        if (newsLetter != 0 && fullname != "" && phone != "") {
            if (isValidEmailAddress(newsLetter)) {
                emailNewsLetter(newsLetter, fullname, contactdk, phone);
                return false;
            } else {
                alert("Email không hợp lệ.");
                jQuery('#email').focus();
                return false;
            }
        }
        if (fullname == "") {
            alert("Vui lòng nhập họ tên");
            jQuery('#email').focus();
            return false;
        } else if (phone == "") {
            alert("Vui lòng nhập số điện thoại");
            jQuery('#email').focus();
            return false;
        } else {
            alert("Vui lòng nhập địa chỉ email");
            jQuery('#email').focus();
            return false;
        }
    });
});
// function emailNewsLetter(newsLetter, fullname, contactdk, phone) {
//     jQuery.ajax({
//         url: "site/dangky.html",
//         type: "POST",
//         data: {
//             newsLetter: newsLetter,
//             fullname: fullname,
//             contactdk: contactdk,
//             phone: phone,
//         }
//     }).done(function (data) {
//         location.reload();
//     });
// }

function isValidEmailAddress(emailAddress) {
    var pattern = new RegExp(/^(("[\w-\s]+")|([\w-]+(?:\.[\w-]+)*)|("[\w-\s]+")([\w-]+(?:\.[\w-]+)*))(@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][0-9]\.|1[0-9]{2}\.|[0-9]{1,2}\.))((25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\.){2}(25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\]?$)/i);
    return pattern.test(emailAddress);
}
