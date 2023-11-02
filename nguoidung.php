<!doctype html>
<html lang="en">
	<head>
		<?php include_once 'header.php'; ?>
		<title>Người dùng - Trang tin điện tử</title>
	</head>
	<body>
		<div class="container">
			<?php include_once 'navbar.php'; ?>
			
			<div class="card mt-3">
				<h5 class="card-header">Người dùng</h5>
				<div class="card-body">
					<a class="btn btn-primary mb-2" href="nguoidung_them.php" role="button">Thêm người dùng</a>
					<table class="table table-bordered table-hover mb-0">
						<thead>
							<tr>
								<th width="5%">#</th>
								<th width="40%">Họ và tên</th>
								<th width="15%">Tên đăng nhập</th>
								<th width="15%">Quyền hạn</th>
								<th width="15%">Trạng thái</th>
								<th width="5%">Sửa</th>
								<th width="5%">Xóa</th>
							</tr>
						</thead>
						<tbody>
							<?php
								include_once 'ketnoi.php';
								
								$sql = "SELECT * FROM tbl_nguoidung WHERE 1";
								$danhsach = mysqli_query($link, $sql);
								
								$stt = 1;
								while($dong = mysqli_fetch_array($danhsach))
								{
									echo '<tr>
											<td>'.$stt.'</td>
											<td>'.$dong['HoVaTen'].'</td>
											<td>'.$dong['TenDangNhap'].'</td>
											<td>'.$dong['QuyenHan'].'</td>
											<td>'.$dong['Khoa'].'</td>
											<td class="text-center">Sửa</td>
											<td class="text-center">Xóa</td>
										  </tr>';
									$stt++;
								}
							?>
						</tbody>
					</table>
				</div>
			</div>
			
			<?php include_once 'footer.php'; ?>
		</div>
		
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
	</body>
</html>