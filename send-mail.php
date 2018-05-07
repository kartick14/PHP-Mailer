require_once('phpmailer/class.phpmailer.php');

$mail2 = new PHPMailer();
$mail2->From      = $email;
$mail2->FromName  = $student_name;
$mail2->Subject   = 'Admission Form downloaded';
$mail2->Body      = $student_name.' has downloaded the Admission Form, please find attached the admission form.';
$mail2->AddAddress( 'test@email.com' );
$mail2->AddAddress( 'test1@email.com' );

$file_to_attach = $file_to_save; //path of any attached file

$mail2->AddAttachment( $file_to_attach, $name, "base64",".PDF");

return $mail2->Send();
