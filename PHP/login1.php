<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form info2</title>

</head>
<style>.class1{
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
  margin-left: 1200px;
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
.login{
    background-color: #1d3b6f;
    /* border-color: black; */
}
.log{
    font-size: 60px;
    margin-left: 669px;
    color:#f7ba00;
}
.details{
    background-color: #f7ba00;
      margin-left: 400px;
      margin-right: 321px;
      margin-top:30px;
    padding-bottom: 41px;
}
.l1,.p1{
  /* margin-left: 597px; */
  display:flex;
  font-size: 30px;
 color: #0800f7;
 padding-top: 60px;
 padding-left: 179px;
}
.fname,.pass{
    padding-left: 10px;
    color:black;
    font-family:sans-serif;
}
.pass{
    padding-left: 10px;
}
</style>
<body>
    <div class="class1">
        <image class="logo" src="https://jobalerts.successcds.net/wp-content/uploads/2018/02/Boi-Logo.png"></image>
        <div class="name1"> BANK OF INDIA </div>
    </div>
    <div class="tags">
        <div class="tag1">HOME</div>
        <div class="tag2">ABOUT US</div>
        <div class="tag3">LOGIN</div>
    </div>
    <div class="login">
        <div class="log">Login</div>
    </div>
    <div class="details">
    <div class="l1">
    <label for="user">Customer Name:</label>
    <div class="fname">
    <?php echo $_GET["firstname"];?>
    </div></div>
    <div class="p1">
    <label for="pwd">Password:</label>
    <div class="pass">
    <?php echo $_GET["pwd"];?>
</div></div>
</div>
</body></html>