<?php
session_start();
$con=mysqli_connect('localhost','id14715528_shreya','t*Lwm=N<ykaxE=8r','id14715528_tsf');
$name1=$_SESSION['name'];
$q="select name from user where not name='$name1'";
$result=mysqli_query($con,$q);
?>

<html>
<head>
   <title>
   viewUser
    </title>
    
    </head>
    <body align="center" background="hi.jpg"><br><br><br>
    
        <h1> <p style="color: #FFFFE0">Choose name for credit transfer</p></h1><br>
        <form action="transfer.php" method="post" style="position: relative; left: 40%;">
       <table>
           <th><h2>Name</h2></th>
           <?php  
     while($row = $result->fetch_assoc()) { ?>

        
   <tr>
       <td > <input type="radio" name="transfer" value="<?php echo $row["name"]; ?>"><?php echo $row["name"]; ?></td>
      
   </tr>
           <?php }
            ?><
       <tr>
          
           <td><br><br><br><input type="submit" name="CREDIT" value="CREDIT" style=" width: 150px; height: 40px; background-color: #87CEFA; border: 100px; color: #008080; "></td>
           </tr>
        </table>
        </form>
    </body>
</html>
