<?php
/**
 * Template Name: Wrapped Content Template
 *
 * Description: A page template that provides a wrapper for the content, useful for Woocommerce
 */

get_header(); ?>
<div class="container">
	<div class="row">
		<div class="col-sm-9">
			<?php while ( have_posts() ) : the_post(); ?>
			
				<?php get_template_part( 'content-page' ); ?>
				
			<?php endwhile; ?>
		</div>
		
		<?php get_sidebar(); ?>
	</div> <!-- /.row -->
	
</div><!-- /.container -->

<?php get_footer(); ?>