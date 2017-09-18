<?php
	$id			= $product->id_berita;
if($this->input->post('is_submitted')){
	$name			= set_value('judul');
	$status 		= set_value('status');
	$description	= set_value('deskripsi');
	
}else{
	$name 			= $product->judul_berita;
	$status 		= $product->status;
	$description 	= $product->deskripsi_berita;

	
}
?>
<!doctype html>
<html>
	<head>
		
		<script type="text/javascript" language="javascript" src="//code.jquery.com/jquery-1.10.2.min.js"></script>
		<script type="text/javascript" language="javascript" src="//cdn.datatables.net/1.10.4/js/jquery.dataTables.min.js"></script>
		<script type="text/javascript" language="javascript" src="//cdn.datatables.net/plug-ins/9dcbecd42ad/integration/bootstrap/3/dataTables.bootstrap.js"></script>
		
		<link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/plug-ins/9dcbecd42ad/integration/bootstrap/3/dataTables.bootstrap.css">
		
	</head>
	<body>
	<?php $this->load->view('header/header')?>
		<div class="row">
			<div  class="col-sm-1"></div>
			<div class="col-sm-10">
				<h1>Edit Kosan</h1>
				<div><?=validation_errors() ?></div>
				<?= form_open_multipart('user/ab/update/'.$id,['class'=>'form-horizontal']) ?>
					  
					  <div class="form-group">
						<label for="inputEmail3" class="col-sm-2 control-label">Nama judul</label>
						<div class="col-sm-10">
						  <input type="text" class="form-control" name="name" placeholder="" value="<?=$name?>">
						</div>
					  </div>
					  
					  <div class="form-group"> 
						<label for="inputPassword3" class="col-sm-2 control-label">Deskripsi</label>
						<div class="col-sm-10">
						  <textarea class="form-control" name="description" ><?=$description?></textarea>
						</div>
					  </div>

					  <div class="form-group">
						<label for="inputEmail3" class="col-sm-2 control-label">Status</label>
						<div class="col-sm-10">
						   <select class="form-control" name="status">
						    <option><?=$status?></option>
						    <option>Available</option>
						    <option>Not Available</option>
						  </select>
						</div>
					  </div>
					 
					  
					  <div class="form-group">
						<label for="inputPassword3" class="col-sm-2 control-label">Gambar</label>
						<div class="col-sm-10">
						  <input type="file" class="form-control" name="userfile">
						</div>
					  </div>
					  
					  <div class="form-group">
						<div class="col-sm-offset-2 col-sm-10">
						  <input type="hidden" name="is_submitted" value="1"/>
						  <button type="submit" class="btn btn-default">Save</button>
						</div>
					  </div>
					
				<?= form_close() ?>
			</div>
			<div class="col-sm-1"></div>
		
		
		<script>
			$(document).ready(function(){
				$('#myTable').DataTable();
			});
		</script>
	</body>
</html>