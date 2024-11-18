<?php

/**
 * Template Name: All Districts Template
 */

get_header(); $timeout= timeout(); 
?>

<section class="date-page">
            <div class="<?php container_itpolly(); ?>">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
					
					<form style="margin: 0px 0px 25px 0px; background : black; padding:5px">
                <div class="row">
                    <div class="itpolly-4" style="margin : 2px 0px">
                        <select class="form-control" name="bd_division" id="division">
                            <option>--<?php echo $itpolly['division_name'];?>--</option>
                            <?php $division_args =   array(
                                'taxonomy'     => 'location',
                                'orderby'      => 'ID',
                                'parent' => 0,
                                'hide_empty'    => false
                            );
                            $divisions = get_terms($division_args);
                            ?>
                            <?php foreach ($divisions as $division) : ?>
                                <option value="<?php echo $division->term_id; ?>" data-val="<?php echo get_term_link($division->term_id); ?>"><?php echo $division->name; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="itpolly-4" style="margin : 2px 0px">
                        <select class="form-control" name="bd_district" id="district">
                            <option value="" selected="">--<?php echo $itpolly['zila_name'];?>--</option>
                            <?php $args =   array(
                                'taxonomy'     => 'location',
                                'orderby'      => 'ID',
                                'parent' => 0,
                                'hide_empty'    => false
                            );
                            $terms = get_terms($args);
                            ?>
                            <?php foreach ($terms as $term) :
                            ?>

                                <?php $d_args =   array(
                                    'taxonomy'     => 'location',
                                    'parent'        => $term->term_id,
                                    'orderby'      => 'ID',
                                    'hide_empty'    => false
                                );
                                $districts = get_terms($d_args);
                                ?>
                                <?php foreach ($districts as $district) {
                                ?>
                                    <option value="<?php echo $district->term_id; ?>" style="display:none" class="dist-<?php echo $term->term_id; ?>" data-val="<?php echo get_term_link($district->term_id); ?>"><?php echo $district->name; ?></option>
                                <?php  } ?>

                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="itpolly-4" style="margin : 2px 0px">
                        <select class="form-control" name="bd_thana" id="upozilla">

                            <option value="" selected="">--<?php echo $itpolly['upazila_name'];?>--</option>

                            <?php $args =   array(
                                'taxonomy'     => 'location',
                                'orderby'      => 'ID',
                                'parent'        => 0,
                                'hide_empty'    => false
                            );
                            $terms = get_terms($args);
                            ?>
                            <?php foreach ($terms as $term) : //Level 0 
                            ?>

                                <?php $d_args =   array(
                                    'taxonomy'     => 'location',
                                    'parent'        => $term->term_id,
                                    'orderby'      => 'ID',
                                    'hide_empty'    => false
                                );
                                $districts = get_terms($d_args);
                                ?>
                                <?php foreach ($districts as $district) {  // Level One 
                                ?>

                                    <?php $u_args =   array(
                                        'taxonomy'     => 'location',
                                        'child_of'        => $district->term_id,
                                        'orderby'      => 'ID',
                                        'hide_empty'    => false
                                    );
                                    $upozilas = get_terms($u_args);
                                    ?>

                                    <?php foreach ($upozilas as $upozila) :  // Level One 
                                    ?>
                                        <option id="upo" value="<?php echo get_term_link($upozila->term_id); ?>" style="display:none" class="thana-<?php echo $district->term_id; ?>" data-val="<?php echo get_term_link($upozila->term_id); ?>"><?php echo $upozila->name; ?></option>
                                    <?php endforeach; // Upozilas 
                                    ?>
                                <?php } // Districts 
                                ?>
                            <?php endforeach;
                            ?>
                        </select>
                    </div>
                    <div class="itpolly-4" style="margin : 2px 0px">
					 <div class="btn dist_news_srch w-100" style="background:#bd0202;padding: 5px; text-align: center; color:white; border-radius: 5px;" ><?php echo $itpolly['map_search'];?>
                              
                            </div>
                    </div>
                </div>
            </form>
			
			
                        
						<?php if (have_posts()) : ?>
						
						<div class="date-page-content">
                            <div class="row">
                                
								
								
								<?php if(have_posts()) : 
                     while(have_posts()) : the_post();
					 ?>
					 
								<div class="custom-col4">
                                    <div class="date-page-wrpp">
                                        <div class="date-image">
                                            <?php newsimage() ?>
											<?php 
								$video = get_post_meta(get_the_ID(),'video', true);
								if($video){ ?>
								<a href="<?php the_permalink()?>" class="date-icon"><i class="la la-play"></i></a>
								<?php }	else{} ?>
                                             
                                        </div>
                                        <h4 class="datePage-title">
                                            <a href="<?php the_permalink()?>"><?php the_title() ?> </a>	
                                        </h4>
                                        
                                        <div class="date-meta">
                                            <a href=""><i class="las la-tags"> </i>  <?php newsdate();?> </a>
                                        </div>
                                                                                
                                    </div>
                                   
                                </div>
                                <?php endwhile; endif; ?> 
                           
                        </div>
						<div class="row">
						 <div class="col-md-12"><?php wp_bootstrap_pagination(); ?></div>
						</div>
                        
                        
                        
                    </div>
					<?php else :
					$not_found = $itpolly['not_found'];
    echo '<h2 style="text-align:center;">' .$not_found .'</h2>';
endif; ?>

                </div>
            </div>
        </section>
		
		
<?php get_footer(); ?>