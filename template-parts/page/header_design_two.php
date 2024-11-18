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

<?php get_template_part( 'template-parts/bangladate' ); ?>
   
 <div class="header2">
        <div class="<?php container_itpolly(); ?>">
            <div class="row">
                <div class="col-lg-3 col-md-3">
                    <div class="logo">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php bloginfo( 'name' ); ?>">
									<?php $logo = $itpolly['logo']['url']?>
									<?php if($logo){ ?>
                                        <img src="<?php echo $logo;?>" alt="<?php echo get_bloginfo('name');?>" title="<?php echo get_bloginfo('name');?>">
									<?php } ?>
										</a> 
                    </div>
                </div>
                <div class="col-lg-9 col-md-9">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="date">
                              <i class="las la-map-marker"></i>       <?php echo $itpolly['location_name'] ?>  <i class="lar la-calendar-minus"></i> 
<?php 
								$timezone = $itpolly['timezone'];
								if($itpolly['language'] == 1 ):
								date_default_timezone_set($timezone);
								$today = date("g:i a, l, j F Y"); 
								echo $today;
								endif;
								if($itpolly['language'] == 2 ):
								date_default_timezone_set($timezone);
								echo bang1a_date(date('h:i a, D, d M Y')); ?><?php
								if($itpolly['bangla_date'] == 1 ):
								echo ", ";
$bn = new BanglaDate(time());
$output = $bn->get_date();
$ReadyDate = "$output[0] $output[1] $output[2]";
echo $ReadyDate;
?> বঙ্গাব্দ  <?php endif; if($itpolly['bangla_date'] == 2 ): endif; ?>

								<?php endif; ?>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="header-social">
                                <ul>
                                    <?php
$social = $itpolly['socialposition'];
if($social == 0){
	get_template_part( 'template-parts/social/facebook', 'facebook' );
	get_template_part( 'template-parts/social/twitter', 'twitter' );
	get_template_part( 'template-parts/social/instagram', 'instagram' );
	get_template_part( 'template-parts/social/linkedin', 'linkedin' ); 
	get_template_part( 'template-parts/social/youtube', 'youtube' ); 
get_template_part( 'template-parts/social/rss', 'rss' ); 	
};

$layout = $itpolly['socialposition']['Show'];
if ($layout): foreach ( $layout as $key => $value ) {
    switch($key) {
        case 'facebook': get_template_part( 'template-parts/social/facebook', 'facebook' );
        break;

        case 'twitter': get_template_part( 'template-parts/social/twitter', 'twitter' );
        break;

        case 'instagram': get_template_part( 'template-parts/social/instagram', 'instagram' );
        break;
        
        case 'linkedin': get_template_part( 'template-parts/social/linkedin', 'linkedin' );    
        break; 

		case 'youtube': get_template_part( 'template-parts/social/youtube', 'youtube' );    
        break;  
		
		case 'rss': get_template_part( 'template-parts/social/rss', 'rss' );    
        break;  
    }
}
endif;
?>
                                </ul>
                            </div>

                            <div class="searchIcon">
                                <i class="las la-search"></i> <title> </title>
                            </div>

                            <form class="searchBar" action="<?php echo home_url( '/' ); ?>" method="post">
                                <input type="text" value="<?php the_search_query(); ?>" name="s"  placeholder="<?php echo $itpolly['placeholder'] ?>">
                                <button><input type="submit" value="<?php echo $itpolly['search'] ?>"></button>
                                
                                <div class="remove">
                                    <i class="las la-times"></i>
                                </div>
    
                            </form>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
           