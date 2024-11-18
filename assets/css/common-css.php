<?php global $itpolly; ?>
<style>

body {
    font-size: <?php echo $itpolly['body_font']['font-size']?> !important;

	color: <?php echo $itpolly['body_font']['color']?> !important;

	font-family: SolaimanLipiNormal !important;

    background: <?php echo $itpolly['body_background']?> !important;



}

a:hover {
    color: <?php echo $itpolly['default_hover']?>;
}


.sticky {
	
	<?php if($itpolly['menu_settings'] == 1 ): ?>
	position: fixed !important;
	<?php endif; if($itpolly['menu_settings'] == 2 ): ?> 
	position: static !important;
	<?php endif;?>

	width: 100%;

	top: 0;

	left: 0;

	z-index: 9;

	-webkit-transition: .8s all;

	-o-transition: .8s all;

	transition: .8s all;

	z-index: 9999;

}

.menu_section {
	background: <?php echo $itpolly['menu_background']?>;
	box-shadow: 0 5px 5px -5px #000;
	margin-bottom: 20px;
}


.stellarnav { position: relative; width: 100%; z-index: 9900; line-height: normal; font-weight: normal; font-size: <?php echo $itpolly['menu_font']['font-size']?>;}

.stellarnav.dark .active {
	background: <?php echo $itpolly['active_menu_background']?>;
}

.stellarnav.dark .current-menu-item {
	background: <?php echo $itpolly['active_menu_background']?>;
}

.stellarnav.dark .current-menu-item a {
	color : <?php echo $itpolly['active_menu_font']['color']?>;
}

.stellarnav.dark ul ul {
	background: <?php echo $itpolly['menu_background']?>;
}

.stellarnav.dark li a {
	color : <?php echo $itpolly['menu_font']['color']?>;
}
.stellarnav.dark li a:hover {
	background: <?php echo $itpolly['active_menu_background']?>;
}
.stellarnav.dark a {
	color : <?php echo $itpolly['menu_font']['color']?>;
}

.stellarnav > ul > li > a {
	font-weight: normal;
	border-bottom: none;
}

.stellarnav li a {
	padding : <?php echo $itpolly['menu_padding']['margin-top']?> <?php echo $itpolly['menu_padding']['margin-right']?> <?php echo $itpolly['menu_padding']['margin-bottom']?> <?php echo $itpolly['menu_padding']['margin-left']?>;
	display: block;
	text-decoration: none;
	color: #000;
	font-weight: 600;
	/* text-transform: uppercase; */
	box-sizing: border-box;
	-webkit-transition: all .3s ease-out;
	-moz-transition: all .3s ease-out;
	transition: all .3s ease-out;
}


.footer-scrool {
	position: fixed;
	background: <?php echo $itpolly['footer_scroll_content_background']?>;
	color: <?php echo $itpolly['footer_scroll_content_font']['color']?>;
	z-index: 99;
	overflow: hidden;
	bottom: 0;
	left: 0;
	right: 0;
	border-top: 1px solid #0a4466;
	border-bottom: 1px solid #0a4466;
}

.footer-scrool-1 {
	float: left;
	width: auto;
	background: <?php echo $itpolly['footer_scroll_background']?>;
	height: 100%;
	font-size: <?php echo $itpolly['footer_scroll_font']['font-size']?>;
	color: <?php echo $itpolly['footer_scroll_font']['color']?>;
	position: absolute;
	z-index: 99;
	line-height: 41px;
	padding: 0 20px 0 11px;
}

.footer-scrool-2 {
    height: 40px;
    font-size: <?php echo $itpolly['footer_scroll_content_font']['font-size']?>;
    line-height: 43px;
}


.footer-scrool-2 a {
	color: <?php echo $itpolly['footer_scroll_content_font']['color']?>;
    text-decoration: none;
}


 
 .single-page-subTitle {
	font-size: <?php echo $itpolly['sub_title_font']['font-size']?>;
	color: <?php echo $itpolly['sub_title_font']['color']?>;
	margin-top: 19px;
	line-height : auto;
}

