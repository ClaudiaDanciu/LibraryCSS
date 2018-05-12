
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" crossorigin="anonymous">
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css">
        <link href="../css/cssnew.css" rel="stylesheet" type="text/css"/>
        <title>SignUp</title>
    </head>

    <body>

        <!-- Begin page -->
        <div class="accountbg"></div>
        <div class="wrapper-page">

            <div class="card">
                <div class="card-body">

                    <h3 class="text-center mt-0 m-b-15">
                        <a href="index.html" class="logo logo-admin"><img src="../Images/SL@1X.png" height="40" alt="logo"></a>
                    </h3>

                    <div class="p-3">
                        <form class="form-horizontal" method="post">

                            <div class="row">
                                <div class="col-12">
                                    <input  class="form-control"  name="email_address" type="email" required="" placeholder="Email">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-12">
                                    <input class="form-control" name="username" type="text" required="" placeholder="Username">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-12">
                                    <input class="form-control" name="password" type="password" required="" placeholder="Password">
                                </div>
                            </div>

                           

                            
                            <div class="row">
                                <div class="col-12">
                                    <input class="form-control" name="first_name" type="text" required="" placeholder="First Name">
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-12">
                                    <input class="form-control" name="surname" type="text" required="" placeholder="Surname">
                                </div>
                            </div>
                            
                            
                            
                            <div class="row">
                                <div class="col-12">
                                    <input class="form-control" name="house_number" type="text" required="" placeholder="House Number">
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-12">
                                    <input class="form-control" name="postcode" type="text" required="" placeholder="Post Code">
                                </div>
                            </div>
                             <div class="row">
                                <div class="col-12">
                                    <input class="form-control" name="telephone" type="text" required="" placeholder="Phone Number">
                                </div>
                            </div>
                           <div class="row">
                                <div class="col-12">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                                        <label class="custom-control-label font-weight-normal" for="customCheck1">I accept <a href="#" class="text-muted">Terms and Conditions</a></label>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center row m-t-20">
                                <div class="col-12">
                                    <button class="btn btn-danger btn-block waves-effect waves-light" type="submit" value="submit">Register</button>
                                </div>
                            </div>
                            
                            <div class="m-t-10 mb-0 row">
                                <div class="col-12 m-t-20 text-center">
                                    <a href="../Login/Login.php" class="text-muted">Already have account?</a>
                                </div>
                            </div>
                            
                        </form>
                        
                        <?php
                       
           const DB_DSN = 'mysql:host=localhost;dbname=Library';
           const DB_USER = 'root';
           const DB_PASS = NULL;


           try {
               $pdo = new PDO(DB_DSN, DB_USER. DB_PASS);
           } catch (PDOException $ex) {
               die($ex->getMessage());
           }
   
           $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
           $stmt2 = $pdo->prepare("INSERT INTO Member(first_name, surname, username, password, email_address, telephone, house_number, postcode)
                                   VALUES(:first_name, :surname, :username, :password, :email_address, :telephone, :house_number, :postcode )");

           if (!empty($_POST)) {
               $stmt2->execute([
                   'first_name' => $_POST['first_name'],
                   'surname' => $_POST['surname'],
                   'username' => $_POST['username'],
                   'password' => $_POST['password'],
                   'email_address' => $_POST['email_address'],
                   'telephone' => $_POST['telephone'],
                   'house_number' => $_POST['house_number'],
                   'postcode' => $_POST['postcode'],
               ]);
       
   
           echo "Thank you, you’ve been registered.";
           }
                        
 

                        
                ?>
                        
                        
                    </div>

                </div>
            </div>
        </div>

    </body>
</html>