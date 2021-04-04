<html>
<head>
<title>Aplikasi Apotek </title>
<!--bootstrap CSS-->
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<link href="css/bootstrap.min.css"rel="stylesheet">
<link href="css/style.css"rel="stylesheet">
</head>
<body>

<!--MEMBUAT NAVBAR -->
<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
<div class="navbar-header">
<a class="navbar-brand" rel="home" href="#">Apotek Mega</a>
<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
<span class="sr-only">Toggle navigation</span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
</div>
<div class="collapse navbar-collapse">
<ul class="nav navbar-nav">
<li><a href="index.php">Home</a></li>
<li class="dropdown">
<a href="#" class="dropdown-toggle" data-toggle="dropdown">Pencarian <b class="caret"></b></a>
<ul class="dropdown-menu">
<li><a href="?page=obat">Obat</a></li>
<li><a href="?page=pasien">Pasien</a></li>
<li><a href="?page=transaksi">Transaksi</a></li>
</ul>
</li>
<li class="dropdown">
<a href="#" class="dropdown-toggle" data-toggle="dropdown">Tambah Data <b class="caret"></b></a>
<ul class="dropdown-menu">
<li><a href="?page=addobat">Data Obat</a></li>
<li><a href="?page=addpasien">Data Pasien</a></li>
<li><a href="?page=addtransaksi">Data Transaksi</a></li>
</ul>
</li>
<li><a href="?page=kontak">Kontak Kami</a></li>

</ul>
</div>
</nav>
<!--END MEMBUAT NAVBAR -->
<body>
<br><br><br>

<?php //DISINI UNTUK SET HALAMAN PHP
$page = (isset($_GET['page']))? $_GET['page'] : "main";
switch ($page) {
	case 'obat': 		include "obat.php"; break;
	case 'addobat': 	include "addobat.php"; break;
	case 'editobat': 	include "editobat.php"; break;
	case 'pasien': 		include "pasien.php"; break;	
	case 'addpasien': 	include "addpasien.php"; break;
	case 'editpasien': 	include "editpasien.php"; break;
	case 'transaksi': 	include "transaksi.php"; break;
	case 'addtransaksi': include "addtransaksi.php"; break;
	case 'edittransaksi': 	include "edittransaksi.php"; break;
	case 'kontak': 		include "kontak.php"; break;
	case 'error': 		include "error.php"; break;	
	case 'main' :
	default : 			include 'home.php';	
				}
?>



<!--end footer -->
  
</body>
<script src ="js/jquery.min.js"></script>
<script src ="js/bootstrap.min.js"></script>
<script src ="js/scripts.js"></script>
</html>
