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

			console.log('galdar here');

			$('.feature-clients-row').owlCarousel({
				items : 6,
				navigation: true,
				navigationText : ['<i class="fa fa-angle-left" aria-hidden="true"></i>', '<i class="fa fa-angle-right" aria-hidden="true"></i>'],
				responsiveClass: false,
				center: true,
				pagination: false,
				responsive: true
			})

		},
	};
})(jQuery);