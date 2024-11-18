<?php
/**
 * Theme Name: AR News Pro
 * Theme URI: http://ariyanislamraj.pro
 * Author: AriyaN Islam Raj
 * Author URI: http://ariyanislamraj.com
 * Description: Themes Is WordPress Theme Market
 * @package templatepro
 */
global $itpolly;
?>



<?php if($itpolly['facebook_confiq'] ==1 ): ?>						
<?php
	if (is_front_page() && is_home()){ ?>

	<meta property="og:title" content="<?php wp_title('');  ?>" /> 
	<meta property="og:description" content="<?php echo $itpolly['facebook_ogdes']; ?>" />  
	<meta property="og:image" content="<?php echo $itpolly['facebook_ogimage']['url']; ?>" /> 
	<meta property="og:video" content="" /> 
	<meta property="og:image:width" content="700" />  
	<meta property="og:image:height" content="400" />  
	<meta property="og:video:type" content="application/x-shockwave-flash" />
	<meta property="og:type" content="website" />
	<meta property="fb:app_id" content="<?php echo $itpolly['facebook_app_id']; ?>" />
	<meta property="fb:pages" content="<?php echo $itpolly['facebook_pages']; ?>" />
		
	<?php }; if (is_single()){ ?>

	 <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-thumbnail' ); ?>
	<meta property="og:title" content="<?php the_title(); ?> <?php echo $itpolly['facebook_ogtitle']; ?>" /> 
	<meta property="og:description" content="" />  
	<meta property="og:image" content="<?php echo $image[0]; ?>" /> 
	<meta property="og:video" content="" /> 
	<meta property="og:video:width" content="700" />  
	<meta property="og:video:height" content="400" />  
	<meta property="og:video:type" content="application/x-shockwave-flash" />
	<meta property="og:type" content="article" />
	<meta property="fb:app_id" content="<?php echo $itpolly['facebook_app_id']; ?>" />
	<meta property="fb:pages" content="<?php echo $itpolly['facebook_pages']; ?>" />
		
	<?php };

	?>
<?php endif; if($itpolly['facebook_confiq'] == 0 ): endif; ?>



<?php if($itpolly['twitter_confiq'] == 1 ): ?>						
<?php
	if (is_front_page() && is_home()){ ?>

	<meta name="twitter:card" content="summary_large_image" />
	<meta name="twitter:title" content="<?php wp_title('');  ?>" />
	<meta name="twitter:description" content="<?php echo $itpolly['twitter_ogdes']; ?>" />
	<meta name="twitter:image" content="<?php echo $itpolly['twitter_ogimage']['url']; ?>" />
	<meta name="brand_name" content="<?php wp_title('');  ?>" />
	<meta name="twitter:creator" content="<?php echo $itpolly['twitter_username']; ?>">
	<meta name="twitter:site" content="<?php echo $itpolly['twitter_username']; ?>">
		
	<?php }; if (is_single()){ ?>
	<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-thumbnail' ); ?>
	 <meta name="twitter:card" content="summary_large_image" />
	<meta name="twitter:title" content="<?php the_title(); ?> <?php echo $itpolly['twitter_ogtitle']; ?>" />
	<meta name="twitter:description" content="" />
	<meta name="twitter:image" content="<?php echo $image[0]; ?>" />
	<meta name="brand_name" content="<?php wp_title('');  ?>" />
	<meta name="twitter:creator" content="<?php echo $itpolly['twitter_username']; ?>">
	<meta name="twitter:site" content="<?php echo $itpolly['twitter_username']; ?>">
		
	<?php };

	?>
<?php endif; if($itpolly['twitter_confiq'] == 0 ): endif; ?>




<?php if($itpolly['seo_settings'] ==1 ): ?>						
<?php
	if (is_front_page() && is_home()){ ?>
	
	<meta name="keywords" content="<?php echo $itpolly['keywords']; ?>" />
	<meta name="description" content="<?php echo $itpolly['meta_description']; ?>" />
		
	<?php }; if (is_single()){ ?>
	
	<meta name="keywords" content="<?php echo get_post_meta(get_the_ID(),'meta_keyword', true); ?>" />
	<meta name="description" content="<?php echo get_post_meta(get_the_ID(),'meta_description', true); ?>" />
		
	<?php };

	?>
<?php endif; if($itpolly['seo_settings'] == 0 ): endif; ?>	






