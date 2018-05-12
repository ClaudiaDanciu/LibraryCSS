<?php
session_start();
if (!empty($_SESSION)) {
            session_unset();
        }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" crossorigin="anonymous">
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css">
        <link href="../css/cssnew.css" rel="stylesheet" type="text/css"/>
        <title>Forgot Password</title>
    </head>


    <body>

        <!-- Begin page -->
        <div class="accountbg"></div>
        <div class="wrapper-page">

            <div class="card">
                <div>

                    <h3 class="text-center mt-0 m-b-15">
                        <a href="../index.php" class="logo logo-admin"><img src="../Images/SL@1X.png" height="40" alt="logo"></a>
                    </h3>
                    
                   
                    <div class="p-3">
                        <form class="form-horizontal" method="POST">

                            <div class="alert alert-info">
                                Please enter your email address to reset your password.
                            </div>

                            <div>
                                <div class="col-xs-12">
                                    <input class="form-control" name='email' type="email" required="" placeholder="Email">
                                </div>
                            </div>

                            <div class="m-t-20">
                                <div class="col-12">
                                    <button class="btn btn-danger btn-block" type="submit">Go to password reset</button>
                                </div>
                            </div>
<?php
$inputs = filter_input_array(INPUT_POST);
// Putting all of $_POST into an array and sanitizing it with filter_input_array
// No longer accessing the superglobal 

if(!empty($inputs)){ 
    $_SESSION["email"] = $inputs['email'];
}

const DB_DSN = 'mysql:host=localhost;dbname=Library';
const DB_USER = 'root';
const DB_PASS = '';

if (isset($inputs['email'])) {

$email = $inputs['email'];
    
    try {
        $pdo = new PDO(DB_DSN, DB_USER, DB_PASS);
    } catch (PDOException $ex) {
        die($ex->getMessage());
    }

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


    $stmt = $pdo->prepare("SELECT * FROM Member WHERE email_address='$email'");

    $stmt->execute();

    $row = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($row)  {
            header('Location: http://localhost/LibraryCSS/ForgotPass/ResetPass.php');
        }
        else {
            echo '<p class="text-muted" style="text-align: center; margin-top: 10px;">We don\'t recognise your email address, please try again.';
            if (!empty($_SESSION["email"])) {
                unset($_SESSION["email"]);
            }
            // Here, the session data for the email address must be unset to allow the user to input their correct email address and replace the session data so that the next page can pre-populate the form
            // Otherwise if the user enters a wrong email, then a correct one, it errors
        }          
}
// Sending the email - sadly this is really confusing and hard.
// Needs to have some stuff I don't fully understand set up in php.ini (maybe!)
// To
//$to = '$email'; 
//
//// Subject
//$subject = 'Sky Library password reset';
//
//// Message
//$message = '
//<html>
//<head>
//  <title>Reset your Sky Library Password</title>
//</head>
//<body>
//  <p>Hi $user[first_name]</br>Please reset your password by clicking on the link below.<br>
//      <a href=\'http://localhost/LibraryCSS/Login/LoginJess.php\'></a></p>
//</body>
//</html>
//';
//
//// To send HTML mail, the Content-type header must be set
//$headers[] = 'MIME-Version: 1.0';
//$headers[] = 'Content-type: html; charset=iso-8859-1';
//
//// Additional headers
//$headers[] = 'From: Sky Library <alice.creasey@hotmail.com>';
//
//// Mail it
//mail($to, $subject, $message, implode("\r\n", $headers));  
?>
                        </form>



                    </div>

                </div>
            </div>
        </div>
        
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>