<?php
$conn=mysqli_connect("localhost","root","","blog") or die("connection failed:"); 

if(isset($_POST['Submit'])){
$Name=$_POST['Name'];
$Email=$_POST['Email'];
$Phone=$_POST['Phone'];
$message=$_POST['Message'];

$sql=mysqli_query($conn, "INSERT INTO contactform VALUE('', '$Name', '$Email', '$Phone', '$Message')");
if($sql == true){
echo "Submit CREATED SUCCESSFULLY";
}else{
echo "error creating submit";
}
}
?>
