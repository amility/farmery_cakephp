$(document).ready(function () {

	$('.category-card').mouseenter(function () {
		$('.category-card').not($(this)).removeClass('active');
		$(this).addClass('active'); // item class to the current one

	}).mouseleave(function () {
		$('.category-card[data-is-active|="true"]').addClass('active');
		$(this).removeClass('active');
	});

	// Display the list of products to choose from to start the trial
	$('.start-trial').click(function (e) {

		e.preventDefault();

		$.ajax({
			url: '/subscription/trial',
			method: 'GET',
			success: function (response) {
				$('#modal-content').html(response);

				$('#bookTrialModal').modal('show');
				$('#bookTrialModal').on('shown.bs.modal', function (e) {
					$('#trial-products-carousal').slick($.fn.getSlickConfig(3)).removeClass('d-none');
				});
			},
			error: function (xhr, status, error) {
				if (xhr.status === 401) {
					$.fn.login()
				}
			}
		});
	});

	$(document).on("click", "#trial-products-modal", function (e) {
		e.stopPropagation();
		$('#bookTrialModal').modal('hide');
	});

	$(document).on("click", "#start-trial-modal-close", function (e) {
		e.stopPropagation();
		$('#start-trial-modal').modal('hide');
	});

	// Initiate trial process for a product
	$(document).on("click", 'button[data-btn-type|="start_trial"]', function (e) {

		e.preventDefault();
		var productId = $(this).attr('data-product-id');

		$.ajax({
			url: '/subscription/trial/product/' + productId,
			method: 'GET',
            cache: false,

            beforeSend: function(xhr) {
                xhr.setRequestHeader('X-CSRF-Token', csrfToken);
            },
			success: function (response) {

				if ($( "#bookTrialModal" ).length) {

					$('#bookTrialModal').modal('hide');

					$('#bookTrialModal').on('hidden.bs.modal', function (e) {
						$('#modal-content').html(response);
						$('#start-trial-modal').modal('show');
					});
				}else {
					$('#modal-content').html(response);
					$('#start-trial-modal').modal('show');
				}
			},
			error: function (xhr, status, error) {
				if (xhr.status === 401) {
					$.fn.login()
				}
			}
		});
	});

    // Initiate trial process for a product
    $(document).on("click", 'button[data-btn-type|="create_subscription"]', function (e) {

        e.preventDefault();
        var productId = $(this).attr('data-product-id');

        $.ajax({
            url: '/subscription/product/' + productId,
            method: 'GET',
            success: function (response) {

                if ($( "#bookTrialModal" ).length) {

                    $('#bookTrialModal').modal('hide');

                    $('#bookTrialModal').on('hidden.bs.modal', function (e) {
                        $('#modal-content').html(response);
                        $('#start-trial-modal').modal('show');
                    });
                }else {
                    $('#modal-content').html(response);
                    $('#start-trial-modal').modal('show');
                }
            },
            error: function (xhr, status, error) {
                if (xhr.status === 401) {
                    $.fn.login()
                }
            }
        });
    });

	$('button[data-btn-type|="start_subscription"]').click(function (e) {

		e.preventDefault();
		var productId = $(this).attr('data-product-id');

		$.ajax({
			url: '/subscription/product/' + productId + '/startSubscription',
			method: 'GET',
			success: function (response) {
				$('#modal-content').html(response);
				$('#startSubscriptionModal').modal('show');
			},
			error: function (xhr, status, error) {
				if (xhr.status === 401) {
					$.fn.login()
				}
			}
		});
	});

	$('button[data-btn-type|="manage_subscription"]').click(function (e) {

		e.preventDefault();
		var productId = $(this).attr('data-product-id');

		$.ajax({
			url: '/subscription/product/' + productId + '/manageSubscription',
			method: 'GET',
			success: function (response) {
				$('#modal-content').html(response);
				$('#startSubscriptionModal').modal('show');
			},
			error: function (xhr, status, error) {
				if (xhr.status === 401) {
					$.fn.login()
				}
			}
		});
	});


	// Initiate Add To Cart Handling
	$('button[data-btn-type|="add_to_cart"]').click(function (e) {

		e.preventDefault();
		var categoryId = $(this).attr('data-category-id');
		var productId = $(this).attr('data-product-id');


		$.ajax({
			url: '/shop/cart/category/'+ categoryId+ '/product/' + productId,
			method: 'GET',
			success: function (response) {
				$('#modal-content').html(response);
				$('#itemAddToCartModal').modal('show');
			},
			error: function (xhr, status, error) {
				if (xhr.status === 401) {
					$.fn.login()
				}
			}
		});
	});

	// Product Details page
	$(document).on("click", "#increment-button-product-page", function (e) {

		e.preventDefault();
		let targetElementSelector = '#' + $(this).attr('data-target-id');

		let originalValue = parseInt($(targetElementSelector).val());
		if (originalValue < $(targetElementSelector).attr('max')) {

			let newValue = originalValue + 1;
			$(targetElementSelector).val(newValue);

			$('.add-product-to-cart').attr('disabled', false);
		}
	});

	$(document).on("click", "#decrement-button-product-page", function (e) {

		e.preventDefault();
		let targetElementSelector = '#' + $(this).attr('data-target-id');

		let originalValue = parseInt($(targetElementSelector).val());

		if (originalValue > 0) {

			let newValue = originalValue - 1;
			$(targetElementSelector).val(newValue);

			if (newValue < 1) {
				$('.add-product-to-cart').attr('disabled', true);
			}
		}
	});

	// Increment button handling
	$(document).on("click", "#increment-button", function (e) {

		e.preventDefault();
		let targetElementSelector = '#' + $(this).attr('data-target-id');

		let productId = $(targetElementSelector).attr('data-product-id');
		let packSizeId = $(targetElementSelector).attr('data-pack-size-id');

		let originalValue = parseInt($(targetElementSelector).val());
		if (originalValue < $(targetElementSelector).attr('max')) {

			try {

				let newValue = originalValue + 1;

				$.fn.addToCart(productId, packSizeId, newValue);
				$(targetElementSelector).val(newValue);

			} catch (err) {
				console.log('Error updating the cart' + err);
			}
		} else {
			$.fn.notifyUser('Max allowed Items', 'You already have maximum allowed items for this product in your cart', 'error');
		}

	});

	// Decrement button handling
	$(document).on("click", "#decrement-button", function (e) {

		e.preventDefault();
		var targetElementSelector = '#' + $(this).attr('data-target-id');

		let productId = $(targetElementSelector).attr('data-product-id');
		let packSizeId = $(targetElementSelector).attr('data-pack-size-id');

		let originalValue = parseInt($(targetElementSelector).val());
		if (originalValue > 0) {
			try {

				let newValue = originalValue - 1;

				newValue !== 0 ? $.fn.addToCart(productId, packSizeId, newValue) : $.fn.removeFromCart(productId);
				$(targetElementSelector).val(newValue);

			} catch (err) {
				console.log('Error updating the cart' + err);
			}
		}
	});

	// Increase Quantity button handling
	$(document).on("click", "#increase-item-qty-button", function (e) {

		e.preventDefault();
		let targetElementSelector = '#' + $(this).attr('data-target-id');
		let cardItemId = $(targetElementSelector).attr('data-item-id');

		let originalValue = parseInt($(targetElementSelector).val());
		if (originalValue < $(targetElementSelector).attr('max')) {
			try {
				let newValue = originalValue + 1;

				$.fn.updateCart(cardItemId, newValue);
				$(targetElementSelector).val(newValue);

			} catch (err) {
				console.log('Error updating the cart' + err);
			}
		} else {
			$.fn.notifyUser('Max allowed Items', 'You already have maximum allowed items for this product in your cart', 'error');
		}
	});

	// Decrease Quantity button handling
	$(document).on("click", "#decrease-item-qty-button", function (e) {

		e.preventDefault();
		let targetElementSelector = '#' + $(this).attr('data-target-id');
		let cardItemId = $(targetElementSelector).attr('data-item-id');

		let originalValue = parseInt($(targetElementSelector).val());
		if (originalValue > 0) {
			try {

				let newValue = originalValue - 1;
				newValue !== 0 ? $.fn.updateCart(cardItemId, newValue) : $.fn.removeFromCart(cardItemId);
				$(targetElementSelector).val(newValue);

			} catch (err) {
				console.log('Error updating the cart' + err);
			}
		} else {
			return false;
		}
	});

	// Remove from Cart
	$(document).on("click", ".checkout-remove-from-cart", function (e) {
		$.fn.removeFromCart($(this).attr('data-cart-item-id'));
	});
    $(document).on("click", ".checkout-remove-from-cart", function (e) {
        $.fn.removeFromCart($(this).attr('data-cart-item-id'));
    });


});

