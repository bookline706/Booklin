<?php
require('top.inc.php');

$condition='';
$condition1='';
if($_SESSION['ADMIN_ROLE']==1){
	$condition=" and product.added_by='".$_SESSION['ADMIN_ID']."'";
	$condition1=" and added_by='".$_SESSION['ADMIN_ID']."'";
}

if(isset($_GET['type']) && $_GET['type']!=''){
	$type=get_safe_value($con,$_GET['type']);
	if($type=='status'){
		$operation=get_safe_value($con,$_GET['operation']);
		$id=get_safe_value($con,$_GET['id']);
		if($operation=='active'){
			$status='1';
		}else{
			$status='0';
		}
		$update_status_sql="update product set status='$status' $condition1 where id='$id'";
		mysqli_query($con,$update_status_sql);
	}
	
	if($type=='delete'){
		$id=get_safe_value($con,$_GET['id']);
		$delete_sql="delete  product ,product_attributes from product_attributes inner join product where product.id=product_attributes.product_id and product.id='$id' $condition1";
	
		mysqli_query($con,$delete_sql);
	}
}

$sql="select product.*,categories.categories,product_attributes.mrp,product_attributes.price,product_attributes.qty from product,categories,product_attributes where product.categories_id=categories.id and product_attributes.id=product.id $condition order by product.id asc";
$res=mysqli_query($con,$sql);
?>
<div class="content pb-0">
	<div class="">
	   <div class="">
		  <div class="">
			 <div class="card">
				<div class="card-bod">
				   <h4 class="box-title">Products: </h4>
				   <h4 class="box-links"><a href="manage_product.php">Add Product<i class='fas fa-plus'></i></a> </h4>
				</div>
				
				   <div class="table-responsive">
				   <table class="tab_onetable bg-white rounded shadow-sm  table table-striped" style="text-align:center;">
						 <thead style="background-color:red;">
							<tr style="background-color:red;">
							   <th class="serial">#</th>
							   <th>ID</th>
							   <th>Categories</th>
							   <th>Name</th>
							   <th>Image</th>
							   <th>MRP</th>
							   <th>Price</th>
							   <th>Qty</th>
							   <th width="5%"></th>
							   <th width="5%">Actoins</th>
							   <th width="5%"></th>
							</tr>
					</thead>
				
							<?php 
							$i=1;
							while($row=mysqli_fetch_assoc($res)){?>
							<tr>
							   <td class="serial"><?php echo $i?></td>
							   <td><?php echo $row['id']?></td>
							   <td><?php echo $row['categories']?></td>
							   <td><?php echo $row['name']?></td>
							   <td><img style="height:3rem;" src="<?php echo PRODUCT_IMAGE_SITE_PATH.$row['image']?>"/></td>
							   <td ><?php echo '$'; echo $row['mrp']?></td>
							   <td><?php  echo '$'; echo $row['price']?></td>
							   <td><?php  echo $row['qty']?>
							   <?php
							   $productSoldQtyByProductId=productSoldQtyByProductId($con,$row['id']);
							   $pneding_qty=$row['qty']-$productSoldQtyByProductId;
							   
							   ?>
							   Pending<br> Qty <?php echo $pneding_qty?>
							   
							   </td>
							   <td>
								<?php
								if($row['status']==1){
									echo "<span class='badge-completes'><a href='?type=status&operation=deactive&id=".$row['id']."'><i class='fas fa-toggle-off'></i></a></span>&nbsp;";
								}else{
									echo "<span class='badge-pendings'><a href='?type=status&operation=active&id=".$row['id']."'><i class='fas fa-toggle-on'></i></a></span>&nbsp;";
								}
								?>
								</td>
								<td>
								<?php
								echo "<span class='badge-edits'><a href='manage_product.php?id=".$row['id']."'><i class='fas fa-edit'></i></a></span>&nbsp;";
								?>
								</td>
								<td>
								<?php
								echo "<span class='badge-deletes'><a href='?type=delete&id=".$row['id']."'><i class='fa fa-trash' aria-hidden='true'></i>
								</a></span>";
								
								?>
							   </td>
							</tr>
							<?php } ?>
						 
					  </table>
				   </div>
				
			 </div>
			 </div>
			 </div>
			 </div>
			 </div>
		  <style>
			.card-bod{
				display: flex;
				padding: 2rem;
			}
			.box-links a{
				background:red;
				padding: .5rem;
				border-radius:.5rem;
			}
			.box-links{
				padding-top:.5rem;
			}
			.badge-pendings i{
			color:rgb(237, 28, 154);
            font-size:1.3rem;
			}
			.badge-pendings i:hover{
			color:rgb(54, 137, 246);
            font-size:1.3rem;
			}
			.badge-deletes i{
			color:red;
            font-size:1.3rem;
			}
			.badge-deletes i:hover{
			color:rgb(174, 37, 37);
            font-size:1.3rem;
			}
			.badge-edits i{
			color:green;
            font-size:1.3rem;
			}
			.badge-edits i:hover{
			color:rgb(80, 174, 98);
            font-size:1.3rem;
			}
			.badge-completes i{
				color:rgb(54, 137, 246);
				font-size:1.3rem;
			}
			.badge-completes i:hover{
				color:rgb(237, 28, 154);
				font-size:1.3rem;
			}
		  </style>
<?php
require('footer.inc.php');
?>