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
		$update_status_sql="update banner set status='$status' where id='$id'";
		mysqli_query($con,$update_status_sql);
	}
	
	if($type=='delete'){
		$id=get_safe_value($con,$_GET['id']);
		$delete_sql="delete from banner where id='$id'";
		mysqli_query($con,$delete_sql);
	}
}

$sql="select * from banner order by id asc";
$res=mysqli_query($con,$sql);
?>
<div class="content pb-0">
	<div class="orders">
	   <div class="row">
		  <div class="col-xl-12">
			 <div class="card">
				<div class="card-bod">
				   <h4 class="box-title">Banner: </h4>
				   <h4 class="box-links"><a href="manage_banner.php">Add Banner<i class='fas fa-plus'></i></a> </h4>
				</div>
				<div class="card-body--">
				   <div class="table-stats order-table ov-h">
					  <table class="table ">
						 <thead>
							<tr>
							   <th class="serial">#</th>
							   <th>Heading1</th>
							   <th>Heading2</th>
							   <th>Btn Txt</th>
							   <th>Btn Link</th>
							   <th>Image</th>
							   <th></th>
							   <th>Actions</th>
							   <th></th>
							</tr>
						 </thead>
						 <tbody>
							<?php 
							$i=1;
							while($row=mysqli_fetch_assoc($res)){?>
							<tr>
							   <td class="serial"><?php echo $i?></td>
							   </td>
							   <td><?php echo $row['heading1']?></td>
							   <td><?php echo $row['heading2']?></td>
							   <td><?php echo $row['btn_txt']?></td>
							   <td><?php echo $row['btn_link']?></td>
							   <td>
							   <?php
							   
echo "<a target='_blank' href='".BANNER_SITE_PATH.$row['image']."'><img width='150px' src='".BANNER_SITE_PATH.$row['image']."'/></a>";
							   ?>
							   </td>
							   <td>
								<?php
								if($row['status']==1){
									echo "<span class='badge-completes'><a href='?type=status&operation=deactive&id=".$row['id']."'><i class='fas fa-toggle-off'></i></a></span>";
								}else{
									echo "<span class='badge-pendings'><a href='?type=status&operation=active&id=".$row['id']."'><i class='fas fa-toggle-on'></i></a></span>";
								}
								?>
								</td>
								<td>
								<?php
								echo "<span class='badge-edits'><a href='manage_banner.php?id=".$row['id']."'><i class='fas fa-edit'></i></a>";
								?>
								</td>
								<td>
								<?php
								echo "<span class='badge-deletes'><a href='?type=delete&id=".$row['id']."'<i style='color:rgb(237, 28, 154);
								font-size:1.3rem;' class='fa fa-trash'></i></a></span>";
								
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