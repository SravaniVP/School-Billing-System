<?php
require'dbconfi/config.php';
?>
<!DOCTYPE html>
<html>
<head >
<title>Delete record</title>

<link rel="stylesheet" href="css/style.css">
</head>

<body style="background:url(https://previews.123rf.com/images/tatus/tatus1407/tatus140700020/29843115-back-to-school-background.jpg); background-size:100%;">

  <center><h2 style="font-size:50px;color:Black;font-family:Heebo;">DELETE TEACHER RECORD</h2>
   <img src="imgs/t1.svg" width="10" height="300" class="avatar"/>
  </center>
  
  <form class="myform" action="deleteteacher.php" method="post">
   <label><b>Full name of the teacher to be deleted:</b></label><br>
   <input name="name" type="text" class="inputvalues" placeholder="Type your Full name" required/><br>
   <input name="submit" type="submit" id="SignUp_btn" value="submit"/><br>
  <a href="teacher.php"> <input type="button" id="Back_btn" value="<<Back to Teacher"/><br></a>
<?php
 if(isset($_POST['submit']))
  {
  echo '<script type="text/javascript">alert("submit button clicked")</script>';
  
  $name=$_POST['name'];
  
  $query="select * from teacher WHERE fullname='$name'";
  $query_run= mysqli_query($con,$query);
   if(mysqli_num_rows($query_run)>0)
   {
    echo '<script type="text/javascript">alert("teacher record found")</script>';
    $query="DELETE FROM teacher WHERE fullname='$name'";
    $query_run= mysqli_query($con,$query);
    if($query_run)
    {echo '<script type="text/javascript">alert("teacher deleted successfully")</script>';}
     else
      {echo '<script type="text/javascript">alert("Error!")</script>';}
    }
}
 ?>
