<?php
session_start();
$con=mysqli_connect('localhost','id14715528_shreya','t*Lwm=N<ykaxE=8r','id14715528_tsf');
$q="select name from user";
$result=mysqli_query($con,$q);
$_SESSION['to']=$_POST["transfer"];
?>
<html>
<head>
   <title>
   viewUser
   </title>
    
   <style>
     
         input[type=text]
        { 
            margin-top: 5px;
            width:10em;
            height:2em;
            font-size:15px;
           
            font-weight: bold;
        }
         input[type=submit]
        { 
            margin-top: 10px;
            width:6em;
            height:2em;
            font-size:15px;
            background-color: brown;
            font-weight: bold;
        }
    </style>
    </head>
    <body align="center" background="hi.jpg">
        <form action="checkcredit.php" method="post"  style="position: relative; top:20%; ">
              <h2 style="color:	#FFFFE0">Transfer Credits:</h2>
          <br><br><br><br><br><br>
          <input type="text" name="transfer">
          <br><br><br><br><br><br>
          <input type="submit" name="SUBMIT" value="SUBMIT" style=" width: 150px; height: 40px; background-color: #87CEFA; border: 100px; color: #008080; ">
        </form>
    </body>
</html>