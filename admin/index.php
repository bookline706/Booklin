<?php
require('top.inc.php');
?>
<div class="content pb-0">
	<div class="orders">
	   <div class="row">
		  <div class="col-xl-12">
			 <div class="car">
				<div class="card-body">
				   <h4 class="box-title">Total Oders: <span>0</span></h4>
				   
				</div>
				<div class="card-body">
				   <h4 class="box-title">Total Contacts: <span>0</span> </h4>
				</div>
				<div class="card-body">
				   <h4 class="box-title">Total Products: <span>0</span> </h4>
				</div>
				<div class="card-body">
				   <h4 class="box-title">Total Users: <span>0</span> </h4>
				</div>
				<div class="card-body">
				   <h4 class="box-title">Total Categoreis: <span>0</span> </h4>
				</div>
			</div>
		  </div>
	   </div>
	</div>
</div>
<style>
.car{
	display: grid;
    grid-template-columns: repeat(auto-fit, minmax(15rem, 1fr));
    gap: 1.5rem;
}
.car .box-title{
	padding: 2.5rem;
	background:white;
	background: #fff;
    border-radius: .5rem;
   
    position: relative;
    overflow: hidden;
    text-align: center;
    box-shadow: 7px 7px 5px rgb(201, 179, 179);
}
</style>
<?php
require('footer.inc.php');
?>