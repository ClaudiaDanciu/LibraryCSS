<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" crossorigin="anonymous">
        <link href="css/cssnew.css" rel="stylesheet" type="text/css"/>
        <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">    
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">   
        <title>Book Page</title>
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
        <!-- Top Bar Start -->
                       
                    <!-- Top Bar End -->
        <!--page content-->  
        <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="page-content-wrapper ">
                        <div class="container-fluid">
                          
                             <!--Top Bar Start--> 
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
                                        <li class="col-lg-6 hide-phone app-search ">
                                            <form role="search" class="" method="post" action="searchbar.php" name="search"  >
                                                <input  type="text" placeholder="Book Title/Author/ISBN/Keywords" class="form-control float-left">
                                                <input  class="float-right btn-sm" type="submit" name="submit" value="search" > 
<!--                                                <div id="search">-->
<!--                                                <a href=""><i class="fa fa-search"></i></a>-->
                                                
<!--                                                </div>-->
                                            </form>
                                        </li>
                                    </ul>

                                    <div class="clearfix"></div>

                                </nav>

                            </div>
                    
                </div>               
            </div>                                              
        </div>                    
<!--        <div class="">
            <ul class="list-inline menu-left mb-0">
                <li class="col-lg-6 hide-phone app-search ">
                    <form action="search.php" method="POST">
                    <input type="text" name="search" placeholder="Book Title/Author/ISBN/Keywords">
                    <button type="submit" name="button-search">Search<i class="fa fa search"></i></button>
                </form>
                </li>
                </ul>
            </div>-->
  
           <?php
            $dsn = "mysql:dbname=Library";
            $username = "root";
            $password = "";
            
            try {
                $conn = new PDO( $dsn, $username, $password );
                $conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
            } catch (Exception $e) {
                echo "connection failed: ".$e->getMessage();
            }
            
            $sql = "SELECT * FROM Book_info";
            
            //replace <ul> with <table>
            echo "<table class='table table-striped'><thead><tr>"
                    . "<th>Book Title</th>"
                    . " <th>ISBN</th>"
                    . "<th>Prose</th>"
                    . "<th>Publisher</th>"
                    . "<th>Demographic</th></tr></thead>";
            //echo "<ul>"; 
            
            
            try {
                $rows = $conn->query( $sql );
                foreach( $rows as $row ) {
                    echo "<tr><td> " .$row["book_title"] . " </td><td>" . $row["ISBN"]
                            . "</td><td> " . $row["type_id"] . "</td><td>" . $row["publisher_id"]
                            ."</td><td>" . $row["demographic_id"] ."</td></tr>";
                    
                }
            }   catch( PDOException $e ) {
                echo "Query failed: " .$e->getMessage();
            }
            
            //echo "</ul>";
            echo "</table>";
            $conn = null;
        ?>
    </div>         
</div>
 
             
        
        <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    </body>
</html>
