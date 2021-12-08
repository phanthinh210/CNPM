<?php
    $id=$_GET['id'];
    $sql="DELETE FROM sanpham where mahang=$id";
    $query=mysqli_query($conn,$sql);
    header('location:trang.php?page_layout=danhsach');
?>