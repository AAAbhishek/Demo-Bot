<?php

$conn = mysqli_connect('localhost','root','','phone');
	
$name = $_GET['q'];
$name = intval($name);

$sql = "select * from mobile where ram > $name";
 
$res = mysqli_query($conn,$sql);

if(mysqli_num_rows($res)>0){
	while($row = mysqli_fetch_assoc($res)){
		echo $row['name']."  ";
		echo $row['ram']."<br>";
	}
}
else{
	echo "don't ask me stupid questions"; 
}

?>