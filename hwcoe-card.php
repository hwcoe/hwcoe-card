<?php
/*
Plugin Name: HWCOE Cards  
Description: Card shortcode and ACF InnerBlock
Version: 1.0.0
License: GPL  
Author: Herbert Wertheim College of Engineering  
Author URI: http://www.eng.ufl.edu  
*/

/**
 * Add Card Shortcode
 * 
 * Example [ufl-card][/ufl-card]
 * @param  array $atts Shortcode attributes
 * @param  string [$content = ''] Content between shortcode tags
 * @return string shortcode output
 */

 function hwcoe_ufl_card($atts, $content = NULL ) {
	extract( shortcode_atts( 
		array(
			'cards_per_row' => "3",
			'headline' => '',
			'image' => '',
			'button_text' => 'Learn More',
			'button_link' => '',
			'new_window' => 0,
		), $atts )
	);
	
	// Proportional width of card
	switch($cards_per_row){
		case "3":
			$grid_width = "4";
			break;
		case "1":
			$grid_width = "12";
			break;
		case "2":
			$grid_width = "6";
			break;
		case "4":
			$grid_width = "3";
			break;
		default:
			$grid_width = "4";
	}

	// Support either image ID or image url
	$image = ( is_numeric( $image ) )? wp_get_attachment_image_src( $image, 'large' ) : array($image);

	// Shortcode callbacks must return content, so use output buffering
	ob_start();
	?>
	<div class="col-sm-12 col-md-<?php echo $grid_width; ?> card-wrapper">
		<div class="card">
			<?php 

			$link = ( !empty($button_link) )? esc_url( $button_link ) : false;
			$new_window = filter_var($new_window, FILTER_VALIDATE_BOOLEAN) ? 'target="_blank"' : '';

			if (!empty($image[0])) {
				$link_before = ( $link )? '<a href="' . $link . '" ' . $new_window . '>' : '';
				$link_after = ( $link )? '</a>' : '';

				echo $link_before;
				echo '<img src="' . esc_url( $image[0] ) . '" alt="' . esc_html($headline) . '" class="img-responsive">';
				echo $link_after;
			}
			?>
			
				<?php if ( !empty( $headline ) ){
					echo '<h2>' . esc_html($headline) . '</h2>';
				} ?>

				<?php 
				$content = custom_filter_shortcode_text($content);
				echo wp_kses_post( $content ); 
				?>

				<?php 
				if ($link) {
					if ( !empty( $headline ) ) {
						$button_label = $button_text . ": " . $headline;
					} else {
						$button_label = $button_text;	
					}				
				?>
				<p style="text-align: center;">
					<a href="<?php echo esc_url( $link ); ?>" class="btn" <?php echo $new_window; ?> aria-label="<?php echo esc_html($button_label); ?>"><?php echo esc_html( $button_text ); ?></a>
				</p>
				<?php } ?>
		</div>
	</div>

	 <?php 
	return ob_get_clean();
 }
 add_shortcode('ufl-card', 'hwcoe_ufl_card');
