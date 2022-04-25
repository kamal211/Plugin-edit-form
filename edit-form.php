<!DOCTYPE html>
 <html lang="en"> 
<head> 
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</body> 
</html>

<?php
 /*
Plugin Name: edit form
Plugin URI: https://wordpress.com
Author: Kamal&shaimae
Author URI: https://wordpress.com
*/

function form_plugin()
{
        $form = '';
        $form .='<h2>Contact us </h2>';
        $form .= '<form method="post" action="http://localhost/wordpress/thanks/" >';
        $form .='<label for="Name">Name </label>';
        $form .='<input type="text" name="Name" class="form-control" placeholder="enter your name">';

        $form .='<label for="Email">Email </label>';
        $form .='<input type="email" name="Email" class="form-control" placeholder="enter your email">';

        $form .='<label for="Phone number">Phone number </label>';
        $form .='<input type="num" name="Phone-number" class="form-control" placeholder="enter your number">';

        
        $form .='<label for="Company">Company </label>';
        $form .='<input type="text" name="Company" class="form-control" placeholder="enter your Company">';

        
        $form .='<label for="Subject">Subject </label>';
        $form .='<input type="text" name="Subject" class="form-control" placeholder="enter your Subject">';

        
        $form .='<label for="Question">Question</label>';
        $form .='<input type="text" name="Question" class="form-control" placeholder="enter your Question">';

        $form .= '<br/> <input type="submit" name="form_submit" value="send your information" class="btn btn-md btn-primary ">';
        $form .= '</form>';


        
        return $form;
        

}
add_shortcode('short-form','form_plugin');

function form_capture()
{
        if(isset($_POST['form_submit']))
        {
                // echo "<pre>";print_r($_POST);echo "</pre>";
                $name = sanitize_text_field($_POST['Name']);
                $Email = sanitize_text_field($_POST['Email']);
                $number = sanitize_text_field($_POST['Phone-number']);
                $company = sanitize_text_field($_POST['Company']);
                $subject = sanitize_text_field($_POST['Subject']);
                $question = sanitize_textarea_field($_POST['Question']);

                $to = 'chaymaeboukhana.solicode@gmail.com';
                $subject = 'Test form gha kanjrbo';
                $message = ''.$name.' - '.$Email.' - '.$number.' - '.$company.' - '.$subject.' - '.$question;

                wp_mail($to,$subject,$message);




        }
}
add_action('wp_head','form_capture'); 

?>
