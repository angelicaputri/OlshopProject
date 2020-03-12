<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Keranjang</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" />
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
		<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
	</head>
	<body>
		<?php $this->load->view('layout/top_menu') ?>
		
		<table class="table table-bordered table-striped table-hover">
			<thead>
				<tr>
					<th>#</th>
					<th>Product</th>
					<th>Qty</th>
					<th>Price</th>
					<th>Subtotal</th>
				</tr>
			</thead>
			<tbody>
				<?php 
					$i=0;
					foreach ($this->cart->contents() as $items) : 
					$i++;
				?>
				<tr>
					<td><?= $i ?></td>
					<td><?= $items['name'] ?></td>
					<td><?= $items['qty'] ?></td>
					<td align="right"><?= number_format($items['price'],0,',','.') ?></td>
					<td align="right"><?= number_format($items['subtotal'],0,',','.') ?></td>
				</tr>
				<?php endforeach; ?>
			</tbody>
			<tfoot>
				<tr>
					<td align="right" colspan="4">Total </td>
					<td align="right"><?= number_format($this->cart->total(),0,',','.'); ?></td>
				</tr>
			</tfoot>
		</table>
		<div align="center">
			<?= anchor('Welcome/clear_cart','Clear Cart',['class'=>'btn btn-danger']) ?> 
			<?= anchor(base_url('Welcome'),'Continue Shopping',['class'=>'btn btn-primary']) ?> 
			<?= anchor('Order','Check Out',['class'=>'btn btn-success']) ?>
		</div>
		<footer class="w3-center w3-black w3-padding-16 w3-bottom">
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