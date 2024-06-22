// document.addEventListener('DOMContentLoaded', function() {
//     if (window.innerWidth < 992) {
//         document.body.classList.add('show-menu-mobile');
//     }
// });

document.addEventListener('DOMContentLoaded', function() {
    var siteNavigation = document.getElementById('site-navigation');
    var header = document.querySelector('.slogan_block'); // Assuming the header is the first header element on the page

    window.addEventListener('scroll', function() {
        var headerBottom = header.getBoundingClientRect().bottom;

        if (headerBottom <= 0) {
            siteNavigation.classList.add('fixed-header');
        } else {
            siteNavigation.classList.remove('fixed-header');
        }
    });
});
