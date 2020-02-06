<!DOCTYPE html>
<html>
<head>
	<title>Post Artikel</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/bootstrap.min.css'?>">
</head>
<body>
	<div class="container">
		<div class="col-md-8 col-md-offset-2">
			<h2>MY BLOG</h2><hr/>
			<form action="<?php echo base_url().'blog/simpan_post'?>" method="post" enctype="multipart/form-data">
	            <input type="text" name="judul" class="form-control" placeholder="Judul" required/><br/>
	            <textarea  id="editor1" name="isi" class="form-control" required></textarea><br/>
	            <input type="file" name="filefoto" required><br>
	            <button class="btn btn-success" type="submit">POST</button>
            </form>
		</div>
		
	</div>
	
	<script src="<?php echo base_url().'assets/jquery/jquery-2.2.3.min.js'?>"></script>
	<script type="text/javascript" src="<?php echo base_url().'assets/js/bootstrap.js'?>"></script>
	<script type="text/javascript" src="<?php echo base_url().'assets/ckeditor/ckeditor.js'?>"></script>
	<script type="text/javascript">
	  $(function () {
	  	// Fungsi untuk mengganti textarea dengan ckeditor style
	      CKEDITOR.replace( 'editor1' ,{
              extraPlugins : 'syntaxhighlight',        
              toolbar: [
                     ['Source'] ,
                     ['Bold', 'Italic', '-', 'NumberedList', 'BulletedList', '-', 'Link', 'Unlink','-','Image'] ,
                   ]              
            });

	  });
	</script>
</body>
</html>