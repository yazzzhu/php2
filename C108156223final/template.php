<?php

function head(){
    echo "
    <!DOCTYPE html>
    <html lang='en'>

    <head>
    <title>管理系統</title>
    <!-- HTML5 Shim and Respond.js IE10 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 10]>
      <script src='https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js'></script>
      <script src='https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js'></script>
      <![endif]-->
    <!-- Meta -->
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge' />

    <meta name='keywords' content='bootstrap, bootstrap admin template, admin theme, admin dashboard, dashboard template, admin template, responsive' />
    <meta name='author' content='Codedthemes' />
    <!-- Favicon icon -->
    <link rel='icon' href='assets/images/favicon.ico' type='image/x-icon'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet'>
    <!-- waves.css -->
    <link rel='stylesheet' href='assets/pages/waves/css/waves.min.css' type='text/css' media='all'>
    <!-- Required Fremwork -->
    <link rel='stylesheet' type='text/css' href='assets/css/bootstrap/css/bootstrap.min.css'>
    <!-- waves.css -->
    <link rel='stylesheet' href='assets/pages/waves/css/waves.min.css' type='text/css' media='all'>
    <!-- themify-icons line icon -->
    <link rel='stylesheet' type='text/css' href='assets/icon/themify-icons/themify-icons.css'>
    <!-- Font Awesome -->
    <link rel='stylesheet' type='text/css' href='assets/icon/font-awesome/css/font-awesome.min.css'>
    <!-- ico font -->
    <link rel='stylesheet' type='text/css' href='assets/icon/icofont/css/icofont.css'>
    <!-- Style.css -->
    <link rel='stylesheet' type='text/css' href='assets/css/style.css'>
    <link rel='stylesheet' type='text/css' href='assets/css/jquery.mCustomScrollbar.css'>


    <!-- Required meta tags -->
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>

    <!-- DataTables -->
    <!-- jQuery v1.9.1 -->
    <script src='https://code.jquery.com/jquery-1.9.1.min.js'></script>
    <!-- DataTables v1.10.16 -->
    <link href='https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css' rel='stylesheet' />
    <script src='https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js'></script>
  
    <!-- 引入icon CDN -->
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css'>
    
    </head>

    <body>
    ";
}

function pre_loader(){
    echo "
    <!-- Pre-loader start -->
    <div class='theme-loader'>
        <div class='loader-track'>
            <div class='preloader-wrapper'>
                <div class='spinner-layer spinner-blue'>
                    <div class='circle-clipper left'>
                        <div class='circle'></div>
                    </div>
                    <div class='gap-patch'>
                        <div class='circle'></div>
                    </div>
                    <div class='circle-clipper right'>
                        <div class='circle'></div>
                    </div>
                </div>
                <div class='spinner-layer spinner-red'>
                    <div class='circle-clipper left'>
                        <div class='circle'></div>
                    </div>
                    <div class='gap-patch'>
                        <div class='circle'></div>
                    </div>
                    <div class='circle-clipper right'>
                        <div class='circle'></div>
                    </div>
                </div>

                <div class='spinner-layer spinner-yellow'>
                    <div class='circle-clipper left'>
                        <div class='circle'></div>
                    </div>
                    <div class='gap-patch'>
                        <div class='circle'></div>
                    </div>
                    <div class='circle-clipper right'>
                        <div class='circle'></div>
                    </div>
                </div>

                <div class='spinner-layer spinner-green'>
                    <div class='circle-clipper left'>
                        <div class='circle'></div>
                    </div>
                    <div class='gap-patch'>
                        <div class='circle'></div>
                    </div>
                    <div class='circle-clipper right'>
                        <div class='circle'></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Pre-loader end -->
    ";
}

function horizontal_bar($userdept,$username){
    echo "
    <div id='pcoded' class='pcoded'>
        <div class='pcoded-overlay-box'></div>
            <div class='pcoded-container navbar-wrapper'>

            <nav class='navbar header-navbar pcoded-header'>
                <div class='navbar-wrapper'>
                    <div class='navbar-logo'>
                        <a class='mobile-menu waves-effect waves-light' id='mobile-collapse' href='#!'>
                            <i class='ti-menu'></i>
                        </a>
                        <div class='mobile-search waves-effect waves-light'>
                            <div class='header-search'>
                                <div class='main-search morphsearch-search'>
                                    <div class='input-group'>
                                        <span class='input-group-prepend search-close'><i class='ti-close input-group-text'></i></span>
                                        <input type='text' class='form-control' placeholder='Enter Keyword'>
                                        <span class='input-group-append search-btn'><i class='ti-search input-group-text'></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href='home.php'>
                            <img class='img-fluid' src='assets/images/logo.png' alt='Theme-Logo' />
                        </a>
                        <a class='mobile-options waves-effect waves-light'>
                            <i class='ti-more'></i>
                        </a>
                    </div>
                    <div class='navbar-container container-fluid'>
                        <ul class='nav-left'>
                            <li>
                                <div class='sidebar_toggle'><a href='javascript:void(0)'><i class='ti-menu'></i></a></div>
                            </li>
                            <li>
                                <a href='#!' onclick='javascript:toggleFullScreen()' class='waves-effect waves-light'>
                                    <i class='ti-fullscreen'></i>
                                </a>
                            </li>
                        </ul>
                        <ul class='nav-right'>
                            <li class='user-profile header-notification'>
                                <a href='#!' class='waves-effect waves-light'>
                                    <i class='bi bi-person-circle'></i>
                                    <span>
                                        $userdept-$username
                                    </span>
                                    <i class='ti-angle-down'></i>
                                </a>
                                <ul class='show-notification profile-notification'>
                                    <li class='waves-effect waves-light'>
                                        <a href='index.php'>
                                            <i class='ti-layout-sidebar-left'></i> Logout
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
    ";
}

