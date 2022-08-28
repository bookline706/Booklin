<?php 
require('top.php');
$str=mysqli_real_escape_string($con,$_GET['str']);
if($str!=''){
	$get_product=get_product($con,'','','',$str);
}else{
	?>
	<script>
	window.location.href='index.php';
	</script>
	<?php
}										
?>
<div class="body__overlay"></div>
        
        <!-- Start Bradcaump area -->
        <div class="ht__bradcaump__area" style="background: rgba(0, 0, 0, 0) url(images/bg/4.jpg) no-repeat scroll center center / cover ;">
            <div class="ht__bradcaump__wrap">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="bradcaump__inner">
                                <nav class="bradcaump-inner">
                                  <a class="breadcrumb-item" href="index.php">Home</a>
                                  <span class="brd-separetor"><i class="zmdi zmdi-chevron-right"></i></span>
                                  <span class="breadcrumb-item active">Search</span>
								  <span class="brd-separetor"><i class="zmdi zmdi-chevron-right"></i></span>
                                  <span class="breadcrumb-item active"><?php echo $str?></span>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Bradcaump area -->
        <!-- Start Product Grid -->
        
                            <section  style="margin-top:1rem;  padding:.5rem;">
        <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="section__title--2 text-center">
                            <h2 class="title__line" style="border-bottom:1px solid red;color: #c43b68;">New Products</h2>
                        </div>
                    </div>
                </div>
                
                <?php if(count($get_product)>0){?>
                    
                        <div class="container3" >
						<?php
										foreach($get_product as $list){
										?>
                            <!-- Start Single Category -->
                          <div class="row1">
                                   <div class="price-1">

                                    <span><img style="width:2.5rem; border-radius:50%;" src="media/banner/bb.jpg" alt=""> Bookline</span>
                                   </div>
                                        
                                        
                                       <div class="car">
                                       
                                            <img src="<?php echo PRODUCT_IMAGE_SITE_PATH.$list['image']?>" alt="product images">
                                   
                                    </div>
                                    <div class="action-1">
										<ul class="action">
											<li><a href="javascript:void(0)" onclick="wishlist_manage('<?php echo $list['id']?>','add')"><i class="icon-heart icons"></i></a></li>
											<li> <a href="product.php?id=<?php echo $list['id']?>"><i class="fa-solid fa-eye vew"></i></a></li>
										</ul>
									     </div>
                                
                                   <style>
                                    .fot h6 i{
                                       color: rgb(190, 190, 45);
                                       padding-top: .5rem;
                                            }

                                   </style>
                                 <div class="fot">
                                 <h6>
                                        <i class="fas fa-star"></i>   
                                        <i class="fas fa-star"></i>   
                                        <i class="fas fa-star"></i>   
                                        <i class="fas fa-star"></i>   
                                         <i class="fas fa-star"></i>   
                                         </h6>
                                   
                                    <div class="" style="padding-top:.7rem;" >
                                        <h4><a href="product.php?id=<?php echo $list['id']?>"><?php echo $list['name']?></a></h4>
                                        <div class="crt1">
                                        <li class="old"><s>$<?php echo $list['mrp']?></s></li>
                                        <li>/</li>
                                        <li class="new-1">$<?php echo $list['price']?></li>
                                        
                                        </div>
                                       
                                        </div>
                                        <div class="price-1"s>
                                            <style>
                                                .price-1{
                                                    background:black;
                                                }
                                                
                                            </style>
                                        <a href="javascript:void(0)" onclick="manage_cart('<?php echo $list['id']?>','add')">  <button class="add">Add cart</button></a>
                                           <button class="buy">Buy Now</button>
                                        </div>
                                 </div>
                                 </div>
                              
                            
                                
                                     
                                 <?php } ?>
                          
                            </div>
                
					<?php } else { 
						echo "Data not found";
					} ?>
                
				
            </div>          
                            
        </section>
 
        <!-- End Product Grid -->
        <!-- End Banner Area -->
		<input type="hidden" id="qty" value="1"/>
<?php require('footer.php')?>        

