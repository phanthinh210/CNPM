<?php
   $id = $_GET['id'];

  
   $sql_catagory="SELECT *from loaisp";
   $query_catagory=mysqli_query($connect,$sql_catagory);

   $sql_up="SELECT*FROM sanpham where mahang=$id";
   $query_up = mysqli_query($connect,$sql_up);
   $row_up=mysqli_fetch_assoc($query_up);


   if(isset($_POST['sbm'])){
       $tenhang=$_POST['tenhang'];
        if($_FILES['hinhanh']['name']==''){
            $Image=$row_up['hinhanh'];
        }else{
            $Image=$_FILES['hinhanh']['name'];
            $Image_tmp=$_FILES['hinhanh']['tmp_name'];
            move_uploaded_file($Image_tmp,'img/'.$Image);
        }
       
       $Image_tmp=$_FILES['hinhanh']['tmp_name'];

       $giatien=$_POST['giatien'];
       $sogr1sp=$_POST['sogr1sp'];
       $chitiet=$_POST['chitiet'];
       $maloai=$_POST['maloai'];
       

       $sql="UPDATE sanpham SET tenhang='$tenhang',hinhanh='$Image',giatien=$giatien,
       sogr1sp='$sogr1sp',chitiet='$chitiet',maloai='$maloai'where mahang=$id";
       $query=mysqli_query($connect,$sql);
       
       header('location:trang.php?page_layout=danhsach');
   }
?>
<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h2>Sửa sản phẩm</h2>
        </div>
        <div class="card-body">
            <form method="POST" enctype="multipart/form-data">
                <div class="form-group">
                  <label for="">Tên sản phẩm</label>
                  <input type="text" name="tenhang"  class="form-control" required value="<?php echo $row_up['tenhang'];?>">
                </div>
                <div class="form-group">
                  <label for="">Ảnh sản phẩm</label><br>
                  <input type="file" name="hinhanh"  >
                </div>
                <div class="form-group">
                  <label for="">Giá sản phẩm</label>
                  <input type="number" name="giatien"  class="form-control" required value="<?php echo $row_up['giatien'];?>" >
                </div>
                <div class="form-group">
                  <label for="">SL sản phẩm</label>
                  <input type="number" name="sogr1sp"  class="form-control" required value="<?php echo $row_up['sogr1sp'];?>">
                </div>
                <div class="form-group">
                  <label for="">Mô tả sản phẩm</label>
                  <input type="text" name="chitiet"  class="form-control" required value="<?php echo $row_up['chitiet'];?>">
                </div>
                <div class="form-group">
                  <label for="">Loại sản phẩm</label>
                  <select name="maloai"  class="form-control"  >
                  <?php
                        while($row_catagory=mysqli_fetch_assoc($query_catagory)){?>
                        <option value="<?php echo $row_catagory['maloai']?>"><?php echo $row_catagory['ten']?></option>
                        <?php } ?>
                  </select>
                    
                  </select>
                </div>
                <button name="sbm" class="btn btn-success" type="submit">Sửa</button>
            </form>
        </div>
        
    </div>
</div>