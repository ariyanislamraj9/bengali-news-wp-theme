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


<a href="<?php the_permalink()?>"><img class="lazyload" src="<?php echo $itpolly['lazyload']['url']?>" data-src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID))?>"></a>