.single-page-title {
	font-size: <?php echo $itpolly['title_font']['font-size']?>;
	margin-bottom: 17px;
	font-weight: 600;
	color: <?php echo $itpolly['title_font']['color']?>;
	margin-top: 11px;
	line-height : auto;
}
 
 
 .related-title a {
	font-size: <?php echo $itpolly['more_news_title']['font-size']?>;
	color: <?php echo $itpolly['more_news_title']['color']?>;
	text-decoration: none;
    transition: .5s all;
}
 

#singlePopular-tab .nav-link.active {
	color:  <?php echo $itpolly['single_tab_active_font']['color']?> !important;
	background: <?php echo $itpolly['single_tab_active_back']?> !important;
	font-size: <?php echo $itpolly['single_tab_active_font']['font-size']?> !important;
	border-top: 3px solid #01192f;
}

#singlePopular-tab .nav-link {
	display: block;
	color: <?php echo $itpolly['single_tab_font']['color']?> !important;
	padding: 10px 10px;
	text-decoration: none;
	transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out;
	text-align: center;
	background: <?php echo $itpolly['single_tab_back']?> !important;
	border-top: 3px solid #8b1010;
	font-size: <?php echo $itpolly['single_tab_font']['font-size']?> !important;
	margin: 0;

}

.singleTab_hadding a{
    font-size:<?php echo $itpolly['single_tab_news_title']['font-size']?> !important;
    font-weight:400;
    line-height:auto;
    color:<?php echo $itpolly['single_tab_news_title']['color']?> !important;
    text-decoration:none;
    -webkit-transition:.8s all;
    -o-transition:.8s all;
    transition:.8s all;
}


#archivePopular-tab .nav-link.active {
	font-size:<?php echo $itpolly['archive_tab_active_font']['font-size']?> !important;
	color: <?php echo $itpolly['archive_tab_active_font']['color']?> !important;
	background: <?php echo $itpolly['archive_tab_active_back']?> !important;
	border-top: 3px solid #01192f;
}


#archivePopular-tab .nav-link {
	display: block;
	color: <?php echo $itpolly['archive_tab_font']['color']?> !important;
	padding: 10px 10px;
	text-decoration: none;
	transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out;
	text-align: center;
	background: <?php echo $itpolly['archive_tab_back']?> !important;
	border-top: 3px solid #8b1010;
	font-size:<?php echo $itpolly['archive_tab_active_font']['font-size']?> !important;
	margin: 0;

}

.archiveTab_hadding a {
	font-size:<?php echo $itpolly['archive_tab_news_title']['font-size']?> !important;
	font-weight: 400;
	line-height: auto;
	color: <?php echo $itpolly['archive_tab_news_title']['color']?> !important;
	text-decoration: none;
	-webkit-transition: .8s all;
	-o-transition: .8s all;
	transition: .8s all;
}

.archive1-title a {
	display : inline-block;
	font-size: <?php echo $itpolly['archive_news_title_one']['font-size']?> !important;
	color: <?php echo $itpolly['archive_news_title_one']['color']?> !important;
	text-decoration: none;
	transition: .8s all;
}

.archive1-title2 a {
	font-size: <?php echo $itpolly['archive_news_title_two']['font-size']?> !important;
	color: <?php echo $itpolly['archive_news_title_two']['color']?> !important;
	text-decoration: none;
	display : inline-block;
	font-weight: 400;
	
}

.archive-p-title a {
	font-size: <?php echo $itpolly['archive_news_title_three']['font-size']?> !important;
	text-decoration: none;
	color: <?php echo $itpolly['archive_news_title_three']['color']?> !important;
	font-weight: 500;
    transition: .5s all;
}


.photo-page-title a {
	font-size: <?php echo $itpolly['gallery_caption_title']['font-size']?> !important;
	color: <?php echo $itpolly['gallery_caption_title']['color']?> !important;
	transition: .5s all;
}


