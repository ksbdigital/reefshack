<?php 

# Database connection
include('/config/connection.php');

?>


<div class="jumbotron">
	  <h1>Welcome to the Reef Shack</h1>

	  		<p>We are a Marine Coral, Frag, Fish and Invert specialist based in Sittingbourne, Kent. Our aim is to supply healthy, high quality marine corals and fish. We always have large stocks of SPS, LPS and Soft Corals along with a selection of Fish, Inverts and a variety of Equipment.</p>

</div>

<div class="row">
	<div class="col-md-9">
  
  
		<div class="panel panel-primary">
  			<div class="panel-heading"><h4>Reef Shack News and latest offers.</h4></div>
  				<div class="panel-body-news">
    			
<?php 	

		$q = "SELECT * FROM news ORDER BY idnews DESC";
		$r = mysqli_query($dbc,$q);
		
			while($row = mysqli_fetch_assoc($r)) { ?>
			
					<?php $fdate = new DateTime($row['valid_from']); ?>
					<?php $udate = new DateTime($row['valid_until']); ?>

				<h5><?php echo $row['title']; ?></h5>
				
				<h6><?php echo $row['content']; ?></h6>  				
  				<hr class="style-two"/>		
<?php } ?>
  		
  				</div>
			</div>
		</div>		


<div class="row">             
	<div class="col-md-3">
			<a class="twitter-timeline" href="https://twitter.com/reefshack" data-widget-id="482959344875483136">Tweets by @reefshack</a>
				<script>
					!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';
					if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";
					fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");
				</script>

		</div>
	</div>
</div>

</div>

</div>
