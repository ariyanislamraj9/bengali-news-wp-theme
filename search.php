<?php
/**
 * Theme Name: Template Pro
 * Theme URI: http://itpolly.com/templatepro
 * Author: itpolly.Com
 * Author URI: http://itpolly.com
 * Description: Themes Is WordPress Theme Market
 * @package templatepro
 */
get_header(); $timeout= timeout(); 
?>


<section class="date-page">
            <div class="<?php container_itpolly(); ?>">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="date-page-content">
                            <div class="row">
                                
								
								<?php
    global $query_string;
    $query_args = explode("&", $query_string);
    $search_query = array();

    foreach($query_args as $key => $string) {
      $query_split = explode("=", $string);
      $search_query[$query_split[0]] = urldecode($query_split[1]);
    } // foreach

    $the_query = new WP_Query($search_query);
    if ( $the_query->have_posts() ) : 
    ?>
    <!-- the loop -->

   
    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
					 
								<div class="custom-col4">
                                    <div class="date-page-wrpp">
                                        <div class="date-image">
                                            <?php newsimage() ?>
											<?php 
								$video = get_post_meta(get_the_ID(),'video', true);
								if($video){ ?>
								<a href="<?php the_permalink()?>" class="date-icon"><i class="la la-play"></i></a>
								<?php }	else{} ?>
                                             
                                        </div>
                                        <h4 class="datePage-title">
                                            <a href="<?php the_permalink()?>"><?php the_title() ?> </a>	
                                        </h4>
                                        
                                        <div class="date-meta">
                                            <a href=""><i class="las la-tags"> </i>  <?php newsdate();?> </a>
                                        </div>
                                                                                
                                    </div>
                                   
                                </div>
                                
								 <?php endwhile; ?>

    <!-- end of the loop -->

    <?php wp_reset_postdata(); ?>

<?php else : ?>
    <p><?php _e( 'Sorry, no posts Found, Please Try Again.' ); ?></p>
<?php endif; ?> 
                           
                        </div>
						<div class="row">
						 <div class="col-md-12"><?php wp_bootstrap_pagination(); ?></div>
						</div>
                        
                        
                        
                    </div>
                </div>
            </div>
        </section>
		

<?php
get_footer();
?>