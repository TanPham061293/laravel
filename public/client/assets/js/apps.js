/* Validation form */
validateForm("validation-newsletter");
validateForm("validation-newsletter-2");
validateForm("validation-cart");
validateForm("validation-user");
// validateForm("validation-contact");
var NN_FRAMEWORK = NN_FRAMEWORK || {};
/* Lazys */
NN_FRAMEWORK.Common = function(){
    $(".content-ck iframe,.content-ck embed").each(function(e,n){$(this).wrap("<div class='video-container'></div>")});
    $(".content-ck table").each(function(e,t){$(this).wrap("<div class='table-responsive'></div>")});  
};
/* Lazys */
// NN_FRAMEWORK.Lazys = function(){
//     if(isExist($(".lazy")))
//     {
//         var lazyLoadInstance = new LazyLoad({
//             elements_selector: ".lazy"
//         });
//     }
// };
// BM_FRAMEWORK.lazyImags = function(name) {
//     window.addEventListener("load", function(event) {
//         $('.lazy').lazy({
//             delay: 5,
            
//         });
//     });
// }
/* Toc */
NN_FRAMEWORK.Toc = function(){
    if(isExist($(".toc-list")))
    {
        $(".toc-list").toc({
            content: "div#toc-content",
            headings: "h2,h3,h4"
        });

        if(!$(".toc-list li").length) $(".meta-toc").hide();

        $('.toc-list').find('a').click(function(){
            var x = $(this).attr('data-rel');
            goToByScroll(x);
        });
    }
};
// BM_FRAMEWORK.Toc = function(){
//     if($(".toc-list").exists())
//     {
//         $(".toc-list").toc({
//             content: "div#toc-content",
//             headings: "h2,h3,h4"
//         });
//         if(!$(".toc-list li").length) $(".meta-toc").hide();
//         $('.toc-list').find('a').click(function(){
//             var x = $(this).attr('data-rel');
//             goToByScroll(x);
//         });
//     }
// };
/* Back to top */
NN_FRAMEWORK.GoTop = function(){
    $(window).scroll(function(){
        if(!$('#back-top').length) $("body").append('<div id="back-top" class="show"><i class="far fa-arrow-alt-circle-up"></i></div>');
        if($(this).scrollTop() > 100) $('#back-top').fadeIn();
        else $('#back-top').fadeOut();
    });

    $('body').on("click","#back-top",function() {
        $('html, body').animate({scrollTop : 0},800);
        return false; 
    });
};

/* Alt images */
NN_FRAMEWORK.AltImg = function(){
    $('img').each(function(index, element) {
        if(!$(this).attr('alt') || $(this).attr('alt')=='')
        {
            $(this).attr('alt',WEBSITE_NAME);
        }
    });
};

/* Menu */
NN_FRAMEWORK.Menu = function(){
    /* Menu remove empty ul */
    if(isExist($('.menu')))
    {
        $('.menu ul li a').each(function(){
            $this = $(this);

            if(!isExist($this.next('ul').find('li')))
            {
                $this.next('ul').remove();
                $this.removeClass('has-child');
            }
        });
    }
    /* Mmenu */
    if(isExist($("nav#menu")))
    {
        $('nav#menu').mmenu({
            "extensions": ["border-full", "position-left", "position-front"]
        });
    }
};

/* Tools */
NN_FRAMEWORK.Tools = function(){
    $(window).resize(function(){
        if ($(window).width() < 1200) {
            if(isExist($(".toolbar")))
            {
                $(".footer").css({marginBottom:$(".toolbar").innerHeight()});
            }
         }
        
    });
    
};

/* Pagings */
NN_FRAMEWORK.Pagings = function(){
   /* Products */
    if(isExist($(".paging-menu")))
    {
        loadPaging("api/menu.php?perpage=8",'.paging-menu');
    }

    /* Categories */
    if(isExist($(".paging-menu-category")))
    {
        $(".paging-menu-category").each(function(){
            var list = $(this).data("list");
            loadPaging("api/menu.php?perpage=8&idList="+list,'.paging-menu-category-'+list);
        })
    }
};
/* Photobox */
NN_FRAMEWORK.Photobox = function(){
    if(isExist($(".album-gallery")))
    {
        $('.album-gallery').photobox('a',{thumbs:true,loop:false});
    }
};

