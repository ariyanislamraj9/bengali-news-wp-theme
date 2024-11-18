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



<section class="single-page">
            <div class="<?php container_itpolly(); ?>">
                <div class="row">
                    <div class="col-lg-8 col-md-8">
                    <!--========= Single Add Start ===========-->
                    <div class="single-add">
                        <?php dynamic_sidebar('single_top')?>
                    </div>
                    <!--========= Single Add End ===========-->
                       
					   <?php if(have_posts()) : ?>
					<?php while(have_posts()) : the_post(); ?>
					
                        <div class="single-cat-info">
                            <div class="single-home">
                                <i class="la la-home"> </i><a href="<?php echo get_home_url(); ?>"> <?php echo $itpolly['home'];?> </a>
                            </div>

                            <div class="single-cats">
                                <i class="la la-bars"></i> <?php the_category(', '); ?>
                            </div>
                        </div>
                
				<?php $sub_title = get_post_meta(get_the_ID(),'sub_title', true);
								
								if($sub_title){ ?>
								 <h5 class="single-page-subTitle"> 
                                <?php echo $sub_title; ?>
                            </h5>
								<?php } ?>
								

                        <h1 class="single-page-title">
                           <?php the_title();?>
                        </h1>
                
                        <div class="row g-2">
                            <div class="col-lg-1 col-md-2 ">
							<?php if($itpolly['repo_athore'] ==1 ): ?>
							<?php endif; if($itpolly['repo_athore'] == 2 ): ?>
							<?php endif; ?>	
                                <div class="reportar-image">
                                    <?php if($itpolly['repo_athore'] ==1 ): ?>
									<?php 
								$rimg = get_post_meta(get_the_ID(),'reporter_image', true);
								if($rimg){ ?>
								<img src="<?php echo $rimg;?>">
								<?php }
									else{?>
								<img src="<?php echo $itpolly['reporter_pic']['url']?>" width="100%" />
								<?php } ?>
								
							<?php endif; if($itpolly['repo_athore'] == 2 ): ?>
							<?php echo get_avatar(get_the_author_meta('ID'));?>
							<?php endif; ?>	
							

                                </div>
                            </div>
                            <div class="col-lg-11 col-md-10">
                                <div class="reportar-title">
                              <?php if($itpolly['repo_athore'] ==1 ): ?>
							  <?php $rname = get_post_meta(get_the_ID(),'reporter_name', true);
								if($rname){ echo get_post_meta(get_the_ID(),'reporter_name', true);  }
									else{ echo $itpolly['reporter']; } ?>
									
							<?php endif; if($itpolly['repo_athore'] == 2 ): ?>
							<?php the_author_meta('first_name'); ?> <?php the_author_meta('last_name'); ?>
							
							<?php endif; ?>	
                                </div>
                                <div class="viwe-count">
                                    <ul>
                                        <li><i class="la la-clock-o"></i>  <?php echo $itpolly['update'];?> <?php newsdate_single();?>	  </li>
                                        <?php if($itpolly['viewtab'] == 1 ): ?>	 
										<li> / <i class="la la-eye"></i>  
										<?php if($itpolly['language'] ==1 ): ?>						
											<?php setPostViews(get_the_ID()); ?> <?php echo getPostViews(get_the_ID()); ?> 
									<?php endif; if($itpolly['language'] == 2 ): ?>
											<?php setPostViews(get_the_ID()); ?> <?php $view_bangla = getPostViews(get_the_ID()); echo bangla_number($view_bangla); ?> 
									<?php endif; ?>	
									<?php echo $itpolly['count'];?>     
										
										</li>
										<?php endif; if($itpolly['viewtab'] == 2 ): ?>
										<li> / <i class="la la-eye"></i> 
										<?php if($itpolly['language'] ==1 ): ?>						
											<?php setPostViews(get_the_ID()); ?> <?php $orginal = getPostViews(get_the_ID()); $fake = $itpolly['count_from']; $total = $orginal + $fake; echo $total; ?> 
									<?php endif; if($itpolly['language'] == 2 ): ?>
											<?php setPostViews(get_the_ID()); ?> <?php $orginal = getPostViews(get_the_ID()); $fake = $itpolly['count_from']; $total = $orginal + $fake; echo bangla_number($total); ?>
									<?php endif; ?>	
									<?php echo $itpolly['count'];?> 
										</li>
										<?php endif; if($itpolly['viewtab'] == 3 ): ?>
										<li style="display : none"> / <i class="la la-eye"></i>  <?php setPostViews(get_the_ID()); ?> <?php echo getPostViews(get_the_ID()); ?> </li>
										<?php endif; ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                    <!--========== single image & content ==========-->
                        
                        <div class="single-image">
                            <?php newsimage() ?>
                          
						  <?php 
										$caption = get_post(get_post_thumbnail_id())->post_excerpt;
										if($caption): ?>
										<h2 class="single-caption2">
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

                        
                            <div class="single-details">
                                <?php the_content();?>
                            </div>
             
                   
                            <div class="singlePage2-tag">
                                <span> <?php echo $itpolly['tag_title'];?> </span>
                                <?php the_tags( '', ' ' ); ?>
                            </div>
                   
                        <!--========= Single Add Start ===========-->
                            <div class="single-add">
                                <?php dynamic_sidebar('single_bottom')?>
                            </div>
                        <!--========= Single Add End ===========-->
                       
                       <?php if($itpolly['social_share'] ==1 ): ?>
					   
                       <h3 class="single-social-title">
                            <?php echo $itpolly['social_title'];?>
                       </h3>
                       
                       <div class="single-page-social">
                            
							
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


						
                    <!--============Realted content=============-->

