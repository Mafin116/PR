<!-- 3 -->
<?php
    $var = 1;
    $var = $var + 12;
    $var = $var - 14;
    $var = $var * 5;
    $var = $var / 7;
    $var = $var + 1;
    $var = $var - 1;
    echo $var;
?>

<?php
    $var = 1;
    $var =+ 12;
    $var -= 14;
    $var *= 5;
    $var /= 7;
    $var += 1;
    $var -= 1;
    echo $var;
?>
<!-- 4 -->
<?php
    $a = 3;
    echo $a;
?>
<!-- 5 -->
<?php
    $a = 10;
    $b = 2;
    echo $a + $b;
    echo $a - $b;
    echo $a * $b;
    echo $a / $b;
?>
<!-- 6 -->
<?php
    $text = 'hello world!';
    echo $text;
?>
<!-- 7 -->
<?php
    $age = 25;
    echo 'Мне '.$age.' лет!';
?>
<!-- 8 -->
<?php 
    echo 60 * 60;
    echo 60 * 60 * 24;
    echo 60 * 60 * 24 * 31;
?>
<!-- 9 -->
<?php
    $hour = '10';
    $minute = '43';
    $secounds = '43';
    echo $hour.':'.$minute.':'.$secounds;
?>
<!-- 10 -->
<?php
    $arr = ['Hello', 'world', '!'];
    echo $arr[0].$arr[1].$arr[2];
?>
<!-- 11 -->
<?php
    $arr = ['Kola'=>'1000$', 'Vasa'=>'500$', 'Peta'=>'200$'];
    echo $arr['Kola'];
?>
<!-- 12 -->
<?php
    $arr = ['a', 'b', 'c'];
    echo $arr[0].'<br>';
    echo $arr[1].'<br>';
    echo $arr[2].'<br>';
?>