<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form_info</title>
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
    .open1{
        background-color: #1d3b6f;
    }
    .open{
      color:#f7ba00;
      padding-top: 20px;
      margin-left:572px ;
      font-size: 50px;
    }
    .details{
       /* padding-left: 50px; */
      padding-bottom: 50px;
      background-color: #f7ba00;
      margin-left: 400px;
      margin-right: 321px;
      margin-top:30px
    }
    .log1,.log2,.log3{
       display:flex;
        font-size: 20px;
        color: #0800f7;
        /* margin-left: 465px; */
        padding-top: 60px;
        padding-left: 258px;
    }
    .log2{
      padding-top: 20px;
    }
    .log3{
      padding-top: 20px;
    }
    .fname,.add,.cn{
      color:black;
      font-family:sans-serif;
    }
    .fname{
      padding-left: 10px;
    }
    .add{
      padding-left: 76px;
    }
    .cn{
      padding-left:108px;
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
    <div class="open1">
    <div class="open">Account Opening Details</div></div>
    <div class="details">

    
    <div class="log1">
    <label for="user">Customer Name:</br></label>
    <div class="fname">
    <?php echo  $_POST["firstname"];?>
  </div>
    </div>
    <div class="log2">
    <label for="add">Address:</br></label>
    <div class="add">
    <?php echo $_POST["address"];?>
    </div></div>

<div class="log3">
    <label for="user">City:</br></label>
    <div class="cn">
    <?php echo $_POST["city_name"];?>
</div></div>
    
    </div>
    </body>
    </html>
    