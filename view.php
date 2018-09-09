<?php
require_once “config.php”;
$id = $_GET[‘page_detil’];
if (ISSET($_GET[‘page_detil’]))
?? ?{
?? ?$query????? = “select * from artikelnya where id=$id”;
?? ?$runquery?? = mysql_query($query);
?? ?$result???? = mysql_fetch_array($runquery);
?? ?$isi_artikel = $result[‘isi_artikel’];
?? ?print $isi_artikel ; 
?? ?print “<br><a href=main.php>Kembali … </a><br><br>”;
?? ??? ?
?? ?print “<b>Komentarnya : </b><hr>”;
?? ?require_once “comment.php”;
????}
else
print “”;
if ($_REQUEST[‘entry’] == “comment”)
?? ?{
?? ?$id_artikel = $_POST[‘id_artikel’] ;
?? ?$nama = $_POST[‘nama’];
?? ?$komentar = $_POST[‘komentar’];
?? ?$query2??? =? “insert into komentarnya values(”,’$nama’,’$komentar’,’$id_artikel’)”;
?? ?$runquery2 =? mysql_query($query2);
?? ?print “Berhasil di masukkan<br>”;
?? ?print “<a href=view.php?page_detil=$id_artikel>Kembali…</a>”;?? ?
?? ?
?? ?}
?>