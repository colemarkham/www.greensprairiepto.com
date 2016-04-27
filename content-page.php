<?php
/**
 * The default template for displaying content.
 */
?>

	<article <?php post_class(); ?>>
	
		<div class="page-header">
			<?php the_post_thumbnail(); ?>
			<h1><?php the_title(); ?></h1>
		</div>
		
		<?php the_content(); ?>
		
	</article>