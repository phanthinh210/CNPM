<?php
include ( "include.php")
?>
<body bgcolor="#F3F3F3">
<div class="body">
  <div class="banner">
	<img src="images/banner1.jpg" width="100%" height="auto"/>
  </div>
  <div class="hearder">
    <?php include("header.php");?>
  </div>
  <div class="wapper">
	<?php 
	if(isset($_SESSION['mess'])&&$_SESSION['mess']!="")
		{
	?>
		<div class='message' id='message'><h3>Thông báo</h3><a onclick="jQuery('#message').css('display','none')" href="javascript:void()">X</a><span><?php echo $_SESSION['mess'];?></span></div>
	<?php

			unset($_SESSION['mess']);
		}
	?>
    <div class="wleft"><?php include("theleft.php");?></div>
    <div class="wright"><?php include("themain.php");?></div>
    <div class="fter"><?php include("footer.php");?></div>
  </div>
</div>
</body>
</html>
