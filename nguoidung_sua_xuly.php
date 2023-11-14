<!doctype html>
<html lang="en">
	<head>
		<?php include_once 'header.php'; ?>
		<title>Xử lý sửa người dùng - Trang tin điện tử</title>
	</head>
	<body>
		<div class="container">
			<?php include_once 'navbar.php'; ?>
			
			<div class="card mt-3">
				<h5 class="card-header">Xử lý sửa người dùng</h5>
				<div class="card-body">
					<?php
						include_once 'ketnoi.php';
						include_once 'thuvien.php';
						
						$HoVaTen = $_POST['HoVaTen'];
						$TenDangNhap = $_POST['TenDangNhap'];
						$MatKhau = $_POST['MatKhau'];
						$XacNhanMatKhau = $_POST['XacNhanMatKhau'];
						
						if(empty(trim($HoVaTen)))
							ThongBaoLoi("Họ và tên không được bỏ trống.");
						elseif(empty(trim($TenDangNhap)))
							ThongBaoLoi("Tên đăng nhập không được bỏ trống.");
						elseif(empty(trim($MatKhau)))
							ThongBaoLoi("Mật khẩu không được bỏ trống.");
						elseif($MatKhau != $XacNhanMatKhau)
							ThongBaoLoi("Xác nhận mật khẩu không chính xác.");
						else
						{
							$MatKhau = sha1($MatKhau);
							
							$sql = "INSERT INTO tbl_nguoidung(HoVaTen, TenDangNhap, MatKhau, QuyenHan, Khoa) 
									VALUES ('$HoVaTen', '$TenDangNhap', '$MatKhau', 2, 0)";
							$kq = mysqli_query($link, $sql);
							if($kq)
								header("Location: nguoidung.php");
							else
								ThongBaoLoi(mysqli_error($link));
						}
					?>
				</div>
			</div>
			
			<?php include_once 'footer.php'; ?>
		</div>
		
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
	</body>
</html>