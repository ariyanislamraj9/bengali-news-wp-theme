<?php 
get_header(); $timeout= timeout(); 
?>


 

 <section class="videoArchive-page">
            <div class="<?php container_itpolly(); ?>">
              
                <div class="videoArchive-page-content">
                    <div class="row">
                        <div class="col-lg-9 col-md-9">
                            <div class="archive-info-cats">
                                <a href="<?php echo get_home_url(); ?>"><i class="la la-home"> </i> </a>  <i class="la la-chevron-right"></i> 
                            </div>
                      
                            <div class="row">
                                
								
								<?php
						while ( have_posts() ) : the_post(); ?>
						
								<div class="custom-col-3">
                                    <div class="videoArchive-page-wrpp">
                                        <div class="videoArchive-page-image">
                                            
											<?php $youtube_id = get_post_meta(get_the_ID(),'youtube_link_gallery', true); ?>
										<?php if(has_post_thumbnail()){ 
												the_post_thumbnail();}
												else{?>
												<img src="https://img.youtube.com/vi/<?php echo $youtube_id;?>/mqdefault.jpg" />
												<?php } ?>
												
                                            <a href="https://www.youtube.com/watch?v=<?php echo $youtube_id;?>" class="videoArchive-pageIcon popup"> <i class="las la-video"></i>  </a>
                                        </div>
                                        <div class="videoArchive-page-title">
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
                                    <a href="index.html"> <i class="las la-newspaper"></i> </a>  <?php echo $itpolly['video_gallery_last'];?>
                                </div>

                                <div class="videoArchive-content">
                                    <div class="row">
                                        
										<?php 
										$how = $itpolly['video_gallery_how'];
							$themebazar = new WP_Query(array(
								'post_type' => 'video_gallery',
								'posts_per_page' => $how,
								'offset'     =>0,
							));
							while($themebazar->have_posts()) : $themebazar->the_post(); ?>
							
										<div class="custom-col-12">
                                            <div class="videoArchive-page-wrpp">
                                                <div class="videoArchive-page-image">
                                                    
													<?php $youtube_id = get_post_meta(get_the_ID(),'youtube_link_gallery', true); ?>
										<?php if(has_post_thumbnail()){ 
												the_post_thumbnail();}
												else{?>
												<img src="https://img.youtube.com/vi/<?php echo $youtube_id;?>/mqdefault.jpg" />
												<?php } ?>
													
                                                    <a href="https://www.youtube.com/watch?v=<?php echo $youtube_id;?>" class="videoArchive-pageIcon popup"> <i class="las la-video"></i>  </a>
                                                </div>
                                                <div class="videoArchive-page-title">
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