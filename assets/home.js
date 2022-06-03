const $ = require('jquery');

import slick from 'slick-carousel';

$(document).ready(function(){
    $('.home-carousel').slick({
        dots: true,
        vertical: true,
        verticalSwiping: true,
    });
});

$(function() {
    const slider = $(".slick-slider");
    slider;

    slider.on("wheel", function (e) {
        e.preventDefault();

        if (e.originalEvent.deltaY < 0) {
            $(this).slick("slickNext");
        } else {
            $(this).slick("slickPrev");
        }
    })
})