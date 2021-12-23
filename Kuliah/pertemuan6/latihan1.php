<?php  
// hostname or ip of server
$servername='localhost';

// username and password
$dbusername='root';
$dbpassword='';
$link=mysql connect("$servername","$dbusername","$dbpassword")
or die ("koneksi database gagal");
if ($link)
{
    echo "Koneksi Berhasil";
}
?>