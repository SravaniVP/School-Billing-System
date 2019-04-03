<?php

require'dbconfi/config.php';
session_start();
?>
<!DOCTYPE html>
<html>
<head >
<title>update record</title>

<link rel="stylesheet" href="css/style.css">
</head>

<body style="background:url(https://previews.123rf.com/images/tatus/tatus1407/tatus140700020/29843115-back-to-school-background.jpg); background-size:100%;">

  <center><h2 style="font-size:50px;color:Black;font-family:Heebo;"> UPDATE RECORD</h2>
  <img src="imgs/avatar.jpg" class="avatar"/>
  </center>
  
  <form class="myform" action="update.php" method="post">
   <label><b>Enter any one option below to update the record of the student</b></label><br>
   <label><b>Full name: </b></label><br>
   <input name="fullname" type="text" class="inputvalues" placeholder="Type your Full name" /><br>
   <input name="submit" type="submit" id="SignUp_btn" value="submit"/><br>
  <a href="student.php"> <input type="button" id="Back_btn" value="<<Back to Student"/><br></a>
 
  </form>
 <?php
 
   if(isset($_POST['submit']))
   {
    $fullname=$_POST['fullname'];
   $query="select * from student WHERE fullname='$fullname'";
   $query_run= mysqli_query($con,$query);
   if(mysqli_num_rows($query_run)>0)
  {
$_SESSION['fullname']=$fullname;
	  $results=mysqli_fetch_assoc($query_run);
    echo "<center><a href='updaterecord.php?id=$results[id]&fullname=$results[fullname]&gender=$results[gender]&fathername=$results[fathername]&mothername=$results[mothername]&DateofBirth=$results[DateofBirth]&class=$results[class]&fee=$results[fee]&feepaid=$results[feepaid]&RollNo=$results[RollNo]&PersonalAddress=$results[PersonalAddress]&EmailId=$results[EmailId]&MobileNo=$results[MobileNo]&guardianNo=$results[guardianNo]'>edit</a></center><br/>";}
    else{
       echo '<script type="text/javascript">alert("student record does not exist")</script>';}

    }
 
  
 ?>

</body>
</html>

