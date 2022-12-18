<?php

$link = mysqli_connect ('localhost', 'root', "",'21bcs193') or die
('Unable to connect the server. ');

$name=$_POST['firstname'];
echo $name;
$address=$_POST['address'];   
$city=$_POST['city_name'];

$insert = "INSERT INTO master_customer (customer_name,
customer_street, customer_city) VALUES
('$name','$address','$city')";

$results = mysqli_query($link,$insert) or die(mysqli_error($link));

echo "Data inserted successfully!";
?>