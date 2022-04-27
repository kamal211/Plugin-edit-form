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


function form_plugin()
{
        
        $form = '';
        $form .='<h2>Contact us </h2>';
        $form .= '<form method="post" action="http://localhost/wordpress/thanks/" >';
        if (get_option('Name') == 1){

        $form .='<label for="Name">Name </label>';
        $form .='<input type="text" name="Name" class="form-control" placeholder="enter your name">';
 
        }        
        if (get_option('Email') == 1){

        $form .='<label for="Email">Email </label>';
        $form .='<input type="email" name="Email" class="form-control" placeholder="enter your email">';
        }
        if (get_option('Phone-number')== 1){

        $form .='<label for="Phone number">Phone number </label>';
        $form .='<input type="num" name="Phone-number" class="form-control" placeholder="enter your number">';

        }
        if (get_option('Company')==1){

        $form .='<label for="Company">Company </label>';
        $form .='<input type="text" name="Company" class="form-control" placeholder="enter your Company">';
        }
        
        // $form .='<label for="Subject">Subject </label>';
        // $form .='<input type="text" name="Subject" class="form-control" placeholder="enter your Subject">';

        
        // $form .='<label for="Question">Question</label>';
        // $form .='<input type="text" name="Question" class="form-control" placeholder="enter your Question">';

        $form .= '<br/> <input type="submit" name="form_submit" value="send your information" class="btn btn-md btn-primary ">';
        $form .= '</form>';


        
        return $form;
        

}
add_filter( 'show_admin_bar', '__return_false');

// function donate_shortcode() {
        
//         $hassan = get_option('Name') ;
//         echo $hassan;
//         }
        add_shortcode('donate', 'form_plugin');
 
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
