<?php
/**
 * @package inc2734/wp-awesome-components
 * @author inc2734
 * @license GPL-2.0+
 */

return [
	'balloon' => [
		'label' => __( 'Balloon', 'inc2734-wp-awesome-components' ),
		'html'  => sprintf(
			'<div class="wpac-balloon mceNonEditable">
				<div class="wpac-balloon__person mceNonEditable">
					<div class="wpac-balloon__figure mceEditable">
						<img src="https://0.gravatar.com/avatar/00000000000000000000000000000000?s=128&d=mp&r=g" alt="">
					</div>
					<div class="wpac-balloon__name mceEditable">%1$s</div>
				</div>
				<div class="wpac-balloon__body mceEditable">
					%2$s
				</div>
			</div>',
			esc_html__( 'Name', 'inc2734-wp-awesome-components' ),
			esc_html__( 'Balloon', 'inc2734-wp-awesome-components' )
		),
	],

	'balloon--reverse' => [
		'label' => __( 'Balloon (Reverse)', 'inc2734-wp-awesome-components' ),
		'html'  => sprintf(
			'<div class="wpac-balloon wpac-balloon--reverse mceNonEditable">
				<div class="wpac-balloon__person mceNonEditable">
					<div class="wpac-balloon__figure mceEditable">
						<img src="https://0.gravatar.com/avatar/00000000000000000000000000000000?s=128&d=mp&r=g" alt="">
					</div>
					<div class="wpac-balloon__name mceEditable">%1$s</div>
				</div>
				<div class="wpac-balloon__body mceEditable">
					%2$s
				</div>
			</div>',
			esc_html__( 'Name', 'inc2734-wp-awesome-components' ),
			esc_html__( 'Balloon', 'inc2734-wp-awesome-components' )
		),
	],
];
