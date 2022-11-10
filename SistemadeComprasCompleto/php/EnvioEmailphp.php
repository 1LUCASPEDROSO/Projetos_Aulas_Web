<?php
function Enviaremail(){
include '../PHPMailer/PHPMailer.php';
$mailDestino = "pedrosolucas1745@gmail.com";
$nome = "lucas";
$texto = "compra Realizada com Sucesso";
$email --> new PHPMailer();
$email -> isSMTP();
$email -> Host = "pedrosolucas1745@gmail.com";
$email -> SMTPAuth = true;
$email -> Usermame = "pedrosolucas1745@gmail.com";
$email -> Password = "pedro2014";
$email -> Port = 587;
$email -> Address($mailDestino,$nome);
$email -> isHTML = true;
$email -> Subject = "Compra nº1";
$email -> Body = '<p>'.$texto.'</p>';
$email -> AltBody = "compra realizada com sucesso";

    if(!$email->send()) {
        echo 'Não foi possível enviar a mensagem.<br>';
        echo 'Erro: ' . $email->ErrorInfo;
    } else {
        echo 'Mensagem enviada.';
    }
}
?>