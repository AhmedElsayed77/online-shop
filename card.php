<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style2.css">
    <link rel="icon" type="image/png" href="images/logo.png" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300&display=swap" rel="stylesheet">
    <title>عربتي | My products</title>
</head>

<style>
    .table{
        margin-top: 90px;
        width: 70%;
        text-align: center;
        margin: auto ;

      
    }

    h3{
            margin-bottom: 40px;
        }

        thead{
            background-color:#595c60;
            color: #FFF;
        }
</style>
<body>



     <table class='table'>
        <thead>
            <tr>
                <th scope='col'>Product name </th>
                <th scope='col'>Product price </th>
                <th scope='col'>Delete product </th>

            </tr>
        </thead>
        <center>
<h3>منتجات عربتي</h3>

            <?php
            include('config.php');
            $result = mysqli_query($con, "SELECT * FROM addcard ");
            while ($row = mysqli_fetch_array($result)) {

                echo "
    

<tbody>
    <tr>
        <td>$row[name]</td>
        <td>$row[price]</td>
        <td><a href='del_card.php? id=$row[id]' class='btn btn-danger'>إزالة</a></td>

    </tr>
</tbody>


    
    ";
            }


            ?>

    </table>
   
    </center>

    <br><br>
    <center>

    <a href="shop.php"> الرجوع الي صفحة المنتجات</a>
    </center>

</body>

</html>