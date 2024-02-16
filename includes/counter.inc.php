<?php
    if (!empty($page)){
        $count_log = 'logs/'.$page.'.txt';

        if (!file_exists($count_log)) {
            $file = fopen($count_log, 'w');
            fclose($file);
        }

        $file = fopen($count_log, 'r');
        $count = fgets($file, 1000);
        fclose($file);
        
        $count = abs(intval($count)) + 1;
        
        $file = fopen($count_log, 'w');
        fwrite($file, $count);
        fclose($file);
    }

    $ip_log = 'logs/logs.txt';
    $ip_address = $_SERVER['REMOTE_ADDR'];
    $timestamp = date('m/d/Y h:i:s');
    $browser = $_SERVER['HTTP_USER_AGENT'];

    if (!file_exists($ip_log)) {
        $file = fopen($ip_log, 'w');
        fclose($file);
    }

    $fp = fopen($ip_log, 'a+');
    fwrite($fp, '['.$timestamp.']: '.$ip_address.' '.$browser.' ('.$page. " page)  \n");
    fclose($fp);
?>
