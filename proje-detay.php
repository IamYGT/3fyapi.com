<?php  include("admin/include/site_db.php"); ?><!DOCTYPE html>
<html lang="tr">
	<head>

		<title>3F Yapı | <?=$db->VeriOkuTek("projeler_category", "isim", "url", $_GET["url"]);?></title>
		<meta charset="UTF-8" />
		 <meta content="width=device-width,initial-scale=1,maximum-scale=1" name="viewport" />
		<link href="css\bootstrap.min.css" rel="stylesheet" />
		<link href="css\font-awesome.css" rel="stylesheet" />
		<link href="css\icomoon.css" rel="stylesheet" />
		<link href="css\swiper.min.css" rel="stylesheet" />
		<link href="css\animate.css" rel="stylesheet" />
		<link href="css\owl.carousel.css" rel="stylesheet" />
		<link href="css\slick.css" rel="stylesheet" />
		<?php include("favo.php")?>

		<link href="css\particles.css" rel="stylesheet" />
		<link href="css\default.css" rel="stylesheet" />
		<link href="css\styles.css" rel="stylesheet" />
		<link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,400i,500,600,700,800,900" rel="stylesheet" />
	</head>
	<body>
		<div id="preloader">
			<div class="spinner">
				<div class="cube1"></div>
				<div class="cube2"></div>
			</div>
		</div>
	 <?php include("ust.php")?>
	 <div class="page-title">
			<div id="particles-js-pagetitle"></div>
			<div class="container">
				<h1><?=$db->VeriOkuTek("projeler_category", "isim", "url", $_GET["url"]);?></h1>
				<h6>3F Yapı</h6>
			</div>
		</div>
		<div class="section-block">
			<div id="particles-js-project_detail"></div>
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-md-8 col-sm-8">
						<div class="owl-carousel owl-theme project-detail-carousel" id="project_detail">
							<?php
				$cateid=$db->VeriOkuTek("projeler_category", "id", "url", $_GET["url"]);
if($db->veriSaydir("projeler_items", array(), array()) > 0) {
$bilgi= $db->VeriOkuCoklu("projeler_items", array(), array(), "row", "DESC");
$bilgial= $db->bilgial;
foreach($bilgial as $rows){
	if($rows->cat_id==$cateid) {
 ?>
				<div class="project-detail-item">
								<img onerror='this.style.display="none"' alt="3F Yapı" src="upload/<?=$rows->resim;?>" />
							</div>
	<?php }}} ?>

						</div>
					</div>
					<div class="col-xs-12 col-sm-4 col-md-4">
						<div class="project-detail-1">
							<h2><?=$db->VeriOkuTek("projeler_category", "isim", "url", $_GET["url"]);?></h2>
							<ul>
								<li>
								<span>Müşteri:</span> <?=$db->VeriOkuTek("projeler_category", "isim", "url", $_GET["url"]);?></li>
								<li>
								<span>Tarih:</span> <?=$db->VeriOkuTek("projeler_category", "tarih", "url", $_GET["url"]);?></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="row mt-50">
					<div class="col-md-12">
						<div class="project-detail-1-info">
							<h3>Açıklama</h3>
							<div class="text-content">
								<p><?=$db->VeriOkuTek("projeler_category", "aciklama", "url", $_GET["url"]);?></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

	 <div class="container section-block">
			<div>
				<div class="col-xs-12 col-md-3 col-sm-3">
					<div class="section-heading">
						<h2 class="animated fadeInLeft wow">Referanslar</h2>
						<h3>Bazı Projeler</h3>
					</div>
				</div>
				<div class="col-xs-12 col-md-9 col-sm-9">
					<div class="owl-carousel owl-theme" id="our-clients">

<?php
if($db->veriSaydir("referanslar", array(), array()) > 0) {
$bilgi= $db->VeriOkuCoklu("referanslar", array(), array(), "row", "DESC");
$bilgial= $db->bilgial;
foreach($bilgial as $rows){
 ?>
			 <div class="client-item">
							<img alt="3F Yapı" src="upload/<?=$rows->image;?>" />
						</div>
						<?php }} ?>

			 </div>
				</div>
			</div>
		</div>
		 <?php include("alt.php")?>
<a href="#" class="scroll-to-top"></a>

		<script type="text/javascript">
			$('document').ready(function(){

				 $('img').error(function () {
						$(this).hide();
				 });
			})
 </script>
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/owl.carousel.js"></script>
		<script src="js/wow.min.js"></script>
		<script src="js/particles.min.js"></script>
		<script src="js/particles.js"></script>
		<script src="js/jquery.hover3d.min.js"></script>
		<script src="js/jquery.counterup.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
		<script src="js/scrollax.js"></script>
		<script src="js/slick-plugin.js"></script>
		<script src="js/slick.js"></script>
		<script src="js/swiper.min.js"></script>
		<script src="js/jquery.mb.YTPlayer.min.js"></script>
		<script src="js/isotope.pkgd.min.js"></script>
		<script src="js/modernizr.js"></script>
		<script src="js/map.js"></script>
		<script src="js/main.js"></script>
	</body>
</html>
