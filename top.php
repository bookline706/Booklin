<?php
require('connection.inc.php');
require('functions.inc.php');
require('add_to_cart.inc.php');


$cat_res=mysqli_query($con,"select * from categories where status=1 order by categories asc");
$cat_arr=array();
while($row=mysqli_fetch_assoc($cat_res)){
	$cat_arr[]=$row;	
}


$obj=new add_to_cart();
$wishlist_cunt=$obj->totalPro();
$totalProduct=$obj->totalProduct();

if(isset($_SESSION['USER_LOGIN'])){
	$uid=$_SESSION['USER_ID'];
	
	if(isset($_GET['wishlist_id'])){
		$wid=get_safe_value($con,$_GET['wishlist_id']);
		mysqli_query($con,"delete from wishlist where id='$wid' and user_id='$uid'");
	}

	$wishlist_count=mysqli_num_rows(mysqli_query($con,"select product.name,product.image,product_attributes.price,product_attributes.mrp,wishlist.id from product_attributes,product,wishlist where wishlist.product_id=product.id and wishlist.user_id='$uid'"));
}

$script_name=$_SERVER['SCRIPT_NAME'];
$script_name_arr=explode('/',$script_name);
$mypage=$script_name_arr[count($script_name_arr)-1];

$meta_title="My Ecom Website";
$meta_desc="My Ecom Website";
$meta_keyword="My Ecom Website";
$meta_url=SITE_PATH;
$meta_image="";
if($mypage=='product.php'){
	$product_id=get_safe_value($con,$_GET['id']);
	$product_meta=mysqli_fetch_assoc(mysqli_query($con,"select * from product where id='$product_id'"));
	$meta_title=$product_meta['meta_title'];
	$meta_desc=$product_meta['meta_desc'];
	$meta_keyword=$product_meta['meta_keyword'];
	$meta_url=SITE_PATH."product.php?id=".$product_id;
	$meta_image=PRODUCT_IMAGE_SITE_PATH.$product_meta['image'];
}if($mypage=='contact.php'){
	$meta_title='Contact Us';
}

?>
<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?php echo $meta_title?></title>
    <meta name="description" content="<?php echo $meta_desc?>">
	<meta name="keywords" content="<?php echo $meta_keyword?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	
	<meta property="og:title" content="<?php echo $meta_title?>"/>
	<meta property="og:image" content="<?php echo $meta_image?>"/>
	<meta property="og:url" content="<?php echo $meta_url?>"/>
	<meta property="og:site_name" content="<?php echo SITE_PATH?>"/>
	
    <link rel="stylesheet" href="csss/bootstrap.min.css">
    <link rel="stylesheet" href="csss/owl.carousel.min.css">
    <link rel="stylesheet" href="csss/owl.theme.default.min.css">
    <link rel="stylesheet" href="csss/core.css">
    <link rel="stylesheet" href="css/shortcode/shortcodess.css">
	<link rel="stylesheet" href="css/shortcode/sliders.css">
	<link rel="stylesheet" href="css/shortcode/header.css">
	<link rel="stylesheet" href="css/shortcode/.css">
    <link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="csss/plugins/meanmenu.css">
	<link rel="stylesheet" href="styl.css">
    
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
	<script src="js/vendor/modernizr-3.5.0.min.js"></script>
	<style>
		.header{
  z-index: 10;
  position: relative;
}
.main__menu {
  display: flex;
  justify-content: center;
}
.main__menu > li > a {
    color: #333333;
    display: block;
    font-size: 14px;
    height: 80px;
    line-height: 80px;
    position: relative;
    text-transform: uppercase;
    font-family: 'Poppins', sans-serif;
}
.main__menu li {
    position: relative;
    margin: 0 20px;
}
.main__menu > li:hover > a{
  color: #c43b68;
}
.logo a{
  display: block;
}
.header__right {
  display: flex;
  justify-content: flex-end;
  height: 80px;
  align-items: center;
}









/*---------------------------
  Header Two
-----------------------------*/

