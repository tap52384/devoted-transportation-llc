// change color on scroll
$(window).scroll(function() {
    var scroll = $(window).scrollTop();
    var topSiteNav = $('#top-site-nav');
    var navHeight = topSiteNav.offsetHeight || 70;

    topSiteNav.removeClass('navbar-hide');
    if (scroll >= navHeight * 2) {
        topSiteNav.addClass('navbar-hide');
    }

    $('#top-site-nav').toggleClass('scrolled', $(this).scrollTop() > 70);
});

// subsitute PNG for logo in footer as needed
$('img.footer-logo, .navbar-brand img').on('error', function() {
    this.onerror=null;
    console.log('SVG error occurred. PNG substitution utilized.');
    this.src='img/logo.png';
});
