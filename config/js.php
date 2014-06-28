<?php 

/* Javascript file */

?>	
		
		<!-- jQuery load before bootstrap -->
		<script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
		<!-- jQuery UI load before bootstrap -->
		<script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
		
		<!-- Latest compiled and minified JavaScript -->
		<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>	
		

<script>
/* Toggle the debug button on and off */
	
	$(document).ready(function() {
		
		$("#console-debug").hide();
		
		$("#btn-debug").click(function(){
			
			$("#console-debug").toggle();
			
		});
			
		
		
	});
	
/* END of Toggle the debug button on and off */

/* Resize the product image */

		$(document).ready(function() {
		        var imageLinks = $('a[href$=".png"], a[href$=".jpg"], a[href$=".gif"], a[href$=".bmp"]');
		        if (imageLinks.children('img').length) {
		            imageLinks.children('img').each(function() {
		                var currentTitle = $(this).attr('title');
		                $(this).attr('title', ' (click to enlarge image)');
		            });
		            imageLinks.click(function(e) {
		                e.preventDefault();
		                $(this).children('img').toggleClass('expanded');
		            });
		        }
		    });
		    
/* END of Resize the product image */

/* Carousel JS */

		$(document).ready(function() {
		   $(".carousel-inner").swiperight(function() {
		       $(this).parent().carousel('prev');
		   });
		   $(".carousel-inner").swipeleft(function() {
		       $(this).parent().carousel('next');
		   });
		});

/* End of Carousel JS */
		    
</script>