.offsetmenu.offsetmenu__on{
  opacity: 1;
  padding-bottom: 50px;
  left: calc(0px - 16px);
}
.offsetmenu{
  left: -100%;
}
.offsetmenu{
  overflow-y: inherit !important;
}













































/*---------------------------
  Header three
-----------------------------*/


.menu__click.menu__close__btn {
    right: 25px;
    position: absolute;
    top: 25px;
}
.menu__click.menu__close__btn  a i {
    background: #000 none repeat scroll 0 0;
}

/*------------------------
  Header 5
---------------------------*/



/* New Code */
.off__canvars__wrap.right--side.width-half {
    position: fixed;
    width: calc(50% + 2px);
    right: 0;
    top: 0;
    background: rgba(63, 217, 178, 0.85);
    z-index: 50;
    height: 100vh;
    padding: 50px;
    display: flex;
    justify-content: center;
    align-items: center;
    transition: all 0.3s ease-in-out 0s;
}
nav.off__canvars--menu ul li a {
    color: #fff;
    font-size: 20px;
    text-transform: capitalize;
}
nav.off__canvars--menu ul li {
    text-align: center;
    padding: 10px 0;
}
.off__canvars__open{
  overflow: hidden;
}

.off__canvars__wrap.right--side.width-half{
  opacity: 0;
  visibility: hidden; 
  z-index: -999;
  right: -90%;
}

.off__canvars__wrap.right--side.width-half.off__canvars__wrap__on{
  opacity: 1;
  visibility: visible;
  z-index: 99999999;
  right: 0;
}

nav.off__canvars--menu ul li ul li {
    z-index: 99999999;
}
nav.off__canvars--menu ul li ul li a {
    color: #fff;
    z-index: 99999999;
}

nav.off__canvars--menu ul li a:hover {
    color: #ddd;
}

nav.off__canvars--menu ul li ul li a:hover {
    color: #ddd;
}




















/*-----------------------
  Header One Search
-----------------------*/

.header__search a i {
    color: #000000;
    font-size: 19px;
    position: relative;
}

.htc__shopping__cart {
    position: relative;
}
.htc__shopping__cart a i {
    color: #000000;
    font-size: 19px;
}
.htc__shopping__cart a span.htc__qua {
  background: #c43b68;
  border-radius: 100%;
  color: #fff;
  font-size: 9px;
  height: 17px;
  line-height: 19px;
  position: absolute;
  right: -5px;
  text-align: center;
  top: -4px;
  width: 17px;
}
.header__search a {
  padding-right: 20px;
  position: relative;
}
.header__search a::before {
  background: #898989;
  content: "";
  height: 15px;
  position: absolute;
  right: 0;
  top: 50%;
  -webkit-transform: translateY(-70%);
          transform: translateY(-70%);
  width: 2px;
}

.header__account a {
    color: #000;
    font-size: 19px;
    margin-right: 5px;
    padding-right: 15px;
    position: relative;
	line-height: 35px;
}
.header__account a::before {
    background: #898989 none repeat scroll 0 0;
    content: "";
    height: 15px;
    position: absolute;
    right: 0;
    width: 2px;
}
.dropdown-item::before {
    background: none !important;
}



/*-----------------------------------------
  Sticky  For  Header
-------------------------------------------*/

.sticky__header.scroll-header {
  -webkit-animation: 300ms ease-in-out 0s normal none 1 running fadeInDown;
          animation: 300ms ease-in-out 0s normal none 1 running fadeInDown;
  background: rgba(246, 246, 248, 0.9) none repeat scroll 0 0;
  box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
  left: 0;
  margin: 0 auto;
  position: fixed;
  right: 0;
  top: 0;
  width: 100%;
  z-index: 99;
}
.header--3 .scroll-header .menumenu__container {
  background: transparent;
}


.fluid-container.mobile-menu-container {
  position: relative;
}
.mobile-logo {
  align-items: center;
  display: flex;
  height: 52px;
  left: 0;
  padding-left: 15px;
  position: absolute;
  top: 0;
  z-index: 2147483647;
}
.mobile-logo img {
  max-height: 25px;
}

