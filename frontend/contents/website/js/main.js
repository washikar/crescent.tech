$(function () {
    "use strict";
     $('#memberModal').modal('show');
    //slick js for blog
    $('#faqs .faqs_content .panel h4 a').click(function() {
        $('#faqs .faqs_content .panel h4 a').removeClass('active');
        $(this).addClass('active');
    });
    // js activation for banner
    
//    $('.main_banner_slick').slick({
//        infinite: true,
//        autoplay: true,
//        arrows: false,
//        dots: false,
//        speed: 300,
//        slidesToShow: 1,
//        slidesToScroll: 1,
//        
//        responsive: [
//            {
//                breakpoint: 1024,
//                settings: {
//                    slidesToShow: 1,
//                    slidesToScroll: 1,
//                    infinite: true,
//                   
//                }
//    },
//            {
//                breakpoint: 600,
//                settings: {
//                    
//                    unslick:true,
//                    
//                   
//                }
//    },
//            {
//                breakpoint: 480,
//                settings: {
//                
//                    
//                    unslick:true,
//                },
//                breakpoint: 360,
//                settings: {
//                    slidesToShow:0,
//                    
//                    unslick:true,
//                }
//    }
//  ]
//    });
    
    $('.blog_slick').slick({
        infinite: true,
        autoplay: true,
        arrows: false,
        dots: false,
        speed: 300,
        slidesToShow: 3,
        slidesToScroll: 1,
        
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                    infinite: true,
                   
                }
    },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1
                }
    },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
    }
  ]
    });
    $('.review_slick').slick({
        infinite: true,
        autoplay: false,
        arrows: false,
        dots: false,
        speed: 300,
        slidesToShow: 2,
        slidesToScroll: 1,
        
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                    infinite: true,
                   
                }
    },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1
                }
    },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
    }
  ]
    });
    // testimonial js
    //
    $('.testimonial-details').slick({
			  slidesToShow: 1,
			  slidesToScroll: 1,
			  arrows: false,
			  fade: true,
			  asNavFor: '.testimonial-slider-img',	

			  responsive: [
			{
			  breakpoint: 991,
				settings: {
				slidesToShow: 1,
				slidesToScroll: 1,
			  }
			},
			  {
			  breakpoint: 767,
				  vertical: false,
				  horizontal:true,
				settings: {
				slidesToShow: 1,
				slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed:2000,
                pauseOnHover:true,
			  }
			}
		  ]
		});

    $('.testimonial-slider-img').slick({
			  slidesToShow: 3,
			  slidesToScroll: 1,
			  asNavFor: '.testimonial-details',
			  dots: false,
			  arrows: true,
			  prevArrow:'<i class="fa fa fa-chevron-up slidPrv4"></i>',
			  nextArrow: '<i class="fa fa-chevron-down slidNext4"></i>',
			  vertical: true,
            
//			  verticalSwiping: true,
			  centerPadding: '0',
			  centerMode: true,
			  focusOnSelect: true,

			  responsive: [
			
			{
			  breakpoint: 992,
				settings: {
				slidesToShow: 3,
			  }
			},
			{
			  breakpoint: 768,
				settings: {
				vertical: false,
				slidesToShow: 3,
				slidesToScroll: 1
			  }
			},
		  ]
					
		});	
    
    // variable for all selector
    var html_body = $('html, body');
    var $window = $(window);
    var $sOfset = 500;
    var totop = $('.totop');
    
    
    // for back to top button
    $('.totop').on('click', function () {
        html_body.animate({
            scrollTop: 0
        }, 500);
    });
    	
    //scrolling function
    $window.on('scroll', function () {

        var $scrolling = $(this).scrollTop();

        if ($scrolling > $sOfset) {
            totop.fadeIn();
        } else {
            totop.fadeOut();
        }  
    });
    $(window).on('load', function () {
        
        // preloader 
        var preloaderID = $('#main-preloader');
        preloaderID.addClass('ani_1');
        setTimeout(function () {

            $('.main-navbar-top').addClass('main-navbar-top-active');
            preloaderID.fadeOut(800);

        }, 1000);
    });
    
    //google map
    
});