<?php
	require("dbconnect.php");
	include("clspage.php");
	include("phantrang.php");
    $id = $_GET['iddanhmuc'];
    if(isset($_GET['idgiamgia']))
	{
	$sql= "select * from sanpham where maloai = $id  ORDER BY giatien DESC ";
	}	
	if(isset($_GET['idtanggia']))
	{
	$sql= "select * from sanpham where maloai = $id  ORDER BY giatien ASC ";
	}	
    $result= mysqli_query($conn,$sql);

	
	?>        
	
	<form id="form1" name="form1" method="post" action="">
  	<div class="wappper_sanpham">
  	<ul class="product">
   <?php
   	while($rows=mysqli_fetch_array($result))
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
</form>