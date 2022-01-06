<?php
include("auth.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>訂單管理</title>
    <!-- HTML5 Shim and Respond.js IE10 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 10]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <meta name="keywords" content="bootstrap, bootstrap admin template, admin theme, admin dashboard, dashboard template, admin template, responsive" />
    <meta name="author" content="Codedthemes" />
    <!-- Favicon icon -->
    <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
    <!-- waves.css -->
    <link rel="stylesheet" href="assets/pages/waves/css/waves.min.css" type="text/css" media="all">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap/css/bootstrap.min.css">
    <!-- waves.css -->
    <link rel="stylesheet" href="assets/pages/waves/css/waves.min.css" type="text/css" media="all">
    <!-- themify-icons line icon -->
    <link rel="stylesheet" type="text/css" href="assets/icon/themify-icons/themify-icons.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" type="text/css" href="assets/icon/font-awesome/css/font-awesome.min.css">
    <!-- ico font -->
    <link rel="stylesheet" type="text/css" href="assets/icon/icofont/css/icofont.css">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="assets/css/jquery.mCustomScrollbar.css">

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- DataTables -->
    <!-- jQuery v1.9.1 -->
    <script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
    <!-- DataTables v1.10.16 -->
    <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet" />
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
  
    <!-- 引入icon CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">

</head>

