<!DOCTYPE html>
<html lang="en">
	<head>

  
    <meta charset="utf-8"><title>Form Pendaftaran</title>
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content=""><!-- Le styles -->

    
    <link href="./css/bootstrap.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 40px;
        padding-bottom: 40px;
        background-color: #f5f5f5;
      }

      .form-signin {
        max-width: 300px;
        padding: 19px 29px 29px;
        margin: 0 auto 20px;
        background-color: #fff;
        border: 1px solid #e5e5e5;
        -webkit-border-radius: 5px;
           -moz-border-radius: 5px;
                border-radius: 5px;
        -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.05);
           -moz-box-shadow: 0 1px 2px rgba(0,0,0,.05);
                box-shadow: 0 1px 2px rgba(0,0,0,.05);
      }
      .form-signin .form-signin-heading,
      .form-signin .checkbox {
        margin-bottom: 10px;
      }
      .form-signin input[type="text"],
      .form-signin input[type="password"] {
        font-size: 16px;
        height: auto;
        margin-bottom: 15px;
        padding: 7px 9px;
      }
ol{ margin-top:25px !important;
}

    </style>
    <link href="./css/bootstrap-responsive.css" rel="stylesheet"><!-- HTML5 shim, for IE6-8 support of HTML5 elements --><!--[if lt IE 9]>
    <script src="../assets/js/html5shiv.js"></script>
	<![endif]--><!-- Fav and touch icons -->
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="./ico/apple-touch-icon-144-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="./ico/apple-touch-icon-114-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="./ico/apple-touch-icon-72-precomposed.png">
	<link rel="apple-touch-icon-precomposed" href="./ico/apple-touch-icon-57-precomposed.png">
	<link rel="shortcut icon" href="./ico/favicon.png">
</head>
<body>

<?php
	if (!empty($_GET['message']) &&  $_GET['message'] == 'success') {
		echo '<h3>Data Berhasil Dikirim!</h3>';
	}
?>
<form class="form-horizontal" name="input_data" action="kirim-data.php" method="post">
    <div class="control-group"><!--nama-studio-->
		<label class="control-label" for="namastu">Nama Studio Foto</label>
		<div class="controls">
			<input type="text" id="namastu" name="namastu" placeholder="Nama Studio Foto" required>
		</div>
    </div>
    
    <div class="control-group"><!--alamat-->
		<label class="control-label" for="alamat">Alamat</label>
		<div class="controls">
			<input type="text" name="alamat" id="alamat"  placeholder="Alamat" required>
		</div>
    </div>
    
    <div class="control-group"><!--telp-->
    <label class="control-label" for="telp">Telp</label>
		<div class="controls">
			<input type="text" name="telp" id="telp"  placeholder="telp" required>
		</div>
    </div>
	
    <div class="control-group"><!--siup-->
		<label class="control-label" for="siup">No. SIUP</label>
		<div class="controls">
			<input type="text" name="siup" id="siup" placeholder="siup" required>
		</div>
    </div>
    
    <div class="control-group"><!--tdp-->
		<label class="control-label" for="tdp">No. TDP</label>
		<div class="controls">
			<input type="text" id="tdp" name="tdp" placeholder="No. TDP" required>
		</div>
    </div>
	</div>
    <div class="control-group"><!--sktu-->
		<label class="control-label" for="sktu">No. SKTU</label>
		<div class="controls">
			<input type="text" id="sktu" name="sktu" placeholder="No. SKTU" required>
		</div>
    </div>
    
    <div class="control-group">
    <div class="controls">
    <label class="checkbox">
    <input type="checkbox" name="check_list[]" required> Bahwa data yang saya masukan benar dan apabila terjadi hal sesuatu hal dikemudian hari, maka kami akan bersedia untuk bertanggung jawab dengan data tersebut.
    </label>
    <button type="submit" name="submit" class="btn">Kirim</button>
    </div>
    </div></div>
    </form>

<ol>

<li> Bersedia mebayar dan mengikuti syarat dan ketentuan yang diberlakukan panitia</li>
<li> Pendaftaran mulai tanggal 22 Februari 2013 sampai dengan 23 Februari 2013, dan ditutup pada tanggal 23 Februari 2013 jam 15.00 Wita</li>
<li> Bagi calon peserta yang memenuhi syarat akan di hubungi melalui email dan telp </li>
</ol>
  </body>
</html>
