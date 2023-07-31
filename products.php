<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
      <link rel="stylesheet" href="css/style2.css">
      <link  rel="icon" type="image/png" href="images/logo.png"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300&display=swap" rel="stylesheet">
    <title>Products | المنتجات</title>
</head>
<style>

    h3{
        margin-bottom: 30px;

    }
</style>
<center>
    <h3>لوحة تحكم الادمن</h3>
     <a href="index.php">رفع المزيد من المنتجات</a>

</center>

<?php

include("config.php");
$result = mysqli_query($con , "SELECT * FROM products");

while($row = mysqli_fetch_array($result)){

     echo "
    <center>
    <main>
        <div class='card' style='width: 15rem;'>
        <img src='$row[image]' class='card-img-top'  >
        <div class='card-body'>
            <h5 class='card-title'>$row[name] </h5>
            <p class='card-text'> $row[price]  </p>
            <a href='delete.php? id=$row[id]' class='btn btn-danger'>حذف منتج</a>
            <a href='update.php? id=$row[id]' class='btn btn-primary'>تعديل منتج</a>
        
        </div>
        </div>
    </main>
    <center>

    
    ";

   
}
 
 

 
?>
 

<body>

</body>

</html>