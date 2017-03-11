<section class="page-header page-header-xs dark">
	
				<div class="container">
                    <?php
					$d = str_replace('-', ' ', $url);
					?>
					<h1 class="text-center"><?= $d ?></h1>
					
					<!-- breadcrumbs -->
					<ol class="breadcrumb">
						<li><a href="<?= HOST_NAME ?>">Home</a></li>
						<li><a href="<?= HOST_NAME.'categories' ?>">Products</a></li>
						<li class="active"><?=  $d ?></li>
					</ol><!-- /breadcrumbs -->

				</div>
			</section>
			<!-- /PAGE HEADER -->


<?php
if(isset($_GET['url'])){
	$url = mysqli_real_escape_string($conn, $_GET['url']);
}
$getcaturl = "SELECT * FROM products WHERE url ='$url' LIMIT 1";
$run = mysqli_query($conn, $getcaturl);
$fetchnum = mysqli_num_rows($run);
if($fetchnum > 0){
$fetchcatdata = mysqli_fetch_array($run);
$catid = $fetchcatdata['id'];
$q_subpro = "SELECT * FROM subpro WHERE pro = $catid";
$r_subpro = mysqli_query($conn, $q_subpro);
$getsuppronum = mysqli_num_rows($r_subpro);
if($getsuppronum > 0){
	
	?>
<!-- Info -->
			<section>
				<div class="container">

					<div class="row">
                          
                        <div class="table-responsive">
	<table class="table table-bordered table-striped">
		<thead>
			<tr>
				
				<th class="width-300" >Name</th>
                
				<th > Description</th>
                <th class="width-30"> Add to cart</th>
                <th class="width-30"> Download</th>
			</tr>
		</thead>
		<tbody>
		<?php
		while ($f_subpro = mysqli_fetch_array($r_subpro)){
		?>
			<tr>
			
				<td><?= $f_subpro['name'] ?></td>
				
                <td><?= $f_subpro['descrp'] ?></td>
                <?php
                	$pdf = explode('.pdf', $f_subpro['pdf']);
                ?>
				<form method="post">
                <td><button type="submit" class="btn btn-success" name="card[<?= $f_subpro['name'] ?>]"><i class="fa fa-shopping-cart"></i> Add to cart</button></td>
                </form>
                <td class="text-center"><a href="<?= HOST_NAME.'download/'.$pdf[0] ?>"><i class="fa fa-download size-20"></i></a></td>
			</tr>
			<?php } ?>
	
			
		</tbody>
	</table>
         <?php
                         	if(isset($_POST['card'])){
                         		$delKey = array_pop(array_keys($_REQUEST['card']));
                         		if(@in_array($delKey, $_SESSION['name'])){
                         			echo "<div class='alert alert-danger'>You select this item before please check your cart</div>";
                         		}else{
                         		$_SESSION['name'][] = $delKey;
                         		$link = HOST_NAME.'product/'.$url;
                         	   echo "<script>window.open('$link', '_self')</script>";
                         		}
                         	}
                         ?>                      
</div>
                        
					</div>

				</div>
			</section>
	<?php
}
}
?>