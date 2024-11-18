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
$sec_title = $itpolly['sec_title_two'];
?>

 <section class="section-two">
            <div class="<?php container_itpolly(); ?>">
                <div class="secTwo-color">
                    <div class="row">
                        <div class="col-lg-12 col-md-12">  
                            <div class="itpolly_cat6">                               
                                <ul class="nav nav-pills" id="categori-tab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <div class="nav-link active" id="categori-tab1" data-bs-toggle="pill" data-bs-target="#Info-tabs1" role="tab" aria-controls="Info-tabs1" aria-selected="false"> 
									<?php
								$cat = $itpolly['cat_one'];
								if($cat == NULL){ $cat = 1; }else{ $cat = $cat; }
								$category_name = get_the_category_by_id($cat);
								echo $category_name;  ?>
								
										</div>
                                    </li>
                                    
        
                                    <li class="nav-item" role="presentation">
                                        <div class="nav-link" id="categori-tab2" data-bs-toggle="pill" data-bs-target="#Info-tabs2" role="tab" aria-controls="Info-tabs2" aria-selected="false"> 
										<?php
								$cat = $itpolly['cat_two'];
								if($cat == NULL){ $cat = 1; }else{ $cat = $cat; }
								$category_name = get_the_category_by_id($cat);
								echo $category_name;  ?>
								</div>
                                    </li>
        
                                    <li class="nav-item" role="presentation">
                                        <div class="nav-link" id="categori-tab3" data-bs-toggle="pill" data-bs-target="#Info-tabs3" role="tab" aria-controls="Info-tabs3" aria-selected="false"> 
											<?php
								$cat = $itpolly['cat_three'];
								if($cat == NULL){ $cat = 1; }else{ $cat = $cat; }
								$category_name = get_the_category_by_id($cat);
								echo $category_name;  ?>
								
											</div>
                                    </li>
        
                                    <li class="nav-item" role="presentation">
                                        <div class="nav-link" id="categori-tab4" data-bs-toggle="pill" data-bs-target="#Info-tabs4" role="tab" aria-controls="Info-tabs4" aria-selected="false"> 
						<?php
								$cat = $itpolly['cat_four'];
								if($cat == NULL){ $cat = 1; }else{ $cat = $cat; }
								$category_name = get_the_category_by_id($cat);
								echo $category_name;  ?>
										</div>
                                    </li>
        
                                    <span class="themeBazar6"></span>
        
                                </ul>
                            </div>
                        
                        
                    


                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane active show  fade" id="Info-tabs1" role="tabpanel" aria-labelledby="categori-tab1 ">

                                    <div class="row">
                                        
										<?php
								$cat = $itpolly['cat_one'];
								if($cat == NULL){ $cat = 1; }else{ $cat = $cat; }
								$cat_how = $itpolly['how_post_one'];
							?>
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
								
										<div class="itpolly-4 itpolly-m2">
                                            <div class="sec-two-wrpp">
                                                <div class="section-two-image">
                                                <?php newsimage() ?>
												<?php 
								$video = get_post_meta(get_the_ID(),'video', true);
								if($video){ ?>
								<a href="<?php the_permalink()?>" class="mediam-icon"><i class="la la-play"></i></a>
								<?php }	else{} ?>
								
                                                </div>
                                            
                                                <h5 class="sec-two-title">
                                                <a href="<?php the_permalink()?>"><?php short_title() ?> </a>
                                                </h5>
                                            </div>
                                        </div>
										<?php endwhile?>
                                    
                                        
       
                            
                                    </div>

                                    
                                 


                                </div>
                                <div class="tab-pane fade" id="Info-tabs2" role="tabpanel" aria-labelledby="categori-tab2">
                                   <div class="row">
                                        
										<?php
								$cat = $itpolly['cat_two'];
								if($cat == NULL){ $cat = 1; }else{ $cat = $cat; }
								$cat_how = $itpolly['how_post_two'];
							?>
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
								
										<div class="itpolly-4 itpolly-m2">
                                            <div class="sec-two-wrpp">
                                                <div class="section-two-image">
                                                <?php newsimage() ?>
												<?php 
								$video = get_post_meta(get_the_ID(),'video', true);
								if($video){ ?>
								<a href="<?php the_permalink()?>" class="mediam-icon"><i class="la la-play"></i></a>
								<?php }	else{} ?>
								
                                                </div>
                                            
                                                <h5 class="sec-two-title">
                                                <a href="<?php the_permalink()?>"><?php short_title() ?> </a>
                                                </h5>
                                            </div>
                                        </div>
										<?php endwhile?>
                                    
                                        
       
                            
                                    </div>

                                    
                                </div>
                                <div class="tab-pane fade" id="Info-tabs3" role="tabpanel" aria-labelledby="categori-tab3">
                                
                                    <div class="row">
                                        
										<?php
								$cat = $itpolly['cat_three'];
								if($cat == NULL){ $cat = 1; }else{ $cat = $cat; }
								$cat_how = $itpolly['how_post_three'];
							?>
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
								
										<div class="itpolly-4 itpolly-m2">
                                            <div class="sec-two-wrpp">
                                                <div class="section-two-image">
                                                <?php newsimage() ?>
												<?php 
								$video = get_post_meta(get_the_ID(),'video', true);
								if($video){ ?>
								<a href="<?php the_permalink()?>" class="mediam-icon"><i class="la la-play"></i></a>
								<?php }	else{} ?>
								
                                                </div>
                                            
                                                <h5 class="sec-two-title">
                                                <a href="<?php the_permalink()?>"><?php short_title() ?> </a>
                                                </h5>
                                            </div>
                                        </div>
										<?php endwhile?>
                                    
                                        
       
                            
                                    </div>

                                
                                </div>

                                <div class="tab-pane fade" id="Info-tabs4" role="tabpanel" aria-labelledby="categori-tab4">
                                    <div class="row">
                                        
										<?php
								$cat = $itpolly['cat_four'];
								if($cat == NULL){ $cat = 1; }else{ $cat = $cat; }
								$cat_how = $itpolly['how_post_four'];
							?>
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
								
										<div class="itpolly-4 itpolly-m2">
                                            <div class="sec-two-wrpp">
                                                <div class="section-two-image">
                                                <?php newsimage() ?>
												<?php 
								$video = get_post_meta(get_the_ID(),'video', true);
								if($video){ ?>
								<a href="<?php the_permalink()?>" class="mediam-icon"><i class="la la-play"></i></a>
								<?php }	else{} ?>
								
                                                </div>
                                            
                                                <h5 class="sec-two-title">
                                                <a href="<?php the_permalink()?>"><?php short_title() ?> </a>
                                                </h5>
                                            </div>
                                        </div>
										<?php endwhile?>
                                    
                                        
       
                            
                                    </div>

                                    
                            
                                    
                                </div>
                            </div>
                            
                            

                        
                            
                            
    
                            
                        </div>
                        
                    
                        
                        
                    </div>
                </div>
            </div>
        </section>