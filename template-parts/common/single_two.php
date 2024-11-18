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


<div class="single-page2" >
       
            <div class="<?php container_itpolly(); ?>">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="single-page2-topAdd">
                            <?php dynamic_sidebar('single_top')?>
                        </div>
                      
                    </div>
                </div>
                <div class="row">
                    
                    <div class="col-lg-7 col-md-9">
					<?php if(have_posts()) : ?>
					<?php while(have_posts()) : the_post(); ?>
					
                      <div class="single-home2">
                           <div class="single-white">
                               <div class="single-home-cat2">
                                   <ul>
                                       <li><a href="<?php echo get_home_url(); ?>"> <i class="las la-home"></i> <?php echo $itpolly['home'];?> </a> <i class="las la-angle-double-right"></i></li>
                                       <li><?php the_category(', '); ?> <i class="las la-angle-double-right"></i>  </li>
                                       <li><a href="<?php the_permalink()?>"> <?php the_title();?> </a> </li>
                                   </ul>
                               </div>
                            </div>
                        </div>
                        
                        <div class="single-white2 ">
						<?php $sub_title = get_post_meta(get_the_ID(),'sub_title', true);
								
								if($sub_title){ ?>
								<h5 class="single-page-subTitle"> 
                                <?php echo $sub_title; ?>
                            </h5>
								<?php } ?>
								

                            <h1 class="single-page-title"> 
                                <?php the_title();?>
                            </h1>
                            <div class="update-time">
                                <ul>
                                    
									<?php if($itpolly['repo_athore'] ==1 ): ?>

									<li>  <a href=""> 
									<?php 
								$rimg = get_post_meta(get_the_ID(),'reporter_image', true);
								if($rimg){ ?>
								<img src="<?php echo $rimg;?>">
								<?php }
									else{?>
								<img src="<?php echo $itpolly['reporter_pic']['url']?>" width="100%" />
								<?php } ?>
								<?php $rname = get_post_meta(get_the_ID(),'reporter_name', true);
								if($rname){ echo get_post_meta(get_the_ID(),'reporter_name', true);  }
									else{ echo $itpolly['reporter']; } ?>
								 </a> </li>

									<?php endif; if($itpolly['repo_athore'] == 2 ): ?>
									<li>  <?php $author_id = get_the_author_meta('ID') ?><a href="<?php echo get_author_posts_url( $author_id ); ?>"><?php echo get_avatar(get_the_author_meta('ID'));?> <?php the_author_meta('first_name'); ?> <?php the_author_meta('last_name'); ?> </a> </li>
									<?php endif; ?>	
									
									
								 
                                   
								   
								   <li> <i class="lar la-clock"></i> 
								   <?php echo $itpolly['update'];?> <?php newsdate_single();?>										   
                                   </li>
								   


							<!-- Tab PHP Code Start --> 
								   <?php if($itpolly['viewtab'] == 1 ): ?>						
									<li> <i class="las la-eye"></i> 								
									<?php if($itpolly['language'] ==1 ): ?>						
											<?php setPostViews(get_the_ID()); ?> <?php echo getPostViews(get_the_ID()); ?> 
									<?php endif; if($itpolly['language'] == 2 ): ?>
											<?php setPostViews(get_the_ID()); ?> <?php $view_bangla = getPostViews(get_the_ID()); echo bangla_number($view_bangla); ?> 
									<?php endif; ?>	
									<?php echo $itpolly['count'];?>     </li>
									<?php endif; if($itpolly['viewtab'] == 2 ): ?>
									<li> <i class="las la-eye"></i> 
										<?php if($itpolly['language'] ==1 ): ?>						
											<?php setPostViews(get_the_ID()); ?> <?php $orginal = getPostViews(get_the_ID()); $fake = $itpolly['count_from']; $total = $orginal + $fake; echo $total; ?> 
									<?php endif; if($itpolly['language'] == 2 ): ?>
											<?php setPostViews(get_the_ID()); ?> <?php $orginal = getPostViews(get_the_ID()); $fake = $itpolly['count_from']; $total = $orginal + $fake; echo bangla_number($total); ?>
									<?php endif; ?>	
									<?php echo $itpolly['count'];?>     </li>
									<?php endif; if($itpolly['viewtab'] == 3 ): ?>
										<li style="display : none"> <i class="las la-eye"></i>  <?php setPostViews(get_the_ID()); ?> <?php echo getPostViews(get_the_ID()); ?>   </li>
									<?php endif; ?>	
							<!-- Tab PHP Code Close --> 
                                </ul>
                             
                            </div>
                            <div class="single-image2">
                                <?php newsimage() ?>
								
								<?php 
										$caption = get_post(get_post_thumbnail_id())->post_excerpt;
										if($caption): ?>
										<h2 class="singel2-caption">
											<?php echo $caption ?> 
										</h2>
									<?php endif; ?> 



                            </div>
			