/*-----------------------------
  Dropdown Menu
--------------------------------*/
.main__menu li.drop{
    position: relative;
}
.main__menu li.drop ul.dropdown {
  background: #ffffff none repeat scroll 0 0;
  box-shadow: 0 0 0px rgba(0, 0, 0, 0.1), 0 1px 3px rgba(0, 0, 0, 0.1);
  left: 0;
  margin: 0;
  opacity: 0;
  padding: 0;
  position: absolute;
  top: 120%;
  transition: all 0.2s ease-in-out 0s;
  visibility: hidden;
  width: 220px;
  z-index: 999;
}
.scroll-header .main__menu li.drop ul.dropdown {
  top: 120%;
}
.scroll-header .main__menu li.drop:hover ul.dropdown {
  top: 100%;
}
.main__menu li.drop:hover ul.dropdown {
    opacity: 1;
    visibility: visible;
    top: 100%;
}
.main__menu ul.dropdown li {
    border-bottom: 1px solid #f4f4f4;
    display: block;
}
.main__menu ul.dropdown li a {
    background: #ffffff none repeat scroll 0 0;
    color: #333;
    display: block;
    font-size: 13px;
    font-weight: 400;
    text-align: left;
    text-decoration: none;
    text-transform: uppercase;
    transition: all 0.2s ease-in-out 0s;
    padding: 9px 18px;
    transition: 0.3s;
    font-family: 'Poppins', sans-serif;
}
.main__menu li.drop ul.dropdown li:hover > a {
    background: #fafafa none repeat scroll 0 0;
    color: #c43b68;
}
.main__menu li.drop ul.dropdown li {
    margin: 0;
}




/*-------------------------------
  Mega Menu
---------------------------------*/

.main__menu li.drop ul.dropdown.mega_dropdown {
  width: 654px;
}

.dropdown.mega_dropdown {
    width: 655px;
}
.dropdown.mega_dropdown {
    display: flex;
    justify-content: space-between;
    padding: 30px !important;
}
.dropdown.mega_dropdown li a.mega__title {
    display: inline-block;
    font-size: 20px;
    margin-bottom: 20px;
    padding: 0 0 10px;
    position: relative;
    text-transform: capitalize;
}
.dropdown.mega_dropdown li a.mega__title::before {
    background: #000 none repeat scroll 0 0;
    bottom: 0;
    content: "";
    height: 1px;
    left: 0;
    position: absolute;
    width: 100%;
}

.main__menu li.drop ul.dropdown.mega_dropdown {
  left: 50%;
  -webkit-transform: translateX(-50%);
          transform: translateX(-50%);
}

.main__menu li.drop ul.dropdown.mega_dropdown li:hover > a {
  background: transparent none repeat scroll 0 0;
  color: #c43b68 ;
}
.main__menu ul.dropdown.mega_dropdown li a {
  padding: 4px 0 12px;
}
.main__menu ul.dropdown.mega_dropdown li {
  border-bottom: 1px solid transparent;
}
























/*---------------------------------
  cd-words-wrapper
--------------------------------*/
.theme-color .cd-words-wrapper {
  padding: 0px !important;
}




/*----------------------
  Header Top One
------------------------*/


.select__language {
    display: flex;
    margin-right: 34px;
}
.select__language li a {
    color: #333333;
    text-transform: uppercase;
}

.select__language > li > ul > li > a {
    color: #333333;
}

.select__language > li:hover > a , .select__language > li > ul > li > a:hover , .htc__contact a:hover{
    color: #c43b68;
}
.htc__contact a {
    color: #333333;
    font-size: 15px;
}
.ht__header__top__left {
    align-items: center;
    display: flex;
    height: 130px;
}
.ht__header__right li a {
    color: #333333;
    text-transform: capitalize;
    transition: 0.4s;
}
.ht__header__right li a:hover{
    color: #c43b68;
}
.ht__header__right {
    align-items: center;
    display: flex;
    height: 130px;
    justify-content: flex-end;
}
.logo {
    align-items: center;
    display: flex;
    height: 80px;
    justify-content: flex-start;
}

