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

<?php if($itpolly['language'] == 1 ): 
$currentDate = get_the_time("h:i:s a, l, j F Y");
	echo $currentDate;

endif; if($itpolly['language'] == 2 ): 

$currentDate = get_the_time("h:i:s a, l, j F Y");
	$newsdate = bang1a_date($currentDate);
	echo $newsdate;
	endif; ?>


