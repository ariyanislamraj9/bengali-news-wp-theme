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

<?php if($itpolly['single_style'] ==1 ): 
single_one();
endif; if($itpolly['single_style'] == 2 ): 
single_two();
endif; if($itpolly['single_style'] == 3 ): 
single_three();
endif; ?>
<?php
get_footer();

?>
<?php extrapage(); ?>
