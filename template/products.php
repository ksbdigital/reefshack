<?php 

# Database connection
include('/config/connection.php');

?>
  
<?php 	

		##Check the page slug and then get the path array variable to use in the SQL query for products.
		if(isset($_GET['slug']) != 1) {	$cond = $path['call_parts'][0]; } 
					 
		$q = "SELECT * FROM products WHERE category = '$cond' ORDER BY sub_category, name";
		$r = mysqli_query($dbc,$q);
		
			while($row = mysqli_fetch_assoc($r))
			#print_r($r);
						
			{ ?>



  <div class="col-md-6">

					<div class="panel panel-primary">
					  
					  <div class="panel-heading"><h3 class="panel-title"><?php echo $row['name']; ?></h3></div>
						<div class="panel-body">
						  	<div class="media">
							  <a class="pull-left" href="images/products/<?php echo $row['image']; ?>"">
							    <img class="media-object thumbnail" src="images/products/<?php echo $row['image']; ?>" width="125" height="125">

							  </a>
							  		<button type="button" class="btn btn-primary" data-toggle="collapse" data-target="#product<?php echo $row['id']; ?>">
									  Click to see full product description.
									</button>
									  <div class="media-body collapse" id="product<?php echo $row['id']; ?>">
									    <h4 class="media-heading"><?php echo $row['name']; ?></h4>
									    <?php echo $row['description']; ?>
									  </div>
						</div>
					  </div>
					  <div class="panel-footer"><?php echo "Price &pound", $row['price']; ?></div>
					</div>     


</div>




				
      <?php } ?>
 