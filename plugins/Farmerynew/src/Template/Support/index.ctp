

    <section class="section-search-support">
        <div class="d-flex justify-content-center">
            <div class="overlay-search-support">
                <p class="font-weight-bolder text-center h2">Farmery Support</p>
                <div class="d-flex justify-content-center">
                    <form>
                        <div class="form-group form-group-style typeahead">
                            <input id="support-search" type="search" aria-describedby="btn-search-support"
                                autocomplete="off" placeholder="Search your query"
                                class="form-control search-style shadow typeahead-input">
                            <div class="typeahead-dropdown list-group" id="support-search-results">
                                <a class="list-group-item">Type something to search..</a>
                            </div>
                        </div>
                        <div class="input-group-append">
                            <button id="btn-search-support" type="submit" class="btn">
                                <img src="<?php echo  \Cake\Routing\Router::url('/',true) .$pluginName.'/img/black_search_icon.png'?>" class="search-icon-support">
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-center">
            <div class="position-relative w-100">
                <img src="<?php echo  \Cake\Routing\Router::url('/',true) .$pluginName.'/img/mainBanner.jpg'?>" width="100%" height="auto">
            </div>
        </div>
    </section>
    <section class="support-product-category">
        <div class="section-title strike">
            <span>Specific Product Query</span>
        </div>
        <div class="d-flex justify-content-center">
            <div class="w-85 bg-primary-light category-container rounded">
                <div class="row m-0">
                    <?php foreach ($categories['data'] as $key=>$category){?>
                    <div class="col-lg col-md-4 col-6  d-flex justify-content-center p-0">
                        <a class="category-card mx-auto p-xl-3 text-decoration-none" href="/support/<?php echo $category['id'];?>/<?php echo $category['name'];?>">
                            <div class="card-body">
                                <img class="img-fluid" src="<?php echo $category['category_image']?>" alt="<?php echo $category['name']?>">
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
    <section class="section mt-5 h-100 overflow-auto">
        <div class="section-title strike mt-5">
            <span>Use the FAQ </span>
        </div>
        <div class="d-flex justify-content-center">
            <div class="faq-container bg-primary-light rounded h-100 overflow-auto p-5">
                <?php foreach($support['faq'] as $key => $faq){?>
                <div class="border-bottom mb-4 p-2">
                    <div class="d-flex">
                        <div class="col-10 p-0">
                            <p class="font-weight-bold mb-0">
                                <a data-toggle="collapse" href="#faq-<?php echo $key; ?>" role="button" aria-expanded="false"
                                    class="text-decoration-none" style="color:black">
                                    <?php echo $faq['question']; ?>
                                </a>
                            </p>
                        </div>
                        <div class="col-2 p-0 d-flex justify-content-end">
                            <a data-toggle="collapse" href="#faq-<?php echo $key; ?>" role="button" aria-expanded="false">
                                <img src="<?php echo  \Cake\Routing\Router::url('/',true) .$pluginName.'/img/icon_down.png'?>" style="width: 1.5rem">
                            </a>
                        </div>
                    </div>
                    <div class="collapse mt-3 font-weight-lighter" id="faq-<?php echo $key; ?>">
                        <?php echo $faq['answer']; ?>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </section>
    <section class="section mt-5 h-100 section-schedule-call">
        <div class="section-title strike mt-5">
            <span>Speak with us</span>
        </div>
        <div class="row">
            <div class="container d-flex justify-content-center">
                <div class="col">
                    <div class="outer-div-chat d-flex flex-column">
                        <div class="text-center">
                            <p class="page-sub-title">Instant Farmery Chat Support</p>
                            <a href="javascript:void(Tawk_API.toggle())">
                                <img src="<?php echo  \Cake\Routing\Router::url('/',true) .$pluginName.'/img/chat_img.jpg'?>" class="w-80 img-fluid schedule-call-img rounded">
                            </a>
                        </div>
                        <div class="schedule-call-action mt-5 d-flex justify-content-center">
                            <button class="btn btn-secondary" onclick="void(Tawk_API.toggle())">
                                Chat with us
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="outer-div-chat d-flex flex-column">
                        <div class="text-center">
                            <p class="page-sub-title">Schedule A Call With Us</p>
                            <img src="<?php echo  \Cake\Routing\Router::url('/',true) .$pluginName.'/img/call_img.jpg'?>" class="w-80 img-fluid schedule-call-img rounded">
                        </div>
                        <div class="schedule-call-action mt-5 d-flex justify-content-center">
                            <button class="btn btn-secondary" data-toggle="modal" data-target="#scheduleCallModal">
                                Schedule Call
                            </button>
                        </div>
                    </div>
                    <div class="modal" id="scheduleCallModal" tabindex="-1">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">

                                <div class="modal-header d-block bg-primary">
                                    <button type="button" class="close text-white" data-dismiss="modal"
                                        aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                    <h5 class="text-white text-center" id="exampleModalLabel">Schedule Call With
                                        Farmery Support</h5>
                                </div>

                                <div class="modal-body">
                                    <div class="d-flex justify-content-center rounded bg-primary-light">
                                        <div class="form-message" id="schedule-call-form-message"></div>
                                    </div>
                                    <form id="schedule-call-form" action="https://www.farmery.in/support/schedulecall"
                                        method="POST" novalidate="novalidate">
                                        <input type="hidden" name="_token"
                                            value="jS1P0BQ9Cm1HdWSevK98qfDcV2tnkrhJlUKFLW33">
                                        <div class="form-group">
                                            <label for="name" class="font-weight-bolder">Name:</label>
                                            <input type="text" class="form-control" name="name" id="name"
                                                required="required" placeholder="Enter your name">
                                        </div>
                                        <div class="form-group">
                                            <label for="mobile" class="font-weight-bolder">Mobile
                                                Number:</label>
                                            <input type="number" class="form-control" name="mobile" id="mobile"
                                                pattern="^\d{10}$" required="required"
                                                placeholder="Enter your number to call">
                                        </div>
                                        <div class="form-group">
                                            <label for="email" class="font-weight-bolder">Email:</label>
                                            <input type="email" class="form-control" name="email" id="email"
                                                pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required="required"
                                                placeholder="Your email address">
                                        </div>
                                        <div class="form-group">
                                            <label for="subject" class="font-weight-bolder">Subject</label>
                                            <input type="text" class="form-control" name="subject" id="subject"
                                                required="required">
                                        </div>
                                        <div class="form-group">
                                            <label for="message" class="font-weight-bolder">Message:</label>
                                            <textarea rows="4" name="message" class="form-control"
                                                id="message"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <button type="submit"
                                                class="btn btn-secondary float-right">Schedule</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section-what-people-say">
        <div class="what-people-say-container">
            <div class="row m-0">
                <div class="container">
                    <div class="d-flex justify-content-center p-0">
                        <div class="outer-div-video">
                            <div class="section-title strike mt-5">
                                <span>What people say</span>
                            </div>
                            <div class="container d-flex">
                                <div class="video-container w-100">
                                    <video playsinline="playsinline" loop="loop" class="w-100 rounded"
                                        id="support-video">
                                        <source src="<?php echo  \Cake\Routing\Router::url('/',true) .$pluginName.'/video/MVI_1165.MOV'?>" type="video/mp4">
                                    </video>
                                    <div class="play-pause">
                                        <a class="video-control" data-target="support-video">
                                            <i class="fa fa-play fa-2x"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
