<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
        $a = 1;
        if ($a == 1){
            echo 'Verno';
        }
        else{
            echo 'Neverno';
        }
    ?>
    <br>
    <?php
        $a='';
        if (empty($a)){
            echo "Verno";
        }else{
            echo "Neverno";
        }
    ?>
    <br>
    <?php
        $var=true;
        if ($var){
            echo "Verno";
        }else{
            echo "Neverno";
        }
    ?>
    <br>
    <?php
        $a=5;
        if ($a > 0 and $a < 5){
            echo "Verno";
        }else{
            echo "Neverno";
        }
    ?>
    <br>
    <?php
        $sqrt = sqrt(1000);

        echo floor($sqrt);
        echo "\n";
        echo ceil($sqrt);
    ?>
<br>
    <?php
        $a = 10;
        $b = 3;
        echo $a % $b;
    ?>
<br>
    <?php
        $arr = [4,2,5,19,13,0,100];
        $sum = 0;

        foreach ($arr as $elem) {
            $sum += $elem * $elem;
        }

        $result = sqrt($sum);
        echo $result;
    ?>
    <br>
    <?php
        $arr = [4, -2, 5, 19, -130, 0, 10];
        echo max($arr);
        echo min($arr);
    ?>
    <br>
    <?php
        echo mt_rand(1, 100);
    ?>
    <br>
    <?php
        $arr = [];
        for ($i = 1; $i <= 10; $i++){
            $arr[] = mt_rand(1, 100);
        }
        var_dump($arr);
    ?>
    <br>
    <?php
    $result =[];
    $arr = [1, 2, -1, -2, 3, -3];
    foreach ($arr as $elem) {
        $result[] = abs($elem);
    }

    var_dump($result);
    ?>
</body>
</html>