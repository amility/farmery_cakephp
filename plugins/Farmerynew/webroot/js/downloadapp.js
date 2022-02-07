// Handles the download app request

$(document).ready(function () {

	// Function to Handle download app submission
	$(document).on("submit", "#download-app-form", function (e) {

		e.preventDefault();

		if ($(this).valid()) {

			// Submit to the backend
			$.ajax({
                method: 'POST',
                url: 'downloadapp',
                data: $('.text-box-phone').val(),
                cache: false,
                
                beforeSend: function(xhr) {
                xhr.setRequestHeader('X-CSRF-Token', csrfToken);
					$('#download-app-submit-btn').attr('disabled', true);
				},

				complete: function () {
					$('#download-app-submit-btn').attr('disabled', false);
					//$(this).reset();
				},

				success: function (result) {
                    var response = jQuery.parseJSON(result);
					var successhtml = '<div class="text-center pt-5 text-smaller text-white"><p class="success">' + response.message + '</p></div>';

					$('form#download-app-form').slideUp('fast', function () {
						$(this).before(successhtml);
					});
				},

				error: function (xhr, status, error) {
					var faliureHtml = '<div class="error text-center text-center pt-5 text-smaller" style=\'margin-bottom: 20px\'>Whoops ! There seems to be a problem right now. Please' +
						' get in touch with us via email at <a class="text-white" href=\'mailto:info@farmery.in\'>info@farmery.in</div>';

					$('form#download-app-form').slideUp('fast', function () {
						$(this).before(faliureHtml);
					});
				}
			});
		}
	});

	// Download app section
	$('.download-app-slides').slick($.fn.getSlickConfig(4));
});
