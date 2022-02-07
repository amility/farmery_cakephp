<!-- section1 vedio -->
<?php 
    if(!empty($displayBanners))
    {
?>
<section class="section-home-image" style="background: white no-repeat center center; background-size: cover">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        </ol>
        <div class="carousel-inner">
            <?php foreach($displayBanners as $key => $displayBanner){?>
            <div class="carousel-item <?php if($key == 0){echo'active';}?>">
                <img src="<?php echo $displayBanner['image'];?>" class="d-block w-100">
            </div>
            <?php } ?>
        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"> </span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</section>
<?php 
    }
    ?>
<!-- section 1 ends -->
<!-- Y Choose Farmery-->
<section class="section section-full-height section-why-farmery-showcase down-anchor">
    <div class="d-flex rounded align-items-center h-100">
        <div class="card mx-auto shadow w-100">
            <div class="row m-0">
                <div class="col-md-6 col-xl-7 col-md-12 col-sm-12 col-xs-12 ">
                    <img src="<?php echo  \Cake\Routing\Router::url('/',true) .$pluginName.'/img/farmer.png'?>"
                        onerror="this.onerror=null; this.src='/assets/site//images/placeholders/about/farmer.png'"
                        alt="Farmer image" class="farmer-img" width="90%" height="auto">
                </div>
                <div class="col-md-6 col-xl-5 col-md-12 col-sm-12 col-xs-12 px-0">
                    <div class="card-body pt-5">
                        <p class="mb-2 h3">Why Choose Farmery ?</p>
                        <div class="why-farmery-content-container">
                            <p class="w-100 text-gray-400"></p>
                            <p class="w-100 text-gray-400">
                                Farmery is a brand which stands for providing really good quality farm
                                fresh food. We ensure that our food products do not have presence of any
                                harmful substances which are widely present in our food today. We
                                conduct strict quality tests through FSSAI accredited laboratories to
                                ensure that there are no traces of any pesticides, chemicals</p>
                            <p class="w-100 text-gray-400">Our journey has started with one of the
                                most essential and important part of our daily diet - Milk and Dairy
                                products. We are using our knowledge and expertise in building complex
                                supply chains to make this possible on a daily basis. We aim to take
                                these good quality food products to more and more households. In future
                                we look to bringing more farm fresh products to your dining table.</p>
                            <p></p>
                        </div>
                        <a href="whyFarmery" class="btn btn-lg btn-secondary mt-2" role="button"
                            aria-pressed="true">Know More</a><span class="arrow"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- section 2 ends -->
