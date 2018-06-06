<?php
/**
 * @package inc2734/wp-awesome-components
 * @author inc2734
 * @license GPL-2.0+
 */

return [
	'alert' => [
		'label' => __( 'Alert', 'inc2734-wp-awesome-components' ),
		'html'  => sprintf(
			'<div class="wpac-alert mceNonEditable">
				<div class="wpac-alert__body mceEditable">%1$s</div>
			</div>',
			esc_html__( 'Alert', 'inc2734-wp-awesome-components' )
		),
	],

	'alert--warning' => [
		'label' => __( 'Alert (Warning)', 'inc2734-wp-awesome-components' ),
		'html'  => sprintf(
			'<div class="wpac-alert wpac-alert--warning mceNonEditable">
				<div class="wpac-alert__body mceEditable">%1$s</div>
			</div>',
			esc_html__( 'Alert', 'inc2734-wp-awesome-components' )
		),
	],

	'alert--success' => [
		'label' => __( 'Alert (Success)', 'inc2734-wp-awesome-components' ),
		'html'  => sprintf(
			'<div class="wpac-alert wpac-alert--success mceNonEditable">
				<div class="wpac-alert__body mceEditable">%1$s</div>
			</div>',
			esc_html__( 'Alert', 'inc2734-wp-awesome-components' )
		),
	],
];
