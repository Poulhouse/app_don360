<?php

    function ok_code($s) {
        return substr(preg_replace('~\D+~','',md5(md5(md5(md5(preg_replace('~\D+~','',$s)))))), 0, 4);
    }
    //echo substr(preg_replace('~\D+~','',md5(md5(md5(md5(preg_replace('~\D+~','','+7(918)678-08-28')))))), 0, 4) . '<br>';
    $oc = ok_code($_POST["contactPhone"]);

    if ($oc == $_POST["copyCode"])
        echo "Соглашение подписано. Код подтверждения верный.";
    else
        echo "Вы ввели неверный код подтверждения. Попробуйте снова.";