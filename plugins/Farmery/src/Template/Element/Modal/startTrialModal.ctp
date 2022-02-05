<div class="modal fade show" id="start-trial-modal" role="dialog" aria-labelledby="itemStartTrialModal" aria-hidden="true">
	<div class="modal-dialog modal-lg modal-dialog-centered">
		<div class="modal-content">
			<div class="modal-header bg-primary d-block">
				<button type="button" class="close text-gray-300" id="start-trial-modal-close">
					&times;
				</button>
				@isset($error)
					<p class="h4 text-center text-white">Error</p>
				@else
					<p class="h4 text-center text-white">{{$product->getTrialName()}}</p>
				@endisset
			</div>

			<div class="modal-body p-0">
				@isset($error)
					@include('site.pages.errors.error-partial')
				@else
					<div id="trialCarousel" class="carousel" data-ride="carousel" data-interval="false">
						<div class="carousel-inner">
							<div class="carousel-item active">
								<div class="row m-0">
									<div class="col-lg-6 col-12 d-none d-md-block">
										<img src="{{$product->getProductImage()}}" class="mt-3 rounded" width="100%" height="auto">
										<div class="d-flex bg-primary-light p-4 mt-4 rounded">
											<div class="align-self-center ">
												<p class="font-weight-bold mb-0">
													Trial Amount : &nbsp;&#8377; {{$product->getTrialAmount()}}
												</p>
												<p class="size-style text-nowrap mb-0">
													{{$product->getTrialTotalQuantity()}} {{$product->getUnit()}} | {{$product->getTrialType()}}
												</p>
												<p class="font-weight-bold text-extra-small mb-0">
													Delivered :
													<span class="text-capitalize">{{$product->getDeliveryCycle()}}</span>
												</p>
											</div>
										</div>
										<div class="d-flex px-4 mb-3">
											<a class="carousel-control-next btn carousel-btn font-weight-bold text-secondary" href="#trialCarousel" data-slide="next">
												Need Help? FAQ's &#8594;
											</a>
										</div>
									</div>

									<div class="col-lg-6 col-12">
										<div class="text-smaller mt-3">
											{!! $product->getProductDescription() !!}
										</div>
										<form class="my-3 p-2 border rounded bg-primary-light" method="POST" action="{{url('/subscription/trial/product/'.$product->getProductId())}}">
											@csrf
											<input type="hidden" name="product_id" value="{{$product->getProductId()}}">
											<input type="hidden" name="trial_id" value="{{$product->getTrialId()}}">

											<div class="form-group mt-2">
												<label for="start_date" class="font-weight-bold">
													When do you want to start the trial?
												</label>
												<div class="input-group date-picker">
													<input type="text" class="form-control" name="start_date" data-date-format="yyyy/mm/dd" id="trial-start-date" autocomplete="off" value="{{$product->getStartDate()}}">
													<label class="input-group-addon mb-0 mt-2" for="trial-start-date">
														<i class='fa fa-calendar pl-2 text-large text-secondary'></i>
													</label>
												</div>
											</div>
											<div class="form-group">
												<label for="time-slot" class="font-weight-bold mt-2">
													Which time slot do you prefer?
												</label>
												<select class="form-control" name="time_slot" id="time-slot" required="required">
													@foreach($product->getAvailableTimeSlots() as $slot)
														<option id="{{'time-slot-'.$loop->index}}" value="{{$slot}}">{{$slot}}</option>
													@endforeach
												</select>
											</div>

											<div class="form-group">
												<label for="mode" class="font-weight-bold mt-2">
													Which mode of delivery do you prefer?
												</label>
												<select class="form-control" name="mode" id="mode" required="required">
													@foreach($product->getAvailableDeliveryModes() as $deliverMode)
														<option id="{{'mode-'.$loop->index}}" value="{{$deliverMode}}">{{$deliverMode}}</option>
													@endforeach
												</select>
											</div>

											<div class="form-group mt-4 d-flex justify-content-end">
												<button class="btn btn-secondary btn-md text-white mr-auto" type="submit">
													Next &#8594;
												</button>
											</div>
										</form>
									</div>
								</div>
							</div>

							<div class="carousel-item">
								<div class="row m-0">
									<div class="col-xl-6 col-lg-6 col-12 bg-primary left-item-testimonial">
										<div class="outer-div-left-item">
											<p class="h3 text-white">Testimonials</p>
											@foreach($product->getTestimonials() as $testimonial)
												<div class="my-3 pt-3 testimonial-modal-card">
													<div class="col-5 text-center">
														<img src="{{$testimonial['customer_image']}}" class="rounded-circle testimonial-img-modal">
														<p class="mb-0 pt-2 font-weight-bolder text-white text-capitalize">{{$testimonial['customer_name']}}</p>
														<p class="text-white">{{$testimonial['publish_date']}}</p>
													</div>
													<div class="col-7 pl-0 pr-2">
														<p class="mb-1 mt-1 font-weight-bolder text-white text-capitalize">
															{!! $testimonial['description'] !!}
														</p>
														<div class="mt-2 mb-3 text-gray-300">
															<span class="fa fa-star @if($testimonial['rating'] >=1) checked @endif "></span>
															<span class="fa fa-star @if($testimonial['rating']>=2) checked @endif"></span>
															<span class="fa fa-star @if($testimonial['rating'] >=3) checked @endif"></span>
															<span class="fa fa-star @if($testimonial['rating']>=4) checked @endif"></span>
															<span class="fa fa-star @if($testimonial['rating']>=5) checked @endif"></span>
														</div>
													</div>
												</div>
											@endForeach
										</div>
									</div>
									<div class="col-xl-6 col-lg-6 col-12 ">
										<button type="button" class="close pt-2 text-gray-300" data-dismiss="modal">
											&times;
										</button>
										<div class="right-item-faq">
											<p class="h3 border-bottom p-2">Use the FAQ</p>
											<div class="faq-outer-scroll my-4">
												@foreach($product->getFaqData() as $faq)
													<div class="border-bottom pb-3 mb-3">
														<div class="d-flex">
															<div class="col-10 p-0">
																<p class="font-weight-bold mb-0">
																	{{$faq['question']}}
																</p>
															</div>
															<div class="col-2 p-0 d-flex justify-content-end">
																<a data-toggle="collapse" class="" href="#faq-{{$loop->index}}" role="button" aria-expanded="false">
																	<img src="{{siteAsset('/images/icons/icon_down.png')}}" style="width: 1.5rem">
																</a>
															</div>
														</div>
														<div class="collapse mt-2 text-smaller" id="faq-{{$loop->index}}">
															{!!$faq['answer']!!}
														</div>
													</div>
												@endforeach
											</div>
										</div>
										<div class="d-flex my-auto">
											<a class="carousel-control-prev btn carousel-btn font-weight-bold text-secondary" href="#trialCarousel" data-slide="next">
												&#8592; {{$product->getTrialName()}}
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				@endif
			</div>
		</div>
	</div>
</div>


<script type="text/javascript">
	$('#trial-start-date').datepicker({
		weekStart: 1,
		daysOfWeekHighlighted: "6,0",
		autoclose: true,
		todayHighlight: true,
	});
</script>
