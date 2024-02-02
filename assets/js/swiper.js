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
				navigation: {
					nextEl: '.swiper-button-next-1',
					prevEl: '.swiper-button-prev-1',
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
				navigation: {
					nextEl: '.swiper-button-next-2',
					prevEl: '.swiper-button-prev-2',
				},
			});
		}

		if (document.body.classList.contains("page-template-page-restaurant")) {
			var restaurantSwiper1 = new Swiper(".restaurant-swiper1", {
				lazy: true,
				slidesPerView: 1,
				spaceBetween: 0,
				speed: 1000,
				loop: true,
				effect: "slide",
				direction: 'horizontal',
				navigation: {
					nextEl: '.swiper-button-next-1',
					prevEl: '.swiper-button-prev-1',
				},
			});
			var restaurantSwiper2 = new Swiper(".restaurant-swiper2", {
				lazy: true,
				slidesPerView: 1,
				spaceBetween: 0,
				speed: 1000,
				loop: true,
				effect: "slide",
				direction: 'horizontal',
				navigation: {
					nextEl: '.swiper-button-next-2',
					prevEl: '.swiper-button-prev-2',
				},
			});
			
			var restaurantSwiper3 = new Swiper(".restaurant-swiper3", {
				lazy: true,
				slidesPerView: 1,
				spaceBetween: 0,
				speed: 1000,
				loop: true,
				effect: "slide",
				direction: 'horizontal',
				navigation: {
					nextEl: '.swiper-button-next-3',
					prevEl: '.swiper-button-prev-3',
				},
			});
			
		}

		if (document.body.classList.contains("single-zimmer")) {
			var roomSwiper = new Swiper(".room-swiper", {
				lazy: true,
				slidesPerView: 1,
				spaceBetween: 0,
				speed: 1000,
				loop: true,
				effect: "fade",
				autoplay: {
					delay: 4500,
					disableOnInteraction: false,
				},
				thumbs: {
					swiper: {
						el: ".room-swiper-thumbnails",
						spaceBetween: 10,
						centeredSlides: false,
						slideToClickedSlide: true,
						loop: false,
					},
				},
			});
		}

		if (document.body.classList.contains("page-template-page-zermatt")) {
			var activitiesSwiper = new Swiper(".activities-swiper", {
				lazy: true,
				slidesPerView: 1,
				breakpoints: {
					768: {
						slidesPerView: 1.7,
					},
					1024: {
						slidesPerView: 1.7,
					},
				},
    			centeredSlides: true,
				spaceBetween: 100,
				speed: 1000,
				loop: true,
				effect: "slide",
				direction: 'horizontal',
				navigation: {
					nextEl: '.swiper-button-next',
					prevEl: '.swiper-button-prev',
				},
			});
		}

	}, false);
});