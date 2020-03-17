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
	<?php $this->load->view('template'); ?>	

	<div id="page-wrapper">
    	<div id="page-inner">

    		<div class="row">
                <div class="col-md-12">
                    <h2 class="page-header"> Sistem Klasifikasi Berita</h2>
                </div>
            </div>

			<div class="container">
		<div class="col-md-8 col-md-offset-2">
			<h2>MY BLOG</h2><hr/>
			<form action="<?php echo base_url().'blog/simpan_post'?>" method="post" enctype="multipart/form-data">
				<input type="text" name="post_author" class="form-control" placeholder="post_author" required/><br/>
				<input type="text" name="post_title" class="form-control" placeholder="post_title" required/><br/>
				<!-- visitor-review aku ganti jadi post_content -->
	            <textarea  id="post_content" name="post_content" class="form-control" required></textarea><br/>
				<input type="file" name="foto" />
				<div class="form-group">
                          <label for="post_status">Post Status</label>
                          <select class="form-control text-left" name="post_status">
                              <option value="draft">DRAFT</option>
                          </select>
                      </div>
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
            
            <!--TABEL MULAI DI SINI-->
            <!-- <div id="divtabeltest"> -->
                <!--TABEL DIMUAT DI SINI -->
            </div>
            <!--TABEL BERAKHIR DI SINI--> 

            </div>
            <footer><p class="text-center">Copyright &copy 2020 Klasifikasi Berita | Imroatul Faizah.</a></p></footer>
    	</div>
    </div>
</div>

<!-- SCRIPTS -->
	<script type="text/javascript" src="<?=base_url()?>assets/js/jquery.js"></script>
	<script type="text/javascript" src="<?=base_url()?>assets/js/bootstrap.js"></script>
<!-- DATA TABLE SCRIPTS -->
    <script src="<?=base_url()?>assets/js/dataTables/jquery.dataTables.js"></script>
    <script src="<?=base_url()?>assets/js/dataTables/dataTables.bootstrap.js"></script>
    <script src="<?=base_url()?>assets/js/visitor/klasifikasi.js"></script>
	
<!-- METIS MENU SCRIPTS-->
	<script src="<?=base_url()?>assets/js/jquery.metisMenu.js"></script>
      <!-- Custom Js -->
    <script src="<?=base_url()?>assets/js/custom-scripts.js"></script>

</body>
</html>