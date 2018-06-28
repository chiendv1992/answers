<?php

$servername = "localhost";
$username = "root";
$password = "123123";
$dbname = "test";
$con = mysqli_connect($servername,$username,$password,$dbname); 
if(!$con){
 
   die('Ket noi that bai:'.mysqli_connect_error());
 
}
$data = '';
for($i = 1; $i <= 100000; $i++) {
	$data.="('Name_".$i."','firtname".$i."','email".$i."', '".rand(1,2)."','address".$i."','image".$i."'),";
}
$data = substr($data, 0, strlen($data)-1);

	// $sql = "INSERT INTO users"."(`name`,`firtname`,`email`, `phone`, `address`, `image`) values" . $data  ;
	$sql = "INSERT INTO users"."(`name`,`firtname`,`email`, `phone`, `address`, `image`) values" . $data ;

	$msc = microtime(true);
	if(mysqli_query($con,$sql)){
		$msc = microtime(true)-$msc;
		echo "Thoi gian thuc hien: ";
		echo $msc . ' s'."<br/>"; // in seconds
	}else
	{
		echo"Error".mysqli_error($con);
	}
 
?>