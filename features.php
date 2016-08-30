<?php

$conn = mysqli_connect('localhost','root','','phone');

$name = $_GET['q'];

$sql = "select * from mobile where name = '$name'";

$res = mysqli_query($conn,$sql);

echo "<table>";
echo "<tr><th> Mobile Name </th><th> Price </th><th>  RAM(gb)  </th></tr>";
if(mysqli_num_rows($res)>0){
	while($row = mysqli_fetch_assoc($res)){
		$name1 = $row['name'];
		$price = $row['price'];
		$ram = $row['ram'];
	}
	echo "<tr>";
	echo "<td>".$name1."</td>";
	echo "<td>".$price."</td>";
	echo "<td>".$ram."</td>";
	echo "</tr>";
}
else{
	echo "don't ask me stupid questions"; 
}
echo "</table>";

?>