// change color on scroll
$(window).scroll(function() {
    $('#top-site-nav').toggleClass('scrolled', $(this).scrollTop() > 70);
});

// subsitute PNG for logo in footer as needed
$('img.footer-logo, .navbar-brand img').on('error', function() {
    this.onerror=null;
    console.log('SVG error occurred.');
    this.src='img/logo.png';
});
