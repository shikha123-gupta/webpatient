
<!DOCTYPE html>
<html lang="en"> 
<head>
    <title>patient</title>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <meta name="description" content="Portal - Bootstrap 5 Admin Dashboard Template For Developers">
    <meta name="author" content="Xiaoying Riley at 3rd Wave Media">    
    <link rel="shortcut icon" href="favicon.ico"> 
    <!-- FontAwesome JS-->
    <script defer src="assets/plugins/fontawesome/js/all.min.js"></script>
    <!-- App CSS -->  
    <link id="theme-style" rel="stylesheet" href="assets/css/portal.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <link rel="stylesheet"  href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css">    
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <!--end  DataTables -->
    <style type="text/css">
      
    </style>
</head> 
<body class="app">    
  <header class="app-header fixed-top">                 
    <div class="app-header-inner">  
      <div class="container-fluid py-2">
        <div class="app-header-content"> 
          <div class="row justify-content-between align-items-center">
            <div class="col-auto">

              <a id="sidepanel-toggler" class="sidepanel-toggler d-inline-block 
                d-xl-none" href="#" style="color:#e91e63;">

                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" role="img"><title>Menu</title><path stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="2" d="M4 7h22M4 15h22M4 23h22"></path></svg>
              </a>
            </div><!--//col-->
           <!--  <div class="search-mobile-trigger d-sm-none col">
              <i class="search-mobile-trigger-icon fas fa-search"></i>
            </div> --><!--//col-->
            <div class="app-utilities col-auto">
              <div class="app-utility-item app-notifications-dropdown dropdown"><!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
              <!--//dropdown-toggle-->
              </div><!--//app-utility-item-->
                <div class="app-utility-item app-user-dropdown dropdown">
                  <a class="dropdown-toggle" id="user-dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-expanded="false"><img src="../img/user-5.jpg" alt="user profile" style="border-radius: 40px;"></a>
                  <ul class="dropdown-menu" aria-labelledby="user-dropdown-toggle">
                    <li><a class="dropdown-item" href="branch.php" style="font-weight:600"><i class="fas fa-user"></i> Profile</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="../logout.php" style="font-weight:600"><i class="fas fa-sign-out-alt"></i> Log Out</a></li>
                  </ul>
                </div><!--//app-user-dropdown--> 
              </div><!--//app-utilities-->
            </div><!--//row-->
          </div><!--//app-header-content-->
        </div><!--//container-fluid-->
      </div><!--//app-header-inner-->
      <div id="app-sidepanel" class="app-sidepanel"> 
        <div id="sidepanel-drop" class="sidepanel-drop"></div>
          <div class="sidepanel-inner d-flex flex-column" style="background-image:-webkit-linear-gradient( 360deg,#f06292 0,#ec407a 100%);">
            <a href="#" id="sidepanel-close" class="sidepanel-close d-xl-none">&times;</a>
            <div class="app-branding">
              <a class="app-logo" href="index.html" style="text-decoration: none"><img class="logo-icon mr-2" src="https://www.pikpng.com/pngl/b/439-4397947_ems-logo-11-de-setembro-de-2018-263.png" alt="logo" style="margin-top: -8px;margin-left: -7px;width: 95px;height: 60px;"><span class="logo-text"style="color:white;">ADMIN</span></a>
            </div><!--//app-branding-->  
            <nav id="app-nav-main" class="app-nav app-nav-main flex-grow-1" style="margin-top:20px">
              <ul class="app-menu list-unstyled accordion" id="menu-accordion" >
                <li class="nav-item has-submenu"style="background:rgba(0,0,0,.5);">
                  <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
                  <a class="nav-link submenu-toggle" href="branch.php" data-toggle="collapse" data-target="#submenu-1" aria-expanded="false" aria-controls="submenu-1" class="ba">
                    <span class="nav-icon">
                    <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-files" fill="currentColor" xmlns="http://www.w3.org/2000/svg" style="color:white">
                    <path fill-rule="evenodd" d="M4 2h7a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2zm0 1a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h7a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1H4z"/>
                    <path d="M6 0h7a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2v-1a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H6a1 1 0 0 0-1 1H4a2 2 0 0 1 2-2z"/>
                </svg>
              </span>
              <span class="nav-link-text" style="color: white;font-weight: 600;">New Branch</span>
        <!-- <span class="submenu-arrow">
            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chevron-down" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
          </svg>
        </span><!-//submenu-arrow-->
      </a><!--//nav-link-->
    </li><!--//nav-item-->
        <!-- <div id="submenu-1" class="collapse submenu submenu-1" data-parent="#menu-accordion">
          <ul class="submenu-list list-unstyled">
            <li class="submenu-item"><a class="submenu-link" href="emp.php">Employee</a></li>
          </ul>
        </div> -->
    </li><!--//nav-item-->
    <li class="nav-item" style="background:rgba(0,0,0,.5);">
      <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
        <a class="nav-link" href="staff.php">
          <span class="nav-icon">
            <i class="fas fa-tasks" style="font-size: 19px;
    margin-top: 3px;color:white"></i>
          </span>
          <span class="nav-link-text"style="color: white;font-weight: 600;">Create Staff</span>
        </a><!--//nav-link-->
    </li><!--//nav-item-->
   
    <li class="nav-item" style="background:rgba(0,0,0,.5);">
      <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
      <a class="nav-link" href="../logout.php">
        <span class="nav-icon">
          <i class="far fa-list-alt" style="font-size: 19px;
    margin-top: 3px;color:white"></i>
        </span>
        <span class="nav-link-text"style="color: white;font-weight: 600;">Logout</span>
      </a><!--//nav-link-->
    </li><!--//nav-item-->
  </nav>
</div><!--//app-sidepanel-footer-->
</div><!--//sidepanel-inner-->
</div><!--//app-sidepanel-->
</ul>
</nav>
</div>
</div>

</header><!--//app-header-->