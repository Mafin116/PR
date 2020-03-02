<?php
    $fd = fopen("form.php", 'r') or die("Не удалось открыть файл");
    while(!feof($fd))
    {
        $str = htmlentities(fgets($fd));
        echo $str;
    }
    fclose($fd);
?>