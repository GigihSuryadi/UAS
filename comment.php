<?php
require_once “config.php”;
$query = "select nama_komentar, isi_komentar from komentarnya where id_artikel=$id order by id desc";
$runquery = mysql_query($query);
while ($result = mysql_fetch_array($runquery))
{
$nama_komentar = $result[‘nama_komentar’];
$isikomentar = $result[‘isi_komentar’];
print "Nama : $nama_komentar <br> $isikomentar <hr>" ;
}
?>