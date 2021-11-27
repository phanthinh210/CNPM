<?php 
require("dbconnect.php");

$sql= "select * from loaisp";
$result= mysqli_query($conn,$sql);
?>
<div class="leftwapper">
<h2><a >Danh Mục Sản Phẩm</a></h2>
<ul class="menu_cate">
<?php
	while($rows=mysqli_fetch_array($result))
	{
?>
	<li>
		<a href="danhmuc.php?iddanhmuc=<?php echo $rows['maloai'];?>">
			<?php echo $rows['ten'];?>
		</a>		
	</li>
<?php
	}
?>
</ul>

<?php
if(isset($_GET['iddanhmuc']))
{
	$id = $_GET['iddanhmuc'];
	?>
<h2><a>Sắp xếp theo giá</a></h2>
<ul class="menu_cate">
	<li>
		<a href="mainsapxep.php?idgiamgia=giamgia&iddanhmuc=<?php echo $id;?>"> Giá giảm dần</a>	
	</li>
	<li>
		<a href="mainsapxep.php?idtanggia=tanggia&iddanhmuc=<?php echo $id;?>"> Giá tăng dần</a>	
	</li>
</ul>

<?php
	}
?>

<?php
if(!isset($_GET['iddanhmuc']))
{
	?>
<h2><a>Sắp xếp theo giá</a></h2>
<ul class="menu_cate">
	<li>
		<a href="index.php?idgiamgia=giamgia"> Giá giảm dần</a>	
	</li>
	<li>
		<a href="index.php?idtanggia=tanggia"> Giá tăng dần</a>	
	</li>
</ul>

<?php
	}
?>

<div class="ads">
</div>
</div>

