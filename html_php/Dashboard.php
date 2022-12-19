<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Information</title>
</head>
<style>
    .class1{
        display: flex;
        flex-direction: row;
       background-color: #1d3b6f;
    }
    .logo{
        width:120px;
        display:inline-block;
    }
    .name1{
     display: inline-block;
      font-size: 50px;
      font-family: sans-serif;
      font-weight: 400;
      margin-top: 54px;
      margin-left: 374px;
      color: #f7ba00;

    }
    .tags{
      display: flex;
      flex-direction: row;
      /* margin-left: 1200px; */
      padding-bottom: 20px;
      background-color: #1d3b6f;
      color: #f7ba00
    }
    .tag1{
     display: inline-block;
      font-size: 20px;
      font-family: sans-serif;
      font-weight: 100;
      margin-left: 997px;
      padding: 10px;
    }
    .tag2{
        display: inline-block;
      font-size: 20px;
      font-family: sans-serif;
      font-weight: 100;
      margin-left: 15px;
      padding: 10px;
    }
    .tag3{
        display: inline-block;
      font-size: 20px;
      font-family: sans-serif;
      font-weight: 100;
      margin-left: 15px;
      padding: 10px;
    }
    .tag4{
      display: inline-block;
      font-size: 20px;
      font-family: sans-serif;
      font-weight: 100;
      margin-left: 15px;
      padding: 10px;
    }
    /* .open1{
        background-color: #1d3b6f; */
    /* } */
    /* .open{
      color:#f7ba00;
      padding-top: 20px;
      margin-left:572px ;
      font-size: 50px;
    }
    .items{
      display:flex;
      color:#1d3b6f;
      background-color: #f7ba00;
      padding: 30px;
      size: 100px;
      margin: 40px;
      box-sizing: border-box;
      border-color: blue;
    }
    .borrower{
      font-size: 50px;
      margin-left: 583px;

    }
    .depositer{
      font-size: 50px;
    }
    .col1{
      display: flex;
      flex-direction: column;
    }
    .first{
      display:flex;
      flex-direction: row;
      font-size: 20px;
      margin: 10px;
    } */

    .DandB{
      display:flex;
      flex-direction:row;
      padding:10px;
    }
    .borrower{
      margin-left:50px;
    }
    </style>
<body>
    <div class="class1">
        <image class="logo" src="https://jobalerts.successcds.net/wp-content/uploads/2018/02/Boi-Logo.png"></image>
        <div class="name1"> BANK OF INDIA </div>
    </div>
    <div class="tags">
        <div class="tag1">DASHBOARD</div>
        <div class="tag2">OPEN A/C</div>
        <div class="tag3">LOANS</div>
        <div class="tag4">DEPOSITS</div>
     </div>
    <!-- <div class="open1"
    <div class="open">Dashboard</div></div>
    <div class="items">
    <div class="col1"> 
    <div class="depositer">List of depositers</div>
    <div class="first">
      <div class="name">Name</div>
      <div class="Account">Account No.</div>
      <div class="bal">Balance</div>
      <div class="data">Details</div>
    </div></div> -->
<div class="DandB">
<div class="depositer">
<?php
include('conn.php');
$sql="select customer_name, depositer.account_number,  balance from
depositer inner join account on depositer.account_number=
account.account_number"; 
$res=mysqli_query($conn, $sql);
echo "List of Depositors";
echo '<table border="1"><tr><th>Name</th><th>A/C No.</th><th>
Balance</th><th>Details</th></tr>';
while($result=mysqli_fetch_assoc($res))
{
echo '<tr><td>'. $result['customer_name'] . '</td><td>'.
$result['account_number'] . '</td><td>' . $result['balance'] . '</td><td><a
href="Account_details.php?uid=' . $result['customer_name'] . ' ">View
Details</a></td></tr>';
}
echo '</table>';
?>
</div>
<div class="borrower">
<?php
include('conn.php');
$sql1 = "select customer_name,account.account_number, balance from
borrower, loan ,account where borrower.loan_number=loan.loan_number and loan.branch_name=account.branch_name";
$res1 = mysqli_query($conn,$sql1);
echo "List of Borrowers";
// echo "\n";
echo '<table border = "1"><tr><th>Name</th><th>A/C No.</th><th>Balance</th><th>Details</th></tr>';
while($ans= mysqli_fetch_assoc($res1))
{
    echo '<tr><td>'. $ans['customer_name'].'</td><td>'.
     $ans['account_number'].'</td><td>'. $ans['balance']. '</td><td><a href = "Account_details.php?uid = '. $ans['customer_name'].' ">
    View Details</a></td></tr>';
}
echo '</table>';
?>
</div>
</div>
</body>
</html>