/* Videos */
NN_FRAMEWORK.Videos = function(){

    if(isExist($('[data-fancybox="video"]')))
    {
        $('[data-fancybox="video"]').fancybox({
            transitionEffect: "fade",
            transitionDuration: 800,
            animationEffect: "fade",
            animationDuration: 800,
            arrows: true,
            infobar: false,
            toolbar: true,
            hash: false
        });
    }
};

/* Owl Data */
NN_FRAMEWORK.OwlData = function(obj){
    if(!isExist(obj)) return false;
    var xsm_items = obj.attr("data-xsm-items");
    var sm_items = obj.attr("data-sm-items");
    var md_items = obj.attr("data-md-items");
    var lg_items = obj.attr("data-lg-items");
    var xlg_items = obj.attr("data-xlg-items");
    var rewind = obj.attr("data-rewind");
    var autoplay = obj.attr("data-autoplay");
    var loop = obj.attr("data-loop");
    var lazyLoad = obj.attr("data-lazyload");
    var mouseDrag = obj.attr("data-mousedrag");
    var touchDrag = obj.attr("data-touchdrag");
    var animations = obj.attr("data-animations");
    var smartSpeed = obj.attr("data-smartspeed");
    var autoplaySpeed = obj.attr("data-autoplayspeed");
    var autoplayTimeout = obj.attr("data-autoplaytimeout");
    var dots = obj.attr("data-dots");
    var nav = obj.attr("data-nav");
    var navText = false;
    var navContainer = false;
    var responsive = {};
    var responsiveClass = true;
    var responsiveRefreshRate = 200;

    if(xsm_items != '') { xsm_items = xsm_items.split(":"); }
    if(sm_items != '') { sm_items = sm_items.split(":"); }
    if(md_items != '') { md_items = md_items.split(":"); }
    if(lg_items != '') { lg_items = lg_items.split(":"); }
    if(xlg_items != '') { xlg_items = xlg_items.split(":"); }
    if(rewind == 1) { rewind = true; } else { rewind = false; };
    if(autoplay == 1) { autoplay = true; } else { autoplay = false; };
    if(loop == 1) { loop = true; } else { loop = false; };
    if(lazyLoad == 1) { lazyLoad = true; } else { lazyLoad = false; };
    if(mouseDrag == 1) { mouseDrag = true; } else { mouseDrag = false; };
    if(animations != '') { animations = animations; } else { animations = false; };
    if(smartSpeed > 0) { smartSpeed = Number(smartSpeed); } else { smartSpeed = 800; };
    if(autoplaySpeed > 0) { autoplaySpeed = Number(autoplaySpeed); } else { autoplaySpeed = 800; };
    if(autoplayTimeout > 0) { autoplayTimeout = Number(autoplayTimeout); } else { autoplayTimeout = 5000; };
    if(dots == 1) { dots = true; } else { dots = false; };
    if(nav == 1)
    {
        nav = true;
        navText = obj.attr("data-navtext");
        navContainer = obj.attr("data-navcontainer");

        if(navText != '')
        {
            navText = (navText.indexOf("|") > 0) ? navText.split("|") : navText.split(":");
            navText = [navText[0],navText[1]];
        }

        if(navContainer != '')
        {
            navContainer = navContainer;
        }
    }
    else
    {
        nav = false;
    };

    responsive = {
        0: {
            items: Number(xsm_items[0]),
            margin: Number(xsm_items[1])
        },
        576: {
            items: Number(sm_items[0]),
            margin: Number(sm_items[1])
        },
        768: {
            items: Number(md_items[0]),
            margin: Number(md_items[1])
        },
        992: {
            items: Number(lg_items[0]),
            margin: Number(lg_items[1])
        },
        1200: {
            items: Number(xlg_items[0]),
            margin: Number(xlg_items[1])
        }
    };

    obj.owlCarousel({
        rewind: rewind,
        autoplay: autoplay,
        loop: loop,
        lazyLoad: lazyLoad,
        mouseDrag: mouseDrag,
        touchDrag: touchDrag,
        smartSpeed: smartSpeed,
        autoplaySpeed: autoplaySpeed,
        autoplayTimeout: autoplayTimeout,
        dots: dots,
        nav: nav,
        navText: navText,
        navContainer: navContainer,
        responsiveClass: responsiveClass,
        responsiveRefreshRate: responsiveRefreshRate,
        responsive: responsive
    });

    if(autoplay)
    {
        obj.on("translate.owl.carousel", function(event){
            obj.trigger('stop.owl.autoplay');
        });

        obj.on("translated.owl.carousel", function(event){
            obj.trigger('play.owl.autoplay',[autoplayTimeout]);
        });
    }

    if(animations && isExist(obj.find("[owl-item-animation]")))
    {
        var animation_now = '';
        var animation_count = 0;
        var animations_excuted = [];
        var animations_list = (animations.indexOf(",")) ? animations.split(",") : animations;

        obj.on("changed.owl.carousel", function(event){
            $(this).find(".owl-item.active").find("[owl-item-animation]").removeClass(animation_now);
        });

        obj.on("translate.owl.carousel", function(event){
            var item = event.item.index;

            if(Array.isArray(animations_list))
            {
                var animation_trim = animations_list[animation_count].trim();

                if(!animations_excuted.includes(animation_trim))
                {
                    animation_now = 'animate__animated ' + animation_trim;
                    animations_excuted.push(animation_trim);
                    animation_count++;
                }
                
                if(animations_excuted.length == animations_list.length)
                {
                    animation_count = 0;
                    animations_excuted = [];
                }
            }
            else
            {
                animation_now = 'animate__animated ' + animations_list.trim();
            }
            $(this).find('.owl-item').eq(item).find('[owl-item-animation]').addClass(animation_now);
        });
    }
};

