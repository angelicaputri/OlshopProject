<!DOCTYPE html>
<html>
<title>About Us</title>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"/>
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" />
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('style.css'); ?>">
</head>
<body>
	<?php $this->load->view('layout/top_menu') ?>

  <!-- Header -->
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

  <!-- Page content -->
  <div class="w3-content w3-padding" style="max-width:1564px">

    <!-- Project Section -->
    <div class="w3-container w3-padding-32" id="projects">
      <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">About</h3>
    </div>

    <!-- Contact Section -->
    <div class="w3-container w3-padding-32" id="contact">
      <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">Contact</h3>
      <p>Lets get in touch and talk about your next project.</p>
      <form action="/action_page.php" target="_blank">
        <input class="w3-input w3-border" type="text" placeholder="Name" required name="Name">
        <input class="w3-input w3-section w3-border" type="text" placeholder="Email" required name="Email">
        <input class="w3-input w3-section w3-border" type="text" placeholder="Subject" required name="Subject">
        <input class="w3-input w3-section w3-border" type="text" placeholder="Comment" required name="Comment">
        <button class="w3-button w3-black w3-section" type="submit">
          <i class="fa fa-paper-plane"></i> SEND MESSAGE
        </button>
      </form>
    </div>
    <!-- End page content -->
  </div>


  <!-- Footer -->
  <footer class="w3-center w3-black w3-padding-16">
    <p>Powered by Putri</p>
 </footer>

</body>
</html>
