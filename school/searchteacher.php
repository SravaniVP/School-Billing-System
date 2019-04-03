<?php
require'dbconfi/config.php';
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>Search Page</title>
<style>
  th,td{
    padding:10px;
     border: 1px solid black;
    }
</style>
<link rel="stylesheet" href="css/style.css">
</head>
<body style="background:url(https://previews.123rf.com/images/tatus/tatus1407/tatus140700020/29843115-back-to-school-background.jpg); background-size:100%;">

 <center><h2 style="font-size:50px;color:black;font-family:Heebo;">SEARCH RECORD</h2>
   <img src="imgs/t1.svg" width="10" height="300" class="avatar"/>
  </center>
  
  <form class="myform" action="searchteacher.php" method="post">
    <label><b>Full name of the teacher to be searched:<br>(OR)</b></label><br>
   <input name="name" type="text" class="inputvalues" placeholder="Type your Full name"/><br>
   <label><b>Id of the teacher to be searched:</b></label><br>
   <input name="id" type="text" class="inputvalues" placeholder="Id"/><br>
    <input name="submit" type="submit" id="SignUp_btn" value="submit"/><br>
    <a href="teacher.php"> <input type="button" id="Back_btn" value="<<Back to teacher"/><br></a>
   
  </form>
  <h3 style="background-color:#009432;color:white";>TEACHER INFORMATION
          
   <?php
     if(isset($_POST['submit']))
     {
       echo '<script type="text/javascript">alert("submit button clicked")</script>';  
        $name=$_POST['name'];
        $query="select * from teacher WHERE fullname='$name'";
        $query_run= mysqli_query($con,$query);
        if(mysqli_num_rows($query_run)>0)
        $results=mysqli_query($con,$query);
        $id=$_POST['id'];
        $query="select * from teacher WHERE id='$id'";
        $query_run= mysqli_query($con,$query);
        if(mysqli_num_rows($query_run)>0)
         $results=mysqli_query($con,$query);
 
      echo "<table>";
      echo "<tr>";
         echo "<th>";echo "fullname";echo "</th>";
	 echo "<th>";echo "gender";echo "</th>";
	 echo "<th>";echo "subject";echo "</th>";
	 echo "<th>";echo "PersonalAddress";echo "</th>";
	 echo "<th>";echo "EmailId";echo "</th>";
	 echo "<th>";echo "MobileNo";echo "</th>";
  
echo "</tr>";


        while($row=mysqli_fetch_array($results))
        {
         echo "<tr>";
         echo "<td>";echo $row["fullname"];echo "</td>";
	 echo "<td>";echo $row["gender"];echo "</td>";
	 echo "<td>";echo $row["subject"];echo "</td>";
	 echo "<td>";echo $row["PersonalAddress"];echo "</td>";
	 echo "<td>";echo $row["EmailId"];echo "</td>";
	 echo "<td>";echo $row["MobileNo"];echo "</td>";
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







