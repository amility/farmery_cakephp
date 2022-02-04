<section class="support-product-category section-margin">

    <p class="page-title text-center">Frequently Asked Questions</p>
    <div class="d-flex justify-content-center">
        <div class="w-85 bg-primary-light category-container rounded">
            <div class="row m-0">
                <?php foreach($categories['data'] as $key=>$category){?>
                <div class="col-lg col-md-4 col-6 d-flex justify-content-center p-0">
                    <a class="category-card mx-auto p-xl-3 text-decoration-none"
                        href="/faq/<?php echo $category['id'];?>/<?php echo $category['name'];?>">
                        <div class="card-body">
                            <img class="img-fluid" src="<?php echo $category['category_image']?>"
                                alt="<?php echo $category['name']?>">
                        </div>
                        <div class="card-footer bg-transparent border-0">
                            <p class="text-center text-large "><?php echo $category['name']?></p>
                        </div>
                    </a>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
</section>
<section class="mb-5">
    <div class="section-title strike mt-5">
        <span>Use the FAQ <?php if(isset($cat_name)){ echo $cat_name;}?></span>
    </div>
    <div class="d-flex justify-content-center">
        <div class="faq-container">
            <div class="faq-content bg-primary-light rounded h-100 overflow-auto p-5">
            <?php foreach($support['faq'] as $key => $faq){?>
                <div class="border-bottom mb-4 p-2">
                    <div class="d-flex">
                        <div class="col-10 p-0">
                            <p class="font-weight-bold mb-0">
                                <a data-toggle="collapse" href="#faq-<?= $key;?>" role="button"
                                    aria-expanded="false" class="text-decoration-none" style="color:black">
                                    <?php echo $faq['question']; ?>
                                </a>
                            </p>
                        </div>
                        <div class="col-2 p-0 d-flex justify-content-end">
                            <a data-toggle="collapse" href="#faq-<?= $key;?>" role="button" aria-expanded="false">
                                <img src="<?php echo  \Cake\Routing\Router::url('/',true) .$pluginName.'/img/icon_down.png'?>" style="width: 1.5rem">
                            </a>
                        </div>
                    </div>
                    <div class="collapse mt-3 font-weight-lighter" id="faq-<?= $key;?>">
                    <?php echo $faq['answer']; ?>
                    </div>
                </div>
               <?php } ?>
            </div>
        </div>
    </div>
</section>