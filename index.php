 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style2.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link  rel="icon" type="image/png" href="images/logo.png"/>
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300&display=swap" rel="stylesheet">
    <title>Active Store</title>
 </head>

<center>
<div class="main">

<form action="insert.php" method="POST" enctype="multipart/form-data">
 <h2>  تسوق آلان </h2>
 <img src="images/logo.png" alt="logo" width="300">
 <br>

 <input type="text" name="name"><br>
 <input type="text" name="price"><br>
  <input type="file" id="file" name="image" style="display: none;">
  <label for="file">أختار صورة للمنتج</label> 
  <button name="upload"> رفع المنتج</button>
  <br> <br>
  <a href="products.php"> عرض كل المنتجات</a>


</form>
</div>



</center>


 <body>
    
 </body>
 </html>