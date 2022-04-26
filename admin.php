<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Document</title>
</head>

<body>
    <section class='container '>
        <h2 class='text-center'>Contact us</h2>
        <form method="post" action="#" class='mx-auto w-50'>
            <div class="form-check">
                <input class="form-check-input mt-4" type="checkbox" name="box-name" id="Name">
                <label for="Name">Name </label>
                <input type="text" name="your_name" class="form-control" placeholder="enter your name">
            </div>
            <div class="form-check">
                <input class="form-check-input mt-4" type="checkbox" name="box-email" id="Email">
                <label for="Email">Email </label>
                <input type="email" name="Email" class="form-control" placeholder="enter your email">
            </div>
            <div class="form-check">
                <input class="form-check-input mt-4" type="checkbox" name="box-phone" id="Phone number">
                <label for="Phone number">Phone number </label>
                <input type="num" name="Phone number" class="form-control" placeholder="enter your number">
            </div>
            <div class="form-check">
                <input class="form-check-input mt-4" type="checkbox" name="box-phone" id="Company">
                <label for="Company">Company </label>
                <input type="text" name="Company" class="form-control" placeholder="enter your Company">
            </div>
            <div class="form-check">
                <input class="form-check-input mt-4" type="checkbox" name="box-phone" id="Subject">
                <label for="Subject">Subject </label>
                <input type="text" name="Subject" class="form-control" placeholder="enter your Subject">
            </div>
            <div class="form-check">
                <input class="form-check-input mt-4" type="checkbox" name="box-phone" id="Subject">
                <label for="Subject">Subject </label>
                <input type="text" name="Subject" class="form-control" placeholder="enter your Subject">
            </div>
            <div class="form-check">
                <input class="form-check-input mt-4" type="checkbox" name="box-phone" id="Question">
                <label for="Question">Question</label>
                <textarea type="text" name="Question" class="form-control" placeholder="enter your Question"></textarea>
            </div>
            <div class="col-auto mt-4">
                <button type="submit" name='submit' class="btn btn-primary mb-3">Save changes</button>
            </div>

        </form>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>


<?php
$data= array($_POST['box-name'],$_POST['box-email']);
$variable = array($namechecked,$emailchecked);



for($i=0; $i<count($data);$i++)
{
  
checkVal($data[$i],$variable[$i]);


}


    function checkVal ($box,$var)
{
  
        if ( isset( $box,$var ) )
              {$var= true;}
        else  
        { 
                $var= false;
        }
       
        update_option( " . $box .", $var);
    }



// if ( isset( $_POST['box-name'] ) )
//       {$namechecked= true;}
// else  
// { 
//     $namechecked= false;
// }

// if ( isset( $_POST['submit'] ) ){
//     echo $_POST['box-name'];
//     update_option( "first_name", $namechecked);} ?>


<?php

// if ( isset( $_POST['submit'] ) ){

//     global $wpdb;


//     $tablename=$wpdb->prefix.'wp_options';

//     $data=array(
//         'option_name' => $_POST['box-name'], 
//         'option_value' => 'true'
//        );


//      $wpdb->insert( $tablename, $data);
// }

?>
