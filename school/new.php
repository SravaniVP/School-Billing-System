<?php
session_start();
require'dbconfi/config.php';
$_GET['id'];
$Fullname=$_GET['fullname'];
$_GET['gender'];
$_GET['fathername'];
$_GET['mothername'];
$_GET['DateofBirth'];
$_GET['class'];
$f=$_GET['fee'];
$_GET['RollNo'];
$_GET['PersonalAddress'];
$_GET['EmailId'];
$_GET['MobileNo'];
$_GET['guardianNo'];
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
  
  <form class="myform" action="new.php" method="post">
   <label><b>Full name:</b></label><br>
   <input name="fullname" type="text" class="inputvalues" value="<?php echo $_GET['fullname']?>" required/><br>
   <label><b>Fee Balance:</b></label><br>
   <input name="Fee" type="text" class="inputvalues" value="<?php echo $f?>" required/><br>
   <label><b>Fee paid:</b></label><br>
   <input name="feepaid" type="text" class="inputvalues" placeholder="Fee paid" required/><br>
   <input name="submit" type="submit" id="SignUp_btn" value="submit"/><br>
  <a href="student.php"> <input type="button" id="Back_btn" value="<<Back to Student"/><br></a>
<?php
 if(isset($_POST['submit']))
  {
  echo '<script type="text/javascript">alert("submit button clicked")</script>';
        $name=$_POST['fullname'];
        $query="select * from student WHERE fullname='$name'";
        $query_run= mysqli_query($con,$query);
        if(mysqli_num_rows($query_run)>0)
        $results=mysqli_query($con,$query);
        $row=mysqli_fetch_array($results);
        $fe=$row["fee"];
  $paid=$_POST['feepaid'];
  $dif=$fe-$paid;
  $fp=$row["feepaid"]+$paid;
  
    $query="UPDATE student SET fee='$dif',feepaid='$fp' WHERE fullname='$name'";
    $query_run= mysqli_query($con,$query);
    if($query_run)
    {echo '<script type="text/javascript">alert("Fee details updated successfully")</script>';
        header('location:student.php');}
     else
      {echo '<script type="text/javascript">alert("Error!")</script>';}
    }

 ?>
