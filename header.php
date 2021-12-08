<?php
	require("dbconnect.php");
?>
<div id="menu">
  <ul class="main">
    <li><a href="index.php"><strong>Trang chủ</strong></a></li>
	<?php
	if(!isset($_SESSION['username']))
	{
	?>
    <li><div align="center"><a href="dangnhap.html"><strong>Đăng nhập</strong></a></li>
	 <li><div align="center"><a href="dangky.html"> <strong>Đăng ký</strong> </a></li>
    <?php
	}
	else
	{
	?>
	 <li><div align="center"><a href="thoat.html"><strong>Thoát</strong></a></li>
	 <?php 
	if(($_SESSION['username']) != 'admin'){
		 ?>
		 <li><div align="center"><a href="gio-hang.html"><strong>Giỏ hàng</strong> </a></li>
		 <li><div align="center"><a href="don-hang.html"><strong>Đơn hàng</strong></a></li>
		 <?php
		}
	
	if(($_SESSION['username']) == 'admin')
	{
	?>
	 <li><div align="center"><a href="trang.php"> <strong>Quản lý SP</strong> </a></li>
  <?php
	}
  } ?>
  </ul>
  <form id="formtimkiem" name="form1" method="post" action="maintimkiem.php">
  <div align="center">
	  <input type="text" placeholder="Tìm sản phẩm" name="timkiemsanpham" />        
	  <input type="submit" name="Submit" value="Tìm kiếm" />        
  </div>
</form>
</div>
