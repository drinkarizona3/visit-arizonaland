/*
 * b4st JS
 */

(function ($) {

	'use strict';

	$(document).ready(function() {

		// Comments

		$('.commentlist li').addClass('card mb-3');
		$('.comment-reply-link').addClass('btn btn-secondary');

		// Forms

		$('select, input[type=text], input[type=email], input[type=password], textarea').addClass('form-control');
		$('input[type=submit]').addClass('btn btn-primary');

		// Pagination fix for ellipsis

		$('.pagination .dots').addClass('page-link').parent().addClass('disabled');

		// You can put your own code in here

		const blogPosts = $('.az-blog-posts');

		blogPosts.owlCarousel({
				center: true,
				items:2,
				loop:true,
				autoplay:true,
				autoplayTimeout:5000,
				autoplayHoverPause:false,
				margin:20,
				nav: false,
				dots: false,
				mouseDrag: true,
				touchDrag: true,
				responsive:{
						768:{
								items:3,
								center: false,
								loop: false,
								touchDrag: (blogPosts.find('.az-blog-post').length > 3) ? true : false,
								mouseDrag: (blogPosts.find('.az-blog-post').length > 3) ? true : false
						}
				}
		});

		$('.az-slideshow').owlCarousel({
			items: 1,
			loop: true,
			nav: false,
			dots: false,
			lazyLoad: true,
			animateOut: 'fadeOut',
			autoplay:true,
			autoplayTimeout:3500
		});

	});

}(jQuery));
