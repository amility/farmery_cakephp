

<!-- <?= $this->element('locationModal')?> -->
<?= $this->element('cartModal')?>
<?= $this->element('loginModal')?>


<footer class="footer col-sm-12 p-0 m-0" id="footer">
    <hr class="w-95 ">
    <div class="row m-0 p-4 about-info" id="about-info">
        <div class="col-lg-6 col-md-6 col-sm-12 order-sm-first border-right">
            <p class="text-muted text-left"></p>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 p-lg-5 pt-sm-5">
            <div class="text-left">
                <h5>Payment</h5>
                <div class="row m-0 pt-3 payment-methods">
                    <img src="img/rupay.svg" alt="Rupay" height="auto">
                    <img src="img/mastercard.svg" alt="Mastercard" height="auto">
                    <img src="img/visa.svg" alt="visa" height="auto">
                    <img src="img/paytm.svg" alt="Paytm" height="auto">
                    <img src="img/cash.png" alt="Freecharge" height="auto">
                </div>
                <div class="row m-0 pt-3 payment-modes">
                    <ul class="d-flex text-center">
                        <li>Card</li>
                        <li class="pr-2 pl-2">|</li>
                        <li class="text-center">Net Banking</li>
                        <li class="pr-2 pl-2">|</li>
                        <li>UPI</li>
                        <li class="pr-2 pl-2">|</li>
                        <li class="text-center">Farmery Wallet</li>
                        <li class="pr-2 pl-2">|</li>
                        <li>COD</li>
                    </ul>
                </div>
                <h5 class="pt-3">Social Links</h5>
                <div class="row m-0 pt-3 social-links text-left">
                    <span>
                        <a href="https://www.facebook.com/FarmeryFarmFresh" target="_blank">
                            <i class="fa fa-facebook-f" aria-hidden="true"></i>
                        </a>
                    </span>
                    <span class="pl-3 pr-3">
                        <a href="https://www.instagram.com/farmeryfarmfresh" target="_blank">
                            <i class="fa fa-instagram" aria-hidden="true"></i>
                        </a>
                    </span>
                    <span class="pr-3">
                        <a href="" target="_blank">
                            <i class="fa fa-twitter fa-fw" aria-hidden="true"></i>
                        </a>
                    </span>
                    <span>
                        <a href="https://www.youtube.com/channel/UCQIN_Ik8mCUvtCW8_MFYM8w" target="_blank">
                            <i class="fa fa-youtube-play" aria-hidden="true"></i>
                        </a>
                    </span>
                </div>
            </div>
        </div>
    </div>
    <hr class="w-95">
    <div class="row m-0 p-4 footer-links" id="footer-links">
        <div class="col-md-3 col-sm-12 p-4 text-left">
            <h5>Main Pages</h5>
            <ul class="pt-2">
                <li>
                    <a href="whyFarmery">Why Farmery</a>
                </li>
                <li>
                    <a href="community">Community</a>
                </li>
                <li>
                    <a href="support">Support</a>
                </li>
                <li>
                    <a href="https://www.farmery.in/careers">Careers</a>
                </li>
            </ul>
        </div>
        <div class="col-md-3 col-sm-12 p-4 text-left">
            <h5>Our Products</h5>
            <ul class="pt-2">
                <li>
                    <a href="category">Dairy</a>
                </li>
                <li>
                    <a href="category">Fruits</a>
                </li>
                <li>
                    <a href="category">Groceries</a>
                </li>
                <li>
                    <a href="category">Vegetables</a>
                </li>
                <li>
                    <a href="category">Juices</a>
                </li>
                <li>
                    <a href="category">Sweets</a>
                </li>
            </ul>
        </div>
        <div class="col-md-3 col-sm-12 p-4 text-left">
            <h5>Important Links</h5>
            <ul class="pt-2">
                <li>
                    <a href="faq">FAQ's</a>
                </li>
                <li>
                    <a href="privacyPolicy">Privacy Policy</a>
                </li>
                <li>
                    <a href="termsandconditions">Terms and Conditions</a>
                </li>
                <li>
                    <a href="refundPolicy">Refund Policy</a>
                </li>
                <li>
                    <a href="shippingPolicy">Shipping Policy</a>
                </li>
            </ul>
        </div>
        <div class="col-md-3 col-sm-12 p-4 text-left">
            <h5>Contact</h5>
            <div class="contact-info-block pb-4">
                <div class="row m-0">
                    <span>Contact Number: <a href="tel:9899779559" class="text-gray-900">9899779559</a></span>
                </div>
                <div class="row m-0 pt-2">
                    <span>Email: <a
                            href="mailto:care@farmery.in?subject=Hi%20..%20%3C%20Your%20Subject%20Here%20%3E&amp;body=Please%20provide%20the%20details%20which%20will%20help%20us%20understand%20your%20issue%20better%20or%20serve%20you%20better"
                            class="text-gray-900">care@farmery.in</a>
                    </span>
                </div>
            </div>
            <div class="app-download-links pt-2">
                <h6 class="pt-2">Download the App</h6>
                <div>
                    <a href="https://apps.apple.com/us/app/farmery/id1414220360?ls=1" target="_blank">
                        <img src="img/app_store.svg" alt="Apple Store" height="auto"></a>
                    <a href="https://play.google.com/store/apps/details?id=com.fudfill" target="_blank">
                        <img src="img/play_store.svg" alt="Google Play Store" height="auto"></a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-12 col-md-12 col-sm-12 col-xs-12 text-center bg-dark p-0" id="copyright">
        <p class="pt-2 pb-2 text-gray-300 ">Copyright © 2022 Natural Box Retail Pvt Ltd. All rights
            reserved.</p>
    </div>
