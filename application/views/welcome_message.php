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
		<div class=malasngoding-slider>
			<div class=isi-slider>
				<img src="<?php echo base_url('nike.jpg'); ?>" alt="Gambar 1">
				<img src="<?php echo base_url('vans.jpg'); ?>" alt="Gambar 2">
				<img src="<?php echo base_url('adidas.jpg'); ?>" alt="Gambar 3">
				<img src="<?php echo base_url('adidas2.jpg'); ?>" alt="Gambar 4">
				<img src="<?php echo base_url('nike2.jpg'); ?>" alt="Gambar 5">
				<img src="<?php echo base_url('adidas3.jpg'); ?>" alt="Gambar 5">
				<img src="<?php echo base_url('vans2.jpg'); ?>" alt="Gambar 5">
			</div>
		</div>
	</header>
	
	<center><input id="searchbar" onkeyup="search_animal()" type="text"
		name="search" placeholder="Cari sepatu pilihanmu dengan disini!"/></center>
		<br>
	<!-- Tampilkan semua produk -->
	<div class="row">
		
		<!-- looping products -->
		<?php foreach($products as $product) : ?>
			<div class="col-sm-3 col-md-3 animals">
				<div class="thumbnail">
					<?=img([
						'src'		=> 'uploads/' . $product->image, //tempat stelah upload
						'style'		=> 'max-width: 100%; max-height:100%; height:100px'
						])?>
						<div class="caption">
							<h3 style="min-height:60px;"><?=$product->name?></h3>
							<p><?=$product->description?></p>
							<p>
								<?=anchor('Welcome/viewItem/' . $product->id, 'View' , [ //kalo dipencet buy
									'class'	=> 'btn btn-primary',
									'role'	=> 'button'
									])?>
								</p>
							</div>
						</div>
					</div>
				<?php endforeach; ?>
				<!-- end looping -->
			</div>
			<script src="./animals.js"></script>

			<footer class="w3-center w3-black w3-padding-16">
				<p>Powered by <a href="" title="W3.CSS" target="_blank" class="w3-hover-text-green">Kaino Shoes</a></p>
				<div class="col l5 offset-l1 s12">
					<h5 class="white-text">Contact us on :</h5>
					<div class="link">
						<a class="grey-text text-lighten-3" href="https://www.instagram.com/kainoshoes/?hl=id"><i class="glyphicon glyphicon-comment"></i> Instagram</a>&nbsp;&nbsp;
						<a class="grey-text text-lighten-3" href="https://www.bukalapak.com/u/kainoshoes?from=omnisearch&from_keyword_history=false&search_source=omnisearch_user&source=navbar"><i class="glyphicon glyphicon-send"></i> Bukalapak</a>&nbsp;&nbsp;
						<a class="grey-text text-lighten-3" href="https://api.whatsapp.com/send?phone=6281514047620&text=Halo%20ka%2c%20saya%20mau%20order%20sepatu&source=&data="><i class="glyphicon glyphicon-globe"></i> WhatsApp</a>
					</div>
				</div>
			</footer>

			<script>
				// JavaScript code 
				function search_animal() { 
					let input = document.getElementById('searchbar').value 
					input=input.toLowerCase(); 
					let x = document.getElementsByClassName('animals'); 

					for (i = 0; i < x.length; i++) {  
						if (!x[i].innerHTML.toLowerCase().includes(input)) { 
							x[i].style.display="none"; 
						} 
						else { 
							x[i].style.display="list-item";                  
						} 
					} 
				} 
			</script>
			
		</body>
		</html>