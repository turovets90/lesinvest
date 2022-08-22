$(document).ready(function(){


    $('.mm_btn').click(function () {
        $('.main_menu').toggleClass('open');
        $('html').toggleClass('page_noscroll');
        $(this).toggleClass('act');

        return false;
    });

    $('.faq_item_header').click(function(){
        $(this).toggleClass('act').next().slideToggle();
    });


    if($(window).innerWidth() < 768){
        $('.main_services_list').slick({
            slidesToShow:1,
            slidesToScroll: 1,
            dots: true,
            arrows: false,
            infinite: false,
            //fade: true,
        });
    }


    $('.main_catalog_list').slick({
        slidesToShow:1,
        slidesToScroll: 1,
        dots: false,
        arrows: true,
        infinite: false,
        speed: 1500,
        //centerMode: true,
        //focusOnSelect: true,
        //centerPadding: "20%"
        fade: true,
    });



    $('.how_doing_slider').slick({
        slidesToShow:1,
        slidesToScroll: 1,
        dots: true,
        arrows: true,
        infinite: false,
        speed: 1500,
        //centerMode: true,
        //focusOnSelect: true,
        //centerPadding: "20%"
        fade: true,
    });

    $('.card_head').click(function(){
        $(this).parent().toggleClass('act');
    });

    $('.production_slider').slick({
        slidesToShow:1,
        slidesToScroll: 1,
        dots: false,
        arrows: true,
        infinite: false,
        //speed: 1500,
        //centerMode: true,
        //focusOnSelect: true,
        //centerPadding: "20%"
        //fade: true,
    });



    $('.select2').select2();



    const video = document.getElementById("video");
    const play_btn = document.getElementById("play_btn");

    function togglePlay() {
        if (video.paused || video.ended) {
            video.play();
        } else {
            video.pause();
        }
    }

    play_btn.addEventListener("click", togglePlay);
    video.addEventListener("playing", function () {
        play_btn.style.opacity = 0;
    });
    video.addEventListener("pause", function () {
        play_btn.style.opacity = 1;
    });








    /*
        $('.slider_txt').mousewheel(function(e) {
            e.preventDefault();

            if (e.deltaY < 0) {
                $('.slider_txt').slick('slickNext');

            } else {
                $('.slider_txt').slick('slickPrev');
            }
        });





        $('.slider_txt').slick({
            slidesToShow:1,
            slidesToScroll: 1,
            dots: true,
            vertical: true,
            verticalSwiping: true,
            arrows: false,
            infinite: false,
            focusOnSelect: true,
            asNavFor: '.slider_image',
            responsive: [
                {
                    breakpoint: 991,
                    settings: {
                        slidesToShow: 1,
                        vertical: false,
                        verticalSwiping: false,
                    }
                },

            ]
        });


        $('.slider_image').slick({
            slidesToShow:1,
            slidesToScroll: 1,
            dots: false,
            arrows: false,
            infinite: false,
            fade: true,
            asNavFor: '.slider_txt',
            responsive: [

                {
                    breakpoint: 991,
                    settings: {
                        slidesToShow: 1
                    }
                },

            ]
        });


        $('.slider_txt1').mousewheel(function(e) {
            e.preventDefault();
            if (e.deltaY < 0) {
                $('.slider_txt1').slick('slickNext');
            } else {
                $('.slider_txt1').slick('slickPrev');
            }
        });


        $('.slider_txt1').slick({
            slidesToShow:1,
            slidesToScroll: 1,
            dots: true,
            vertical: true,
            verticalSwiping: true,
            arrows: false,
            infinite: false,
            focusOnSelect: true,
            responsive: [
                {
                    breakpoint: 991,
                    settings: {
                        slidesToShow: 1,
                        vertical: false,
                        verticalSwiping: false,
                    }
                },

            ]
        });



        $(window).resize(function(){
            var header_height = $('header').outerHeight();
            $('#page').css({
                'padding-top':header_height+'px'
            });
            $(window).scroll(function(){
                if ($(this).scrollTop() > header_height) {
                    $('header').addClass('fixed');
                }else {
                    $('header').removeClass('fixed');
                }
            });
        });
        $(window).resize();


        $('.anchor, .menu a[href^="#"], .footer_menu a[href^="#"]').click(function(e){
            e.preventDefault();
            var target=$(this).attr('href');
            $('html, body').animate({
                scrollTop: $(target).offset().top
            }, 1500);
            if($(window).innerWidth()< 768){
                $('.mm_menu').removeClass('open');
                $('html').removeClass('page-noscroll');
            }
        });


        $('.modal_toggle').click(function(){
            var target=$(this).attr('href');
            $(target).addClass('show');
            $("html").addClass('page_noscroll');

            $('.modal_close').click(function(){
                $(this).closest('.modal').removeClass('show');
                $("html").removeClass('page_noscroll');
            });
            return false;
        });

        $(document).click(function (e){
            if (!$(e.target).closest(".modal_content").length) {
                $(".modal.show").removeClass('show');
                $("html").removeClass('page_noscroll');
            }
            e.stopPropagation();

        });


        $(function () {
            $('.form_control').each(function () {
                $(this).focus(function () {
                    $(this).closest('.field').addClass('not_empty');
                });
                $(this).blur(function(){
                    if(!this.value){
                        $(this).closest('.field').removeClass('not_empty');
                    }
                    else{
                        $(this).closest('.field').addClass('not_empty');
                    }
                });
                if ( !this.value ) {
                    $(this).closest('.field').removeClass('not_empty');
                }
                else{
                    $(this).closest('.field').addClass('not_empty');
                }
            });
        });



        document.addEventListener( 'wpcf7mailsent', function( event ) {
            if(event.detail.contactFormId=="9"){
                $('#pre_order_modal').removeClass('show');
                $('#thanks_modal').addClass('show');
                setTimeout(function () {
                    $('#thanks_modal').fadeOut(800);

                }, 5000);

            }else if(event.detail.contactFormId=="155"){
                $('#faq_modal').removeClass('show');
                $('#thanks_modal').addClass('show');
                setTimeout(function () {
                    $('#thanks_modal').fadeOut(800);

                }, 5000);
            }
        }, false );

        $('.wpcf7 .btn_default').attr('disabled',true);


        var agree=$('#agree');
        $(agree).on('change',function(){
            if(agree.prop('checked')){
                $('#wpcf7-f9-o1 .btn_default').attr('disabled',false);
            }else{
                $('#wpcf7-f9-o1 .btn_default').attr('disabled',true);
            }
        });

        var agree1=$('#agree1');
        $(agree1).on('change',function(){
            if(agree1.prop('checked')){
                $('#wpcf7-f155-o2 .btn_default').attr('disabled',false);
            }else{
                $('#wpcf7-f155-o2 .btn_default').attr('disabled',true);
            }
        });



        const video = document.getElementById("video");
        const play_btn = document.getElementById("play_btn");

        function togglePlay() {
            if (video.paused || video.ended) {
                video.play();
            } else {
                video.pause();
            }
        }

        play_btn.addEventListener("click", togglePlay);
        video.addEventListener("playing", function () {
            play_btn.style.opacity = 0;
        });
        video.addEventListener("pause", function () {
            play_btn.style.opacity = 1;
        });



        $('.reviews_list').slick({
            slidesToShow:3,
            slidesToScroll: 1,
            dots: true,
            arrows: false,
            responsive: [
                {
                    breakpoint: 1200,
                    settings: {
                        slidesToShow: 2,
                    }
                },
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 1,
                    }
                },

            ]
        });



        if($(window).innerWidth() > 991){
            var header_height = $('header').outerHeight();

            $(function () {

                var a = document.querySelector('.sticky_title1'), b = null, P = header_height+40;
                window.addEventListener('scroll', Ascroll, false);
                document.body.addEventListener('scroll', Ascroll, false);
                function Ascroll() {
                    if (b == null) {
                        var Sa = getComputedStyle(a, ''), s = '';
                        for (var i = 0; i < Sa.length; i++) {
                            if (Sa[i].indexOf('overflow') == 0 || Sa[i].indexOf('padding') == 0 || Sa[i].indexOf('border') == 0 || Sa[i].indexOf('outline') == 0 || Sa[i].indexOf('box-shadow') == 0 || Sa[i].indexOf('background') == 0) {
                                s += Sa[i] + ': ' +Sa.getPropertyValue(Sa[i]) + '; '
                            }
                        }
                        b = document.createElement('div');
                        //b.style.cssText = s + ' box-sizing: border-box; width: ' + a.offsetWidth + 'px;';
                        a.insertBefore(b, a.firstChild);
                        var l = a.childNodes.length;
                        for (var i = 1; i < l; i++) {
                            b.appendChild(a.childNodes[1]);
                        }
                        a.style.height = b.getBoundingClientRect().height + 'px';
                        a.style.padding = '0';
                        a.style.border = '0';
                    }
                    var Ra = a.getBoundingClientRect(),
                        R = Math.round(Ra.top + b.getBoundingClientRect().height - document.querySelector('.end_sticky').getBoundingClientRect().top + 0);
                    if ((Ra.top - P) <= 0) {
                        if ((Ra.top - P) <= R) {
                            b.className = 'stop';
                            b.style.top = - R +'px';
                        } else {
                            b.className = 'sticky';
                            b.style.top = P + 'px';
                        }
                    } else {
                        b.className = '';
                        b.style.top = '';
                    }
                    window.addEventListener('resize', function() {
                        a.children[0].style.width = getComputedStyle(a, '').width
                    }, false);
                }

            });


            $(function () {

                var a = document.querySelector('.sticky_title2'), b = null, P = header_height+40;
                window.addEventListener('scroll', Ascroll, false);
                document.body.addEventListener('scroll', Ascroll, false);
                function Ascroll() {
                    if (b == null) {
                        var Sa = getComputedStyle(a, ''), s = '';
                        for (var i = 0; i < Sa.length; i++) {
                            if (Sa[i].indexOf('overflow') == 0 || Sa[i].indexOf('padding') == 0 || Sa[i].indexOf('border') == 0 || Sa[i].indexOf('outline') == 0 || Sa[i].indexOf('box-shadow') == 0 || Sa[i].indexOf('background') == 0) {
                                s += Sa[i] + ': ' +Sa.getPropertyValue(Sa[i]) + '; '
                            }
                        }
                        b = document.createElement('div');
                        //b.style.cssText = s + ' box-sizing: border-box; width: ' + a.offsetWidth + 'px;';
                        a.insertBefore(b, a.firstChild);
                        var l = a.childNodes.length;
                        for (var i = 1; i < l; i++) {
                            b.appendChild(a.childNodes[1]);
                        }
                        a.style.height = b.getBoundingClientRect().height + 'px';
                        a.style.padding = '0';
                        a.style.border = '0';
                    }
                    var Ra = a.getBoundingClientRect(),
                        R = Math.round(Ra.top + b.getBoundingClientRect().height - document.querySelector('.prices').getBoundingClientRect().top + 0);
                    if ((Ra.top - P) <= 0) {
                        if ((Ra.top - P) <= R) {
                            b.className = 'stop';
                            b.style.top = - R +'px';
                        } else {
                            b.className = 'sticky';
                            b.style.top = P + 'px';
                        }
                    } else {
                        b.className = '';
                        b.style.top = '';
                    }
                    window.addEventListener('resize', function() {
                        a.children[0].style.width = getComputedStyle(a, '').width
                    }, false);
                }

            });



        }



        $('.review_body .txt').each(function(){
            if ($(this).text().length > 410) {
                $(this).closest('.review_item').addClass("hide");
            }
        });

        $('.read_more').click(function(){
            $(this).closest('.review_item').removeClass('hide');
        });


         */



});





