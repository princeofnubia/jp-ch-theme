<?php
/**
 *
 * @package [Parent Theme]
 * @author  gaviasthemes <gaviasthemes@gmail.com>
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU Public License
 * 
 */

function tevily_child_scripts() {
   wp_enqueue_style( 'tevily-parent-style', get_template_directory_uri(). '/style.css');
   wp_enqueue_style( 'tevily-child-style', get_stylesheet_uri());
}
add_action( 'wp_enqueue_scripts', 'tevily_child_scripts', 9999 );

function enqueue_custom_template_assets() {
   if (is_page_template('reg_page.php')) {
      wp_enqueue_script('jquery');
      wp_enqueue_script( 'popper', 'https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js');
      wp_enqueue_script( 'bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js');
       wp_enqueue_style('style.css', get_stylesheet_directory_uri() . '/reg/style.css');
       wp_enqueue_script('modal-js', get_stylesheet_directory_uri() . '/reg/modal.js');
       wp_enqueue_script('script-js', get_stylesheet_directory_uri() . '/reg/script.js');
      
   }
}
add_action('wp_enqueue_scripts', 'enqueue_custom_template_assets');
