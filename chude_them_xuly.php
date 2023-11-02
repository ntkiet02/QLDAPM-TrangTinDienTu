<!doctype html>
<html lang="en">
	<head>
		<?php include_once 'header.php'; ?>
		<title>Xử lý thêm chủ đề - Trang tin điện tử</title>
	</head>
	<body>
		<div class="container">
			<?php include_once 'navbar.php'; ?>
			
			<div class="card mt-3">
				<h5 class="card-header">Xử lý thêm chủ đề</h5>
				<div class="card-body">
					<?php
						include_once 'ketnoi.php';
						include_once 'thuvien.php';
						
						$TenChuDe = $_POST['TenChuDe'];
						
						if(empty(trim($TenChuDe)))
							ThongBaoLoi('Tên chủ đề không được bỏ trống.');
						else
						{
							$sql = "INSERT INTO tbl_chude(TenChuDe) VALUES ('$TenChuDe')";
							$kq = mysqli_query($link, $sql);
							if($kq)
								header('Location: chude.php');
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