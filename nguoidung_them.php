<!doctype html>
<html lang="en">
	<head>
		<?php include_once 'header.php'; ?>
		<title>Thêm người dùng - Trang tin điện tử</title>
	</head>
	<body>
		<div class="container">
			<?php include_once 'navbar.php'; ?>
			
			<div class="card mt-3">
				<h5 class="card-header">Thêm người dùng</h5>
				<div class="card-body">
					<form action="nguoidung_them_xuly.php" method="post" class="needs-validation" novalidate>
						<div class="mb-3">
							<label for="HoVaTen" class="form-label">Họ và tên</label>
							<input type="text" class="form-control" id="HoVaTen" name="HoVaTen" required>
							<div class="invalid-feedback">Họ và tên không được bỏ trống.</div>
						</div>
						<div class="mb-3">
							<label for="TenDangNhap" class="form-label">Tên đăng nhập</label>
							<input type="text" class="form-control" id="TenDangNhap" name="TenDangNhap" required>
							<div class="invalid-feedback">Tên đăng nhập không được bỏ trống.</div>
						</div>
						<div class="mb-3">
							<label for="MatKhau" class="form-label">Mật khẩu</label>
							<input type="password" class="form-control" id="MatKhau" name="MatKhau" required>
							<div class="invalid-feedback">Mật khẩu không được bỏ trống.</div>
						</div>
						<div class="mb-3">
							<label for="XacNhanMatKhau" class="form-label">Xác nhận mật khẩu</label>
							<input type="password" class="form-control" id="XacNhanMatKhau" name="XacNhanMatKhau" required>
							<div class="invalid-feedback">Xác nhận mật khẩu không được bỏ trống.</div>
						</div>
						
						<button type="submit" class="btn btn-primary">Thêm vào CSDL</button>
					</form>
				</div>
			</div>
			
			<?php include_once 'footer.php'; ?>
		</div>
		
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
		<script>
			(function() {
				'use strict'
				var forms = document.querySelectorAll('.needs-validation');
				Array.prototype.slice.call(forms).forEach(function(form) {
					form.addEventListener('submit', function(event) {
						if(!form.checkValidity()) {
							event.preventDefault();
							event.stopPropagation();
						}
						form.classList.add('was-validated');
					}, false);
				});
			})();
		</script>
	</body>
</html>