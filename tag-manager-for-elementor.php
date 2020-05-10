<?php
/**
 * @wordpress-plugin
 * Plugin Name: Tag Manager for elementor
 * Version:     11.7
 * Plugin URI:  https://yoa.st/2jc
 * Description: The first true all-in-one SEO solution for WordPress, including on-page content analysis, XML sitemaps and much more.
 * Author:      Team Yoast
 * Author URI:  https://yoa.st/2jc
 * Text Domain: wordpress-seo
 * Domain Path: /languages/
 * License:     GPL v3
 */
 
add_action( 'wp_body_open',function(){
	echo '<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id={THE_TAG_MANAGER_ID}"
	height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->';
} );

add_action( 'wp_head',function(){
	echo "<!-- Google Tag Manager -->
		<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
		new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
		j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
		'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
		})(window,document,'script','dataLayer','{THE_TAG_MANAGER_ID}');</script>
		<!-- End Google Tag Manager -->";
} );



function gtm_elementor_register_options_page() {
  add_options_page('Google Tag Manager For Elementor', 'Plugin Menu', 'manage_options', 'myplugin', 'gtm_elementor_options_page');
}
add_action('admin_menu', 'gtm_elementor_register_options_page');


function gtm_elementor_option_page()
{
  //content on page goes here
}

function gtm_elementor_options_page()
{
?>
  <div>
  <h2>Google Tag Manager For Elementor</h2>
  <form method="post" action="options.php">
  <?php settings_fields( 'gtm_elementor_options_group' ); ?>
  <h3>This is my option</h3>
  <p>Some text here.</p>
  <table>
  <tr valign="top">
  <th scope="row"><label for="gtm_for_elementor">Tag Manager ID</label></th>
  <td><input type="text" id="gtm_for_elementor" name="gtm_for_elementor" value="<?php echo get_option('gtm_for_elementor'); ?>" /></td>
  </tr>
  </table>
  <?php  submit_button(); ?>
  </form>
  </div>
<?php
}

function gtm_elementor_register_settings() {
   add_option( 'gtm_for_elementor', 'Tag Manager ID.');
   register_setting( 'gtm_elementor_options_group', 'gtm_for_elementor', 'gtm_elementor_callback' );
}
add_action( 'admin_init', 'gtm_elementor_register_settings' );