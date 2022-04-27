<!DOCTYPE html>
 <html lang="en"> 
<head> 
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</body> 
</html>

<?php
/**
 * Plugin Name:       form contact
 * Plugin URI:        https://example.com/plugins/the-basics/
 * Description:       Handle the basics with this plugin.
 * Version:           1.10.3
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            kamal&shaimae
 * Author URI:        https://author.example.com/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Update URI:        https://example.com/my-plugin/
 * Text Domain:       my-basics-plugin
 * Domain Path:       /languages
 */
add_filter( 'show_admin_bar', '__return_false');

function donate_shortcode() {
  return 'test shortcode';
        }
        add_shortcode('donate', 'donate_shortcode');

add_action( 'admin_menu', 'form_options_page' );
function form_options_page() {
    add_menu_page(
        'Form Contact',
        'Form Contact',
        'manage_options',
        plugin_dir_path(__FILE__) . 'admin.php',
        null,
        'dashicons-admin-generic',
        90
    );
}
?>
