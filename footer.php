<footer id="htc__footer">
    <style>
        li a{
            text-decoration:none;
        }

        
.footer__top__wrap {
    border-bottom: 1px solid #252525;
    padding-bottom: 76px;
    padding-top: 96px;
}
.ft__title h4 {
    color: #d4d4d4;
    font-size: 16px;
    padding-left: 53px;
    position: relative;
    text-transform: uppercase;
}
.ft__logo {
    margin-bottom: 25px;
}
.ft__title h4 i {
    font-size: 16px;
    padding-right: 12px;
}
.ft__title h4::before {
    background: #d4d4d4 none repeat scroll 0 0;
    content: "";
    height: 2px;
    left: 0;
    position: absolute;
    top: 50%;
    -webkit-transform: translateY(-50%);
            transform: translateY(-50%);
    transition: all 0.4s ease 0s;
    width: 35px;
}
.ft__address + .ft__address {
    margin-top: 38px;
}
.ft__title {
    margin-bottom: 11px;
}
.ft__address:hover .ft__title h4::before {
    background: #c43b68 none repeat scroll 0 0;
    width: 40px;
}
.ft__details p {
    color: #555555;
    font-size: 16px;
}

.footer__top h2.ft__top__title {
    color: #c43b68;
    font-size: 24px;
    font-weight: 600;
    margin-bottom: 30px;
    text-transform: uppercase;
}
.ft__input__box.name {
  display: flex;
  margin-bottom: 44px;
  margin-left: -19px;
  margin-right: -19px;
  width: 100%;
}
.ft__input__box input {
      -moz-border-bottom-colors: none;
      -moz-border-left-colors: none;
      -moz-border-right-colors: none;
      -moz-border-top-colors: none;
      background: transparent none repeat scroll 0 0;
      border-color: currentcolor currentcolor #565656;
      -o-border-image: none;
         border-image: none;
      border-style: none none solid;
      border-width: 0 0 1px;
      color: #555555;
      margin: 0 19px;
      padding-bottom: 5px;
      width: 50%;
}
.ft__input__box textarea {
    -moz-border-bottom-colors: none;
    -moz-border-left-colors: none;
    -moz-border-right-colors: none;
    -moz-border-top-colors: none;
    background: transparent none repeat scroll 0 0;
    border-color: currentcolor currentcolor #565656;
    -o-border-image: none;
       border-image: none;
    border-style: none none solid;
    border-width: 0 0 1px;
    max-height: 90px;
}
.ft__btn {
    margin-top: 45px;
}
.ft__btn a {
    border: 1px solid #555555;
    color: #b4b4b4;
    display: inline-block;
    font-family: Poppins;
    font-weight: 400;
    height: 50px;
    line-height: 50px;
    padding: 0 25px;
    transition: all 0.4s ease 0s;
}
.ft__btn a i {
    padding-right: 8px;
}
.ft__btn a:hover {
    background: #c43b68 none repeat scroll 0 0;
    border: 1px solid #c43b68;
    color: #fff;
}




/*-----------------------
    Footer Container
-------------------------*/



.footer__container {
    padding-bottom: 100px;
    padding-top: 100px;
}
.title__line--2 {
    color: #ffffff;
    font-size: 15px;
    font-weight: 500;
    margin-bottom: 25px;
    text-transform: uppercase;
}
.footer .ft__details p {
    color: #a4a4a4;
    font-size: 16px;
    line-height: 22px;
}
.footer__btn a {
      color: #ffffff;
      font-family: Poppins;
      font-weight: 500;
      text-transform: uppercase;
      transition: 0.3s;
}
.footer__btn a:hover{
    color: #c43b68;
}
.footer__btn {
    margin-top: 22px;
}
.ft__list li a {
    color: #a4a4a4;
    font-size: 16px;
    transition: all 0.4s ease 0s;
}
.ft__list li + li {
    padding-top: 9px;
}
.ft__list li a:hover {
    color: #c43b68;
    padding-left: 3px;
}
.ft__social__link span {
    color: #ffffff;
    display: inline-block;
    font-family: Poppins;
    font-size: 16px;
    font-weight: 500;
    margin-bottom: 22px;
    text-transform: uppercase;
}
.ft__social__link {
    margin-top: 27px;
}
.social__link {
    display: flex;
}
.social__link li a i {
    background: transparent none repeat scroll 0 0;
    border-radius: 100%;
    color: #fff;
    display: inline-block;
    font-size: 16px;
    height: 32px;
    line-height: 30px;
    text-align: center;
    transition: all 0.4s ease 0s;
    width: 32px;
}
.social__link li + li {
    margin-left: 4px;
}
.social__link li a:hover i {
    background: #c43b68 none repeat scroll 0 0;
    color: #fff;
}
.lan__select > li {
      background: transparent none repeat scroll 0 0;
      border: 1px solid #252525;
      color: #fff;
      font-size: 15px;
      height: 35px;
      line-height: 35px;
      padding: 0 60px;
      position: relative;
}
.lan__select li a {
    color: #a4a4a4;
    font-size: 15px;
    transition: all 0.4s ease 0s;
}
.drop__ountry {
    background: #fff none repeat scroll 0 0;
    border: 1px solid #252525;
    left: 0;
    opacity: 0;
    padding: 10px 58px;
    position: absolute;
    top: 119%;
    transition: all 0.4s ease 0s;
    visibility: hidden;
    width: 100%;
}
.lan__select > li:hover .drop__ountry {
    opacity: 1;
    top: 100%;
    visibility: visible;
}
.drop__ountry li {
    line-height: 26px;
}
.lan__select li:hover > a {
    color: #c43b68;
}
.lan__select > li::before {
    color: #ffffff;
    content: "";
    font-family: Material-Design-Iconic-Font;
    font-size: 25px;
    position: absolute;
    right: 32px;
    top: 0;
}
.lan__select > li::after {
    background-attachment: scroll;
    background-clip: border-box;
    background-color: rgba(0, 0, 0, 0);
    background-image: url("../../images/others/shape/lan.png");
    background-origin: padding-box;
    background-repeat: no-repeat;
    background-size: cover;
    content: "";
    height: 13px;
    left: 20px;
    position: absolute;
    top: 9px;
    width: 18px;
}


