<?php
    $sql="SELECT *FROM sanpham inner join loaisp on sanpham.maloai=loaisp.maloai";
    $query=mysqli_query($conn,$sql);
    $list="SELECT *FROM loaisp";
    $result=mysqli_query($conn,$list);
?>

<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h2>Danh sách sản phẩm</h2>
         </div>
        <div class="card-body">
            <table class="table table-bordered table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th>#</th>
                        <th>Tên sản phẩm</th>
                        <th>Ảnh sản phẩm</th>
                        <th>Giá sản phẩm</th>
                        <th>Số lượng sản phẩm</th>
                        <th>Mô tả</th>                       
                        <th>Loại<th>
                        <th></th>
                        
                    </tr>
                </thead>
                <tbody>
                   <?php
                   $i=1;
                   while($row=mysqli_fetch_assoc($query)){?>
                    <tr>
                        <td><?php echo $i++;?></td>
                        <td><?php echo $row['tenhang'];?></td>
                        <td>
                            <img style="width:100px;height:100px;" src="images/sanpham/<?php echo $row['hinhanh'];?>">
                        </td>
                        <td><?php echo $row['giatien'];?></td>
                        <td><?php echo $row['sogr1sp'];?></td>
                        <td><?php echo $row['chitiet'];?></td>
                        <td><?php echo $row['ten'];?></td>
                        <td>
                            <a href="trang.php?page_layout=sua&id=<?php echo $row['mahang']?>">Sửa</a>
                        </td>
                        <td>
                            <a onclick="return Del('<?php echo $row['tenhang'];?>')" href="trang.php?page_layout=xoa&id=<?php echo $row['mahang']?>">Xóa</a>
                        </td>
                    </tr> 
                   <?php } ?>
                </tbody>
            </table>
            <a class="btn btn-primary" href="trang.php?page_layout=them">Thêm mới</a>
        </div>   
    </div>
</div>
<script>
    function Del(name){
        return confirm("Bạn có muốn xóa sản phẩm: "+ name + " ?" );
    }
</script>
