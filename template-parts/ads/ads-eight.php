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



      <!-- Add section start -->
                   
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-3 col-md-3">
                                    
                                        <?php if ( ! dynamic_sidebar( 'widget_area_15' ) ): ?>  <?php if($itpolly['default_ads'] == 1 ): ?> <div class="add-image"> <img src="<?php echo $itpolly['ads_url']['url']; ?>"> </div>
						<?php endif; if($itpolly['default_ads'] == 2 ): endif; ?>  <?php endif; ?>
                                   
                                </div>
								
								<div class="col-lg-3 col-md-3">
                                    
                                        <?php if ( ! dynamic_sidebar( 'widget_area_16' ) ): ?>  <?php if($itpolly['default_ads'] == 1 ): ?> <div class="add-image"> <img src="<?php echo $itpolly['ads_url']['url']; ?>"> </div>
						<?php endif; if($itpolly['default_ads'] == 2 ): endif; ?>  <?php endif; ?>
                                  
                                </div>
								
								
								<div class="col-lg-3 col-md-3">
                                     <?php if ( ! dynamic_sidebar( 'widget_area_17' ) ): ?>  <?php if($itpolly['default_ads'] == 1 ): ?> <div class="add-image"> <img src="<?php echo $itpolly['ads_url']['url']; ?>"> </div>
						<?php endif; if($itpolly['default_ads'] == 2 ): endif; ?>  <?php endif; ?>
                                </div>
								
								
								<div class="col-lg-3 col-md-3">
                                     <?php if ( ! dynamic_sidebar( 'widget_area_18' ) ): ?>  <?php if($itpolly['default_ads'] == 1 ): ?> <div class="add-image"> <img src="<?php echo $itpolly['ads_url']['url']; ?>"> </div>
						<?php endif; if($itpolly['default_ads'] == 2 ): endif; ?>  <?php endif; ?>
                                </div>
                        
                           
        
                            
                            </div>
                        </div>
                    
                    <!-- Add section End -->