.htc__contact a i {
    color: #c43b68;
    padding-right: 8px;
}
.ht__header__right li + li {
    margin-left: 30px;
}

/*-----------------------------------------
  Header Language Option
-------------------------------------------*/

.select__language > li + li {
    margin-left: 8px;
    padding-left: 18px;
}

.select__language li {
    position: relative;
}

.select__language li.drop--lan .language__option {
    background: #fff none repeat scroll 0 0;
    left: 0;
    opacity: 0;
    padding: 10px 20px;
    position: absolute;
    top: 100%;
    transition: all 0.4s ease 0s;
    visibility: hidden;
    width: 150px;
    box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
    z-index: 2;
}
.select__language li.drop--lan:hover .language__option {
    opacity: 1;
    visibility: visible;
}
.language__option li {
    padding: 3px 0;
}








/*-----------------------------------------
  Header Search area
-------------------------------------------*/
.search__area .search__inner form button::before {
  color: #333;
  content: "";
  display: block;
  font-family: Material-Design-Iconic-Font;
  font-size: 29px;
  transition: color 300ms ease 0s;
}
.search__area {
  background: #cfcfcd none repeat scroll 0 0;
  box-shadow: 0 8px 10px rgba(0, 0, 0, 0.08);
  left: 0;
  position: fixed;
  right: 0;
  top: 0;
  -webkit-transform: translateY(-200%);
          transform: translateY(-200%);
  transition: all 300ms ease 0s;
  z-index: 2147483647;
}
.search__area .search__inner{
  position: relative;
}
.search__area .search__inner form {
  margin: 4em 0;
  padding: 0 40px 0 0;
  position: relative;
  text-align: center;
}
.search__area .search__inner form input[type="text"] {
  background: #fff none repeat scroll 0 0;
  border: medium none;
  color: #333;
  font-size: 25px;
  font-weight: 300;
  height: 60px;
  line-height: 60px;
  padding: 0 70px 0 20px;
  text-align: left;
}
.search__area .search__inner form input[type="text"]::-webkit-input-placeholder { /* Chrome/Opera/Safari */
  color: #333;
  font-size: 25px;
  font-weight: 300;
}
.search__area .search__inner form input[type="text"]::-moz-placeholder { /* Firefox 19+ */
  color: #333;
  font-size: 25px;
  font-weight: 300;
}
.search__area .search__inner form input[type="text"]:-ms-input-placeholder { /* IE 10+ */
  color: #333;
  font-size: 25px;
  font-weight: 300;
}
.search__area .search__inner form input[type="text"]:-moz-placeholder { /* Firefox 18- */
  color: #333;
  font-size: 25px;
  font-weight: 300;
}
.search__area .search__inner form button {
  background: transparent none repeat scroll 0 0;
  border: 0 none;
  border-radius: 0;
  cursor: pointer;
  height: 60px;
  line-height: 60px;
  position: absolute;
  right: 40px;
  top: 0;
  width: 60px;
  transition: 0.3s;
}
.search__area .search__inner form button:hover {
  background: #c43b68 none repeat scroll 0 0;
}
.search__area .search__inner form button:hover::before {
  color: #fff;
}
.search__area .search__inner .search__close__btn {
  display: block;
  line-height: 58px;
  position: absolute;
  right: 0;
  top: 0;
}
.search__area .search__inner .search__close__btn {
  color: #fff;
  cursor: pointer;
  font-size: 21px;
  line-height: 58px;
}
.search__close__btn .search__close__btn_icon i {
    transition: all 0.5s ease 0s;
    -webkit-transform: scale(1) rotate(0deg);
            transform: scale(1) rotate(0deg);
}
.search__close__btn .search__close__btn_icon:hover i {
    -webkit-transform: scale(2) rotate(180deg);
            transform: scale(2) rotate(180deg);
    color: #c43b68;
}
.search__box__show__hide .search__area {
  -webkit-transform: translateY(0px);
          transform: translateY(0px);
  transition: all 300ms ease 0s;
}

