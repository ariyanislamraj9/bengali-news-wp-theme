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


 <div class="single-page3">
            <div class="<?php container_itpolly(); ?>">
			
			 <div class="single-add">
                        <?php dynamic_sidebar('single_top')?>
                    </div>
	<?php if(have_posts()) : ?>
					<?php while(have_posts()) : the_post(); ?>				
					
                <div class="single-home3">
                   <a href="<?php echo get_home_url(); ?>"> <i class="las la-home"></i> <?php echo $itpolly['home'];?> /</a>
                   <?php the_category(', '); ?>
                </div>
                <div class="row">
                    <div class="col-lg-7 col-md-6">
                        <div class="singlePage3-bg2">
						
						<?php $sub_title = get_post_meta(get_the_ID(),'sub_title', true);
								
								if($sub_title){ ?>
								 <h4 class="single-page-subTitle">
                                <?php echo $sub_title; ?>
                            </h4>
								<?php } ?>


                            <h1 class="single-page-title">
                                <?php the_title();?>
                            </h1>
                            <div class="repoter-wrpp">
                                <div class="row">
                                    <div class="col-lg-6 ">
									
									<?php if($itpolly['repo_athore'] ==1 ): ?>
									
									
                                        <div class="repoter-image3">
                                            <?php 
								$rimg = get_post_meta(get_the_ID(),'reporter_image', true);
								if($rimg){ ?>
								<img src="<?php echo $rimg;?>">
								<?php }
									else{?>
								<img src="<?php echo $itpolly['reporter_pic']['url']?>" width="100%" />
								<?php } ?>
                                        </div>
                                        <div class="repoter-name3">
												<?php $rname = get_post_meta(get_the_ID(),'reporter_name', true);
								if($rname){ echo get_post_meta(get_the_ID(),'reporter_name', true);  }
									else{ echo $itpolly['reporter']; } ?>
                                        </div>
										
										<?php endif; if($itpolly['repo_athore'] == 2 ): ?>
										
										 <div class="repoter-image3">
                                            <?php echo get_avatar(get_the_author_meta('ID'));?>
                                        </div>
                                        <div class="repoter-name3">
                                         <?php the_author_meta('first_name'); ?> <?php the_author_meta('last_name'); ?>
                                        </div>
										
										
										<?php endif; ?>	
            
                                    </div>
                                    <div class="col-lg-6 ">
									<?php if($itpolly['social_share'] ==1 ): ?>
									
                                        <div class="single-share3">
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
                                </div>
                            </div>

                            <div class="singlePage3-image">
                                <?php newsimage() ?>
								
								<?php 
										$caption = get_post(get_post_thumbnail_id())->post_excerpt;
										if($caption): ?>
										<h2 class="single-caption3">
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

                            <div class="single3-page-add">
                                 <?php dynamic_sidebar('single_middle')?>
                            </div>
    
                            <div class="singlePage3-dateils">
                                <?php the_content();?>
							

                            </div>
                            
                           <div class="singlePage3-tag">
                               <span> <?php echo $itpolly['tag_title'];?> </span>
                               <?php the_tags( '', ' ' ); ?>
                           </div>

                           <div class="single3-page-add">
                            <?php dynamic_sidebar('single_bottom')?>
                        </div>

						<?php if($itpolly['social_share'] ==1 ): ?>
						
                        <h3 class="single-social-title">
                            <?php echo $itpolly['social_title'];?>
                       </h3>
                            <div class="singlePage3-bottom">
                                <div class="single-share3">
                                    
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
                            <div class="author3">
                      
                                <div class="author-content3">
								<?php $author_id = get_the_author_meta('ID') ?>    
                                    <h6 class="author-caption3">
                                       <span> <?php echo $itpolly['author_info_title']; ?> </span>                         
                                    </h6>
    
                                    <div class="author-image3">
                                        <?php echo get_avatar(get_the_author_meta('ID'));?>
                                    </div>
    
                                    <div class="authorContent3">
                                        <h1 class="author-name3">
                                           <a href="<?php echo get_author_posts_url( $author_id ); ?>"> <?php the_author_meta('first_name'); ?> <?php the_author_meta('last_name'); ?> </a>   
                                        </h1>
                                        <div class="author-details">
                                           <?php the_author_meta('description'); ?>
                                        </div>
                                    </div>
                                   
    
                                  
                                    <div class="author-title3">
                                     <strong><a href="<?php echo get_author_posts_url( $author_id ); ?>"> <?php echo $itpolly['author_all_post']; ?> </a></strong>
                                    </div>
        
    
                                </div>
                            
    
                                
    
                            </div>
    
    
                           <!-- Author End -->
						   <?php endif; if($itpolly['author_details'] == 2 ):  endif; ?>
						   


						   


                        <div class="related3">
                            <div class="itpolly_cat">
                                <a href=""><?php echo $itpolly['more_news_category']?> </a>
                             </div>
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
							
							
								<div class="col-lg-6 col-md-6">
                                    <div class="related-wrpp3">                                   
                                        <div class="related-image3">
                                             <?php newsimage() ?>
											 
											 <?php 
								$video = get_post_meta(get_the_ID(),'video', true);
								if($video){ ?>
								<a href="<?php the_permalink()?>" class="related-icon3"><i class="la la-play"></i></a>
								<?php }	else{} ?>

                                            <h5 class="related-title">
                                                <a href="<?php the_permalink()?>"><?php the_title() ?> </a>
                                            </h5>
                                        </div>
                                      
                                    </div>
                                </div>
								
								 <?php
						}    }    } 
						$post = $orig_post;
						wp_reset_query(); ?>
								
                                
                            </div>
                            
                        </div>

                    </div>

                    <div class="col-lg-2 col-md-2 order-first">
                        <div class="fixed-sitebar" style="position: sticky; top: 0;">
                            
							<?php if(have_posts()) : ?>
					<?php while(have_posts()) : the_post(); ?>
					
							<div class="singlePage3-bg">
                                <div class="single-date3">
                                    <i class="lar la-clock"></i>   <?php echo $itpolly['update'];?> <?php newsdate_single();?>
                                </div>
								<?php if($itpolly['viewtab'] == 1 ): ?>
								
								<div class="single-date3">
                                    <i class="las la-eye"></i>  <?php if($itpolly['language'] ==1 ): ?>						
											<?php setPostViews(get_the_ID()); ?> <?php echo getPostViews(get_the_ID()); ?> 
									<?php endif; if($itpolly['language'] == 2 ): ?>
											<?php setPostViews(get_the_ID()); ?> <?php $view_bangla = getPostViews(get_the_ID()); echo bangla_number($view_bangla); ?> 
									<?php endif; ?>	
									<?php echo $itpolly['count'];?> 
                                </div>
                               
								<?php endif; if($itpolly['viewtab'] == 2 ): ?>
								<div class="single-date3">
                                    <i class="las la-eye"></i>   <?php if($itpolly['language'] ==1 ): ?>						
											<?php setPostViews(get_the_ID()); ?> <?php $orginal = getPostViews(get_the_ID()); $fake = $itpolly['count_from']; $total = $orginal + $fake; echo $total; ?> 
									<?php endif; if($itpolly['language'] == 2 ): ?>
											<?php setPostViews(get_the_ID()); ?> <?php $orginal = getPostViews(get_the_ID()); $fake = $itpolly['count_from']; $total = $orginal + $fake; echo bangla_number($total); ?>
									<?php endif; ?>	
									<?php echo $itpolly['count'];?>
                                </div>
								
								<?php endif; if($itpolly['viewtab'] == 3 ): ?>
								<div class="single-date3" style="display : none">
                                    <i class="las la-eye"></i> <?php setPostViews(get_the_ID()); ?> <?php echo getPostViews(get_the_ID()); ?> 
                                </div>
								<?php endif; ?>
                            </div>
							
								<?php endwhile; endif;?>


                            <div class="singlePage3-rightSitebar">
                                <?php dynamic_sidebar('single_sidebar_one')?>
                            </div>
               
                               
                    
                    

                         
                   
                        </div>

                    </div>

                    <div class="col-lg-3 col-md-4">
                        <div class="sitebar3-fixd" style="position: sticky; top: 0;">
             
                        <div class="singlePopular">                        
                            <ul class="nav nav-pills" id="singlePopular-tab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <div class="nav-link active"  data-bs-toggle="pill" data-bs-target="#singleTab_recent" role="tab" aria-controls="singleRecent" aria-selected="false"> <?php echo $itpolly['last']; ?> </div>
                                </li>
                                
    
                                <li class="nav-item" role="presentation">
                                    <div class="nav-link" data-bs-toggle="pill" data-bs-target="#singleTab_popular" role="tab" aria-controls="singlePopulars" aria-selected="false">  <?php echo $itpolly['popular']; ?>  </div>
                                </li>
                                  
    
                            
    
                            </ul>
                        </div>

                        <div class="tab-content" id="pills-tabContentSingle">
                            <div class="tab-pane active show  fade" id="singleTab_recent" role="tabpanel" aria-labelledby="singleRecent">                                                                                                   
                                <div class="singleTab-sibearNews">
                                 
								 <?php
									$x=1;
									$cat_how = $itpolly['single_last_count'];
									$themes_bazar = new WP_Query(array(
									'post_type' => 'post',
									'posts_per_page' => $cat_how,
									'offset' => 0,
								));
								while ($themes_bazar->have_posts()) : $themes_bazar->the_post(); ?>
								<?php $xx=$x++ ?>
								
								 <div class="singleTab-image singleTab-border">
                                        <?php newsimage() ?>
										<?php 
								$video = get_post_meta(get_the_ID(),'video', true);
								if($video){ ?>
								<a href="<?php the_permalink()?>" class="singleTab-icon2"><i class="la la-play"></i></a>
								<?php }	else{} ?>

                                        <h4 class="singleTab_hadding"><a href="<?php the_permalink()?>"><?php the_title() ?> </a>	</h4> 
                                    </div>
									
									<?php endwhile?>

                                 

                                    
                                 
                                </div>
                             
                         
                               
                                                
                            </div>

                                
                            <div class="tab-pane fade" id="singleTab_popular" role="tabpanel" aria-labelledby="singlePopulars">                                            
                                <div class="singleTab-sibearNews">
                                   
								   <?php
												$x=1;
												$cat_how = $itpolly['single_popular_count'];
												$month = date('m');
										$year = date('Y');
										query_posts('meta_key=post_views_count&posts_per_page=' . $cat_how .'&orderby=meta_value_num&order=DESC&year=' . $year . '&monthnum=' . $month);
										while (have_posts()): the_post(); ?>
										<?php $xx=$x++ ?>
										
										
								    <div class="singleTab-image singleTab-border">
                                        <?php newsimage() ?>
										<?php 
								$video = get_post_meta(get_the_ID(),'video', true);
								if($video){ ?>
								<a href="<?php the_permalink()?>" class="singleTab-icon2"><i class="la la-play"></i></a>
								<?php }	else{} ?>

                                        <h4 class="singleTab_hadding"><a href="<?php the_permalink()?>"><?php the_title() ?> </a>	</h4> 
                                    </div>

                                    <?php
											endwhile;
											wp_reset_query();
											?>
											
                                    
                                </div>
                          
                              

                                
                            </div>

                        </div>
                        
                        
                        <div class="siteber-add2">
                            <?php dynamic_sidebar('single_sidebar_two')?>
                        </div>    
                      
                        </div>
                    </div>
                </div>
            </div>
        </div>