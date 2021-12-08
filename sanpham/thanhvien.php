<?php
    $sql="SELECT *FROM thanhvien";
    $query=mysqli_query($conn,$sql);
    
?>

<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h2>Danh sách tài khoản người dùng</h2>
         </div>
        <div class="card-body">
            <table class="table table-bordered table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th>STT</th>
                        <th>Tên </th>
                        <th>Quê quán</th>
                        <th>Tài khoản</th>
                        <th>Mật khẩu</th>
                      
        
                        
                    </tr>
                </thead>
                <tbody>
                   <?php
                   $i=1;
                   while($row=mysqli_fetch_assoc($query)){?>
                    <tr>
                        <td><?php echo $i++;?></td>
                        <td><?php echo $row['hoten'];?></td>
                        
                        <td><?php echo $row['quequan'];?></td>
                        <td><?php echo $row['username'];?></td>
                        <td><?php echo $row['password'];?></td>
                        
                        
                    </tr> 
                   <?php } ?>
                </tbody>
            </table>
            
        </div>   
    </div>
</div>
<script>
    function Del(name){
        return confirm("Bạn có muốn xóa sản phẩm: "+ name + " ?" );
    }
</script>
