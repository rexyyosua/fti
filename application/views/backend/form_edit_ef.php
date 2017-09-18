<?php
	$id			= $product->id;
if($this->input->post('is_submitted')){
	$name		= set_value('nama');
	$email		= set_value('email');
	$no_tlp		= set_value('no_tlp');
	
}else{
	$name 		= $product->nama;
	$email 		= $product->email;
	$no_tlp		= $product->no_tlp;

	
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
	<br>
	<hr>
		<div class="row">
			<div  class="col-sm-1"></div>
			<div class="col-sm-10">
				<h1>Edit Kosan</h1>
				<div><?=validation_errors() ?></div>
				<?= form_open_multipart('user/ef/update/'.$id,['class'=>'form-horizontal']) ?>
					  
					  <div class="form-group">
						<label for="inputEmail3" class="col-sm-2 control-label">Name</label>
						<div class="col-sm-10">
						  <input type="text" class="form-control" name="name" placeholder="" value="<?=$name?>">
						</div>
					  </div>
					  
					 <div class="form-group">
						<label for="inputEmail3" class="col-sm-2 control-label">Email</label>
						<div class="col-sm-10">
						  <input type="email" class="form-control" name="email" placeholder="" value="<?=$email?>">
						</div>
					  </div>
					  
					  
					  <div class="form-group">
						<label for="inputEmail3" class="col-sm-2 control-label">No Phone</label>
						<div class="col-sm-10">
						  <input type="text" class="form-control" name="no_tlp" placeholder="" value="<?=$no_tlp?>">
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