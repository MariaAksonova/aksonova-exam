$(document).ready(function(){
	$('.clients-slider').slick({
	        infinite: true,
	        slidesToShow: 4,
	        slidesToScroll: 4,
	        autoplay: true,
	        arrows: false,
	        dots: false,
	        responsive: [
	            {
	                breakpoint: 1000,
	                settings: {
	                    slidesToShow: 3,
	                    slidesToScroll: 2,
	                    infinite: true,
	                    dots: true
	                }
	            },
	            {
	                breakpoint: 600,
	                settings: {
	                    slidesToShow: 2,
	                    slidesToScroll: 1
	                }
	            },
	            {
	                breakpoint: 480,
	                settings: {
	                    slidesToShow: 1,
	                    slidesToScroll: 1
	                }
	            }
	        ]
	});
});