<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Sửa Nghỉ Phép</title>
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

	<?php 
	 	if ($this->session->userdata('username')!='') {
	 		?>
	 		
	 		<?php
	 	}else{
	 		redirect('admin/logIn','refresh');
	 	}
	?>

	<?php 
	include "navbar_view.php";
	 ?>
	
	<div class="container">
		<div class="row">
			<div class="col-sm-12 text-sm-center">
				<div class="alert alert-success" role="alert">
				<strong><h2>Sửa Nghỉ Phép</h2></strong>
				</div>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-sm-12 push-sm-3">
				<form action="<?= base_url() ?>Nghiphep/sua" method="post">
					<?php foreach ($data_suanghiphep as $value): ?>
						<input type="hidden" name="id" value="<?= $value['id'] ?>">
				
					<fieldset class="form-group form-control">
						<label style="color: #E91E63">Name:</label>
						<input name="name" type="text" class="form-control form-group" id="name" value="<?= $value['name'] ?>">
					</fieldset>

					<fieldset class="form-group form-control">
						<label style="color: #E91E63">Start day:</label>
						<input name="startday" type="date" class="form-control form-group" id="startday" value="<?= $value['startday'] ?>">
					</fieldset>

					<fieldset class="form-group form-control">
						<label style="color: #E91E63">End day:</label>
						<input name="enddate" type="date" class="form-control form-group" id="enddate" value="<?= $value['enddate'] ?>">
					</fieldset>

					<fieldset class="form-group form-control">
						<label style="color: #E91E63">Reason to leave:</label>
						<input name="reasontoleave" type="text" class="form-control form-group" id="reasontoleave" value="<?= $value['reasontoleave'] ?>">
					</fieldset>

					<fieldset class="form-group form-control">
						<label style="color: #E91E63">Approver name:</label>
						<input name="approvername" type="text" class="form-control form-group" id="approvername" value="<?= $value['approvername'] ?>">
					</fieldset>

					<button type="submit" class="btn btn-outline-success">Repair</button>
					<?php endforeach ?>
				</form>
			</div>
		</div>
	</div>

</body>
</html>