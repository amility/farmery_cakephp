<div class="modal fade" id="loginModal" role="dialog" aria-labelledby="loginModal" aria-hidden="true"
    data-auth-state="">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body p-0">
                <div class="carousel pointer-event" data-ride="carousel" data-interval="false"
                    id="authenticationCarousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="row m-0">
                                <div class="col p-0 d-none d-md-block">
                                    <img src="<?php echo  \Cake\Routing\Router::url('/',true) .$pluginName.'/img/login_banner.png';?>"
                                        width="100%" height="auto">
                                </div>
                                <div class="col">
                                    <button type="button" class="close pt-2 text-gray-300" data-dismiss="modal">
                                        ×
                                    </button>
                                    <div class="auth-form">
                                        <h3 class="font-weight-bold">Log In</h3>
                                        <p class="text-muted">Start using the app in few simple steps</p>
                                        <form id="login-form" novalidate="novalidate">
                                            <div class="form-container">
                                                <input type="hidden" name="intended_url" id="intended_url" value="">
                                                <div class="form-group">
                                                    <input type="tel" class="form-control" name="mobile_number"
                                                        id="mobile_number" placeholder="Registered Mobile Number"
                                                        required="" pattern="^\d{10}$" maxlength="10">
                                                    <small class="form-text text-secondary d-flex justify-content-end">
                                                        <span class="mr-auto" id="otp-message"></span>
                                                        <a id="send-login-otp">Send OTP</a>
                                                    </small>
                                                </div>
                                                <div class="form-group mt-4">
                                                    <input type="number" class="form-control" name="otp" id="otp"
                                                        placeholder="OTP" required="" disabled="disabled">
                                                    <small class="form-text text-secondary d-flex justify-content-end">
                                                        <span class="mr-auto" id="login-message"></span>
                                                    </small>
                                                </div>
                                                <div class="form-group mt-4 d-flex justify-content-start">
                                                    <button class="btn btn-secondary btn-lg text-white px-lg-5 mr-auto"
                                                        type="submit" disabled="disabled">Login
                                                    </button>
                                                    <small class="form-text text-secondary">
                                                        <a id="login-form-reset">Reset</a>
                                                    </small>
                                                </div>
                                            </div>
                                        </form>
                                        <div class="link-container">
                                            <span> Don't have an account ?
                                                <a class="carousel-control-next sign-up-link "
                                                    href="#authenticationCarousel" data-slide="next"> Sign Up Now</a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row m-0">
                                <div class="col p-0 d-none d-md-block">
                                    <img src="<?php echo  \Cake\Routing\Router::url('/',true) .$pluginName.'/img/login_banner.png';?>"
                                        width="100%" height="auto">
                                </div>
                                <div class="col">
                                    <button type="button" class="close pt-2 text-gray-300" data-dismiss="modal">
                                        ×
                                    </button>
                                    <div class="auth-form">
                                        <h3 class="font-weight-bold">Sign Up</h3>
                                        <p class="text-muted">Start using the app in few simple steps</p>
                                        <span class="mr-auto my-2" id="sign-up-message"></span>
                                        <form id="signup-form" novalidate="novalidate">
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="firstname" id="first-name"
                                                    placeholder="First Name" required="" maxlength="100">
                                            </div>
                                            <div class="form-group mt-4">
                                                <input type="text" class="form-control" name="lastname" id="last-name"
                                                    placeholder="Last Name" required="" maxlength="100">
                                            </div>
                                            <div class="form-group mt-4">
                                                <input type="tel" class="form-control" id="your-mobile-no"
                                                    placeholder="Your Mobile Number" name="mobile_number" required=""
                                                    pattern="^\d{10}$" maxlength="10">
                                            </div>
                                            <div class="form-group mt-4">
                                                <input type="email" class="form-control" id="email" name="email"
                                                    placeholder="Email Address" required="">
                                            </div>
                                            <div class="form-group mt-4">
                                                <select class="form-control select2" id="signup_city" name="city_id"
                                                    style="width: 100%;" required="">
                                                    <option value="" selected="selected">Select City
                                                    </option>
                                                    <?php foreach(json_decode($getCities,true)["cities"] as $key => $value){?>
                                                    <option value="<?= $key?>">
                                                        <?= $value?>
                                                    </option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                            <div class="form-group mt-4">
                                                <select class="form-control select2 " id="signup_area" name="area_id"
                                                    style="width: 100%;" required="">
                                                    <option value="" selected="selected">Select Area
                                                    </option>
                                                </select>
                                            </div>
                                            <div class="form-group mt-4">
                                                <select class="form-control select2" id="signup_subarea"
                                                    name="sub_area_id" style="width: 100%;" required="">
                                                    <option value="" selected="selected">Select Subarea
                                                    </option>
                                                </select>
                                            </div>
                                            <div class="form-group mt-4">
                                                <input type="text" class="form-control" id="street" name="street"
                                                    placeholder="Street" required="">
                                            </div>
                                            <div class="form-group mt-4">
                                                <button class="btn btn-secondary btn-lg text-white px-lg-5"
                                                    type="submit">
                                                    Send OTP
                                                </button>
                                            </div>
                                        </form>
                                        <form id="signup-otp-form" style="display: none">
                                            <input type="hidden" name="firstname" id="first-name-otp">
                                            <input type="hidden" name="lastname" id="last-name-otp">
                                            <input type="hidden" name="mobile_number" id="your-mobile-no-otp">
                                            <input type="hidden" name="email" id="email-otp">
                                            <input type="hidden" name="city_id" id="city_id-otp">
                                            <input type="hidden" name="area_id" id="area_id-otp">
                                            <input type="hidden" name="sub_area_id" id="sub_area_id-otp">
                                            <input type="hidden" name="street" id="street-otp">
                                            <div class="form-group mt-4">
                                                <input type="number" class="form-control" name="otp" id="otp"
                                                    placeholder="OTP" required="required">
                                            </div>
                                            <div class="form-group mt-4 d-flex justify-content-start">
                                                <button class="btn btn-secondary btn-lg text-white px-lg-5 mr-auto "
                                                    type="submit">
                                                    Complete Sign Up
                                                </button>
                                                <small class="form-text text-secondary">
                                                    <a id="signup-form-reset">Reset</a>
                                                </small>
                                            </div>
                                        </form>
                                        <div class="link-container">
                                            <span> Already have an account ?
                                                <a class="carousel-control-prev sign-up-link "
                                                    href="#authenticationCarousel" data-slide="next"> Log In Now</a>
                                            </span>
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