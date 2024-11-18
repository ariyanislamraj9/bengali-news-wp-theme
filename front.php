<?php /* Template Name: HomePage */ 
get_header(); $timeout= timeout();
?>
                     
                    
    
 <div class="main-section" style="overflow: hidden;">
 


         
       
               

  <?php
$section = $itpolly['section_settings'];
if($section == 0){
	get_template_part( 'template-parts/ads/ads-one', 'ads-one' );
	get_template_part( 'template-parts/page/section-one', 'section-one' );
	get_template_part( 'template-parts/ads/ads-two', 'ads-two' );
	get_template_part( 'template-parts/page/section-two', 'section-two' );
	get_template_part( 'template-parts/ads/ads-three', 'ads-three' );
	get_template_part( 'template-parts/page/section-three', 'section-three' );
	get_template_part( 'template-parts/ads/ads-four', 'ads-four' );
	get_template_part( 'template-parts/page/video-gallery', 'video-gallery' );
	get_template_part( 'template-parts/ads/ads-five', 'ads-five' );
	get_template_part( 'template-parts/page/section-four', 'section-four' );
	get_template_part( 'template-parts/ads/ads-six', 'ads-six' );
	get_template_part( 'template-parts/page/section-five', 'section-five' );
	get_template_part( 'template-parts/ads/ads-seven', 'ads-seven' );
	get_template_part( 'template-parts/page/section-six', 'section-six' );
	get_template_part( 'template-parts/ads/ads-eight', 'ads-eight' );
	get_template_part( 'template-parts/page/section-seven', 'section-seven' );
	get_template_part( 'template-parts/ads/ads-nine', 'ads-nine' );
	get_template_part( 'template-parts/page/section-eight', 'section-eight' );
	get_template_part( 'template-parts/ads/ads-ten', 'ads-ten' );
	get_template_part( 'template-parts/page/section-nine', 'section-nine' );
	get_template_part( 'template-parts/page/section-nine', 'section-ten' );
	get_template_part( 'template-parts/page/section-nine', 'section-eleven' );
	get_template_part( 'template-parts/page/section-nine', 'section-twelve' );
	get_template_part( 'template-parts/page/photo-gallery', 'photo-gallery' );
	
	
};

$layout = $itpolly['section_settings']['Show'];
if ($layout): foreach ( $layout as $key => $value ) {
    switch($key) {
		case 'ads-one': get_template_part( 'template-parts/ads/ads-one', 'ads-one' );
        break;
		
        case 'section-one': get_template_part( 'template-parts/page/section-one', 'section-one' );
        break;
		
		case 'ads-two': get_template_part( 'template-parts/ads/ads-two', 'ads-two' );
        break;
		
		case 'section-two': get_template_part( 'template-parts/page/section-two', 'section-two' );
        break;
		
		case 'ads-three': get_template_part( 'template-parts/ads/ads-three', 'ads-three' );
        break;
		
		case 'section-three': get_template_part( 'template-parts/page/section-three', 'section-three' );
        break;
		
		case 'ads-four': get_template_part( 'template-parts/ads/ads-four', 'ads-four' );
        break;
		
		case 'video-gallery': get_template_part( 'template-parts/page/video-gallery', 'video-gallery' );
        break;

		case 'ads-five': get_template_part( 'template-parts/ads/ads-five', 'ads-five' );
        break;
		
		case 'section-four': get_template_part( 'template-parts/page/section-four', 'section-four' );
        break;
		
		case 'ads-six': get_template_part( 'template-parts/ads/ads-six', 'ads-six' );
        break;
		
		case 'section-five': get_template_part( 'template-parts/page/section-five', 'section-five' );
        break;
		
		case 'ads-seven': get_template_part( 'template-parts/ads/ads-seven', 'ads-seven' );
        break;
		
		case 'section-six': get_template_part( 'template-parts/page/section-six', 'section-six' );
        break;
		
		case 'ads-eight': get_template_part( 'template-parts/ads/ads-eight', 'ads-eight' );
        break;
		
		case 'section-seven': get_template_part( 'template-parts/page/section-seven', 'section-seven' );
        break;
		
		case 'ads-nine': get_template_part( 'template-parts/ads/ads-nine', 'ads-nine' );
        break;
		
		case 'section-eight': get_template_part( 'template-parts/page/section-eight', 'section-eight' );
        break;
		
		case 'ads-ten': get_template_part( 'template-parts/ads/ads-ten', 'ads-ten' );
        break;
		
		case 'section-nine': get_template_part( 'template-parts/page/section-nine', 'section-nine' );
        break;
		
		case 'section-ten': get_template_part( 'template-parts/page/section-ten', 'section-ten' );
        break;
		
		case 'section-eleven': get_template_part( 'template-parts/page/section-eleven', 'section-eleven' );
        break;
		
		case 'section-twelve': get_template_part( 'template-parts/page/section-twelve', 'section-twelve' );
        break;
			
		case 'photo-gallery': get_template_part( 'template-parts/page/photo-gallery', 'photo-gallery' );
        break;
		
		

        
    }
}
endif;
?>           
           
          
   
           
    
                        
       
            




</div>
                
       <?php get_footer(); ?>