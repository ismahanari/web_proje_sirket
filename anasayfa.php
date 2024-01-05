<!DOCTYPE html>
<?php
include('baglan.php');
$sorgu_gnl = mysqli_query($conn,"select * from genel_bilgiler");
$genel_bilgiler = mysqli_fetch_array($sorgu_gnl);
?>
<?php
include('baglan.php');
$sorgu_gnl_1 = mysqli_query($conn,"select * from hakkinda_bilgiler");
$hakkinda_bilgiler = mysqli_fetch_array($sorgu_gnl_1);
?>
<?php
include('baglan.php');
$sorgu_gnl_2 = mysqli_query($conn,"select * from ekip_1");
$ekip_1 = mysqli_fetch_array($sorgu_gnl_2);
?>
<?php
include('baglan.php');
$sorgu_gnl_3 = mysqli_query($conn,"select * from ekip_2");
$ekip_2 = mysqli_fetch_array($sorgu_gnl_3);
?>
<?php
include('baglan.php');
$sorgu_gnl_4 = mysqli_query($conn,"select * from ekip_3");
$ekip_3 = mysqli_fetch_array($sorgu_gnl_4);
?>

<html lang="en">
  <head>
		<title><?php echo $genel_bilgiler['site_adi'] ?></title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
		<link rel='stylesheet' id='camera-css'  href='css/camera.css' type='text/css' media='all'>

		<link rel="stylesheet" type="text/css" href="css/slicknav.css">
		<link rel="stylesheet" href="css/prettyPhoto.css" type="text/css" media="screen" title="prettyPhoto main stylesheet" charset="utf-8" />
		<link rel="stylesheet" type="text/css" href="css/style.css">
		
		
		<script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>

		<link href='http://fonts.googleapis.com/css?family=Roboto:400,300,700|Open+Sans:700' rel='stylesheet' type='text/css'>
		<script type="text/javascript" src="js/jquery.mobile.customized.min.js"></script>
		<script type="text/javascript" src="js/jquery.easing.1.3.js"></script> 
		<script type="text/javascript" src="js/camera.min.js"></script>
		<script type="text/javascript" src="js/myscript.js"></script>
		<script src="js/sorting.js" type="text/javascript"></script>
		<script src="js/jquery.isotope.js" type="text/javascript"></script>
		<!--script type="text/javascript" src="js/jquery.nav.js"></script-->
		

		<script>
			jQuery(function(){
					jQuery('#camera_wrap_1').camera({
					transPeriod: 500,
					time: 3000,
					height: '490px',
					thumbnails: false,
					pagination: true,
					playPause: false,
					loader: false,
					navigation: false,
					hover: false
				});
			});
		</script>
		
	</head>
	<body>
    
    <!--home start-->
    
    <div id="home">
    	<div class="headerLine">
	<div id="menuF" class="default">
		<div class="container">
			<div class="row">
				<div class="logo col-md-4">
					<div>
						<a href="#">
							<h1><?php echo $genel_bilgiler['site_adi'] ?></h1>
						</a>
					</div>
				</div>
				<div class="col-md-8">
					<div class="navmenu"style="text-align: center;">
						<ul id="menu">
							<li class="active" ><a href="index.php">Ana Sayfa</a></li>
							<li><a href="anasayfa.php?sayfa=hakkinda">Hakkında</a></li>
							<li><a href="anasayfa.php?sayfa=proje">İstatistikler</a></li>
							<li><a href="anasayfa.php?sayfa=haberler">Haberler</a></li>
							<li class="last"><a href="anasayfa.php?sayfa=iletisim">Rapor</a></li>
							<!--li><a href="#features">Features</a></li-->
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
		
	
<?php
$sayfa_id = @$_GET['sayfa'];

if ( isset($sayfa_id) == false ) {
	$sayfa_id = 'hakkinda';
}

if ( $sayfa_id == 'hakkinda'  ) {
	include('hakkinda.php');
} elseif ( $sayfa_id == 'proje' ) {
	include('proje.php');
} elseif ( $sayfa_id == 'haberler' ) {
	include('haberler.php');
} elseif ( $sayfa_id == 'iletisim' ) {
	include('iletisim.php');
}  else {
	include('hakkinda.php');
}

?>