<?php /* Template Name: Photo Gallery */ 
get_header(); $timeout= timeout(); 
?>

 <section class="photoGallery-page">
            <div class="<?php container_itpolly(); ?>">
                <div class="archive-info-cats">
                    <a href="<?php echo get_home_url(); ?>"><i class="la la-home"> </i> </a>  <i class="la la-chevron-right"></i>  <?php  ?> 
                </div>
          
                <div class="photo-page-content">
                    <div class="row">

		
		<?php
		$the_query = new WP_Query( array('post_type'=>'photo_gallery',
                                 'paged' => get_query_var('paged') ? get_query_var('paged') : 1) 
                            ); 
                            ?>
<?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>

		
		
					   <div class="itpolly-4 itpolly-m2">
                            <div class="photo-page-wrpp">
                                <div class="photo-page-image">
                                  <a class="photo-pageIcon itpolly" href="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID))?>">  <i class="las la-camera"></i>
                                    <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID))?>" alt="<?php the_title() ?>"></a>
                                </div>
                                <div class="photo-page-title">
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
                    
                   
                   
                   

                </div>

      
        
               
            </div>
        </section>
<?php
get_footer();
?>