<?php
/**
 * Template Name: One Page Site
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			
			<?php 
			    $args = array(
			        'post_type' => 'page',
			        'order' => 'ASC'
			    );
			    $the_query = new WP_Query( $args );		    
			?>
			<?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>	

			<?php get_template_part( 'content', 'page' ); ?>

			<?php endwhile; endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
