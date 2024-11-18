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

<?php if($itpolly['archive_style'] ==1 ): 
archive_one();
endif; if($itpolly['archive_style'] == 2 ): 
archive_two();
endif; if($itpolly['archive_style'] == 3 ): 
archive_three();
endif; if($itpolly['archive_style'] == 4 ): 
archive_four();
endif; ?>

<?php
get_footer();
?>