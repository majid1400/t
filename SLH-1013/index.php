<?php
$sort = 'apple, banana, lemon, orange';
include 'function.php';
if (isset($_POST['send'])){
    $sort = $select_form($_POST['sort']);
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<p><b>name: </b><?php echo $sort?></p>
<form action="" method="post">
    <input type="radio" name="sort" value="flip" >flip
    <input type="radio" name="sort" value="descending" >descending
    <input type="radio" name="sort" value="random">random

    <input type="submit" name="send" value="send">
</form>
</body>
</html>
