<?php  
get_header(); $timeout= timeout(); 
?>

 				
	<section class="photoArchive-page">
            <div class="<?php container_itpolly(); ?>">
              
                <div class="photoArchive-page-content">
                    <div class="row">
                        <div class="col-lg-9 col-md-9">
                            <div class="archive-info-cats">
                                <a href="<?php echo get_home_url(); ?>"><i class="la la-home"> </i> </a>  <i class="la la-chevron-right"></i> </div>
                      
                            <div class="row">
                                
								
								<?php
						while ( have_posts() ) : the_post(); ?>
						
						
								<div class="custom-col-3">
                                    <div class="photoArchive-page-wrpp">
                                        <div class="photoArchive-page-image">
                                          <a class="photoArchive-pageIcon itpolly" href="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID))?>">  <i class="las la-camera"></i>
                                            <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID))?>" alt="<?php the_title() ?>"></a>
                                        </div>
                                        <div class="photoArchive-page-title">
                                            <a href="<?php the_permalink()?>"><?php the_title() ?> </a>	
                                        </div>
                                        
                                    </div>
                                </div>

                            <?php endwhile; ?>
							
                               <div class="col-md-12"><?php wp_bootstrap_pagination(); ?></div>
							   
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3">
                            <div class="fixed-sitber" style="position: sticky; top: 0;">
                                <div class="archive-info-cats">
                                    <a href="#"> <i class="las la-newspaper"></i> </a>  <?php echo $itpolly['photo_gallery_last'];?>
                                </div>

                                <div class="photoArchiveArchive-content">
                                    <div class="row">
                                        
										<?php 
										$how = $itpolly['photo_gallery_how'];
							$themebazar = new WP_Query(array(
								'post_type' => 'photo_gallery',
								'posts_per_page' => $how,
								'offset'     =>0,
							));
							while($themebazar->have_posts()) : $themebazar->the_post(); ?>
							
										<div class="custom-col-12">
                                            <div class="photoArchive-page-wrpp">
                                                <div class="photoArchive-page-image">
                                                <a class="photoArchive-pageIcon itpolly" href="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID))?>">  <i class="las la-camera"></i>
                                                    <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID))?>" alt="<?php the_title() ?>"></a>
                                                </div>
                                                <div class="photoArchive-page-title">
                                                    <a href="<?php the_permalink()?>"><?php the_title() ?> </a>	
                                                </div>
                                                
                                            </div>
                                        </div>
                                        
                                       <?php endwhile ?>
                                        

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                  
                  
                </div>

      

               
            </div>
        </section>	

	
<?php
get_footer();
?>