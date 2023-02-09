
get_header(); ?>
<div class="container">
	<div id="content_navigator">
     <div class="page_content">
        <section class="site-main">
			<?php if ( have_posts() ) : ?>
				<div class="blog-post">
					<?php /* Start the Loop */ 
						while ( have_posts() ) : the_post(); 
						get_template_part( 'content', get_post_format() ); 
						endwhile;
					?>
                </div>
                <?php  
				// Previous/next post navigation.
				the_posts_pagination( array(
							'mid_size' => 2,
							'prev_text' => esc_html__( 'Back', 'skt-ayurveda' ),
							'next_text' => esc_html__( 'Next', 'skt-ayurveda' ),
							'screen_reader_text' => esc_html__( 'Posts navigation', 'skt-ayurveda' )
				) );
			    else : 
				get_template_part( 'no-results'); 
				endif; ?>
        </section>
       <?php get_sidebar();?>       
        <div class="clear"></div>
    </div><!-- site-aligner -->
    </div>
</div><!-- container -->
<?php get_footer(); ?>