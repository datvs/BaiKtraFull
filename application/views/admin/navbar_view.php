<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Thanh Tác Vụ</title>
</head>
<body>

	<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
		<a href="#" class="navbar-brand">Quản Lý Nghỉ Phép</a>

		<div class="navbar navbar-collapse">
			<ul class="navbar-nav">
				<li class="nav-link dropdown">
					<a href="#" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown">Nghỉ phép
					</a>
					<div class="dropdown-menu">
						<a class="dropdown-item" href="<?= base_url() ?>Nghiphep">Nghỉ Phép</a>
						<div class="dropdown-divider"></div>
					</div>
				</li>

			</ul>
		</div>

		<div>
			<li class="nav-link dropdown">
							<a class="nav-link dropdown-toggle" data-toggle="dropdown">
								<img src="<?= base_url() ?>images/user.jpg">
							</a>
							<div class="dropdown-menu">
								<a class="dropdown-item " href="<?= base_url() ?>admin/logOut">Đăng xuất</a>
								<a class="dropdown-item " href="<?= base_url() ?>admin/logIn">Đăng nhập</a>
								<a class="dropdown-item " href="<?= base_url() ?>admin/registerView">Đăng ký</a>
							</div>
			</li>
		</div>
	</nav>

	<?php 
	 	if ($this->session->userdata('username')!='') {
	 		?>
				<div class="alert alert-success text-right" role="alert">
					<strong>Chào mừng tài khoản: <?= $this->session->userdata('username') ?></strong>
				</div>
	 		<?php
	 	}else{
	 		redirect('admin/logIn','refresh');
	 	}
	 ?>

	<!-- Load JS trước khi load Bootstrap -->
	 <script src="<?= base_url() ?>public/vendor/jquery-3.2.1.min.js"></script>
    <script src="<?= base_url() ?>public/vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="<?= base_url() ?>public/vendor/bootstrap-4.1/bootstrap.min.js"></script>

    <a href="#top" class="to-top"><i class="fas fa-arrow-up"></i></a>
	<style>
		.to-top{
			display: none;
			position: fixed;
			bottom: 40px;
			right: 40px;
			font-size: 20px;
			background: #000;
			color: #fff;
			padding: 9px 12px;
			border-radius: 50%;
			cursor: pointer;
		}
		.to-top:hover{
			background: #d7d7d7;
			color: #000;
		}
	</style>

	<script>
		$(document).ready(function() {
			$(window).scroll(function(){
				if($(this).scrollTop() > 250){
					$('.to-top').fadeIn();
				}else{
					$('.to-top').fadeOut();
				}
			});
		});	

		$('.to-top').click(function(){
			$('html ,body').animate({scrollTop: 0}, 800);
		});

	</script>

</body>
</html>