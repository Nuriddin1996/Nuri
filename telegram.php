<?

///////////////////////////////////
//mail code
// require_once('phpmailer/PHPMailerAutoload.php');
// $mail = new PHPMailer;
// $mail->CharSet = 'utf-8';


//
$name = $_POST['user_name'];
$phone = $_POST['user_phone'];
$email = $_POST['user_mail'];
$com = $_POST['user_com'];
$token = "1612635506:AAGYhe6XsmNRDr2QSpEqF0oreCIX3kSFcuI"; // telegram code
$chat_id = "-566870123";     // telegram code
//

// $mail->isSMTP();
// $mail->Host = 'smtp.mail.ru';

// $mail->SMTPAuth = true;

// $mail->Username = 'donkoko1996@mail.ru';
// $mail->Password = 'xnuriddin1996';
// $mail->SMTPSecure = 'ssl';
// $mail->Port = 465;

// $mail->setFrom('donkoko1996@mail.ru');
// $mail-> addAddress('donkoko1996@gmail.com');
// $mail-> addAddress('donkoko1996@mail.ru');

// $mail->isHTML(true);


// $mail->Subject = 'Заявка с сайта';
// $mail->Body = '' .$name. ' zayavka qoldirdi, tel raqami: ' .$phone. ' uni emaili: ' .$email. " ".' koment '  .$com;

// $mail->AltBody = '456456';


/////////////////////////////////////////
//telegram code


$arr = array(
    'foydalanuvchi:' => $name,
    'tel_raqami:' => $phone,
    'email:' => $email,
    'koment:' => $com,
);   

foreach ($arr as $key => $value) {
    $text .= "<strong>".$key."</strong>"." ".$value. "%0A";
    
}; 


  

  $sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$text}", "r");


// https://api.telegram.org/bot1612635506:AAGYhe6XsmNRDr2QSpEqF0oreCIX3kSFcuI/getUpdates

//  header('Location: index.html');


/////////////////////////////////////////////////////

  // if(!$mail->send()){
  //     echo 'ERROR';
  // }else{
  //     header('location: back.html');
  // }



?>