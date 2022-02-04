<div class="content no-margin-top">
    <?php if($isCategoryPage === false){?>
    <div class="products-banner d-flex h-100">
        <div class="banner-image">
            <img src="<?php echo  \Cake\Routing\Router::url('/',true) .$pluginName.'/img/07-09-2020-1687658896-1599461277.jpg'?>" alt="farmery-shop-banner">
        </div>
        <div class="button-container align-self-end ml-auto">
            <p class="lead mb-0">
                <a class="btn btn-secondary btn-lg arrow-down shadow" role="button">
                    Shop Now
                </a>
            </p>
        </div>
    </div>
    <?php } ?>
    <!-- Cateogry -->
    <div class="products-category d-flex flex-column down-anchor">
        <div class="container mt-auto">
            <div class="categories mx-auto row">
                <?php foreach ($categories['data'] as $category){?>
                <div style="cursor: pointer"
                    class="category-card col-lg col-md-4 col-6 <?php if($category['id'] == $pageCategory['id']){ echo 'active';}?>"
                    data-is-active=" <?php if($category['id'] == $pageCategory['id']){echo'true';}else{echo 'false';}?>"
                    onclick="location.href='/products/category/<?php echo $category['id'];?>';">
                    <div class="category-content">
                        <div class="card-body">
                            <img class="img-fluid" src="<?php echo $category['category_image'];?>"
                                alt="<?php echo $category['name'];?>">
                        </div>
                        <div class="card-footer">
                            <p
                                class="text-center <?php if($category['id']  == $pageCategory['id']){ echo 'font-weight-bold';}else{echo 'font-weight-normal';} ?>">
                                <?php echo $category['name'];?> </p>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
    <!-- section 1 ends -->
    <!-- Dairy Products-->
    <section class="section-available-products">
    <?php foreach($productCategories['data'] as $productgetdata){ ?>
        <div class="section-title strike">
            <span><?php echo $productgetdata['label']; ?></span>
        </div>
        <div class="container">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-2 row-cols-lg-3 row-cols-xl-3">
                <?php foreach($productgetdata['data'] as $product){ ?>
                <div class="col mb-4 px-xl-4 px-lg-3 px-md-4 bg-twin-primary-light">
                    <div class="card mx-auto m-5">
                        <?php if(isset($product['type'])){?>
                        <?php if (strcmp($product['type'] ,'Subscription') !== 0 ){?>
                        <?php if(strcmp($product['action'], 'buy_trial') === 0) {?>
                        <div class="ribbon">
                            <span>Try Now</span>
                        </div>
                        <?php } ?>
                        <?php } ?>
                        <?php } ?>
                        <div class="card-image img-bright">
                            <img src="<?= $product['product_image']; ?>" class="rounded product-card-img " alt="image"
                                onerror="this.onerror=null; this.src='{{siteAsset('/images/loader.png')}}'"
                                width="100%">
                        </div>

                        <?php if(isset($product['type'])){ ?>
                        <!-- Display : Subscription Type Products -->
                        <?php if (strcmp($product['type'] ,'Subscription') !== 0 ){ ?>

                        <div class="card-body px-3 pt-3 pb-0 h-body">
                            <div class="product-detail-style">
                                <p class="font-weight-bolder mb-0">
                                    <?= $product['product_name'] ?>
                                </p>
                                <?php if(strcmp($product['action'], 'buy_trial') === 0) { ?>
                                <p class="font-weight-bold text-small text-muted mb-0 mt-2">
                                    <?= $product['trial_name'] ?? null ?>
                                </p>
                                <?php } ?>
                            </div>
                            <?php if(strcmp($product['action'], 'buy_trial') === 0){ ?>
                            <div class="d-flex mt-2 pt-3">
                                <div class="col pl-0 align-self-center">
                                    <p class="font-weight-bold   mb-0">
                                        <?= $product['trial_total_quantity'] ?> <?= $product['unit'] ?? null?>
                                        | <?= $product['trial_type'] ?? null?> |
                                        &#8377 <?= $product['price'] ?? null?>
                                </div>
                            </div>
                            <?php }else{ ?>
                            <div class="d-flex">
                                <p class="font-weight-bold  mb-0">Price:
                                    <span class="font-weight-normal"> &#8377 <?= $product['price'] ?? null ?>
                                        | <?= $product['weight'] ?? null ?></span>
                                </p>
                            </div>
                            <?php } ?>

                        </div>
                        <div class="card-footer bg-white border-0">
                            <div class="d-flex justify-content-between mt-2">
                                <?php if(isset($product['action'])) { ?>
                                <?php if(strcmp($product['action'], 'buy_trial') === 0){ ?>
                                <button class="btn btn-secondary"
                                    
                                    data-btn-type="start_trial" data-product-id="<?= $product['product_id'] ?>">
                                    Start Trial
                                </button>
                                <button class="btn btn-secondary"
                                   
                                    data-btn-type="create_subscription" data-product-id="<?= $product['product_id'] ?>">
                                    Start Subscription
                                </button>
                                <?php } elseif(strcmp($product['action'], 'pending_payment') === 0){ ?>
                                <?php if($product['invoice_id'] === null){ ?>
                                <button class="btn btn-secondary" data-btn-type="pending_payment"
                                    data-product-id="<?= $product['product_id'] ?>"
                                    onclick="window.location='/user/wallet?action=recharge'">
                                    Pending Payment
                                </button>
                                <?php }else{ ?>
                                <form action="<?= '/user/orders/invoice/pay/' . $product['invoice_id'] ?>"
                                    method="post">
                                    @csrf
                                    <input type="hidden" name="type" value="invoice">
                                    <input type="hidden" name="entity_id" value="<?= $product['invoice_id'] ?>">
                                    <button class="btn btn-secondary" type="submit" data-btn-type="pending_payment"
                                        data-product-id="<?= $product['product_id'] ?>">
                                        Pending Payment
                                    </button>
                                </form>
                                <?php } ?>
                                <?php } elseif(strcmp($product['action'], 'manage_subscription') === 0){ ?>
                                <button class="btn btn-secondary" data-btn-type="manage_subscription"
                                    data-product-id="<?= $product['product_id'] ?>">
                                    Manage Subscription
                                </button>
                                <?php }else{ ?>
                                <button class="btn btn-secondary"
                                   
                                    data-btn-type="create_subscription" data-product-id="<?= $product['product_id'] ?>">
                                    Start Subscription
                                </button>
                                <?php } ?>
                                <?php } ?>
                                <button class="btn btn-secondary"
                                    onclick="window.location='<?php echo"/products/category/".$pageCategory['type']. '/'. $pageCategory['id'] ."/detail/". $product['product_id'];?>'">
                                    View
                                </button>
                            </div>
                        </div>
                        <?php } ?>
                        <!-- // Display : Subscription Type Products -->
                        <?php }else{ ?>
                        <?php if (strcmp($productgetdata['label'] ,'Not in harvest') !== 0 ){ ?>

                        <div class="card-body px-3 pt-3 pb-0 h-body">
                            <div class="product-detail-style">
                                <p class="font-weight-bolder mb-0"> <?= $product['product_name'] ?></p>
                            </div>
                            <div class="p-2 product-detail-style bg-gray-200 rounded d-flex">
                                <div class="col pl-0 align-self-center">
                                    <p class="font-weight-bold text-extra-small mb-0">
                                    <?= $product['supplier_name'] ?? null ?></p>
                                </div>
                                <?php if(isset($product['farm_name'])){ ?>
                                <div class="col pr-0 align-self-center" style="border-left: 0.2px solid gray">
                                    <p class="font-weight-bold text-extra-small mb-0 text-capitalize">
                                    <?= $product['farm_name'] ?? null ?></p>
                                </div>
                                <?php } ?>
                            </div>
                        </div>
                        <div class="card-footer bg-white border-0">
                            <p class="font-weight-bold text-smaller pt-2 mb-0">Starts At:
                                <span class="font-weight-bolder"> &#8377 <?= $product['lowest_price'] ?? null ?></span>
                            </p>
                            <?php if(isset($productDatum['expected_delivery'])) { ?>
                            <p class="text-muted text-smaller mb-0 pb-2">
                                Expected
                                Delivery <?= $product['expected_delivery'] ?? null  ?>
                            </p>
                            <?php } ?>
                            <?php if(isset($product['start_date'])){ ?>
                            <p class="text-muted text-extra-small mb-0 pb-2">
                                Start Date <?= $product['start_date'] ?? null  ?>
                            </p>
                            <?php } ?>
                            <div class="d-flex justify-content-between mt-3">
                                <button class="btn btn-secondary" data-btn-type="add_to_cart"
                                    data-product-id="<?= $product['product_id'] ?>"
                                    data-category-id="<?= $product['category_id'] ?>">
                                    Add To Cart
                                </button>
                                <div class="d-flex justify-content-center">
                                    <?php if(isset($product['product_id'])){ ?>
                                    <?php if(isset($product['type'])){ ?>
                                    <a class="btn btn-secondary"
                                        href="<?= "/products/category/".$product['type'].'/' .$product['category_id']. "/detail/". $product['product_id']?>">
                                        View Details
                                    </a>
                                    <?php }else{ ?>
                                    <a class="btn btn-secondary"
                                        href="<?= "/products/category/general/".$product['category_id'] ."/detail/". $product['product_id']?>">
                                        View Details
                                    </a>
                                    <?php } ?>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                        <?php }else{ ?>
                        <!-- Display : Not In Harvest Products  -->
                        <div class="card-body px-3 pt-3 pb-0">
                            <div class="product-detail-style">
                                <p class="font-weight-bolder mb-0"> <?= $product['product_name'] ?></p>
                                <p class="text-smaller mt-1 text-muted">
                                    <span class="font-weight-bolder"> Harvest Period -
                                    </span><?= $product['harvest_period'] ?>
                                </p>
                            </div>
                            <div class="d-flex justify-content-between mt-3">
                                <button class="btn btn-secondary disabled mb-3">
                                    Not in harvest
                                </button>
                            </div>
                        </div>
                        <?php } ?>
                        <?php } ?>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
        <?php } ?>
    </section>
    <!-- section 2 ends -->
    <!-- dwl Farmery App section  -->

    <?= $this->element('dwlfarmeryApp')?>

    <!-- end section  -->
</div>