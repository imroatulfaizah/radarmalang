<?php
	$b=$data->row_array();
	var_dump($b);
?>
<!DOCTYPE html>
<html>
<head>
    <title><?php echo $b['post_judul'];?></title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/bootstrap.min.css'?>">
     aaa
</head>
<body>
    <div class="container">
        <div class="col-md-8 col-md-offset-2">
            <h2><?php echo $b['post_judul'];?></h2><hr/>
            <img src="<?php echo base_url().'assets/img/'.$b['post_image'];?>">
            <?php echo $b['post_isi'];?>
        </div>
         
    </div>
 
    <script src="<?php echo base_url().'assets/jquery/jquery-2.2.3.min.js'?>"></script>
    <script type="text/javascript" src="<?php echo base_url().'assets/js/bootstrap.js'?>"></script>
     
</body>
</html>