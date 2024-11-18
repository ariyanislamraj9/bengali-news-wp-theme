<?php global $itpolly; ?>
<style>

.itpolly_header {
	background: <?php echo $itpolly['header_background']?>;
	color: <?php echo $itpolly['header_font']['color']?>;
	padding: 5px 0;
	border-bottom: 1px solid #eee;
}

.header2 {
	padding: 15px 0;
	background: <?php echo $itpolly['header_background']?>;
	color: <?php echo $itpolly['header_font']['color']?>;
}

#scroll5-left {
	position: relative;
	width: auto;
	height: 40px;
	padding-top: 8px;
	padding-left: 10px;
	margin: 0;
	padding-right: 10px;
	padding: 9px 20px 9px 10px;
	font-size: <?php echo $itpolly['top_scroll_font']['font-size']?>;
	color: <?php echo $itpolly['top_scroll_font']['color']?>;
	background-color: <?php echo $itpolly['top_scroll_background']?>;
	font-weight: 400;


}

#scroll5-left::before {
	position: absolute;
	right: -20px;
	bottom: 0;
	content: "";
	width: 0;
	height: 0;
	border-left: 20px solid <?php echo $itpolly['top_scroll_background']?>;
	border-top: 20px solid transparent;
	border-bottom: 20px solid transparent;
}

.scroll5-right {
	position: relative;
	height: 40px;
	width: 100%;
	background: <?php echo $itpolly['top_scroll_content_background']?>;
	color: <?php echo $itpolly['top_scroll_content_font']['color']?>;	
	line-height: 40px;
}

.scroll5-right a {
	font-size: <?php echo $itpolly['top_scroll_content_font']['font-size']?>;
	color: <?php echo $itpolly['top_scroll_content_font']['color']?>;	
	font-weight: 400;
	margin-right: 12px;
	display: inline-block;
}

.scroolbar5 {
	position: absolute;
	right: 0;
	top: 0px;
	height: 100%;
	float: right;
	width: 59px;
	height: 40px;
	background: <?php echo $itpolly['top_scroll_background']?>;
	color: <?php echo $itpolly['top_scroll_font']['color']?>;
	cursor: pointer;

}

.footer-area {
	background: <?php echo $itpolly['footer_background']?>;
	color: <?php echo $itpolly['footer_font']['color']?>;
	padding: 40px 0 20px;
	margin-top: 10px;
}
.footer-area ‍a{
	color: <?php echo $itpolly['footer_font']['color']?>;
}

.footer-menu ul > li > a {
	display: inline-block;
	color: <?php echo $itpolly['footer_font']['color']?> !important;
	border: 1px solid #333;
	padding: 6px 15px;
	transition: .8s all;
}


.photoCaption a {
	color: <?php echo $itpolly['photogallery_title_font']['color']?>;
	font-size: <?php echo $itpolly['photogallery_title_font']['font-size']?>;
	padding: 10px;
	display: inline-block;
	font-style: italic;
}

#recentPopular-tab .nav-link.active {
	color: <?php echo $itpolly['tab_active_font']['color']?>;
	font-size: <?php echo $itpolly['tab_active_font']['font-size']?>;
	background: <?php echo $itpolly['tab_active_back']?> !important;
	border-top: 3px solid #860707;
}

#recentPopular-tab .nav-link {
	background: <?php echo $itpolly['tab_back']?> !important;
	color: <?php echo $itpolly['tab_font']['color']?>;
	font-size: <?php echo $itpolly['tab_font']['font-size']?>;
	padding: 10px 10px;
	margin: 0;
	text-align: center;
	border-top: 3px solid #19232d;
	text-decoration: none;
	transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out;
	display: block;

}

.tab_hadding a{
	color: <?php echo $itpolly['tab_news_title']['color']?> !important;
	font-size: <?php echo $itpolly['tab_news_title']['font-size']?> !important;
    font-weight:400;
	display: inherit;
    text-decoration:none;
    -webkit-transition:.8s all;
    -o-transition:.8s all;
    transition:.8s all;
}

.sec-one-title a {
	color: <?php echo $itpolly['sec_one_title_one']['color']?>;
	font-size: <?php echo $itpolly['sec_one_title_one']['font-size']?>;	
	display: inline-block;
	transition: .5s all;
}

.secOne-title2 a {
	color: <?php echo $itpolly['sec_one_title_two']['color']?>;
	font-size: <?php echo $itpolly['sec_one_title_two']['font-size']?>;	
	display:inline-block

}

.secOne_smallTitle a {
	color: <?php echo $itpolly['sec_one_title_three']['color']?>;
	font-size: <?php echo $itpolly['sec_one_title_three']['font-size']?>;	
	display: inline-block;
	transition: .5s all;
}

.section-two {
	background: <?php echo $itpolly['sec_two_back']?>;
	margin: 10px 0 0;
	padding: 28px 0 32px;
}

.sec-two-title a {
	color: <?php echo $itpolly['sec_two_title_one']['color']?>;
	font-size: <?php echo $itpolly['sec_two_title_one']['font-size']?>;
	display: inline-block;
	text-decoration: none;
    transition: .5s all;
}

.secThree-title a {
	color: <?php echo $itpolly['sec_three_title_one']['color']?>;
	font-size: <?php echo $itpolly['sec_three_title_one']['font-size']?>;
	display: inline-block;
	transition: .5s all;
}

.secThree-title2 a {
	color: <?php echo $itpolly['sec_three_title_two']['color']?>;
	font-size: <?php echo $itpolly['sec_three_title_two']['font-size']?>;
	display: inline-block;
}

.secFour-title a {
	color: <?php echo $itpolly['sec_four_title_one']['color']?>;
	font-size: <?php echo $itpolly['sec_four_title_one']['font-size']?>;
	display: inline-block;
	transition: .5s all;
}

.secFive-title a {
	color: <?php echo $itpolly['sec_five_title_one']['color']?>;
	font-size: <?php echo $itpolly['sec_five_title_one']['font-size']?>;
	display: inline-block;
	transition: .5s all;
}

.secFive_title2 a {
	color: <?php echo $itpolly['sec_five_title_two']['color']?>;
	font-size: <?php echo $itpolly['sec_five_title_two']['font-size']?>;
	display: inline-block;
}

.secSeven-title a {
	font-size: <?php echo $itpolly['sec_nine_title_one']['font-size']?>;
	color: <?php echo $itpolly['sec_nine_title_one']['color']?>;
	display: inline-block;
	transition: .5s all;
}

.secSeven-details a{
	color: <?php echo $itpolly['sec_nine_title_one']['color']?>;
}

.secSecven-color {
	color: <?php echo $itpolly['sec_nine_title_one']['color']?>;
}

.secSeven-title2 a {
	color: <?php echo $itpolly['sec_nine_title_two']['color']?>;
	font-size: <?php echo $itpolly['sec_nine_title_two']['font-size']?>;
	display: inline-block;
	transition: .5s all;
}

.secEight-title a {
	color: <?php echo $itpolly['sec_eleven_title_one']['color']?>;
	font-size: <?php echo $itpolly['sec_eleven_title_one']['font-size']?>;	
	display: inline-block;
	transition: .5s all;
}
  







</style>