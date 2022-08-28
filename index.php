<?php 
require('top.php');

$resBanner=mysqli_query($con,"select * from banner where status='1' order by order_no asc");

?>
<link rel="stylesheet" href="styles.css">
<link rel="stylesheet" href="csss/shortcode/sliders.css">

	
<div class="body__overlay"></div>
        <?php if(mysqli_num_rows($resBanner)>0){?>
        <!-- Start Slider Area -->
        <div class="slider__container slider--one bg__cat--3">
            <div class="slide__container slider__activation__wrap owl-carousel">
                <?php while($rowBanner=mysqli_fetch_assoc($resBanner)){?>
                <div class="single__slide animation__style01 slider__fixed--height">
                    <div class="container">
                        <div class="row align-items__center">
                            <div class="col">
                                <div class="slide">
                                    <div class="slider__inner">
                                        <h2><?php echo $rowBanner['heading1']?></h2>
                                        <h1><?php echo $rowBanner['heading2']?></h1>
										
										<?php
										if($rowBanner['btn_txt'] !='' && $rowBanner['btn_link']!=''){
											?>
											<div class="cr__btn">
												<a href="<?php echo $rowBanner['btn_link']?>"><?php echo $rowBanner['btn_txt']?></a>
											</div>
											<?php
										}
										?>
                                        
                                    </div>
                                </div>
                            </div>
                            <?php 
                           
                            ?>
                            
                                <div class="slide__thumb">
                                    <img src="<?php echo BANNER_SITE_PATH.$rowBanner['image']?>" >
                                </div>
                       
                        </div>
                    </div>
                </div>
                                      
				<?php } ?>
            </div>
        </div>
        <!-- Start Slider Area -->
		<?php } ?>
      
        <section style="margin-top:1rem;  padding:.5rem;">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="section__title--2 text-center">
                            <h2 class="title__line" style="border-bottom:1px solid red;color: #c43b68; padding-bottom:.5rem;">Top Seller Products</h2>
                        </div>
                    </div>
                </div>
                
                           
                <div class="container3" >
							<?php
							$get_product=get_product($con,10);
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
                                              </div>
                                              </section>
                            <!-- End Single Category -->
                          
           
        <!-- Start Category Area -->
        <section  style="margin-top:1rem;  padding:.5rem;">
        <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="section__title--2 text-center">
                            <h2 class="title__line" style="border-bottom:1px solid red;color: #c43b68;">New Products</h2>
                        </div>
                    </div>
                </div>
                
                
                    
                    
                
                  
           
    
         <div class="container3" >
							<?php
							$get_product=get_product($con,6);
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
     
   
  </div>    
        </section>
   
        <!-- End Category Area -->
        <!-- Start Product Area -->

        <!-- End Product Area -->
		<input type="hidden" id="qty" value="1"/>
<?php require('footer.php')?>        


<?php
     $sql="SELECT * FROM `product`";
     $countall=$con->query($sql);
     $rowcount=mysqli_num_rows($countall);
     
     $__page=ceil($rowcount/5);

     $start_loop=$st_page/5;

     $last_val=($__page-1) * 5;
     
     $start_SH=$start_loop + 4;

     if ($__page-1 <= $start_SH) 
      {
         $end_loop = $__page;
      }else{
         $end_loop = $start_SH;
      }

     if ($st_page > 5) 
     {
        echo "<a href='pagination.php?values=5'>First</a>";
        echo "<a href='pagination.php?values=".($st_page-5)."'><<</a>"; 
     }

    for ($i=$start_loop;$i < $end_loop; $i++) 
     { 
        $hide_values=$i*5;
        echo "<a href='pagination.php?values=".$hide_values."'>".ceil($i)."</a>";
     }

   if ($__page-1 != $start_loop) 
      {
        echo "<a href='pagination.php?values=".($st_page+5)."'>>></a>";
        echo "<a href='pagination.php?values=".$last_val."'>Last</a>";
      }
    ?>
    </div>