.photo-latest-title a {
	font-size: <?php echo $itpolly['single_tab_news_title']['font-size']?>;
	color: <?php echo $itpolly['single_tab_news_title']['color']?>;
	transition: .5s all;
	font-weight: normal;
}



.scrollToTop {
	width: 50px;
	height: 60px;
	background: <?php echo $itpolly['goto_top_border']?>;
	position: fixed;
	right: 25px;
	bottom: 70px;
	z-index: 9999;
	border-radius: 50px 50px 0px 0px;
}

.scrollToTop i {
	font-size: 28px;
	color: <?php echo $itpolly['goto_top_color']?>;
	font-weight: 600;
	top: 4px;
	display: block;
	position: absolute;
	right: 4px;
	background: <?php echo $itpolly['goto_top_bac']?>;
	width: 42px;
	height: 52px;
	border-radius: 50px 50px 0px 0px;
	line-height: 55px;
	text-align: center;
}





.itpolly_cat01 {
	background: <?php echo $itpolly['cat_title_one_back']?>;
	color: <?php echo $itpolly['cat_title_one_font']['color']?>;
	font-size: <?php echo $itpolly['cat_title_one_font']['font-size']?>;
	padding: 10px 8px;
	margin-bottom: 10px;
	border-left: 4px solid <?php echo $itpolly['cat_title_one_border']?>;
}
.itpolly_cat01 a {
	color: <?php echo $itpolly['cat_title_one_font']['color']?>;
	transition: .5 all;
}
.itpolly_cat01 > span {
	float: right;
}
.itpolly_cat01 > span > a {
	background: transparent;
	font-size: 90%;
}
.itpolly_cat01 a:hover {
	opacity: .9;
}

.itpolly_cat02 {
	background: <?php echo $itpolly['cat_title_two_back']?>;
	color: <?php echo $itpolly['cat_title_two_font']['color']?>;
	font-size: <?php echo $itpolly['cat_title_two_font']['font-size']?>;
	padding: 10px 8px;
	margin-bottom: 10px;
	border-left: 4px solid <?php echo $itpolly['cat_title_two_border']?>;
}
.itpolly_cat02 a {
	color: <?php echo $itpolly['cat_title_two_font']['color']?>;
	transition: .5 all;
}




.itpolly_cat03 {
	display: block;
	margin-bottom: 7px;
	background-color: <?php echo $itpolly['cat_title_three_back2']?>;
	font-size: <?php echo $itpolly['cat_title_three_font']['font-size']?>;
}
.itpolly_cat03 a {
	background: <?php echo $itpolly['cat_title_three_back']?>;
	color: <?php echo $itpolly['cat_title_three_font']['color']?>;
	padding: 10px 8px;
	position: relative;
	display: inline-block;
	transition: .5s all;
}
.itpolly_cat03 > a::after {
	left: 100%;
	height: 0;
	width: 7px;
	position: absolute;
	top: 0;
	content: "";
	pointer-events: none;
	margin-left: 0;
	margin-top: 0;
	border-top: 44px solid <?php echo $itpolly['cat_title_three_back']?>;
	border-right: 8px solid transparent;
}
.itpolly_cat03 > span {
	float: right;
	margin-top: 3px;
}
.itpolly_cat03 > span > a {
	background: transparent;
	font-size: 90%;
	color: <?php echo $itpolly['cat_title_three_back']?>;
}




.itpolly_cat04 {
	display: block;
	margin-bottom: 7px;
	background-color: <?php echo $itpolly['cat_title_four_back2']?>;
	font-size: <?php echo $itpolly['cat_title_four_font']['font-size']?>;
}
.itpolly_cat04 a {
	background: <?php echo $itpolly['cat_title_four_back']?>;
	color: <?php echo $itpolly['cat_title_four_font']['color']?>;
	padding: 10px 8px;
	position: relative;
	display: inline-block;
	transition: .5s all;
}
.itpolly_cat04 > a::after {
	left: 100%;
	height: 0;
	width: 7px;
	position: absolute;
	top: 0;
	content: "";
	pointer-events: none;
	margin-left: 0;
	margin-top: 0;
	border-top: 44px solid <?php echo $itpolly['cat_title_four_back']?>;
	border-right: 8px solid transparent;
}





