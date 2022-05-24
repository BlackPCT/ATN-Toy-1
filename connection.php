<?php
	/*$Connect = mysqli_connect("localhost","root","","qlbh") or die("Lỗi".mysqli_error($Connect));
	mysqli_query($Connect,'SET NAMES "utf8"');
	//mysqli_close($Connect);*/
	
	
$conn = pg_connect("host=localhost port=5432 dbname=ATNshop user=postgres password=20102001");
if (!$conn) {
	die("Connection failed");
}
?>