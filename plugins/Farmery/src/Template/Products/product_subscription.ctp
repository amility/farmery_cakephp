<section class="product-detail-section position-relative">
    <div class="d-flex justify-content-center w-100">
        <a href="/products/category/1">
            <img src="<?php echo  \Cake\Routing\Router::url('/',true) .$pluginName.'/img/banner-product_new.png'?>"
                class="w-100">
        </a>
    </div>
    <div class="col-lg-4 col-md-5 col-12 product-detail-img-container">
        <img src="<?= $products['product_image'][0] ?? (\Cake\Routing\Router::url('/',true) .$pluginName.'/img/logo_green.png')?>"
            class="image-fluid border-secondary w-80 rounded img-detail">
    </div>
    <div class="row m-0 ">
        <div class="col-md-1"></div>
        <div class="col-md-11 col-12 p-0 d-flex justify-content-center">
            <div class="w-85 bg-primary-light product-detail-container">
                <div class="row m-0">
                    <div class="col-lg-4 col-md-5">
                    </div>
                    <div class="col-lg-8 col-md-7 col-12">
                        <div class="px-3 py-5 adjust-sm-padding">
                            <p class="h4 font-weight-bolder d-inline"><?= $products['product_name']?></p>
                            <div class="pt-4">
                                Prepared with <i class="fa fa-heart" style="color:red"></i>
                                by <?= $products['supplier_name']?> at <?= $products['supplier_address']?>
                            </div>

                            <div class="pt-4">
                                <p class="mb-3 h5">
                                    <span class="font-weight-bolder text-larger">Available Pack Sizes :</span>
                                </p>
                            </div>
                            <div class="pb-1">
                                <p class="d-inline text-larger mb-0"><?= $products['weight']?> <span class="m-2">for
                                        &#8377 <?= $products['price']?></span>
                                </p>
                            </div>

                            <?php if($products['action'] == 'buy_trial') {?>
                            <div class="pt-4 align-self-center">
                                <p class="mb-1">
                                    <span class="font-weight-bold text-larger">Trial
                                        :</span><?= $products['trial_name']?>
                                </p>
                                <p class="font-weight-bold text-small mb-0">
                                    <!-- {{$products->getTrialTotalQuantity()}} {{$products->getUnit()}} -->
                                    | <?= $products['trial_type']?> | &#8377 <?= $products['trial_amount']?>
                                </p>
                            </div>
                            <?php  } ?>

                            <div class="d-flex mt-3">
                                <?php if($products['action'] == 'buy_trial') {?>
                                <button class="btn btn-secondary mr-4 mt-2"
                                    data-btn-type="start_trial" data-product-id="<?= $products['product_id']?>">
                                    Start Trial
                                </button>
                                <button class="btn btn-secondary mr-4 mt-2"
                                    
                                    data-btn-type="create_subscription" data-product-id="<?= $products['product_id']?>">
                                    Start Subscription
                                </button>
                                <?php } elseif ($products['action'] == 'pending_payment') {?>
                                <button class="btn btn-secondary mr-4 mt-2" data-btn-type="pending_payment"
                                    data-product-id="<?= $products['product_id']?>">
                                    Pending Payment
                                </button>
                                <?php } elseif ($products['action'] == 'manage_subscription') {?>
                                <button class="btn btn-secondary mr-4 mt-2" data-btn-type="manage_subscription"
                                    data-product-id="<?= $products['product_id']?>">
                                    Manage Subscription
                                </button>
                                <?php } else {?>
                                <button class="btn btn-secondary mr-4 mt-2"
                                    
                                    data-btn-type="create_subscription" data-product-id="<?= $products['product_id']?>">
                                    Start Subscription
                                </button>
                                <?php }?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="container">
    <?php if(!empty($products['product_description'])){ ?>
    <section class="about-section">
        <div class="row m-0 reverse-column-md">
            <div class="col-lg-7 col-12 ">
                <div class="d-flex justify-content-center">
                    <div class="w-85 width-md">
                        <div class="row">
                            <div class="col-md-8 col-12">
                                <img src="<?php echo  \Cake\Routing\Router::url('/',true) .$pluginName.'/img/logo_green.png'?>"
                                    class="image-fluid border-secondary w-80 rounded img-detail">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-12 d-flex align-style pt-3">
                <div class="w-85 width-md mb-3">
                    <p class="h3 font-weight-bolder">About The Product</p>
                    <div>
                        <?= $products['product_description'] ?>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <?php } ?>

    <!-- If product image number is 3 or > 3  -->
    <?php if(isset($products['supplier_product_images'][2])){?>
    <section class="about-section">
        <div class="row m-0 reverse-column-md">
            <div class="col-lg-7 col-12 ">
                <div class="d-flex justify-content-center">
                    <div class="w-85 width-md">
                        <div class="row">
                            <div class="col-md-8 col-12">
                                <img class=" py-2 px-0 mb-2 image-fluid rounded h-sm-auto w-100" height="300px"
                                    src="<?= $products['supplier_product_images'][0] ??  (\Cake\Routing\Router::url('/',true) .$pluginName.'/img/logo_green.png')?>" />
                            </div>
                            <div class="col-md-4 col-12 p-0 mobile-img-view-container">
                                <div class="col-md-12 col-6 p-sm-0">
                                    <img class="p-0 p-sm-2 rounded w-100 h-sm-auto" height="150px"
                                        src="<?= $products['supplier_product_images'][1] ??  (\Cake\Routing\Router::url('/',true) .$pluginName.'/img/logo_green.png')?>" />
                                </div>
                                <div class="col-md-12 col-6 p-sm-0">
                                    <a data-toggle="modal" data-target="#gallaryItemModal">
                                        <div class="position-relative ">
                                            <div class="m-0 m-sm-2 bg-dark">
                                                <img class=" w-100 rounded h-sm-auto img-opacity" height="135px"
                                                    src="<?= $products['supplier_product_images'][2]  ??  (\Cake\Routing\Router::url('/',true) .$pluginName.'/img/logo_green.png')?>" />
                                            </div>
                                            <p class="h3 position-absolute text-white see-all-overlay">
                                                See All
                                            </p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-12 d-flex align-style pt-3">
                <div class="w-85 width-md mb-3">
                    <p class="h3 font-weight-bolder">About The Product</p>
                    <div>
                        <?= $products['supplier_introduction'] ?>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <?php } ?>
    <!-- If product image number is 2  -->
    <?php if(isset($products['supplier_product_images'][1])&& isset($products['supplier_product_images'][2]) ==false){?>
    <section class="about-section">
        <div class="row m-0 reverse-column-md">
            <div class="col-lg-7 col-12 ">
                <div class="d-flex justify-content-center">
                    <div class="w-85 width-md">
                        <div class="row m-0">
                            <div class="col-6">
                                <img class="image-fluid rounded w-100 h-sm-auto" height="300px"
                                    src="<?= $products['supplier_product_images'][0] ??  (\Cake\Routing\Router::url('/',true) .$pluginName.'/img/logo_green.png')?>" />
                            </div>
                            <div class="col-6">
                                <img class="rounded w-100 h-sm-auto" height="300px"
                                    src="<?= $products['supplier_product_images'][1] ??  (\Cake\Routing\Router::url('/',true) .$pluginName.'/img/logo_green.png')?>" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-12 d-flex align-style pt-3">
                <div class="w-85 width-md mb-3">
                    <p class="h3 font-weight-bolder">About The Product</p>
                    <div>
                        <?= $products['supplier_introduction'] ?>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <?php } ?>

    <!-- If product image number is 1  -->
    <?php if(isset($products['supplier_product_images'][0])&& isset($products['supplier_product_images'][1]) ==false){?>
    <section class="about-section">
        <div class="row m-0 reverse-column-md">
            <div class="col-lg-5 col-12 ">
                <div class="d-flex justify-content-center">
                    <div class="w-85 width-md">
                        <div class="row m-0">
                            <img class="col-12 p-0 image-fluid rounded w-100 h-sm-auto" height="300px"
                                src="<?= $products['supplier_product_images'][0] ??  (\Cake\Routing\Router::url('/',true) .$pluginName.'/img/logo_green.png')?>" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-7 col-12 d-flex align-style">
                <div class="w-85 width-md mb-3">
                    <p class="h3 font-weight-bolder">About The Product</p>
                    <div>
                        <?= $products['supplier_introduction'] ?>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <?php } ?>