.itpolly_cat05 {
	position: relative;
	overflow: hidden;
	color: <?php echo $itpolly['cat_title_five_font']['color']?>;
	font-size: <?php echo $itpolly['cat_title_five_font']['font-size']?>;
}

.itpolly_cat05 a {
	color: <?php echo $itpolly['cat_title_five_font']['color']?>;
	padding: 0 10px 0 0;
	margin: 12px 0;
	display: inline-block;
	transition: .5s all;	

}
.itpolly_cat05 .catBar::before {
	position: absolute;
	content: '';
	width: 100%;
	border-top: 5px solid <?php echo $itpolly['cat_title_five_back']?>;
	top: 19px;
	display: inline-block;
	vertical-align: bottom;
}

.itpolly_cat05 .catBar::after {
	position: absolute;
	content: '';
	width: 100%;
	border-top: 5px solid <?php echo $itpolly['cat_title_five_back2']?>;
	top: 26px;
	display: inline-block;
	vertical-align: bottom;
}




.itpolly_cat06 {
	background: <?php echo $itpolly['cat_title_six_back']?>;
	color: <?php echo $itpolly['cat_title_six_font']['color']?>;
	font-size: <?php echo $itpolly['cat_title_six_font']['font-size']?>;
	text-align : <?php echo $itpolly['cat_title_six_font']['text-align']?>;
	padding: 10px 6px;	
	border-radius: 5px 5px 0 0;
}

.itpolly_cat06 a{
	color: <?php echo $itpolly['cat_title_six_font']['color']?>;
	display: inline-block;
	width: 100%;
	transition: .5s all;
}


.itpolly_cat07 {
	color: <?php echo $itpolly['cat_title_seven_font']['color']?>;
	font-size: <?php echo $itpolly['cat_title_seven_font']['font-size']?>;
	margin-bottom: 15px;
	background-color: <?php echo $itpolly['cat_title_seven_back2']?>;
	border-bottom: 2px solid <?php echo $itpolly['cat_title_seven_back']?>;
	border-top: 1px solid #EDE9E9;
}

.itpolly_cat07 a {
	background: <?php echo $itpolly['cat_title_seven_back']?>;
	color: <?php echo $itpolly['cat_title_seven_font']['color']?>;
	padding: 10px 8px;
	position: relative;
	display: inline-block;
	transition: .5s all;

}

.itpolly_cat07 > a::after {
	left: 100%;
	height: 0;
	width: 7px;
	position: absolute;
	top: 0;
	content: "";
	pointer-events: none;
	margin-left: 0;
	margin-top: 0;
	border-bottom: 47px solid <?php echo $itpolly['cat_title_seven_back']?>;
	border-right: 30px solid transparent;
}





.itpolly_cat08 {
	color: <?php echo $itpolly['cat_title_eight_font']['color']?>;
	font-size: <?php echo $itpolly['cat_title_eight_font']['font-size']?>;
	margin-bottom: 15px;
	background-color: <?php echo $itpolly['cat_title_eight_back2']?>;
	border-bottom: 2px solid <?php echo $itpolly['cat_title_eight_back']?>;
	border-top: 1px solid #EDE9E9;
}

.itpolly_cat08 a {
	background: <?php echo $itpolly['cat_title_eight_back']?>;
	color: <?php echo $itpolly['cat_title_eight_font']['color']?>;
	padding: 10px 8px;
	position: relative;
	display: inline-block;
	transition: .5s all;

}

