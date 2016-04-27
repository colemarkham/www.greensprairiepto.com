<?php
/**
 * Template Name: No-Title Page Template
 *
 * Description: A page template that does not include the title
 */

get_header(); ?>
<div class="container">
	<div class="row">
		<div class="col-sm-9">
			<?php while ( have_posts() ) : the_post(); ?>
			
				<?php get_template_part( 'content' ); ?>
				
			<?php endwhile; ?>
		</div>
		
		<?php get_sidebar(); ?>
	</div> <!-- /.row -->
	
</div><!-- /.container -->

<?php get_footer(); ?>