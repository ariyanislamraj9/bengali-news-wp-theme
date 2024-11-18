<?php /* Template Name: Video Gallery */ 
get_header(); $timeout= timeout(); 
?>


<section class="videoGallery-page">
            <div class="<?php container_itpolly(); ?>">
                <div class="archive-info-cats">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><i class="la la-home"> </i> </a>  <i class="la la-chevron-right"></i> 
                </div>
          
                <div class="video-page-content">
                    <div class="row">
                        
						
						<?php
		$the_query = new WP_Query( array('post_type'=>'video_gallery',
                                 'paged' => get_query_var('paged') ? get_query_var('paged') : 1) 
                            ); 
                            ?>
<?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
						
						<div class="itpolly-4 itpolly-m2">
                            <div class="video-page-wrpp">
                                <div class="video-page-image">
                                    <?php $youtube_id = get_post_meta(get_the_ID(),'youtube_link_gallery', true); ?>
										<?php if(has_post_thumbnail()){ 
												the_post_thumbnail();}
												else{?>
												<img src="https://img.youtube.com/vi/<?php echo $youtube_id;?>/mqdefault.jpg" />
												<?php } ?>
												
                                    <a href="https://www.youtube.com/watch?v=<?php echo $youtube_id;?>" class="video-pageIcon popup"> <i class="las la-video"></i>  </a>
                                                                   
                                </div>
                                <div class="video-page-title">
                                    <a href="<?php the_permalink()?>"><?php the_title() ?> </a>	
                                </div>
                                
                            </div>
                        </div>
						
						
						<?php endwhile; ?>
						<div class="row">
						<div class="col-md-12">
<?php 
$big = 999999999; // need an unlikely integer
 echo paginate_links( array(
    'base' => str_replace( $big, '%#%', get_pagenum_link( $big ) ),
    'format' => '?paged=%#%',
    'current' => max( 1, get_query_var('paged') ),
    'total' => $the_query->max_num_pages,
	'prev_text'    => __('« Prev'),
	'next_text'    => __('Next »'),
) );

wp_reset_postdata(); ?>
                        

             
                       
                    </div>
                    
                   
                   
                   

                </div>

      
              

               
            </div>
        </section>
		
		
		
	
<?php
get_footer();
?>