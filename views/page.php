					<div class="container">	
						
						<?php if ($page['header'] != TheReefShack) { ?> <page_h1> <?php echo $page['header']; ?> </page_h1> <?php } ?> 
					
						<?php echo $page['body_formatted']; ?>
						
						<?php if ($page['header'] == TheReefShack) { include(D_TEMPLATE.'/home.php'); } ?>						
						<?php if ($page['header'] == Skimmers) { include(D_TEMPLATE.'/products.php'); } ?>
						<?php if ($page['header'] == Pumps) { include(D_TEMPLATE.'/products.php'); } ?>
						<?php if ($page['header'] == Lighting) { include(D_TEMPLATE.'/products.php'); } ?>
						<?php if ($page['header'] == Triton) { include(D_TEMPLATE.'/products.php'); } ?>
						<?php if ($page['header'] == Topup) { include(D_TEMPLATE.'/products.php'); } ?>
						<?php if ($page['header'] == Dosers) { include(D_TEMPLATE.'/products.php'); } ?>
						<?php if ($page['header'] == Reactors) { include(D_TEMPLATE.'/products.php'); } ?>
						<?php if ($page['header'] == Livestock) { include(D_TEMPLATE.'/livestock.php'); } ?>
						<?php if ($page['header'] == Gallery) { include(D_TEMPLATE.'/gallery.php'); } ?>
						<?php if ($page['header'] == Contact) { include(D_TEMPLATE.'/contact.php'); } ?>
						
						 					
					</div> <!-- END content area -->