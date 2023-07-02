<?php
  require_once "PHPMailerAutoload.php";
  $mail = new PHPMailer();
  $mail->IsSMTP();
  $mail->SMTPDebug = 1;
  $mail->SMTPAuth = true;
  $mail->SMTPSecure = 'POP3';
  $mail->Host = 'cpanel01.anindahosting.com';
  $mail->Port = 995;
  $mail->IsHTML(true);
  $mail->SetLanguage("tr", "phpmailer/language");
  $mail->CharSet ="utf-8";
  $mail->Username = "memsidea@mustafamertyurek.com";
  $mail->Password = "EmpeRiaN22";
  $mail->SetFrom("info@memsidea.com", "Test"); // Mail attigimizda yazacak isim
  $mail->AddAddress("cemdenkacmz@gmail.com"); // Maili gonderecegimiz kisi/ alici
  $mail->Subject = "Konu Başlığı"; // Konu basligi
  $mail->Body = "Mail İçeriği"; // Mailin icerigi
  $mail->Send();
