<!doctype html>
<html>
	<head>
		<title>User Page</title>
		<script type="text/javascript" language="javascript" src="//code.jquery.com/jquery-1.10.2.min.js"></script>
		<script type="text/javascript" language="javascript" src="//cdn.datatables.net/1.10.4/js/jquery.dataTables.min.js"></script>
		<script type="text/javascript" language="javascript" src="//cdn.datatables.net/plug-ins/9dcbecd42ad/integration/bootstrap/3/dataTables.bootstrap.js"></script>
		
		<link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/plug-ins/9dcbecd42ad/integration/bootstrap/3/dataTables.bootstrap.css">
		
	</head>
	<body>
	<?Php $this->load->view('header/header')?>
	<br>
	<hr>

		
		<div class="row">
			<div class="col-sm-1"></div>
			<div class="col-sm-10">
				<h1>Tabel Room</h1>
				<hr>

		<table id="myTable" class="table table-bordered table-striped table-hover">
			<thead>
				<tr>
					<th>#</th>
					<th>Judul</th>
					<th>Gambar</th>
					<th>Deskripsi</th>
					
					<th>
						<?=anchor('user/ab/create','Add',['class'=>'btn btn-primary btn-sm'])?>
				</tr>
			</thead>
			<tbody>
				<?php foreach($wis as $product) : ?>
				<tr>
					<td><?=$product->id_berita?></td>
					<td><?=$product->judul_berita?></td>
					<td><?php
						$product_image = ['src'=>'images/slider/'.$product->gambar_berita,
										  'width'=>'150',
										  'height'=>'100'
										 ];
						echo img($product_image)
					?>
					</td>
					<td><?=$product->deskripsi_berita?></td>
					<td>
						<?=anchor('user/ab/update/'.$product->id_berita,'Edit',['class'=>'btn btn-default btn-sm'])?>
						<?=anchor('user/kmr/create/'.$product->id_berita,'Add Room',['class'=>'btn btn-default btn-sm'])?>
						<?=anchor('user/ab/delete/'.$product->id_berita,'Delete',['class'=>'btn btn-danger btn-sm','onclick'=>'return confirm(\'Apakah Anda Yakin ??\')'])?>
					</td>
				</tr>
				<?php endforeach;?>
			</tbody>
		</table>
			</div>
			<div class="col-sm-1"></div>
		
		
		<script>
			$(document).ready(function(){
				$('#myTable').DataTable();
			});
		</script>
	</body>
</html>