<?php
	$host = "ec2-54-159-107-189.compute-1.amazonaws.com";
	$user = "uoryhabrwpjnki";
	$pass = "e5ab497dce158f27401ccc12544550d6fb7a1c500cae8f0139fdaacd25dde267";
	$port = "5432"; 
	$dbname = "da4g14e96hr16f";
	$conn = pg_connect("host=".$host." port=".$port." dbname=".$dbname." user=".$user." password=".$pass) or die("Gagal");

?>