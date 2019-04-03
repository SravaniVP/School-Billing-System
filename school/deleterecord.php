<?php

require'dbconfi/config.php';
?>
<!DOCTYPE html>
<html>
<head >
<title>delete record</title>

<link rel="stylesheet" href="css/style.css">
</head>

<body style="background:url(https://previews.123rf.com/images/tatus/tatus1407/tatus140700020/29843115-back-to-school-background.jpg); background-size:100%;">

  <center><h2 style="font-size:50px;color:Black;font-family:Heebo;"> DELETE RECORD</h2>
   <img src="imgs/s1.svg"width="300" height="300" class="avatar"/>
  </center>
  
  <form class="myform" action="deleterecord.php" method="post">
   <label><b>Enter any one option below to delete the record of the student</b></label><br>
   <label><b>Full name: </b></label><br>
   <input name="fullname" type="text" class="inputvalues" placeholder="Type your Full name" /><br>
    <label><b>(OR)</b></label><br>
   <label><b>Admission Id:</b></label><br>
   <input name="id" type="text" class="inputvalues" placeholder="id" /><br>
    <label><b>(OR)</b></label><br>
   <label><b>RollNo:</b></label><br>
   <input name="RollNo" type="text" class="inputvalues" placeholder="Type your Full name" /><br>
 
    
  <a href="deleterecord.php"> <input name="submit" type="submit" id="SignUp_btn" value="submit"/><br>
  <a href="student.php"> <input type="button" id="Back_btn" value="<<Back to Student"/><br></a>
 
  </form>
 <?php
  if(isset($_POST['submit']))
  {
  echo '<script type="text/javascript">alert("submit button clicked")</script>';

  $fullname=$_POST['fullname'];
   $query="select * from student WHERE fullname='$fullname'";
   $query_run= mysqli_query($con,$query);
   if(mysqli_num_rows($query_run)>0)
   
    {
     $query="DELETE FROM student WHERE fullname='$fullname'";
    $query_run= mysqli_query($con,$query);
      if($query_run)
      {echo '<script type="text/javascript">alert("student record deleted successfully")</script>';}
      else
      {echo '<script type="text/javascript">alert("Error!")</script>';}
   }


 //if(isset($_POST['submit_btn']))
   //  {
     //session_destroy();
    //header('location:delete.php');
    // }
	 
	 
  $id=$_POST['id'];
   $query="select * from student WHERE id='$id'";
   $query_run= mysqli_query($con,$query);
   if(mysqli_num_rows($query_run)>0)
   
    {
     $query="DELETE FROM student WHERE id='$id'";
    $query_run= mysqli_query($con,$query);
      if($query_run)
      {echo '<script type="text/javascript">alert("student record deleted successfully")</script>';}
      else
      {echo '<script type="text/javascript">alert("Error!")</script>';}
   }


 //if(isset($_POST['submit_btn']))
   //  {
     //session_destroy();
   // header('location:delete.php');
   //  }
  $RollNo=$_POST['RollNo'];
  
   $query="select * from student WHERE RollNo='$RollNo'";
   $query_run= mysqli_query($con,$query);
   if(mysqli_num_rows($query_run)>0)
   
    {
     $query="DELETE FROM student WHERE RollNo='$RollNo'";
    $query_run= mysqli_query($con,$query);
      if($query_run)
      {echo '<script type="text/javascript">alert("student record deleted successfully")</script>';}
      else
      {echo '<script type="text/javascript">alert("Error!")</script>';}
   }

}
 //if(isset($_POST['submit_btn']))
   //  {
   //  session_destroy();
  //  header('location:delete.php');
    // }
     

 
 ?>


 


</body>
</html>

