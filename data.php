<?php

if(isset($_POST['name'])&&isset($_POST['price'])&&isset($_POST['ram'])){
	$name = $_POST['name'];
	$price = $_POST['price'];
	$ram = $_POST['ram'];
	
	$conn = mysqli_connect('localhost','root','','phone');
	
	$sql = "Insert into mobile values ('$name','$price','$ram')";
	if(mysqli_query($conn,$sql)){
		echo "Phone data inserted";
	}else{
		echo "not inserted";
	}
}

?>

<html>
<form method = "POST" action = "#">
	<input type = "text" name = "name" placeholder = "enter phone name"/>
	<input type = "text" name = "price" placeholder = "enter phone price"/>
	<input type = "text" name = "ram" placeholder = "enter phone ram"/>
	<button type = "submit">Add phone</button>
</form>