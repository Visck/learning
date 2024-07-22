<?php
/**
 * Plugin Name: MV_SLIDER
 * Plugin URI: https://visck.io
 * Description: My Plugin's decription
 * Version: 1.0
 * Requires at least: 5.6
 * Author: Igor Cardoso
 * Author  URI: https://music.visck.io
 * License: GPL v2 or later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: mv-slider
 * Domain Path: /languages
 */

 /*
{Plugin Name} is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
any later version.

{Plugin Name} is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with {Plugin Name}. If not, see {URI to Plugin License}.
*/

/* 
deny access directly 
*/

if (! defined ('ABSPATH')){
    die ( ' You are not able to access directly , please access through Wordpress'); 
    exit;

    
}

/* creating class with verification block, this accept than other
programmer can replace this class through another function.php by another theme or plugin */
/* verify another class with the same name too */
if ( ! class_exists('MV_Slider') ){

/* creating my first class */
    class MV_Slider{
        
        /**Creating method , class construct  */
        /** construct method is the method run automatically when we instance this object by class  */
        function __construct (){

            /** for call all constants in this plugin  */
            $this->define_constants();

        }
        /** creating constants in public method */
        public function define_constants(){
            /** define my path in a constant for better workflow, then I don't need repeat the plugin_dir_Path   */
            
            /** define path of file */
            define('MV_SLIDER_PATH', plugin_dir_path(__FILE__));
            
            /** define address web  */
            define('MV_SLIDER_URL', plugin_dir_url(__FILE__));
            
            define('MV_SLIDER_VERSION', '1.0.0' );
 
        }

        /** setting methods for activate, deactivate and unistall my plugin in the main class */
        /** I won't pass my methods through class constructor in this time, but I could. */

        /** I'll call all before to instance my classes  */
        public static function activate (){
            update_option('rewrite_rules', '');
        }

        public static function deactivate (){
            flush_rewrite_rules();

        }

        public static function unistall(){

        
        }

    }
}

/** creating block for to instance the object from classe and run the plugin , inside the verification block  */

/** verify if class exist then we need to do */
if ( class_exists ('MV_Slider')){

    register_activation_hook( __FILE__, array('MV_Slider', 'activate'  ));
    /** for reference some method inside the class, I need to use array
     * Inside array I insert the class name, then method name all in string type
     *  */ 

     register_deactivation_hook( __FILE__, array('MV_Slider', 'deactivate'  ));
     register_uninstall_hook( __FILE__, array('MV_Slider', 'uninstall'  ));

    /** create a variable for my to instance my class*/
    /** if add my variable by NEW with variable and () then I'll calling together with Construct method , then 
     * all is inside of my construct method will be running
     */
    $mv_slider = new MV_Slider ();

}