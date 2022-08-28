<?php 
require('top.php');

if(!isset($_GET['id']) && $_GET['id']!=''){
	?>
	<script>
	window.location.href='index.php';
	</script>
	<?php
}

$cat_id=mysqli_real_escape_string($con,$_GET['id']);

$sub_categories='';
if(isset($_GET['sub_categories'])){
	$sub_categories=mysqli_real_escape_string($con,$_GET['sub_categories']);
}
$price_high_selected="";
$price_low_selected="";
$new_selected="";
$old_selected="";
$sort_order="";
if(isset($_GET['sort'])){
	$sort=mysqli_real_escape_string($con,$_GET['sort']);
	if($sort=="price_high"){
		$sort_order=" order by product.price desc ";
		$price_high_selected="selected";	
	}if($sort=="price_low"){
		$sort_order=" order by product.price asc ";
		$price_low_selected="selected";
	}if($sort=="new"){
		$sort_order=" order by product.id desc ";
		$new_selected="selected";
	}if($sort=="old"){
		$sort_order=" order by product.id asc ";
		$old_selected="selected";
	}

}

if($cat_id>0){
	$get_product=get_product($con,'',$cat_id,'','',$sort_order,'',$sub_categories);
}else{
	?>
	<script>
	window.location.href='index.php';
	</script>
	<?php
}										
?>
<link rel="stylesheet" href="styles.css">
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
                                  <span class="breadcrumb-item active">Products</span>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Bradcaump area -->
        <!-- Start Product Grid -->
        <section>
            <div class="container">
                
					<?php if(count($get_product)>0){?>
                    
                      
                            <div class="htc__grid__top">
                                <div class="htc__select__option">
                                    <select class="ht__select" onchange="sort_product_drop('<?php echo $cat_id?>','<?php echo SITE_PATH?>')" id="sort_product_id">
                                        <option value="">Default softing</option>
                                        
                                        <option value="new" <?php echo $new_selected?>>Sort by new first</option>
										<option value="old" <?php echo $old_selected?>>Sort by old first</option>
                                    </select>
                                </div>
                               
                            </div>
                            <!-- Start Product View -->
                            
                    
										<div class="container3" >
							<?php
							$get_product=get_product($con,4);
							foreach($get_product as $list){
							?>
                            <!-- Start Single Category -->
                        <div class="row1">
                                   
                                        
                                   <div class="card">
                                  <div class="car">
                                  
                                       <img src="<?php echo PRODUCT_IMAGE_SITE_PATH.$list['image']?>" alt="product images">
                              
                               </div>
                               <div class="action-1">
                                   <ul class="action">
                                       <li><a href="javascript:void(0)" onclick="wishlist_manage('<?php echo $list['id']?>','add')"><i class="icon-heart icons"></i></a></li>
                                       <li> <a href="product.php?id=<?php echo $list['id']?>"><i class="fa-solid fa-eye vew"></i></a></li>
                                   </ul>
                                    </div>
                              </div>
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
                                   <li class="old"><?php echo $list['mrp']?></li>
                                   <li>/</li>
                                   <li class="new-1"><?php echo $list['price']?></li>
                                   
                                   </div>
                                   <ul class="price-1">
                                 
                                   <a href="javascript:void(0)" onclick="manage_cart('<?php echo $list['id']?>','add')">  <button class="add">Add cart</button></a>
                                      <button class="buy">Buy Now</button>
                                      
                                   </ul>
                                   </div>
                            </div>
                            </div>
                         
                       
                           
                                
                            <?php } ?>
                     
                        </div>
                    </div>
					<?php } else { 
						echo "Data not found";
					} ?>
                
				</div>
            </div>
        </section>
        <!-- End Product Grid -->
        <!-- End Banner Area -->
		<input type="hidden" id="qty" value="1"/>
<?php require('footer.php')?>        