/* Owl Page */
NN_FRAMEWORK.OwlPage = function(){
    if(isExist($(".owl-page")))
    {
        $(".owl-page").each(function(){
            NN_FRAMEWORK.OwlData($(this));
        });
    }
};

/* Dom Change */
NN_FRAMEWORK.DomChange = function(){
    /* Video Fotorama */
    $('#video-fotorama').one('DOMSubtreeModified', function(){
        $("#fotorama-videos").fotorama();
    });

    /* Video Select */
    $('#video-select').one('DOMSubtreeModified', function(){
        $('.listvideos').change(function() 
        {
            var id = $(this).val();
            $.ajax({
                url:'api/video.php',
                type: "POST",
                dataType: 'html',
                data: {
                    id: id
                },
                beforeSend: function(){
                    holdonOpen();
                },
                success: function(result){
                    $('.video-main').html(result);
                    holdonClose();
                }
            });
        });
    });

    /* Chat Facebook */
    // $('#messages-facebook').one('DOMSubtreeModified', function(){
    //     $(".js-facebook-messenger-box").on("click", function(){
    //         $(".js-facebook-messenger-box, .js-facebook-messenger-container").toggleClass("open"), $(".js-facebook-messenger-tooltip").length && $(".js-facebook-messenger-tooltip").toggle()
    //     }), $(".js-facebook-messenger-box").hasClass("cfm") && setTimeout(function(){
    //         $(".js-facebook-messenger-box").addClass("rubberBand animated")
    //     }, 3500), $(".js-facebook-messenger-tooltip").length && ($(".js-facebook-messenger-tooltip").hasClass("fixed") ? $(".js-facebook-messenger-tooltip").show() : $(".js-facebook-messenger-box").on("hover", function(){
    //         $(".js-facebook-messenger-tooltip").show()
    //     }), $(".js-facebook-messenger-close-tooltip").on("click", function(){
    //         $(".js-facebook-messenger-tooltip").addClass("closed")
    //     }));
    //     $(".search_open").click(function(){
    //         $(".search_box_hide").toggleClass('opening');
    //     });
    // });
};

/* Search */
NN_FRAMEWORK.Search = function(){
    if(isExist($("#nutsearch")))
    {
        $("#nutsearch i").click(function(){
           
            if($('._frmTK').hasClass('show'))
            {
                $('._frmTK').removeClass('show');
                $("._box-search").stop(true,true).animate({opacity: "0",width: "0px"}, 200);   
            }
            else
            {
                $('._frmTK').addClass('show');                            
                $("._box-search").stop(true,true).animate({opacity: "1",width: "230px"}, 200);
            }
            // document.getElementById($(this).next().find("input").attr('id')).focus();
            // $('.icon-search i').toggleClass('fa fa-search fa fa-times');
        });
    }
};