<?php $audio = get_post_meta(get_the_ID(),'audio_link', true);
								
								if($audio){ ?>
								<audio controls>
  <source src="<?php echo $audio; ?>" type="audio/mpeg">
</audio>
								<?php } ?>

								
							

                            <div class="single-page-add2">
                                <?php dynamic_sidebar('single_middle')?>
                            </div>
                           
                           <div class="single-content2">
                              <?php the_content();?>
                           </div>
                         
							
							
                            <div class="singlePage2-tag">
                                <span> <?php echo $itpolly['tag_title'];?>  </span>
                                <?php the_tags( '', ' ' ); ?>
                            </div>
							

                            <div class="single-page-add2">
                                <?php dynamic_sidebar('single_bottom')?>
                            </div>
                       
                           
						   <?php if($itpolly['social_share'] ==1 ): ?>						

						   <div class="single-social2">
                               
                             <?php
$social = $itpolly['socialsingle'];
if($social == 0){
	get_template_part( 'template-parts/social-share/facebook', 'facebook' );
	get_template_part( 'template-parts/social-share/twitter', 'twitter' );
	get_template_part( 'template-parts/social-share/linkedin', 'linkedin' );
	get_template_part( 'template-parts/social-share/instagram', 'instagram' ); 
	get_template_part( 'template-parts/social-share/digg', 'digg' ); 
get_template_part( 'template-parts/social-share/pinterest', 'pinterest' ); 	
get_template_part( 'template-parts/social-share/print', 'print' ); 	
};

$layout = $itpolly['socialsingle']['Show'];
if ($layout): foreach ( $layout as $key => $value ) {
    switch($key) {
        case 'facebook': get_template_part( 'template-parts/social-share/facebook', 'facebook' );
        break;

        case 'twitter': get_template_part( 'template-parts/social-share/twitter', 'twitter' );
        break;

        case 'linkedin': get_template_part( 'template-parts/social-share/linkedin', 'linkedin' );
        break;
        
        case 'instagram': get_template_part( 'template-parts/social-share/instagram', 'instagram' );    
        break; 

		case 'digg': get_template_part( 'template-parts/social-share/digg', 'digg' );    
        break;  
		
		case 'pinterest': get_template_part( 'template-parts/social-share/pinterest', 'pinterest' );    
        break; 
		
		case 'print': get_template_part( 'template-parts/social-share/print', 'print' );    
        break;  
    }
}
endif;
?>
		</div>
		
		<?php endif; if($itpolly['social_share'] == 2 ): endif; ?>
						   
						   
						   
                       
                       
                        </div>
						
						<?php endwhile; endif;?>
						
						
						
						
						<?php if($itpolly['comment'] ==1 ): ?>						
<?php comments_template(); ?>
<?php endif; if($itpolly['comment'] == 2 ): ?>

<?php

global $wp;
$homelink = home_url( $wp->request );
$appid = $itpolly['facebook_app_id'];
?>

<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v12.0&appId=<?php echo $appid;?>&autoLogAppEvents=1" nonce="RN3PDerK"></script>

<div class="fb-comments" data-href="<?php echo $homelink;?>" data-width="400" data-numposts="5"></div>

<?php endif; if($itpolly['comment'] == 3 ):  endif; ?>


                        
<?php if($itpolly['author_details'] ==1 ): ?>						

	

                          <!-- Author start -->
                        <div class="author">
                      <?php $author_id = get_the_author_meta('ID') ?>
                            <div class="author-content">

                                <h6 class="author-caption">
                                   <span> <?php echo $itpolly['author_info_title']; ?> </span>                         
                                </h6>

                                <div class="author-image">
                                    <?php echo get_avatar(get_the_author_meta('ID'));?>
                                </div>

                                <h1 class="author-name">
                                    <a href="<?php echo get_author_posts_url( $author_id ); ?>"> <?php the_author_meta('first_name'); ?> <?php the_author_meta('last_name'); ?> </a>   
                                </h1>
								<?php the_author_meta('description'); ?>

                                <div class="author-title">
                                 <strong>
										 <a href="<?php echo get_author_posts_url( $author_id ); ?>"> <?php echo $itpolly['author_all_post']; ?> </a></strong>
                                </div>
    

                            </div>
                        </div>
						


                       <!-- Author End -->
