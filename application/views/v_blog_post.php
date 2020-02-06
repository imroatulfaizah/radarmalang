<!DOCTYPE html>
<html>
<head>
	<title>Post Artikel</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/bootstrap.min.css'?>">
	<link rel="shortcut icon" href="<?=base_url()?>assets/img/radar.png" type="image/x-icon" />
    <link rel="stylesheet" href="<?=base_url()?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?=base_url()?>assets/css/material-icons.css">
	<link rel="stylesheet" href="<?=base_url()?>assets/css/visitor/font-awesome.min.css">
</head>
<body>
	<div class="container">
		<div class="col-md-8 col-md-offset-2">
			<h2>MY BLOG</h2><hr/>
			<form action="<?php echo base_url().'blog/simpan_post'?>" method="post" enctype="multipart/form-data">
	            <input type="text" name="judul" class="form-control" placeholder="Judul" required/><br/>
	            <textarea  id="visitor-review" name="visitor-review" class="form-control" required></textarea><br/>
	            <input type="file" name="filefoto" required><br>
	            <button id="visitor-btn" class="btn btn-success" type="submit">POST</button>
            </form>
		</div>
		
	</div>
	<div id="analisis-wrapper">
			<!--HASIL ANALISIS DIMUAT DI SINI-->
		</div>
	
	<script src="<?php echo base_url().'assets/jquery/jquery-2.2.3.min.js'?>"></script>
	<script type="text/javascript" src="<?php echo base_url().'assets/js/bootstrap.js'?>"></script>
	<script type="text/javascript" src="<?php echo base_url().'assets/ckeditor/ckeditor.js'?>"></script>
	<script type="text/javascript">
	  $(function () {
	  	// Fungsi untuk mengganti textarea dengan ckeditor style
	      CKEDITOR.replace( 'visitor-review' ,{
              extraPlugins : 'syntaxhighlight',        
              toolbar: [
                     ['Source'] ,
                     ['Bold', 'Italic', '-', 'NumberedList', 'BulletedList', '-', 'Link', 'Unlink','-','Image'] ,
                   ]              
            });

	  });
	</script>
	<!--SCRIPTS-->
<script src="<?=base_url()?>assets/js/jquery.js"></script>
<script src="<?=base_url()?>assets/js/bootstrap.min.js"></script>
<script src="<?=base_url()?>assets/js/visitor/jquery.easing.min.js"></script>
<script src="<?=base_url()?>assets/js/visitor/scroll.js"></script>
<script src="<?=base_url()?>assets/js/visitor/jquery.waypoints.js"></script>
<script src="<?=base_url()?>assets/js/visitor/klasifikasi.js"></script>

<!-- CHARACTER COUNTERS UNTUK TEXTAREA REVIEW VISITOR -->
<script src="<?=base_url()?>assets/js/countcharacters.js"></script>

<!-- FORM VALIDATION-->
<script src="<?=base_url()?>assets/js/validation/jquery.validate.js"></script>
<script src="<?=base_url()?>assets/js/validation/additional-methods.min.js"></script>
<!-- MORRIS JS -->
<script src="<?=base_url()?>assets/js/charts/raphael.min.js"></script>
<script src="<?=base_url()?>assets/js/charts/morris.min.js"></script>

<script src="<?=base_url()?>assets/js/custom-scripts.js"></script>
	<script src="<?=base_url()?>assets/js/jquery.metisMenu.js"></script>
</body>
</html>