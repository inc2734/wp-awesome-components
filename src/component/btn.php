<?php
/**
 * @package inc2734/wp-awesome-components
 * @author inc2734
 * @license GPL-2.0+
 */

return [
	'btn' => [
		'label' => __( 'Button', 'inc2734-wp-awesome-components' ),
		'html'  => sprintf(
			'<a class="wpac-btn mceNonEditable" href="#">
				<span class="mceNonEditable">
					<span class="mceEditable">%1$s
				</span>
			</a>',
			esc_html__( 'Button', 'inc2734-wp-awesome-components' )
		),
	],

	'btn--full' => [
		'label' => __( 'Button (Full size)', 'inc2734-wp-awesome-components' ),
		'html'  => sprintf(
			'<a class="wpac-btn wpac-btn--full mceNonEditable" href="#">
				<span class="mceNonEditable">
					<span class="mceEditable">%1$s
				</span>
			</a>',
			esc_html__( 'Button', 'inc2734-wp-awesome-components' )
		),
	],
];
