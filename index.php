<?php
    error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-type" content="text/html; charset=UTF-8" />
        <meta http-equiv="Content-Language" content="pl" />
        <meta name="Author" content="Sebastian Pająk" />
        <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
    <body>
		<?php
			include('cfg.php');
			include('showpage.php')
		?>
        <div id="navbar">
            <a href="index.php?idp=">Strona Główna</a>
            <a href="index.php?idp=history">Historia serii</a>
            <a href="">Jednostki</a>
            <a href="">Bohaterowie</a>
            <a href="">Zamki</a>
        </div>
        <?php 
		if($_GET['idp']=='')
		{PokazPodstrone(1);}
		
       // $strona = '';
        //if($_GET['idp']=='')
       // {$strona = './html/glowna.html';}
       // if($_GET['idp']=='history')
       // {$strona = './html/history.html';}
//
      //  if(file_exists($strona))
      //  {
      //      include($strona);
      //  }
        ?>
    </body>
</html>