<body>
    
    <?php
    include("preloader.php");
    ?>

    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">
            
            <?php
            include("navbar.php");
            ?>

            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">
                    
                    <?php
                    include("menu.php");
                    ?>

                    <div class="pcoded-content">
                        <!-- Page-header start -->
                        <div class="page-header">
                            <div class="page-block">
                                <div class="row align-items-center">
                                    <div class="col-md-8">
                                        
                                        <?php
                                        echo "目前為 $username 管理系統中";
                                        ?>

                                        <div class="page-header-title">
                                            <h5 class="m-b-10">訂單管理</h5>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <ul class="breadcrumb">
                                            <li class="breadcrumb-item">
                                                <a href="index.php"> <i class="fa fa-home"></i> </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Page-header end -->
                        <div class="pcoded-inner-content">
                            <!-- Main-body start -->
                            <div class="main-body">
                                <div class="page-wrapper">
                                    <!-- Page-body start -->
                                    <div class="page-body">
                                        
                                        <?php
                                        // 畫面
                                        function display_form($op,$orderid){
                                            if ($op==3){
                                                $orderid="";
                                                $empid="";
                                                $custid="";
                                                $orderdate="";
                                                $descript="";
                                                $op=4;
                                            }
                                            else{
                                                include("connectdb.php");
                                                $sql = "SELECT orderid,empid,custid,orderdate,descript FROM salesorder where orderid='$orderid'";

                                                $result =$connect->query($sql);

                                                /* fetch associative array */
                                                if ($row = $result->fetch_assoc()) {
                                                    $orderid=$row['orderid'];
                                                    $empid=$row['empid'];
                                                    $custid=$row['custid'];
                                                    $orderdate=$row['orderdate'];
                                                    $descript=$row['descript'];
                                                }
                                                $op=2;
                                            }

                                            echo "
                                                <div class='page-body'>
                                                    <div class='card'>
                                                        <div class='card-header'>
                                                            <h5>新增/修改</h5>
                                                        </div>
                                                        <div class='card-block'>
                                                            <form class='form-material' action=salesorder.php method=post>
                                                                <input type=hidden name='op' value=$op> <!--流程控制-->
                                                                <div class='form-group form-default'>
                                                                    <label for='exampleFormControlInput1' class='form-label'>訂單代號</label>
                                                                    <input type='text' class='form-control' name='orderid' id='orderid' placeholder='請輸入訂單代號' value=$orderid>
                                                                </div>
                                                                <div class='form-group form-default'>
                                                                    <label for='exampleFormControlInput1' class='form-label'>員工代號</label>
                                                                    <input type='text' class='form-control' name='empid' id='empid' placeholder='請輸入員工代號' value=$empid>
                                                                </div>
                                                                <div class='form-group form-default'>
                                                                    <label for='exampleFormControlInput1' class='form-label'>供應商代號</label>
                                                                    <input type='text' class='form-control' name='custid' id='custid' placeholder='請輸入供應商代號' value=$custid>
                                                                </div>
                                                                <div class='form-group form-default'>
                                                                    <label for='exampleFormControlInput1' class='form-label'>訂單日期</label>
                                                                    <input type='text' class='form-control' name='orderdate' id='orderdate' placeholder='請輸入訂單日期' value=$orderdate>
                                                                </div>
                                                                <div class='form-group form-default'>
                                                                    <label for='exampleFormControlInput1' class='form-label'>備註</label>
                                                                    <input type='text' class='form-control' name='descript' id='descript' placeholder='請輸入備註' value=$descript>
                                                                </div>
                                                                <div class='col-auto'>
                                                                    <button type='submit' class='btn btn-primary mb-3'>save</button>           
                                                                    <button type='reset' class='btn btn-primary mb-3'>reset</button>                            
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            ";
                                        }

                                        // 將功能寫在同一個程式 之後比較好維護
                                        if(isset($_REQUEST['op'])){
                                            $op=$_REQUEST['op'];   
                                            switch ($op){
                                                case 1:  //修改
                                                    $orderid=$_REQUEST['orderid']; 
                                                    display_form($op,$orderid);
                                                    break;      
                                                case 2:  //修改資料
                                                    $orderid=$_REQUEST['orderid'];
                                                    $empid=$_REQUEST['empid'];
                                                    $custid=$_REQUEST['custid'];
                                                    $orderdate=$_REQUEST['orderdate'];
                                                    $descript=$_REQUEST['descript'];

                                                    $sql="update salesorder
                                                        set orderid='$orderid',
                                                            empid='$empid',
                                                            custid='$custid',
                                                            orderdate='$orderdate',
                                                            descript='$descript'                            
                                                        where orderid='$orderid'";
                                                    include("connectdb.php");
                                                    include('dbutil.php');
                                                    execute_sql($sql);
                                                    break;
                                                case 3: //新增
                                                    $orderid="";
                                                    display_form($op,$orderid);
                                                    break;
                                                case 4: //新增資料
                                                    $orderid=$_REQUEST['orderid'];
                                                    $empid=$_REQUEST['empid'];
                                                    $custid=$_REQUEST['custid'];
                                                    $orderdate=$_REQUEST['orderdate'];
                                                    $descript=$_REQUEST['descript'];

                                                    $sql="insert into salesorder (orderid,empid,custid,orderdate,descript) values ('$orderid','$empid','$custid','$orderdate','$descript')";
                                                    include("connectdb.php");
                                                    include('dbutil.php');
                                                    execute_sql($sql);
                                                    break;      
                                                case 5: //刪除資料              
                                                    $orderid=$_REQUEST['orderid'];              
                                                    
                                                    $sql="delete from salesorder where orderid='$orderid'";
                                                    include("connectdb.php");
                                                    include('dbutil.php');
                                                    execute_sql($sql);
                                                    break;
                                            }
                                        }
                                        ?>
                                        
                                        <!-- Basic table card start -->
                                        <div class="card">
                                            <div class="card-header">
                                                <h5>訂單資料維護</h5>
                                            </div>
                                            <div class="card-block table-border-style">
                                                <div class="table-responsive">
                                                    <p align=right>
                                                        <a href=salesorder.php?op=3><button type='button' class='btn btn-success'>新增 <i class='bi bi-plus-square'></i></button></a>
                                                    </p>
                                                    <table class="example">
                                                        <thead>
                                                            <tr>
                                                            <td>訂單代號</td>
                                                            <td>員工姓名</td>
                                                            <td>供應商名稱</td>  
                                                            <td>訂單日期</td>  
                                                            <td>備註</td>   
                                                            <td>edit</td>			
                                                            <td>delete</td>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php
                                                                include("connectdb.php");
                                                                $sql = "SELECT salesorder.orderid,empname,custname,orderdate,descript
                                                                        FROM salesorder,employee,customer
                                                                        WHERE salesorder.EmpId=employee.EmpId
                                                                            and salesorder.CustId=customer.CustId";

                                                                $result =$connect->query($sql);

                                                                /* fetch associative array */
                                                                while ($row = $result->fetch_assoc()) {
                                                                        $orderid=$row['orderid'];
                                                                        $empname=$row['empname'];
                                                                        $custname=$row['custname'];
                                                                        $orderdate=$row['orderdate'];
                                                                        $descript=$row['descript'];

                                                                echo "<tr><td>$orderid<td>$empname<td>$custname<td>$orderdate<td>$descript";   
                                                                echo "<td><a href=salesorder.php?op=1&orderid=$orderid><button type='button' class='btn btn-primary'>修改 <i class='bi bi-pencil-square'></i></button></a>";
                                                                // 確認框confirm
                                                                echo "<td><a href=\"javascript:if(confirm('確實要刪除[$orderid]嗎?'))location='salesorder.php?orderid=$orderid&op=5'\"><button type='button' class='btn btn-danger'>刪除 <i class='bi bi-x-square'></i></button>";
                                                                }
                                                            ?>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- 返回首頁 -->
                                        <div class="row">
                                            <p class="text-inverse text-left"><a href="index.php"><b>Back to website</b></a></p>
                                        </div>
                                        <!-- Basic table card end -->
                                    </div>
                                    <!-- Page-body end -->
                                </div>
                            </div>
                            <!-- Main-body end -->
                            <div id="styleSelector"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
    $( ".example" ).DataTable({
        autoWidth: false,
    });
    </script>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->


    <!-- Warning Section Starts -->
    <!-- Older IE warning message -->
    <!--[if lt IE 10]>
    <div class="ie-warning">
        <h1>Warning!!</h1>
        <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers to access this website.</p>
        <div class="iew-container">
            <ul class="iew-download">
                <li>
                    <a href="http://www.google.com/chrome/">
                        <img src="assets/images/browser/chrome.png" alt="Chrome">
                        <div>Chrome</div>
                    </a>
                </li>
                <li>
                    <a href="https://www.mozilla.org/en-US/firefox/new/">
                        <img src="assets/images/browser/firefox.png" alt="Firefox">
                        <div>Firefox</div>
                    </a>
                </li>
                <li>
                    <a href="http://www.opera.com">
                        <img src="assets/images/browser/opera.png" alt="Opera">
                        <div>Opera</div>
                    </a>
                </li>
                <li>
                    <a href="https://www.apple.com/safari/">
                        <img src="assets/images/browser/safari.png" alt="Safari">
                        <div>Safari</div>
                    </a>
                </li>
                <li>
                    <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                        <img src="assets/images/browser/ie.png" alt="">
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
    <script type="text/javascript" src="assets/js/jquery/jquery.min.js "></script>
    <script type="text/javascript" src="assets/js/jquery-ui/jquery-ui.min.js "></script>
    <script type="text/javascript" src="assets/js/popper.js/popper.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap/js/bootstrap.min.js "></script>
    <!-- waves js -->
    <script src="assets/pages/waves/js/waves.min.js"></script>
    <!-- jquery slimscroll js -->
    <script type="text/javascript" src="assets/js/jquery-slimscroll/jquery.slimscroll.js"></script>
    <!-- Custom js -->
    <script src="assets/js/pcoded.min.js"></script>
    <script src="assets/js/vertical/vertical-layout.min.js"></script>
    <script src="assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script type="text/javascript" src="assets/js/script.js"></script>
</body>

</html>
