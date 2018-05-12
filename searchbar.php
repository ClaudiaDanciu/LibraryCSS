

<!DOCTYPE html>

<html>
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" crossorigin="anonymous">
    <link href="css/cssnew.css" rel="stylesheet" type="text/css"/>
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <title>About Me</title>
    

    </head>
    <body class="fixed-left">
        
        <!-- Begin page -->
    <div id="wrapper">
        <!--navbarleft-->   
        <div class="left side-menu">
            <button type="button" class="button-menu-mobile button-menu-mobile-topbar open-left waves-effect">
            <i class="fa fa-book"></i>
            </button>
        <!--logo-->    
        <div class="topbar-left">
            <div class="text-center">
                <a href="../index.php" class="logo"><img src="Images/SL@1X.png" height="40" alt="logo"></a>
            </div>
        <!--end logo--> 
        
            <!--profile pic-->  
            <div class="text-center">
                <img src="Images/profilepic.png" alt="Profile" class="rounded-circle" data-holder-rendered="true">
            </div>
            
        </div>
        

            <!--end profile pic-->  
            <!--menu-->  
            <div class="sidebar-inner slimscrollleft">
                <div id="sidebar-menu">
                <ul>
                <li class="menu-title">Main</li>

                <li>
                    <a href="#" class="waves-effect">
                    <i class="fa fa-book"></i>
                    <span>Books</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="waves-effect">
                    <i class="fa fa-calendar"></i>
                    <span>Reserve</span>
                    </a>
                </li>
                <li>
                   <a href="#" class="waves-effect">
                   <i class="fa fa-history"></i>
                   <span>History</span>
                   </a>
               </li>
               <li>
                   <a href="#" class="waves-effect">
                   <i class="fa fa-cog"></i>
                   <span> Settings</span>
                   </a>
               </li>
               <li>
                   <a href="#" class="waves-effect">
                   <i class="fa fa-money"></i>
                   <span> Fines</span>
                   </a>
               </li>
               </ul> 
                </div>
            </div>
        </div>
         <!--end menu-->  
        
         
         <!--page content-->  
 <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="page-content-wrapper ">
                        <div class="container-fluid">
                          
                            <!-- Top Bar Start -->
                            <div class="topbar">

                                <nav class="navbar-custom">

                                    <ul class="list-inline float-right mb-0">
                                        
                                        <li class="list-inline-item dropdown notification-list">
                                            <a class="nav-link dropdown-toggle arrow-none waves-effect nav-user" data-toggle="dropdown" href="Logout/Logout.php" role="button"
                                               aria-haspopup="false" aria-expanded="false">
                                                
                                                <i class="fa fa-power-off " style="color: white"></i>
                                            </a>
                                        </li>
                                     </ul>
                                    <ul class="list-inline menu-left mb-0">
                                        <li class="col-lg-6 hide-phone app-search">
                                            <form role="search" class="" method="post" action="searchbar.php" name="search"  >
                                                <input  type="text" placeholder="Book Title/Author/ISBN/Keywords" class="form-control float-left"  />
                                                <input  class="float-right btn-sm" type="submit" name="submit" value="search" /> 
<!--                                                <div id="search">-->
<!--                                                <a href=""><i class="fa fa-search"></i></a>-->
                                                
<!--                                                </div>-->
                                            </form>
                                        </li>
                                    </ul>

                                    <div class="clearfix"></div>

                                </nav>

                                
                        
    
                    <!-- Top Bar End -->
                     

<?php 
//load database connection
require_once 'Login/db-config.php';
// Search from MySQL database table
/* @var $_POST type */
//$search = filter_var($_POST['search'], FILTER_SANITIZE_STRING);

$search= $_POST['search'];//why do I have an error...how should I manage this?

$query = $pdo->prepare("SELECT * FROM Book_info WHERE book_title LIKE '%$search%' OR ISBN LIKE '%$search%' OR type_id LIKE '%$search'  LIMIT 0 , 10");
//Binds a value to a parameter
//Binds a value to a corresponding named or question mark placeholder in the SQL
//statement that was used to prepare the statement.
//PARAM_STR (integer)Represents the SQL CHAR, VARCHAR, or other string data type.
$query->bindValue(1, "%$search%", PDO::PARAM_STR);
$query->execute();
// Display search result
if (!$query->rowCount() == 0) {
    echo "Search found :<br/>";
    echo "<table style=\"font-family:arial;color:#333333; margin-left: 200px; margin-top: 100px;\">";	
    echo "<tr><td style=\"border-style:solid;border-width:1px;border-color:#5b6be8;background:#5b6be8;\">Book Title</td><td style=\"border-style:solid;border-width:1px;border-color:#5b6be8;background:#5b6be8;\">ISBN</td><td style=\"border-style:solid;border-width:1px;border-color:#5b6be8;background:#5b6be8;\">type_id</td></tr>";				
    while ($results = $query->fetch()) {
    echo "<tr><td style=\"border-style:solid;border-width:1px;border-color:#5b6be8;\">";			
    echo $results['book_title'];
    echo "</td><td style=\"border-style:solid;border-width:1px;border-color:#5b6be8;\">";
    echo $results['ISBN'];
    echo "</td><td style=\"border-style:solid;border-width:1px;border-color:#5b6be8;\">";
    echo $results['type_id'];
    echo "</td></tr>";				
    }
    echo "</table>";		
    } else {
    echo 'Nothing found';
    }
?>
                     </div>
   </div>
                    </div>
                </div>
 </div>
    </div>                    
</body>
</html>                        