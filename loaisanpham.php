<?php		
			require("dbconnect.php");
			$maloai= isset($_GET["ml"])?$_GET["ml"]:"";
			$timkiem= isset($_POST["timkiemsanpham"])?$_POST["timkiemsanpham"]:"";
			$dk="";
			if($maloai)
			{
				$dk="where maloai='$maloai'";
			}
			if($timkiem)
			{
				$dk="where tenhang like '%$timkiem%' or mahang='$timkiem'";
			}
			
			include("clspage.php");

			$result = mysqli_query($conn, 'select count(mahang) as total from sanpham');
	$row = mysqli_fetch_assoc($result);
	$total_records = $row['total'];
	 
	// BƯỚC 3: TÌM LIMIT VÀ CURRENT_PAGE
	$current_page = isset($_GET['page']) ? $_GET['page'] : 1;
	$limit = 12;
	 
	// BƯỚC 4: TÍNH TOÁN TOTAL_PAGE VÀ START
	// tổng số trang
	$total_page = ceil($total_records / $limit);
	 
	// Giới hạn current_page trong khoảng 1 đến total_page
	if ($current_page > $total_page){
		$current_page = $total_page;
	}
	else if ($current_page < 1){
		$current_page = 1;
	}
	 
	// Tìm Start
	$start = ($current_page - 1) * $limit;


	
			$sql= "select * from sanpham $dk order by mahang desc limit ".$start.",".$limit;
			
			$result= @mysqli_query($conn,$sql);
			if($timkiem!=""&&mysqli_num_rows($result)==0)
			{
				$_SESSION['mess']="Không tìm thấy sản phẩm :[".$timkiem."] Vui lòng tìm lại!";
				return header('Location:index.php');
			}
?>
	<form id="form1" name="form1" method="post" action="">
  	<div class="wappper_sanpham">
  	<ul class="product">
   <?php
   	while($rows=mysqli_fetch_array($result))
	{
		//$link="index.php?chitiet=".$rows['mahang']."&alias:".$rows['alias'].".html";
       // $link="sp-".$rows['alias'].$rows['mahang'].".html";
		$link="san-pham-".$rows['mahang'].".html";
   ?>
		<li class="box-1 span4"> 
            <a href="<?php echo $link;?>" title="<?php echo $rows['tenhang'];?>">
				<div class="title">				
					<h2 class="head_sp"><?php echo $rows['tenhang'];?></h2>
				</div>
			</a>
            <div class="product thumbnail" style="height:149px;">
                <img src="images/sanpham/<?php echo $rows['hinhanh'];?>" alt="<?php echo $rows['tenhang'];?>" width="240px" height="147px">
                <a href="<?php echo $link;?>" title="<?php echo $rows['tenhang'];?>">
                   
                </a>
            </div>
			<p class="home-text hidden-xs clear">
				<?php echo $rows['slogan'];?>
			</p>
            <div class="fot-box">
                <p class="price">
					<span class="new-price"><?php echo number_format($rows['giatien']);?> đ</span>
				</p>
                <a class="button" href="<?php echo $link;?>">Xem chi tiết<i class="fa fa-angle-double-right"></i></a>
                <div class="clear"></div>
            </div>
            <div class="clear"></div>
		</li>
	   <?php
	}
	?>
	</ul>
	 <div class="fpage">
	 <?php 
		if ($current_page > 1 && $total_page > 1){
			echo '<a href="index.php?page='.($current_page-1).'">Prev</a> | ';
		}
		 
		// Lặp khoảng giữa
		for ($i = 1; $i <= $total_page; $i++){
			// Nếu là trang hiện tại thì hiển thị thẻ span
			// ngược lại hiển thị thẻ a
			if ($i == $current_page){
				echo '<span>'.$i.'</span> | ';
			}
			else{
				echo '<a href="index.php?page='.$i.'">'.$i.'</a> | ';
			}
		}
		 
		// nếu current_page < $total_page và total_page > 1 mới hiển thị nút prev
		if ($current_page < $total_page && $total_page > 1){
			echo '<a href="index.php?page='.($current_page+1).'">Next</a> | ';
		}
	 ?>
	 </div>
</div>
</form>
