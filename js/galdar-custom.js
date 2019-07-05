(function ($) {
	$(document).ready(function () {
		app.init();
	});

	var app = {
		init: function () {

			$("#load-more-works-cpt").on('click', function (e) {
				e.preventDefault();

				var indexOffset = $('.works-cpt-area').attr('data-index');

				$.ajax({
					url: gs.ajaxurl,
					data: {
						action: 'load_more_works_cpt',
						index_offset: indexOffset,
					},
					type: 'POST',
					beforeSend: function () {
						$("#load-more-works-cpt").text('Carregando');
					},
					success: function (res) {
						// console.log( res );
						$('.works-cpt-area').append(res.data.posts);
						$('.works-cpt-area').attr('data-index', parseInt(indexOffset) + res.data.offset);

						if (res.data.ended) {
							$("#load-more-works-cpt").hide();
						}

						$("#load-more-works-cpt").text('Carregar mais');
					},
					error: function (jqXHR, textStatus, errorThrown) {
						console.error(jqXHR, textStatus, errorThrown);
						// $('#support-form .alert-success').removeClass('d-none').text(errorThrown);
					}
				});

			});

			$('.feature-clients-row').owlCarousel({
				items : 6,
				navigation: true,
				navigationText : ['<i class="fa fa-angle-left" aria-hidden="true"></i>', '<i class="fa fa-angle-right" aria-hidden="true"></i>'],
				responsiveClass: false,
				center: true,
				pagination: false,
				responsive: true
			});

			if( $(window).width() < 1024 ){
				$('.videos-mobile').owlCarousel({
					items : 1,
					itemsDesktop : 1,
					itemsDesktopSmall : 1,
					itemsTablet : 1,
					itemsTabletSmall : 1,
					pagination: true
				});

				$('.articles-mobile').owlCarousel({
					items : 1,
					itemsDesktop : 1,
					itemsDesktopSmall : 1,
					itemsTablet : 1,
					itemsTabletSmall : 1,
					pagination: true,
				});

				$('.obras-mobile').owlCarousel({
					items : 2,
					itemsDesktop : 2,
					itemsDesktopSmall : 2,
					itemsTablet : 2,
					itemsTabletSmall : 2,
					pagination: true,
				});
			}

		},
	};
})(jQuery);