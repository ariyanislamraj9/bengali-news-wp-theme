<?php /* Template Name: Photo Gallery */ 
get_header(); $timeout= timeout(); 
?>

 
 <?php if(have_posts()) : ?>
					<?php while(have_posts()) : the_post(); ?>
					
					
  <div class="single-photo">
                <div class="<?php container_itpolly(); ?>">
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <h2 class="photo-title">
                               <?php the_title() ?>                                       
                            </h2>
                            
                            <div class="photo-wrpp">
                                <div class="photo-thumbnail">
                                    <a class="itpolly" href="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID))?>"> 
                                        <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID))?>" alt="<?php the_title() ?>   "></a>
                                    
									
									<?php 
										$caption = get_post(get_post_thumbnail_id())->post_excerpt;
										if($caption): ?>
										<h6 class="photo-sub">
                                        <?php echo $caption ?> 
                                    </h6>
									<?php endif; ?>
									
									
                                   
                                    
                                </div>
                               
                            </div>
							
							
							<div class="single-content2">
                              <?php the_content();?>
                           </div>
                         


                        </div>
                       
                    </div>
                </div>
            </div>
			
			<?php endwhile; endif;?>
			

	
<?php
get_footer();
?>