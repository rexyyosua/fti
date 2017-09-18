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
	<?Php $this->load->view('header/header')?>
	<br>
	<hr>
		<div class="row">
			<div class="col-sm-1"></div>
			<div class="col-sm-10">
				<h1>Tambah Berita</h1>
				
				<?= form_open_multipart('user/ab/create',['class'=>'form-horizontal']) ?>
					   
					  <div class="form-group">
						<label for="inputEmail3" class="col-sm-2 control-label">Judul</label>
						<div class="col-sm-10">
						  <input type="text" class="form-control" name="name" placeholder="" value="<?=set_value('judul')?>">
						  <span class="help-block"><?php echo form_error('name');?></span>
						</div>
					  </div>

					  <div class="form-group">
						<label for="inputEmail3" class="col-sm-2 control-label">Status</label>
						<div class="col-sm-10">
						   <select class="form-control" name="status">
						    <option>--Choose--</option>
						    <option>Available</option>
						    <option>Not Available</option>
						  </select>
						</div>
					  </div>
					  
					  <div class="form-group">
						<label for="inputPassword3" class="col-sm-2 control-label">Deskripsi</label>
						<div class="col-sm-10">
						  <textarea class="form-control" name="description"  placeholder="" value="<?=set_value('deskripsi')?>"></textarea>
						  <span class="help-block"><?php echo form_error('name');?></span>
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
						  <button type="submit" class="btn btn-primary">Save</button>
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