function menu($userdept,$username){
    echo "
            <div class='pcoded-main-container'>
                <div class='pcoded-wrapper'>
                    
                    <nav class='pcoded-navbar'>
                        <div class='sidebar_toggle'><a href='#'><i class='icon-close icons'></i></a></div>
                        <div class='pcoded-inner-navbar main-menu'>
                            <div class=''>
                                <div class='main-menu-header'>
                                    <img class='img-80 img-radius' src='assets/images/avatar-4.jpg' alt='User-Profile-Image'>
                                    <div class='user-details'>
                                        <span id='more-details'>
                                            $userdept-$username
                                            <i class='fa fa-caret-down'></i>
                                        </span>
                                    </div>
                                </div>
                                <div class='main-menu-content'>
                                    <ul>
                                        <li class='more-details'>
                                            <a href='index.php'><i class='ti-layout-sidebar-left'></i>Logout</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class='pcoded-navigation-label'>首頁</div>
                            <ul class='pcoded-item pcoded-left-item'>
                                <li class=''>
                                    <a href='home.php' class='waves-effect waves-dark'>
                                        <span class='pcoded-micon'><i class='ti-home'></i><b>D</b></span>
                                        <span class='pcoded-mtext'>首頁</span>
                                        <span class='pcoded-mcaret'></span>
                                    </a>
                                </li>
                            </ul>
                            <div class='pcoded-navigation-label'>管理</div>
                            <ul class='pcoded-item pcoded-left-item'>
                                <li class='pcoded-hasmenu '>
                                    <a href='javascript:void(0)' class='waves-effect waves-dark'>
                                        <span class='pcoded-micon'><i class='ti-id-badge'></i><b>A</b></span>
                                        <span class='pcoded-mtext'>資料管理</span>
                                        <span class='pcoded-mcaret'></span>
                                    </a>
                                    <ul class='pcoded-submenu'>
                                        <li class=''>
                                            <a href='dept.php' class='waves-effect waves-dark'>
                                                <span class='pcoded-micon'><i class='ti-receipt'></i><b>B</b></span>
                                                <span class='pcoded-mtext'>部門管理</span>
                                                <span class='pcoded-mcaret'></span>
                                            </a>
                                        </li>
                                        <li class=''>
                                            <a href='product.php' class='waves-effect waves-dark'>
                                                <span class='pcoded-micon'><i class='ti-receipt'></i><b>B</b></span>
                                                <span class='pcoded-mtext'>產品管理</span>
                                                <span class='pcoded-mcaret'></span>
                                            </a>
                                        </li>
                                        <li class=''>
                                            <a href='salesorder.php' class='waves-effect waves-dark'>
                                                <span class='pcoded-micon'><i class='ti-receipt'></i><b>B</b></span>
                                                <span class='pcoded-mtext'>訂單管理</span>
                                                <span class='pcoded-mcaret'></span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <div class='pcoded-navigation-label'>報表</div>
                            <ul class='pcoded-item pcoded-left-item'>
                                <li class='pcoded-hasmenu '>
                                    <a href='javascript:void(0)' class='waves-effect waves-dark'>
                                        <span class='pcoded-micon'><i class='ti-id-badge'></i><b>A</b></span>
                                        <span class='pcoded-mtext'>各種報表</span>
                                        <span class='pcoded-mcaret'></span>
                                    </a>
                                    <ul class='pcoded-submenu'>
                                        <li class=''>
                                            <a href='salesreport.php' class='waves-effect waves-dark'>
                                                <span class='pcoded-micon'><i class='ti-receipt'></i><b>B</b></span>
                                                <span class='pcoded-mtext'>銷售訂單</span>
                                                <span class='pcoded-mcaret'></span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <div class='pcoded-navigation-label'>登出/登錄</div>
                            <ul class='pcoded-item pcoded-left-item'>
                                <li class=''>
                                    <a href='index.php' class='waves-effect waves-dark'>
                                        <span class='pcoded-micon'><i class='ti-angle-right'></i></span>
                                        <span class='pcoded-mtext'>Logout</span>
                                        <span class='pcoded-mcaret'></span>
                                    </a>
                                </li>
                                <li class=''>
                                    <a href='signup.php' class='waves-effect waves-dark'>
                                        <span class='pcoded-micon'><i class='ti-angle-right'></i></span>
                                        <span class='pcoded-mtext'>Signup</span>
                                        <span class='pcoded-mcaret'></span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </nav>
    ";
}

