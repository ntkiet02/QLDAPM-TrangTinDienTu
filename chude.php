<!doctype html>
<html lang="en">
	<head>
		<?php include_once 'header.php'; ?>
		<title>Chủ đề - Trang tin điện tử</title>
	</head>
	<body>
		<div class="container">
			<?php include_once 'navbar.php'; ?>
			
			<div class="card mt-3">
				<h5 class="card-header">Chủ đề</h5>
				<div class="card-body">
					<a class="btn btn-primary mb-2" href="chude_them.php" role="button">Thêm chủ đề</a>
					<table class="table table-bordered table-hover mb-0">
						<thead>
							<tr>
								<th width="5%">#</th>
								<th width="85%">Tên chủ đề</th>
								<th width="5%">Sửa</th>
								<th width="5%">Xóa</th>
							</tr>
						</thead>
						<tbody>
							<?php
								include_once 'ketnoi.php';
								
								$sql = "SELECT * FROM tbl_chude WHERE 1";
								$danhsach = mysqli_query($link, $sql);
								
								$stt = 1;
								while($dong = mysqli_fetch_array($danhsach))
								{
									echo '<tr>
											<td>'.$stt.'</td>
											<td>'.$dong['TenChuDe'].'</td>
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