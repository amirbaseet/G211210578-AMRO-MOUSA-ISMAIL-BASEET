<!DOCTYPE html>
<html>
<link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"
    />

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<body>
  
<?php
$mail = $_POST['email'];
$pass = $_POST['password'];
 
if($mail == 'b1812100001@sakarya.edu.tr' and $pass == 'b1812100001')
{    
    session_start();
    $_SESSION['sid']=session_id();
    echo "Logged in successfully";
    echo "<br>";
    echo"Hoşgeldiniz “b1812100001”";
    

}else
{
    header("Refresh: 1; url=log.php");
}

?>
 
</body>
</html>