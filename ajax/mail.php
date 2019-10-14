<?php
$name = $_REQUEST['name'];
$head = $_REQUEST['head'];
$email = $_REQUEST['email'];
if ($name == "") {
    $name = "не укаазано";
}
$to  = "<smatur98@gmail.com>" ;
$fp = fopen('vardump.txt', 'w');
fwrite($fp, $name);
fwrite($fp, $head);
fwrite($fp, $email);
fclose($fp);
$subject = "Заявка с сайта";
if(empty($head)) {
    $head = 'Заявка о консультации';
}
$message = "<p>Заявка с сайта</p> </br>
 <b>Заголовок</b> : $head </br>
 <b>Имя</b> : $name </br>
 <b>Email</b> :  $email";

$headers  = "Content-type: text/html; charset=UTF-8 \r\n";
$headers .= "From: С сайта <from@example.com>\r\n";
if ($email) {
    if (mail($to, $subject, $message, $headers)) {
        var_dump(mail($to, $subject, $message, $headers));
        $status = "Спасибо, заявка отпралена";
        $status2 = "Менеджер перезвонит Вам, чтобы уточнить детали доставки и оплаты.";
    }else{
        $status = "Ошибка, заявка не отпралена";
        $status2 = "<a href='/'>Вернуться назад<a>";
    }
}else{
    $status = "Ошибка, заполнения";
    $status2 = "Вы не указали телефон <br> <a href='/'>Вернуться назад<a>";
}