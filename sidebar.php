<?php
/**
 * The Template for displaying the theme sidebar
 */
?>

	<div class="col-sm-3">
		<nav class="side-nav">
			<?php wp_nav_menu( array( 
				'theme_location' => 'sidebar',
				'menu_class' => 'nav nav-pills nav-stacked',
				'container' => FALSE
		) ); ?>
		</nav>
	</div>
