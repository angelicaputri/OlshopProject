<!doctype html>
<html>
<head>
	<title>Admin Page | Add New Product</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
	<?php $this->load->view('backend/admin_menu')?>
	<!-- dalam div row harus ada col yang maksimum nilainya 12 -->
	<div class="row">
		<div class="col-md-1"></div>
		<div class="col-md-10">
			<h1>Add New Product</h1>
			<div><?= validation_errors() ?></div>
			<?= form_open_multipart('admin/Products/create', ['class'=>'form-horizontal']) ?>
			<div class="form-group">
				<label for="inputEmail3" class="col-sm-2 control-label">Product Name</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" name="name" placeholder="" value="<?= set_value('name') ?>">
				</div>
			</div>

				<div class="form-group">
					<label for="inputPassword3" class="col-sm-2 control-label">Description</label>
					<div class="col-sm-10">
						<textarea class="form-control" name="description"><?= set_value('description') ?></textarea>
					</div>
				</div>

				<div class="form-group">
					<label for="inputPassword3" class="col-sm-2 control-label">Price</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="price" placeholder="" value="<?= set_value('price') ?>">
					</div>
				</div>

				<div class="form-group">
					<label for="inputPassword3" class="col-sm-2 control-label">Available Stock</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="stock" placeholder="" value="<?= set_value('stock') ?>">
					</div>
				</div>

				<div class="form-group">
					<label for="inputPassword3" class="col-sm-2 control-label">Product Image</label>
					<div class="col-sm-10">
						<input type="file" class="form-control" name="userfile" >
					</div>
				</div>

				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<button type="submit" class="btn btn-default">Save</button>
					</div>
				</div>

				<?= form_close() ?>
			</div>
			<div class="col-md-1"></div>
		</div>
	</body>
	</html>