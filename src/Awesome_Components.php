<?php
/**
 * @package inc2734/wp-awesome-components
 * @author inc2734
 * @license GPL-2.0+
 */

namespace Inc2734\WP_Awesome_Components;

class Awesome_Components {

	public function __construct() {
		load_textdomain( 'inc2734-wp-awesome-components', __DIR__ . '/languages/' . get_locale() . '.mo' );

		add_action( 'media_buttons', [ $this, '_media_buttons' ] );
		add_action( 'admin_footer', [ $this, '_edit_form_after_editor' ] );
		add_action( 'admin_enqueue_scripts', [ $this, '_admin_enqueue_scripts' ] );
		add_filter( 'mce_external_plugins', [ $this, '_mce_external_plugins' ] );
		add_filter( 'mce_buttons_2', [ $this, '_mce_buttons_2' ] );
		add_filter( 'inc2734_wp_awesome_components_register_components', [ $this, '_register_components' ] );

		add_action( 'elementor/editor/footer', [ $this, '_edit_form_after_editor' ] );
		add_action( 'elementor/editor/before_enqueue_scripts', [ $this, '_admin_enqueue_scripts' ] );
	}

	/**
	 * Added "Add components" button
	 *
	 * @param  string $editor_id
	 * @return void
	 */
	public function _media_buttons( $editor_id = 'content' ) {
		$post_type = get_post_type();
		if ( ! $post_type ) {
			return;
		}

		$post_type_object = get_post_type_object( $post_type );
		if ( ! $post_type_object || ! $post_type_object->public ) {
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
		$post_type = get_post_type();

		if ( ! $post_type ) {
			return;
		}

		if ( false === get_post_type_object( $post_type )->public ) {
			return;
		}

		ob_start();
		include( __DIR__ . '/view/modal.php' );
		// @codingStandardsIgnoreStart
		echo ob_get_clean();
		// @codingStandardsIgnoreEnd
	}

	/**
	 * Enqueue assets
	 *
	 * @return void
	 */
	public function _admin_enqueue_scripts() {
		$relative_path = '/vendor/inc2734/wp-awesome-components/src/assets/js/app.js';
		$src  = get_template_directory_uri() . $relative_path;
		$path = get_template_directory() . $relative_path;

		wp_enqueue_script(
			'wp-awesome-components',
			$src,
			[ 'jquery' ],
			filemtime( $path ),
			true
		);

		wp_localize_script(
			'wp-awesome-components',
			'wp_awesome_components_text',
			[
				'insert_html' => esc_html__( 'Insert HTML', 'inc2734-wp-awesome-components' ),
				'highlighter' => esc_html__( 'Highlighter', 'inc2734-wp-awesome-components' ),
			]
		);

		$relative_path = '/vendor/inc2734/wp-awesome-components/src/assets/css/app.css';
		$src  = get_template_directory_uri() . $relative_path;
		$path = get_template_directory() . $relative_path;

		wp_enqueue_style(
			'wp-awesome-components',
			$src,
			[],
			filemtime( $path )
		);
	}

	/**
	 * Added tinymce-noneditable plugin
	 *
	 * @param array $plugin_array
	 * @return array
	 */
	public function _mce_external_plugins( $plugin_array ) {
		$plugin_array['noneditable'] = get_template_directory_uri() . '/vendor/inc2734/wp-awesome-components/src/assets/js/tinymce/noneditable/plugin.min.js';
		$plugin_array['inserthtml']  = get_template_directory_uri() . '/vendor/inc2734/wp-awesome-components/src/assets/js/tinymce/inserthtml/plugin.js';
		$plugin_array['highlighter'] = get_template_directory_uri() . '/vendor/inc2734/wp-awesome-components/src/assets/js/tinymce/highlighter/plugin.js';
		return $plugin_array;
	}

	/**
	 * Add original buttons
	 *
	 * @param json $buttons
	 * @return json
	 */
	public function _mce_buttons_2( $buttons ) {
		return array_merge(
			$buttons,
			[
				'inserthtml',
				'highlighter',
			]
		);
	}

	public function _register_components( $components ) {
		foreach ( glob( __DIR__ . '/component/*.php' ) as $file ) {
			$_components = include( $file );

			foreach ( $_components as $component_id => $component ) {
				$components[ $component_id ] = [
					'label' => $component['label'],
					'html'  => trim( $component['html'] ),
				];
			}
		}

		return $components;
	}
}