/* Fix menu */
NN_FRAMEWORK.FixMenu = function()
{
  $(window).scroll(function(){
      if($(window).scrollTop() >= $('.header1').height() ) 
      { 
          $("._banner").addClass("menu-fix");
          $("._banner").addClass("animate__animated animate__fadeInDown");
          $("._banner > ul").addClass("showopen");
          
      }
      else 
      { 
          $("._banner").removeClass("menu-fix");
          $("._banner").removeClass("animate__animated animate__fadeInDown");
          $("._banner > ul").removeClass("showopen");
      }
      if(isExist($('.menu-res'))){
        if($(window).scrollTop() >= $('.header').height()) 
        { 
            $(".menu-res").addClass("fix");
            $(".menu-res").addClass("animate__animated animate__fadeInDown");
        }
        else 
        { 
            $(".menu-res").removeClass("fix");
            $(".menu-res").removeClass("animate__animated animate__fadeInDown");
        }
      } 
  });
};
NN_FRAMEWORK.ShowVideo = function(){
  $("body").on("click",".item-video",function(){
       var id = $(this).data("id");
       $.ajax({
        url:'api/showvideo.php',
        type: "POST",
        dataType: 'html',
        async: false,
        data: {
            id: id,        
        },
        success: function(result){
            $(".video-center").html(result);
        }
    });
   })
}

