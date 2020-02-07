
<!DOCTYPE html>
<html>
<head>
    <title>KLASIFIKASI BERITA RADAR MALANG</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="url" content="<?=base_url()?>" />
	<link rel="shortcut icon" href="<?=base_url()?>assets/img/radar.png" type="image/x-icon" />
    <link rel="stylesheet" href="<?=base_url()?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?=base_url()?>assets/css/material-icons.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/css/visitor/visitor.css">
	<link rel="stylesheet" href="<?=base_url()?>assets/css/visitor/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/bootstrap.min.css'?>">
</head>

<body id="top-page" data-spy="scroll" data-target=".navbar-fixed-top">
<!--NAVBAR-->
<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header page-scroll">
            <button class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <a class="navbar-brand page-scroll" href="<?php echo base_url().'blog/lists'?>">KLASIFIKASI BERITA RADAR MALANG</a>
        </div>

        <div class="collapse navbar-collapse navbar-right sa-navbar" id="navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="hidden">
                    <a class="page-scroll" href="#top-page"></a>
                </li>
                <li>
                    <a class="page-scroll" href="<?php echo base_url().'blog/politik'?>">Politik</a>
                </li>
                <li>
                    <a class="page-scroll" href="<?php echo base_url().'blog/olahraga'?>">Olahraga</a>
                </li>
                <li>
                    <a class="page-scroll" href="<?php echo base_url().'blog/kesehatan'?>">Kesehatan</a>
                </li>
                <li>
                    <a class="page-scroll" href="<?php echo base_url().'blog/pendidikan'?>">Pendidikan</a>
                </li>
                <li>
                    <a class="page-scroll" href="<?php echo base_url().'blog/entertainment'?>">Entertainment</a>
                </li>
                <li>
                    <a class="page-scroll" href="<?php echo base_url().'blog/bisnis'?>">Bisnis</a>
                </li>
                <li>
                    <a class="page-scroll" href="<?php echo base_url().'blog/teknologi'?>">Teknologi</a>
                </li>
            </ul>
        </div>
	</div>
	


</nav><!--AKHIR DARI NAVBAR -->
<div class="about-title">
					<h3>TENTANG NAIVE BAYES</h3>
					<h3>TENTANG NAIVE BAYES</h3>
				</div>

				<div>
					<div class="modal-content">
						<input type="text" id="keyword">
						<button type="button" id="btn-search">SEARCH</button>
					</div>
				</div>
	<div class="container">
	
		<?php
			function limit_words($string, $word_limit){
                $words = explode(" ",$string);
                return implode(" ",array_splice($words,0,$word_limit));
            }
			foreach ($data->result() as $row) :
		?>
		<div class="col-md-8 col-md-offset-2">
			<h2><?php echo $row->post_judul;?></h2><hr/>
			<img src="<?php echo base_url().'assets/img/'.$row->post_image;?>">
			<?php echo limit_words($row->post_isi,30);?><a href="<?php echo base_url().'artikel/'.$row->post_slug;?>"> <strong>Selengkapnya ></strong></a>
		</div>
		<?php endforeach;?>
    </div>
	<div></div>
	<div>
		<div class="modal-content">
			<h3></h3>
		</div>
	</div>
    <!--TENTANG-->
<div class="about" id="about">
    <div class="container about-container">
		<div class="rov">
			<div class="col-sm-4 col=md-4">
				<div class="about-title">
					<h3>LIBRARIES</h3>
				</div>
				<div class="about-wrapper">
					<p><a class="link" href="https://jquery.com">JQuery</a></p>
					<p><a class="link" href="http://imakewebthings.com/waypoints">Waypoints</a></p>
					<p><a class="link" href="http://gsgd.co.uk/sandbox/jquery/easing/">JQuery Easing</a></p>
				</div>
			</div>
			<div class="col-sm-4 col=md-4">
				<div class="about-title">
					<h3>TAUTAN</h3>
				</div>
				<div class="about-wrapper">
					<a class="social-icon icon-twitter" href="https://twitter.com"><i class="fa fa-twitter"></i></a>
					<a class="social-icon icon-email" href="mailto:faizah.alfaza@gmail.com"><i class="fa fa-envelope-o"></i></a>
					<a class="social-icon icon-facebook" href="https://facebook.com"><i class="fa fa-facebook"></i></a>
					<a class="social-icon icon-instagram" href="https://instagram.com"><i class="fa fa-instagram"></i></a>
					<a class="social-icon icon-github" href="https://github.com/imroatulfaizah" target="_blank"><i class="fa fa-github"></i></a>
				</div>
			</div>
			<div class="col-sm-4 col-md-4">
				<div class="about-title">
					<h3>TENTANG NAIVE BAYES</h3>
				</div>
				<div class="about-wrapper about-us">
					<p>Sistem Klasifikasi Berita ini menggunakan metode Naive Bayes untuk mengklasifikasikan berita di Radar Malang. 
					Deskripsi metode Naive Bayes lebih lengkap dapat dilihat di <a class="link-bootstrap"href="https://en.wikipedia.org/wiki/Naive_Bayes_classifier">tautan berikut.</a></p>
				</div>
			</div>
		</div>
	</div>
</div>

<footer class="footer" id="footer">
	<p class="footer-text">&copy Copyright Sistem Klasifikasi Berita. All rights reserved</br>
	Powered by <a class="link-bootstrap" href="http://getbootstrap.com">Bootstrap</a></p>
</footer>

<!--MODAL WARNING-->
<div class="modal fade text-center" id="modal-error" role="dialog">
    <div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">ERROR</h4>
			</div>
			<div class="modal-body">
				<p>Berita harus diisi dan tidak boleh berisi lebih dari 7500 karakter.</p>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
			</div>
		</div>
    </div>
</div>

<!--SCRIPTS-->
<script src="<?=base_url()?>assets/js/jquery.js"></script>
<script src="<?=base_url()?>assets/js/bootstrap.min.js"></script>
<script src="<?=base_url()?>assets/js/visitor/jquery.easing.min.js"></script>
<script src="<?=base_url()?>assets/js/visitor/scroll.js"></script>
<script src="<?=base_url()?>assets/js/visitor/jquery.waypoints.js"></script>
<script src="<?=base_url()?>assets/js/visitor/visitor-scripts.js"></script>

<!-- CHARACTER COUNTERS UNTUK TEXTAREA REVIEW VISITOR -->
<script src="<?=base_url()?>assets/js/countcharacters.js"></script>

<!-- FORM VALIDATION-->
<script src="<?=base_url()?>assets/js/validation/jquery.validate.js"></script>
<script src="<?=base_url()?>assets/js/validation/additional-methods.min.js"></script>
<!-- MORRIS JS -->
<script src="<?=base_url()?>assets/js/charts/raphael.min.js"></script>
<script src="<?=base_url()?>assets/js/charts/morris.min.js"></script>

<script src="<?=base_url()?>assets/js/custom-scripts.js"></script>
	<script src="<?=base_url()?>assets/js/dashboard.js"></script>
	<script src="<?=base_url()?>assets/js/jquery.metisMenu.js"></script>


	<script src="<?php echo base_url().'assets/jquery/jquery-2.2.3.min.js'?>"></script>
	<script type="text/javascript" src="<?php echo base_url().'assets/js/bootstrap.js'?>"></script>
</body>
</html>