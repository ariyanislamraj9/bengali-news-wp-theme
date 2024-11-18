<?php /* Template Name: News Sent */ 
get_header(); $timeout= timeout();
?>



<div class="contact-page">
            <div class="container">
              
       

                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="contact-wrpp">
                            <h4 class="contactAddess-title text-center">
                               <?php echo $itpolly['news_sent_title']; ?>
                            </h4>
							
							<?php 
							$code = $itpolly['sentus_shortcode']; ?>
							<?php if ($code) {
								echo do_shortcode($code);
							}else{ ?>
											

<b> Note : You Need to 3 Configuration </b>
<ul>
<li>1. Install Contact Form 7 and Active it.</li>
<li>2. Copy the codes of below, Go to Contact Menu, Add New Contact Form and Paste Here.</li>
<li>3. Copy Shortcode and Go to Themes Options => Layout => Contact page Options. Submit Shortcode in Contact Form 7 Short Codes Options</li>
</ul>


<xmp>


<div class="main_section">
   <div class="row">
      <div class="col-md-12 col-sm-12">
         <div class="contact-title " >
            News Sub Title * 
         </div>
         <div class="contact-form">
            [text sub_title placeholder "News Sub Title"]
         </div>
      </div>
   </div>
   <div class="row">
      <div class="col-md-12 col-sm-12">
         <div class="contact-title">
            News Title * 
         </div>
         <div class="contact-form">
            [text* news_title placeholder "News Title Here"]
         </div>
      </div>
   </div>
   <div class="row">
      <div class="col-lg-12">
         <div class="contact-title">
            News Details * 
         </div>
         <div class="contact-form">
            [textarea* news_details placeholder "News Details...."]
         </div>
      </div>
   </div>
   <div class="row">
      <div class="col-md-6 col-sm-6">
         <div class="contact-title">
            Name * 
         </div>
         <div class="contact-form">
            [text* your-name placeholder "Your Name"]
         </div>
      </div>
      <div class="col-lg-6 col-md-6">
         <div class="contact-title">
            Email * 
         </div>
         <div class="contact-form">
            [email your-email placeholder "Your Email"]
         </div>
      </div>
   </div>
   <div class="row">
      <div class="col-md-6 col-sm-6">
         <div class="contact-title">
            Phone Number * 
         </div>
         <div class="contact-form">
            [text phone_number placeholder "Phone Number"]
         </div>
      </div>
      <div class="col-lg-6 col-md-6">
         <div class="contact-title">
            News Image * 
         </div>
         <div class="contact-form">
            [file news_image limit:5mb]
         </div>
      </div>
   </div>
   <div class="row">
      <div class="col-md-12">
         <div class="contact-btn">
            [submit "Submit Your News"]
         </div>
      </div>
   </div>
</div>


</xmp>

							<?php } ?>
							

                                                    
        
                        </div>
                     </div>
        
                </div>

            
            </div>
        </div>
		
		
                                    
								
            
            
            
		
		

	
<?php
get_footer();
?>