<?php
session_start();
require'dbconfi/config.php';
$_GET['id'];
$Fullname=$_GET['fullname'];
$_GET['gender'];
$_GET['subject'];
$f=$_GET['salary'];
$_GET['salarypaid'];
$_GET['RollNo'];
$_GET['PersonalAddress'];
$_GET['EmailId'];
$_GET['MobileNo'];

?>
<!DOCTYPE html>
<html>
<head >
<title>Fee Details</title>

<link rel="stylesheet" href="css/style.css">
</head>

<body style="background:url(https://previews.123rf.com/images/tatus/tatus1407/tatus140700020/29843115-back-to-school-background.jpg); background-size:100%;">

  <center><h2 style="font-size:50px;color:Black;font-family:Heebo;">MODIFY RECORD</h2>
   <img src="imgs/s1.svg"width="300" height="300" class="avatar"/>
  </center>
  
  <form class="myform" action="new1.php" method="post">
   <label><b>Full name:</b></label><br>
   <input name="fullname" type="text" class="inputvalues" value="<?php echo $_GET['fullname']?>" required/><br>
   <label><b>Salary:</b></label><br>
   <input name="salary" type="text" class="inputvalues" value="<?php echo $f?>" required/><br>
   <label><b>Subject paid:</b></label><br>
   <input name="salarypaid" type="text" class="inputvalues" placeholder="Fee paid" required/><br>
   <input name="submit" type="submit" id="SignUp_btn" value="submit"/><br>
  <a href="teacher.php"> <input type="button" id="Back_btn" value="<<Back to Teacher"/><br></a>
<?php
 if(isset($_POST['submit']))
  {
  echo '<script type="text/javascript">alert("submit button clicked")</script>';
        $name=$_POST['fullname'];
        $query="select * from teacher WHERE fullname='$name'";
        $query_run= mysqli_query($con,$query);
        if(mysqli_num_rows($query_run)>0)
        $results=mysqli_query($con,$query);
        $row=mysqli_fetch_array($results);
        $fe=$row["salary"];
        $paid=$_POST['salarypaid'];
        $dif=$fe-$paid;
        $fp=$row["salarypaid"]+$paid;
  
    $query="UPDATE teacher SET salary='$dif',salarypaid='$fp' WHERE fullname='$name'";
    $query_run= mysqli_query($con,$query);
    if($query_run)
    {echo '<script type="text/javascript">alert("Fee details updated successfully")</script>';
        header('location:teacher.php');}
     else
      {echo '<script type="text/javascript">alert("Error!")</script>';}
    }

 ?>
