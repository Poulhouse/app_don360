<?php
    require_once 'smsru/sms.ru.php';

    function ok_code($s) {
        return substr(preg_replace('~\D+~','',md5(md5(md5(md5(preg_replace('~\D+~','',$s)))))), 0, 4);
    }
    $smsru = new SMSRU('5E32AFDD-18C1-6F43-AB8E-06C97AF96C5D'); // Ваш уникальный программный ключ, который можно получить на главной странице
    
    $data = new stdClass();
    $data->to = $_POST["contactPhone"];
    $code_verify = $data->text = 'Код подтверждения: ' .ok_code($_POST["contactPhone"]); // Текст сообщения
    $data->from = 'DON360'; // Если у вас уже одобрен буквенный отправитель, его можно указать здесь, в противном случае будет использоваться ваш отправитель по умолчанию
    $sms = $smsru->send_one($data);

    if ($sms->status == "OK") {
        echo "Код подтверждения отправлен на номер ".$_POST["contactPhone"];
    } else {
        echo "Код не отправлен. ";
    }
    
    // $data->time = time() + 7*60*60; // Отложить отправку на 7 часов
    // $data->translit = 1; // Перевести все русские символы в латиницу (позволяет сэкономить на длине СМС)
    // $data->test = 1; // Позволяет выполнить запрос в тестовом режиме без реальной отправки сообщения
    // $data->partner_id = '1'; // Можно указать ваш ID партнера, если вы интегрируете код в чужую систему
    //$sms = $smsru->send_one($data); // Отправка сообщения и возврат данных в переменную
    
    /*if ($sms->status == "OK") { // Запрос выполнен успешно
        echo "Сообщение отправлено успешно. ";
        echo "ID сообщения: $sms->sms_id. ";
        echo "Ваш новый баланс: $sms->balance";
    } else {
        echo "Сообщение не отправлено. ";
        echo "Код ошибки: $sms->status_code. ";
        echo "Текст ошибки: $sms->status_text.";
    }*/
    
?>