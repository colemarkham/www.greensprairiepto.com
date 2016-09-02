<?php
/**
 * The template for displaying all pages.
 */

get_header(); ?>
<div class="container">
	<div class="row">
		<div class="col-sm-9">
			<div class="pull-right" style="padding:8px;position:relative;z-index:9000"><a style="font-size: 1.5em;" href="/cart"><span class="glyphicon glyphicon-shopping-cart"> </span></a></div>
			<?php woocommerce_content(); ?>
		</div>
		
		<?php get_sidebar(); ?>
	</div> <!-- /.row -->
</div><!-- /.container -->

<?php get_footer(); ?>