.news__input input {
    background: transparent none repeat scroll 0 0;
    border: 1px solid #252525;
    height: 50px;
    padding: 0 24px;
}
.send__btn {
    margin-top: 20px;
}











/*----------------------
    Copyright Area
------------------------*/

.copyright__inner {
    align-items: center;
    display: flex;
    height: 70px;
    justify-content: space-between;
}
.copyright__inner p {
    color: #ffffff;
    font-size: 14px;
    text-transform: capitalize;
}
.copyright__inner p a {
    color: #c43b68;
}









    </style>
    <link rel="stylesheet" href="styl.css">
            <!-- Start Footer Widget -->
            <div class="footer__container bg__cat--1">
                <div class="container">
                    <div class="row">
                        <!-- Start Single Footer Widget -->
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="footer">
                                <h2 class="title__line--2">ABOUT US</h2>
                                <div class="ft__details">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim</p>
                                    <div class="ft__social__link">
                                        <ul class="social__link">
                                            <li><a href="#"><i class="icon-social-twitter icons"></i></a></li>

                                            <li><a href="#"><i class="icon-social-instagram icons"></i></a></li>

                                            <li><a href="#"><i class="icon-social-facebook icons"></i></a></li>

                                            <li><a href="#"><i class="icon-social-google icons"></i></a></li>

                                            <li><a href="#"><i class="icon-social-linkedin icons"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Footer Widget -->
                        <!-- Start Single Footer Widget -->
                        <div class="col-md-3 col-sm-6 col-xs-12 xmt-40">
                            <div class="footer">
                                <h2 class="title__line--2">information</h2>
                                <div class="ft__inner">
                                    <ul class="ft__list">
                                        <li><a href="#">About us</a></li>
                                        <li><a href="#">Delivery Information</a></li>
                                        <li><a href="#">Privacy & Policy</a></li>
                                        <li><a href="#">Terms  & Condition</a></li>
                                        <li><a href="#">Manufactures</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Footer Widget -->
                        <!-- Start Single Footer Widget -->
                        <div class="col-md-3 col-sm-6 col-xs-12 xmt-40 smt-40">
                            <div class="footer">
                                <h2 class="title__line--2">my account</h2>
                                <div class="ft__inner">
                                    <ul class="ft__list">
                                        <li><a href="#">My Account</a></li>
                                        <li><a href="cart.html">My Cart</a></li>
                                        <li><a href="#">Login</a></li>
                                        <li><a href="wishlist.html">Wishlist</a></li>
                                        <li><a href="checkout.html">Checkout</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Footer Widget -->
                        <!-- Start Single Footer Widget -->
                        <div class="col-md-3 col-sm-6 col-xs-12 xmt-40 smt-40">
                            <div class="footer">
                                <h2 class="title__line--2">Our service</h2>
                                <div class="ft__inner">
                                    <ul class="ft__list">
                                        <li><a href="#">My Account</a></li>
                                        <li><a href="cart.html">My Cart</a></li>
                                        <li><a href="#">Login</a></li>
                                        <li><a href="wishlist.html">Wishlist</a></li>
                                        <li><a href="checkout.html">Checkout</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Footer Widget -->
                        <!-- Start Single Footer Widget -->
                       
                        <!-- End Single Footer Widget -->
                    </div>
                </div>
            </div>
            <!-- End Footer Widget -->
            <!-- Start Copyright Area -->
            <div class="htc__copyright bg__cat--5">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="copyright__inner">
                                <p>Copyright© <a href="https://freethemescloud.com/">Free themes Cloud</a> 2018. All right reserved.</p>
                                <a href="#"><img src="images/others/shape/paypol.png" alt="payment images"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Copyright Area -->
        </footer>
        <!-- End Footer Style -->
    </div>
    <!-- Body main wrapper end -->

    <!-- Placed js at the end of the document so the pages load faster -->

    <!-- jquery latest version -->
    <script src="js/vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap framework js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- All js plugins included in this file. -->
    <script src="js/plugins.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <!-- Waypoints.min.js. -->
    <script src="js/waypoints.min.js"></script>
    <!-- Main js file that contents all jQuery plugins activation. -->
    <script src="js/main.js"></script>
	<script src="js/jquery.imgzoom.js"></script>
	<script src="js/custom.js"></script>
</body>

</html>