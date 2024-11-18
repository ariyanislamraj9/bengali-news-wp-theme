 <?php
/**
 * Theme Name: Template Pro
 * Theme URI: http://itpolly.com/templatepro
 * Author: itpolly.Com
 * Author URI: http://itpolly.com
 * Description: Themes Is WordPress Theme Market
 * @package templatepro
 */
global $itpolly;
?>

<div class="top-scroll-section3">  
    <div class="<?php container_itpolly(); ?>">
        <div class="scroll-section3">
            <div class="row">
                <div class="col-md-12"> 
                    <div class="scroll3-left">
                    <span> <?php echo $itpolly['bottom_scroll_title']?>  </span>
                    </div>
                    <div class="scroll3-right">
                        <marquee direction="left" scrollamount="5px" onmouseover="this.stop()" onmouseout="this.start()"> 
                            
                       <?php if($itpolly['bottom_scroll_settings'] ==1 ): ?>
												<?php 
												$theme_sbazar = new WP_Query(array(
												'post_type' => 'post',
												'posts_per_page' => $itpolly['how_bottom_scroll'],
												));
												while($theme_sbazar->have_posts()) : $theme_sbazar->the_post(); ?>
												<a href="<?php the_permalink()?>"> 
												
												<?php if($itpolly['bottom-icon-settings'] == 1 ): ?>						
												<?php echo $itpolly['bottom-scroll-icon']?>
												<?php endif; if($itpolly['bottom-icon-settings'] == 0 ): ?>
												<img src="<?php echo $itpolly['bottom-scroll-image']['url']?>" alt="Logo" title="Logo" width="30px" height="auto">
												<?php endif; ?>
												
												
												<?php the_title();?> </a>
												<?php endwhile; ?>
												
								<?php endif; if($itpolly['bottom_scroll_settings'] == 2 ): ?>
								
												<?php 
									$cat = $itpolly['bottom_scroll_cat'];
									$category_name = get_the_category_by_id($cat);
									$theme_sbazar = new WP_Query(array(
									'post_type' => 'post',
									'cat' => $cat,
									'posts_per_page' => $itpolly['how_bottom_scroll'],
									));
									while($theme_sbazar->have_posts()) : $theme_sbazar->the_post(); ?>
									<a href="<?php the_permalink()?>"> 
									
									<?php if($itpolly['bottom-icon-settings'] == 1 ): ?>						
												<?php echo $itpolly['bottom-scroll-icon']?>
												<?php endif; if($itpolly['bottom-icon-settings'] == 0 ): ?>
												<img src="<?php echo $itpolly['bottom-scroll-image']['url']?>" alt="Logo" title="Logo" width="30px" height="auto">
												<?php endif; ?>
												
									<?php the_title();?> </a>
									<?php endwhile; ?>
								<?php endif; if($itpolly['bottom_scroll_settings'] == 3 ): ?>
								<?php echo $itpolly['bottom_scroll_content']?>
								<?php endif; ?>
                        
                        
                        
                        
                        </marquee>
                    </div>                               

                </div>
            </div>
        </div>              
    </div>
</div>