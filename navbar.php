<nav class="navbar navbar-expand-lg navbar-light bg-info">
	<div class="container-fluid">
		<a class="navbar-brand" href="index.php">
			<img src="images/premium.png" width="30" height="30" class="d-inline-block align-text-top" />
			iNews
		</a>
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav me-auto mb-2 mb-lg-0">
				<li class="nav-item">
					<a class="nav-link active" aria-current="page" href="baiviet_moi.php">Tin mới nhất</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="dangnhap.php">Đăng nhập</a>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownChuyenMuc" role="button" data-bs-toggle="dropdown" aria-expanded="false">
						Chuyên mục
					</a>
					<ul class="dropdown-menu" aria-labelledby="navbarDropdownChuyenMuc">
						<li><a class="dropdown-item" href="baiviet_chude.php">Action</a></li>
					</ul>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownQuanLy" role="button" data-bs-toggle="dropdown" aria-expanded="false">
						Quản lý
					</a>
					<ul class="dropdown-menu" aria-labelledby="navbarDropdownQuanLy">
						<li><a class="dropdown-item" href="chude.php">Chủ đề</a></li>
						<li><a class="dropdown-item" href="nguoidung.php">Người dùng</a></li>
						<li><hr class="dropdown-divider"></li>
						<li><a class="dropdown-item" href="baiviet.php">Bài viết</a></li>
					</ul>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="dangxuat.php">Đăng xuất</a>
				</li>
			</ul>
			<form class="d-flex">
				<input class="form-control me-2" type="search" placeholder="Bạn muốn tìm gì?" aria-label="Search" />
				<button class="btn btn-outline-success" type="submit">Tìm</button>
			</form>
		</div>
	</div>
</nav>