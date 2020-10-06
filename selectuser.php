<?php
$con=mysqli_connect('localhost','id14715528_shreya','t*Lwm=N<ykaxE=8r','id14715528_tsf');
$q="select name from user";
$result=mysqli_query($con,$q);
?>

<!DOCTYPE html>
<html> 
<head>
	<meta charset="UTF-8">
	<title>Select User</title>     
</head>
<body  align="center" background="hi.jpg">
<form  action="userdetail.php" method="post"><br><br><br><br><br><br><br>
    <h1> <p style="color: #FFFFE0">Select User from list</p></h1>
    <table>
      <br><br>

    <?php 
session_start();
$con=mysqli_connect('localhost','id14715528_shreya','','id14715528_tsf');

$q="select * from user ";
$result=mysqli_query($con,$q);
$row_count=mysqli_num_rows($result);

?>
    <table cellspacing=50px style="position: relative; left: 40%;">
  <tr>
      <td> <h2><p style="color: yellow">Select User</p></h2></td>
<td>

<?php
$con=mysqli_connect('localhost','id14715528_shreya','','id14715528_tsf');
$q="select name from user";
$result=mysqli_query($con,$q);
?>


  <select name="name" onchange="this.form.submit()">
      <option>--Select--</option>
   <?php  
     while($row = $result->fetch_assoc()) { ?>

      <option value="<?php echo $row['name']; ?>"> <?php echo $row["name"]; ?></option>

<?php }
  ?>
  
        </select>
      </td>
    </tr>
       <tr>
           <td></td>
    </tr>
        </table>
    </form> 
</body>
</html>