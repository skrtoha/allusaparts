<?php
$to = 'truck@autozap.ru';//'truck@allamerican-parts.com';//derision@mail.ru
$subject = 'Заполнена форма с сайта allusaparts.com';
$from_title = 'Заполнена форма с allusaparts.com';
$from_mail = 'support@allusaparts.com';//truck@allamerican-parts.com
//$from = 'derision@mail.ru';//truck@allamerican-parts.com
$message ='
        <html>
            <head>
                <title>'.$subject.'</title>
            </head>
            <body>
                    <p>Имя: '.$_POST['name_f'].'</p>
                    <p>Компания: '.$_POST['company_f'].'</p>
                    <p>Страна доставки: '.$_POST['calc_contry'].'</p>                     
                    <p>Телефон: '.$_POST['calc_code'].' '.$_POST['phone_f'].'</p>    
                    <p>Email: '.$_POST['mail_f'].'</p>                   
                    <p>Комментарий: '.$_POST['calc_message'].'</p>      
                    <h4>Данные расчета:</h4>             
                    <p>Тип проценки: '.$_POST['calc_prtype'].'</p>
                    <p>Бренд: '.$_POST['calc_brand'].'</p>
                    <h4>Запчасти:</h4>';
            foreach($_POST as $key => $value) {
                $param_name = 'data_number_';
                if(substr($key, 0, strlen($param_name)) == $param_name) {
                    $number = preg_replace("/[^0-9]/", '', $key);
                    $message .='<p>Номер: '.$_POST['data_number_'.$number.''].'   //    Количество: '.$_POST['data_count_'.$number.''].'</p> ';
                }
            }

$message .='</body></html>';
$boundary = md5(date('r', time()));
$filesize = '';
$headers = "MIME-Version: 1.0\r\n";
$headers = "From: ".$from_title." <".$from_mail.">\r\n";
$headers .= "Reply-To: " . $from . "\r\n";
$headers .= "Content-Type: multipart/mixed; boundary=\"$boundary\"\r\n";
$message="Content-Type: multipart/mixed; boundary=\"$boundary\"

--$boundary
Content-Type: text/html; charset=\"utf-8\"
Content-Transfer-Encoding: 7bit

$message";
for($i=0;$i<count($_FILES['fileFF']['name']);$i++) {
    if(is_uploaded_file($_FILES['fileFF']['tmp_name'][$i])) {
        $attachment = chunk_split(base64_encode(file_get_contents($_FILES['fileFF']['tmp_name'][$i])));
        $filename = $_FILES['fileFF']['name'][$i];
        $filetype = $_FILES['fileFF']['type'][$i];
        $filesize += $_FILES['fileFF']['size'][$i];
        $message.="

--$boundary
Content-Type: \"$filetype\"; name=\"$filename\"
Content-Transfer-Encoding: base64
Content-Disposition: attachment; filename=\"$filename\"

$attachment";
    }
}
$message.="
--$boundary--";

if ($filesize < 10000000) { // проверка на общий размер всех файлов. Многие почтовые сервисы не принимают вложения больше 10 МБ
    mail($to, $subject, $message, $headers);
    echo 'Ваше сообщение получено, спасибо!';
} else {
    echo 'Извините, письмо не отправлено. Размер всех файлов превышает 10 МБ.';
}
?>
