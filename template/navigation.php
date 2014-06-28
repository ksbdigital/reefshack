<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">

<!--Debug button CSS -->
	
	<?php if($debug == 1) { ?>
		<button id="btn-debug" class="btn btn-default"><i class="fa fa-bug"></i></button>
	<?php } ?>
	
<!--End Debug button CSS -->

	<div class="container">
		<div class="container-fluid">
			
			      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
			        <span class="sr-only">Toggle navigation</span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			      </button>
			      
			<div class="collapse navbar-collapse" id="navbar-collapse-1">
	
		<ul class="nav navbar-nav">
			
			<?php nav_main($dbc, $path); ?>	
		
		</ul>
			
	
				<div class="pull-right" style="padding-top:10px;">
				    <a target="_blank" href="http://www.twitter.com/reefshack" class="sb twitter circle" data-toggle="tooltip" data-placement="bottom" title="Send us a Tweet!">Twitter</a>
				    <a target="_blank" href="https://www.facebook.com/pages/The-Reef-Shack/131410900267623?fref=ts" class="sb facebook circle" data-toggle="tooltip" data-placement="bottom" title="Comment on our Facebook Page">Facebook</a>
				    <a target="_blank" href="http://www.ultimatereef.net/forums/forumdisplay.php?f=623" class="sb email circle" data-toggle="tooltip" data-placement="bottom" title="Contact us on Ultimate Reef">UR</a>
				</div> <!-- End of Social nav buttons -->
			</div>	<!-- End of collapse div for nav -->
		</div>
	</div> <!-- END of nav div -->
	
				
</nav><!-- END of nav MAIN navigation -->
