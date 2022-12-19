<?php
include('conn.php');
$userid = $_POST['firstname'];
$pass=$_POST['pwd'];
$sql="select * from masterlogin where customer_name='$userid' and password='$pass' ";
$res = mysqli_query($conn,$sql);
if($result=mysqli_fetch_assoc($res))
{
    $_SESSION['customer_name']=$result['customer_name'];
    header('location:AccountOpening.htm');
}
else
{
    header('location:login1.php');
}
?>