<!--How do we deliver -->
<section class="section section-how-we-deliver-showcase">
    <div class="section-title strike">
        <span>How do we deliver ?</span>
    </div>
    <div class="d-flex justify-content-center">
        <ul class="row m-0 mb-5 tabs p-0 d-flex text-center" id="delivery-info-tabs">
            <li class="col p-sm-0">
                <button class="btn list-btn text-larger active" role="tab" data-target="section-1">Dairy</button>
            </li>
            <li class="col p-sm-0">
                <button class="btn list-btn text-larger" role="tab" data-target="section-2">Fruits</button>
            </li>
            <li class="col p-sm-0">
                <button class="btn list-btn text-larger" role="tab" data-target="section-19">Groceries</button>
            </li>
            <li class="col p-sm-0">
                <button class="btn list-btn text-larger" role="tab" data-target="section-20">Vegetables</button>
            </li>
            <li class="col p-sm-0">
                <button class="btn list-btn text-larger" role="tab" data-target="section-25">Juices</button>
            </li>
            <li class="col p-sm-0">
                <button class="btn list-btn text-larger" role="tab" data-target="section-29">Sweets</button>
            </li>
        </ul>
    </div>
    <div class="tabs-content mt-5">
        <section id="section-1" role="tabpanel" style="display: block;">
            <div class="d-flex justify-content-center">
                <div class="delivery-card-style bg-primary-light">
                    <div class="row m-0">
                        <div class="col-xl-7 col-lg-7 col-12 pb-5 px-0">
                            <div class="d-flex">
                                <div class="col-1 p-0 p-sm-4">
                                    <p class="delivery-card-number">1</p>
                                </div>
                                <div class="col-11 text-left pl-3 pl-sm-5 delivery-content">
                                    <p class="font-weight-bolder mb-0 h3">Dairy Farm</p>
                                    <p class="text-muted pt-4">
                                    </p>
                                    <p>Unlike the big brands of milk we do not collect milk from
                                        thousands of farmers where cattle feed, health and milking methods
                                        are
                                        not monitored. We have a single breed of cattle housed in select
                                        mid-size farms under 50 kms from the city. The fodder and well-being
                                        of
                                        the cattle is monitored under supervision of trained veterinarians
                                        at
                                        all times.</p>
                                    <p></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-5 col-12">
                            <img src="<?php echo  \Cake\Routing\Router::url('/',true) .$pluginName.'/img/Farm_002.jpg'?>"
                                alt="delivery card image" class="delivery-card-img" width="95%" height="auto">
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-center mt-3">
                <div class="delivery-card-style">
                    <div class="d-flex reverse-content">
                        <div class="col-xl-5 col-lg-5 col-12 text-right">
                            <img src="<?php echo  \Cake\Routing\Router::url('/',true) .$pluginName.'/img/FarmeryLab.jpg'?>"
                                alt="Lab image" class="delivery-card-img" width="95%" height="auto">
                        </div>
                        <div class="col-xl-7 col-lg-7 col-12 pb-5  px-0">
                            <div class="d-flex">
                                <div class="col-1 p-0 p-sm-4">
                                    <p class="delivery-card-number">2</p>
                                </div>
                                <div class="col-11 text-left pr-3 pr-sm-5 delivery-content">
                                    <p class="font-weight-bolder mb-0 h3">Product Testing</p>
                                    <p class="text-muted pt-4">
                                    </p>
                                    <p>We keep a stringent check on the cattle quality, fodder and
                                        processes at the farm. Samples of our milk are regularly checked and
                                        passed by FSSAI accredited labs for any trace of chemicals,
                                        pesticides
                                        or toxins and also get checked daily basis with in house laboratory.
                                    </p>
                                    <p></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-center">
                <div class="delivery-card-style bg-primary-light">
                    <div class="row m-0">
                        <div class="col-xl-7 col-lg-7 col-12 pb-5 px-0">
                            <div class="d-flex">
                                <div class="col-1 p-0 p-sm-4">
                                    <p class="delivery-card-number">3</p>
                                </div>
                                <div class="col-11 text-left pl-3 pl-sm-5 delivery-content">
                                    <p class="font-weight-bolder mb-0 h3">Doorstep Milk Delivery</p>
                                    <p class="text-muted pt-4">
                                    </p>
                                    <p>Deliver Fresh Bottled milk packed in Refrigerated vans from our
                                        Farm arrives at our hubs. Dispatches are done to your household
                                        within
                                        3-4 hours</p>
                                    <p></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-5 col-12">
                            <img src="<?php echo  \Cake\Routing\Router::url('/',true) .$pluginName.'/img/FarmeryWebsiteHomepageFruitcategoryDeliveryvan557x385Artboar.jpg'?>"
                                alt="delivery card image" class="delivery-card-img" width="95%" height="auto">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="section-2" role="tabpanel">
            <div class="d-flex justify-content-center">
                <div class="delivery-card-style bg-primary-light">
                    <div class="row m-0">
                        <div class="col-xl-7 col-lg-7 col-12 pb-5 px-0">
                            <div class="d-flex">
                                <div class="col-1 p-0 p-sm-4">
                                    <p class="delivery-card-number">1</p>
                                </div>
                                <div class="col-11 text-left pl-3 pl-sm-5 delivery-content">
                                    <p class="font-weight-bolder mb-0 h3">Farm</p>
                                    <p class="text-muted pt-4">
                                    </p>
                                    <p>At Farmery we work with Fruit farmers from across the country to
                                        bring to you the best offering direct from their farm to your door.
                                        We
                                        work with responsible and conscious farmers who avoid using chemical
                                        pesticides, artificial ripening and any other form of adulteration
                                        on
                                        the fruits. The fruits are specifically picked to order, graded,
                                        sorted
                                        and packed to ensure only the best produce reaches your doorstep. We
                                        work on a PreOrder system and collate orders for the farmers. All
                                        fruits
                                        reach from the farm to your door within 1-3 days of harvest.</p>
                                    <p></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-5 col-12">
                            <img src="<?php echo  \Cake\Routing\Router::url('/',true) .$pluginName.'/img/Farm2_002.jpg'?>"
                                alt="delivery card image" class="delivery-card-img" width="95%" height="auto">
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-center mt-3">
                <div class="delivery-card-style">
                    <div class="d-flex reverse-content">
                        <div class="col-xl-5 col-lg-5 col-12 text-right">
                            <img src=" <?php echo  \Cake\Routing\Router::url('/',true) .$pluginName.'/img/Quality-Control.jpg'?>"
                                alt="Lab image" class="delivery-card-img" width="95%" height="auto">
                        </div>
                        <div class="col-xl-7 col-lg-7 col-12 pb-5  px-0">
                            <div class="d-flex">
                                <div class="col-1 p-0 p-sm-4">
                                    <p class="delivery-card-number">2</p>
                                </div>
                                <div class="col-11 text-left pr-3 pr-sm-5 delivery-content">
                                    <p class="font-weight-bolder mb-0 h3">Fruit Quality Control</p>
                                    <p class="text-muted pt-4">
                                        Farmery is a brand which stands for providing really
                                        good quality farm fresh food. We ensure that our food
                                        products do not have presence of any
                                        harmful substances which are widely present in our food
                                        today. We conduct strict quality
                                        tests through FSSAI accredited laboratories.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-center">
                <div class="delivery-card-style bg-primary-light">
                    <div class="row m-0">
                        <div class="col-xl-7 col-lg-7 col-12 pb-5 px-0">
                            <div class="d-flex">
                                <div class="col-1 p-0 p-sm-4">
                                    <p class="delivery-card-number">3</p>
                                </div>
                                <div class="col-11 text-left pl-3 pl-sm-5 delivery-content">
                                    <p class="font-weight-bolder mb-0 h3">Delivery</p>
                                    <p class="text-muted pt-4">
                                    </p>
                                    <p>The fruit is hygienically packed in sturdy boxes and delivered to
                                        our hubs across the city from where they are delivered to your
                                        doorstep
                                        within 3-4 hours. The fruit you receive at your house reaches is
                                        delivered within 24 hours of it arriving to us.</p>
                                    <p></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-5 col-12">
                            <img src=" <?php echo  \Cake\Routing\Router::url('/',true) .$pluginName.'/img/delivery.jpg'?>"
                                alt="delivery card image" class="delivery-card-img" width="95%" height="auto">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="section-19" role="tabpanel">
            <div class="d-flex justify-content-center">
                <div class="delivery-card-style bg-primary-light">
                    <div class="row m-0">
                        <div class="col-xl-7 col-lg-7 col-12 pb-5 px-0">
                            <div class="d-flex">
                                <div class="col-1 p-0 p-sm-4">
                                    <p class="delivery-card-number">1</p>
                                </div>
                                <div class="col-11 text-left pl-3 pl-sm-5 delivery-content">
                                    <p class="font-weight-bolder mb-0 h3">Farm</p>
                                    <p class="text-muted pt-4">
                                    </p>
                                    <p>At Farmery we offer both certified organic and natural grocery
                                        products. The products are freshly sourced from our partner farms in
                                        Uttarakhand, Punjab, Himachal, Rajasthan &amp; Haryana. The products
                                        are
                                        grown without using chemicals, hand pounded, unpolished and
                                        hygienically packed to preserve the nutrition, quality and freshness
                                        of
                                        the produce. Procured in very small quantities to ensure only the
                                        best
                                        product is delivered to you</p>
                                    <p></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-5 col-12">
                            <img src=" <?php echo  \Cake\Routing\Router::url('/',true) .$pluginName.'/img/Farm.jpg'?>"
                                alt="delivery card image" class="delivery-card-img" width="95%" height="auto">
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-center mt-3">
                <div class="delivery-card-style">
                    <div class="d-flex reverse-content">
                        <div class="col-xl-5 col-lg-5 col-12 text-right">
                            <img src=" <?php echo  \Cake\Routing\Router::url('/',true) .$pluginName.'/img/Quality.jpg'?>"
                                alt="Lab image" class="delivery-card-img" width="95%" height="auto">
                        </div>
                        <div class="col-xl-7 col-lg-7 col-12 pb-5  px-0">
                            <div class="d-flex">
                                <div class="col-1 p-0 p-sm-4">
                                    <p class="delivery-card-number">2</p>
                                </div>
                                <div class="col-11 text-left pr-3 pr-sm-5 delivery-content">
                                    <p class="font-weight-bolder mb-0 h3">Quality Control</p>
                                    <p class="text-muted pt-4">
                                    </p>
                                    <p>Our quality team ensures that the product that you receive is
                                        free of any adulteration or pest infestation. The product is packed
                                        in
                                        natural pest resistant packaging ensuring top quality product.&nbsp;
                                    </p>
                                    <p></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-center">
                <div class="delivery-card-style bg-primary-light">
                    <div class="row m-0">
                        <div class="col-xl-7 col-lg-7 col-12 pb-5 px-0">
                            <div class="d-flex">
                                <div class="col-1 p-0 p-sm-4">
                                    <p class="delivery-card-number">3</p>
                                </div>
                                <div class="col-11 text-left pl-3 pl-sm-5 delivery-content">
                                    <p class="font-weight-bolder mb-0 h3">Grocery Delivery</p>
                                    <p class="text-muted pt-4">
                                    </p>
                                    <p>Grocery is delivered twice in a week – based on your order. The
                                        order is packed in sturdy boxes and then delivered to your doorstep
                                        through our delivery team at convenient prices.</p>
                                    <p></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-5 col-12">
                            <img src=" <?php echo  \Cake\Routing\Router::url('/',true) .$pluginName.'/img/grocery.jpg'?>"
                                alt="delivery card image" class="delivery-card-img" width="95%" height="auto">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="section-20" role="tabpanel">
            <div class="d-flex justify-content-center">
                <div class="delivery-card-style bg-primary-light">
                    <div class="row m-0">
                        <div class="col-xl-7 col-lg-7 col-12 pb-5 px-0">
                            <div class="d-flex">
                                <div class="col-1 p-0 p-sm-4">
                                    <p class="delivery-card-number">1</p>
                                </div>
                                <div class="col-11 text-left pl-3 pl-sm-5 delivery-content">
                                    <p class="font-weight-bolder mb-0 h3">Sourcing</p>
                                    <p class="text-muted pt-4">
                                    </p>
                                    <p>At Farmery we work with certified organic partner farmers from
                                        Haryana, Rajasthan, Himachal Pradesh and Uttrakhand region to bring
                                        to
                                        you fresh, everyday, chemical free vegetables to your doorstep. Our
                                        farmers are PGS certified and grow vegetables using desi &amp;
                                        heirloom
                                        seeds. You can feel the distinct difference in the freshness and
                                        taste
                                        of the produce.&nbsp;</p>
                                    <p></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-5 col-12">
                            <img src=" <?php echo  \Cake\Routing\Router::url('/',true) .$pluginName.'/img/Farm2.jpg'?>"
                                alt="delivery card image" class="delivery-card-img" width="95%" height="auto">
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-center mt-3">
                <div class="delivery-card-style">
                    <div class="d-flex reverse-content">
                        <div class="col-xl-5 col-lg-5 col-12 text-right">
                            <img src=" <?php echo  \Cake\Routing\Router::url('/',true) .$pluginName.'/img/Quality_002.jpg'?>"
                                alt="Lab image" class="delivery-card-img" width="95%" height="auto">
                        </div>
                        <div class="col-xl-7 col-lg-7 col-12 pb-5  px-0">
                            <div class="d-flex">
                                <div class="col-1 p-0 p-sm-4">
                                    <p class="delivery-card-number">2</p>
                                </div>
                                <div class="col-11 text-left pr-3 pr-sm-5 delivery-content">
                                    <p class="font-weight-bolder mb-0 h3">Veggies Quality Control</p>
                                    <p class="text-muted pt-4">
                                    </p>
                                    <p>Once the produce is harvested, it is received at our hub where it
                                        is sorted for quality and then hygienically packed with minimal or
                                        no
                                        use of plastic bags. We use well ventilated corrugated boxes to
                                        ensure
                                        the freshness of the produce remains intact.&nbsp;</p>
                                    <p><br></p>
                                    <p></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-center">
                <div class="delivery-card-style bg-primary-light">
                    <div class="row m-0">
                        <div class="col-xl-7 col-lg-7 col-12 pb-5 px-0">
                            <div class="d-flex">
                                <div class="col-1 p-0 p-sm-4">
                                    <p class="delivery-card-number">3</p>
                                </div>
                                <div class="col-11 text-left pl-3 pl-sm-5 delivery-content">
                                    <p class="font-weight-bolder mb-0 h3">Farm to home</p>
                                    <p class="text-muted pt-4">
                                    </p>
                                    <p>Delivered thrice a week – the vegetables are delivered to our
                                        delivery hubs across the city from where they are delivered to your
                                        doorstep within 3-4 hours maintaining strict quality standards.</p>
                                    <p></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-5 col-12">
                            <img src=" <?php echo  \Cake\Routing\Router::url('/',true) .$pluginName.'/img/delivery.jpg'?>"
                                alt="delivery card image" class="delivery-card-img" width="95%" height="auto">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="section-25" role="tabpanel">
            <div class="d-flex justify-content-center">
                <div class="delivery-card-style bg-primary-light">
                    <div class="row m-0">
                        <div class="col-xl-7 col-lg-7 col-12 pb-5 px-0">
                            <div class="d-flex">
                                <div class="col-1 p-0 p-sm-4">
                                    <p class="delivery-card-number">1</p>
                                </div>
                                <div class="col-11 text-left pl-3 pl-sm-5 delivery-content">
                                    <p class="font-weight-bolder mb-0 h3">Juices</p>
                                    <p class="text-muted pt-4">
                                    </p>
                                    <p>Farmery Cold Pressed juices are produced using top end cold press
                                        commercial machines under hygienic conditions. We only use the best
                                        quality fruit ensuring natural sweetness and quality of the final
                                        product. The juices have no added sugar, preservative, colour or
                                        flavouring, so what you get is just pure fruit juice. The cold press
                                        process ensures that the nutrition and taste is preserved. The shelf
                                        life of the product is 12 hours after the delivery. Packed in
                                        convenient
                                        500 ml bottles to ensure easy consumption.</p>
                                    <p></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-5 col-12">
                            <img src=" <?php echo  \Cake\Routing\Router::url('/',true) .$pluginName.'/img/Product.jpg'?>"
                                alt="delivery card image" class="delivery-card-img" width="95%" height="auto">
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-center mt-3">
                <div class="delivery-card-style">
                    <div class="d-flex reverse-content">
                        <div class="col-xl-5 col-lg-5 col-12 text-right">
                            <img src=" <?php echo  \Cake\Routing\Router::url('/',true) .$pluginName.'/img/production.jpg'?>"
                                alt="Lab image" class="delivery-card-img" width="95%" height="auto">
                        </div>
                        <div class="col-xl-7 col-lg-7 col-12 pb-5  px-0">
                            <div class="d-flex">
                                <div class="col-1 p-0 p-sm-4">
                                    <p class="delivery-card-number">2</p>
                                </div>
                                <div class="col-11 text-left pr-3 pr-sm-5 delivery-content">
                                    <p class="font-weight-bolder mb-0 h3">Juice Quality Check</p>
                                    <p class="text-muted pt-4">
                                    </p>
                                    <p>All juices are tasted on everyday basis by our quality team to
                                        check the freshness and taste of the juices. Our machines are
                                        professionally washed everyday to ensure no residue is left from
                                        previous days juicing.&nbsp;</p>
                                    <p></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-center">
                <div class="delivery-card-style bg-primary-light">
                    <div class="row m-0">
                        <div class="col-xl-7 col-lg-7 col-12 pb-5 px-0">
                            <div class="d-flex">
                                <div class="col-1 p-0 p-sm-4">
                                    <p class="delivery-card-number">3</p>
                                </div>
                                <div class="col-11 text-left pl-3 pl-sm-5 delivery-content">
                                    <p class="font-weight-bolder mb-0 h3">Juice Delivery</p>
                                    <p class="text-muted pt-4">
                                    </p>
                                    <p>The product is moved in a cold chain till the customer’s doorstep
                                        to prevent any oxidization of juices. Once delivered, you are
                                        required
                                        to refrigerate immediately.&nbsp;</p>
                                    <p></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-5 col-12">
                            <img src=" <?php echo  \Cake\Routing\Router::url('/',true) .$pluginName.'/img/FarmeryWebsiteHomepageFruitcategoryDeliveryvan557x385Artboar.jpg'?>"
                                alt="delivery card image" class="delivery-card-img" width="95%" height="auto">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="section-29" role="tabpanel">
        </section>
    </div>
