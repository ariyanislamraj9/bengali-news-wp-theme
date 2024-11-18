<?php global $itpolly; ?>

    <div class="itpolly_extrapage">
        <div class="extra-padding">
            <div class="extra-logo">
                <img src="<?php echo $itpolly['logo']['url']?>">
            </div>
            
			<?php if(have_posts()) : ?>
					<?php while(have_posts()) : the_post(); ?>
					
					
			<?php $sub_title = get_post_meta(get_the_ID(),'sub_title', true);
								
								if($sub_title){ ?>
								 <h2 class="extra-sub-title"> 
                                <?php echo $sub_title; ?>
                            </h2>
								<?php } ?>
								
            
            <h1 class="extra-title">
                <?php the_title();?>
            </h1>
            <div class="extra-date">
                    <?php echo $itpolly['update'];?> <?php newsdate_single();?>
            </div>
            <div class="extra-image">
                <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID))?>">
            </div>
            <div class="extra-details">
                <?php the_content();?>
            </div>

<?php endwhile; endif;?>
            <!-- footer -->

            <div class="itpollyPrinet_footer">
			<div class="extra-wrpp">
                    <h3 class="ExtraFooter-title">
                        <?php echo $itpolly['faddress_title'] ?>
                    </h3>
                    <div class="ExtraFooter-address">
                        <?php echo $itpolly['address_text'] ?>
                    </div>
                </div>
				
                <div class="extra-wrpp">
                    <h3 class="ExtraFooter-title">
                        <?php echo $itpolly['editorial_one_title'] ?>
                    </h3>
                    <div class="ExtraFooter-address">
                        <?php echo $itpolly['editorial_one_text'] ?>
                    </div>
                </div>
                <div class="extra-wrpp">
                    <h3 class="ExtraFooter-title">
                        <?php echo $itpolly['editorial_two_title'] ?>
                    </h3>
                    <div class="ExtraFooter-address">
                        <?php echo $itpolly['editorial_two_text'] ?>
                    </div>
                </div>
            </div>

        </div>
    </div>

