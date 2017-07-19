<?php
	$P = $_GET['p'];
	$R = $_GET['r'];
	$N = $_GET['n'];
	$T=$N*12;
	$M=($R/100)/12;
	$MP=floor(($P*$M)/(1-pow((1+$M),(-1*$T)))*100)/100;
	echo $MP === "" ? "NULL" : $MP;
?>