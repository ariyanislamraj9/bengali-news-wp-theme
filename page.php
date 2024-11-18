<?php
/**
 * Theme Name: Template Pro
 * Theme URI: https://www.facebook.com/groups/freewordpressthemeandplugin/
 * Author: Nayem Hasan
 * Author URI: https://www.facebook.com/abunayeem235/
 * Description: Themes Is WordPress Theme Market
 * @package templatepro
 */
get_header(); $timeout= timeout(); 
?>



<?php if(have_posts()) : ?>
               <?php while(have_posts()) : the_post(); ?>
			   
			   
<div class="create-page">
            <div class="<?php container_itpolly(); ?>">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="create-pageTitle">                        
                            <span> <?php the_title();?>  </span>     
                        </div>
                        
                        <div class="create-page-details">
                           <?php the_content();?>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
		
		<?php endwhile;  endif;?>


<?php
get_footer();
