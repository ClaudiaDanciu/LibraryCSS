
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
        <!--page content-->  
        <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="page-content-wrapper ">
                        <div class="container-fluid">
                          
                        
  
           <?php
//            $dsn = "mysql:dbname=library3";
//            $username = "root";
//            $password = "";
           
            
        if(isset($_POST['search'])) {    
           try {
                $conn = new PDO( "mysql:dbname=library3", "root", "" );
                $conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
            } catch (Exception $e) {
                echo "connection failed: ".$e->getMessage();
            }
            
            
            
            $search = $_POST['search'];
            $sql = "SELECT * FROM book_info WHERE book_title LIKE '%$search%' OR ISBN LIKE '%$search%' ";
            
            
            echo "<table class='table table-striped'><thead><tr>"
                    . "<th>Book Title</th>"
                    . " <th>ISBN</th>"
                    . "<th>Prose</th>"
                    . "<th>Publisher</th>"
                    . "<th>Demographic</th></tr></thead>";            
            
            
            
                        
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
                        
            
            
            
            
            
            
            
            
            
           
            $conn = null;
        }
        ?>
    </div>         
</div>
 
             
        
        <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>
    </body>
</html>
