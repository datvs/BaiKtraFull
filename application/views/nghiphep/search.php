<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Tìm Kiếm Môn Học</title>
	<link href="<?= base_url() ?>public/css/font-face.css" rel="stylesheet" media="all">
    <link href="<?= base_url() ?>public/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="<?= base_url() ?>public/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="<?= base_url() ?>public/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="<?= base_url() ?>public/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="<?= base_url() ?>public/css/theme.css" rel="stylesheet" media="all">
    <script src="<?= base_url() ?>public/vendor/jquery-3.2.1.min.js"></script>
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

<style>
	table {
	  font-family: arial, sans-serif;
	  border-collapse: collapse;
	  width: 100%;
	}

	td, th {
	  border: 5px solid #dddddd;
	  text-align: left;
	  padding: 8px;
	}

	tr:nth-child(even) {
	  background-color: #dddddd;
	}
</style>

	
	<div class="container">
		<div class="row">
			<div class="col-sm-12 push-sm-3">
				<div class="alert alert-success ; text-center ">
					<h2 style="color: green">Tìm Kiếm</h2>
				</div>

				<input type="text" class="form-control form-group" placeholder="Search..." id="search">
				<br></br>

				<table>
					<thead>
						<tr>
							<th>Mã Môn Học</th>
							<th>Tên Môn Học</th>
							<th>Số Tín Chỉ</th>
						</tr>
					</thead>
		
					<tbody id="myTable">
						<?php foreach ($data_monhoc as $value): ?>
						<tr>	
						<td><?= $value['mamonhoc'] ?></td>
						<td><?= $value['tenmonhoc'] ?></td>
						<td><?= $value['sotinchi'] ?></td>
						</tr>
						<?php endforeach ?>
					</tbody>

				</table>

			</div>
		</div>
	</div>

<script>
	$(document).ready(function() {
		$("#search").on("keyup", function(){
			var value = $(this).val().toLowerCase();
			$("#myTable tr").filter(function() {
				$(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
			}); 
		});
	});
</script>

</body>
</html>