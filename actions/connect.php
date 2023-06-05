 <?php

 


 


$con=new mysqli('localhost','root','','votingsystem');

if($con){

     echo "connection successful";

    
}
else
{

    die(mysqli_error($con));
}




 
?>