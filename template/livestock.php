<?php 

# Database connection
include('/config/connection.php');

?>

<div class="gallery_text">
	
	<p>For up to date livestock prices and availability please contact the shop on 01795 423314.</p>
	
</div>

<?php 	

		##Check the page slug and then get the path array variable to use in the SQL query for products.
		if(isset($_GET['slug']) != 1) {	$cond = $path['call_parts'][0]; } 
					 
		$q = "SELECT * FROM products WHERE category = '$cond' ORDER BY sub_category";
		$r = mysqli_query($dbc,$q);
		
			while($row = mysqli_fetch_assoc($r))
			#print_r($r);
								
			 { ?>

			<div class="col-md-4 column-padding">
				<div class="media">
				  <a class="pull-left" href="images/livestock/<?php echo $row['image']; ?>">
				    <img class="media-object img-border" src="images/livestock/<?php echo $row['image']; ?>">
				  </a>
					  <div class="media-body">
					    <h4 class="media-heading"><?php echo $row['name']; ?></h4>
					    <?php echo "Price &pound", $row['price']; ?>
					    <?php echo $row['description']; ?>
					    
					  </div>
				</div>
			</div>

			<?php } ?> 

</div>
 
