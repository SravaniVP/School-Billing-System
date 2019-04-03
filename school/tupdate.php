<?php

require'dbconfi/config.php';
?>
<!DOCTYPE html>
<html>
<head >
<title>update teacher record</title>

<link rel="stylesheet" href="css/style.css">
</head>

<body style="background:url(https://previews.123rf.com/images/tatus/tatus1407/tatus140700020/29843115-back-to-school-background.jpg); background-size:100%;">

  <center><h2 style="font-size:50px;color:Black;font-family:Heebo;"> UPDATE TEACHER RECORD</h2>
   <img src="imgs/t1.svg" width="10" height="300" class="avatar"/>
  </center>
  
  <form class="myform" action="tupdate.php" method="post">
   <label><b>Enter any one option below to update the record of the Teacher</b></label><br>
   <label><b>Full name: </b></label><br>
   <input name="fullname" type="text" class="inputvalues" placeholder="Type teacher Full name" /><br>
   <input name="submit" type="submit" id="SignUp_btn" value="submit"/><br>
  <a href="teacher.php"> <input type="button" id="Back_btn" value="<<Back to Teacher"/><br></a>
 
  </form>
 <?php
   if(isset($_POST['submit']))
   {
    $fullname=$_POST['fullname'];
   $query="select * from teacher WHERE fullname='$fullname'";
   $query_run= mysqli_query($con,$query);
   if(mysqli_num_rows($query_run)>0)
  { $results=mysqli_fetch_assoc($query_run);
    echo "<a href='updateteacher.php?id=$results[id]&fullname=$results[fullname]&gender=$results[gender]&subject=$results[subject]&salary=$results[salary]&salarypaid=$results[salarypaid]&PersonalAddress=$results[PersonalAddress]&EmailId=$results[EmailId]&MobileNo=$results[MobileNo]'>edit</a><br/>";}
    else{
       echo '<script type="text/javascript">alert("teacher record does not exist")</script>';}

    }
 
  
 ?>

</body>
</html>

