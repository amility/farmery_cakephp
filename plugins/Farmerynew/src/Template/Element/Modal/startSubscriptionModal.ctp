<div class="modal fade " id="startSubscriptionModal">
	<div class="modal-dialog  modal-lg modal-dialog-centered">
		<div class="modal-content">
			<div class="modal-header bg-primary d-block">
				<button type="button" class="close text-gray-300" data-dismiss="modal">
					&times;
				</button>
				<p class="h4 text-center text-white">Download the app to start and manage subscriptions</p>
			</div>
			<div class="modal-body">
				<div class="row m-0 app-download-modal">
					<div class="col-md-6 col-sm-12 bg-primary-light p-0">
						<div id="itemApp" class="carousel slide" data-ride="carousel" data-interval="false">
							<!-- The slideshow -->
							<div class="carousel-inner">
								<div class="carousel-item active">
									<div class="slide-style bg-white position-relative bg-primary-light">
										<div class="d-flex justify-content-center">
											<div class="w-50 img-effect">
												<img src="{{siteAsset('/images/app/screenshots/splash-screen.png')}}" class="w-100">
											</div>
										</div>
										<div class="download-slide-text">
											<p class="mb-0 text-smaller font-weight-bolder">DOWNLOAD THE APP</p>
											<p class="text-smaller">
												I remember my mother used to get milk delivered
												to our home, from the local
												milkman. He was cooperative, understood our
												family’s needs, and over time became like an
												extended family member.
											</p>
										</div>
									</div>
								</div>
								<div class="carousel-item">
									<div class="slide-style bg-white mx-3 position-relative bg-primary-light">
										<div class="d-flex justify-content-center">
											<div class="w-50 img-effect">
												<img src="{{siteAsset('/images/app/screenshots/wallet-screen.png')}}" class="w-100">
											</div>
										</div>
										<div class="download-slide-text d-flex justify-content-center w-100">
											<figure>
												<img src="{{siteAsset('/images/icons/icon_wallet.svg')}}">
												<figcaption class="pt-3 font-weight-bolder text-smaller">
													CHARGE WALLET
												</figcaption>
											</figure>
										</div>
									</div>
								</div>
								<div class="carousel-item">
									<div class="slide-style bg-white mx-3 bg-primary-light position-relative">
										<div class="d-flex justify-content-center">
											<div class="w-50 img-effect">
												<img src="{{siteAsset('/images/app/screenshots/browse-product-screen.png')}}" class="w-100">
											</div>
										</div>
										<div class="download-slide-text d-flex justify-content-center w-100">
											<figure>
												<img src="{{siteAsset('/images/icons/icon_milk_bottle.svg')}}">
												<figcaption class="pt-3 font-weight-bolder text-smaller">
													SELECT PRODUCT
												</figcaption>
											</figure>
										</div>
									</div>
								</div>
								<div class="carousel-item">
									<div class="slide-style bg-white mx-3 bg-primary-light position-relative">
										<div class="d-flex justify-content-center">
											<div class="w-50 img-effect">
												<img src="{{siteAsset('/images/app/screenshots/order-screen.png')}}" class="w-100">
											</div>
										</div>
										<div class="download-slide-text d-flex justify-content-center w-100">
											<figure>
												<img src="{{siteAsset('/images/icons/icon_delivery_scooter.svg')}}">
												<figcaption class="pt-3 font-weight-bolder text-smaller">
													PLACE ORDER
												</figcaption>
											</figure>
										</div>
									</div>
								</div>
							</div>
							<!-- Left and right controls -->
							<a class="carousel-control-prev" href="#itemApp" data-slide="prev" style="opacity: 1">
								<span class="carousel-control-prev-icon"></span>
							</a>
							<a class="carousel-control-next" href="#itemApp" data-slide="next" style="opacity: 1">
								<span class="carousel-control-next-icon"></span>
							</a>
						</div>
					</div>
					<div class="col-md-6 col-sm-12 p-0">
						<div class="slide-style bg-primary">
							<div class="d-flex justify-content-center h-100 text-white">
								<div class="my-auto pt-5">
									<div class="hide-on-mobile">
										<form id="download-app-form">
											<p class="font-weight-bold text-center text-smaller">
												Send me the app link
											</p>
											<div class="input-group">
												<div class="input-group-prepend">
													<span class="input-group-text">+91</span>
												</div>
												<input type="number" name="number" class="form-control text-box-phone" placeholder="Enter your mobile number" maxlength="10">
												<div class="input-group-append">
													<button type="submit" id="download-app-submit-btn" class="btn btn-send text-uppercase">
														SEND
													</button>
												</div>
											</div>
											<div id="#message"></div>
										</form>
									</div>
									<div class="text-center pt-5">
										<p class="mb-0 font-weight-bolder text-white">DOWNLOAD</p>
										<p class="mb-0 font-weight-bold text-white text-larger">Farmery App</p>
										<div class="d-flex pt-2 justify-content-center">
											<a href="#" target="_blank">
												<img src="{{siteAsset('/images/app/app_store_icon.svg')}}"
													 class="mr-2 download-icon-style">
											</a>
											<a href="#" target="_blank">
												<img src="{{siteAsset('/images/app/google_play_icon.svg')}}" class="download-icon-style">
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
