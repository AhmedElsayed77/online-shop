<?php

include('config.php');
$id = $_GET['id'];
$up = mysqli_query($con, "select * from products where id=$id");
$data = mysqli_fetch_array($up);

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style2.css">
    <link  rel="icon" type="image/png" href="images/logo.png"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300&display=swap" rel="stylesheet">
    <title>   pay Confirmtion |   تأكيد شراء المنتج</title>
</head>


<style>
    input{
        display: none;
    }
</style>
<body>


<center>
<div class="main">

<form action="insert_card.php" method="post">

<h2>هل فعلا تريد شراء المنتج</h2>
 <input type="text" name="name" value="<?php echo $data['name']?>">
<input type="text" name="price" value="<?php echo $data['price']?>">
<button name="add" type="submit" class="btn btn-warning"> تأكيد أضافة المنتج للعربة</button>
<br>
<a href="shop.php">الرجوع لصفحة المنتجات</a>
</form>
</div>

</center>

</body>

</html>