.itpolly_cat08 > a::after {
	left: 100%;
	height: 0;
	width: 7px;
	position: absolute;
	top: 0;
	content: "";
	pointer-events: none;
	margin-left: 0;
	margin-top: 0;
	border-bottom: 47px solid <?php echo $itpolly['cat_title_eight_back']?>;
	border-right: 30px solid transparent;
}
.itpolly_cat08 > span {
	float: right;
}

.itpolly_cat08 > span > a {
	background: transparent;
	font-size: 90%;
	color: <?php echo $itpolly['cat_title_eight_back']?>;
}




.itpolly_cat09 {
	color: <?php echo $itpolly['cat_title_nine_font']['color']?>;
	font-size: <?php echo $itpolly['cat_title_nine_font']['font-size']?>;
	padding:  10px 8px;
	border-bottom: 5px solid #c9c3c3;
	margin-top: 10px;
	margin-bottom: 8px;
	background: <?php echo $itpolly['cat_title_nine_back']?>;
}

.itpolly_cat09 a {
	color: <?php echo $itpolly['cat_title_nine_font']['color']?>;
}

.itpolly_cat09 span {
	border-bottom: 5px solid #e80212;
	padding: 10px 8px;
	margin-left: -8px;
}





.itpolly_cat10 {
	display: block;
	font-size: <?php echo $itpolly['cat_title_ten_font']['font-size']?>;
	color: <?php echo $itpolly['cat_title_ten_font']['color']?>;
	margin-bottom: 15px;
	background: <?php echo $itpolly['cat_title_ten_back2']?>;
	border-bottom: 3px solid <?php echo $itpolly['cat_title_ten_back']?>;
}

.itpolly_cat10 > a {
	background: <?php echo $itpolly['cat_title_ten_back']?>;
	color: <?php echo $itpolly['cat_title_ten_font']['color']?>;
	padding: 10px 8px;
	display: inline-block;

}

.itpolly_cat10 > span > a {
	background: transparent;
	font-size: 90%;
	color: <?php echo $itpolly['cat_title_ten_back']?>;
}

.itpolly_cat10 > span {
	float: right;
	margin-top: 12px;
	padding-right: 7px;
}




<?php if($itpolly['widget_title_style'] == 1 ): ?>
.itpolly_widget h3 {
	background: <?php echo $itpolly['wideget_title_one_back']?>;
	color: <?php echo $itpolly['wideget_title_one_font']['color']?>;
	font-size: <?php echo $itpolly['wideget_title_one_font']['font-size']?>;
	text-align : <?php echo $itpolly['wideget_title_one_font']['text-align']?>;
	padding: 10px 8px;
	margin-bottom: 10px;
	border-left: 4px solid <?php echo $itpolly['wideget_title_one_border']?>;
}
<?php endif; if($itpolly['widget_title_style'] == 2 ): ?> 
.itpolly_widget h3 {
	background: <?php echo $itpolly['wideget_title_two_back']?>;
	color: <?php echo $itpolly['wideget_title_two_font']['color']?>;
	font-size: <?php echo $itpolly['wideget_title_two_font']['font-size']?>;
	text-align : <?php echo $itpolly['wideget_title_two_font']['text-align']?>;
	padding: 10px 8px;
	margin-bottom: 10px;
	border-bottom: 2px solid <?php echo $itpolly['wideget_title_two_border']?>;
}
<?php endif; if($itpolly['widget_title_style'] == 3 ): ?>
.itpolly_widget h3{
	background: <?php echo $itpolly['wideget_title_three_back']?>;
	color: <?php echo $itpolly['wideget_title_three_font']['color']?>;
	font-size: <?php echo $itpolly['wideget_title_three_font']['font-size']?>;
	text-align : <?php echo $itpolly['wideget_title_three_font']['text-align']?>;
	padding: 10px 6px;	
	border-radius: 5px 5px 0 0;
	margin: 0 0 10px;
}
<?php endif;?>
	
	



<?php echo $itpolly['custom_css']; ?>

</style>