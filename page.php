<?php
/**
 * The template for displaying all pages.
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