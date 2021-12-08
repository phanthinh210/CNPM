<?php
    require_once('dbconnect.php');
    $title = 'Quản lý sản phẩm';
    $sql="SELECT *FROM sanpham inner join loaisp on sanpham.maloai=loaisp.maloai";
    $query=mysqli_query($conn,$sql);
    $list="SELECT *FROM loaisp";
    $result=mysqli_query($conn,$list);
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?=$title?></title>

    <!-- Bootstrap core CSS -->
    <link href="public/admin/css/bootstrap.css" rel="stylesheet">

    <!-- Add custom CSS here -->
    <link href="public/admin/css/sb-admin.css" rel="stylesheet">
    <link rel="stylesheet" href="public/admin/font-awesome/css/font-awesome.min.css">
    <!-- Page Specific CSS -->
    <link rel="stylesheet" href="http://cdn.oesmith.co.uk/morris-0.4.3.min.css">
  </head>

  <body>
    <div id="wrapper">

      <!-- Sidebar -->
      <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">Cửa hàng bán đồ điện tử</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
          <ul class="nav navbar-nav side-nav">
            <li class="active"><a href="trang.php"><i class="fa fa-dashboard"></i> Quản lý sản phẩm</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-caret-square-o-down"></i> Danh sách sản phẩm <b class="caret"></b></a>
              <ul class="dropdown-menu">

                <li> <?php
                
                while($rows=mysqli_fetch_assoc($result)){

            ?>
             <a href="trang.php?page_layout=danhsachnoicom&id=<?php echo $rows['maloai']?>"><?php echo $rows['ten']?></a>
                    <?php } ?></li>
                
              </ul>
            </li>
            <li><a href="trang.php?page_layout=thanhvien"><i class="fa fa-bar-chart-o"></i> Danh sách người dùng</a></li>
            <li><a href="tables.html"><i class="fa fa-table"></i> Danh sách đơn hàng</a></li>
           
            
          </ul>

          
        </div><!-- /.navbar-collapse -->
      </nav>

      <div id="page-wrapper">

        <div class="row">
          <div class="col-lg-12">
            
            <div class="alert alert-success alert-dismissable">
              
            <?php
        if(isset($_GET['page_layout'])){
            switch($_GET['page_layout']){
                case 'danhsach':
                    require_once('sanpham/danhsach.php');
                    break;
                case 'danhsachnoicom':
                    require_once('sanpham/danhsachnoicom.php');
                    break;
                case 'thanhvien':
                    require_once('sanpham/thanhvien.php');
                    break;
                case 'them':
                    require_once('sanpham/them.php');
                    break;
                case 'sua':
                    require_once('sanpham/sua.php');
                    break;
                case 'xoa':
                    require_once('sanpham/xoa.php');   
                    break;
            }
        }else{  
                require_once('sanpham/danhsach.php');
                
        }
    ?>
     </div>
          </div>
        </div><!-- /.row -->

       
      


      </div><!-- /#page-wrapper -->

   

    <!-- JavaScript -->
    <script src="public/admin/js/jquery-1.10.2.js"></script>
    <script src="public/admin/js/bootstrap.js"></script>

    <!-- Page Specific Plugins -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="http://cdn.oesmith.co.uk/morris-0.4.3.min.js"></script>
    <script src="public/admin/js/morris/chart-data-morris.js"></script>
    <script src="public/admin/js/tablesorter/jquery.tablesorter.js"></script>
    <script src="public/admin/js/tablesorter/tables.js"></script>

  </body>
</html>
