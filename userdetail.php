<?php 
$con=mysqli_connect('localhost','id14715528_shreya','t*Lwm=N<ykaxE=8r','id14715528_tsf');
$name=$_POST['name'];
$q="select * from user where name='$name'";
$result=mysqli_query($con,$q);
$row_count=mysqli_num_rows($result);
$_SESSION['name']=$name;
?>
<html>
<head>
   <title>
   viewUser
    </title>
    

</head>
    <body align="center" background="hi.jpg" ><br>
<br><br>    
    
        <h2 style="color: #FFFFE0">User Information</h2><br><br><br><br>
       <table align="center" width="30%" >
          
           <th>Name</th>
           <th>Email</th>
           <th>Credit</th>
           <tr align="center"> 
           <?php  
     
     $row=mysqli_fetch_array($result);
           ?>
  <td><?php echo  $row["name"]; ?></td>
  <td><?php echo  $row["email"]; ?></td>
  <td><?php echo  $row["credit"]; ?></td>
   

           </tr>


        </table>

        <br><br><br><br><br><br>
                 <a href="viewuser.php" >
                 <input type="button" name="TRANSFER TO" value="TRANSFER TO" style=" width: 150px; height: 40px; background-color: #87CEFA; border: 100px; color: #008080; ">
               </a>
               <br> <br> 
                 <a href="selectuser.php" >
                 <input type="button" name="BACK" value="BACK" style=" width: 150px; height: 40px; background-color: #87CEFA; border: 100px; color: #008080; ">
               </a>
    </body>
</html>