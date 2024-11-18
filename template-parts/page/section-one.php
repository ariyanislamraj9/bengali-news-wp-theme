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


<section class="itpolly_section_one">
           <div class="<?php container_itpolly(); ?>">
                <div class="row">
                    <div class="col-lg-9 col-md-8">
                        <div class="row">
                            <div class="col-lg-7 col-md-7">
                                <div class="itpolly_led_active owl-carousel">
                                    <?php
								$cat = $itpolly['slider_news'];
								if($cat == NULL){ $cat = 1; }else{ $cat = $cat; }
								$cat_how = $itpolly['how_post_slider'];
								$category_name = get_the_category_by_id($cat);
								$category_name_link = get_category_link($cat); 
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
								
									<div class="secOne_newsContent">
                                        <div class="sec-one-image">
                                                <?php newsimage() ?>
                        
                                            <h6 class="sec-small-cat">
                                                <a href=""> <?php newsdate();?>	 </a>
                                            </h6>
											
											<?php 
								$video = get_post_meta(get_the_ID(),'video', true);
								if($video){ ?>
								<a href="<?php the_permalink()?>" class="video-icon1"><i class="la la-play"></i></a>
								<?php }	else{} ?>

                                                <h1 class="sec-one-title">
                                                <a href="<?php the_permalink()?>"><?php short_title() ?> </a>
                                                </h1>
                                        </div>
                                    </div>
									<?php endwhile?>

                                    

                                </div>


                                <!-- section one sub content -->
                            <div class="sec-one-item">
                                <div class="row">
                                    
									<?php
								$cat = $itpolly['cat_lead'];
								if($cat == NULL){ $cat = 1; }else{ $cat = $cat; }
								//$cat_how = $itpolly['how_post_one'];
								$category_name = get_the_category_by_id($cat);
								$category_name_link = get_category_link($cat); 
							?>
							
							<?php
									$themes_bazar = new WP_Query(array(
									'post_type' => 'post',
									'posts_per_page' =>2,
									//'posts_per_page' => $cat_how,
									//'posts_per_page' => $cat_how - 1,
									'offset' => 0,
									'cat' => $cat,
								));
								while ($themes_bazar->have_posts()) : $themes_bazar->the_post(); ?>
								
									<div class="itpolly-2 itpolly-m2">
                                        <div class="sec-one-wrpp">
                                            <div class="secOne-news">
                                                <div class="secOne-sub-image">
                                                    <?php newsimage() ?>
													
													<?php 
								$video = get_post_meta(get_the_ID(),'video', true);
								if($video){ ?>
								<a href="<?php the_permalink()?>" class="video-icon1"><i class="la la-play"></i></a>
								<?php }	else{} ?>
        
                                                </div>
                                                <h4 class="secOne-title2">
                                                    <a href="<?php the_permalink()?>"><?php short_title() ?> </a>
                                                </h4>
                                            </div>
        
                                            <h6 class="cat-meta">
                                                <a href=""> <i class="lar la-newspaper"></i> <?php newsdate();?>	 </a>
                                            </h6>
        
                                        </div>
                                    </div>
									<?php endwhile?>

                                    
                                </div>
                                

                               



                            </div>

                           

                            </div>
                            <div class="col-lg-5 col-md-5">
                                
									<?php
									$themes_bazar = new WP_Query(array(
									'post_type' => 'post',
									'posts_per_page' =>5,
									//'posts_per_page' => $cat_how,
									//'posts_per_page' => $cat_how - 1,
									'offset' => 2,
									'cat' => $cat,
								));
								while ($themes_bazar->have_posts()) : $themes_bazar->the_post(); ?>
								
								<div class="secOne-smallItem">
                                    <div class="secOne-smallImg">
                                       <?php newsimage() ?>

                                        
										
										<?php 
								$video = get_post_meta(get_the_ID(),'video', true);
								if($video){ ?>
								<a href="<?php the_permalink()?>" class="small-icon1"><i class="la la-play"></i></a>
								<?php }	else{} ?>
								

                                        <h5 class="secOne_smallTitle">
                                            <a href="<?php the_permalink()?>"><?php short_title() ?> </a>
                                        </h5>
                                    </div>
                                </div>
								
								<?php endwhile?>
                                

                                
                            </div>
                        </div>

                        <div class="sec-one-item2">
                            <div class="row">
                                
								<?php
								$cat = $itpolly['exclusive'];
								if($cat == NULL){ $cat = 1; }else{ $cat = $cat; }
								$cat_how = $itpolly['how_post_exclusive'];
								$category_name = get_the_category_by_id($cat);
								$category_name_link = get_category_link($cat); 
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
								
								<div class="itpolly-3 itpolly-m2">
                                    <div class="sec-one-wrpp2">
                                        <div class="secOne-news">
                                            <div class="secOne-image2">
                                                <?php newsimage() ?>
												
												<?php 
								$video = get_post_meta(get_the_ID(),'video', true);
								if($video){ ?>
								<a href="<?php the_permalink()?>" class="video-icon1"><i class="la la-play"></i></a>
								<?php }	else{} ?>
            
                                            </div>
                                            <h4 class="secOne-title2">
                                                <a href="<?php the_permalink()?>"><?php short_title() ?> </a>
                                            </h4>
                                        </div>
            
                                        <div class="cat-meta">
                                            <a href=""> <i class="lar la-newspaper"></i> <?php newsdate();?>	 </a>
                                        </div>
            
                                    </div>
            
                                </div>
                               <?php endwhile?>
                              

                            </div>
                           
                          
    
                        </div>
                                  
                    </div>
					
					<div class="col-lg-3 col-md-4"> 

                        <div class="live-item">
                            <div class="live_title">
                                <a href=""> <?php echo $itpolly['live_tv']; ?> </a>
                                <div class="itpolly"></div>
                            </div>
                            
							<?php 
						$themes_bazar = new WP_Query(array(
						'post_type' => 'live',
						'posts_per_page' => 1, ));
						while($themes_bazar->have_posts()) : $themes_bazar->the_post(); ?>
						
							<div class="popup-wrpp">
                                <div class="live_image">
                                    <?php if(has_post_thumbnail()){ 
										the_post_thumbnail();}
										else{?>
										<img src="<?php echo get_template_directory_uri(); ?>/assets/images/live.jpg" width="100%" />
										<?php } ?>
										
                                    <div data-mfp-src="#mymodal" class="live-icon modal-live" > <i class="las la-play"></i> </div>
                                </div>

                                <div class="live-popup"> <!-- Quick view Start-->
                                    <div id="mymodal" class="mfp-hide" role="dialog" aria-labelledby="modal-titles" aria-describedby="modal-contents">
                                        <div id="modal-contents">
                                          
                                      <?php $live_type = get_post_meta(get_the_ID(),'select_live_option', true); ?>

