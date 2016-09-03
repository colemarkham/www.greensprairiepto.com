<?php
/**
 * Template Name: Front Page Template
 *
 * Description: A page template that provides a key component of WordPress as a CMS
 * by meeting the need for a carefully crafted introductory page.
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
	
	<!-- Marketing messaging and featurettes
		    ================================================== -->
		    <!-- Wrap the rest of the page in another container to center all the content. -->

		    <div class="container marketing">
				<?php
				$args = array( 'post_type' => 'feature', 'posts_per_page' => 3 );
				$lastposts = get_posts( $args );
				?>
				<div class="row">
				<?php 
				foreach ( $lastposts as $post ) :
				  	setup_postdata( $post );
					$custom = get_post_custom();
					$subtitle = $custom['subtitle'][0];
					$message = $custom['message'][0];
					$buttonText = $custom['button-text'][0];
					$link = get_permalink($custom['page'][0]);
				?>
				  <div class="col-md-4 col-md-offset-0 col-sm-6 col-sm-offset-1 text-center">
		          <h2><span class="label label-primary"><?php the_title(); ?></span></h2>
		          <?php if (!empty($subtitle)): ?>
				  <h4><?php echo $subtitle; ?></h4>
				  <?php endif;
				  if (has_post_thumbnail()):
				  ?>
				  <a href="<?php link; ?>"><img style="padding:5px" src='<?php the_post_thumbnail_url( );?>' class="img-responsive" width="200" height="200" /></a>
				  <?php endif;
				  if (!empty($message)): ?>
				  <p><strong><?php echo $message; ?></strong></p>
				  <?php endif;?>
				  <div class="hidden-lg"><a class="btn btn-default" href="<?php echo $link; ?>" role="button"><?php echo $buttonText; ?> &raquo;</a></div>
		        </div>
				<?php endforeach; 
				wp_reset_postdata(); ?>
				</div>
		      <div class="row visible-lg">
		      <?php 
		      foreach ( $lastposts as $post ) :
			      setup_postdata( $post );
			      $custom = get_post_custom();
					$buttonText = $custom['button-text'][0];
					$link = get_permalink($custom['page'][0]);
		      ?>
		        <div class="col-lg-4 text-center">
		          <div><a class="btn btn-default" href="<?php echo $link; ?>" role="button"><?php echo $buttonText; ?> &raquo;</a></div>
		        </div><!-- /.col-lg-4 -->
		        <?php endforeach; ?>
		      </div><!-- /.row -->
		  </div>
		  
</div><!-- /.container -->

<?php get_footer(); ?>