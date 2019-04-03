 
 
 <?php
 session_start();
  require 'dbconfi/config.php';
?>
<!DOCTYPE html>
<html>
<head>


<title>Login Page</title>
<style>
.button {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
}

</style>
<link rel="stylesheet" href="css/style.css">
</head>
<body style="background:url(https://previews.123rf.com/images/tatus/tatus1407/tatus140700020/29843115-back-to-school-background.jpg); background-size:100%;">

 
 
  <center><h2 style="font-size:50px;color:Black;font-family:Heebo;">LOGIN FORM</h2>
  
  </center>
     
     
  
  <form class="myform" action="findex.php" method="post">
     <img src="imgs/a1.svg" width="10" height="300" class="avatar"/>
     <a href="index.php"> <input type="button" class="button" id="register_btn" value="Admin"/><br></a>
      <img src="imgs/t1.svg" width="10" height="300" class="avatar"/>
       <a href="fteacher.php"><input type="button" class="button" id="register_btn" value="Teacher"></a>
      <img src="imgs/s1.svg"width="10" height="300" class="avatar"/>
    <a href="fstudent.php"><input type="button" class="button" id="register_btn" value="Student"></a>

  </form>
</body>
</html>
