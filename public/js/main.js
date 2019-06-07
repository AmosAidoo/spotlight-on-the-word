$(function(){
    var navigationBar = $('.navbar');
    var win = $(window);
    var header = $('header');
    var logoContainer = $('header > div');
    var pagination = $('.pagination');
    pagination.addClass('justify-content-center');
    // $(window).scroll(function(){
    //     if (win.scrollTop() > navigationBar.offset().top) {
    //         logoContainer.addClass('d-none');
    //         header.addClass('fixed-top');
    //     } else {
    //         //console.log("Entered");
    //         logoContainer.addClass('d-block');
    //         header.removeClass('fixed-top');
    //     }
    // });
});