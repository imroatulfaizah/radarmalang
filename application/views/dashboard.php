<!DOCTYPE html>
<html>
<head>
	<title>Klasifikasi Berita</title>
	<meta charset="utf-8" />
	<meta name="url" content="<?=base_url()?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="shortcut icon" href="<?=base_url()?>assets/img/radar.png" type="image/x-icon" />
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/styles.css">
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/material-icons.css">
</head>
<body>
<div id="wrapper">
	<?php $this->load->view('template');?>	

	<div id="page-wrapper">
    	<div id="page-inner">

    		<div class="row">
                <div class="col-md-12">
                    <h2 class="page-header">Dashboard</h2>
                </div>
            </div>

            <!-- CARDS -->
            <div class="row">

                <div class="col-md-3 col-sm-12 col-xs-12">
                    <div class="panel panel-primary text-center no-border bg-color-blue">
                        <div class="panel-body">
                            <i class="material-icons material-icons-5x">library_books</i>
                            <h3 id="jumlah-data-latih"><?php echo $total_traindata; ?></h3>
                        </div>
                        <div class="panel-footer back-footer-blue">
                            Jumlah Berita Data Latih
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-12 col-xs-12">
                    <div class="panel panel-primary text-center no-border bg-color-brown">
                        <div class="panel-body">
                            <i class="material-icons material-icons-5x">library_books</i>
                            <h3 id="jumlah-data-uji"><?php echo $total_testdata; ?></h3>
                        </div>
                        <div class="panel-footer back-footer-brown">
                            Jumlah Berita Data Uji
                        </div>
                    </div>
                </div>
            
                <div class="col-md-3 col-sm-12 col-xs-12">
                    <div class="panel panel-primary text-center no-border bg-color-green">
                        <div class="panel-body">
                            <i class="material-icons material-icons-5x">library_books</i>
                            <h3 id="jumlah-data-latih-positif"><?php echo $pol_traindata; ?></h3>
                        </div>
                        <div class="panel-footer back-footer-green">
                             Berita Data Latih Politik
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-12 col-xs-12">
                    <div class="panel panel-primary text-center no-border bg-color-red">
                        <div class="panel-body">
                            <i class="material-icons material-icons-5x">library_books</i>
                            <h3 id="jumlah-data-latih-negatif"><?php echo $ola_traindata; ?></h3>
                        </div>
                        <div class="panel-footer back-footer-red">
                            Berita Data Latih Olahraga
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-12 col-xs-12">
                    <div class="panel panel-primary text-center no-border bg-color-red">
                        <div class="panel-body">
                            <i class="material-icons material-icons-5x">library_books</i>
                            <h3 id="jumlah-data-latih-kesehatan"><?php echo $kes_traindata; ?></h3>
                        </div>
                        <div class="panel-footer back-footer-blue">
                            Berita Data Latih Kesehatan
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-12 col-xs-12">
                    <div class="panel panel-primary text-center no-border bg-color-red">
                        <div class="panel-body">
                            <i class="material-icons material-icons-5x">library_books</i>
                            <h3 id="jumlah-data-latih-pendidikan"><?php echo $pen_traindata; ?></h3>
                        </div>
                        <div class="panel-footer back-footer-green">
                            Berita Data Latih Pendidikan
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-12 col-xs-12">
                    <div class="panel panel-primary text-center no-border bg-color-red">
                        <div class="panel-body">
                            <i class="material-icons material-icons-5x">library_books</i>
                            <h3 id="jumlah-data-latih-entertainment"><?php echo $ent_traindata; ?></h3>
                        </div>
                        <div class="panel-footer back-footer-red">
                             Data Latih Entertainment
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-12 col-xs-12">
                    <div class="panel panel-primary text-center no-border bg-color-red">
                        <div class="panel-body">
                            <i class="material-icons material-icons-5x">library_books</i>
                            <h3 id="jumlah-data-latih-bisnis"><?php echo $bis_traindata; ?></h3>
                        </div>
                        <div class="panel-footer back-footer-blue">
                            Berita Data Latih Bisnis
                        </div>
                    </div>
                </div>
                
                <div class="col-md-3 col-sm-12 col-xs-12">
                    <div class="panel panel-primary text-center no-border bg-color-red">
                        <div class="panel-body">
                            <i class="material-icons material-icons-5x">library_books</i>
                            <h3 id="jumlah-data-latih-teknologi"><?php echo $tek_traindata; ?></h3>
                        </div>
                        <div class="panel-footer back-footer-green">
                            Berita Data Latih Teknologi
                        </div>
                    </div>
                </div>

            </div>
            <!-- AKHIR DARI CARDS -->
			
			<!--CHART-->
			<div class="row">
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
							Perbandingan Semua Data Latih
						</div>
						<div class="panel-body">
							<div id="pos-neg-chart" class="chart"></div>
						</div>
					</div>
				</div>
			</div>
			<!--AKHIR DARI CHART-->
			<!-- < print_r($testing);?> -->
    </div>
    <footer><p class="text-center">Copyright &copy 2020 Klasifikasi Berita | Imroatul Faizah.</a></p></footer>
</div>

<!-- SCRIPTS -->
	<script type="text/javascript" src="<?=base_url()?>assets/js/jquery.js"></script>
	<script type="text/javascript" src="<?=base_url()?>assets/js/bootstrap.js"></script>
	
<!-- METIS MENU SCRIPTS-->
	<script src="<?=base_url()?>assets/js/jquery.metisMenu.js"></script>

<!-- MORRIS JS -->
<script src="<?=base_url()?>assets/js/charts/raphael.min.js"></script>
    <script src="<?=base_url()?>assets/js/charts/morris.min.js"></script>
	
<!-- Custom JS -->
    <script src="<?=base_url()?>assets/js/custom-scripts.js"></script>
	<script src="<?=base_url()?>assets/js/dashboard.js"></script>
	

</body>

</html>