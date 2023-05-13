<?php
    $a=$_POST['cake_flavor'];
    $b=$_POST['cake_size'];
    $c=$_POST['cake_design'];
    $d=$_POST['topping1'];
    $e=$_POST['topping2'];
    $f=$_POST['topping3'];
    $g=$_POST['delivery_date'];
  
    
    $sql=mysqli_connect('localhost','root','','cake');
    $con="INSERT INTO shop(flavor,cake_size,design,springles,chips,caramel,del_date) value('$a','$b','$c','$d','$e','$f','$g')";
    $result=mysqli_query($sql,$con);
    header("Location:order.html");

    


?>