<?php
/**
 * @package inc2734/wp-awesome-components
 * @author inc2734
 * @license GPL-2.0+
 */

$components = apply_filters( 'inc2734_wp_awesome_components_register_components', [] );

foreach ( $components as $id => $component ) {
	if ( ! isset( $component['id'] ) ) {
		unset( $components[ $id ] );
		continue;
	}
	$component['id'] = trim( $component['id'] );

	if ( ! isset( $component['label'] ) ) {
		unset( $components[ $id ] );
		continue;
	}

	if ( ! isset( $component['html'] ) ) {
		unset( $components[ $id ] );
		continue;
	}
	$component['html'] = trim( $component['html'] );

	$components[ $id ] = array_filter( $component );
}

$components = array_filter( $components );

if ( empty( $components ) ) {
	return;
}
?>
<div id="wpac-modal" class="wpac-modal" aria-hidden="true">
	<div class="wpac-modal__container">
		<div class="wpac-modal__sidebar">
			<ul class="wpac-modal-selector">
				<?php foreach ( $components as $component ) : ?>
					<li class="wpac-modal-selector__item" aria-controls="wpac-modal-preview-<?php echo esc_attr( $component['id'] ); ?>" aria-selected="false"><?php echo esc_html( $component['label'] ); ?></li>
				<?php endforeach; ?>
			</ul>
		</div>
		<div class="wpac-modal__main">
			<span id="wpac-modal-close-btn" class="dashicons dashicons-no"></span>

			<?php foreach ( $components as $id => $component ) : ?>
				<div id="wpac-modal-preview-<?php echo esc_attr( $component['id'] ); ?>" class="wpac-modal-preview" aria-hidden="true">
					<h2 class="wpac-modal-preview__title"><?php echo esc_html( $component['label'] ); ?></h2>
					<?php
					wp_editor( $component['html'], 'wpawesomecomponents-' . $id, [
						'media_buttons' => false,
						'quicktags'     => false,
					] );
					?>
					<div class="wpac-modal-preview__content">
						<?php echo wp_kses_post( $component['html'] ); ?>
					</div>
				</div>
			<?php endforeach; ?>

			<div class="wpac-modal__action">
				<button id="wpac-modal-insert-btn" class="button button-primary"><?php esc_html_e( 'Insert into post' ); ?></button>
			</div>
		</div>
	</div>
</div>
