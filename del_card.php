<?php

include('config.php');
$id= $_GET['id'];
mysqli_query($con,"DELETE from addcard where id=$id");
header('location: card.php');
?>