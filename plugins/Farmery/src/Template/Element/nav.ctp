<nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-transparent" id="main-nav" style="padding-right: 32px;">
    <div class="container-fluid">
        <div class="navbar-header">
            <button class="navbar-toggler navbar-toggler-right border-0" type="button" data-trigger="#nav-links">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="https://www.farmery.in/">
                <img src=" <?php echo  \Cake\Routing\Router::url('/',true) .$pluginName.'/img/logo_white.png'?>" alt="Farmery Logo">
            </a>
        </div>
        <div class="nav-links mobile-menu" id="nav-links">
            <div class="mobile-menu-header d-flex">
                <div class="row align-self-center d-flex w-100">
                    <span class="h5 mr-auto p-4 ml-2">Hi, </span>
                    <button class="close text-gray-300 p-2"> ×</button>
                </div>
            </div>
            <ul class="navbar-nav mx-auto">
                <li class="nav-item"><a class="nav-link active" href="/" id="homePage">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="/whyFarmery">Why Farmery</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle subnavbtn" href="products"
                        onclick="window.location.href='/products'" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Products
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <div class="row rowsubmenu">
                            <div class="subcol col">
                                <span class="submenutitle"><a href="category">Dairy</a></span>
                                <hr style="border-top: 1px solid black;margin: 8px 0px 0px 0px;">
                                <a style="font-size:0.8rem;padding:8px 0px;" href="subscription">
                                    Buttermilk Subscription</a>
                                <a style="font-size:0.8rem;padding:8px 0px;" href="subscription">
                                    Desi Cow Milk Subscription</a>
                                <a style="font-size:0.8rem;padding:8px 0px;" href="subscription">
                                    Probiotic Curd (200 gms) Subscription</a>
                                <a style="font-size:0.8rem;padding:8px 0px;" href="subscription">
                                    Buffalo Milk - Bottle Subscription</a>
                                <a style="font-size:0.8rem;padding:8px 0px;" href="subscription">
                                    Cow Milk - Bottle Subscription</a>
                                <a href="category" style="font-size:0.8rem;padding:8px 0px;">See more</a>
                            </div>
                            <div class="subcol col">
                                <span class="submenutitle"><a href="category">Fruits</a></span>
                                <hr style="border-top: 1px solid black;margin: 8px 0px 0px 0px;">
                                <a style="font-size:0.8rem;padding:8px 0px;" href="general">
                                    Flame Seedless Grapes</a>
                                <a style="font-size:0.8rem;padding:8px 0px;" href="general">
                                    Sun-Dried Medjool Dates</a>
                                <a style="font-size:0.8rem;padding:8px 0px;" href="general">
                                    Indian Kiwi</a>
                                <a style="font-size:0.8rem;padding:8px 0px;" href="general">
                                    Papaya Honey Dew</a>
                                <a style="font-size:0.8rem;padding:8px 0px;" href="general">
                                    Mahabaleshwar Strawberries</a>
                                <a href="category" style="font-size:0.8rem;padding:8px 0px;">See more</a>
                            </div>
                            <div class="subcol col">
                                <span class="submenutitle"><a href="category">Groceries</a></span>
                                <hr style="border-top: 1px solid black;margin: 8px 0px 0px 0px;">
                                <a style="font-size:0.8rem;padding:8px 0px;" href="general">
                                    Cow Ghee</a>
                                <a style="font-size:0.8rem;padding:8px 0px;" href="general">
                                    A2 Cow Ghee</a>
                                <a style="font-size:0.8rem;padding:8px 0px;" href="general">
                                    Raw Monoflora Rosewood Honey</a>
                                <a style="font-size:0.8rem;padding:8px 0px;" href="general">
                                    Raw Monoflora Sidr Honey </a>
                                <a style="font-size:0.8rem;padding:8px 0px;" href="general">
                                    Jaggery </a>
                                <a href="category" style="font-size:0.8rem;padding:8px 0px;">See more</a>
                            </div>
                            <div class="subcol col">
                                <span class="submenutitle"><a href="category">Vegetables</a></span>
                                <hr style="border-top: 1px solid black;margin: 8px 0px 0px 0px;">
                                <a style="font-size:0.8rem;padding:8px 0px;" href="general">
                                    Petha - Pumpkin</a>
                                <a style="font-size:0.8rem;padding:8px 0px;" href="general">
                                    Lauki Long - Bottle Gourd </a>
                                <a style="font-size:0.8rem;padding:8px 0px;" href="general">
                                    Cabbage</a>
                                <a style="font-size:0.8rem;padding:8px 0px;" href="general">
                                    Mooli/Radish</a>
                                <a style="font-size:0.8rem;padding:8px 0px;" href="general">
                                    Cauliflower</a>
                                <a href="category" style="font-size:0.8rem;padding:8px 0px;">See more</a>
                            </div>
                            <div class="subcol col">
                                <span class="submenutitle"><a href="category">Juices</a></span>
                                <hr style="border-top: 1px solid black;margin: 8px 0px 0px 0px;">
                                <a href="category" style="font-size:0.8rem;padding:8px 0px;">See more</a>
                            </div>
                            <div class="subcol col">
                                <span class="submenutitle"><a href="category">Sweets</a></span>
                                <hr style="border-top: 1px solid black;margin: 8px 0px 0px 0px;">
                                <a style="font-size:0.8rem;padding:8px 0px;" href="general">
                                    Farmery Besan Ladoo</a>
                                <a style="font-size:0.8rem;padding:8px 0px;" href="general">
                                    Farmery Mathura Peda</a>
                                <a href="category" style="font-size:0.8rem;padding:8px 0px;">See more</a>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="nav-item"><a class="nav-link" href="/community">Community</a></li>
                <li class="nav-item"><a class="nav-link" href="/support">Support</a></li>
                <li class="nav-item">
                    <a class="nav-link" href="https://blog.farmery.in/" data-target="_blank">Blog</a>
                </li>
                <li class="nav-item nav-btn">
                    <div class="d-flex align-items-center flex-column">
                        <a class="btn btn-lg btn-secondary d-block d-md-none mx-auto" href="#" data-toggle="modal"
                            data-target="#bookTrialModal">
                            Start Trial
                        </a>
                    </div>
                </li>
            </ul>
        </div>
        <div class="nav-actions d-inline-block" id="nav-actions">
            <ul class="navbar-nav">
                <li class="nav-item position-relative">
                    <a href="wallet">
                        <img src=" <?php echo  \Cake\Routing\Router::url('/',true) .$pluginName.'/img/wallet_white.svg'?>" class="nav-icon img-icon">
                    </a>
                </li>
                <li class="nav-item">
                    <img src=" <?php echo  \Cake\Routing\Router::url('/',true) .$pluginName.'/img/basket_empty.png'?>" class="nav-icon img-icon" alt="Basket" id="cart-icon">
                    <div id="cart-badge" class="ml-4"></div>
                </li>
                <li class="nav-item">
                    <img src=" <?php echo  \Cake\Routing\Router::url('/',true) .$pluginName.'/img/user.png'?>" class="nav-icon img-icon" data-toggle="modal" data-target="#loginModal"
                        alt="User">
                </li>
                <li class="nav-item">
                    <a class="btn navbar-btn ml-2 btn-secondary btn-sm d-none d-md-block start-trial" href="#"
                        id="start-trial-btn">
                        Start Trial
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>