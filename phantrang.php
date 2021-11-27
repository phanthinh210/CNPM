<?php
$result = mysqli_query($conn, 'select count(mahang) as total from sanpham');
	$row = mysqli_fetch_assoc($result);
	$total_records = $row['total'];
	 
	// BƯỚC 3: TÌM LIMIT VÀ CURRENT_PAGE
	$current_page = isset($_GET['page']) ? $_GET['page'] : 1;
	$limit = 9;
	 
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
?>