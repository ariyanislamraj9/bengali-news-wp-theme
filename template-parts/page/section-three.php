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
$sec_title = $itpolly['sec_title_three'];
?>

  <section class="section-three">
               <div class="<?php container_itpolly(); ?>">
                    <div class="row">
                        <div class="col-lg-8 col-md-8">
						
						<?php
								$cat = $itpolly['cat_five'];
								if($cat == NULL){ $cat = 1; }else{ $cat = $cat; }
								//$cat_how = $itpolly['how_post_one'];
								$category_name = get_the_category_by_id($cat);
								$category_name_link = get_category_link($cat); 
							?>
							
                           <!-- Category Title Start-->
				<?php if($sec_title ==1 ): ?>			
				<h2 class="itpolly_cat01"> <a href="<?php echo esc_url($category_name_link);?>"> <?php echo $category_name;?> </a> <span> <a href="<?php echo esc_url($category_name_link);?>"> <?php echo $itpolly['more_news']; ?> <?php echo $itpolly['cat_title_one_icon']; ?> </a></span> </h2>
				<?php endif; if($sec_title == 2 ): ?>       
                <h2 class="itpolly_cat02"> <a href="<?php echo esc_url($category_name_link);?>"> <?php echo $itpolly['cat_title_two_icon']; ?>  <?php echo $category_name;?>  </a>  </h2>
				<?php endif; if($sec_title == 3 ): ?>
                <h2 class="itpolly_cat03"> <a href="<?php echo esc_url($category_name_link);?>">  <?php echo $category_name;?>  </a> <span> <a href="<?php echo esc_url($category_name_link);?>"> <?php echo $itpolly['more_news']; ?> <?php echo $itpolly['cat_title_three_icon']; ?> </a></span> </h2>
				<?php endif; if($sec_title == 4 ): ?>		
                <h2 class="itpolly_cat04"> <a href="<?php echo esc_url($category_name_link);?>"> <?php echo $itpolly['cat_title_four_icon']; ?>  <?php echo $category_name;?>  </a>  </h2> 
				<?php endif; if($sec_title == 5 ): ?>    
                <h2 class="itpolly_cat05"> <a href="<?php echo esc_url($category_name_link);?>"><?php echo $itpolly['cat_title_five_icon']; ?>  <?php echo $category_name;?>  </a>  <span class="catBar"></span> </h2>
				<?php endif; if($sec_title == 6 ): ?>
                <h2 class="itpolly_cat06"> <a href="<?php echo esc_url($category_name_link);?>"><?php echo $itpolly['cat_title_six_icon']; ?>  <?php echo $category_name;?>  </a>   </h2>
				<?php endif; if($sec_title == 7 ): ?>
                <h2 class="itpolly_cat07"> <a href="<?php echo esc_url($category_name_link);?>"> <?php echo $itpolly['cat_title_seven_icon']; ?>  <?php echo $category_name;?> </a>  </h2>
				<?php endif; if($sec_title == 8 ): ?>  
                <h2 class="itpolly_cat08"> <a href="<?php echo esc_url($category_name_link);?>">  <?php echo $category_name;?> </a> <span> <a href="<?php echo esc_url($category_name_link);?>"> <?php echo $itpolly['more_news']; ?> <?php echo $itpolly['cat_title_eight_icon']; ?> </a></span> </h2>
				<?php endif; if($sec_title == 9 ): ?>    
                <h2 class="itpolly_cat09"> <span>  <a href="<?php echo esc_url($category_name_link);?>"> <?php echo $itpolly['cat_title_nine_icon']; ?> <?php echo $category_name;?> </a>  </span> </h2>
				<?php endif; if($sec_title == 10 ): ?>
                <h2 class="itpolly_cat10"> <a href="<?php echo esc_url($category_name_link);?>"> <?php echo $category_name;?>  </a> <span> <a href="<?php echo esc_url($category_name_link);?>"> <?php echo $itpolly['more_news']; ?> <?php echo $itpolly['cat_title_ten_icon']; ?></a></span> </h2>
				<?php endif; ?>	
				<!-- Category Title Close-->

                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    
									<?php
									$themes_bazar = new WP_Query(array(
									'post_type' => 'post',
									'posts_per_page' =>1,
									//'posts_per_page' => $cat_how,
									//'posts_per_page' => $cat_how - 1,
									'offset' => 0,
									'cat' => $cat,
								));
								while ($themes_bazar->have_posts()) : $themes_bazar->the_post(); ?>
								
									<div class="secThree-bg">
                                        <div class="sec-theee-image">
                                            <?php newsimage() ?>
											<?php 
								$video = get_post_meta(get_the_ID(),'video', true);
								if($video){ ?>
								<a href="<?php the_permalink()?>" class="video-icon3"><i class="la la-play"></i></a>
								<?php }	else{} ?>

                                        </div>
                                        <h4 class="secThree-title">
                                            	<a href="<?php the_permalink()?>"><?php short_title() ?> </a>
                                        </h4>
                                    </div>
									<?php endwhile?>

                                    <div class="row">
                                        
										<?php
									$themes_bazar = new WP_Query(array(
									'post_type' => 'post',
									'posts_per_page' =>2,
									//'posts_per_page' => $cat_how,
									//'posts_per_page' => $cat_how - 1,
									'offset' => 1,
									'cat' => $cat,
								));
								while ($themes_bazar->have_posts()) : $themes_bazar->the_post(); ?>
										<div class="itpolly-2 itpolly-m2">
                                            <div class="secThree-wrpp">
                                                <div class="sec-theee-image2">
                                                    <?php newsimage() ?>
													
													<?php 
								$video = get_post_meta(get_the_ID(),'video', true);
								if($video){ ?>
								<a href="<?php the_permalink()?>" class="video-icon3"><i class="la la-play"></i></a>
								<?php }	else{} ?>
       
                                                </div>
                                                <h4 class="secThree-title2">
                                                    <a href="<?php the_permalink()?>"><?php short_title() ?> </a>
                                                </h4>
                                            </div>
                                            
                                        </div>
										<?php endwhile?>

                                       

                                    </div>

                                </div>

                                <div class="col-lg-6 col-md-6">
                                    <div class="bg2">
                                        
										<?php
									$themes_bazar = new WP_Query(array(
									'post_type' => 'post',
									'posts_per_page' =>5,
									//'posts_per_page' => $cat_how,
									//'posts_per_page' => $cat_how - 1,
									'offset' => 3,
									'cat' => $cat,
								));
								while ($themes_bazar->have_posts()) : $themes_bazar->the_post(); ?>
								
										<div class="secThree-smallItem">
                                            <div class="secThree-smallImg">
                                                <?php newsimage() ?>
													
													<?php 
								$video = get_post_meta(get_the_ID(),'video', true);
								if($video){ ?>
								<a href="<?php the_permalink()?>" class="small-icon3"><i class="la la-play"></i></a>
								<?php }	else{} ?>
        
        
                                                <h5 class="secOne_smallTitle">
                                                    <a href="<?php the_permalink()?>"><?php short_title() ?> </a>
                                                </h5>
                                            </div>
                                        </div>
										
										<?php endwhile?>


                                    </div>
                                </div>

                            </div>

                        </div>
                        <div class="col-lg-4 col-md-4">
                          <?php if($itpolly['map_show_hide'] == 1 ): ?>
                            <!-- Category Title Start-->
				<?php if($sec_title ==1 ): ?>			
				<h2 class="itpolly_cat01"> <a href=""> <i class="las la-map-marker"></i> <?php echo $itpolly['map_title']; ?> </a></h2>
				<?php endif; if($sec_title == 2 ): ?>       
                <h2 class="itpolly_cat02"> <a href=""> <i class="las la-map-marker"></i> <?php echo $itpolly['map_title']; ?>  </a>  </h2>
				<?php endif; if($sec_title == 3 ): ?>
                <h2 class="itpolly_cat03"> <a href="">  <i class="las la-map-marker"></i> <?php echo $itpolly['map_title']; ?> </a> </h2>
				<?php endif; if($sec_title == 4 ): ?>		
                <h2 class="itpolly_cat04"> <a href=""> <i class="las la-map-marker"></i> <?php echo $itpolly['map_title']; ?>  </a>  </h2> 
				<?php endif; if($sec_title == 5 ): ?>    
                <h2 class="itpolly_cat05"> <a href=""> <i class="las la-map-marker"></i> <?php echo $itpolly['map_title']; ?>  </a>  <span class="catBar"></span> </h2>
				<?php endif; if($sec_title == 6 ): ?>
                <h2 class="itpolly_cat06"> <a href=""> <i class="las la-map-marker"></i> <?php echo $itpolly['map_title']; ?>  </a>   </h2>
				<?php endif; if($sec_title == 7 ): ?>
                <h2 class="itpolly_cat07"> <a href=""> <i class="las la-map-marker"></i> <?php echo $itpolly['map_title']; ?> </a>  </h2>
				<?php endif; if($sec_title == 8 ): ?>  
                <h2 class="itpolly_cat08"> <a href=""> <i class="las la-map-marker"></i> <?php echo $itpolly['map_title']; ?> </a> </h2>
				<?php endif; if($sec_title == 9 ): ?>    
                <h2 class="itpolly_cat09"> <span>  <a href=""> <i class="las la-map-marker"></i> <?php echo $itpolly['map_title']; ?> </a>  </h2>
				<?php endif; if($sec_title == 10 ): ?>
                <h2 class="itpolly_cat10"> <a href=""> <i class="las la-map-marker"></i> <?php echo $itpolly['map_title']; ?> </a> </h2>
				<?php endif; ?>	
				<!-- Category Title Close-->
				
				<?php get_template_part('template-parts/page/map') ?>
				
					<?php endif; ?>   

					<?php dynamic_sidebar('widget_map')?>

                             

                        </div>
                    </div>
                </div>
            </section>