/*--------------------------
  Body Onerlay Menu
----------------------------*/
.body__overlay {
    -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
    background-color: rgba(0, 0, 0, 0.8);
    cursor: url("../../images/icons/close-20.png") 25 25, pointer;
    height: 100%;
    left: 0;
    opacity: 0;
    position: fixed;
    top: 0;
    transition: opacity 0.3s ease 0s, visibility 0s ease 0.3s, -webkit-transform 0.3s ease 0s;
    transition: opacity 0.3s ease 0s, visibility 0s ease 0.3s, transform 0.3s ease 0s;
    transition: opacity 0.3s ease 0s, visibility 0s ease 0.3s, transform 0.3s ease 0s, -webkit-transform 0.3s ease 0s;
    visibility: hidden;
    width: 100%;
    z-index: 99999;
}
.body__overlay.is-visible {
    opacity: 1;
    transition: opacity 0.3s ease 0s, visibility 0s ease 0s, -webkit-transform 0.3s ease 0s;
    transition: opacity 0.3s ease 0s, visibility 0s ease 0s, transform 0.3s ease 0s;
    transition: opacity 0.3s ease 0s, visibility 0s ease 0s, transform 0.3s ease 0s, -webkit-transform 0.3s ease 0s;
    visibility: visible;
}

/*--------------------------
  Toggle menu
----------------------------*/

.shopping__cart, 
.user__meta  {
    background: #eeeeee none repeat scroll 0 0;
    box-shadow: 0 0 85px rgba(0, 0, 0, 0.2);
    display: block;
    height: 100vh;
    opacity: 0;
    overflow-y: scroll;
    position: fixed;
    right: -100%;
    top: 0;
    transition: all 0.25s ease 0s;
    width: 100%;
    z-index: 99999;
    width: 475px;

}
.offsetmenu {
  background: #c43b68;
  box-shadow: 0 0 85px rgba(0, 0, 0, 0.2);
  display: block;
  height: 100vh;
  opacity: 0;
  overflow-y: scroll;
  position: fixed;
  right: -100%;
  top: 0;
  transition: all 0.25s ease 0s;
  width: 475px;
  z-index: 99999;
}
.user__meta .htc__login__register {
    padding-top: 30px;
}
.offsetmenu.offsetmenu__on,
.shopping__cart.shopping__cart__on,
.user__meta.user__meta__on {
    opacity: 1;
    padding-bottom: 50px;
    right: calc(0px - 16px);
}
.offsetmenu__inner, 
.shopping__cart__inner, 
.user__meta__inner {
    height: 100%;
    padding: 60px 50px 60px;
}
.offsetmenu__close__btn {
    background-color: #eee;
    padding: 29px 50px 24px;
    position: absolute;
    right: 0;
    top: 0;
    z-index: 10;
}
.offsetmenu__close__btn a i {
    color: #666666;
    font-size: 36px;
    transition: all 0.3s ease 0s;
}
.offsetmenu__close__btn a:hover i{
    color: #c43b68;
}
.offset__widget {
    display: flex;
    justify-content: space-between;
    margin-bottom: 19px;
    margin-top: 7px;
}
h4.offset__title {
    color: #444444;
    font-size: 18px;
    font-weight: 500;
    margin-bottom: 15px;
    text-transform: capitalize;
}
.offset__single ul li a {
    color: #303030;
    font-size: 14px;
    text-transform: capitalize;
    transition: all 0.4s ease 0s;
}
.offset__single ul li + li {
    padding: 2px 0 0;
}

