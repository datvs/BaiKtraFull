<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Nghỉ phép</title>
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
			<div class="col-sm-4 push-sm-3">
				<div class="alert alert-success ; text-center">
					<strong>Nghỉ phép</strong>
				</div>

				<form action="<?= base_url() ?>Nghiphep/add" method="POST">
				<fieldset class="form-group form-control">
					<label style="color: #E91E63">Name:</label>
					<input type="text" class="form-control form-group" placeholder="Nhập tên người xin nghỉ" name="name">
				</fieldset>

				<fieldset class="form-group form-control">
					<label style="color: #E91E63">Start day:</label>
					<input type="date" class="form-control form-group" placeholder="Nhập ngày bắt đầu nghỉ" name="startday">
				</fieldset>

				<fieldset class="form-group form-control">
					<label style="color: #E91E63">End day:</label>
					<input type="date" class="form-control form-group" placeholder="Nhập ngày kết thúc nghỉ" name="enddate">
				</fieldset>

				<fieldset class="form-group form-control">
					<label style="color: #E91E63">Reason to leave:</label>
					<input type="text" name="reasontoleave" placeholder="Nhập lý do xin nghỉ" class="form-control form-group">
				</fieldset>

				<fieldset class="form-group form-control">
					<label style="color: #E91E63">Approver name:</label>
					<input type="text" class="form-control form-group" placeholder="Nhập tên người phê duyệt" name="approvername">
				</fieldset>

				<button type="submit" class="btn btn-outline-success">Leave_request</button>
				</form>

			</div>

			<div class="col-sm-8 push-sm-3">
				<div>
					<div class="alert alert-success text-center">
						<strong>Danh Sách Nghỉ Phép</strong>
					</div>
				</div>

					<div class="table-responsive table--no-card m-b-30">
						<table class="table table-borderless table-striped table-earning">
						<thead>
							<tr>
								<th>Công Cụ</th>
								<th>STT</th>
								<th>Name</th>
								<th>Start day</th>
								<th>End day</th>
								<th>Reason to leave</th>
								<th>Approver's name</th>
							</tr>
						</thead>

							<tbody>
								<?php $i=1 ?>
								<?php foreach ($data_nghiphep as $value): ?>
									<tr>
										<td class="table-active">
										<a class="zmdi zmdi-edit" href="<?= base_url() ?>Nghiphep/laydulieu/<?= $value['id'] ?>"></a>
									|
										<a style="color: red ; height: 50px" class="zmdi zmdi-delete" color="red" href="<?= base_url() ?>Nghiphep/delete/<?= $value['id'] ?>"></a>
										</td>
										<td class="table-active"><?= $i ?></td>
										<td class="table-active"><?= $value['name'] ?></td>
										<td class="table-active"><?= $value['startday'] ?></td>
										<td class="table-active"><?= $value['enddate'] ?></td>
										<td class="table-active"><?= $value['reasontoleave'] ?></td>
										<td class="table-active"><?= $value['approvername'] ?></td>
									</tr>
									<?php $i++ ?>
								<?php endforeach ?>
								
							</tbody>

						</table>

					</div>

			</div>

		</div>
	</div>

</body>
</html>