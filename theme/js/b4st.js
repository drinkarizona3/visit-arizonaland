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

		console.log(blogPosts.length)

		blogPosts.owlCarousel({
				center: true,
				items:2,
				loop:true,
				margin:10,
				nav: false,
				dots: false,
				mouseDrag: true,
				touchDrag: true,
				responsive:{
						768:{
								items:3,
								center: false,
								loop: false,
								touchDrag: false,
								mouseDrag: false
						}
				}
		});

	});

}(jQuery));
