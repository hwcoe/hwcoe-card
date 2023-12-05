<?php
/**
 * Card Block template.
 *
 * @param array $block The block settings and attributes.
 */

$card_width	= get_field( 'card_width' );
$headline	= get_field( 'card_headline' );
$image		= get_field( 'card_image' );
$url			= get_field( 'card_url' );
$new_window	= get_field( 'link_new_window' );
$animate		= get_field( 'animate_on_hover' );

// Support custom id values.
$block_id = '';
if ( ! empty( $block['anchor'] ) ) {
    $block_id = esc_attr( $block['anchor'] );
}

$class_name = 'cards__item stack-' . $card_width;
// if ( ! empty( $block['className'] ) ) {
//     $class_name .= ' ' . $block['className'];
// }
if ( $animate ) {
	$class_name .= ' card-animated';
}

$inner_blocks_template = array(
   array( 'core/paragraph', array(
        'content' => 'Card body content',
    )),    
);
?>

<?php if ( ! $is_preview ) { ?>
   <div
   <?php
		echo wp_kses_data(
		get_block_wrapper_attributes(
			array(
				'id'    => $block_id,
				'class' => esc_attr( $class_name ),
			)
		)
		);
	?>
   >
<?php } ?>
		
		<?php if (!is_admin() && $url): ?>
		<a href="<?php echo esc_url($url); ?>" class="card-link" <?php echo ($new_window) ? 'target="_blank"' : ''; ?>>
		<?php endif; ?>
			<div class="card">
				<?php if ($image): ?>
				<div class="card-img-top">
					<?php echo wp_get_attachment_image( $image['ID'], 'full', '', array( 'alt' => 'test' ) ); ?>
				</div>
				<?php endif; ?>
				<div class="card-body">				
					<?php if ($headline) {
						echo '<h3>' . $headline . '</h3>';
					} ?>
					<InnerBlocks
						class="demo-author-block-acf__innerblocks"
						template="<?php echo esc_attr( wp_json_encode( $inner_blocks_template ) ); ?>"
					/>
				</div>
			</div>
		<?php if (!is_admin() && $url): ?>
		</a>
		<?php endif; ?>
<?php if ( ! $is_preview ) { ?>
   </div>
<?php } ?>