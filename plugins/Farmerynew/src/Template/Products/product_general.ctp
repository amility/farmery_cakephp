<section class="product-detail-section position-relative mt-10">
    <div class="d-flex justify-content-center w-100">
        <a href="/products/category/1">
            <img src="<?php echo  \Cake\Routing\Router::url('/',true) .$pluginName.'/img/banner-product_new.png'?>"
                class="w-100">
        </a>
    </div>
    <div class="col-lg-4 col-md-5 col-12 product-detail-img-container">
        <img src="{{isset($product->getProductImage()[0]) ? $product->getProductImage()[0] : (\Cake\Routing\Router::url('/',true) .$pluginName.'/img/logo_green.png')?>"
            class="border-secondary w-60
			 rounded img-detail border-info">
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
                            <p class="h4 font-weight-bolder d-inline"><?= $products['product_name'] ?></p>
                            <div class="label label-style alternative float-xl-right rounded p-2 text-capitalize">
                                <?= $products['quality_type'] ?></div>
                            <div class="pt-4">
                                Grown with <i class="fa fa-heart" style="color:red"></i>
                                by <?= $products['supplier_name'] ?> at <?= $products['supplier_address'] ?>
                            </div>
                            <div class="pt-4">
                                <p class="mb-1 h5">
                                    <span class="font-weight-bolder">Orchid :</span>
                                    <span class="font-weight-normal"> <?= $products['supplier_address'] ?></span>
                                </p>
                                <p class="pt-2 h5">
                                    <span class="font-weight-bolder">Reaches you by:</span>
                                    <span class="font-weight-normal"><?= $products['expected_arrival_date'][0] ?></span>
                                </p>
                                <p class="pt-4 mb-3 h5">
                                    <span class="font-weight-bolder text-larger">Available Pack Sizes :</span>
                                </p>
                            </div>
                            <form id="add-product-to-cart">
                                <?php foreach($products['price_with_packsize'] as $key => $value){?>
                                <div class="pb-2">
                                    <p class="pr-3 mb-0 d-inline text-larger">
                                        &#8377; <?= $value['amount'] ?>
                                    </p>
                                    <span class="pr-3">
                                        <a id="decrement-button"
                                           
                                            data-target-id="packsize-<?= $key ?>-quantity-product">
                                            <img src="<?php echo  \Cake\Routing\Router::url('/',true) .$pluginName.'/img/sub_icon.png'?>"
                                                class="quantity-icon">
                                        </a>
                                        <input type="number" class="input-style"
                                            id="packsize-<?= $key ?>-quantity-product"
                                            name="packsize-<?= $key ?>-quantity" data-pack-size-id="<?= $key ?>"
                                            data-product-id="<?= $products['product_id'] ?>" value="0" min="0" max="10"
                                            class="input-style" data-rel-id="packsize-<?= $key ?>" />
                                        <a id="increment-button"
                                            
                                            data-target-id="packsize-<?= $key ?>-quantity-product">
                                            <img src="<?php echo  \Cake\Routing\Router::url('/',true) .$pluginName.'/img/add_icon.png'?>"
                                                class="quantity-icon">
                                        </a>
                                    </span>
                                    <p class="d-inline pr-3 text-larger mb-0">|</p>
                                    <p class="d-inline text-larger mb-0"><?= $value['description'] ?></p>
                                </div>
                                <?php } ?>
                                <div class="d-flex mt-3">
                                    <a href="javascript:void(0)" class="btn btn-secondary mr-4 mt-2"
                                        onClick="JavaScript:$.fn.openCartView()">
                                        Checkout
                                    </a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="container">

    <!--  If supplier image number is 3 or > 3  -->
    <?php if(isset($products['supplier_product_images'][2])){?>
    <section class="about-section">
        <div class="row m-0 reverse-column-md">
            <div class="col-lg-7 col-12 ">
                <div class="d-flex justify-content-center">
                    <div class="container width-md">
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
                    <div class="mt-2 text-capitalize">
                        <?= $products['product_description'] ?>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <?php } ?>

    <!--  If supplier image number is 2  -->
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
                    <div class="mt-2 text-capitalize">
                        <?= $products['product_description'] ?>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <?php } ?>

    <!--  If supplier image number is 1  -->
    <?php if(isset($products['supplier_product_images'][0])&& isset($products['supplier_product_images'][1]) ==false){?>
    <section class="about-section">
        <div class="row m-0 reverse-column-md">
            <div class="col-lg-5 col-12 ">
                <div class="d-flex justify-content-center">
                    <div class="w-85 width-md">
                        <div class="row m-0">
                            <img src="<?= (\Cake\Routing\Router::url('/',true) .$pluginName.'/img/logo_green.png') ?>"
                                class="image-fluid border-secondary w-80 rounded img-detail">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-7 col-12 d-flex align-style">
                <div class="w-85 width-md mb-3">
                    <p class="h3 font-weight-bolder">About The Product</p>
                    <div class="mt-2 text-capitalize">
                        <?= $products['product_description'] ?>
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
                    <p class="h3 font-weight-bolder">About The Farmer</p>
                    <div>
                        <?= $products['supplier_introduction'] ?>
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
                                            <p class="h3 position-absolute text-white see-all-overlay">See
                                                All</p>
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
                    <p class="h3 font-weight-bolder">About The Farmer</p>
                    <div>
                        <?= $products['supplier_introduction'] ?>
                    </div>
                </div>
            </div>
            <div class="col-lg-7 col-12 ">
                <div class="d-flex justify-content-center">
                    <div class="w-80 width-md">
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
        </div>

    </section>
    <?php } ?>

    <!--  If supplier image number is 1  -->
    <?php if(isset($products['supplier_product_images'][0])&& isset($products['supplier_product_images'][1]) ==false){?>
    <section class="about-section">
        <div class="row m-0">
            <div class="col-lg-7 col-12 d-flex justify-content-center">
                <div class="w-85 width-md mb-3">
                    <p class="h3 font-weight-bolder">About The Farmer</p>
                    <div>
                        <?= $products['supplier_introduction'] ?>
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

<?php if($products['links'] !== null){?>
<section class="trial-banner col-sm-12 p-0">
    <div class="banner-content bg-primary d-flex">
        <div class="row m-0 w-100">
            <div class="col-12 justify-content-center d-flex">
                <div class="align-self-center text-center">
                    <p class="trial-content">Explore More</p>
                    <div class="btn-container mt-3">
                        <?php foreach($products['links'] as $link){?>
                        <?php if($link['category_id'] !== null){?>
                        <button class="btn btn-secondary btn-lg m-3"
                            onclick="window.location='/products/category/<?= $link['category_id']?>'">
                            <?= $link['label']?>
                        </button>
                        <?php }else{ ?>
                        <button class="btn btn-secondary btn-lg m-3" onclick="window.location='/products'">
                            <?= $link['label']?>
                        </button>
                        <?php } ?>
                        <?php } ?>
                    </div>
                </div>
            </div>
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