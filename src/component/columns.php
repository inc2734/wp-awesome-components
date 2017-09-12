<?php
/**
 * @package inc2734/wp-awesome-components
 * @author inc2734
 * @license GPL-2.0+
 */

return [
	[
		'id'    => 'columns-1-1-2',
		'label' => __( 'columns (PC: 1, TB: 1, SP: 2)', 'inc2734-wp-awesome-components' ),
		'html'  => sprintf(
			'<div class="wpac-columns mceNonEditable">
				<div class="wpac-columns__row">
					<div class="wpac-columns__col wpac-columns__col--1-1 wpac-columns__col--lg-1-2">
						<div class="wpac-columns__col-inner mceEditable">
							%1$s
						</div>
					</div>
					<div class="wpac-columns__col wpac-columns__col--1-1 wpac-columns__col--lg-1-2">
						<div class="wpac-columns__col-inner mceEditable">
							%1$s
						</div>
					</div>
				</div>
			</div>',
			esc_html__( 'Columns', 'inc2734-wp-awesome-components' )
		),
	],
	[
		'id'    => 'columns-2-2-2',
		'label' => __( 'columns (PC: 2, TB: 2, SP: 2)', 'inc2734-wp-awesome-components' ),
		'html'  => sprintf(
			'<div class="wpac-columns mceNonEditable">
				<div class="wpac-columns__row">
					<div class="wpac-columns__col wpac-columns__col--1-2">
						<div class="wpac-columns__col-inner mceEditable">
							%1$s
						</div>
					</div>
					<div class="wpac-columns__col wpac-columns__col--1-2">
						<div class="wpac-columns__col-inner mceEditable">
							%1$s
						</div>
					</div>
				</div>
			</div>',
			esc_html__( 'Columns', 'inc2734-wp-awesome-components' )
		),
	],
	[
		'id'    => 'columns-1-1-3',
		'label' => __( 'columns (PC: 1, TB: 1, SP: 3)', 'inc2734-wp-awesome-components' ),
		'html'  => sprintf(
			'<div class="wpac-columns mceNonEditable">
				<div class="wpac-columns__row">
					<div class="wpac-columns__col wpac-columns__col--1-1 wpac-columns__col--lg-1-3">
						<div class="wpac-columns__col-inner mceEditable">
							%1$s
						</div>
					</div>
					<div class="wpac-columns__col wpac-columns__col--1-1 wpac-columns__col--lg-1-3">
						<div class="wpac-columns__col-inner mceEditable">
							%1$s
						</div>
					</div>
					<div class="wpac-columns__col wpac-columns__col--1-1 wpac-columns__col--lg-1-3">
						<div class="wpac-columns__col-inner mceEditable">
							%1$s
						</div>
					</div>
				</div>
			</div>',
			esc_html__( 'Columns', 'inc2734-wp-awesome-components' )
		),
	],
	[
		'id'    => 'columns-3-3-3',
		'label' => __( 'columns (PC: 3, TB: 3, SP: 3)', 'inc2734-wp-awesome-components' ),
		'html'  => sprintf(
			'<div class="wpac-columns mceNonEditable">
				<div class="wpac-columns__row">
					<div class="wpac-columns__col wpac-columns__col--1-3">
						<div class="wpac-columns__col-inner mceEditable">
							%1$s
						</div>
					</div>
					<div class="wpac-columns__col wpac-columns__col--1-3">
						<div class="wpac-columns__col-inner mceEditable">
							%1$s
						</div>
					</div>
					<div class="wpac-columns__col wpac-columns__col--1-3">
						<div class="wpac-columns__col-inner mceEditable">
							%1$s
						</div>
					</div>
				</div>
			</div>',
			esc_html__( 'Columns', 'inc2734-wp-awesome-components' )
		),
	],
];