function context($userdept,$username){
    echo "
    <div class='pcoded-content'>
                        <!-- Page-header start -->
                        <div class='page-header'>
                            <div class='page-block'>
                                <div class='row align-items-center'>
                                    <div class='col-md-8'>
                                        歡迎 $userdept-$username
                                        <div class='page-header-title'>
                                            <h5 class='m-b-10'>管理系統</h5>
                                        </div>
                                    </div>
                                    <div class='col-md-4'>
                                        <ul class='breadcrumb'>
                                            <li class='breadcrumb-item'>
                                                <a href='home.php'> <i class='fa fa-home'></i> </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Page-header end -->
                        <div class='pcoded-inner-content'>
                            <!-- Main-body start -->
                            <div class='main-body'>
                                <div class='page-wrapper'>
                                    <!-- Page-body start -->
                                    <div class='page-body'>
                                        <!-- Basic table card start -->
                                        <div class='card'>
                                            <div class='card-header'>
                                                <h5>管理</h5>
                                            </div>
                                            <div class='card-block table-border-style'>
                                                <div class='table-responsive'>
                                                    <div class='card-block'>
                                                        <!-- button Default -->
                                                        <a href='dept.php'><button class='btn waves-effect waves-light btn-primary'><i class='bi bi-suit-club-fill'></i>部門管理</button></a>
                                                        <a href='product.php'><button class='btn waves-effect waves-light btn-primary'><i class='bi bi-suit-heart-fill'></i>產品管理</button></a>
                                                        <a href='salesorder.php'><button class='btn waves-effect waves-light btn-primary'><i class='bi bi-suit-diamond-fill'></i>訂單管理</button></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class='card'>
                                            <div class='card-header'>
                                                <h5>報表</h5>
                                            </div>
                                            <div class='card-block table-border-style'>
                                                <div class='table-responsive'>
                                                    <div class='card-block'>
                                                        <!-- button Default -->
                                                        <a href='salesreport.php'><button class='btn waves-effect waves-light btn-info'><i class='bi bi-suit-spade-fill'></i>銷售訂單管理</button></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Basic table card end -->
                                    </div>
                                    <!-- Page-body end -->
                                </div>
                            </div>
                            <!-- Main-body end -->
                            <div id='styleSelector'></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    ";
}

function footer(){
    echo "
    <script>
      $( '.example' ).DataTable({
        autoWidth: false,
      });
    </script>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js' integrity='sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p' crossorigin='anonymous'></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src='https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js' integrity='sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB' crossorigin='anonymous'></script>
    <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js' integrity='sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13' crossorigin='anonymous'></script>
    -->


    <!-- Warning Section Starts -->
    <!-- Older IE warning message -->
    <!--[if lt IE 10]>
    <div class='ie-warning'>
        <h1>Warning!!</h1>
        <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers to access this website.</p>
        <div class='iew-container'>
            <ul class='iew-download'>
                <li>
                    <a href='http://www.google.com/chrome/'>
                        <img src='assets/images/browser/chrome.png' alt='Chrome'>
                        <div>Chrome</div>
                    </a>
                </li>
                <li>
                    <a href='https://www.mozilla.org/en-US/firefox/new/'>
                        <img src='assets/images/browser/firefox.png' alt='Firefox'>
                        <div>Firefox</div>
                    </a>
                </li>
                <li>
                    <a href='http://www.opera.com'>
                        <img src='assets/images/browser/opera.png' alt='Opera'>
                        <div>Opera</div>
                    </a>
                </li>
                <li>
                    <a href='https://www.apple.com/safari/'>
                        <img src='assets/images/browser/safari.png' alt='Safari'>
                        <div>Safari</div>
                    </a>
                </li>
                <li>
                    <a href='http://windows.microsoft.com/en-us/internet-explorer/download-ie'>
                        <img src='assets/images/browser/ie.png' alt=''>
                        <div>IE (9 & above)</div>
                    </a>
                </li>
            </ul>
        </div>
        <p>Sorry for the inconvenience!</p>
    </div>
    <![endif]-->
    <!-- Warning Section Ends -->
    <!-- Required Jquery -->
    <script type='text/javascript' src='assets/js/jquery/jquery.min.js '></script>
    <script type='text/javascript' src='assets/js/jquery-ui/jquery-ui.min.js '></script>
    <script type='text/javascript' src='assets/js/popper.js/popper.min.js'></script>
    <script type='text/javascript' src='assets/js/bootstrap/js/bootstrap.min.js '></script>
    <!-- waves js -->
    <script src='assets/pages/waves/js/waves.min.js'></script>
    <!-- jquery slimscroll js -->
    <script type='text/javascript' src='assets/js/jquery-slimscroll/jquery.slimscroll.js'></script>
    <!-- Custom js -->
    <script src='assets/js/pcoded.min.js'></script>
    <script src='assets/js/vertical/vertical-layout.min.js'></script>
    <script src='assets/js/jquery.mCustomScrollbar.concat.min.js'></script>
    <script type='text/javascript' src='assets/js/script.js'></script>
    
    </body>

    </html>

    ";
}

?>