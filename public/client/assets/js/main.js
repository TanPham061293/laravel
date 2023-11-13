
function buyNow(id, qty) {
    var url = '/cart/buynow.html';
    $.ajax({
        url: url,
        type: "POST",
        data: {
            id: id,
            qty: qty
        }
    });
}

function buyNow_Qty(id) {
    var qty = $('#qty').val();
    var url = '/cart/buynow.html';
    $.ajax({
        url: url,
        type: "POST",
        data: {
            id: id,
            qty: qty
        }
    });
}

function addCart_Qty(id = 0) {
    var qty = $('#qty').val();
    var url = 'ajax/addcart.php';
    $.ajax({
        url: url,
        type: "POST",
        data: {
            id: id,
            qty: qty
        }
    }).done(function (data) {
        $('._load').load(' ._load');
        $('._count').load(' ._count');
        $('#cartResult').empty().html(data);
        $('#myCart').modal();
        //console.log(data);
    });
}

function cartRemove(id) {
    var url = 'ajax/removecart.php';
    $.ajax({
        url: url,
        type: "POST",
        data: {
            id: id
        }
    }).done(function (data) {
        $('._count').load(' ._count');
        $('._load').load(' ._load');
        $('#cartResult').empty().html(data);
        $('#myCart').modal('show');
    });
}

function cartChange(id, qty) {
    var url = 'ajax/changecart.php';
    $.ajax({
        url: url,
        type: "POST",
        data: {
            id: id,
            qty: qty
        }
    }).done(function (data) {
        $('._count').load(' ._count');
        $('._load').load(' ._load');
        $('#cartResult').empty().html(data);
        $('#myCart').modal('show');
    });
}

$(document).on('click', '.bootstrap-touchspin-down', function () {
    var value = parseInt($('#qty').val());
    value = value - 1;
    if (value <= 0)
        return false;
    $('#qty').val(value);
    return false;
})
$(document).on('click', '.bootstrap-touchspin-up', function () {
    var value = parseInt($('#qty').val());
    value = value + 1;
    if (value <= 0)
        return false;
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
  
        if (newsLetter != 0 && fullname != ""  && phone != "")
        {
            if (isValidEmailAddress(newsLetter))
            {
                emailNewsLetter(newsLetter, fullname, contactdk, phone);
                return false;
            } else {
                alert("Email không hợp lệ.");
                jQuery('#email').focus();
                return false;
            }
        }
        if (fullname == "")
        {
            alert("Vui lòng nhập họ tên");
            jQuery('#email').focus();
            return false;
        } else if (phone == "")
        {
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
