<?php  include("admin/include/site_db.php"); ?><!DOCTYPE html>
<html lang="tr">
	<head>

		<title>3F Yapı | İletişim</title>
		<meta charset="UTF-8" />
		 <meta content="width=device-width,initial-scale=1,maximum-scale=1" name="viewport" />
		<link href="css\bootstrap.min.css" rel="stylesheet" />
		<link href="css\font-awesome.css" rel="stylesheet" />
		<link href="css\icomoon.css" rel="stylesheet" />
		<link href="css\swiper.min.css" rel="stylesheet" />
		<link href="css\animate.css" rel="stylesheet" />
		<link href="css\owl.carousel.css" rel="stylesheet" />
		<link href="css\slick.css" rel="stylesheet" />
		<link href="css\particles.css" rel="stylesheet" />
		<link href="css\default.css" rel="stylesheet" />
		<?php include("favo.php")?>

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
				<h1>İLETİŞİM</h1>
				<h6>3F Yapı</h6>
			</div>
		</div>
		<div class="section-block">
			<div class="container">
				<div class="row">
					<div class="contact-box">
						<div class="col-xs-12 col-sm-4 col-md-4">
							<div class="contact-box-info">
								<div class="clearfix contact-box-icon">
									<div class="contact-icon"></div>
									<div class="contact-info">
										<h5>Telefon</h5>
										<p><?=$db->ayarlar("value" , "tel");?></p>
									</div>
								</div>
								<div class="clearfix contact-box-icon">
									<div class="contact-icon"></div>
									<div class="contact-info">
										<h5>Adres</h5>
										<p><?=$db->ayarlar("value" , "adres");?></p>
									</div>
								</div>
								<div class="clearfix contact-box-icon">
									<div class="contact-icon"></div>
									<div class="contact-info">
										<h5>Çalışma Saatlerimiz</h5>
										<p><?=$db->ayarlar("value" , "calismasaat");?></p>
									</div>
								</div>
								<div class="clearfix contact-box-icon">
									<div class="contact-icon"></div>
									<div class="contact-info">
										<h5>Eposta</h5>
										<p><?=$db->ayarlar("value" , "mail");?></p>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xs-12 col-md-8 col-sm-8">
							<div class="row contact-box-message">
								<?php if($_POST){

									require("class.phpmailer.php");

									$mail = new PHPMailer();

									$mail->IsSMTP();                                   // send via SMTP
									$mail->Host     = "mail.mertyurekholding.com"; // SMTP servers
									$mail->SMTPAuth = true;     // turn on SMTP authentication
									$mail->Username = "3f@mertyurekholding.com";  // SMTP username
									$mail->Password = "EmpeRiaN2"; // SMTP password
									$mail->Port     = 587;

									$mail->SMTPDebug = 1; // Hata ayıklama değişkeni: 1 = hata ve mesaj gösterir, 2 = sadece mesaj gösterir
									$mail->CharSet = "utf-8";
									$mail->From     = "3f@mertyurekholding.com"; // smtp kullanıcı adınız ile aynı olmalı
									$mail->Fromname = "3F Yapi";
									$mail->AddAddress("muhasebe@3fyapi.com","3F Yapı");
									$mail->AddAddress("info@3fyapi.com","3F Yapı");
									$mail->Subject  =  "3F Yapı İletişim Formundan Gelen Mesaj";
									$mail->Body     =  implode(" <br>**********<br> ",$_POST);
									$mail->IsHTML(true);
									if(!$mail->Send())
									{
										 echo '<div class="alert alert-danger"><strong>Hata!</strong> ' . $mail->ErrorInfo.'

</div>';
										 exit;
									}
else {
	echo '<div class="alert alert-success">
Mesaj Gönderimi Başarılı!
</div>';
}






								} ?>
								<form autocomplete="off" class="contact-form"  action="" method="post">
									<div class="col-xs-12">
										<input placeholder="İsminiz" name="name" />
									</div>
									<div class="col-xs-6">
										<input placeholder="E-posta" name="email" type="email" />
									</div>
									<div class="col-xs-6">
										<input placeholder="Konu" name="subject" />
									</div>
									<div class="col-xs-12">
										<textarea name="message" placeholder="Mesajınız"></textarea>
									</div>
									<div class="col-xs-12">
										<button class="center-holder button-md full-width mt-20 primary-button rounded-border" type="submit">Gönder</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="map">
			<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBk25E4mNfVIEt3tNl3K1HwNZVruVoFBlA&amp;callback=initMap"
			async="" defer="defer"></script>
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
							<img alt="Gaziantep İç Mimarlar 3F Yapı" src="upload/<?=$rows->image;?>" />
						</div>
						<?php }} ?>

			 </div>
				</div>
			</div>
		</div>

	 <?php include("alt.php")?>
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
