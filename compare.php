<?php

if(!isset($_GET['p1'])){
	return false;
}

$conn = mysqli_connect('localhost','root','','phone');



$name1 = $_GET['p1'];
$name2 = $_GET['p2'];



$sql1 = "select * from mobile where name = '$name1'";
$sql2 = "select * from mobile where name = '$name2'";

$res1 = mysqli_query($conn,$sql1);
$res2 = mysqli_query($conn,$sql2);

echo "<div style = 'display:flex;'>";
echo "<table style = 'border:1px solid black'>";
echo "<tr><th> 1st Mobile </th><th> Price </th><th>  RAM(gb)  </th></tr>";
if(mysqli_num_rows($res1)>0){
	while($row = mysqli_fetch_assoc($res1)){
		$nam1 = $row['name'];
		$price1 = $row['price'];
		$ram1 = $row['ram'];
	}
	echo "<tr>";
	echo "<td>".$nam1."</td>";
	echo "<td>".$price1."</td>";
	echo "<td>".$ram1."</td>";
	echo "</tr>";
}
else{
	echo "don't ask me stupid questions"; 
}
echo "</table>";

echo "<table style = 'border:1px solid black'>";
echo "<tr><th> 2nd Mobile </th><th> Price </th><th>  RAM(gb)  </th></tr>";
if(mysqli_num_rows($res2)>0){
	while($row = mysqli_fetch_assoc($res2)){
		$nam2 = $row['name'];
		$price2 = $row['price'];
		$ram2 = $row['ram'];
	}
	echo "<tr>";
	echo "<td>".$nam2."</td>";
	echo "<td>".$price2."</td>";
	echo "<td>".$ram2."</td>";
	echo "</tr>";
}
else{
	echo "don't ask me everything"; 
}
echo "</table>";
echo "<div>";

?>