.offset__single ul li a:hover {
    color: #c43b68;
}
.off__contact p {
    color: #303030;
    font-size: 16px;
    line-height: 28px;
    width: 98%;
    text-align: center;
}
.offset__sosial__share {
    margin-top: 21px;
    text-align: center;
}
.off__soaial__link {
    display: flex;
    justify-content: center;
    margin-top: 16px;
}
.off__soaial__link li + li {
    padding-left: 15px;
}
.off__soaial__link li a{
    height: 35px;
    line-height: 35px;
    width: 35px;
    text-align: center;
    transition: all 0.3s ease 0s;
    display: block;
}
.off__soaial__link li a i {
    color: #fff;
    font-size: 16px;
}
.off__soaial__link li a:hover i {
    color: #fff;
}
.off__contact {
    margin-bottom: 25px;
}
.off__contact .logo {
    margin-bottom: 18px;
    text-align: center;
}

.sidebar__thumd {
    display: flex;
    flex-wrap: wrap;
    margin: 32px -7px 30px;
}
.sidebar__thumd li {
    margin: 0 7px 15px;
    position: relative;
}
.sidebar__thumd a img {
    width: 100%;
}
.sidebar__thumd > li a::before {
    background: #c43b68  none repeat scroll 0 0;
    content: "";
    height: 100%;
    opacity: 0;
    position: absolute;
    transition: all 0.5s ease 0s;
    width: 100%;
}
.sidebar__thumd li a::after {
    color: #fff;
    content: "";
    font-family: themify;
    left: 40%;
    opacity: 0;
    position: absolute;
    top: 33%;
    transition: all 0.5s ease 0s;
}
.sidebar__thumd li a {
    position: relative;
}
.sidebar__thumd > li a {
    display: block;
}
.sidebar__thumd li a:hover::after {
    opacity: 1;
}
.sidebar__thumd li a:hover::before {
    opacity: 0.7;
}
.shopping__cart__inner {
    padding: 102px 50px;
}
.shopping__cart__inner .offsetmenu__close__btn {
    padding: 21px 50px 24px;
}


/*---------------------------------
  Shopping Cart Area
---------------------------------*/

.shp__pro__details h2 {
    border-top-width: 0;
    color: #000;
    font-size: 14px;
    font-weight: 400;
    line-height: 1.4;
    padding: 0;
    text-transform: none;
}
.shoping__total .subtotal {
    color: #000;
    font-size: 20px;
    font-weight: 400;
    text-transform: capitalize;
}
.shp__pro__details .shp__price {
    color: #c43b68;
    display: block;
}

.shoping__total .subtotal {
    color: #000;
    font-weight: 400;
}
.shoping__total .total__price {
    color: #c43b68;
    float: right;
}
.shopping__btn li a {
    background-color: transparent;
    border: 1px solid #000;
    color: #000;
    font-size: 14px;
    height: 57px;
    line-height: 57px;
    margin-bottom: 15px;
    padding: 0 25px;
    text-align: center;
    text-transform: none;
    transition: all 0.5s ease 0s;
    width: 100%;
    display: block;
}
.shopping__btn li a:hover{
    background: #c43b68;
    border: 1px solid #c43b68;
    color: #fff;
}
.shopping__btn .shp__checkout a{
    background-color: #000;
    color: #fff;
}
.shp__single__product {
    display: flex;
    justify-content: space-between;
    padding-bottom: 21px;
    padding-top: 21px;
}
.shp__pro__thumb {
    margin-right: 20px;
}
.shp__pro__thumb a {
    display: block;
}
.shp__pro__thumb a img {
    max-width: 60px;
}
.remove__btn {
    text-align: right;
    width: 20px;
}
.shp__pro__details {
    min-width: 71%;
}
.shp__cart__wrap {
    margin-top: -30px;
}
.shoping__total {
    border-top: 1px solid #ddd;
    display: flex;
    justify-content: space-between;
    padding: 22px 0;
}
.remove__btn a i {
    color: #ccc;
    font-size: 22px;
    transition: all 0.5s ease 0s;
}
.remove__btn a:hover i {
    color: #c43b68;
    -webkit-transform: rotate(180deg);
            transform: rotate(180deg);
}
.shp__cart__wrap .shp__single__product + .shp__single__product {
  border-top: 1px solid #ddd;
}
.dropdown-menu{padding:10px;}
.mr15{margin-right:15px !important;}
.mr15::before {
    top:0px;
}
	</style>
	<style>
	.htc__shopping__cart a span.htc__wishlist {
		background: #c43b68;
		border-radius: 100%;
		color: #fff;
		font-size: 9px;
		height: 17px;
		line-height: 19px;
		position: absolute;
		right: 18px;
		text-align: center;
		top: -4px;
		width: 17px;
		margin-right:15px;
	}
	</style>