<?php if($live_type == 'youtube_code') : ?>

<?php $youtube = get_post_meta(get_the_ID(),'youtube_link', true); ?>
 <div class="embed-responsive embed-responsive-16by9 embed-responsive-item">
<iframe class="" src="https://www.youtube.com/embed/<?php echo $youtube; ?>?autoplay=0&amp;loop=0&amp;controls=1&amp;amp&amp;rel=0;&amp;showinfo=0; frameborder="0" allowfullscreen="allowfullscreen" width="100%" height="400px"></iframe>
</div>
<?php endif; ?> 
<?php if($live_type == 'facebook_link') : ?>
<?php $facebook_link = get_post_meta(get_the_ID(),'facebook_link', true); ?>

<!-- Load Facebook SDK for JavaScript -->
  <div id="fb-root"></div>
  <script>
    window.fbAsyncInit = function() {
      FB.init({
        appId      : '{your-app-id}',
        xfbml      : true,
        version    : 'v2.5'
      });

      // Get Embedded Video Player API Instance
      var my_video_player;
      FB.Event.subscribe('xfbml.ready', function(msg) {
        if (msg.type === 'video') {
          my_video_player = msg.instance;
          my_video_player.unmute();
        }
      });
    };

    (function(d, s, id){
       var js, fjs = d.getElementsByTagName(s)[0];
       if (d.getElementById(id)) {return;}
       js = d.createElement(s); js.id = id;
       js.src = "//connect.facebook.net/en_US/sdk.js";
       fjs.parentNode.insertBefore(js, fjs);
     }(document, 'script', 'facebook-jssdk'));
  </script>

  <!-- Your embedded video player code -->
  <div  
    class="fb-video" 
    data-href="<?php echo $facebook_link;?>" 
    data-width="auto" 
    data-autoplay="true"
    data-allowfullscreen="false"
	data-controls="false"></div>
<?php endif; ?> 
<?php if($live_type == 'own_server') : ?>
	<?php $server_link = get_post_meta(get_the_ID(),'server_link', true); ?>
<video width="100%" height="auto" controls loop autoplay>
  <source src="<?php echo $server_link;?>" type="video/mp4">
