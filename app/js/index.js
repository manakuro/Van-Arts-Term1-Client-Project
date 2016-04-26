var $ = require('jquery');
require('fancybox')($);

ThinkW = {};

$(function(){

    /* --------------------
        Animation
    -------------------- */

    /**
     *  animateScroll
     *
     *  @method  
     *  @param  _options
     *  @return  
     */
    ThinkW.animateScroll = function(_options) {

        var options = _options || {},
            list = options.list || ".scroll-list";

        $(window).scroll(function(){

            var window_height = $(window).height(),
                top_window = $(window).scrollTop();
            
            $(list).each(function(){

                var target_position = $(this).offset().top,
                    animation = $(this).data("animation"),
                    animation_delay = $(this).data("animation_delay");

                if (top_window > target_position - window_height + 100) {

                    $(this)
                        .addClass(animation)
                        .css({
                            "visibility": "visible",
                            "animation-delay": animation_delay,
                        });
                }
            });

        });

    };

    // scroll down
    $(".scroll_down").click(function(e){

        var scroll_to = $(this).data("scroll_to");

        $("html,body").animate({
            scrollTop: $(scroll_to).position().top
        }, 1000);

    });



    // initialize
    (function init() {

        var $fbox = $(".fbox"),
            $header = $(".page-header");

        if ($fbox.length !== 0) {

            $fbox.fancybox({
                beforeLoad: function() {
                    $header.hide();
                },
                beforeClose: function() {
                    console.log("beforeClose");
                    $header.fadeIn("600");
                },
                scrolling: "no",
                helpers: {
                    overlay : {
                        css : {
                            "background" : "rgba(58, 42, 45, 0.8)"
                        }
                    }
                }
            });   
        }

        /*-- Header --*/
        $(".js-menu-icon").click(function(){
            $header.toggleClass("show");
        });

        // Navigation bar
        $(window).scroll(function(){

            var mainPosi = $(".page-main").offset().top,
                top_window = $(window).scrollTop();

            if (top_window > mainPosi) {
                $(".page-header").addClass("darker");
            } if (top_window < mainPosi) {
                $(".page-header").removeClass("darker");
            }

        });


        // Aniamtion scroll
        ThinkW.animateScroll();

    }());

});