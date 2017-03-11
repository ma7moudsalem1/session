<section class="page-header page-header-xs dark">
				<div class="container">

					<h1 class="text-center">
					<?php
					if(isset($_POST['src'])){
						$search = mysqli_real_escape_string($conn, $_POST['src']);
						
					}else{
						$search = @$_SESSION['search'];
					}
					echo 'Search Result';
					?>
					</h1>

					<!-- breadcrumbs -->
					<ol class="breadcrumb">
						<li><a href="#">Home</a></li>
						<li><a href="#">Products</a></li>
						<li class="active">Search</li>
					</ol><!-- /breadcrumbs -->

				</div>
			</section>
			<?php
			$q_search = "SELECT * FROM subpro WHERE name LIKE '%$search%'";
			$r_search = mysqli_query($conn, $q_search);
			$count = mysqli_num_rows($r_search);
			if($count > 0){
				
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
		while ($f_subpro = mysqli_fetch_array($r_search)){
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
                         		if(in_array($delKey, $_SESSION['name'])){
                         			$_POST['src'] = $word;
                         			echo "<div class='alert alert-danger'>You select this item before please check your cart</div>";
                         		}else{
                         		$_SESSION['name'][] = $delKey;
                         		$_POST['src'] = $word;
                         		$link = HOST_NAME.'search';
                         	   echo "<script>window.open('$link', '_self')</script>";
                         		}
                         	}
                         ?>                
</div>
                        
					</div>

				</div>
			</section>
					<?php
					echo $word;
				
			}else{
				?>
				<section>
					
				<div class="text-center">
				<div class="alert alert-warning">No result found.</div>
				</div>
				</section>
				<?php
			}
			?>