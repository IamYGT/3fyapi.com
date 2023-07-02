<?php  include("admin/include/site_db.php"); ?><!DOCTYPE html>
<html lang="zxx">
	<head>
		 <title>3F Yapı | <?=$db->VeriOkuTek("urunler_items", "isim", "url", $_GET["url"]);?></title>
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
				<h1><?=$db->VeriOkuTek("urunler_items", "isim", "url", $_GET["url"]);?></h1>
				<h6>3F Yapı</h6>
			</div>
		</div>
		<div class="section-block">
			<div style="height:60px; margin-bottom:80px; text-align:center;" class="col-sm-12">

				<h2>Buradasınız: </h2>  <a href="urunlerimiz">Ürünlerimiz</a> / <a href="urunler-<?=$db->VeriOkuTek("urunler_category", "url", "id", $db->VeriOkuTek("urunler_items", "cat_id", "url", $_GET["url"]) );?>.html">  <?=$db->VeriOkuTek("urunler_category", "isim", "id", $db->VeriOkuTek("urunler_items", "cat_id", "url", $_GET["url"]) );?> </a> / <a><?=$db->VeriOkuTek("urunler_items", "isim", "url", $_GET["url"] );?></a>

			</div>
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-md-6 col-sm-6">
						<div class="product-images">
							<div class="main-img-slider">

				 <figure>
									<a href="#" data-size="1400x1400">
										<img alt="3F Yapı" onerror='this.style.display="none"'   src="upload/<?=$db->VeriOkuTek("urunler_items", "resim", "url", $_GET["url"]);?>" data-lazy="upload/<?=$db->VeriOkuTek("urunlerimiz", "resim", "url", $_GET["url"]);?>" />
									</a>
								</figure>

				 </div>

						</div>
					</div>
					<div class="col-xs-12 col-md-6 col-sm-6">
						<div class="single-product">
							<h2><?=$db->VeriOkuTek("urunler_items", "isim", "url", $_GET["url"]);?></h2>

<p><?=$db->VeriOkuTek("urunler_items", "kod", "url", $_GET["url"]);?></p>
							<p><?=$db->VeriOkuTek("urunler_items", "aciklama", "url", $_GET["url"]);?></p>

							<div class="mt-30 quantity">

								<a  href="iletisim" >  <button class="add-to-cart-button">SEPETE EKLE</button> </a>
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
			<script type="text/javascript">
			$('document').ready(function(){

				 $('img').error(function () {
						$(this).hide();
				 });
			})
 </script>
 <a href="#" class="scroll-to-top"></a>
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
