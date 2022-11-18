<?php
error_reporting(0);
$Name = $_POST['name'];
$Number = $_POST['number'];
$Email = $_POST['email'];
$Date= $_POST['date'];
$Message=$_POST['message'];
/* database connection */
$servername="localhost";
$username="root";
$password="";
$dbname="crud";
$conn=mysqli_connect($servername,$username,$password,$dbname);
if($conn){
    echo "Sucessfully <br>" ;
    $req=mysqli_query($conn,"INSERT INTO operation VALUES('$Name','$Number','$Email','$Date','$Message')");
    if($req)
    echo "New Record Added Succesfully";
    else
    echo "Found Error".mysqli_error($conn);
}
else 
    echo "Connection Failed :".mysqli_connect_error();
mysqli_close($conn);
?>