</head>
<body>
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->  

    <!-- Body main wrapper start -->
    <div class="wrapper" >
        <header id="htc__header" class="" style="background:black; width:100%">
            <div id="" class="">
                <div class="container">
                    <div class="row">
                        <div class="menumenu__container clearfix" >


						
                            <div class="col-lg-2 col-md-2 col-sm-3 col-xs-5"> 
                                <div class="logo">
                                     <a href="index.php"><img style=" border-radius: 30%;" width="50rem" src="media/product/Screenshot 2022-08-23 104500.png" alt=""></a>
									 <h3 style="color:#fff;">Bookline</h3>
                                </div>
                            </div>



							<style>
                                .main__menu ul li
								{
                                 color:white;
								}
							</style>
                            <div class="col-md-7 col-lg-6 col-sm-5 col-xs-3">
                                <nav class="main__menu hidden-xs hidden-sm" >
                                    <ul class="main__menu">
                                        <li class="drop"><a style="color:#fff; a:hover{color:red;}" href="index.php">Home</a></li>
                                        <?php
										foreach($cat_arr as $list){
											?>
											<li class="drop"><a style="color:#fff; a:hover{color:red;}" href="categories.php?id=<?php echo $list['id']?>"><?php echo $list['categories']?></a>
											<?php
											$cat_id=$list['id'];
											$sub_cat_res=mysqli_query($con,"select * from sub_categories where status='1' and categories_id='$cat_id'");
											if(mysqli_num_rows($sub_cat_res)>0){
											?>
											
											   <ul class="dropdown">
													<?php
													while($sub_cat_rows=mysqli_fetch_assoc($sub_cat_res)){
														echo '<li><a href="categories.php?id='.$list['id'].'&sub_categories='.$sub_cat_rows['id'].'">'.$sub_cat_rows['sub_categories'].'</a></li>
													';
													}
													?>
												</ul>
												<?php } ?>
											</li>
											<?php
										}
										?>
                                        <li><a style="color:#fff; a:hover{color:red;}" href="contact.php">contact</a></li>
                                    </ul>
                                </nav>

                                <div class="mobile-menu clearfix visible-xs visible-sm">
								
                                    <nav id="mobile_dropdown">
                                        <ul>
                                            <li><a  href="index.php">Home</a></li>
                                            <?php
											foreach($cat_arr as $list){
												?>
												<li class="drop"><a href="categories.php?id=<?php echo $list['id']?>"><?php echo $list['categories']?></a>
											<?php
											$cat_id=$list['id'];
											$sub_cat_res=mysqli_query($con,"select * from sub_categories where status='1' and categories_id='$cat_id'");
											if(mysqli_num_rows($sub_cat_res)>0){
											?>
											
											   <ul class="dropdown">
													<?php
													while($sub_cat_rows=mysqli_fetch_assoc($sub_cat_res)){
														echo '<li><a href="categories.php?id='.$list['id'].'&sub_categories='.$sub_cat_rows['id'].'">'.$sub_cat_rows['sub_categories'].'</a></li>
													';
													}
													?>
												</ul>
												<?php } ?>
											</li>
												<?php
											}
											?>
                                            <li><a href="contact.php">contact</a></li>
                                        </ul>
                                    </nav>
                                </div>                              </div>
							
                               <div class="heade">
							   <?php 
									$class="mr15";
									if(isset($_SESSION['USER_LOGIN'])){
										$class="";
									}
									?>
							
							<div class="lex">
									<div class=" searchs search__open <?php echo $class?>">
                                        <a href="#"><i class="icon-magnifier icons"></i></a>
                                    </div>
									</div>
                                    
									<style>
										.htc__shopping{
											
											display: flex;
										}
										.blo{
											padding-left: 2rem;
										}
										.blo a i{
											background:#eee;
											padding: .5rem;
											border-radius:50%;
										}
										.blo .htc__qua,
										.blo .htc__wishlist{
											padding-left: 9px;
                                            padding-right: 9px;
                                           -webkit-border-radius: 9px;
                                           -moz-border-radius: 9px;
                                            border-radius: 9px;
											
										}
										.blo #top{
											font-size: 1.1rem;
    background: #ff0000;
    color: #fff;
    padding: 0 5px;
    vertical-align: top;
    margin-left: -10px; 
										}
										.htc__shopping a{
											font-size:1.5rem;
											color:#fff;
										}
										.heade{
											display: flex;
											justify-content:space-between;
											width: 30%;
											margin-top:2.5%;
											right: 10%;
										  
										}
										
										.searchs a{
											padding-right:1rem;
											
											font-size:1.5rem;
											color:#ffff;
										}
										#navbarDropdown img{
											margin-top:-.5rem;
										}
										
										.dropdown-menu a{
											padding-top: 3rem;
										}
										@media(max-width:900px) {
											.heade{
												width: 80%;
												
												padding-left:1rem;
												padding-top:1rem;
												padding-bottom:1rem;
												top:10%

											}
												   .logo{
													display: none;
												   }
                                                               }
									</style>
                                    <div class="htc__shopping">
										<?php
										if(isset($_SESSION['USER_ID'])){
										?>
										<div class="blo">
										<a href="wishlist.php" class=""><i class="icon-heart icons"></i></a>
                                        <a href="wishlist.php"><span class="htc__wishlist" id="top"><?php echo $wishlist_cunt?></span></a>
										</div>
										<?php } ?>
                                       <div class="blo" style="display:block;">
									   <a href="cart.php"><i class="icon-handbag icons"></i></a>
                                        <a href="cart.php"><span class="htc__qua" id="top"><?php echo $totalProduct?></span></a>
									   </div>
                                    </div>

									<div class="user">
										<?php if(isset($_SESSION['USER_LOGIN'])){
											?>
											
											  <div class="" id="navbarSupportedContent">
												<ul class="6mr-auto">
												  <li class="nav-item dropdown">
													<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
													<img width="35rem" style=" border-radius: 50%;" src="media/banner/bb.jpg" alt="">
													</a>
													<div class="dropdown-menu"  aria-labelledby="navbarDropdown">
														<a href="index.php">Hi <?php echo $_SESSION['USER_NAME']?></a><br>
													  <a class="dropdown-item" href="my_order.php">Order</a><br>
													  <a class="dropdown-item" href="profile.php">Profile</a><br>
													  <div class="dropdown-divider"></div>
													  <a class="dropdown-item" href="logout.php">Logout</a>
													</div>
												  </li>
												  
												</ul>
											  </div>
											
								
												  
												
								
							
											<?php
										}else{
											echo '<a href="login.php" class="mr15">Login/Register</a>';
										}
										?>
									
                                        
										
                                    </div>

									

							   </div>
									</div>

									</div>
									<div class="mobile-menu-area">
									<a href="#nav" class="meanmenu-reveal" style="background:;color:;right:0;left:auto;"><span>dd</span><span></span><span></span></a>
									</div>
                            
                    
                    
                    
                </div>
            </div>
        </header>
		<div class="body__overlay"></div>
		<div class="offset__wrapper">
            <div class="search__area">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="search__inner">
                                <form action="search.php" method="get">
                                    <input placeholder="Search here... " type="text" name="str">
                                    <button type="submit"></button>
                                </form>
                                <div class="search__close__btn">
                                    <span class="search__close__btn_icon"><i class="zmdi zmdi-close"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>