</footer>
</div>
<div id="modal-content"></div>
<?= $this->element('deleteModal')?>


<script src="js/vendor.js"></script>
<script src="js/ajax-loading.js"></script>
<script src="js/app.js"></script>
<script src="js/cart.js" defer="defer"></script>
<script src="js/products.js" defer="defer"></script>
<script src="js/subscriptions.js"></script>
<script src="js/auth.js"></script>
<script src="js/register.js"></script>
<script src="js/user.js" defer="defer"></script>
<script src="js/downloadapp.js" defer="defer"></script>
<script src="js/home.js" defer="defer"></script>
<script src="js/header.js" defer="defer"></script>
<script type="text/javascript" src="js/select2.js"></script>
<script type="text/javascript" src="files/select2.htm"></script>
<script src="js/location.js"></script>



<script>
(function(i, s, o, g, r, a, m) {
    i['GoogleAnalyticsObject'] = r;
    i[r] = i[r] || function() {
        (i[r].q = i[r].q || []).push(arguments)
    }, i[r].l = 1 * new Date();
    a = s.createElement(o),
        m = s.getElementsByTagName(o)[0];
    a.async = 1;
    a.src = g;
    m.parentNode.insertBefore(a, m)
})(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

ga('create', "UA-58830073-1", 'auto');
ga('send', 'pageview');
</script>


<script type="text/javascript">
var Tawk_API = Tawk_API || {},
    Tawk_LoadStart = new Date();
(function() {
    var s1 = document.createElement("script"),
        s0 = document.getElementsByTagName("script")[0];
    s1.async = true;
    s1.src = 'https://embed.tawk.to/5787713f2664db961a875228/default';
    s1.charset = 'UTF-8';
    s1.setAttribute('crossorigin', '*');
    s0.parentNode.insertBefore(s1, s0);
})();
jQuery(".choose-address").click(function() {
    var choosedAddressId = jQuery(this).attr('data-id');
    jQuery("#choosed-address").val(choosedAddressId);
    jQuery("#choosenAddressForm").submit();
});
</script>
<script type="text/javascript">
window.NREUM || (NREUM = {});
NREUM.info = {
    "beacon": "bam.nr-data.net",
    "licenseKey": "NRJS-34bf67c7cd960795e66",
    "applicationID": "510390795",
    "transactionName": "NV0AbUICWxcFVkEIXAwXI1pECloKS11aDFY=",
    "queueTime": 0,
    "applicationTime": 17841,
    "atts": "GRoDGwoYSBk=",
    "errorBeacon": "bam.nr-data.net",
    "agent": ""
}
</script>

<div id="ajaxLoading"
    style="display: none;position: fixed;top: 0;bottom: 0;left: 0;right: 0;margin: auto;padding: 8px;text-align: center;vertical-align: middle;width:85px;height:85px;z-index:1000;background:rgba(0, 0, 0, 0.7);border-radius:4px">
    <img src="img/loader.png" style="margin-bottom:8px;width:45px;height:45px">
    <p style="margin:0;font-size:14px;color:#fff">Loading...</p>
</div><iframe
    style="display: none !important; width: 1px !important; height: 1px !important; opacity: 0 !important; pointer-events: none !important;"
    name="_hjRemoteVarsFrame" title="_hjRemoteVarsFrame" id="_hjRemoteVarsFrame"
    src="files/box-21ccaa45726c0f3c8c458f7a87eb2298.htm"></iframe>
<script async="" charset="UTF-8" src="js/en.js"></script>
<div id="suel1ob4rdk41643106293707" style="display: block !important;"><iframe src="files/a_004.htm"
        scrolling="no"
        style="outline:none !important; visibility:visible !important; resize:none !important; box-shadow:none !important; overflow:visible !important; background:none !important; opacity:1 !important; filter:alpha(opacity=100) !important; -ms-filter:progid:DXImageTransform.Microsoft.Alpha(Opacity 1}) !important; -mz-opacity:1 !important; -khtml-opacity:1 !important; top:auto !important; right:auto !important; bottom:20px !important; left:20px !important; position:fixed !important; border:0 !important; min-height:60px !important; min-width:64px !important; max-height:60px !important; max-width:64px !important; padding:0 !important; margin:0 !important; -moz-transition-property:none !important; -webkit-transition-property:none !important; -o-transition-property:none !important; transition-property:none !important; transform:none !important; -webkit-transform:none !important; -ms-transform:none !important; width:64px !important; height:60px !important; display:block !important; z-index:1000001 !important; background-color:transparent !important; cursor:none !important; float:none !important; border-radius:unset !important; pointer-events:auto !important; clip:auto !important;"
        id="s4og0osprtoc1643106293814" class="" title="chat widget" width="64px" height="60px"
        frameborder="0"></iframe><iframe src="files/a_004.htm" scrolling="no"
        style="outline:none !important; visibility:visible !important; resize:none !important; box-shadow:none !important; overflow:visible !important; background:none !important; opacity:1 !important; filter:alpha(opacity=100) !important; -ms-filter:progid:DXImageTransform.Microsoft.Alpha(Opacity 1}) !important; -mz-opacity:1 !important; -khtml-opacity:1 !important; top:auto !important; right:auto !important; bottom:90px !important; left:10px !important; position:fixed !important; border:0 !important; min-height:400px !important; min-width:320px !important; max-height:400px !important; max-width:320px !important; padding:0 !important; margin:0 !important; -moz-transition-property:none !important; -webkit-transition-property:none !important; -o-transition-property:none !important; transition-property:none !important; transform:none !important; -webkit-transform:none !important; -ms-transform:none !important; width:320px !important; height:400px !important; display:none !important; z-index:auto !important; background-color:transparent !important; cursor:none !important; float:none !important; border-radius:5px !important; pointer-events:auto !important; clip:auto !important;"
        id="wdhhlsa0nurg1643106293910" class="" title="chat widget" width="320px" height="400px"
        frameborder="0"></iframe><iframe src="files/a_004.htm" scrolling="no"
        style="outline:none !important; visibility:visible !important; resize:none !important; box-shadow:none !important; overflow:visible !important; background:none !important; opacity:1 !important; filter:alpha(opacity=100) !important; -ms-filter:progid:DXImageTransform.Microsoft.Alpha(Opacity 1}) !important; -mz-opacity:1 !important; -khtml-opacity:1 !important; top:auto !important; right:auto !important; bottom:100px; left:20px !important; position:fixed !important; border:0 !important; min-height:495px !important; min-width:360px !important; max-height:495px !important; max-width:360px !important; padding:0 !important; margin:0 !important; -moz-transition-property:none !important; -webkit-transition-property:none !important; -o-transition-property:none !important; transition-property:none !important; transform:none !important; -webkit-transform:none !important; -ms-transform:none !important; width:360px !important; height:495px !important; display:none !important; z-index:auto !important; background-color:transparent !important; cursor:none !important; float:none !important; border-radius:unset !important; pointer-events:auto !important; clip:auto !important;"
        id="o2a1bahi7kds1643106293876" class="" title="chat widget" width="360px" height="495px"
        frameborder="0"></iframe><iframe src="files/a_004.htm" scrolling="no"
        style="outline:none !important; visibility:visible !important; resize:none !important; box-shadow:none !important; overflow:visible !important; background:none !important; opacity:1 !important; filter:alpha(opacity=100) !important; -ms-filter:progid:DXImageTransform.Microsoft.Alpha(Opacity 1}) !important; -mz-opacity:1 !important; -khtml-opacity:1 !important; top:auto !important; right:auto !important; bottom:15px !important; left:77px !important; position:fixed !important; border:0 !important; min-height:90px !important; min-width:259px !important; max-height:90px !important; max-width:259px !important; padding:0 !important; margin:0px 0 0 0 !important; -moz-transition-property:none !important; -webkit-transition-property:none !important; -o-transition-property:none !important; transition-property:none !important; transform:rotate(0deg) translateZ(0); -webkit-transform:rotate(0deg) translateZ(0); -ms-transform:rotate(0deg) translateZ(0); width:259px !important; height:90px !important; display:block !important; z-index:1000000 !important; background-color:transparent !important; cursor:none !important; float:none !important; border-radius:unset !important; pointer-events:auto !important; clip:auto !important; -moz-transform:rotate(0deg) translateZ(0); -o-transform:rotate(0deg) translateZ(0); transform-origin:0; -moz-transform-origin:0; -webkit-transform-origin:0; -o-transform-origin:0; -ms-transform-origin:0;"
        id="lhv0ps6cl141643106293842" class="" title="chat widget" width="259px" height="90px" frameborder="0"></iframe>
</div>
</body>

</html>