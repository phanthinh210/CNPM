<?php		
	require("dbconnect.php"); 
		$id=$_GET['id'];
		$sql= "select * from sanpham where mahang=$id";
		$result= mysqli_query($conn,$sql);

		$sqll= "select * FROM sanpham where maloai = (SELECT maloai FROM `sanpham` WHERE mahang = $id) limit 3";
		$resultt= mysqli_query($conn,$sqll);

		$rows=mysqli_fetch_array($result);
?>
<div class="chitietsanpham">
	<h1 class="detail_h1"><?php echo $rows['tenhang'];?></h1>
	<p class="detail-home-text home-text"><?php echo $rows['slogan'];?></p>
	<div class="col-md-6 image-view ">
	   <div style="position: relative; width: 365px;" class="bx-clone">         	
				<div class="chitietcodesp">
					<b>Mã SP: <?php echo $rows['mahang'];?></b>
				</div>
				<img style="border: 1px solid;" title="<?php echo $rows['tenhang'];?>" src="images/sanpham/<?php echo $rows['hinhanh'];?>" alt="<?php echo $rows['tenhang'];?>" class="imgg">
			
		</div>
	</div>
	<div class="col-md-6 info">	
		<div class="kmprice"><span class="new-price"><?php echo $rows['giatien'];?> đ</span></div>
		<div class="totalmua">
			<div class="btn-idsp">
				<button class="button-idsp">Mã SP: <?php echo $rows['mahang'];?></button>
			</div>
			<div class="btn-idsp">
				<button class="button-idsp">Trọng lượng: <?php echo $rows['sogr1sp'];?> gram</button>
			</div>
			<div class="btn-mua">
				<form name="adminForm" id="adminForm" action="muahang.php?muahang=<?php echo $rows['mahang'];?>" method="post">
					<div class="buyitem">
						<a href="#" onclick="mua()">
							<button class="button-red">
								<i class="fa fa-shopping-cart"></i>
								Mua Ngay							
							</button>
						</a>
					</div>
				</form>

			</div>
		</div>
	</div>
	<div class="thongtin">
		<?php echo $rows['chitiet'];?>
	</div>
</div>

<div class="wappper_sanpham">
  	<ul class="product">
	<?php
   	while($rows=mysqli_fetch_array($resultt))
	{
		//$link="index.php?chitiet=".$rows['mahang']."&alias:".$rows['alias'].".html";
       // $link="sp-".$rows['alias'].$rows['mahang'].".html";
   ?>
		<li class="box-1 span4"> 
            <a href="chitiet.php?id=<?php echo $rows['mahang'];?>" title="<?php echo $rows['tenhang'];?>">
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
                <a class="button" href="chitiet.php?id=<?php echo $rows['mahang'];?>">Xem chi tiết<i class="fa fa-angle-double-right"></i></a>
                <div class="clear"></div>
            </div>
            <div class="clear"></div>
		</li>
	   <?php
	}
	?>
	</ul>
</div>
