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
                    <h2 class="page-header">Perhitungan</h2>
                </div>
            </div>

            <!-- CARDS -->
            <div class="row">

			<table class="table table-dark">
            <thead>
                <tr>
                    <th>ID Berita</th>
                    <th>Pol Prior Prob</th>
                    <th>Ola Prior Prob</th>
					<th>Kes Prior Prob</th>
					<th>Pen Prior Prob</th>
					<th>Ent Prior Prob</th>
					<th>Bis Prior Prob</th>
					<th>Tek Prior Prob</th>
					<th>Total Pol Likelihood</th>
					<th>Total Ola Likelihood</th>
					<th>Total Kes Likelihood</th>
					<th>Total Pen Likelihood</th>
                    <th>Total Ent Likelihood</th>
					<th>Total Bis Likelihood</th>
					<th>Total Tek Likelihood</th>
					
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                foreach ($sa_datauji as $u) :
                    ?>
                    <tr>
                        
                        <td><?= $u['id_berita'] ?></td>
						<td><?= $u['pol_prior_prob'] ?></td>
						<td><?= $u['ola_prior_prob'] ?></td>
						<td><?= $u['kes_prior_prob'] ?></td>
						<td><?= $u['pen_prior_prob'] ?></td>
						<td><?= $u['ent_prior_prob'] ?></td>
						<td><?= $u['bis_prior_prob'] ?></td>
						<td><?= $u['tek_prior_prob'] ?></td>
                        <td><?= $u['total_pol_likelihood'] ?></td>
						<td><?= $u['total_ola_likelihood'] ?></td>
						<td><?= $u['total_kes_likelihood'] ?></td>
						<td><?= $u['total_pen_likelihood'] ?></td>
						<td><?= $u['total_ent_likelihood'] ?></td>
						<td><?= $u['total_bis_likelihood'] ?></td>
						<td><?= $u['total_tek_likelihood'] ?></td>
                    </tr>
                <?php
                endforeach;
                ?>
            </tbody>
        </table>
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