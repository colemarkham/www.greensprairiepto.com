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

		      <!-- Three columns of text below the carousel -->
		      <div class="row">
		        <div class="col-md-4 col-md-offset-0 col-sm-6 col-sm-offset-1 text-center">
		          <h2><span class="label label-primary">Spirit Nights</span></h2>
				  <h4>Texas Roadhouse</h4>
				  <a href="/spirit-nights"><img style="padding:5px" src='/img/sponsor/texas-roadhouse-logo.jpg' class="img-responsive" /></a>
				  <p><strong>Monday, March 28th, 3&ndash;10 p.m.</strong></p>
				  <div class="hidden-lg"><a class="btn btn-default" href="/spirit-nights" role="button">Learn more &raquo;</a></div>
		        </div><!-- /.col-lg-4 -->
		        <div class="col-md-4 col-md-offset-0 col-sm-6 col-sm-offset-1 text-center">
		          <h2><span class="label label-primary">Upcoming Events</span></h2>
				  <h4>5th Annual Mustang Rodeo</h4>
				  <a href="/rodeo"><img style="padding:5px" src='/img/rodeo-logo-2016.png' width="200" height="200" /></a>
				  <p><strong>April 2nd</strong></p>
		          <div class="hidden-lg"><a class="btn btn-default" href="/rodeo" role="button">View details &raquo;</a></div>
			  
		        </div><!-- /.col-lg-4 -->
		        <div class="col-md-4 col-md-offset-0 col-sm-6 col-sm-offset-1 text-center">
		          <h2><span class="label label-primary">Volunteer</span></h2>
				  <h4>Parent Patrol</h4>
				  <a href="/parent-patrol"><img style="padding:5px" src='/img/crossing-guard.png' width="200" height="200" /></a>
		          <div class="hidden-lg"><a class="btn btn-default" href="/parent-patrol" role="button">Learn more &raquo;</a></div>
		        </div><!-- /.col-lg-4 -->
		      </div><!-- /.row -->
		      <div class="row visible-lg">
		        <div class="col-lg-4 text-center">
		          <div><a class="btn btn-default" href="/spirit-nights" role="button">Learn more &raquo;</a></div>
		        </div><!-- /.col-lg-4 -->
		        <div class="col-lg-4 text-center">
		          <div><a class="btn btn-default" href="/rodeo" role="button">View details &raquo;</a></div>
		        </div><!-- /.col-lg-4 -->
		        <div class="col-lg-4 text-center">
		          <div><a class="btn btn-default" href="/parent-patrol" role="button">Learn more &raquo;</a></div>
		        </div><!-- /.col-lg-4 -->
		      </div><!-- /.row -->
		  </div>
		  
</div><!-- /.container -->

<?php get_footer(); ?>