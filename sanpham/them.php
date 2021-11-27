<?php
   $sql_catagory="SELECT *from loaisp";
   $query_catagory=mysqli_query($connect,$sql_catagory);
   if(isset($_POST['sbm'])){
       $ProductName=$_POST['ProductName'];

       $Image=$_FILES['Image']['name'];
       $Image_tmp=$_FILES['Image']['tmp_name'];

       $UnitPrice=$_POST['UnitPrice'];
       $Quantity=$_POST['Quantity'];
       $Description=$_POST['Description'];
       $idloai=$_POST['idloai'];
       

       $sql="INSERT INTO sanpham(tenhang,hinhanh,giatien,sogr1sp,chitiet,maloai)
       VALUES('$ProductName','$Image',$UnitPrice,$Quantity,'$Description','$idloai')";
       $query=mysqli_query($connect,$sql);
       move_uploaded_file($Image_tmp,'img/'.$Image);
       header('location:trang.php?page_layout=danhsach');
   }
?>
<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h2>Thêm sản phẩm</h2>
        </div>
        <div class="card-body">
            <form method="POST" enctype="multipart/form-data">
            
                <div class="form-group">
                  <label for="">Tên sản phẩm</label>
                  <input type="text" name="ProductName"  class="form-control" required >
                </div>
                <div class="form-group">
                  <label for="">Ảnh sản phẩm</label><br>
                  <input type="file" name="Image"  >
                </div>
                <div class="form-group">
                  <label for="">Giá sản phẩm</label>
                  <input type="number" name="UnitPrice"  class="form-control" required >
                </div>
                <div class="form-group">
                  <label for="">SL sản phẩm</label>
                  <input type="number" name="Quantity"  class="form-control" required >
                </div>
                <div class="form-group">
                  <label for="">Mô tả sản phẩm</label>
                  <input type="text" name="Description"  class="form-control" required >
                </div>
                
                       
                <div class="form-group">
                  <label for="">Loại sản phẩm</label>
                  <select name="idloai"  class="form-control" required >
                  <?php
                        while($row_catagory=mysqli_fetch_assoc($query_catagory)){?>
                        <option value="<?php echo $row_catagory['maloai']?>"><?php echo $row_catagory['ten']?></option>
                        <?php } ?>
                  </select>
                </div>
                <button name="sbm" class="btn btn-success" type="submit">Thêm</button>
                
               
            </form>
        </div>
        
    </div>
</div>