<?php endif; if($itpolly['author_details'] == 2 ):  endif; ?>	




                <!--======== Related news start ========-->
                        <div class="related-section">
                           <div class="related-new-cat">
                                       <span><a href=""> <?php echo $itpolly['more_news_category']?></a></span>
                                   </div>
                            <div class="single-white">
                                <div class="related-news-content2"> <!--Related News start-->
                                   <div class="row">
                                       
									   <?php $orig_post = $post;
							global $post;
							$categories = get_the_category($post->ID);
							if ($categories) {
							$category_ids = array();
							foreach($categories as $individual_category) $category_ids[] = $individual_category->term_id;

							$args=array(
							'category__in' => $category_ids,
							'post__not_in' => array($post->ID),
							'posts_per_page'=> 6, // Number of related posts that will be shown.
							
							);

							$my_query = new wp_query( $args );
							if( $my_query->have_posts() ) {

							while( $my_query->have_posts() ) {
							$my_query->the_post(); ?>
							
							
									   <div class="itpolly-3 itpolly-m2">
                                            <div class="related-news-wrpp2"> <!--Related Wrpp start-->
                                                <div class="relatedImage2">
                                                    <?php newsimage() ?>
											
											<?php 
								$video = get_post_meta(get_the_ID(),'video', true);
								if($video){ ?>
								<a href="<?php the_permalink()?>" class="single2-rIcon"><i class="la la-play"></i></a>
								<?php }	else{} ?>
								
                                                </div>                                        
                                                <h4 class="related-title"><a href="<?php the_permalink()?>"><?php the_title() ?> </a></h4> 
                                                
                                            </div> <!--Related Wrpp End-->
                                       </div>
									   
									   <?php
						}    }    } 
						$post = $orig_post;
						wp_reset_query(); ?>
                                       
                                      
                                   </div>
                                    
                             
                                    
                                    
                                    
                                </div>
                            </div>
                        </div>
                        

                    </div>
                    <div class="col-lg-2 col-md-3 order-first">
                        <div class="fixrd-sitber" style="position: sticky; top: 0;">
                            <div class="single-white ">
                                <div class="latest-title">
                                    <i class="las la-map-marker-alt"></i>  <?php echo $itpolly['popular']; ?>
                                </div>
                                <div class="single-itemContent">
                                    <div class="row">
                                        <?php
										$cat_how = $itpolly['single_popular_count'];
										$month = date('m');
										$year = date('Y');
										query_posts('meta_key=post_views_count&posts_per_page=' . $cat_how .'&orderby=meta_value_num&order=DESC&year=' . $year . '&monthnum=' . $month);
										while (have_posts()): the_post(); ?>
									
										
										<div class="custom-col-12">
                                            <div class="single-drack-bg">
                                                <div class="single-left">
                                                    <?php newsimage() ?>
											
											<?php 
								$video = get_post_meta(get_the_ID(),'video', true);
								if($video){ ?>
								<a href="<?php the_permalink()?>" class="single2-siteIcon"><i class="la la-play"></i></a>
								<?php }	else{} ?>

                                                </div>
                                                <h4 class="leftSitbe-title"><a href="<?php the_permalink()?>"><?php the_title() ?> </a></h4> 
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
                    <div class="col-lg-3 col-md-8">
                        <div class="fixrd-sitber" style="position: sticky; top: 0;">
                            <div class="seingle2-sitebarAdd">
                                <?php dynamic_sidebar('single_sidebar_one')?>
                            </div>
                            <div class="single-white">
                            <div class="popular-cat">
                                <?php echo $itpolly['last']; ?>
                            </div>
                                
								<?php
									$themes_bazar = new WP_Query(array(
									'post_type' => 'post',
									'posts_per_page' =>1,
									'offset' => 0,
								));
								while ($themes_bazar->have_posts()) : $themes_bazar->the_post(); ?>
								
								<div class="rightSitbear-image">
                                    <?php newsimage() ?>
											
											<?php 
								$video = get_post_meta(get_the_ID(),'video', true);
								if($video){ ?>
								<a href="<?php the_permalink()?>" class="single2-siteIcon"><i class="la la-play"></i></a>
								<?php }	else{} ?>
								
                                </div>
                                <h4 class="rSitebar-title"><a href="<?php the_permalink()?>"><?php the_title() ?> </a></h4> 
                                <?php endwhile?>
								
                                <div class="popular-content"> <!--Popular Content-->
                                    <div class="row">
                                        
										<?php
										$cat_how = $itpolly['single_last_count'];
									$themes_bazar = new WP_Query(array(
									'post_type' => 'post',
									'posts_per_page' => $cat_how - 1,
									'offset' => 1,
								));
								while ($themes_bazar->have_posts()) : $themes_bazar->the_post(); ?>
								
										<div class="custom-col2">
                                            <div class="popular-wrpp"> <!--Popular Wpp Start-->
                                                <div class="rightSitbear-image2">
                                                    <?php newsimage() ?>
											
											<?php 
								$video = get_post_meta(get_the_ID(),'video', true);
								if($video){ ?>
								<a href="<?php the_permalink()?>" class="single2-siteIcon"><i class="la la-play"></i></a>
								<?php }	else{} ?>
								
                                                </div>
                                                <h4 class="rSitebar-title2"><a href="<?php the_permalink()?>"><?php the_title() ?> </a></h4> 
                                            </div> <!--Popular Wpp End-->
                                            
                                        </div>
										<?php endwhile?>



                                    </div>

                                    
                               
                                
                                </div>
                                
                                
                            </div>
                            
                            <div class="seingle2-sitebarAdd2">
                                <?php dynamic_sidebar('single_sidebar_two')?>
                            </div>

                        </div>
                     
                        
                    </div>
                </div>
            </div>

 
        </div>