<?php /* Template Name: Photo Gallery */ 
get_header(); $timeout= timeout(); 
?>

 
 <?php if(have_posts()) : ?>
					<?php while(have_posts()) : the_post(); ?>
					
					
  
  
  
  
  <div class="single-video">
                <div class="<?php container_itpolly(); ?>">
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <h2 class="thumbanil-title">
                               <a href="<?php the_permalink()?>"><?php the_title() ?> </a>	                                   
                            </h2>
                            
                          
							<?php $youtube_id = get_post_meta(get_the_ID(),'youtube_link_gallery', true); ?>
							<iframe src="https://www.youtube.com/embed/<?php echo $youtube_id;?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
							
                              
                      

				<?php the_content();?>
				
                        </div>
                       
                    </div>
                </div>
            </div>
			

			
			<?php endwhile; endif;?>

	
<?php
get_footer();
?>