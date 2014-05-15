<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>api.nfc.systems</title>
	<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">
  </head>
<body>
  <div class="container">
  	<br/>
  	<div class="jumbotron">
  		<h1>Welcome on<br/>NFC Tools API<br/>Test page</h1>
  		<p><span class="glyphicon glyphicon-chevron-right"></span> First, you need <a href="http://getapp.nfctools.wakdev.com/" target="_blank" title="nfc tools">NFC Tools</a> installed on your Android device</p>
  		<p><span class="glyphicon glyphicon-chevron-right"></span> 2nd, you just need touch this following button on your favorite Android web browser</p>
  	<?php 
		
	//initial call back domain
	$callback = "http://try.api.nfc.systems/";
		
	//Adding callback tag infos.
	$callback .= "?tagid={TAG-ID}";
	$callback .= "&tagsize={TAG-SIZE}";
	$callback .= "&tagmaxsize={TAG-MAXSIZE}";
	$callback .= "&tagtype={TAG-TYPE}";
	$callback .= "&tagiswritable={TAG-ISWRITABLE}";
	$callback .= "&tagcanmakereadonly={TAG-CANMAKEREADONLY}";
		
	//Adding callback tag records.
	$callback .= "&ndef-text={NDEF-TEXT}";
	$callback .= "&ndef-uri={NDEF-URI}"; 
		
    	//Just an anchor
	$callback .= "#result";
	?>
  		<p><a class="btn btn-primary btn-lg" role="button" href="nfc://scan/?callback=<?php echo urlencode($callback); ?>"><span class="glyphicon glyphicon-hand-up"></span> Touch for scan a NFC Tag</a></p>
	</div>
	
	<?php 
	if (isset($_GET["tagid"])){
	?>
	
	<br/><br/>
	<a name="result"></a>
	<div class="jumbotron">
	
  		<h1>Results</h1>
  		
  		<?php
  		//Recover TAG ID
  		if (isset($_GET["tagid"]) && !empty($_GET["tagid"])){
  		?>
  			<p><span class="glyphicon glyphicon-tag"></span> TAG ID</p>
  			<div class="panel panel-default">
			  <div class="panel-body">
			    <?php echo $_GET["tagid"]; ?>
			  </div>
			</div>
  			<?php	
  		}
  		?>
		
		<?php
		//Recover TAG SIZE
  		if (isset($_GET["tagsize"]) && !empty($_GET["tagsize"])){
  		?>
  			<p><span class="glyphicon glyphicon-tag"></span> TAG SIZE</p>
  			<div class="panel panel-default">
			  <div class="panel-body">
			    <?php echo $_GET["tagsize"]; ?>
			  </div>
			</div>
  			<?php	
  		}
  		?>
		
		<?php
		//Recover TAG MAX SIZE
  		if (isset($_GET["tagmaxsize"]) && !empty($_GET["tagmaxsize"])){
  		?>
  			<p><span class="glyphicon glyphicon-tag"></span> TAG MAX SIZE</p>
  			<div class="panel panel-default">
			  <div class="panel-body">
			    <?php echo $_GET["tagmaxsize"]; ?>
			  </div>
			</div>
  			<?php	
  		}
  		?>
		
		<?php
		//Recover TAG TYPE
  		if (isset($_GET["tagtype"]) && !empty($_GET["tagtype"])){
  		?>
  			<p><span class="glyphicon glyphicon-tag"></span> TAG TYPE</p>
  			<div class="panel panel-default">
			  <div class="panel-body">
			    <?php echo $_GET["tagtype"]; ?>
			  </div>
			</div>
  			<?php	
  		}
  		?>
		
		<?php
		//Recover TAG IS WRITABLE
  		if (isset($_GET["tagiswritable"]) && !empty($_GET["tagiswritable"])){
  		?>
  			<p><span class="glyphicon glyphicon-tag"></span> TAG IS WRITABLE ?</p>
  			<div class="panel panel-default">
			  <div class="panel-body">
			    <?php echo $_GET["tagiswritable"]; ?>
			  </div>
			</div>
  			<?php	
  		}
  		?>
  		
		<?php
		//Recover TAG CAN MAKE READ ONLY
  		if (isset($_GET["tagcanmakereadonly"]) && !empty($_GET["tagcanmakereadonly"])){
  		?>
  			<p><span class="glyphicon glyphicon-tag"></span> TAG CAN MAKE READ ONLY ?</p>
  			<div class="panel panel-default">
			  <div class="panel-body">
			    <?php echo $_GET["tagcanmakereadonly"]; ?>
			  </div>
			</div>
  			<?php	
  		}
  		?>
		
  		<?php
  		//Recover NDEF TEXT
  		if (isset($_GET["ndef-text"]) && !empty($_GET["ndef-text"])){
  		?>
  			<p><span class="glyphicon glyphicon-tag"></span> NDEF-TEXT</p>
  			<div class="panel panel-default">
			  <div class="panel-body">
			    <?php echo $_GET["ndef-text"]; ?>
			  </div>
			</div>
  			<?php	
  		}
  		?>
		
		<?php
		//Recover NDEF URL
  		if (isset($_GET["ndef-uri"]) && !empty($_GET["ndef-uri"])){
  		?>
  			<p><span class="glyphicon glyphicon-tag"></span> NDEF-URI</p>
  			<div class="panel panel-default">
			  <div class="panel-body">
			    <?php echo $_GET["ndef-uri"]; ?>
			  </div>
			</div>
  			<?php	
  		}
  		?>
  		
	</div>
	<?php 
	}
	?>	
</div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
  </body>
</html>
</body>
</html>
