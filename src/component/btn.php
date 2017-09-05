<?php
/**
 * @package inc2734/wp-awesome-components
 * @author inc2734
 * @license GPL-2.0+
 */

return [
	[
		'id'    => 'btn',
		'label' => __( 'Button', 'inc2734-wp-awesome-components' ),
		'html'  => sprintf(
			'<a class="wpac-btn" href="#">%1$s</a>',
			esc_html__( 'Button', 'inc2734-wp-awesome-components' )
		),
	],
	[
		'id'    => 'btn--full',
		'label' => __( 'Button (Full size)', 'inc2734-wp-awesome-components' ),
		'html'  => sprintf(
			'<a class="wpac-btn wpac-btn--full" href="#">%1$s</a>',
			esc_html__( 'Button', 'inc2734-wp-awesome-components' )
		),
	],
];
