<?php
/**
 * @package inc2734/wp-awesome-components
 * @author inc2734
 * @license GPL-2.0+
 */

return [
	[
		'id'    => 'alert',
		'label' => __( 'Alert', 'inc2734-wp-awesome-components' ),
		'html'  => sprintf(
			'<div class="wpac-alert">%1$s</div>',
			esc_html__( 'Alert', 'inc2734-wp-awesome-components' )
		),
	],
	[
		'id'    => 'alert--warning',
		'label' => __( 'Alert (Warning)', 'inc2734-wp-awesome-components' ),
		'html'  => sprintf(
			'<div class="wpac-alert wpac-alert--warning">%1$s</div>',
			esc_html__( 'Alert', 'inc2734-wp-awesome-components' )
		),
	],
	[
		'id'    => 'alert--success',
		'label' => __( 'Alert (Success)', 'inc2734-wp-awesome-components' ),
		'html'  => sprintf(
			'<div class="wpac-alert wpac-alert--success">%1$s</div>',
			esc_html__( 'Alert', 'inc2734-wp-awesome-components' )
		),
	],
];
