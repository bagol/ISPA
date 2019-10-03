$(document).ready(function () {
	$('.carousel-item:first').addClass("active");
	let a = $('.carousel')
	a.carousel({
		interval: 5000
	});
});
