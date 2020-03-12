<!DOCTYPE html>
<html lang="en">
<head>
	<title>Kaino Shoes</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" />
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('style.css'); ?>">
</head>
<body>
	<?php $this->load->view('layout/top_menu') ?>
	<header>
		<div class="w3-container w3-padding-10" id="projects">
			<h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">Detail Produk</h3>
		</div>
	</header>
	
	<!-- Tampilkan semua produk -->
	<div class="container">
	<div class="row">
		<!-- looping products -->
		<center>
			<?php
			$products['image'] = [	'src'	=> 'uploads/' . $products['image'],
			'height'	=> '150'
			];
			echo img($products['image']);
			echo "<h3>".$products['name']." </h3>";
			echo "<h3> Rp".$products['price'].",- </h3>";
			echo "<h4> Stok : ".$products['stock']." </h4>";
			echo "<p> Deksripsi Barang : <br>".$products['description']."</p>";
			?>
			<p>
				<?=anchor('Welcome/add_to_cart/' . $products['id'], 'Buy' , [ //kalo dipencet buy
				'class'	=> 'btn btn-primary',
				'role'	=> 'button'
				])?>
			</p>
		</center>
	</div>
	</div>

	<footer class="w3-center w3-black w3-padding-20 navbar-fixed-bottom">
		<p>Powered by <a href="" title="W3.CSS" target="_blank" class="w3-hover-text-green">Kaino Shoes</a></p>
		<div class="col l5 offset-l1 s12">
			<h5 class="white-text">Contact us on :</h5>
			<div class="link">
				<a class="grey-text text-lighten-3" href="https://www.instagram.com/kainoshoes/?hl=id"><i class="fa fa-instagram"></i> Instagram</a>&nbsp;&nbsp;
				<a class="grey-text text-lighten-3" href="https://www.bukalapak.com/u/kainoshoes?from=omnisearch&from_keyword_history=false&search_source=omnisearch_user&source=navbar"><i class="fa fa-bukalapak"></i> Bukalapak</a>&nbsp;&nbsp;
				<a class="grey-text text-lighten-3" href="https://api.whatsapp.com/send?phone=6281514047620&text=Halo%20ka%2c%20saya%20mau%20order%20sepatu&source=&data="><i class="fa fa-whatsapp"></i> WhatsApp</a>
			</div>
		</div>
	</footer>

</body>
</html>