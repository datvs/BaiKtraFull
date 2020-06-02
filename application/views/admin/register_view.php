<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Đăng Ký</title>
	<link href="<?= base_url() ?>public/css/font-face.css" rel="stylesheet" media="all">
    <link href="<?= base_url() ?>public/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="<?= base_url() ?>public/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="<?= base_url() ?>public/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="<?= base_url() ?>public/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Main <CSS-->
    <link href="<?= base_url() ?>public/css/theme.css" rel="stylesheet" media="all">
</head>
<body>

	<div class="container">
		<div class="row">
			<div class="col-sm-12 push-sm-3 text-sm-center">
				<div class="alert alert-success" role="alert">
					<strong><h2>Đăng Ký</h2></strong>
				</div>
			</div>
		</div>
	</div>
	
	<div class="container">
		<div class="row">
			<div class="col-sm-12 push-sm-3">
				<form method="post" action="<?= base_url() ?>admin/register">
					<fieldset class="form-group">
						<div class="text-danger"><?= $this->session->flashdata('userexist'); ?></div>
					</fieldset>

					<fieldset class="form-group">
						<div class="text-danger"><?= $this->session->flashdata('emailexist'); ?></div>
					</fieldset>

					<fieldset class="form-group">
						<label>Tài Khoản</label>
						<input type="text" class="form-control" name="username" placeholder="Nhập tài khoản" required="" value="<?= set_value('username') ?>" >
						<div class="text-danger"><?= form_error('username') ?></div>
					</fieldset>

					<fieldset class="form-group">
						<label>Mật Khẩu</label>
						<input type="password" class="form-control" name="password" placeholder="Nhập mật khẩu" required="" value="<?= set_value('password') ?>">
						<div class="text-danger"><?= form_error('password') ?></div>
					</fieldset>

					<fieldset class="form-group">
						<label>Nhập Lại Mật Khẩu</label>
						<input type="password" class="form-control" name="repassword" placeholder="Nhập lại mật khẩu" required="" value="<?= set_value('repassword') ?>">
						<div class="text-danger"><?= form_error('repassword') ?></div>
					</fieldset>

					<fieldset class="form-group">
						<label>Email</label>
						<input type="email" class="form-control" name="email"  placeholder="Nhập email" value="<?= set_value('email') ?>">
						<div class="text-danger"><?= form_error('email') ?></div>
					</fieldset>

					<fieldset class="form-group">
						<label>Chức Vụ:</label>
						<select name="level" class="form-control">
							<option value="1">Sếp</option>
							<option value="2">Nhân Viên</option>
						</select>
					</fieldset>
					
					<button type="submit" class="btn btn-outline-success">Đăng Ký</button>
				</form>
			</div>
		</div>
	</div>
	

</body>
</html>