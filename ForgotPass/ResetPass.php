<?php
session_start();
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
                                Please confirm your email address and your new password below.
                            </div>
                            
                            <div>
                                <div class="col-xs-12">
                                    <input class="form-control" name='email' type="email" required="" value="<?php echo $_SESSION["email"]; ?>" style="margin-bottom: 15px;">
                                <!-- The php code here picks up the session data where the user has already entered their email address and pre-populates the form field with the email they entered previously -->
                                </div>
                            </div>
                            
                            <div>
                                <div class="col-xs-12">
                                    <input class="form-control" name='password' type="password" required="" placeholder="New password">
                                </div>
                            </div>

                            <div class="m-t-20">
                                <div class="col-12">
                                    <button class="btn btn-danger btn-block" type="submit">Reset password</button>
                                </div>
                            </div>
<?php
$inputs = filter_input_array(INPUT_POST);
// Putting all of $_POST into an array and sanitizing it with filter_input_array
// No longer accessing the superglobal 

const DB_DSN = 'mysql:host=localhost;dbname=Library';
const DB_USER = 'root';
const DB_PASS = '';

if (isset($inputs['password'])AND($inputs['email'])) {

$password=($inputs['password']);
$param_password = password_hash($password, PASSWORD_DEFAULT);
$email=($inputs['email']);
         
    try {
        $pdo = new PDO(DB_DSN, DB_USER, DB_PASS);
    } catch (PDOException $ex) {
        die($ex->getMessage());
    }

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


    $stmt = $pdo->prepare("UPDATE Member SET password='$param_password' WHERE email_address='$email'");

    $stmt->execute();
    
//    $stmtCheckNewPass = $pdo->prepare("SELECT * FROM Member WHERE email_address='$email'");
//    $row = $stmtCheckNewPass->fetch(PDO::FETCH_ASSOC);
//    Above was code trying to check if the password has changed in the database - but you can just check that the statement has executed (see below) which is much neater
    
    if ($stmt->execute() === TRUE)  {
//        if ($row['password==$row=>password'])  {
//      Again - trying to check if the new password in the array matched the new password the user entered - not as good as checking the statement has executed
            echo '<p class="text-muted" style="text-align: center; margin-top: 10px;">Thank you, your password has been updated</br>Please <a href="http://localhost/LibraryCSS/Login/Login.php">log in</a></p>';
        }
        else {
            echo '<p class="text-muted" style="text-align: center; margin-top: 10px;">Unsuccessful, please check that your email address is correct.';
        }
     
}
    
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