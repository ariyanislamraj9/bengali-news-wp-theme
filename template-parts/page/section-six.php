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
$sec_title = $itpolly['sec_title_six'];
?>

  <section class="section-four">
                <div class="<?php container_itpolly(); ?>">
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
						<?php
								$cat = $itpolly['cat_ten'];
								if($cat == NULL){ $cat = 1; }else{ $cat = $cat; }
								$cat_how = $itpolly['how_post_ten'];
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

                            <div class="secFour-slider owl-carousel">
                                
								<?php
									$themes_bazar = new WP_Query(array(
									'post_type' => 'post',
									//'posts_per_page' =>1,
									'posts_per_page' => $cat_how,
									//'posts_per_page' => $cat_how - 1,
									'offset' => 0,
									'cat' => $cat,
								));
								while ($themes_bazar->have_posts()) : $themes_bazar->the_post(); ?>
								<div class="secFour-wrpp ">
                                    <div class="secFour-image">
                                       <?php newsimage() ?>
									   <?php 
								$video = get_post_meta(get_the_ID(),'video', true);
								if($video){ ?>
								<a href="<?php the_permalink()?>" class="video-icon5"><i class="la la-play"></i></a>
								<?php }	else{} ?>

                                        <h5 class="secFour-title">
                                            <a href="<?php the_permalink()?>"><?php short_title() ?> </a>
                                        </h5>
                                    </div>
                                </div>
								<?php endwhile?>
                                


                            </div>
                        </div>
                    </div>
                </div>
            </section>