<?php
 
$host="localhost";  
$username="root";  
$password="";  
$database="rekrutmen";  
 
$mysqli = mysqli_connect("$host", "$username", "$password", "$database") or die ("koneksi ke mysql server gagal! ");