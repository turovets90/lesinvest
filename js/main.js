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


    $('.select2').select2({
        minimumResultsForSearch: -1,
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









});





