import Swiper from 'swiper/bundle';
// wait until DOM is ready
document.addEventListener("DOMContentLoaded", () => {
	//wait until images, links, fonts, stylesheets, and js is loaded
	window.addEventListener("load", () => {
		if (document.body.classList.contains("page-template-page-home")) {
			var heroSwiper = new Swiper(".hero-swiper", {
				lazy: true,
				slidesPerView: 1,
				spaceBetween: 0,
				speed: 1000,
				loop: true,
				effect: "slide",
    			direction: 'horizontal',
				autoplay: {
					delay: 4500,
					disableOnInteraction: false,
				},
			});
			var eventsSwiper = new Swiper(".events-swiper", {
				lazy: true,
				slidesPerView: 1,
				spaceBetween: 0,
				speed: 1000,
				loop: true,
				effect: "slide",
    			direction: 'horizontal',
				autoplay: {
					delay: 4500,
					disableOnInteraction: false,
				},
			});
		}

	}, false);
});