<?php

function nav_main($dbc, $path) {
	
		$q = "SELECT * FROM navigation ORDER BY position ASC";
		$r = mysqli_query($dbc,$q);
	
		while($nav = mysqli_fetch_assoc($r)) { 
			$nav['slug'] = get_slug($dbc, $nav['url']);

?>

		<?php if ($nav['slug'] == 'equipment'): ?>
			<li <?php selected($path['call_parts'][0], $nav['slug'], 'class="dropdown"') ?>><a href="#" <?php echo 'class="dropdown-toggle" data-toggle="dropdown"' ?>><?php echo $nav['label']; ?><b class="caret"></b></a>
				<ul class="dropdown-menu">
		<?php 	$q1 = "SELECT DISTINCT category FROM products WHERE category != 'livestock'";
				$r1 = mysqli_query($dbc,$q1);
				while($cat = mysqli_fetch_array($r1)){ ?>
		
					<li><a href="<?php echo $cat['category']; ?>"><?php echo $cat['category']; ?></a></li>
					<?php } ?>					
				</ul>
			</li> 
		
		<?php else: ?>
			<li <?php selected($path['call_parts'][0], $nav['slug'], 'class="active"') ?>><a href="<?php echo $nav['url']; ?>"><?php echo $nav['label']; ?></a></li>
		<?php endif ?>

	<?php	
			}
		}

?>
