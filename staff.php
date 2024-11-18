<?php /* Template Name: Our Staff */ 
get_header(); $timeout= timeout();
?>


<div class="archive-page1">
            <div class="<?php container_itpolly(); ?>">
              

                    <!--==========itpolly=============
                        Team Start
                    ==============itpolly============-->
                    <div class="all-section" style="overflow: hidden;"><!-- All Section-->
                        <section class="team-section">
                            <div class="container">
                                <div class="row">
                                    
									<?php 
							$themebazar = new WP_Query(array(
								'post_type' => 'staff',
								'posts_per_page' => 500,
								'offset'     =>0,
								'order'     => 'ASC',
							));
							while($themebazar->have_posts()) : $themebazar->the_post(); ?>	
									
									<div class="custom-col-3">
                                        <div class="team-wrpp">
                                            <div class="team-image">
                                                <a href="<?php the_permalink()?>"> <img src="<?php echo get_post_meta(get_the_ID(),'staff_img', true); ?>" alt="<?php the_title() ?> "></a>
                                            </div>
                                            <h1 class="team-name">
                                                <a href="<?php the_permalink()?>"><?php the_title() ?> </a>
                                            </h1>
                                            <h6 class="team-deg">
                                                <?php echo get_post_meta(get_the_ID(),'designation', true); ?>
                                            </h6> 
                                        </div>
                                        
                                    </div>
                                    
									<?php endwhile ?>
            
            
            
                                </div>
                                
                               
                            </div>
                        </section>
                      
                      
                
                  
                     
                    </div><!-- All Section Close -->
            


            </div>
        </div>
		

	
<?php
get_footer();
?>