<?php if($itpolly['author_details'] ==1 ): ?>
                         <!-- Author start -->
                         <div class="author2">
                       <?php $author_id = get_the_author_meta('ID') ?>
                            <div class="author-content2">

                                <h6 class="author-caption2">
                                   <span> <?php echo $itpolly['author_info_title']; ?>  </span>                         
                                </h6>

                                <div class="author-image2">
                                    <?php echo get_avatar(get_the_author_meta('ID'));?>
                                </div>

                                <div class="authorContent">
                                    <h1 class="author-name2">
                                        <a href="<?php echo get_author_posts_url( $author_id ); ?>"> <?php the_author_meta('first_name'); ?> <?php the_author_meta('last_name'); ?> </a>   
                                    </h1>
                                    <div class="author-details">
                                       <?php the_author_meta('description'); ?>
                                    </div>
                                </div>
                               

                              
                                <div class="author-title2">
                                 <strong><a href="<?php echo get_author_posts_url( $author_id ); ?>"> <?php echo $itpolly['author_all_post']; ?> </a></strong>
                                </div>
    

                            </div>

                        </div>
						<?php endif; if($itpolly['author_details'] == 2 ):  endif; ?>


                       <!-- Author End -->
                        
					


                        
                        <div class="single_relatedCat">
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
							
							
								<div class="itpolly-3 itpolly-m2">
                                    <div class="related-wrpp">
                                        <div class="related-image">
                                            <?php newsimage() ?>
											<?php 
								$video = get_post_meta(get_the_ID(),'video', true);
								if($video){ ?>
								<a href="<?php the_permalink()?>" class="related-icon"><i class="la la-play"></i></a>
								<?php }	else{} ?>
								
                                        </div>
                                        <h4 class="related-title">
                                           <a href="<?php the_permalink()?>"><?php the_title() ?> </a>
                                        </h4>
                                        
                                        <div class="related-meta">
                                            <a href=""><i class="la la-tags"> </i>  <?php newsdate();?>	 </a>
                                        </div>
                                    </div>
                                      
                                </div>
                                
 <?php
						}    }    } 
						$post = $orig_post;
						wp_reset_query(); ?>


                            </div>
                          
                         
                            
                            
                          
                            
                           
                            
                            
                     
                        
                        
                        
                        
                       
                    </div>
                    

                    <div class="col-lg-4 col-md-4">
                        <div class="sitebar-fixd" style="position: sticky; top: 0;"><!-- Fixd Siteber -->
                            <div class="siteber-add">
                                <?php dynamic_sidebar('single_sidebar_one')?>
                            </div>

                            <div class="singlePopular">                        
                                <ul class="nav nav-pills" id="singlePopular-tab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <div class="nav-link active"  data-bs-toggle="pill" data-bs-target="#singleTab_recent" role="tab" aria-controls="singleRecent" aria-selected="false">   <?php echo $itpolly['last']; ?> </div>
                                    </li>
                                    
        
                                    <li class="nav-item" role="presentation">
                                        <div class="nav-link" data-bs-toggle="pill" data-bs-target="#singleTab_popular" role="tab" aria-controls="singlePopulars" aria-selected="false"> <?php echo $itpolly['popular']; ?>   </div>
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
										
										<div class="single-tabWrpp singleTab-border">
                                            <div class="singleTab-image ">
                                                <?php newsimage() ?>
                                            </div>
											
											<?php 
								$video = get_post_meta(get_the_ID(),'video', true);
								if($video){ ?>
								<a href="<?php the_permalink()?>" class="singleTab-icon2"><i class="la la-play"></i></a>
								<?php }	else{} ?>
                                            <h4 class="singleTab_hadding"><a href="<?php the_permalink()?>"><?php the_title() ?> </a>
                                            
                                            </h4> 

                                            <?php if($itpolly['archvie_post_style'] ==1 ): ?>	
											<div class="archive-conut">
                                               <?php if($itpolly['language'] ==1 ): ?>	
											<?php echo $xx; ?>											
											<?php endif; if($itpolly['language'] == 2 ): ?>
											<?php echo bangla_number($xx); ?>
											<?php endif; ?>	
                                            </div>
											<?php endif; if($itpolly['archvie_post_style'] == 2 ): endif; ?>
                                            

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
										
										<div class="single-tabWrpp singleTab-border">
                                            <div class="singleTab-image ">
                                                <?php newsimage() ?>
                                            </div>
											
												<?php 
								$video = get_post_meta(get_the_ID(),'video', true);
								if($video){ ?>
								<a href="<?php the_permalink()?>" class="singleTab-icon2"><i class="la la-play"></i></a>
								<?php }	else{} ?>

                                            <h4 class="singleTab_hadding"><a href="<?php the_permalink()?>"><?php the_title() ?> </a>
                                            
                                            </h4> 

                                            <?php if($itpolly['archvie_post_style'] ==1 ): ?>	
											<div class="archive-conut">
                                               <?php if($itpolly['language'] ==1 ): ?>	
											<?php echo $xx; ?>											
											<?php endif; if($itpolly['language'] == 2 ): ?>
											<?php echo bangla_number($xx); ?>
											<?php endif; ?>	
                                            </div>
											<?php endif; if($itpolly['archvie_post_style'] == 2 ): endif; ?>
                                            

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
                        
                        </div> <!-- Fixd Siteber End -->


                    </div>
                    
                    
                    
                </div>
            </div>
        </section>


