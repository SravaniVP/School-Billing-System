

<?php
require'dbconfi/config.php';

//$_SESSION['name']= $x;
?>

<!DOCTYPE html>
<html>
<head>
<title>Fee Page</title>
<style>
  th,td{
    padding:10px;
     border: 1px solid black;
    }
</style>
<link rel="stylesheet" href="css/style.css">
</head>
<body style="background:url(https://previews.123rf.com/images/tatus/tatus1407/tatus140700020/29843115-back-to-school-background.jpg); background-size:100%;">

 <center><h2 style="font-size:50px;color:black;font-family:Heebo;">CALCULATE FEE </h2>
   <img src="imgs/s1.svg"width="300" height="300" class="avatar"/>
  </center>
  
  <form class="myform" action="fee.php" method="post">
    <label><b>Full name to be searched:<br>(OR)</b></label><br>
   <input name="name" type="text" class="inputvalues" placeholder="Type your Full name"/><br>
   <label><b>Id:<br>(OR)</b></label><br>
   <input name="id" type="text" class="inputvalues" placeholder="Type your Full name"/><br>
   <label><b>RollNo</b></label><br>
   <input name="RollNo" type="text" class="inputvalues" placeholder="Type your Full name"/><br>
    <input name="submit" type="submit" id="SignUp_btn" value="submit"/><br>
    <a href="student.php"> <input type="button" id="Back_btn" value="<<Back to Student"/><br></a>
   
  </form>
  <h3 style="background-color:#009432;color:white";>
          
   <?php
     if(isset($_POST['submit']))
     {
       echo '<script type="text/javascript">alert("submit button clicked")</script>';  
       $name=$_POST['name'];
        $query="select * from student WHERE fullname='$name'";
        $query_run= mysqli_query($con,$query);
        if(mysqli_num_rows($query_run)>0)
         $results=mysqli_query($con,$query);
         $id=$_POST['id'];
        $query="select * from student WHERE id='$id'";
        $query_run= mysqli_query($con,$query);
        if(mysqli_num_rows($query_run)>0)
         $results=mysqli_query($con,$query);
        $RollNo=$_POST['RollNo'];
        $query="select * from student WHERE RollNo='$RollNo'";
         $query_run= mysqli_query($con,$query);
         if(mysqli_num_rows($query_run)>0)
        $results=mysqli_query($con,$query);
 echo "STUDENT FEE INFORMATION";
 
      echo "<table>";
      echo "<tr>";
         echo "<th>";echo "fullname";echo "</th>";
         echo "<th>";echo "class";echo "</th>";
         echo "<th>";echo "RollNo";echo "</th>";
	 echo "<th>";echo "fee_to_be_paid";echo "</th>";
          echo "<th>";echo "fee_paid";echo "</th>";
	   echo "<th>";echo "EmailId";echo "</th>";
	   echo "<th>";echo "MobileNo";echo "</th>";
	   echo "<th>";echo "guardianNo";echo "</th>";
      echo "</tr>";

 
        while($row=mysqli_fetch_array($results))
        {
         echo "<tr>";
         echo "<td>";echo $row["fullname"];echo "</td>";
   echo "<td>";echo $row["class"];echo "</td>";
   echo "<td>";echo $row["RollNo"];echo "</td>";
   echo "<td>";echo $row["fee"];echo "</td>";
   echo "<td>";echo $row["feepaid"];echo "</td>";
   echo "<td>";echo $row["EmailId"];echo "</td>";
   echo "<td>";echo $row["MobileNo"];echo "</td>";
   echo "<td>";echo $row["guardianNo"];echo "</td>";
        echo "</tr>";
       echo "<a href='new.php?id=$row[id]&fullname=$row[fullname]&gender=$row[gender]&fathername=$row[fathername]&mothername=$row[mothername]&DateofBirth=$row[DateofBirth]&class=$row[class]&fee=$row[fee]&RollNo=$row[RollNo]&PersonalAddress=$row[PersonalAddress]&EmailId=$row[EmailId]&MobileNo=$row[MobileNo]&guardianNo=$row[guardianNo]'>click here to edit fee details</a><br/>"; 
     
        echo"</table>";                        
            
  }
    
        
          
     }

      if(isset($_POST['logout']))
     {
     session_destroy();
    header('location:index.php');
     }
     
    ?>
   
   
  </h3>
  

</body>

</html>