NN_FRAMEWORK.Slide = function(){

    if(isExist($(".slick-slider")))
    {
        $('.slick-slider').slick({
        infinite: true,
        speed: 1000,
        arrows: false,
        autoplay: true,
        rows: 1,
        slidesToShow: 2,
        slidesToScroll: 1,
        responsive: [
            {
            breakpoint: 600,
            settings: {
            slidesToShow: 1
            }} ]
        });
    }
    if(isExist($(".slider_banner")))
    {
        $('.slider_banner').slick({
        infinite: true,
        speed: 1000,
        arrows: false,
        autoplay: true,
        rows: 1,
        slidesToShow: 2,
        slidesToScroll: 1,
        responsive: [
            {
            breakpoint: 600,
            settings: {
            slidesToShow: 1
            }} ]
        });
    }
    if(isExist($(".slick-product")))
    {
        $('.slick-product').slick({
        infinite: true,
        autoplayTimeout: 3000,
        speed: 2000,
        arrows: true,
        autoplay: true,
        slidesToShow: 4,
        slidesToScroll: 1,
        nextArrow:'.pro-next',
        prevArrow:'.pro-prev',
        responsive: [
            {
            breakpoint: 765,
            settings: {
            slidesToShow: 3
            }},{
                breakpoint: 440,
                settings: {
                slidesToShow: 2
                }},{
                    breakpoint: 375,
                    settings: {
                    slidesToShow: 1
                    }} ]
        });
    }
    if(isExist($(".slick-tranning")))
    {
        $('.slick-tranning').slick({
        infinite: true,
        speed: 1000,
        dots: true,
        arrows: false,
        autoplay: true,
        slidesToShow: 3,
        slidesToScroll: 1
        });
    }
    if(isExist($(".slick-customer")))
    {
        $('.slick-customer').slick({
        infinite: true,
        speed: 1000,
        dots: false,
        arrows: false,
        autoplay: true,
        slidesToShow: 3,
        slidesToScroll: 1
        });
    }
    if(isExist($(".slick-criterion")))
    {
        $('.slick-criterion').slick({
            infinite: true,
            autoplayTimeout: 3000,
            speed: 1000,
            arrows: false,
            autoplay: true,
            slidesToShow: 4,
            slidesToScroll: 1,
            responsive: [
                {
                breakpoint: 765,
                settings: {
                slidesToShow: 2
                }},{
                    breakpoint: 440,
                    settings: {
                    slidesToShow: 1
                    }} ]
                
        });
    }
    if(isExist($(".slider-nav")))
    {
        $('.slider-nav').slick({
        infinite: true,
        speed: 1000,
        dots: false,
        arrows:true,
        autoplay: false,
        slidesToShow: 6,
        slidesToScroll: 1,
        });
    }
    if(isExist($(".slider-for")))
    {
        $('.slider-for').slick({
        infinite: false,
        speed: 1000,
        dots: false,
        initialSlide:0,
        arrows:false,
        autoplay: false,
        slidesToShow: 1,
        slidesToScroll: 1,
        });
    }
    if(isExist($(".slick-news")))
    {
        $('.slick-news').slick({
        infinite: true,
        speed: 1000,
        dots: false,
        vertical: true,
        verticalSwiping: true,
        arrows: false,
        autoplay: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        arrows:true,
        nextArrow:'.news-next',
        prevArrow:'.news-prev',
        });
    }
}
NN_FRAMEWORK.Carousel = function(){
    if(isExist('.owl-carousel3-brands')){
        $(".owl-carousel3-brands").owlCarousel({
            loop: true,
            dots: false,
            autoplay: true,
            margin: 30,
            items: 3,
            nav: true,
        });
    }
    if(isExist('.owl-carousel4-brands')){
        $(".owl-carousel4-brands").owlCarousel({
            loop: false,
            dots: false,
            autoplay: true,
            margin: 30,
            items: 4,
            nav: true,
        });
    }
    if(isExist('.product-same-brands')){
        $(".product-same-brands").owlCarousel({
            loop: false,
            dots: false,
            autoplay: true,
            margin: 30,
            items: 4,
            nav: true,
        });
    }
    if(isExist('.owl-carousel6')){
        $(".owl-carousel6").owlCarousel({
            loop: false,
            dots: false,
            autoplay: true,
            margin: 10,
            items: 6,
            nav: true,
        });
        // $(".next_tintuc").click(function(){owl_tintuc.trigger('next.owl.carousel');})
        // $(".prev_tintuc").click(function(){owl_tintuc.trigger('prev.owl.carousel');})
    }
    if(isExist('.owl_img_detail')){
        var owl_img_detail = $('.owl_img_detail');
        owl_img_detail.owlCarousel({
            loop:false,
            margin:5,
            nav:false,
            dots:false,
            items:4,
            rewind:true,
            autoplay:true,
            smartSpeed:1000,
            responsive:{
                0:{ items:4 },
                600:{ items:4 },
                900:{ items:4 }
            }     
        });
        $(".next_sub_detail").click(function(){owl_img_detail.trigger('next.owl.carousel');})
        $(".prev_sub_detail").click(function(){owl_img_detail.trigger('prev.owl.carousel');})
    }
}
NN_FRAMEWORK.Aos = function(){
            AOS.init();
};
/* Popup */
NN_FRAMEWORK.Popup = function(){
    if(isExist($("#popup_newsletter")))
    {
        $('#popup_newsletter').modal('show');
    }
};
NN_FRAMEWORK.Tabs = function(){
    if(isExist($(".contain_tab")))
    {
        $(".contain_tab li").click(function(){
            var tabs = $(this).data("tabs");
            $(".contain_tab li, .contain_content_tab div").removeClass("active");
            $(this).addClass("active");
            $("#"+tabs).addClass("active");
        });
    }
};
NN_FRAMEWORK.simplyScroll = function(){
    if(isExist(".list_news_scroll")){
        (function($) {
            $(function() {
                $(".list_news_scroll").simplyScroll({orientation:'vertical',customClass:'vert'});
            });
        })(jQuery);  
    }
}
NN_FRAMEWORK.simplyScroll();
/* Ready */
$(document).ready(function(){
    NN_FRAMEWORK.Common();
    // NN_FRAMEWORK.Lazys();
    NN_FRAMEWORK.Tools();
    NN_FRAMEWORK.AltImg();
    NN_FRAMEWORK.Menu();
    NN_FRAMEWORK.OwlPage();
    NN_FRAMEWORK.Pagings();
    NN_FRAMEWORK.Videos();
    NN_FRAMEWORK.Search();
    NN_FRAMEWORK.Photobox();
    NN_FRAMEWORK.DomChange();
    NN_FRAMEWORK.Toc();
    NN_FRAMEWORK.FixMenu();
    NN_FRAMEWORK.Slide();
    NN_FRAMEWORK.ShowVideo();
    NN_FRAMEWORK.Aos();
    NN_FRAMEWORK.Popup();
    NN_FRAMEWORK.GoTop();
    NN_FRAMEWORK.Tabs();
    NN_FRAMEWORK.Carousel();
    
    $('#menu ul li').hover(
		function(){
			 $(this).children('ul').stop().slideDown();
		},
		function(){
			$(this).children('ul').css({'display':'none'});
		}
	);
    // $("#menu_bootstrap").mmenu({
    //     "extensions": [
    //     "pagedim-black"
    //     ]
    // });
    // var api_mmenu=$("#menu_bootstrap").data('mmenu');
    // api_mmenu.bind('opened', function () {
    //     $('#btn_menu_bootstrap').addClass('move_btn_bootstrap');
    // });
    // api_mmenu.bind('closed', function () {
    //     $('#btn_menu_bootstrap').removeClass('move_btn_bootstrap');
    // });
    wow = new WOW({
        boxClass: 'wow', // default
        animateClass: 'animated', // default
        offset: 100, // default
        mobile: true, // default
        live: true        // default
    });
    wow.init();
});