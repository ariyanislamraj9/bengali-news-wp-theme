<?php /* Template Name: Author List*/ 
get_header(); $timeout= timeout(); 
?>


<div class="archive-page1">
            <div class="<?php container_itpolly(); ?>">
              

                    <!--==========itpolly=============
                        Team Start
                    ==============itpolly============-->
                    <div class="all-section" style="overflow: hidden;"><!-- All Section-->
                        <section class="team-section">
                            <div class="<?php container_itpolly(); ?>">
                                <div class="row">
                                    
								<?php global $wpdb;
			 
							$authors = $wpdb->get_results("SELECT ID, user_nicename from $wpdb->users ORDER BY display_name");
							 
							foreach($authors as $author) {

							?>	
									
									<div class="itpolly-6 itpolly-m2">
                                        <div class="team-wrpp">
                                            <div class="team-imagee">
                                                <a href="<?php echo get_author_posts_url ($author->ID);  ?>"> <?php echo get_avatar($author->ID); ?> </a>
                                            </div>
                                            <h1 class="team-name">
                                                <a href="<?php echo get_author_posts_url ($author->ID);  ?>"> <?php echo the_author_meta('first_name', $author->ID) ?> <?php echo the_author_meta('last_name', $author->ID) ?>   </a>
                                            </h1>
                                        </div>
                                        
                                    </div>
                                    
									<?php
							} ?>
            
            
            
                                </div>
                                
                               
                            </div>
                        </section>
                      
                      
                
                  
                     
                    </div><!-- All Section Close -->
            


            </div>
        </div>

	
<?php
get_footer();
?>