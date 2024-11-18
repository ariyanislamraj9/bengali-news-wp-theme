<?php
/**
 * Theme Name: AR News Pro
 * Theme URI: https://www.ariyanislamraj.pro
 * Author: AriyaN Islam Raj
 * Author URI: https://www.ariyanislamraj.com
 * Description: Themes Is WordPress Theme Market
 * @package templatepro
 */
 
get_header(); $timeout= timeout();
?>

<section class="author-page">
            <div class="<?php container_itpolly(); ?>">
        
     
                <div class="row">
                    <div class="col-lg-8 col-md-8">
                        <div class="row">
                            
							<?php if(have_posts()) : ?>
							<?php
							while(have_posts()) : the_post();?>
							
							<div class="custom-col-6">
                                <div class="author-wrpp">                                        
                                    <div class="authorNews-image"> 
                                        <?php newsimage() ?>
										<?php 
								$video = get_post_meta(get_the_ID(),'video', true);
								if($video){ ?>
								<a href="<?php the_permalink()?>" class="author-icon"><i class="la la-play"></i></a>
								<?php }	else{} ?>
								
                                    </div>
                                    <div class="authorPage-content">
                                        <h2 class="authorPage-title">
                                            <a href="<?php the_permalink()?>"><?php the_title() ?> </a>	
                                        </h2>
                                        <div class="author-date">
                                            <a href=""> <?php the_author_meta('first_name'); ?> <?php the_author_meta('last_name'); ?> </a> <span> <i class="las la-clock"></i> <?php newsdate();?>	 </span> 
                                            </div>
                                        </div>
                                    </div>
    
                                </div>
                         
                            <?php endwhile;  endif; ?>  
                            
                            
                           
                        </div>
						
						<div class="row">
						<div class="col-lg-8 col-md-8">
							<?php wp_bootstrap_pagination(); ?>
						</div>
					</div>
                         
                            
                        
                    </div>

                    <div class="col-lg-4 col-md-4">
                        <div class="fixd-sitebar" style="position: sticky; top: 0;">

                            <div class="authorPage-content" style="background:
#fbf7f7; border: 2px solid
#e1dfdf; border-radius: 5px;">
                                <figure class="authorPage-image">
                                    <?php echo get_avatar(get_the_author_meta('ID'));?>
                                </figure>

                                <h1 class="authorPage-name">
                                    <a href=""> <?php the_author_meta('first_name'); ?> <?php the_author_meta('last_name'); ?> </a>   
                                </h1>

                                <div class="author-social">
                                    <a href="<?php the_author_meta('facebook'); ?>" target="_black" title="Facebook"><i class="lab la-facebook-f"></i></a>
                                    <a href="<?php the_author_meta('twitter'); ?>" target="_black" title="Twitter"><i class="lab la-twitter"></i></a>
                                    <a href="<?php the_author_meta('youtube'); ?>" target="_black" title="Youtube"><i class="lab la-youtube"></i></a>
                                    <a href="<?php the_author_meta('linkedin'); ?>" target="_black" title="Linkedin"><i class="lab la-linkedin-in"></i></a>
                                    <a href="<?php the_author_meta('instagram'); ?>" target="_black" title="Instagram"><i class="lab la-instagram"></i></a>
                                </div>
                                
                                <div class="author-details" style="text-align:justify">
                                       <?php the_author_meta('description'); ?>
                                    </div>

                            </div>

                                         
                            <div class="authorCat-title">
                                <span> <?php echo $itpolly['popular']; ?> </span> 
                            </div>
                   
                            <div class="authorPopular_item">
                                
								<?php
												$x=1;
												$month = date('m');
												$year = date('Y');
												query_posts('meta_key=post_views_count&orderby=meta_value_num&order=DESC&year=' . $year . '&monthnum=' . $month);
												while (have_posts()): the_post(); ?>
												<?php $xx=$x++ ?>
												
												
								<div class="authorPopular-wrpp">
                                    <div class="authorPopular-image">
                                        <?php newsimage() ?>
										<?php 
								$video = get_post_meta(get_the_ID(),'video', true);
								if($video){ ?>
								<a href="<?php the_permalink()?>" class="authorPopular-icon"><i class="la la-play"></i></a>
								<?php }	else{} ?>
								
                                        
                                        <div class="authorPopular-content">                              
                                            <h4 class="authorPopular-title">
                                                <a href="<?php the_permalink()?>"><?php the_title() ?> </a>
                                            </h4>
                                            <h6 class="authorPopular-date">
                                                <i class="las la-clock"></i> <?php newsdate();?>	
                                            </h6>                   
                                        </div>

                                    </div>
                                    
                                </div>
                                
                                <?php
											endwhile;
											wp_reset_query();
											?>
                                
                             
                            </div>

                          




                        </div>
                    </div>



                   


                    

                </div>

            



            </div>
        </section>






<?php
get_footer();
?>