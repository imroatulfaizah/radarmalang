
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

            <a class="navbar-brand page-scroll" href="#top-page">KLASIFIKASI BERITA RADAR MALANG</a>
        </div>

        <div class="collapse navbar-collapse navbar-right sa-navbar" id="navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="hidden">
                    <a class="page-scroll" href="#top-page"></a>
                </li>
                <li>
                    <a class="page-scroll" href="<?php echo base_url().'blog/olahraga'?>">Olahraga</a>
                </li>
                <li>
                    <a class="page-scroll" href="<?php echo base_url().'blog/teknologi'?>">Teknologi</a>
                </li>
                <li>
                    <a class="page-scroll" href="#about">Politik</a>
                </li>
				<li>
                    <a class="page-scroll" href="#login">Pendidikan</a>
                </li>
            </ul>
        </div>
    </div>
</nav><!--AKHIR DARI NAVBAR -->


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

	<script src="<?php echo base_url().'assets/jquery/jquery-2.2.3.min.js'?>"></script>
	<script type="text/javascript" src="<?php echo base_url().'assets/js/bootstrap.js'?>"></script>
</body>
</html>