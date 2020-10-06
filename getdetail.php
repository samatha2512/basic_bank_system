<?php 
session_start();
$con=mysqli_connect('localhost','id14715528_shreya','t*Lwm=N<ykaxE=8r','id14715528_tsf');

$q="select * from user ";
$result=mysqli_query($con,$q);
$row_count=mysqli_num_rows($result);

?>
<html>
<head>
   <title>
   viewUser
    </title>
    

    </head>
    <body align="center" background="hi.jpg">
      <br>
        <h1><font face="camel" color=" #FFFFE0"><u>User Information</u></font></h1><br><br>
        
        <table align="center" border="1" bgcolor=" #E6E6FA" height="50%" width="40%">
	<thead>
		<th>Name</th>
		<th>Email</th>
		<th>Credit</th>
		
	</thead>
	<tbody  align="center">
		<tr>
        <?php  
     
     $row=mysqli_fetch_array($result);
           ?>
 <td><?php echo  $row["name"]; ?></td>
  <td><?php echo  $row["email"]; ?></td>
  <td><?php echo  $row["credit"]; ?></td>
   

		</tr>
		<tr>
        <?php  
     
     $row=mysqli_fetch_array($result);
           ?>
 <td><?php echo  $row["name"]; ?></td>
  <td><?php echo  $row["email"]; ?></td>
  <td><?php echo  $row["credit"]; ?></td>
   

        </tr>
        <tr>
        <?php  
     
     $row=mysqli_fetch_array($result);
           ?>
 <td><?php echo  $row["name"]; ?></td>
  <td><?php echo  $row["email"]; ?></td>
  <td><?php echo  $row["credit"]; ?></td>
   

        </tr>
        <tr>
        <?php  
     
     $row=mysqli_fetch_array($result);
           ?>
 <td><?php echo  $row["name"]; ?></td>
  <td><?php echo  $row["email"]; ?></td>
  <td><?php echo  $row["credit"]; ?></td>
   

        </tr>
        <tr>
        <?php  
     
     $row=mysqli_fetch_array($result);
           ?>
 <td><?php echo  $row["name"]; ?></td>
  <td><?php echo  $row["email"]; ?></td>
  <td><?php echo  $row["credit"]; ?></td>
   

        </tr>
        <tr>
        <?php  
     
     $row=mysqli_fetch_array($result);
           ?>
 <td><?php echo  $row["name"]; ?></td>
  <td><?php echo  $row["email"]; ?></td>
  <td><?php echo  $row["credit"]; ?></td>
   

        </tr>
        <tr>
        <?php  
     
     $row=mysqli_fetch_array($result);
           ?>
 <td><?php echo  $row["name"]; ?></td>
  <td><?php echo  $row["email"]; ?></td>
  <td><?php echo  $row["credit"]; ?></td>
   

        </tr>
        <tr>
        <?php  
     
     $row=mysqli_fetch_array($result);
           ?>
 <td><?php echo  $row["name"]; ?></td>
  <td><?php echo  $row["email"]; ?></td>
  <td><?php echo  $row["credit"]; ?></td>
   

        </tr>
        <tr>
        <?php  
     
     $row=mysqli_fetch_array($result);
           ?>
 <td><?php echo  $row["name"]; ?></td>
  <td><?php echo  $row["email"]; ?></td>
  <td><?php echo  $row["credit"]; ?></td>
   

        </tr>
        <tr>
        <?php  
     
     $row=mysqli_fetch_array($result);
           ?>
 <td><?php echo  $row["name"]; ?></td>
  <td><?php echo  $row["email"]; ?></td>
  <td><?php echo  $row["credit"]; ?></td>
   

        </tr>
        
	</tbody>
</table>
         

           

        <br><br><br>
        
                  
                
              
                <a href="selectuser.php" >
                 
                 <input type="button" name="TRANSFER CREDITS" value="TRANSFER CREDITS" style=" width: 150px; height: 40px; background-color: #87CEFA; border: 100px; color: #008080; ">
               </a>
               <br><br>
                 <a href="index.php" >
                 
                 <input type="button" name="HOME" value="HOME" style=" width: 150px; height: 40px; background-color: #87CEFA; border: 100px; color: #008080; "></a>
    </body>
</html>