
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

            <a class="navbar-brand page-scroll" href="#top-page">KLASIFIKASI BERITA RADAR MALANG</a>
        </div>

        <div class="collapse navbar-collapse navbar-right sa-navbar" id="navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="hidden">
                    <a class="page-scroll" href="#top-page"></a>
                </li>
                <li>
                    <a class="page-scroll" href="#intro">Intro</a>
                </li>
                <li>
                    <a class="page-scroll" href="#analisis">Klasifikasi Berita</a>
                </li>
                <li>
                    <a class="page-scroll" href="#about">Tentang</a>
                </li>
				<li>
                    <a class="page-scroll" href="#login">Login</a>
                </li>
            </ul>
        </div>
    </div>
</nav><!--AKHIR DARI NAVBAR -->

<!--INTRO-->
<div class="jumbotron sa-jumbotron text-center" id="jumbo">
    <div class="container jumbo-vertical-center">
        <h1>Sistem Klasifikasi Berita <br> Radar Malang</h1>
        <p>Sistem ini untuk mengklasifikasikan artikel berita sebelum diposting.
        </p>
    </div>
    <a class="btn btn-lg btn-primary page-scroll" href="#analisis">Masukkan Berita Anda</a>
</div>

<div class="intro" id="intro">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12 intro-container">
				<i class="icon material-icons">library_books</i>
				<div class="intro-wrapper">
					<p class="intro-number" data-stop="<?php echo $total_traindata;?>"><?php echo $total_traindata;?></p>
					<p class="intro-text">Total Data Berita</p>
				</div>
			</div>
		</div>
	</div>
</div>


<!-- <div class="intro" id="intro">
	<div class="container">
		<div class="row">
			<div class="col-md-4 col-sm-4 intro-container">
				<i class="icon material-icons">library_books</i>
				<div class="intro-wrapper">
					<p class="intro-number" data-stop=" echo $pol_traindata;?>"> echo $ola_traindata;?></p>
					<p class="intro-text">Berita Politik</p>
				</div>
			</div>
			<div class="col-md-4 col-sm-4 intro-container">
				<i class="icon material-icons">library_books</i>
				<div class="intro-wrapper">
					<p class="intro-number" data-stop=" echo $ola_traindata;?>"> echo $ola_traindata;?></p>
					<p class="intro-text">Berita Olahraga</p>
				</div>
			</div>
			<div class="col-md-4 col-sm-4 intro-container">
				<i class="icon material-icons">library_books</i>
				<div class="intro-wrapper">
					<p class="intro-number" data-stop="< echo $kes_traindata;?>"> echo $kes_traindata;?></p>
					<p class="intro-text">Berita Kesehatan</p>
				</div>
			</div>
			<div class="col-md-4 col-sm-4 intro-container">
				<i class="icon material-icons">library_books</i>
				<div class="intro-wrapper">
					<p class="intro-number" data-stop="< echo $pen_traindata;?>">< echo $pen_traindata;?></p>
					<p class="intro-text">Berita Pendidikan</p>
				</div>
			</div>
			<div class="col-md-4 col-sm-4 intro-container">
				<i class="icon material-icons">library_books</i>
				<div class="intro-wrapper">
					<p class="intro-number" data-stop="< echo $ent_traindata;?>">< echo $ent_traindata;?></p>
					<p class="intro-text">Berita Entertainment</p>
				</div>
			</div>
			<div class="col-md-4 col-sm-4 intro-container">
				<i class="icon material-icons">library_books</i>
				<div class="intro-wrapper">
					<p class="intro-number" data-stop="< echo $bis_traindata;?>"><echo $bis_traindata;?></p>
					<p class="intro-text">Berita Bisnis</p>
				</div>
			</div>
			<div class="col-md-4 col-sm-4 intro-container">
				
				
			</div>
			<div class="col-md-4 col-sm-4 intro-container">
				<i class="icon material-icons">library_books</i>
				<div class="intro-wrapper">
					<p class="intro-number" data-stop="< echo $tek_traindata;?>">< echo $tek_traindata;?></p>
					<p class="intro-text">Berita Teknologi</p>
				</div>
			</div>

			<CHART-->
			<!-- <div class="row">
				<div class="col-md-6 col-sm-12 col-xs-12">
					<div class="panel panel-default text-center no-border">
						<div class="panel-heading-small">
							Perbandingan Data Latih dan Data Uji
						</div>
						<div class="panel-body">
							<div id="latih-dan-uji-chart" class="chart"></div>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-sm-12 col-xs-12">
					<div class="panel panel-default text-center no-border">
						<div class="panel-heading-small">
							Perbandingan Data Latih Politik dan Olahraga
						</div>
						<div class="panel-body">
							<div id="pos-neg-chart" class="chart"></div>
						</div>
					</div>
				</div>
			</div> 
			AKHIR DARI CHART

		</div>
	</div>
</div> -->

<!--KLASIFIKASI BERITA-->
<div class="analisis" id="analisis">
    <p class="analisis-title">KLASIFIKASI BERITA</p>
	<div class="container" style="width:80%;">
		<form id="visitor-form">
			<div class="form-group">
				<textarea type="text" id="visitor-review" name="visitor-review" class="form-control textarea" rows="8" onkeyup="count_visitor_review(this);" 
				spellcheck="false" placeholder="Ketik atau paste berita di sini..."></textarea>
			    <div class="text-right">
					<span class="text-muted" id="count-visitor-review">0</span>
					<span class="text-muted">/7500 karakter</span>
			    </div>
			</div>
			<button class="btn btn-lg btn-secondary" id="visitor-btn" type="submit">LIHAT BERITA</button>
		</form>
		<div id="loader-wrapper"></div>
		<div id="analisis-wrapper">
			<!--HASIL ANALISIS DIMUAT DI SINI-->
		</div>
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
					<p>Sistem Klasifikasi Berita ini menggunakan metode Naive Bayes untuk menghitung probabilitas review film yang diberikan. 
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

</body>
</html>
