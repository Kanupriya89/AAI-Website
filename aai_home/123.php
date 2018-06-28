<?php

$a=$_GET["rate"];


$conn=new mysqli("localhost","root","","aai");
if($conn->connect_error)
{
        die("conection failed: ".$conn->connect_error );
}
else
{
	
	$query = "INSERT INTO rate(rating) VALUES('$a')";
$result=($conn->query($query));

if($result)
{echo "<br>We have successfully stored yor response.<br>";
include('rate.html');
}
else
{
echo "<br>not done";
}

$sql="SELECT AVG(rating) FROM rate";

$result=($conn->query($sql));

if($result->num_rows>0)

{echo "<br>";

while($row = $result->fetch_assoc()) {
       echo "<font size='3' face='Arial' color='#0736BF'>";
	   $rat=round($row['AVG(rating)']);
	   
echo "curent average rating:";
echo " <meter value='$rat' min='0' max='5'></meter>";
echo " $rat/5";
}}
	
}
?>