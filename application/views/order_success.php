<!DOCTYPE html>
<html lang="en">
<head>
	<title>Order</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" />
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
</head>
<body>
	<?php $this->load->view('layout/top_menu') ?>
	<center><p>Thank you, your order is being processed.</p>
	<img src="<?php echo base_url('trf.png');?>" height="450"/></center>
	<?php $this->load->view('layout/footer') ?>
</body>
</html>