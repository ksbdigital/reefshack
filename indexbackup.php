<?php include('config/setup.php'); ?>

<!DOCTYPE html>
<html>
	<head>
		
		<title> <?php echo $page['title'].' | '.$site_title; ?> </title>
		
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<?php include('config/css.php'); ?>
		
		<?php include('config/js.php'); ?>
			
	</head>	
	
 <body>
	
		<?php include(D_TEMPLATE.'/navigation.php'); # Main navigation menu ?> 
			
					<div class="container">
						
						<h1> <?php echo $page['header']; ?> </h1>
						
						<?php echo $page['body_formatted']; ?>
						 					
					</div> <!-- END content area -->

		<?php include(D_TEMPLATE.'/footer.php'); # Website footer text ?>
		
		<?php if ($debug == 1) { include('widgets/debug.php'); } ?>
	
 </body>
	
</html>