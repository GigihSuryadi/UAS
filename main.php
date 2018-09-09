<?php
require_once “config.php”;
$query??? = “select * from artikelnya”;
$runquery = mysql_query($query);
while($result = mysql_fetch_array($runquery))
{
$id = $result[‘id’];
$judul = $result[‘judul’];
$isi_artikelnya = $result[‘isi_artikel’];
$isi = substr($isi_artikelnya,0,400);
$isi = substr($isi_artikelnya,0,strrpos($isi,” “));
print “<b>$judul<br></b>$isi…”;
print “<a href=view.php?page_detil=$id>Selengkapnya</a><br><br>”;
}
?>