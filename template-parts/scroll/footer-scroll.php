<?php
/**
  * Theme Name: NewsFlash
 * Theme URI: http://itpolly.com/newsflash
 * Author: itpolly.Com
 * Author URI: http://itpolly.com
 * Description: Themes Is WordPress Theme Market
 * @package newsflash
 */
global $itpolly;

?>

                        <div class="footer-scrool">
                            <div class="footer-scrool-1">
                                <span><?php echo $itpolly['footer_scroll_title']?></span>
                            </div>
                               
                           <div class="footer-scrool-2">
                               <marquee direction="left" scrollamount="5px" onmouseover="this.stop()" onmouseout="this.start()"> 
							   <?php if($itpolly['footer_scroll_settings'] ==1 ): ?>
												<?php 
												$theme_sbazar = new WP_Query(array(
												'post_type' => 'post',
												'posts_per_page' => $itpolly['how_footer_scroll'],
												));
												while($theme_sbazar->have_posts()) : $theme_sbazar->the_post(); ?>
												<a href="<?php the_permalink()?>"> 
												
												<?php if($itpolly['footer-icon-settings'] == 1 ): ?>						
												<?php echo $itpolly['footer-scroll-icon']?>
												<?php endif; if($itpolly['footer-icon-settings'] == 0 ): ?>
												<img src="<?php echo $itpolly['footer-scroll-image']['url']?>" alt="Logo" title="Logo" width="30px" height="auto">
												<?php endif; ?>

												<?php the_title();?> </a>
												<?php endwhile; ?>
												
								<?php endif; if($itpolly['footer_scroll_settings'] == 2 ): ?>
								
												<?php 
									$cat = $itpolly['footer_scroll_cat'];
									$category_name = get_the_category_by_id($cat);
									$theme_sbazar = new WP_Query(array(
									'post_type' => 'post',
									'cat' => $cat,
									'posts_per_page' => $itpolly['how_footer_scroll'],
									));
									while($theme_sbazar->have_posts()) : $theme_sbazar->the_post(); ?>
									<a href="<?php the_permalink()?>"> 
									
									<?php if($itpolly['footer-icon-settings'] == 1 ): ?>						
												<?php echo $itpolly['footer-scroll-icon']?>
												<?php endif; if($itpolly['footer-icon-settings'] == 0 ): ?>
												<img src="<?php echo $itpolly['footer-scroll-image']['url']?>" alt="Logo" title="Logo" width="30px" height="auto">
												<?php endif; ?>
												
									<?php the_title();?> </a>
									<?php endwhile; ?>
								<?php endif; if($itpolly['footer_scroll_settings'] == 3 ): ?>
								<?php echo $itpolly['footer_scroll_content']?>
								<?php endif; ?>
								
								</marquee>
                           </div>
                       </div>
            