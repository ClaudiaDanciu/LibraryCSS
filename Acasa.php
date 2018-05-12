
<?php
// Initialize the session (don't forget to close it on logout)
session_start();
 
// If session variable is not set it will redirect to login page
if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
  header("location: Login/Login.php");
  exit;
}
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
                    <!-- Top Bar End -->

                   
                           
                            <div class="row">
                                <div class="col-sm-6 col-md-6 col-lg-6">
                                    <div class="page-title-box">
                                        
                                        <h1 class="page-title">Loaned books</h1>
                                    </div>
                                </div>
                            </div>

                          <!--  
                            <div class="row">
                                
                                <div>
                                    <h1 id="hello">Hello </h1>
                                    <h5>Are you looking for a new adventure? Find a new book</h5>
                                </div>

                                    <div class="row">
                                    <div id="search-bar">
                                            <div class="col-lg-6">
                                              <div class="input-group">
                                                <input type="text" class="form-control" placeholder="Book Title/Authot/ISBN/Keywords">
                                                <span class="input-group-btn">
                                                  <button class="btn btn-default" type="button" id="search">Search</button>
                                                </span>
                                              </div>
                                            </div>
                                        </div>
                                    </div> -->
                                
                            </div>    

       
        <div class="row">
            <div class="col-md-6 col-lg-6 col-xl-3">
                
                <!-- Simple card -->
                <div class="card m-b-30">
                    <img class="card-img-top img-fluid" src="Images/DaVinciCode.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h4  class="card-title font-20 mt-0">DaVinci Code</h4>
                                <div class="d-flex flex-row ">
                                    <div class="col-6 align-self-center">
                                        <div class="round">
                                            <p>11</p>
                                        </div>
                                                   
                                    </div>
                                            <p style="padding-top: 7%"> Days Left</p>
    
                                                                                                      
                                </div>
                                    <p class="card-text">The author brings Leonardo da Vinci to life in this exciting new biography.</p>
                                    <a href="#" class="btn btn-primary waves-effect waves-light">Extend Loan</a>
                        </div>
                </div>
            </div><!-- end col -->
                                    
            <div class="col-md-6 col-lg-6 col-xl-3">
                
                <!-- Simple card -->
                <div class="card m-b-30">
                    <img class="card-img-top img-fluid" src="Images/mengele.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title font-20 mt-0">Mengele</h4>
                                <div class="d-flex flex-row ">
                                    <div class="col-6 align-self-center">
                                        <div class="round">
                                            <p>6</p>
                                        </div>
                                                   
                                    </div>
                                        <p style="padding-top: 7%"> Days Left</p>
                                </div>
                                     <p class="card-text"> Josef Mengele the author brings Leonardo(1911-1979)in this exciting new biography </p>
                                     <a href="#" class="btn btn-primary waves-effect waves-light">Extend Loan</a>
                        </div>
                </div>
                
            </div><!-- end col -->
                                    
            <div class="col-md-6 col-lg-6 col-xl-3">
                
                <!-- Simple card -->
                <div class="card m-b-30">
                    <img class="card-img-top img-fluid" src="Images/uX.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title font-20 mt-0">UX Book</h4>
                                <div class="d-flex flex-row ">
                                    <div class="col-6 align-self-center">
                                        <div class="round">
                                            <p>3</p>
                                        </div>
                                    </div>
                                        <p style="padding-top: 7%"> Days Left</p>
                                </div>
                                        <p class="card-text">The User Experience team of one.The User Experience team of one</p>
                                        <a href="#" class="btn btn-primary waves-effect waves-light">Extend Loan</a>
                        </div>
                </div>
                
            </div><!-- end col -->
                                    
            <div class="col-md-6 col-lg-6 col-xl-3">
                
                <!-- Simple card -->
                <div class="card m-b-30">
                    <img class="card-img-top img-fluid" src="Images/theSecret.jpeg" alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title font-20 mt-0">The Secret</h4>
                                <div class="d-flex flex-row ">
                                    <div class="col-6 align-self-center">
                                        <div class="round">
                                            <p>5</p>
                                    </div>
                                    </div>
                                <p style="padding-top: 7%"> Days Left</p>
    
                                </div>
                                    <p class="card-text">The Secret is a best-selling 2006 self-help book by Rhonda Byrne great</p>
                                    <a href="#" class="btn btn-primary waves-effect waves-light">Reserve now</a>
                        </div>
                </div>
                
            </div><!-- end col -->
        </div>                    
                            
        <div class="col-sm-12 col-md-12 col-lg-12">
             <div class="page-title-box">
                                        
              <h1 class="page-title rightnavtext">In the last period you loaned several books. Our users, read in average almost the same number of books/month. Keep on going reader! </h1>
             </div>
        </div>                        
        
    <div> 
        
    <div class="row">
        <div class="col-sm-6 col-md-6 col-lg-6">
            <div class="page-title-box">
                <h1 class="page-title">Latest Books</h1>
            </div>
        </div>
    </div>
        <div class="row">
            <div class="col-md-6 col-lg-6 col-xl-3">
                <!-- Simple card -->
                <div class="card m-b-30">
                    <img class="card-img-top img-fluid" src="Images/DaVinciCode.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h4  class="card-title font-20 mt-0">DaVinci Code</h4>
                                <div class="d-flex flex-row ">
                                    <div class="col-6 align-self-center">
                                        <div class="round">
                                            <p>2</p>
                                        </div>
                                                   
                                    </div>
                                        <p style="padding-top: 7%">Availables</p>
                                </div>
                                    <p class="card-text">The author brings Leonardo da Vinci to life in this exciting new biography.</p>
                                    <a href="#" class="btn btn-primary waves-effect waves-light">Reserve now</a>
                        </div>
                </div>
            </div><!-- end col -->
                                    
            <div class="col-md-6 col-lg-6 col-xl-3">
                
                <!-- Simple card -->
                <div class="card m-b-30">
                    <img class="card-img-top img-fluid" src="Images/mengele.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title font-20 mt-0">Mengele</h4>
                                <div class="d-flex flex-row ">
                                    <div class="col-6 align-self-center">
                                        <div class="round">
                                            <p>1</p>
                                        </div>
                                    </div>
                                        <p style="padding-top: 7%">Available</p>
                                </div>
                                        <p class="card-text"> Josef Mengele the author brings Leonardo(1911-1979)in this exciting new biography </p>
                                        <a href="#" class="btn btn-primary waves-effect waves-light">Reserve now</a>
                        </div>
                </div>
                
            </div><!-- end col -->
                                    
            <div class="col-md-6 col-lg-6 col-xl-3">
                <!-- Simple card -->
                <div class="card m-b-30">
                    <img class="card-img-top img-fluid" src="Images/uX.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title font-20 mt-0">UX Book</h4>
                                <div class="d-flex flex-row ">
                                    <div class="col-6 align-self-center">
                                        <div class="round">
                                            <p>3</p>
                                        </div>
                                    </div>
                                        <p style="padding-top: 7%"> Available</p>
                                </div>
                                    <p class="card-text">The User Experience team of one.The User Experience team of one</p>
                                    <a href="#" class="btn btn-primary waves-effect waves-light">Reserve now</a>
                        </div>
                </div>
                
            </div><!-- end col -->
                                    
            <div class="col-md-6 col-lg-6 col-xl-3">
                <!-- Simple card -->
                <div class="card m-b-30">
                    <img class="card-img-top img-fluid" src="Images/theSecret.jpeg" alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title font-20 mt-0">The Secret</h4>
                                <div class="d-flex flex-row ">
                                    <div class="col-6 align-self-center">
                                        <div class="round">
                                            <p>5</p>
                                        </div>    
                                    </div>
                                        <p style="padding-top: 7%"> Available </p>
                                </div>
                                    <p class="card-text">The Secret is a best-selling 2006 self-help book by Rhonda Byrne great</p>
                                    <a href="#" class="btn btn-primary waves-effect waves-light">Reserve now</a>
                        </div>
                </div>
            </div><!-- end col -->
        </div>                    
        
        <!--Most rented books-->
        <div class="row">
            <div class="col-sm-6 col-md-6 col-lg-6">
                <div class="page-title-box">
                    <h1 class="page-title">Most Rented Book</h1>
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="col-md-6 col-lg-6 col-xl-3">
                <!-- Simple card -->
                <div class="card m-b-30">
                    <img class="card-img-top img-fluid" src="Images/DaVinciCode.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h4  class="card-title font-20 mt-0">DaVinci Code</h4>
                                <div class="d-flex flex-row ">
                                    <div class="col-6 align-self-center">
                                        <div class="round">
                                            <p>11</p>
                                        </div>
                                                   
                                    </div>
                                        <p style="padding-top: 7%"> Days Left</p>
                                </div>
                                    <p class="card-text">The author brings Leonardo da Vinci to life in this exciting new biography.</p>
                                    <a href="#" class="btn btn-primary waves-effect waves-light">Reserve now</a>
                        </div>
                </div>
            </div><!-- end col -->
            <div class="col-md-6 col-lg-6 col-xl-3">
                <!-- Simple card -->
                <div class="card m-b-30">
                    <img class="card-img-top img-fluid" src="Images/mengele.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title font-20 mt-0">Mengele</h4>
                                <div class="d-flex flex-row ">
                                    <div class="col-6 align-self-center">
                                        <div class="round">
                                            <p>6</p>
                                        </div>
                                                   
                                    </div>
                                        <p style="padding-top: 7%"> Days Left</p>
                                </div>
                                    <p class="card-text"> Josef Mengele the author brings Leonardo(1911-1979)in this exciting new biography </p>
                                    <a href="#" class="btn btn-primary waves-effect waves-light">Reserve now</a>
                        </div>
                </div>
            </div><!-- end col -->
            
            <div class="col-md-6 col-lg-6 col-xl-3">
                <!-- Simple card -->
                <div class="card m-b-30">
                    <img class="card-img-top img-fluid" src="Images/uX.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title font-20 mt-0">UX Book</h4>
                                <div class="d-flex flex-row ">
                                    <div class="col-6 align-self-center">
                                        <div class="round">
                                            <p>3</p>
                                        </div>
                                    </div>
                                        <p style="padding-top: 7%"> Days Left</p>
                                </div>
                                    <p class="card-text">The User Experience team of one.The User Experience team of one</p>
                                    <a href="#" class="btn btn-primary waves-effect waves-light">Reserve now</a>
                        </div>
                </div>
                
            </div><!-- end col -->
                                    
            <div class="col-md-6 col-lg-6 col-xl-3">
                <!-- Simple card -->
                <div class="card m-b-30">
                    <img class="card-img-top img-fluid" src="Images/theSecret.jpeg" alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title font-20 mt-0">The Secret</h4>
                                <div class="d-flex flex-row ">
                                    <div class="col-6 align-self-center">
                                        <div class="round">
                                            <p>5</p>
                                        </div>
                                    </div>
                                        <p style="padding-top: 7%"> Days Left</p>
                                </div>
                                    <p class="card-text">The Secret is a best-selling 2006 self-help book by Rhonda Byrne great</p>
                                    <a href="#" class="btn btn-primary waves-effect waves-light">Reserve now</a>
                        </div>
                </div>
            </div><!-- end col -->
        </div>                    
        <!--You reserved books-->
        <div class="row">
            <div class="col-sm-6 col-md-6 col-lg-6">
                <div class="page-title-box">
                    <h1 class="page-title">Your reserved books</h1>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-lg-6 col-xl-3">
                <!-- Simple card -->
                <div class="card m-b-30">
                    <img class="card-img-top img-fluid" src="Images/DaVinciCode.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h4  class="card-title font-20 mt-0">DaVinci Code</h4>
                                <div class="d-flex flex-row ">
                                    <div class="col-6 align-self-center">
                                        <div class="round">
                                            <p>11</p>
                                        </div>
                                    </div>
                                        <p style="padding-top: 7%"> Days Left</p>
                                </div>
                                    <p class="card-text">The author brings Leonardo da Vinci to life in this exciting new biography.</p>
                                    <a href="#" class="btn btn-primary waves-effect waves-light">Reserve now</a>
                        </div>
                </div>
                                      
            </div><!-- end col -->
            
            <div class="col-md-6 col-lg-6 col-xl-3">
                <!-- Simple card -->
                <div class="card m-b-30">
                    <img class="card-img-top img-fluid" src="Images/mengele.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title font-20 mt-0">Mengele</h4>
                                <div class="d-flex flex-row ">
                                    <div class="col-6 align-self-center">
                                        <div class="round">
                                            <p>6</p>
                                        </div>
                                    </div>
                                        <p style="padding-top: 7%"> Days Left</p>
                                </div>
                                    <p class="card-text"> Josef Mengele the author brings Leonardo(1911-1979)in this exciting new biography </p>
                                    <a href="#" class="btn btn-primary waves-effect waves-light">Reserve now</a>
                        </div>
                </div>
                
            </div><!-- end col -->
                                    
            <div class="col-md-6 col-lg-6 col-xl-3">
                <!-- Simple card -->
                <div class="card m-b-30">
                    <img class="card-img-top img-fluid" src="Images/uX.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title font-20 mt-0">UX Book</h4>
                                <div class="d-flex flex-row ">
                                    <div class="col-6 align-self-center">
                                        <div class="round">
                                            <p>3</p>
                                        </div>
                                    </div>
                                        <p style="padding-top: 7%"> Days Left</p>
                                </div>
                                    <p class="card-text">The User Experience team of one.The User Experience team of one</p>
                                    <a href="#" class="btn btn-primary waves-effect waves-light">Reserve now</a>
                        </div>
                </div>
            </div><!-- end col -->
            
            <div class="col-md-6 col-lg-6 col-xl-3">
                <!-- Simple card -->
                <div class="card m-b-30">
                    <img class="card-img-top img-fluid" src="Images/theSecret.jpeg" alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title font-20 mt-0">The Secret</h4>
                                <div class="d-flex flex-row ">
                                    <div class="col-6 align-self-center">
                                        <div class="round">
                                            <p>5</p>
                                        </div>
                                    </div>
                                        <p style="padding-top: 7%"> Days Left</p>
                                </div>
                                    <p class="card-text">The Secret is a best-selling 2006 self-help book by Rhonda Byrne great</p>
                                    <a href="#" class="btn btn-primary waves-effect waves-light">Reserve now</a>
                        </div>
                </div>
                
            </div><!-- end col -->
           
                                    
        </div>                    
                                     
                          
                            
    </div>  

       
                    </div>
                </div>
 
</div>
         <!--end page content-->  
    </div>
        
       
        <!-- END wrapper -->
    
    </body>
</html>