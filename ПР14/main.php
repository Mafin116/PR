<form action="" method="GET">
    <input type="text" name="city">
    <input type="submit">
</form>
<?php
    if(!empty($_REQUEST['city'])){
        $city = $_REQUEST['city'];
        echo 'Ваш город: '.$city;
    }
?>

<form action="" method="GET">
    <input type="text" name="name">
    <input type="text" name="age">
    <textarea name="message"></textarea>
    <input type="submit" name="submit">
</form>
<?php
    if(isset($_REQUEST['submit'])){
        $age = strip_tags($_REQUEST['age']);
        $name = strip_tags($_REQUEST['name']);
        $message = strip_tags($_REQUEST['message']);
        echo "Привет, $name, $age <br> твое сообщение: $message";
    }
?>