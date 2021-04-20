<?php
// create a shortcode to list a specific custom type posts
//[post-lists type="news" limit="2" order="Asc" slider="no"]
add_shortcode( 'post-lists', 'postListingShortcode' );
function postListingShortcode( $atts ) {
    ob_start();
	extract( shortcode_atts( array (
        'type' => 'post',
		'limit' => '3',
        'order' => 'ASC',
        'slider' => 'no',
    ), $atts ) );
	
    
	$args = array(
        'post_type' => $type,
        'order' => $order,
        'posts_per_page' => $limit,
    );
	$query = new WP_query($args);
	if ( $slider=='no' ) { 
		if ( $query->have_posts() ) { ?>
			<div class="postListsMain <?php echo $type.'_post_list'; ?>">
				<div class="postLists">
					<?php while ( $query->have_posts() ) : $query->the_post(); ?>
					<div class="postLists_in_bg">
						<div class="postLists_img"><?php the_post_thumbnail(); ?></div>
						<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
						<div class="postLists_desc"><?php the_excerpt(); ?></div>
						<div class="postLists_readmore"><a href="<?php the_permalink(); ?>">Read More</a></div>
					</div>
					<?php endwhile;
					wp_reset_postdata(); ?>
				</div>
			<?php $myvariable = ob_get_clean();
			return $myvariable;
			echo '</div>';
		}
	}
	else{
		if ( $query->have_posts() ) { ?>
			<div class="postListsMain <?php echo $type.'_post_list'; ?>">
				<ul class="postbxslider">
					<?php while ( $query->have_posts() ) : $query->the_post(); 
					$postId = get_the_ID();
					$feaImage = wp_get_attachment_image_src( get_post_thumbnail_id( $postId ), 'single-post-thumbnail' ); 
					?>
						<li <?php if($feaImage[0]){ ?> style="background-image: url('<?php echo $feaImage[0]; ?>')" <?php } ?>>
						    <div class="slider_post_inn">
								<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
								<div class="postLists_desc"><?php the_excerpt(); ?></div>
								<div class="postLists_readmore"><a href="<?php the_permalink(); ?>">Read More</a></div>
							</div>
						</li>
					<?php 
					endwhile;
					wp_reset_postdata(); ?>
				</ul>
			</div>
<?php		
	    } 
	}
	
}	

?>