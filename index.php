<html> 
<head>
    <title>Betita Terkini.com</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- The above 2 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Note there is no responsive meta tag here -->

    <link rel="icon" href="../../favicon.ico">

    <script src="assets/js/jquery-1.11.2.min.js"></script>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/non-responsive.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    <!-- UNTUK HIDDEN FORM -->
		<script type="text/javascript">
		$(document).ready(function() {
			$('#panelringkas').hide();
		} );
		
			$(function() {
				$('.ringkas').click(function() {
					$('#panelringkas').slideDown();
                    $('.ringkas').hide();
					return false;
				});
			});
		</script>
    
</head>
    <div class="jumbotron text-center">
     <?php
            include "config/koneksi.php";
        ?>
    <!-- Fixed navbar -->
    
      <div class="container">
        <div class="navbar-header">
          <!-- The mobile navbar-toggle button can be safely removed since you do not need it in a non-responsive implementation -->
         
          <img src="img/pialadunia.jpg">
          <link rel="stylesheet" href="assets/css/style.css">
          <h1>Berita Terkini.com</h1>
          <div>
           <a> Gigih Suryadi | Mahasiswa Pelita Bangsa </a>
          </div>
        </div>
        <!-- Note that the .navbar-collapse and .collapse classes have been removed from the #navbar -->
        </div>
</head>
<body>
 
        <div id="">

          <nav class="navbar navbar-light" style="background-color:#aaa;"> 
          <ul class="nav navbar-nav">
            <li class="active"><a href="index.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Home</a></li>
            <li class="active"><a href="Profil.html"><span class="glyphicon glyphicon" aria-hidden="true"></span>Profil</a></li>
            <li class="active"><a href="kontak.html"><span class="glyphicon glyphicon-call" aria-hidden="true"></span>Contact</a></li>
            <!--<li><a href="#about"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> About</a></li>-->
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><span class="glyphicon glyphicon-list" aria-hidden="true"></span> Kategori <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                  
                <?php
                $kat = mysql_query("SELECT * FROM kategori");
                while($row_kat = mysql_fetch_object($kat)) {
                ?>

                    <li><a href="index.php?k=<?=$row_kat->id_kategori?>"><?= $row_kat->nm_kategori; ?></a></li>
                <?php
                }
                ?>
                
                  <!--
                <li class="divider"></li>
                <li class="dropdown-header">Nav header</li>
                <li><a href="#">Separated link</a></li>
                <li><a href="#">One more separated link</a></li>
                  -->
              </ul>
            </li>
            
            <li><a href="admin/login.php?page=login"><span class="glyphicon glyphicon-" aria-hidden="true"></span> Login Admin</a></li>
          
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
    <br/><br/>
    </nav>
    <div class="container">
              <ul class="nav navbar-nav navbar-right">
              <form class="navbar-form navbar-left" role="search" method="POST" action="index.php?page=search">
                <div class="form-group">
                  <input type="text" name="s" class="form-control" placeholder="Search">
                </div>
                <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search" aria-hidden="true"></span> Cari</button>
              </form>
    
              <!--
            <li><a href="#">Link</a></li>
            <li><a href="#">Link</a></li>
            <li><a href="#">Link</a></li>
-->
          </ul>
    <div>
      <?php
            include "config/router.php";
        ?>

    </div>  
        <!-- Site footer -->
      <footer class="footer" style="background-color:black;color:white;font-size:12px;" >
    <marquee align="center"direction="right"height"60"scrollamount="5"width="100%">Terimakasih Telah Berkunjung</marquee></div>
     
    <div id="footer"style="width:100%;height:50px;background-color:#49494e;color:white;line-height:50px;text-align:center;">Home &copy 2018, by Gigih Suryadi</div>
 
    </div>
  </div>
      </footer>

    </div> <!-- /container -->
        
        
        
    
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="assets/js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>