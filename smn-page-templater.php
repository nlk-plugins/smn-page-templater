<?php
/*
Plugin Name: SMN Page Templater
Plugin URI: http://www.strongmarriagenow.com/
Description: Page Templater plugin to add legacy pages to SMN, based on HarriBellThomas's https://github.com/wpexplorer/page-templater
Version: 1.0.2
Author: Ninthlink, Inc.
Author URI: http://www.ninthlink.com/
*/

class PageTemplater {

	/**
   * A Unique Identifier
   */
	protected $plugin_slug;

        /**
         * A reference to an instance of this class.
         */
        private static $instance;

        /**
         * The array of templates that this plugin tracks.
         */
        protected $templates;


        /**
         * Returns an instance of this class. 
         */
        public static function get_instance() {

                if( null == self::$instance ) {
                        self::$instance = new PageTemplater();
                } 

                return self::$instance;

        } 

        /**
         * Initializes the plugin by setting filters and administration functions.
         */
        private function __construct() {

                $this->templates = array();


                // Add a filter to the attributes metabox to inject template into the cache.
                add_filter(
					'page_attributes_dropdown_pages_args',
					 array( $this, 'register_project_templates' ) 
				);


                // Add a filter to the save post to inject out template into the page cache
                add_filter(
					'wp_insert_post_data', 
					array( $this, 'register_project_templates' ) 
				);


                // Add a filter to the template include to determine if the page has our 
				// template assigned and return it's path
                add_filter(
					'template_include', 
					array( $this, 'view_project_template') 
				);


                // Add your templates to this array.
                $this->templates = array(
                        'smnlegacy-onecol/smnlegacy-template.php'     => 'SMN Legacy (VSL) Blank Page',
                        'smnlegacy-squeeze/smnlegacy-template.php'     => 'SMN Legacy Squeeze Page 1',
                        'smnlegacy-squeeze2/smnlegacy-template.php'     => 'SMN Legacy Squeeze Page 2',
                );
				
        } 


        /**
         * Adds our template to the pages cache in order to trick WordPress
         * into thinking the template file exists where it doens't really exist.
         *
         */

        public function register_project_templates( $atts ) {

                // Create the key used for the themes cache
                $cache_key = 'page_templates-' . md5( get_theme_root() . '/' . get_stylesheet() );

                // Retrieve the cache list. 
				// If it doesn't exist, or it's empty prepare an array
				$templates = wp_get_theme()->get_page_templates();
                if ( empty( $templates ) ) {
                        $templates = array();
                } 

                // New cache, therefore remove the old one
                wp_cache_delete( $cache_key , 'themes');

                // Now add our template to the list of templates by merging our templates
                // with the existing templates array from the cache.
                $templates = array_merge( $templates, $this->templates );

                // Add the modified cache to allow WordPress to pick it up for listing
                // available templates
                wp_cache_add( $cache_key, $templates, 'themes', 1800 );

                return $atts;

        } 

        /**
         * Checks if the template is assigned to the page
         */
        public function view_project_template( $template ) {

                global $post;

                if ( ! isset( $this->templates[ get_post_meta( $post->ID, '_wp_page_template', true ) ] ) ) {
                        return $template;
                } 

                $file = plugin_dir_path(__FILE__). 'templates/' .get_post_meta( 
					$post->ID, '_wp_page_template', true 
				);
				
                // Just to be safe, we check if the file exist first
                if( file_exists( $file ) ) {
                        return $file;
                } 
				else { echo $file; }

                return $template;

        } 


} 

add_action( 'plugins_loaded', array( 'PageTemplater', 'get_instance' ) );

/**
 * I don't know how to do this otherwise...
 */
function smn_page_templater_savemarriage2form( $form_string, $form ) {
  if ( is_page_template( 'smnlegacy-squeeze/smnlegacy-template.php' ) ) {
    // str_replace fix html div wrappers
    $form_string = str_replace( "<div class='gform_body form-group'><div id='gform_fields_3' class='gform_fields left_label form_sublabel_below description_below'>", '<div class="row"><div class="panel">', $form_string );
    $form_string = str_replace( '</div></div>', '', $form_string);
    $form_string = str_replace( "<div class='gform_footer form-group  left_label'> ", '<div class="small-12 large-4 columns">', $form_string);
    $form_string = str_replace( '</form>', '</div></div></form>', $form_string);
    
    // str_replace fix submit button classes
    $form_string = str_replace( 'btn btn-primary', 'alert medium radius', $form_string );
  }
  return $form_string;
}
add_filter( 'gform_get_form_filter', 'smn_page_templater_savemarriage2form', 99, 2 );