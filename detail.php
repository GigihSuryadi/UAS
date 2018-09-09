		<?php
		error_reporting(E_ERROR | E_PARSE);
		include "./ringkas.php";
		
		// scan nama file korpus
		$dir_corpus = "./corpus";
		$files 		= scandir($dir_corpus);
		$files		= array_slice($files, 2);
		//print_rfiles);
		
		// hasil
		if(isset($_GET["id"]) && isset($_GET["compression"])) {
			$id	 = $_GET["id"];
			$compression = $_GET["compression"];
			$output 	 = ringkas($id, $compression);
			$title 		 = substr($id, 0, -4);
		}

		?>

<div class="row">
    <div class="col-md-8">
        <?php
            $berita = mysql_query("SELECT * FROM berita WHERE id = '$id' ");
            $hasil = mysql_fetch_object($berita);
        ?>
        <br/>
        <h2><?= $hasil->judul; ?></h2>
        
        <img src="admin/img/<?= $hasil->gambar; ?>" height="200" with="200" align="left" class="thumbnail"  margin= "10px"/>
        <p align="justify"><?php echo !empty($output['original'])? nl2br($output['original']) : "";?></p>
        <hr/>
        <!--
        <button class="ringkas btn btn-primary"><span class="glyphicon glyphicon-flash" aria-hidden="true"></span> Ringkas</button><br/><br/>
        <div class="panel panel-info" id="panelringkas">
          <div class="panel-heading">
            <h3 class="panel-title">Hasil Ringkasan</h3>
          </div>
          <div class="panel-body">
              <p align="justify"><?php // echo !empty($output['summary'])? $output['summary'] : "";?></p>
          </div>
        </div>
        -->
        
        <br/><br/>
        
    </div>
    <div class="col-md-4">
        <br/><br/>
          <div class="sidebar-module sidebar-module-inset">
          </div>
          <hr/>
        <br/>
          <div class="sidebar-module">
          
          </div>
    </div>
</div>

<!DOCTYPE html>
<html>
<head>
<style>
#comment {
margin:20px 0 0 20px;
border: 4px  #848484;
border-radius:0px;
-moz-border-radius:60px;
max-height: 90%;
font-weight: bold;
color: #606060;
padding: 40px;
width: 440px;
background-color: #dcdcdc;
}
#publishcomment {
border: 2px#848484;
box-shadow: 12px 12px 7px #888888;
margin: 30px 0 50px 20px;
padding: 10px;
max-height: 100%;
color: #3d3d3d;
width: 550px;
font-size: 12px;
line-height: 15px;
}
#publishcomment hr {
color: #ccc;
}
#publishcomment a {
color: #da5700;
text-decoration: none;
font-weight:normal;
}
#publishcomment a:link {
font-weight: bold;
}
#publishcomment a:hover {
text-decoration: underline;
}
</style>
<body>
<div id="comment">
<form name="submitcomment" method="post" action="submitcomment.php">Nama:<br>
<input name="nama" type="text"><br>
Email   :<br><input name="email" type="text"><br>
Website :<br><input name="website" type="text"><br>
Komentar:<br><textarea name="komentar" rows="6" cols="50"></textarea><br>
<input name="art_id" value="1" type="hidden">
<input name="art_url" value="contoh.php" type="hidden"><br>
<input name="tombol" value="Kirim" type="submit"></form></div>
<div id="publishcomment">
<?php include("publishcomment.php"); getcomment("1"); ?></div>
</body>
</head>
