<?php
require'dbconfi/config.php';
session_start();
?>

<!DOCTYPE html>
<html>
<head>
<title>Display List</title>
<style>
  th,td{
    padding:10px;
     border: 1px solid black;
    }
</style>
<link rel="stylesheet" href="css/style.css">
</head>
<body style="background:url(https://previews.123rf.com/images/tatus/tatus1407/tatus140700020/29843115-back-to-school-background.jpg); background-size:100%;">

 <center><h2 style="font-size:50px;color:black;font-family:Heebo;">DISPLAY LIST</h2>
   <img src="imgs/s1.svg"width="300" height="300" class="avatar"/>
  </center>
  
  <form class="myform" action="studentlist.php" method="post">
    <label><b>Enter the class of required students list:</b></label><br>
    <input name="name" type="text" class="inputvalues" placeholder="Type class"/><br>
    <input name="submit" type="submit" id="SignUp_btn" value="submit"/><br>
    <a href="student.php"> <input type="button" id="Back_btn" value="<<Back to Student"/><br></a>
   
  </form>
  <h3 style="background-color:#009432;color:white";>STUDENT INFORMATION
          
   <?php
     if(isset($_POST['submit']))
     {
        echo '<script type="text/javascript">alert("submit button clicked")</script>';  
        $c=$_POST['name'];
        $query="select * from student WHERE class='$c'";
        $query_run= mysqli_query($con,$query);
        if(mysqli_num_rows($query_run)>0)
        $results=mysqli_query($con,$query);
      echo "<table>";
      echo "<tr>";
         echo "<th>";echo "fullname";echo "</th>";
	 echo "<th>";echo "gender";echo "</th>";
	 echo "<th>";echo "fathername";echo "</th>";
	 echo "<th>";echo "mothername";echo "</th>";
	 echo "<th>";echo "DateofBirth";echo "</th>";
	 echo "<th>";echo "class";echo "</th>";
         echo "<th>";echo "RollNo";echo "</th>";
	 echo "<th>";echo "PersonalAddress";echo "</th>";
	 echo "<th>";echo "EmailId";echo "</th>";
	 echo "<th>";echo "MobileNo";echo "</th>";
	 echo "<th>";echo "guardianNo";echo "</th>";
      echo "</tr>";


        while($row=mysqli_fetch_array($results))
        {
         echo "<tr>";
         echo "<td>";echo $row["fullname"];echo "</td>";
	 echo "<td>";echo $row["gender"];echo "</td>";
	 echo "<td>";echo $row["fathername"];echo "</td>";
	 echo "<td>";echo $row["mothername"];echo "</td>";
	 echo "<td>";echo $row["DateofBirth"];echo "</td>";
	 echo "<td>";echo $row["class"];echo "</td>";
         echo "<td>";echo $row["RollNo"];echo "</td>";
	 echo "<td>";echo $row["PersonalAddress"];echo "</td>";
	 echo "<td>";echo $row["EmailId"];echo "</td>";
	 echo "<td>";echo $row["MobileNo"];echo "</td>";
	 echo "<td>";echo $row["guardianNo"];echo "</td>";
        echo "</tr>";
           
	}
        echo"</table>";                        
           
        
          
     }

      if(isset($_POST['logout']))
     {
     session_destroy();
    header('location:index.php');
     }
     if(isset($_POST['teacher']))
     {
      session_destroy();
      header('location:teacher.php');
      }
    ?>
   
  </h3>
  

</body>
</html>







