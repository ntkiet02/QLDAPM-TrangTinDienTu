<?php
	function ThongBao($noiDung)
	{
		echo '<div class="alert alert-info alert-dismissible fade show mb-0" role="alert">
				<i class="bi-info-circle"></i>
				'.$noiDung.'
				<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
			  </div>';
	}
	
	function ThongBaoLoi($noiDung)
	{
		echo '<div class="alert alert-danger alert-dismissible fade show mb-0" role="alert">
				<i class="bi-exclamation-triangle-fill"></i>
				'.$noiDung.'
				<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
			  </div>';
	}
?>