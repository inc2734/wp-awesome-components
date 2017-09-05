<?php
/**
 * @package inc2734/wp-awesome-components
 * @author inc2734
 * @license GPL-2.0+
 */

class Inc2734_WP_Awesome_Components {

	public function __construct() {
		load_textdomain( 'inc2734-wp-awesome-components', __DIR__ . '/languages/' . get_locale() . '.mo' );

		$includes = array(
			'/abstract',
		);
		foreach ( $includes as $include ) {
			foreach ( glob( __DIR__ . $include . '/*.php' ) as $file ) {
				if ( false !== strpos( basename( $file ), '_' ) ) {
					continue;
				}

				require_once( $file );
			}
		}

		add_action( 'media_buttons'         , [ $this, '_media_buttons' ] );
		add_action( 'edit_form_after_editor', [ $this, '_edit_form_after_editor' ] );
		add_action( 'admin_enqueue_scripts' , [ $this, '_admin_enqueue_scripts' ] );
		add_filter( 'inc2734_wp_awesome_components_register_components', [ $this, '_register_components' ] );
	}

	/**
	 * Added "Add components" button
	 *
	 * @param  string $editor_id
	 * @return void
	 */
	public function _media_buttons( $editor_id = 'content' ) {
		if ( false === get_post_type_object( get_post_type() )->publicly_queryable ) {
			return;
		}
		?>

		<button type="button" id="button-wp-awesome-components" class="button" href="#" data-editor="<?php echo esc_attr( $editor_id ); ?>">
			<span class="dashicons dashicons-editor-kitchensink"></span>
			<?php esc_html_e( 'Add Components', 'inc2734-wp-awesome-components' ); ?>
		</button>
		<?php
	}

	/**
	 * Added modal html
	 *
	 * @return void
	 */
	public function _edit_form_after_editor() {
		if ( false === get_post_type_object( get_post_type() )->publicly_queryable ) {
			return;
		}

		ob_start();
		include( __DIR__ . '/view/modal.php' );
		echo ob_get_clean();
	}

	/**
	 * Enqueue assets
	 *
	 * @return void
	 */
	public function _admin_enqueue_scripts() {
		wp_enqueue_script(
			'wp-awesome-components',
			home_url( str_replace( ABSPATH, '', __DIR__ ) . '/assets/js/app.js' ),
			[ 'jquery' ],
			false,
			true
		);

		wp_enqueue_style(
			'wp-awesome-components',
			home_url( str_replace( ABSPATH, '', __DIR__ ) . '/assets/css/app.css' )
		);
	}

	public function _register_components( $components ) {
		foreach ( glob( __DIR__ . '/component/*.php' ) as $file ) {
			$_components = include( $file );

			foreach ( $_components as $component ) {
				$components[ $component['id'] ] = [
					'id'    => $component['id'],
					'label' => $component['label'],
					'html'  => trim( $component['html'] ),
				];
			}
		}

		return $components;
	}
}
