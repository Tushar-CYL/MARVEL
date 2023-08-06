<?php 
$server = "localhost";
$username = "root";
$password = "";
$database  = "spy";

$con = mysqli_connect($server,$username,$password,$database);

 if($con){
    echo "";
}
else{
    echo "unsuccessful";
}

?>