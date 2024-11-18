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
$sec_title = $itpolly['sec_title_photo'];
?>


<section class="section-ten">
                <div class="<?php container_itpolly(); ?>">
                    <div class="row">
                        <div class="col-lg-8 col-md-8">
                             <!-- Category Title Start-->
				<?php if($sec_title ==1 ): ?>			
				<h2 class="itpolly_cat01"> <a href=""> <i class="las la-camera"></i> <?php echo $itpolly['photo_gallery']; ?> </a></h2>
				<?php endif; if($sec_title == 2 ): ?>       
                <h2 class="itpolly_cat02"> <a href=""> <i class="las la-camera"></i> <?php echo $itpolly['photo_gallery']; ?>  </a>  </h2>
				<?php endif; if($sec_title == 3 ): ?>
                <h2 class="itpolly_cat03"> <a href="">  <i class="las la-camera"></i> <?php echo $itpolly['photo_gallery']; ?> </a> </h2>
				<?php endif; if($sec_title == 4 ): ?>		
                <h2 class="itpolly_cat04"> <a href=""> <i class="las la-camera"></i> <?php echo $itpolly['photo_gallery']; ?>  </a>  </h2> 
				<?php endif; if($sec_title == 5 ): ?>    
                <h2 class="itpolly_cat05"> <a href=""><i class="las la-camera"></i> <?php echo $itpolly['photo_gallery']; ?>  </a>  <span class="catBar"></span> </h2>
				<?php endif; if($sec_title == 6 ): ?>
                <h2 class="itpolly_cat06"> <a href=""><i class="las la-camera"></i> <?php echo $itpolly['photo_gallery']; ?>  </a>   </h2>
				<?php endif; if($sec_title == 7 ): ?>
                <h2 class="itpolly_cat07"> <a href=""> <i class="las la-camera"></i> <?php echo $itpolly['photo_gallery']; ?> </a>  </h2>
				<?php endif; if($sec_title == 8 ): ?>  
                <h2 class="itpolly_cat08"> <a href=""> <i class="las la-camera"></i> <?php echo $itpolly['photo_gallery']; ?></a> </h2>
				<?php endif; if($sec_title == 9 ): ?>    
                <h2 class="itpolly_cat09"> <span>  <a href=""> <i class="las la-camera"></i> <?php echo $itpolly['photo_gallery']; ?> </a>  </h2>
				<?php endif; if($sec_title == 10 ): ?>
                <h2 class="itpolly_cat10"> <a href=""> <i class="las la-camera"></i> <?php echo $itpolly['photo_gallery']; ?> </a> </h2>
				<?php endif; ?>	
				<!-- Category Title Close-->


                            <div class="homeGallery owl-carousel">
                                
								
								<?php 
								$how = $itpolly['how_post_photo'];
									$gallary_active = new WP_Query(array(
										'post_type' => 'photo_gallery',
										'posts_per_page' => $how,
										'offset'     =>0,
									));
									while($gallary_active->have_posts()) : $gallary_active->the_post(); ?>
									
								<div class="item" >
                                    <div class="photo">
                                        <a class="themeGallery" href="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID))?>">
                                            <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID))?>" alt="<?php short_title() ?>" /></a>
                                        <h3 class="photoCaption">
                                            <a href="<?php the_permalink()?>"><?php short_title() ?> </a>	
                                        </h3>
                                    </div>
                                </div>
								
								<?php endwhile?>


                            </div>


                            <div class="homeGallery1 owl-carousel">
                                <?php 
								$how = $itpolly['how_post_photo'];
									$gallary_active = new WP_Query(array(
										'post_type' => 'photo_gallery',
										'posts_per_page' => $how,
										'offset'     =>0,
									));
									while($gallary_active->have_posts()) : $gallary_active->the_post(); ?>
								<div  class="item">
                                    <div class="phtot2">
                                        <a class="themeGallery" href="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID))?>">
                                            <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID))?>" alt="<?php short_title() ?>" /></a>
                                    </div> 
                                </div>
								<?php endwhile?>
                               
                            </div>  

                           

                        </div>
                        <div class="col-lg-4 col-md-4">
                            <!-- Category Title Start-->
				<?php if($sec_title ==1 ): ?>			
				<h2 class="itpolly_cat01"> <a href=""> <i class="las la-video"></i> <?php echo $itpolly['video_gallery']; ?> </a></h2>
				<?php endif; if($sec_title == 2 ): ?>       
                <h2 class="itpolly_cat02"> <a href=""> <i class="las la-video"></i> <?php echo $itpolly['video_gallery']; ?>  </a>  </h2>
				<?php endif; if($sec_title == 3 ): ?>
                <h2 class="itpolly_cat03"> <a href="">  <i class="las la-video"></i> <?php echo $itpolly['video_gallery']; ?> </a> </h2>
				<?php endif; if($sec_title == 4 ): ?>		
                <h2 class="itpolly_cat04"> <a href=""> <i class="las la-video"></i> <?php echo $itpolly['video_gallery']; ?>  </a>  </h2> 
				<?php endif; if($sec_title == 5 ): ?>    
                <h2 class="itpolly_cat05"> <a href=""><i class="las la-video"></i> <?php echo $itpolly['video_gallery']; ?>  </a>  <span class="catBar"></span> </h2>
				<?php endif; if($sec_title == 6 ): ?>
                <h2 class="itpolly_cat06"> <a href=""><i class="las la-video"></i> <?php echo $itpolly['video_gallery']; ?>  </a>   </h2>
				<?php endif; if($sec_title == 7 ): ?>
                <h2 class="itpolly_cat07"> <a href=""> <i class="las la-video"></i> <?php echo $itpolly['video_gallery']; ?> </a>  </h2>
				<?php endif; if($sec_title == 8 ): ?>  
                <h2 class="itpolly_cat08"> <a href=""> <i class="las la-video"></i> <?php echo $itpolly['video_gallery']; ?> </a> </h2>
				<?php endif; if($sec_title == 9 ): ?>    
                <h2 class="itpolly_cat09"> <span>  <a href=""> <i class="las la-video"></i> <?php echo $itpolly['video_gallery']; ?> </a>  </h2>
				<?php endif; if($sec_title == 10 ): ?>
                <h2 class="itpolly_cat10"> <a href=""> <i class="las la-video"></i> <?php echo $itpolly['video_gallery']; ?> </a> </h2>
				<?php endif; ?>	
				<!-- Category Title Close-->
                            

                            <div class="white-bg">
                                                   
                                <?php 
								$count_posts = wp_count_posts( 'video_gallery' )->publish;
								if ($count_posts == 0){
									get_template_part( 'template-parts/video' );
								}else{
								?>
								<?php 
								$how = $itpolly['how_post_video'];
									$gallary_active = new WP_Query(array(
										'post_type' => 'video_gallery',
										'posts_per_page' => $how,
										'offset'     =>0,
									));
									while($gallary_active->have_posts()) : $gallary_active->the_post(); ?>
									
								<div class="secFive-smallItem">
                                    <div class="secFive-smallImg">
                                        <?php $youtube_id = get_post_meta(get_the_ID(),'youtube_link_gallery', true); ?>
										<?php if(has_post_thumbnail()){ 
												the_post_thumbnail();}
												else{?>
												<img src="https://img.youtube.com/vi/<?php echo $youtube_id;?>/mqdefault.jpg" />
												<?php } ?>

                                        <a href="https://www.youtube.com/watch?v=<?php echo $youtube_id;?>" class="home-video-icon popup"><i class="las la-video"></i></a>

                                        <h5 class="secFive_title2">
                                            <a href="https://www.youtube.com/watch?v=<?php echo $youtube_id;?>" class="popup"> <?php the_title() ?> </a>
                                        </h5>
                                    </div>
                                </div>
								
								<?php endwhile; }?>
								
                                
                            

                            </div>

                        </div>
                    </div>
                </div>
            </section>