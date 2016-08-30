<?php

$conn = mysqli_connect('localhost','root','','phone');

$name = $_GET['q'];

$sql = "SELECT * FROM mobile WHERE name = '$name'";
$res = mysqli_query($conn,$sql);

if(mysqli_num_rows($res)>0){
	while($row = mysqli_fetch_assoc($res)){
		echo $row['price'];
	}
}else{
	echo "don't ask me everything"; 
}

?>