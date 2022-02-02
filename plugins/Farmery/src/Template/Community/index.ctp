<!-- coustomer  -->

<section class="section-search-community community-container">
    <div class="d-flex overlay-search w-100 h-100 community-list" id="community-1">
        <div class="col-lg-2 col-md-3 px-3 d-none d-xl-block d-lg-block">
            <div class="card bg-transparent shadow-none w-100">
                <div class="card-body py-0">
                    <p class="font-weight-bold text-larger">
                        <img src="<?php echo  \Cake\Routing\Router::url('/',true) .$pluginName.'/img/active_customers.png'?>"
                            width="50%">
                        <span
                            id="selected-community-active-customers"><?php echo $community['active_customer'];?></span>
                    </p>
                </div>
                <div class="card-footer border-0 bg-transparent pt-0">
                    <p class="stat-title font-weight-bolder text-small text-nowrap">Active Customers</p>
                </div>
            </div>
        </div>
        <div class="col-lg-8  col-12 row m-0 justify-content-center">
            <div class="col-12 text-center">
                <p class="page-sub-title mb-0">Search Your Locality/Community</p>
                <div class="col-12 row m-0 justify-content-center">
                    <form>
                        <div class="form-group form-group-style typeahead">
                            <input id="community-search" type="search" autocomplete="off"
                                placeholder="Search your community"
                                class="form-control search-style shadow typeahead-input">
                            <div class="typeahead-dropdown list-group" id="community-search-results">
                                <a class="list-group-item">Type something to search..</a>
                            </div>
                        </div>
                        <div class="input-group-append">
                            <button id="btn-search-comm" type="submit" class="btn shadow-none">
                                <img src="<?php echo  \Cake\Routing\Router::url('/',true) .$pluginName.'/img/black_search_icon.png'?>"
                                    class="search-icon-comm">
                            </button>
                        </div>
                    </form>
                </div>
                <div class="col-12  h-50 mt-0 mt-sm-5 d-flex justify-content-center">
                </div>
            </div>
        </div>
        <div class="col-lg-2 col-md-3 p-0 d-none d-xl-block d-lg-block">
            <div class="d-flex justify-content-end">
                <div class="card bg-transparent shadow-none w-100">
                    <div class="card-body py-0">
                        <p class="font-weight-bold text-larger">
                            <img src="<?php echo  \Cake\Routing\Router::url('/',true) .$pluginName.'/img/points_earned.png'?>"
                                width="20%">
                            <span id="selected-community-deliveries"><?php $deliveries=0; foreach($community['total_volume_by_category'] as $value){$deliveries =$deliveries + $value;
                                        }
                                        echo $deliveries;
                                        ?></span>
                        </p>
                    </div>
                    <div class="card-footer border-0 bg-transparent pt-0">
                        <p class="stat-title font-weight-bolder text-small text-nowrap">Successful
                            Deliveries</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="d-flex justify-content-center">
        <div class="w-100 position-relative">
            <img src="<?php echo  \Cake\Routing\Router::url('/',true) .$pluginName.'/img/communityTopBanner.jpg'?>"
                class="mt-1 bg-img" width="100%" height="auto">
        </div>
    </div>
    <div class="d-xl-none d-lg-none d-block ">
        <div class="row mx-0 justify-content-center mt-3">
            <div class="col-6">
                <div class="card w-100 stat-card-style">
                    <div class="card-body py-0">
                        <p class="font-weight-bold text-larger">
                            <img src="<?php echo  \Cake\Routing\Router::url('/',true) .$pluginName.'/img/active_customers.png'?>"
                                width="50%">
                            <span
                                id="selected-community-active-customers"><?php echo $community['active_customer'];?></span>
                        </p>
                    </div>
                    <div class="card-footer border-0 bg-white pt-0">
                        <p class="stat-title font-weight-bolder text-center text-small">
                            Active Customers
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="card stat-card-style w-100">
                    <div class="card-body py-0">
                        <p class="font-weight-bold text-larger">
                            <img src="<?php echo  \Cake\Routing\Router::url('/',true) .$pluginName.'/img/points_earned.png'?>"
                                width="25%">
                            <span id="selected-community-deliveries"> <span id="selected-community-deliveries"><?php $deliveries=0; foreach($community['total_volume_by_category'] as $value){$deliveries =$deliveries + $value;
                                        }
                                        echo $deliveries;
                                        ?></span></span>
                        </p>
                    </div>
                    <div class="card-footer border-0 bg-white pt-0">
                        <p class="font-weight-bolder text-center text-small">Successful Deliveries</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end section  -->
