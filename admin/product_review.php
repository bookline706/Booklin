<?php
require('top.inc.php');
isAdmin();
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
		$update_status_sql="update product_review set status='$status' where id='$id'";
		mysqli_query($con,$update_status_sql);
	}
	if($type=='delete'){
		$id=get_safe_value($con,$_GET['id']);
		$delete_sql="delete from product_review where id='$id'";
		mysqli_query($con,$delete_sql);
	}
}

$sql="select users.name,users.email,product_review.id,product_review.rating,product_review.review,product_review.added_on,product_review.status,product.name as pname from users,product_review,product where product_review.user_id=users.id and product_review.product_id=product.id  order by product_review.added_on desc";
$res=mysqli_query($con,$sql);
?>
<div class="content pb-0">
	<div class="orders">
	   <div class="row">
		  <div class="col-xl-12">
			 <div class="card">
				<div class="card-body">
				   <h4 class="box-title">Product Review </h4>
				</div>
				<div class="card-body--">
				   <div class="table-stats order-table ov-h">
					  <table class="table ">
						 <thead>
							<tr>
							   <th class="serial">#</th>
							   <th>ID</th>
							   <th>Name/Email</th>
							   <th>Product Name</th>
							   <th>Rating</th>
							   <th>Review</th>
							   <th>Added On</th>
							   <th width="5%"></th>
							   <th  width="5%"></th>
							</tr>
						 </thead>
						 <tbody>
							<?php 
							$i=1;
							while($row=mysqli_fetch_assoc($res)){?>
							<tr>
							   <td class="serial"><?php echo $i?></td>
							   <td><?php echo $row['id']?></td>
							   <td><?php echo $row['name']?>/<?php echo $row['email']?></td>
							   <td><?php echo $row['pname']?></td>
							   <td><?php echo $row['rating']?></td>
							   <td><?php echo $row['review']?></td>
							   <td><?php echo $row['added_on']?></td>
							   <td>
								<?php
								if($row['status']==1){
									echo "<span class='badge badge-complete'><a href='?type=status&operation=deactive&id=".$row['id']."'><i class='fas fa-toggle-off'></i></a></span>";
								}else{
									echo "<span class='badge badge-pending'><a href='?type=status&operation=active&id=".$row['id']."'><i class='fas fa-toggle-on'></i></a></span>";
								}
								?>
							   </td>
							   <td>
								<?php
								echo "<span class='badge badge-delete'><a href='?type=delete&id=".$row['id']."'><i class='fas fa-trash'></i></a></span>";
								?>
							   </td>
							</tr>
							<?php } ?>
						 </tbody>
					  </table>
				   </div>
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
				margin-left:.5rem;
				color:white;
			}
			.box-links a:hover{
				background:green;
				padding: .5rem;
				border-radius:.5rem;
				margin-left:.5rem;
				color:white;
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