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
    <title>Update Products | تعديل المنتجات</title>
 </head>



 <body>

 <?php
 include('config.php');
$ID = $_GET['id'];
$UP = mysqli_query($con,"SELECT * FROM products WHERE id=$ID");
$data = mysqli_fetch_array($UP);

 
 
 ?>

 <center>
<div class="main">

<form action="up.php" method="POST" enctype="multipart/form-data">
 <h2>   تعديل المنتج</h2>
  
 <br>

 <input type="text" name="id" value='<?php echo $data['id']?>' hidden ><br>
 <input type="text" name="name" value='<?php echo $data['name']?>'> <br>
 <input type="text" name="price" value='<?php echo $data['price']?>'> <br>
  <input type="file" id="file" name="image" style="display: none;">
  <label for="file">تحديث صورة المنتج</label> 
  <button name="update" type="submit">  تعديل المنتج</button>
  <br> <br>
  <a href="products.php"> عرض كل المنتجات</a>


</form>
</div>



</center>

 </body>
 </html>