<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Presensi Karyawan</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Presensi Karyawan">
    <meta name="author" content="">
    
    <!-- Styles -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/css/bootstrap-responsive.css" rel="stylesheet">
    
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="assets/js/html5shiv.js"></script>
    <![endif]-->    
	<style type="text/css">
		body {
			padding-top: 20px;
		}
		/* Custom container */
		.container-narrow {
			margin: 0 auto;
			max-width: 900px;
		}   
		/* Supporting marketing content */
		.main-content {
			margin: 20px 0;
			min-height:450px;
		}
		.content-item {
			margin-top: 10px;
		}
    </style>    
</head>
<body>
<div class="container-narrow">
    <div>        
        <h3 class="muted">Presensi Karyawan</h3>
    </div>
    
    <hr>
    <div class="row-fluid main-content">
        <div class="span7">
        
        <!-- Menampilkan Error -->
        <?php if(validation_errors()): ?>
            <div class="alert alert-error">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <?php echo validation_errors(); ?>
            </div>
        <?php endif?>        
        <!-- End Menampilkan Error -->
        <!-- Menampilkan Flashdata -->
		<?php 
        if($this->session->flashdata('sukses')):
        ?>
        <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <?php echo $this->session->flashdata('sukses'); ?>
        </div>
        <?php endif; ?>
        <!-- End Menampilkan Flashdata -->
 
        <form action="" method="post" class="form-horizontal">
            <div class="control-group">
                <label class="control-label">NIP</label>
                <div class="controls">
                    <input type="text" name="nip" placeholder="NIP" value="<?php echo set_value('nip'); ?>">
                </div>
            </div>
            <div class="control-group">
                <label class="control-label">Jenis</label>
                <div class="controls">
                    <label class="radio">
                        <input type="radio" name="jenis" value="masuk" <?php echo set_radio('jenis', 'masuk'); ?>> Masuk                
                    </label>
                    <label class="radio">
                        <input type="radio" name="jenis" value="keluar" <?php echo set_radio('jenis', 'keluar'); ?>>Keluar
                    </label>                    
                    <label class="radio">
                        <input type="radio" name="jenis" value="cuti" <?php echo set_radio('jenis', 'cuti'); ?>>Cuti
                    </label>                    
                    <label class="radio">
                        <input type="radio" name="jenis" value="ijin" <?php echo set_radio('jenis', 'ijin'); ?>>Ijin
                    </label>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label">Password</label>
                <div class="controls">
                    <input type="password" name="password" placeholder="Password">
                </div>
            </div>
            <div class="control-group">
                <div class="controls">
                    <input type="submit" class="btn btn-success" value="Enter">
                </div>
            </div>
        </form>
            
        </div>
        
        <div class="span5 well">
        	<?php if($data_presensi): ?>
            <?php foreach($data_presensi as $dp): ?>
        	<div class="content-item">
                <h4><?php echo $dp['nama'] ?></h4>
                <p>Presensi <span class="text-info"><?php echo $dp['jenis'] ?></span> pada <?php echo date('d F Y H:i',$dp['waktu']) ?>.</p>
            </div>
            <?php endforeach ?>
            <?php endif ?>            
        </div>
    </div> 
       
    <hr>
    <div class="footer">
    	<p>&copy; Workshop 2014</p>
    </div>    
</div> <!-- /container -->
<!-- Javascript -->
<script src="assets/js/jquery.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
</body>
</html>
