<?php

$conn = pg_connect("postgres://adsoxlxfioxyeo:3f90afe752c788e830cc12e9253c771a3cce1087ece9ff2729518e2bf77c8456@ec2-54-172-175-251.compute-1.amazonaws.com:5432/deq1q56aprtlfm");
	if(!$conn)
	{
		die("Could not connect to database");
    }

	
/*	
$conn = pg_connect("host=localhost port=5432 dbname=ATNshop user=postgres password=20102001");
if (!$conn) {
	die("Connection failed");
}*/
?>