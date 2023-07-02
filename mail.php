<?php if($_POST){

  require("class.phpmailer.php");

  $mail = new PHPMailer();

  $mail->IsSMTP();                                   // send via SMTP
  $mail->Host     = "mail.mustafamertyurek.com"; // SMTP servers
  $mail->SMTPAuth = true;     // turn on SMTP authentication
  $mail->Username = "memsidea@mustafamertyurek.com";  // SMTP username
  $mail->Password = "EmpeRiaN22"; // SMTP password
  $mail->Port     = 587;

  $mail->SMTPDebug = 1; // Hata ayıklama değişkeni: 1 = hata ve mesaj gösterir, 2 = sadece mesaj gösterir
  $mail->CharSet = "utf-8";
  $mail->From     = "memsidea@mustafamertyurek.com"; // smtp kullanıcı adınız ile aynı olmalı
  $mail->Fromname = "3F Yapi";
  $mail->AddAddress("muhasebe@3fyapi.com",",3F Yapi");
  $mail->AddAddress("mertyurek@memsidea.com",",3F Yapi");
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
