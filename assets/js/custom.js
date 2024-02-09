// wait until DOM is ready
document.addEventListener("DOMContentLoaded", () => {
    window.addEventListener('scroll', function() {
        var header = document.getElementById('header-main');
        if (window.scrollY > 100) { // Adjust this value to the scroll position where you want the class to disappear
            header.classList.remove('header-mask');
            document.getElementById('menu-container').classList.remove('xl:pb-14');
        } else {
            header.classList.add('header-mask');
            document.getElementById('menu-container').classList.add('xl:pb-14');
        }
    });
	//wait until images, links, fonts, stylesheets, and js is loaded
	const mobileMenuToggle = document.getElementById("mobile-menu-toggle");
    const mobileMenu = document.querySelector(".mobile-menu");
    const menuIconImg = document.getElementById("menu-icon-img");
    const scrollDiv = document.getElementById('scrollDiv');

    mobileMenuToggle.addEventListener("click", function () {
        if (mobileMenu.classList.contains("active")) {
            mobileMenu.style.opacity = "0"; // Hide the menu
            setTimeout(function () {
                mobileMenu.classList.remove("active");
                menuIconImg.src = "/wp-content/themes/aristella-zermatt/assets/images/burger-menu.svg"; // Change image source back to burger-menu.svg
            }, 300); // After the opacity transition duration
        } else {
            mobileMenu.classList.add("active");
            menuIconImg.src = "/wp-content/themes/aristella-zermatt/assets/images/burger-menu.svg"; // Change image source to burger-menu-close.svg
            setTimeout(function () {
                mobileMenu.style.opacity = "1"; // Show the menu
            }, 0); // Immediately after adding the "active" class
        }
    });
});