</section>
<!-- section 3 ends -->
<!-- Products -->
<section class="section-products-showcase col-sm-12">
    <div class="section-title strike bottom-space-adjust">
        <span>Our Products</span>
        <div class="testingdata"></div>
    </div>
    <div class="d-flex justify-content-center">
        <div class="d-flex category-buckets justify-content-between">
            <?php foreach($categories['data'] as $category){?>
            <div class="card category-card mx-auto p-xl-4 p-md-2" onclick="productdata(<?= $category['id']?>);"
                data-target="product-listing-<?php echo $category['id']?>">
                <div class="card-body">
                    <img class="img-fluid" src="<?php echo $category['category_image']?>"
                        alt="<?php echo $category['name']?>">
                </div>
                <div class="card-footer">
                    <p class="text-center text-larger"><?php echo $category['name']?></p>
                </div>
            </div>
            <?php } ?>
        </div>
        <div class="products-container d-flex justify-content-center">
            <?php foreach($categories['data'] as $category){?>
            <div class="d-flex products-list justify-content-center" id="product-listing-<?php echo $category['id']?>">
                <?php foreach($productCategoryResult[$category['id']] as $product){?>
                <div class="d-flex justify-content-center px-3">
                    <div class="card product-card justify-content-between">
                        <div class="card-img-top">
                            <img src="<?php echo $product['product_image']; ?>"
                                alt="<?php echo $product['product_name']; ?>">
                        </div>
                        <div class="card-footer">
                            <p class="card-text">
                                <a href="subscription"><?php echo $product['product_name']; ?></a>
                            </p>
                        </div>
                    </div>
                </div>
                <?php } ?>
                <div class="px-3 d-flex justify-content-center">
                    <div class="card see-more-card">
                        <div class="card-body d-flex justify-content-center align-items-center">
                            <a class="font-weight-bold" onclick="window.location='/products/category/<?php echo $category['id']?>'">
                                See All
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
    <script>
    function productdata(id) {
        $.ajax({
            type: "GET",
            url: 'productAjax',
            data: {
                id: id
            },
            cache: false,
            beforeSend: function(xhr) {
                xhr.setRequestHeader('X-CSRF-Token', csrfToken);
            },
            success: function(data) {
                $('.testingdata').html("bhjk");
                for (value in data.data) {
                    console.log(value);

                }
            }
        });
    };
    </script>
    <div class="mobile-contents">
        <div class="w-85 d-flex justify-content-center">
            <div class="img-div">
                <img src=" <?php echo  \Cake\Routing\Router::url('/',true) .$pluginName.'/img/products_mobile.png'?>"
                    class="w-100 rounded" height="auto">
            </div>
        </div>
        <div class="background-style rounded"></div>
        <a class="btn btn-explore" onclick="window.location='products'">Explore
            All</a>
    </div>
</section>
<!-- section 4 ends -->
<!-- Community -->

<section class="section-community-showcase">
    <div class="section-title strike">
        <span>What's Your Community ?</span>
    </div>

    <div class="d-flex justify-content-center">
        <div class="carousel-container bg-twin-primary-light">
            <div class="carousel slide pointer-event" data-ride="carousel">
                <div class="featured-communities slick-initialized slick-slider"><button type="button"
                        class="is-left slick-prev slick-arrow slick-disabled" aria-disabled="true" style=""><i
                            class="fa fa-angle-left angle-style" aria-hidden="true"></i></button>
                    <div class="slick-list draggable">
                        <div class="slick-track"
                            style="opacity: 1; width: 2421px; transform: translate3d(0px, 0px, 0px);">

                            <?php foreach ($communities['data'] as $key=>$community){?>
                            <div class="slick-slide slick-active" data-slick-index="<?php echo $key;?>" aria-hidden="false"
                                style="width: 269px;">
                                <div>
                                    <div class="community-card" style="width: 100%; display: inline-block;">
                                        <div class="card-img-top">
                                            <img src=" <?php echo $community['image'];?>"
                                                onerror="this.onerror=null; this.src='<?php echo  \Cake\Routing\Router::url('/',true) .$pluginName.'/img/community_default.png';?>'">
                                        </div>
                                        <div class="card-footer">
                                            <a class="pt-4 h5 text-capitalize stretched-link community-link"
                                                data-target="<?php echo $community['name'];?>"
                                                tabindex="0"><?php echo $community['name'];?></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                    </div><button type="button" class="is-right slick-next slick-arrow" style=""
                        aria-disabled="false"><i class="fa fa-angle-right angle-style" aria-hidden="true"></i></button>
                </div>
            </div>
        </div>
    </div>
    <div class="mobile-contents">
        <a class="btn btn-lg btn-secondary btn-explore" onclick="window.location='community'">
            Explore All
        </a>
    </div>

    <div class="row mt-5 mx-0" id="community-details">
        <div class="col-xl-7  col-12 community-info ">
            <div class="community-description">
                <div class="card-img-top">
                    <img src="<?php echo $communities['data'][0]['image'];?>" id="selected-community-image"
                        onerror="this.onerror=null; this.src='<?php echo  \Cake\Routing\Router::url('/',true) .$pluginName.'/img/community_default.png';?>'"
                        class="border">
                </div>
                <div class="card-body pt-5">
                    <p class="h3 font-weight-bolder" id="selected-community-name">
                        <?php echo $communities['data'][0]['name'];?></p>
                    <p class="pt-2" id="selected-community-description">
                        <?php echo $communities['data'][0]['description'];?> </p>
                    <button class="btn btn-lg btn-secondary" id="selected-community-link"
                        onclick="window.location='community'">
                        Explore
                    </button>
                </div>
            </div>
        </div>
        <div class="col-xl-5 col-12 community-activity-container">
            <div class="community-activities">
                <div class="container">
                    <div class="d-flex community-rating">
                        <div class="col-6 pl-0">
                            <div class="community-stat-card">
                                <div class="card-body">
                                    <p class="stat-value font-weight-bold text-larger">
                                        <img src="<?php echo  \Cake\Routing\Router::url('/',true) .$pluginName.'/img/active_customers.png'?>"
                                            alt="community_active_customers" width="40%">
                                        <span
                                            id="selected-community-active-customers"><?php echo $communities['data'][0]['active_customer'];?></span>
                                    </p>
                                </div>
                                <div class="card-footer">
                                    <p class="stat-title font-weight-bold text-center text-small text-nowrap">
                                        Active Customers
                                    </p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-6 p-0">
                            <div class="community-stat-card">
                                <div class="card-body">
                                    <p class="stat-value font-weight-bold text-larger">
                                        <img src=" <?php echo  \Cake\Routing\Router::url('/',true) .$pluginName.'/img/points_earned.png'?>"
                                            alt="community_points_earned" width="30%">
                                        <span id="selected-community-deliveries"><?php $deliveries=0; foreach($communities['data'][0]['total_volume_by_category'] as $value){$deliveries =$deliveries + $value;
                                        }
                                        echo $deliveries;
                                        ?></span>
                                    </p>
                                </div>
                                <div class="card-footer">
                                    <p class="stat-title font-weight-bold text-center text-small text-nowrap">
                                        Successful Deliveries
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <p class="my-3 font-weight-bold">What are your community people saying</p>
                    <div class="video-container embed-responsive embed-responsive-16by9">
                        <?php echo $communities['data'][0]['video'];?>
                    </div>
                    <div class="events-container">
                        <p class="my-3 font-weight-bold">Events</p>
                        <img src=" <?php echo  \Cake\Routing\Router::url('/',true) .$pluginName.'/img/farms.jpg'?>"
                            class="w-100" height="auto">
                        <div class="events">
                            <div id="farmEvents" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    <?php if(!empty($communities['data'][0]['events'])){?>
                                    <?php foreach($communities['data'][0]['events'] as $event){?>
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
            </div>
        </div>
    </div>
</section>
<!-- section 5 ends -->
<!-- Trial Part -->

<section class="trial-banner col-sm-12 p-0 start-trial" style="cursor:pointer">
    <div class="banner-content bg-primary d-flex">
        <div class="row m-0 w-100">
            <div class="col-xl-6 col-lg-6 col-md-6 col-12 justify-content-center d-flex">
                <div class="align-self-center">
                    <p class="trial-content">Click here to start your <br><span class="display-4"> 5 days
                        </span> trial.</p>
                    <div class="btn-container mt-3">
                        <button class="btn btn-secondary btn-lg start-trial">
                            Start Trial
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-12 d-flex justify-content-center">
                <div class="w-80 align-self-center">
                    <img src=" <?php echo  \Cake\Routing\Router::url('/',true) .$pluginName.'/img/Banner-to-edit-cut.jpg'?>"
                        style="width:300px !important;">
                </div>
            </div>
        </div>
    </div>
    <div class="d-flex justify-content-center">
        <div class="banner-bottom w-85">
        </div>
    </div>
</section>
<!-- section 6 ends -->
<!-- About Us -->
<section class="section-about-us-home">
    <div class="section-title strike">
        <span>Know More About Us</span>
    </div>
    <div class="about-us-container">
        <div class="w-85">
            <div class="row m-0">
                <div class="col-xl-7 col-12 pb-4">
                    <div class="w-90 left-div-about-us">
                        <p class="page-sub-title text-lg-left text-center">What We Believe</p>
                        <div class="video-container"
                            style="background:white no-repeat center center; background-size: cover; background-color: transparent">
                            <video playsinline="playsinline" muted="muted" loop="loop" class="w-100 rounded"
                                id="about-us-video">
                                <source
                                    src="<?php echo  \Cake\Routing\Router::url('/',true) .$pluginName.'/video/farmery_intro_video.mp4'?>"
                                    type="video/mp4">
                            </video>
                            <div class="play-pause">
                                <a data-target="about-us-video" class="video-control"><i
                                        class="fa fa-play fa-2x"></i></a>
                            </div>
                        </div>
                        <div class="carousel slide mt-4 mb-5 pointer-event" data-ride="carousel">
                            <div class="featured-news slick-initialized slick-slider"><button type="button"
                                    class="is-left slick-prev slick-arrow slick-disabled" aria-disabled="true"
                                    style=""><i class="fa fa-angle-left angle-style" aria-hidden="true"></i></button>
                                <div class="slick-list draggable">
                                    <div class="slick-track"
                                        style="opacity: 1; width: 700px; transform: translate3d(0px, 0px, 0px);">
                                        <div class="slick-slide slick-current slick-active" data-slick-index="0"
                                            aria-hidden="false" style="width: 175px;">
                                            <div>
                                                <div class="d-flex justify-content-center"
                                                    style="width: 100%; display: inline-block;">
                                                    <div class="news-container">
                                                        <img src="<?php echo  \Cake\Routing\Router::url('/',true) .$pluginName.'/img/your_story.png'?>"
                                                            class="w-100 align-self-center p-3 img-fluid"
                                                            alt="Your Story">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="slick-slide slick-active" data-slick-index="1" aria-hidden="false"
                                            style="width: 175px;">
                                            <div>
                                                <div class="d-flex justify-content-center"
                                                    style="width: 100%; display: inline-block;">
                                                    <div class="news-container">
                                                        <img src=" <?php echo  \Cake\Routing\Router::url('/',true) .$pluginName.'/img/entrepreneur.png'?>"
                                                            class="w-100 align-self-center p-3 img-fluid"
                                                            alt="Your Story">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="slick-slide slick-active" data-slick-index="2" aria-hidden="false"
                                            style="width: 175px;">
                                            <div>
                                                <div class="d-flex justify-content-center"
                                                    style="width: 100%; display: inline-block;">
                                                    <div class="news-container">
                                                        <img src=" <?php echo  \Cake\Routing\Router::url('/',true) .$pluginName.'/img/india_today.png'?>"
                                                            class="w-100 align-self-center p-3 img-fluid"
                                                            alt="Your Story">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="slick-slide" data-slick-index="3" aria-hidden="true"
                                            style="width: 175px;" tabindex="-1">
                                            <div>
                                                <div class="d-flex justify-content-center"
                                                    style="width: 100%; display: inline-block;">
                                                    <div class="news-container">
                                                        <img src=" <?php echo  \Cake\Routing\Router::url('/',true) .$pluginName.'/img/your_story.png'?>"
                                                            class="w-100 align-self-center p-3 img-fluid"
                                                            alt="Your Story">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div><button type="button" class="is-right slick-next slick-arrow" style=""
                                    aria-disabled="false"><i class="fa fa-angle-right angle-style"
                                        aria-hidden="true"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 col-12">
                    <p class="page-sub-title text-lg-left text-center">What People Say</p>
                    <div class="rounded shadow bg-white mb-5">
                        <div class="row m-0 pt-2">
                            <div class="col-xl-5 col-lg-5 col-md-5 col-12 text-center">
                                <img src=" <?php echo  \Cake\Routing\Router::url('/',true) .$pluginName.'/img/06-09-2020-1420573057-1599382294.jpg'?>"
                                    onerror="this.onerror=null; this.src='/assets/site//images/homepage/trial.jpg'"
                                    class="rounded-circle testimonial-img">
                                <p class="mb-0 pt-2 font-weight-bolder">Khan Boyka</p>
                                <p>10 months ago</p>
                            </div>
                            <div class="col-xl-7 col-lg-7 col-md-7 col-12  pr-2">
                                <p class="my-1 font-weight-bolder">Fresh Milk</p>
                                <p>I Found Farmery Number Option For Dairy Products - Specially Their
                                    Curd And Cows Milk Is Awesome. Best Organic Fruits - Not Sure Why There
                                    Are Some Negative Comments , It's Quite Obvious They Promulgate To Offer
                                    Organic Fruit In The Best Natural Condition.</p>
                                <div class="my-3">
                                    <span class="fa fa-star  checked  "></span>
                                    <span class="fa fa-star  checked "></span>
                                    <span class="fa fa-star  checked "></span>
                                    <span class="fa fa-star  checked "></span>
                                    <span class="fa fa-star "></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="rounded shadow bg-white mb-5">
                        <div class="row m-0 pt-2">
                            <div class="col-xl-5 col-lg-5 col-md-5 col-12 text-center">
                                <img src=" <?php echo  \Cake\Routing\Router::url('/',true) .$pluginName.'/img/trial.jpg'?>"
                                    onerror="this.onerror=null; this.src='<?php echo  \Cake\Routing\Router::url('/',true) .$pluginName.'/img/trial.jpg'?>'"
                                    class="rounded-circle testimonial-img">
                                <p class="mb-0 pt-2 font-weight-bolder">Aashu</p>
                                <p>1 year ago</p>
                            </div>
                            <div class="col-xl-7 col-lg-7 col-md-7 col-12  pr-2">
                                <p class="my-1 font-weight-bolder">Love The Milk</p>
                                <p>I Am Your 3 Years Old Customer . Use Your Service That Is Lajbab
                                    Provide Fresh Veggies Fruit Milk And Other Milk Product On Time At Door
                                    Step Thank You So Much And Whenever My Family And Friend Require Good
                                    Quality Service My Voice Always Raise In Loud Go For Farmery</p>
                                <div class="my-3">
                                    <span class="fa fa-star  checked  "></span>
                                    <span class="fa fa-star  checked "></span>
                                    <span class="fa fa-star  checked "></span>
                                    <span class="fa fa-star  checked "></span>
                                    <span class="fa fa-star  checked "></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-center text-larger">
                        <a href="community">
                            <p class="font-weight-bolder mb-0">Load More </p>
                            <div class="load-more-arrow text-secondary">‸</div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="center-adjust">
        <div class="bg-primary-light bg-about-us"></div>
    </div>
</section>

<!-- section 7 ends -->
<!-- Blogs -->
<section class="section-featured-blogs">
    <div class="section-title strike">
        <span>Explore Our Blog</span>
    </div>
    <div class="d-flex justify-content-center">
        <div class="blog-container">
            <div class="carousel slide pointer-event" data-ride="carousel">
                <div class="featured-blogs slick-initialized slick-slider">
                    <div class="slick-list draggable">
                        <div class="slick-track"
                            style="opacity: 1; width: 1200px; transform: translate3d(0px, 0px, 0px);">
                            <?php foreach($blogData['blogs'] as $blog){?>
                            <div class="slick-slide slick-current slick-active" data-slick-index="0" aria-hidden="false"
                                style="width: 400px;">
                                <div>
                                    <div class="py-5 d-flex justify-content-center"
                                        style="width: 100%; display: inline-block;">
                                        <div class="blog-card shadow rounded d-flex flex-column">
                                            <div class="justify-content-center d-flex">
                                                <img class="card-img-top blog-img rounded"
                                                    src="<?php echo $blog['image'];?>"
                                                    onerror="this.onerror=null; this.src='<?php echo  \Cake\Routing\Router::url('/',true) .$pluginName.'/img/placeholders/blog/blog.png';?>'"
                                                    alt="blog image">
                                            </div>
                                            <div class="card-body p-4 overflow-hidden">
                                                <h5
                                                    class="text-primary text-center font-weight-bolder border-bottom pb-3">
                                                    <?php echo $blog['short_description'];?></h5>
                                                <p class="card-text d-flex pt-3"></p>
                                                <?php echo $blog['description'];?>
                                                <p></p>
                                            </div>
                                            <div class="card-footer d-flex  justify-content-between mt-3">
                                                <small class="text-muted"><?php echo $blog['publish_date'];?></small>
                                                <small
                                                    class="text-muted hide-on-mobile d-none d-md-block"><?php echo $blog['author'];?></small>
                                                <a href="<?php echo $blog['read_more'];?>" target="_blank" tabindex="0">
                                                    <small class="text-muted">Read More...</small>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- section 8 ends -->
<!-- dwl Farmery App section  -->

<?= $this->element('dwlfarmeryApp') ?>




<!-- end section  -->