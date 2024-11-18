<?php
/**
 * Theme Name: Template Pro
 * Theme URI: https://www.facebook.com/groups/freewordpressthemeandplugin/
 * Author: Nayem Hasan
 * Author URI: https://www.facebook.com/abunayeem235/
 * Description: Themes Is WordPress Theme Market
 * @package templatepro
 */
get_header(); $timeout= timeout();
?>


<section class="date-page">
            <div class="<?php container_itpolly(); ?>">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="date-page-content">
                            <div class="row">
                                
								
								<?php if(have_posts()) : 
                     while(have_posts()) : the_post();
					 ?>
					 
								<div class="custom-col4">
                                    <div class="date-page-wrpp">
                                        <div class="date-image">
                                            <?php newsimage() ?>
											<?php 
								$video = get_post_meta(get_the_ID(),'video', true);
								if($video){ ?>
								<a href="<?php the_permalink()?>" class="date-icon"><i class="la la-play"></i></a>
								<?php }	else{} ?>
                                             
                                        </div>
                                        <h4 class="datePage-title">
                                            <a href="<?php the_permalink()?>"><?php the_title() ?> </a>	
                                        </h4>
                                        
                                        <div class="date-meta">
                                            <a href=""><i class="las la-tags"> </i>  <?php newsdate();?> </a>
                                        </div>
                                                                                
                                    </div>
                                   
                                </div>
                                <?php endwhile; endif; ?> 
                           
                        </div>
						<div class="row">
						 <div class="col-md-12"><?php wp_bootstrap_pagination(); ?></div>
						</div>
                        
                        
                        
                    </div>
                </div>
            </div>
        </section>

<?php
get_footer();
?>