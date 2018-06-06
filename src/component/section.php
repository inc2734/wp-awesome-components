<?php
/**
 * @package inc2734/wp-awesome-components
 * @author inc2734
 * @license GPL-2.0+
 */

return [
	'section' => [
		'label' => __( 'Section', 'inc2734-wp-awesome-components' ),
		'html'  => sprintf(
			'<div class="wpac-section mceNonEditable">
				<div class="wpac-section__container mceNonEditable">
					<h2 class="wpac-section__title mceEditable">%1$s</h2>
					<div class="wpac-section__body mceEditable">
						%1$s
					</div>
				</div>
			</div>',
			esc_html__( 'Section', 'inc2734-wp-awesome-components' )
		),
	],

	'section--inverse' => [
		'label' => __( 'Section (Inverse)', 'inc2734-wp-awesome-components' ),
		'html'  => sprintf(
			'<div class="wpac-section wpac-section--inverse mceNonEditable">
				<div class="wpac-section__container mceNonEditable">
					<h2 class="wpac-section__title mceEditable">%1$s</h2>
					<div class="wpac-section__body mceEditable">
						%1$s
					</div>
				</div>
			</div>',
			esc_html__( 'Section', 'inc2734-wp-awesome-components' )
		),
	],
];
