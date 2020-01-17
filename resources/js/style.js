// change color on scroll
$(window).scroll(function() {
    $('#top-site-nav').toggleClass('scrolled', $(this).scrollTop() > 70);
})
