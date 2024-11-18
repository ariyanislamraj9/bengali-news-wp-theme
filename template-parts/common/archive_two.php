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

<div class="archive-page2">
            <div class="<?php container_itpolly(); ?>">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="archive-topAdd">
                              <?php dynamic_sidebar('archive_page_one')?>
                        </div>
                    </div>
                </div>

                <div class="row">   
                    <div class="col-lg-8 col-md-8">
					<?php				
						$obj = get_queried_object();
						$categroy_name = $obj->name;
						$cat = get_term_by( 'name', $categroy_name, 'category' );
						$category_id = $cat->term_id;
						$word = $itpolly['word_archive'];
						?>
						
                        <div class="rachive-info-cats">
                            <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><i class="las la-home"> </i> </a>  <i class="las la-angle-right"></i> <?php echo $categroy_name;?> 
                        </div>

                        <div class="archivePage-content2">
                            <div class="row">
                                
								<?php if(have_posts()) : while(have_posts()) : the_post();?>
								
								<div class="archive2-custom-col-3">
                                    <div class="archivePage-wrpp2">
                                        <div class="archive2-image">
                                            <?php newsimage() ?>
											<?php 
								$video = get_post_meta(get_the_ID(),'video', true);
								if($video){ ?>
								<a href="<?php the_permalink()?>" class="archive2-icon icon1"><i class="la la-play"></i></a>
								<?php }	else{} ?>
								
                                        </div>
                                        <h4 class="archive1-title2">
                                            <a href="<?php the_permalink()?>"><?php the_title() ?> </a>	
                                        </h4>
                                        
                                        <div class="archive-meta2">
                                            <a href=""><i class="las la-tags"> </i>  <?php newsdate();?>	 </a>
                                        </div>
                                    </div>
                                </div>
								<?php endwhile; endif; ?> 

                                
                            </div>
                         
                         <div class="row">
						 <div class="col-lg-12 col-md-12"><?php wp_bootstrap_pagination(); ?></div>
						</div>
                            
                          
                            
                            
                            
                        </div>
                        
                    </div> 
                                 

                    <div class="col-lg-4 col-md-4">
                        <div class="sitebar-fixd" style="position: sticky; top: 0;"><!-- Fixd Siteber -->
                       
                            <div class="archivePopular">                        
                                <ul class="nav nav-pills" id="archivePopular-tab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <div class="nav-link active"  data-bs-toggle="pill" data-bs-target="#archiveTab_recent" role="tab" aria-controls="archiveRecent" aria-selected="false"> <?php echo $itpolly['last']; ?>   </div>
                                    </li>
                                    
        
                                    <li class="nav-item" role="presentation">
                                        <div class="nav-link" data-bs-toggle="pill" data-bs-target="#archiveTab_popular" role="tab" aria-controls="archivePopulars" aria-selected="false">  <?php echo $itpolly['popular']; ?>  </div>
                                    </li>
                                      
        
                                
        
                                </ul>
                            </div>

                            <div class="tab-content" id="pills-tabContentarchive">
                                <div class="tab-pane active show  fade" id="archiveTab_recent" role="tabpanel" aria-labelledby="archiveRecent">                                                                                                   
                                    <div class="archiveTab-sibearNews">
                                        <?php
									$x=1;
									$cat_how = $itpolly['archive_last_count'];
									$themes_bazar = new WP_Query(array(
									'post_type' => 'post',
									'posts_per_page' => $cat_how,
									'offset' => 0,
								));
								while ($themes_bazar->have_posts()) : $themes_bazar->the_post(); ?>
								<?php $xx=$x++ ?>
								
										<div class="archive-tabWrpp archiveTab-border">
                                            <div class="archiveTab-image ">
                                               <?php newsimage() ?>
                                            </div>
											
											<?php 
								$video = get_post_meta(get_the_ID(),'video', true);
								if($video){ ?>
								<a href="<?php the_permalink()?>" class="archiveTab-icon2"><i class="la la-play"></i></a>
								<?php }	else{} ?>

                                            <h4 class="archiveTab_hadding"><a href="<?php the_permalink()?>"><?php the_title() ?> </a>
                                            
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
    
                                    
                                <div class="tab-pane fade" id="archiveTab_popular" role="tabpanel" aria-labelledby="archivePopulars">                                            
                                    <div class="archiveTab-sibearNews">
                                        
										<?php
												$x=1;
												$cat_how = $itpolly['archive_popular_count'];
												$month = date('m');
										$year = date('Y');
										query_posts('meta_key=post_views_count&posts_per_page=' . $cat_how .'&orderby=meta_value_num&order=DESC&year=' . $year . '&monthnum=' . $month);
										while (have_posts()): the_post(); ?>
										<?php $xx=$x++ ?>
										
										<div class="archive-tabWrpp archiveTab-border">
                                            <div class="archiveTab-image ">
                                                <?php newsimage() ?>
                                            </div>
											
											<?php 
								$video = get_post_meta(get_the_ID(),'video', true);
								if($video){ ?>
								<a href="<?php the_permalink()?>" class="archiveTab-icon2"><i class="la la-play"></i></a>
								<?php }	else{} ?>
								
                                            <h4 class="archiveTab_hadding"><a href="<?php the_permalink()?>"><?php the_title() ?> </a>
                                            
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
                                <?php dynamic_sidebar('archive_page_two')?>
                            </div>                           
                        
                        </div> <!-- Fixd Siteber End -->


                    </div>
                </div>
            </div>
        </div>