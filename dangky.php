<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Đăng ký</title>
<style type="text/css">
<!--
.style1 {color: #FF0000}
-->
</style>
</head>

<body>
<?php
if(isset($_POST['Submit']))
{
	if(strlen($_POST['txtname'])>0)
	{
		$hoten=true;
	}
	else
	{
		$hoten=false;
		?>
			<script language="javascript">
			window.alert("Ban chua nhap ho ten");
			</script>
		<?php
	}
	
	if(strlen($_POST['txtuser'])>0)
	{
		$username=true;
	}
	else
	{
		$username=false;
		?>
			<script language="javascript">
			window.alert("Ban chua nhap user");
			</script>
		<?php
	}
	
	if(strlen($_POST['txtpass'])>0)
	{
		$password=true;
	}
	else
	{
		$password=false;
		?>
			<script language="javascript">
			window.alert("Ban chua nhap password");
			</script>
		<?php
	}
	if($hoten&&$username&&$password)
	{
		require("dbconnect.php");
		$u=$_POST['txtuser'];
		$p=$_POST['txtpass'];
		$sql= "select username from thanhvien where username='$u'";
		$result=mysqli_query($conn,$sql);
		if(mysqli_num_rows($result)==0)
		{
			$n=$_POST['txtname'];			
			$q=$_POST['selectque'];
			$sql1="insert into thanhvien(hoten,quequan,username,password) values('$n','$q','$u','$p')";								   
			$result1=mysqli_query($conn,$sql1);
			
				?>
			<script language="javascript">
			window.alert("Đăng ký thành công");
			window.location=("index.php?action=1");
			</script>
				<?php	
				exit();
		}
		else
		{
			?>
			<script language="javascript">
			window.alert("Username đã có người đăng ký");
			</script>
		<?php
		}
		
	}
}
?>
<div align="center">Đăng kí </div>
<form id="form1" name="form1" method="post" action="">
  <div align="center">
    <table width="352" border="1">
      <tr>
        <td width="112">Họ tên </td>
        <td width="224"><label>
          <div align="left">
            <input type="text" name="txtname" />
            <span class="style1">*</span></div>
        </label></td>
      </tr>
      
      <tr>
        <td>Quê quán </td>
        <td><label>
          <div align="left">
            <textarea name="selectque" cols="30" rows="5"></textarea>
            <span class="style1">*</span></div>
        </label></td>
      </tr>
      <tr>
        <td>Username</td>
        <td><div align="left">
          <input type="text" name="txtuser" />
          <span class="style1">*</span></div></td>
      </tr>
      <tr>
        <td>Password</td>
        <td><div align="left">
          <input type="password" name="txtpass" />
          <span class="style1">*</span></div></td>
      </tr>
      <tr>
        <td colspan="2"><label>
          <input type="submit" name="Submit" value="Đăng ký" />
        </label></td>
      </tr>
      </table>
  </div>
</form>
</body>


</html>

