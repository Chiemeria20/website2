<?php
$servername="localhost";
$username="root";
$password="";
$dbname="rental";
//create connection

$conn=mysqli_connect($servername,$username,$password,$dbname);


//check the connection
if(!$conn){
die("connection failed:".mysqli_connect_error());
}

$sql="CREATE TABLE rent(
id INT(5) AUTO_INCREMENT PRIMARY KEY,
day VARCHAR(10) NOT NULL,
time VARCHAR(10) NOT NULL,
location VARCHAR(50) NOT NULL,
reg_date TIMESTAMP)";
if(mysqli_query($conn,$sql)){
echo "TABLE CREATED SUCCESSFULLY";}
else{
"error creating TABLE".mysqli_error($conn);}

mysqli_close($conn)
?>