</video>
<?php endif; ?> 
<?php if($live_type == 'iframe') : ?>
<?php $ifame_link = get_post_meta(get_the_ID(),'ifame_code', true); ?>
<?php echo $ifame_link; ?>
<?php endif; ?> 
                                        
                                        </div>
                                    </div>
                                </div>  <!-- Quick View End-->
                            </div>
							
							<?php endwhile; ?>

                        </div>

                    <?php if($itpolly['archive_calender'] == 1 ): ?>
                        <div class="itpolly_widget">

                          <h3 style="margin-top:5px"> <?php echo $itpolly['calender_title']?> </h3>

                         </div>
					
                    <form class="wordpress-date" action="<?php echo home_url( '/' ); ?>" method="post">                          
                            <input type="text" id="wordpress" placeholder="<?php echo $itpolly['select_date']?>" autocomplete="off" value="<?php the_search_query(); ?>" name="m" required="" >
                            <input type="submit" value="<?php echo $itpolly['date_search']?>">            
                    </form>
					<?php endif; ?><?php if($itpolly['archive_calender'] == 2 ): ?>
								<?php endif; ?>

                    <div class="recentPopular">
                        <ul class="nav nav-pills" id="recentPopular-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <div class="nav-link active" id="recent-tab" data-bs-toggle="pill" data-bs-target="#recent" role="tab" aria-controls="recent" aria-selected="false"> <?php echo $itpolly['last']; ?>  </div>
                            </li>
                            

                            <li class="nav-item" role="presentation">
                                <div class="nav-link" id="popular-tab" data-bs-toggle="pill" data-bs-target="#popular" role="tab" aria-controls="popular" aria-selected="false"> <?php echo $itpolly['popular']; ?> </div>
                            </li>
                                                                
                        </ul>
                    </div>

                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane active show  fade" id="recent" role="tabpanel"     aria-labelledby="recent">
                              <div class="news-titletab">
                                  
									
							<?php
							$cat_how = $itpolly['lastpost'];
									$themes_bazar = new WP_Query(array(
									'post_type' => 'post',
									//'posts_per_page' =>1,
									'posts_per_page' => $cat_how,
									//'posts_per_page' => $cat_how - 1,
									'offset' => 0,
								));
								while ($themes_bazar->have_posts()) : $themes_bazar->the_post(); ?>
								
								
								  <div class="tab-image tab-border">
                                    <?php newsimage() ?>
									
									<?php 
								$video = get_post_meta(get_the_ID(),'video', true);
								if($video){ ?>
								<a href="<?php the_permalink()?>" class="tab-icon"><i class="la la-play"></i></a>
								<?php }	else{} ?>
								
                                      <h4 class="tab_hadding"><a href="<?php the_permalink()?>"><?php short_title() ?> </a></h4> 
                                      
                                  </div>
								  
								  <?php endwhile?>
  
                              
                                     
                                    
                              </div>
                              
                        </div>
                          
                              
                          <div class="tab-pane fade" id="popular" role="tabpanel" aria-labelledby="popular">  
                              <div class="news-titletab">
                                  
								  <?php
												
												$cat_how = $itpolly['popularpost'];
												$month = date('m');
												$year = date('Y');
												query_posts('meta_key=post_views_count&posts_per_page=' . $cat_how .'&orderby=meta_value_num&order=DESC&year=' . $year . '&monthnum=' . $month);
												while (have_posts()): the_post(); ?>
												
								  <div class="tab-image tab-border">
                                    <?php newsimage() ?>
									
									<?php 
								$video = get_post_meta(get_the_ID(),'video', true);
								if($video){ ?>
								<a href="<?php the_permalink()?>" class="tab-icon"><i class="la la-play"></i></a>
								<?php }	else{} ?>
  
                                      <h4 class="tab_hadding"><a href="<?php the_permalink()?>"><?php short_title() ?> </a></h4> 
                                    
                                  </div>
								  
								  <?php
											endwhile;
											wp_reset_query();
											?>
   
                                     
                                    
                              </div>
                              
                          </div>
  
                       
                        
					</div>

                    <?php if($itpolly['facebook'] == 1 ): ?>
                        <div class="itpolly_widget">

                           <h3 style="margin-top:5px"> <?php echo $itpolly['facebook_title']; ?> </h3>

                        </div>

                        <div class="facebook-content">

						<?php $timeline = $itpolly['timeline'];
						if($timeline == 1){
							$ftimeline = 'timeline';
						}elseif($timeline == 0){
							$ftimeline = 'time';
						}
						?>
                            <iframe
              src="https://www.facebook.com/plugins/page.php?href=<?php echo $itpolly['facebook_link'];?>&tabs=<?php echo $ftimeline;?>&width=<?php echo $itpolly['facebook_width'];?>&height=<?php echo $itpolly['facebook_height'];?>&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=334182264340964"
              width="<?php echo $itpolly['facebook_width'];?>" height="<?php echo $itpolly['facebook_height'];?>" style="border:none;overflow:hidden" scrolling="no" frameborder="0"
              allowfullscreen="true"
              allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>

                        </div>

<?php endif; if($itpolly['facebook'] == 2 ):  endif; ?>	




<?php if($itpolly['twitter'] == 1 ): ?>
                        <div class="itpolly_widget">

                           <h3 style="margin-top:5px"> <?php echo $itpolly['twitter_title']; ?> </h3>

                        </div>

                        <div class="facebook-content">

						<?php if($itpolly['twitter_theme'] ==1 ): 
						$twitter_theme = "light";
						endif; if($itpolly['twitter_theme'] == 0 ): 
						$twitter_theme = "dark";
						endif; 
						?>	
						<a class="twitter-timeline" data-width="<?php echo $itpolly['twitter_width'];?>" data-height="<?php echo $itpolly['twitter_height'];?>" data-dnt="true" data-theme="<?php echo $twitter_theme;?>" href="<?php echo $itpolly['twitter_link'];?>"> </a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script> 

                        </div>

<?php endif; if($itpolly['twitter'] == 2 ):  endif; ?>	



		<?php dynamic_sidebar('sidebar_widget')?>
					
                    
                </div>
            </div>
            </div>
        </section> 	