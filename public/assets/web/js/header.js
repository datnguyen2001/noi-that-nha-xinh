document.addEventListener('DOMContentLoaded', function() {
    var showMenuButton = document.getElementById('showmenu');
    var navigation = document.getElementById('site-navigation');
    var hamburger = document.querySelector('.hamburger');
    var closeMenuButtons = document.querySelectorAll('.menu_close'); // Select all elements with the class 'menu_close'

    showMenuButton.addEventListener('click', function() {
        if (window.innerWidth < 992) {
            hamburger.classList.toggle('is-active');
            navigation.classList.toggle('opened');
            // Append an arrow span to each sub-menu if not already added
            document.querySelectorAll('.sub-menu').forEach(function(subMenu) {
                // Check if the arrow span already exists before the sub-menu
                if (!subMenu.previousElementSibling || !subMenu.previousElementSibling.classList.contains('arrow')) {
                    // Create the arrow span and insert it before the sub-menu
                    var arrowSpan = document.createElement('span');
                    arrowSpan.className = 'arrow';
                    subMenu.parentNode.insertBefore(arrowSpan, subMenu);

                    // Add click event listener to the arrow span
                    arrowSpan.addEventListener('click', function() {
                        var menuItem = subMenu.closest('.menu-item-has-children');
                        if (menuItem) {
                            menuItem.classList.toggle('open');
                        }
                        subMenu.style.display = subMenu.style.display === 'block' ? 'none' : 'block';
                    });
                }
            });
        }
    });

    closeMenuButtons.forEach(function(button) {
        button.addEventListener('click', function() {
            if (window.innerWidth < 992) {
                hamburger.classList.remove('is-active');
                navigation.classList.remove('opened');
            }
        });
    });
});
