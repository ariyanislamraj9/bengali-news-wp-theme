<?php /* Template Name: Contact Us */ 
get_header(); global $itpolly;
?>



<div class="contact-page">
            <div class="<?php container_itpolly(); ?>">
                <div class="row">
                    <div class="col-lg-4 col-md-5">
                        <div class="contact-wrpp1">
                            <h4 class="contactAddess-title">
                                <?php echo $itpolly['contact_us']; ?>
                            </h4>
                        <div class="contact-address">
                            <i class="la la-home"></i>
                            <ul>
                                <li> <strong> <?php echo $itpolly['address_title']; ?> </strong> </li>
                                <li> <?php echo $itpolly['address_content']; ?> </li>
                            </ul>
                        </div>
                                
                        <div class="contact-address">
                            <i class="las la-phone-alt"></i>
                            <ul>
                                <li> <strong> <?php echo $itpolly['phone_title']; ?> </strong> </li>
                                <li> <?php echo $itpolly['phone_content']; ?> </li>
                            </ul>
                        </div>
                            
                        <div class="contact-address">
                            <i class="lar la-envelope"></i>
                            <ul>
                                <li> <strong> <?php echo $itpolly['email_title']; ?> </strong> </li>
                                <li> <?php echo $itpolly['email_content']; ?> </li>
                            </ul>
                        </div>
                            
                        <div class="contact-page-social">
                            <ul>
                                <li><a href="<?php echo $itpolly['social-link']['facebook-url']; ?>" target="_blank"><i class="lab la-facebook-f"></i></a></li>
                                <li><a href="<?php echo $itpolly['social-link']['twitter-url']; ?>" target="_blank"><i class="lab la-twitter"></i></a></li>
                                <li><a href="<?php echo $itpolly['social-link']['instagram-url']; ?>" target="_blank"><i class="lab la-instagram"></i></a></li>
                                <li><a href="<?php echo $itpolly['social-link']['youtube-url']; ?>" target="_blank"><i class="lab la-youtube"></i></a></li>
                                <li><a href="<?php echo $itpolly['social-link']['linkedin-url']; ?>" target="_blank"><i class="lab la-linkedin-in"></i></a></li>
        
                            </ul>
                        </div>
                        </div>
                     </div>
        
                     <div class="col-lg-8 col-md-7">
                        <div class="contact-wrpp">
                            <h4 class="contactAddess-title">
                                <?php echo $itpolly['sentus_massage']; ?>
                            </h4>
							
							<?php 
							$code = $itpolly['contact_shortcode']; ?>
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
<div class="main_form">
   <div class="row">
      <div class="col-md-12 col-sm-12">
         <div class="contact-title">
            Name * 
         </div>
         <div class="contact-form">
            [text* your-name placeholder "Name"]
         </div>
      </div>
   </div>
   <div class="row">
      <div class="col-md-6 col-sm-6">
         <div class="contact-title">
            Subjects * 
         </div>
         <div class="contact-form">
            [text* your-subject placeholder "Subject"]
         </div>
      </div>
      <div class="col-lg-6 col-md-6">
         <div class="contact-title">
            Email * 
         </div>
         <div class="contact-form">
            [email* your-email placeholder "E-Mail"]
         </div>
      </div>
   </div>
   <div class="row">
      <div class="col-lg-12">
         <div class="contact-title">
            Messages * 
         </div>
         <div class="contact-form">
            [textarea your-message placeholder "How can we help?"]
         </div>
      </div>
   </div>
   <div class="row">
      <div class="col-md-12">
         <div class="contact-btn">
            [submit "Send Messages"]
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

        <div class="map-section">
            <?php echo $itpolly['googlemap_link']; ?>
        </div>
		
		
		
		
		
                                    
								
            
            
            
		
		

	
<?php
get_footer();
?>