</div>

<hr class="w-90" />

<div class="container">

    <!--  If supplier image number is 3 or > 3  -->
    <?php if(isset($products['supplier_product_images'][2])){?>
    <section class="about-section">
        <div class="row m-0">
            <div class="col-lg-5 col-12 d-flex justify-content-center">
                <div class="w-80 width-md mb-3">
                    <p class="h3 font-weight-bolder">About The Supplier</p>
                    <div>
                        <?= $products['supplier_introduction']?>
                    </div>
                </div>
            </div>
            <div class="col-lg-7 col-12 ">
                <div class="d-flex justify-content-center">
                    <div class="w-80 width-md">
                        <div class="row">
                            <div class="col-md-8 col-12">
                                <img class=" py-2 px-0 mb-2 image-fluid rounded h-sm-auto w-100" height="300px"
                                    src="<?= $products['supplier_product_images'][0] ??  (\Cake\Routing\Router::url('/',true) .$pluginName.'/img/logo_green.png')?>" />
                            </div>
                            <div class="col-md-4 col-12 p-0 mobile-img-view-container">
                                <div class="col-md-12 col-6 p-sm-0">
                                    <img class="p-0 p-sm-2 rounded w-100 h-sm-auto" height="150px"
                                        src="<?= $products['supplier_product_images'][1] ??  (\Cake\Routing\Router::url('/',true) .$pluginName.'/img/logo_green.png')?>" />
                                </div>
                                <div class="col-md-12 col-6 p-sm-0">
                                    <a data-toggle="modal" data-target="#gallaryItemModal">
                                        <div class="position-relative">
                                            <div class="m-0 m-sm-2 bg-dark">
                                                <img class=" w-100 rounded h-sm-auto img-opacity" height="135px"
                                                    src="<?= $products['supplier_product_images'][2]  ??  (\Cake\Routing\Router::url('/',true) .$pluginName.'/img/logo_green.png')?>" />
                                            </div>
                                            <p class="h3 position-absolute text-white see-all-overlay">
                                                See All
                                            </p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php } ?>

    <!--  If supplier image number is 2  -->
    <?php if(isset($products['supplier_product_images'][1])&& isset($products['supplier_product_images'][2]) ==false){?>
    <section class="about-section">
        <div class="row m-0">
            <div class="col-lg-5 col-12 d-flex justify-content-center">
                <div class="w-85 width-md mb-3">
                    <p class="h3 font-weight-bolder">About The Supplier</p>
                    <div>
                        <?= $products['supplier_introduction']?>
                    </div>
                </div>
            </div>
            <div class="col-lg-7 col-12 ">
                <div class="d-flex justify-content-center">
                    <div class="w-80 width-md">
                        <div class="row m-0">
                            <div class="col-6">
                                <img class="image-fluid rounded w-100 h-sm-auto" height="300px"
                                    src="<?= $products['supplier_product_images'][0]  ??  (\Cake\Routing\Router::url('/',true) .$pluginName.'/img/logo_green.png')?>" />
                            </div>
                            <div class="col-6">
                                <img class="rounded w-100 h-sm-auto" height="300px"
                                    src="<?= $products['supplier_product_images'][1]  ??  (\Cake\Routing\Router::url('/',true) .$pluginName.'/img/logo_green.png')?>" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <?php } ?>

    <!--  If supplier image number is 1  -->
    <?php if(isset($products['supplier_product_images'][0])&& isset($products['supplier_product_images'][1]) ==false){?>
    <section class="about-section">
        <div class="row m-0">
            <div class="col-lg-7 col-12 d-flex justify-content-center">
                <div class="w-85 width-md mb-3">
                    <p class="h3 font-weight-bolder">About The Supplier</p>
                    <div>
                        <?= $products['supplier_introduction']?>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-12 ">
                <div class="d-flex justify-content-center">
                    <div class="w-80 width-md">
                        <div class="row m-0">
                            <img class="col-12 p-0 image-fluid rounded w-100 h-sm-auto" height="300px"
                                src="<?= $products['supplier_product_images'][0] ??  (\Cake\Routing\Router::url('/',true) .$pluginName.'/img/logo_green.png')?>" />
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <?php } ?>
</div>
<!--  FAQ section  -->
<?php if($products['faq'] !== null) {?>
<section class="section bg-gray-100 h-100 overflow-auto">
    <div class="section-title strike mt-5">
        <span>Use the FAQ</span>
    </div>
    <div class="d-flex justify-content-center">
        <div class="faq-container h-100 overflow-auto">
            <?php foreach($products['faq'] as $key => $faq){ ?>
            <div class="border-bottom mb-3 p-2">
                <div class="d-flex">
                    <div class="col-10 p-0">
                        <p class="font-weight-bold mb-0">
                            <?= $faq['question'] ?>
                        </p>
                    </div>
                    <div class="col-2 p-0 d-flex justify-content-end">
                        <a data-toggle="collapse" href="#faq-<?= $key ?>" role="button" aria-expanded="false">
                            <img src="<?php echo  \Cake\Routing\Router::url('/',true) .$pluginName.'/img/icon_down.png'?> "
                                style="width: 1.5rem">
                        </a>
                    </div>

                </div>
                <div class="collapse mt-2" id="faq-<?= $key ?>">
                    <?= $faq['answer'] ?>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</section>
<?php } ?>
<!-- <?php if($products['refund_policy'] !== null){?>
<section class="section h-100 overflow-auto">
    <div class="section-title strike mt-5">
        <span>Refund Policy</span>
    </div>
    <div class="container">
        <?= $products['refund_policy'] ?>
    </div>
</section>
<?php }?> -->
<?php if($products['other_milk_products'] !== null) {?>
<section class="section-available-products">
    <div class="section-title strike">
        <span><?= $products['other_milk_products']['label']?></span>
    </div>
    <div class="container">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-2 row-cols-lg-3 row-cols-xl-3">
            <?php foreach($products['other_milk_products']['data'] as $otherProduct) {?>
            <div class="col mb-4 px-xl-4 px-lg-3 px-md-4 bg-twin-primary-light">
                <div class="card mx-auto m-5">
                    <div class="card-image img-gray-scale">
                        <img src="<?=  $otherProduct['product_image'] ?>" class="rounded product-card-img" alt="image"
                            onerror="this.onerror=null; this.src='<?php echo  \Cake\Routing\Router::url('/',true) .$pluginName.'/img/loader.png'?>'"
                            width="100%">
                    </div>
                    <div class="card-body px-3 pt-3 pb-0">
                        <div class="product-detail-style">
                            <div class="d-flex justify-content-between">
                                <p class="font-weight-bolder mb-0">
                                    <?= $otherProduct['product_name']?>
                                </p>
                                <p class="font-weight-bolder mb-0">
                                    &#8377 <?= $otherProduct['price']?>
                                </p>
                            </div>
                            <?php if(strcmp($otherProduct['action'], 'buy_trial') === 0) {?>
                            <p class="font-weight-bold text-extra-small mb-0">
                                <?= $otherProduct['trial_name'] ?? null?>
                            </p>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="card-footer bg-white border-0">
                        <div class="d-flex justify-content-center">
                            <button class="btn btn-secondary mr-4 mt-2"
                                onclick="window.location='<?php echo"/products/category/subscription/". $products["category_id"] ."/detail/". $otherProduct['product_id'];?>'">
                                View Details
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</section>
<?php } ?>
<!-- dwl Farmery App section  -->

<?= $this->element('dwlfarmeryApp')?>

<!-- end section  -->
<div class="modal" id="gallaryItemModal">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div id="itemGallary" class="carousel slide" data-ride="carousel" data-interval="false">
                <div class="carousel-inner">
                    <?php foreach($products['supplier_product_images'] as $key => $supplierImage){ ?>
                    <div class="carousel-item <?php $key == 0 ? 'active' : '' ?>">
                        <img src="<?= $supplierImage ?? ( \Cake\Routing\Router::url('/',true) .$pluginName.'/img/logo_green.png')?>"
                            width="100%">
                    </div>
                    <?php }?>
                </div>
                <a class="carousel-control-prev" href="#itemGallary" data-slide="prev" style="opacity: 1">
                    <span class="carousel-control-prev-icon"></span>
                </a>
                <a class="carousel-control-next" href="#itemGallary" data-slide="next" style="opacity: 1">
                    <span class="carousel-control-next-icon"></span>
                </a>
            </div>
        </div>
    </div>
</div>

<?= $this->element('Modal/startTrialModal') ?>
<?= $this->element('Modal/startSubscriptionModal') ?>