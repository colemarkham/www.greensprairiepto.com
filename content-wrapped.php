<?php
/**
 * The template used for displaying page content in page.php
 */
?>

	<article <?php post_class(); ?>>
	
		<div class="page-header">
			<?php the_post_thumbnail(); ?>
			<h1><?php the_title(); ?></h1>
		</div>
		
		<div class="row">
			<?php the_content(); ?>
		</div>
		
	</article>

