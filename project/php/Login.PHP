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
    header("Refresh: 1; url=../log.html");
}



?>
