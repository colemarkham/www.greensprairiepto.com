<?php
/**
 * The template for displaying all pages.
 */

get_header(); ?>
<div class="container">
	<div class="row">
		<div class="col-sm-9">
			<?php woocommerce_content(); ?>
		</div>
		
		<?php get_sidebar(); ?>
	</div> <!-- /.row -->
</div><!-- /.container -->

<?php get_footer(); ?>