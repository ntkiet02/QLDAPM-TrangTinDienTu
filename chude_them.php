<!doctype html>
<html lang="en">
	<head>
		<?php include_once 'header.php'; ?>
		<title>Thêm chủ đề - Trang tin điện tử</title>
	</head>
	<body>
		<div class="container">
			<?php include_once 'navbar.php'; ?>
			
			<div class="card mt-3">
				<h5 class="card-header">Thêm chủ đề</h5>
				<div class="card-body">
					<form action="chude_them_xuly.php" method="post" class="needs-validation" novalidate>
						<div class="mb-3">
							<label for="TenChuDe" class="form-label">Tên chủ đề</label>
							<input type="text" class="form-control" id="TenChuDe" name="TenChuDe" required />
							<div class="invalid-feedback">Tên chủ đề không được bỏ trống.</div>
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