<!-- community  -->

<section class="section-community-content">
    <div class="row m-0">
        <div class="col-xl-4 col-md-4 col-sm-12 col-xs-12 d-flex justify-content-center">
            <div class="selected-div">
                <p class="page-sub-title mb-0 pb-0">Selected Community</p>
                <div class="card" data-community-id="$community_id">
                    <img src="<?php echo $community['image'];?>"
                        onerror="this.onerror=null; this.src='/assets/site//images/placeholders/community/community_default.png'"
                        class="card-img-comm ">
                    <div class="card-body text-center selected-card-comm p-2 bg-primary">
                        <p class="font-weight-bolder text-white mb-0"><?php echo $community['name'];?></p>
                    </div>
                </div>
                <hr>
                <p class="page-sub-title mb-0 pb-0">Other Communities</p>
                <div class="d-flex scroll-div">
                    <div class="scroll-card">
							<?php foreach($communities['data'] as $key => $otherCommunities){?>
							<?php if($key !== $community_id){?>
                        <div class="card" data-community-id="<?php echo$key; ?>">
                            <img src="<?php echo $otherCommunities['image'];?>"
                                onerror="this.onerror=null; this.src='/assets/site//images/placeholders/community/community_default.png'"
                                class="card-img-comm ">
                            <div class="card-body text-center selected-card-comm p-2 bg-primary">
                                <a href="/community/<?php echo $otherCommunities['name'];?>">
                                    <p class="font-weight-lighter text-white mb-0"><?php echo $otherCommunities['name'];?></p>
                                </a>
                            </div>
                        </div>
                        <?php } ?>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-8 col-md-8 col-sm-12 col-xs-12" id="community-1">
            <div class="ml-3">
                <p class="page-sub-title">What are your community people saying</p>
                <div class="w-95 d-flex justify-content-center">
                    <div class="video-container justify-content-center w-100 embed-responsive embed-responsive-16by9"
                        id="video">
                        <?php echo $community['video'];?>
                    </div>
                </div>
            </div>
            <div class="ml-3 mt-5">
                <p class="page-sub-title">Testimonials</p>
                <div class="responsive-product-div">
                    <img src="<?php echo  \Cake\Routing\Router::url('/',true) .$pluginName.'/img/loader.png';?>"
                        class="w-100 responsive-product-img" width="100%" height="auto">
                </div>
                <div class="row m-0">
                    <div class="col-xl-7 col-md-12 col-sm-12 col-xs-12 col-12 p-0">
                        <div class="testimonial-div rounded">
                            <?php if($community['testimonial']!== null){?>
                            <?php foreach($community['testimonial'] as $testimonial){?>
                            <div class="row m-0 pt-4  underline-style">
                                <div class="col-md-5 col-lg-5 col-xl-5 col-12 text-center">
                                    <img src="<?php echo $testimonial['customer_image'];?>"
                                        onerror="this.onerror=null; this.src='/assets/site/images/placeholders/user.svg'"
                                        class="rounded-circle testimonial-img">
                                    <p class="mb-0 pt-2 font-weight-bolder text-capitalize"><?php echo $testimonial['customer_name'];?></p>
                                    <p class="text-muted"><?php echo $testimonial['publish_date'];?></p>
                                </div>
                                <div class="col-lg-7 col-md-7 col-xl-7 col-12">
                                    <p class="mb-1 mt-1  font-weight-bolder text-capitalize"><?php echo $testimonial['title'];?></p>
                                    <p class="text-muted text-capitalize"><?php echo $testimonial['description'];?></p>
                                    <div class="stars-style">
                                        <span class="fa fa-star  <?php if($testimonial['rating'] >=1){ echo 'checked';}  ?>"></span>
                                        <span class="fa fa-star  <?php if($testimonial['rating'] >=2){ echo 'checked';}  ?>"></span>
                                        <span class="fa fa-star  <?php if($testimonial['rating'] >=3){ echo 'checked';}  ?>"></span>
                                        <span class="fa fa-star  <?php if($testimonial['rating'] >=4){ echo 'checked';}  ?>"></span>
                                        <span class="fa fa-star  <?php if($testimonial['rating'] >=5){ echo 'checked';}  ?>"></span>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="col-xl-5 side-img-outer-div">
                        <div class="side-img-div ml-3">
                            <img src="<?php echo  \Cake\Routing\Router::url('/',true) .$pluginName.'/img/loader.png';?>"
                                class="w-100 side-img" width="100%">
                        </div>
                    </div>
                </div>
            </div>
            <div class="ml-3 mt-5">
                <p class="page-sub-title">Community Events</p>
                <div class="farm-div">
                    <img src="<?php echo  \Cake\Routing\Router::url('/',true) .$pluginName.'/img/farms.jpg'?>"
                        class="w-100" height="auto">
                    <div class="event-details">
                        <div id="farmEvents" class="carousel slide w-100 pointer-event" data-ride="carousel">
                            <div class="carousel-inner">
                            <?php if(!empty($community['events'])){?>
                                    <?php foreach($community['events'] as $event){?>
                                    <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                                        <div class="d-flex justify-content-center">
                                            <div class="event-details p-4">
                                                <div class="d-flex justify-content-between">
                                                    <p class="font-weight-bolder text-smaller mb-0">
                                                        <?php echo $event['name']; ?></p>
                                                    <p class="font-weight-bolder text-smaller mb-0">
                                                        <?php echo $event['date']; ?></p>
                                                </div>
                                                <p class="text-muted text-smaller">
                                                    <?php echo $event['description']; ?>
                                                </p>

                                                <p class="mt-1 pb-0 font-weight-bold text-smaller">
                                                    Share with your friends and family
                                                </p>
                                                <div class="d-flex">
                                                    <a href="<?php echo $event['social_facebook']; ?>">
                                                        <img
                                                            src="<?php echo  \Cake\Routing\Router::url('/',true) .$pluginName.'/img/fb_icon.png'?>">
                                                    </a>
                                                    <a href="<?php echo $event['social_youtube']; ?>">
                                                        <img src="<?php echo  \Cake\Routing\Router::url('/',true) .$pluginName.'/img/youtube_icon.png'?>"
                                                            class="mx-3">
                                                    </a>
                                                    <a href="<?php echo $event['social_insta']; ?>">
                                                        <img
                                                            src="<?php echo  \Cake\Routing\Router::url('/',true) .$pluginName.'/img/ig_icon.png'?>">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php } } ?>
                            </div>
                            <a class="carousel-control-prev" href="#farmEvents" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon mr-lg-5" aria-hidden="true"></span>
                            </a>
                            <a class="carousel-control-next" href="#farmEvents" role="button" data-slide="next">
                                <span class="carousel-control-next-icon ml-lg-5" aria-hidden="true"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ml-3 mt-5">
                <p class="page-sub-title">Your Community's Growth</p>
                <div class="w-95">
                    <div class="container">
                        <div class="chartjs-size-monitor">
                            <div class="chartjs-size-monitor-expand">
                                <div class=""></div>
                            </div>
                            <div class="chartjs-size-monitor-shrink">
                                <div class=""></div>
                            </div>
                        </div>
                        <canvas style="display: block; height: 400px; width: 727px;" id="yjpkuxsfincblzeamvqgdworh"
                            class="chartjs-render-monitor" width="1090" height="600"></canvas>
                        <div id="yjpkuxsfincblzeamvqgdworh_loader"
                            style="display: none; justify-content: center; opacity: 1; align-items: center; height: 400px;">
                            <svg width="50" height="50" viewBox="0 0 38 38" xmlns="http://www.w3.org/2000/svg">
                                <defs>
                                    <linearGradient x1="8.042%" y1="0%" x2="65.682%" y2="23.865%" id="a">
                                        <stop stop-color="#22292F" stop-opacity="0" offset="0%"></stop>
                                        <stop stop-color="#22292F" stop-opacity=".631" offset="63.146%">
                                        </stop>
                                        <stop stop-color="#22292F" offset="100%"></stop>
                                    </linearGradient>
                                </defs>
                                <g fill="none" fill-rule="evenodd">
                                    <g transform="translate(1 1)">
                                        <path d="M36 18c0-9.94-8.06-18-18-18" id="Oval-2" stroke="url(#a)"
                                            stroke-width="2">
                                            <animateTransform attributeName="transform" type="rotate" from="0 18 18"
                                                to="360 18 18" dur="0.9s" repeatCount="indefinite">
                                            </animateTransform>
                                        </path>
                                        <circle fill="#22292F" cx="36" cy="18" r="1">
                                            <animateTransform attributeName="transform" type="rotate" from="0 18 18"
                                                to="360 18 18" dur="0.9s" repeatCount="indefinite">
                                            </animateTransform>
                                        </circle>
                                    </g>
                                </g>
                            </svg>
                        </div>
                        <script type="text/javascript">
                            var labels = [<?php echo implode(',',array_keys($community['total_sales_by_year']));?>];
                            var chatlabeldata = [<?php echo implode(',',$community['total_sales_by_year']);?>];
                        var ctvChart = document.getElementById('yjpkuxsfincblzeamvqgdworh').getContext(
                            '2d');

                        function yjpkuxsfincblzeamvqgdworh_create(data) {
                            yjpkuxsfincblzeamvqgdworh_rendered = true;
                            document.getElementById("yjpkuxsfincblzeamvqgdworh_loader").style.display =
                                'none';
                            document.getElementById("yjpkuxsfincblzeamvqgdworh").style.display = 'block';
                            window.yjpkuxsfincblzeamvqgdworh = new Chart(document.getElementById(
                                "yjpkuxsfincblzeamvqgdworh").getContext("2d"), {
                                type: data[0].type,
                                data: {
                                    labels: labels,
                                    datasets: data
                                },
                                options: {
                                    "maintainAspectRatio": false,
                                    "scales": {
                                        "xAxes": [],
                                        "yAxes": [{
                                            "ticks": {
                                                "beginAtZero": true
                                            }
                                        }]
                                    }
                                },
                                plugins: []
                            });
                        }
                        let yjpkuxsfincblzeamvqgdworh_rendered = false;
                        let yjpkuxsfincblzeamvqgdworh_load = function() {
                            if (document.getElementById("yjpkuxsfincblzeamvqgdworh") && !
                                yjpkuxsfincblzeamvqgdworh_rendered) {
                                yjpkuxsfincblzeamvqgdworh_create([{
                                    "borderWidth": 2,
                                    "backgroundColor": "#f49d3f",
                                    "data": chatlabeldata,
                                    "label": "Community Growth",
                                    "type": "bar"
                                }])
                            }
                        };
                        window.addEventListener("load", yjpkuxsfincblzeamvqgdworh_load);
                        document.addEventListener("turbolinks:load", yjpkuxsfincblzeamvqgdworh_load);
                        </script>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end section  -->
<!-- dwl Farmery App section  -->
<?= $this->element('dwlfarmeryApp')?>

<!-- end section  -->