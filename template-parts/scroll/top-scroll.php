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

<div class="top-scroll-section5">  
            <div class="container">
                <div class="alert" role="alert">
                    <div class="scroll-section5">
                        <div class="row">
                            <div class="col-md-12 top_scroll2"> 
                                <div class="scroll5-left">
                                    <div id="scroll5-left">
                                        <span> <?php echo $itpolly['top_scroll_title']?>  </span>
                                    </div>
                            
                                </div>
                            
                                <div class="scroll5-right">
                                    <marquee direction="left" scrollamount="5px" onmouseover="this.stop()" onmouseout="this.start()"> 
                                        
										<?php if($itpolly['scroll_settings'] ==1 ): ?>
												<?php 
												$theme_sbazar = new WP_Query(array(
												'post_type' => 'post',
												'posts_per_page' => $itpolly['how_top_scroll'],
												));
												while($theme_sbazar->have_posts()) : $theme_sbazar->the_post(); ?>
												<a href="<?php the_permalink()?>"> 
												
												<?php if($itpolly['icon-settings'] == 1 ): ?>						
												<?php echo $itpolly['header-scrool-icon']?>
												<?php endif; if($itpolly['icon-settings'] == 0 ): ?>
												<img src="<?php echo $itpolly['header-scroll-image']['url']?>" alt="Logo" title="Logo" width="30px" height="auto">
												<?php endif; ?>

												<?php the_title();?> </a>
												<?php endwhile; ?>
												
								<?php endif; if($itpolly['scroll_settings'] == 2 ): ?>
								
												<?php 
									$cat = $itpolly['top_scroll_cat'];
									$category_name = get_the_category_by_id($cat);
									$theme_sbazar = new WP_Query(array(
									'post_type' => 'post',
									'cat' => $cat,
									'posts_per_page' => $itpolly['how_top_scroll'],
									));
									while($theme_sbazar->have_posts()) : $theme_sbazar->the_post(); ?>
									<a href="<?php the_permalink()?>"> 
									
									<?php if($itpolly['icon-settings'] == 1 ): ?>						
												<?php echo $itpolly['header-scrool-icon']?>
												<?php endif; if($itpolly['icon-settings'] == 0 ): ?>
												<img src="<?php echo $itpolly['header-scroll-image']['url']?>" alt="Logo" title="Logo" width="30px" height="auto">
												<?php endif; ?>
												
									<?php the_title();?> </a>
									<?php endwhile; ?>
								<?php endif; if($itpolly['scroll_settings'] == 3 ): ?>
								<?php echo $itpolly['top_scroll_content']?>
								<?php endif; ?>
                                    
                                    
                                    </marquee>
                                </div>
                                <div class="scroolbar5">
                                    <button data-bs-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>