<?php

  // Define callback URL
  $callback = "https://www.wakdev.com/contents/apps/nfctools/api/";

  // Adding callback tag infos.
  $callback .= "?tagid={TAG-ID}";
  $callback .= "&tagsize={TAG-SIZE}";
  $callback .= "&tagmaxsize={TAG-MAXSIZE}";
  $callback .= "&tagtype={TAG-TYPE}";
  $callback .= "&tagiswritable={TAG-ISWRITABLE}";
  $callback .= "&tagcanmakereadonly={TAG-CANMAKEREADONLY}";

  // Adding callback tag records.
  $callback .= "&ndef-text={NDEF-TEXT}";
  $callback .= "&ndef-uri={NDEF-URI}";

  // Just an anchor
  $callback .= "#result";

  // Encode callback URL
  $callback_url = "nfc://scan/?callback=".urlencode($callback);

  // Get results (if exists)
  $tagid = !empty($_GET["tagid"]) ? htmlspecialchars($_GET["tagid"]):null;
  $tagsize = !empty($_GET["tagsize"]) ? htmlspecialchars($_GET["tagsize"]):null;
  $tagmaxsize = !empty($_GET["tagmaxsize"]) ? htmlspecialchars($_GET["tagmaxsize"]):null;
  $tagtype = !empty($_GET["tagtype"]) ? htmlspecialchars($_GET["tagtype"]):null;
  $tagiswritable = !empty($_GET["tagiswritable"]) ? htmlspecialchars($_GET["tagiswritable"]):null;
  $tagcanmakereadonly = !empty($_GET["tagcanmakereadonly"]) ? htmlspecialchars($_GET["tagcanmakereadonly"]):null;
  $ndeftext = !empty($_GET["ndef-text"]) ? htmlspecialchars($_GET["ndef-text"]):null;
  $ndefuri = !empty($_GET["ndef-uri"]) ? htmlspecialchars($_GET["ndef-uri"]):null;

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>NFC Tools API: Test page</title>
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">
  </head>
  <body>
    <div class="container">
      <br/>
      <div class="jumbotron">
      	<h1>Welcome on NFC Tools API: Test page</h1>
      	<p><span class="glyphicon glyphicon-chevron-right"></span> First, you need <a href="https://www.wakdev.com/en/apps/nfc-tools-android.html" target="_blank" title="nfc tools">NFC Tools</a> installed on your Android device</p>
      	<p><span class="glyphicon glyphicon-chevron-right"></span> 2nd, you just need touch this following button on your favorite Android web browser</p>
      	<p><a class="btn btn-primary btn-lg" role="button" href="<?php echo $callback_url; ?>"><span class="glyphicon glyphicon-hand-up"></span> Touch for scan a NFC Tag</a></p>
      </div>

    	<?php if ($tagid != null){ ?>
        <!-- Recover Results -->

      	<br/>
      	<a name="result"></a>

      	<div class="jumbotron">
          <h1>Results</h1>

          <!-- Recover TAG ID -->
          <p><span class="glyphicon glyphicon-tag"></span> TAG ID</p>
          <div class="panel panel-default">
            <div class="panel-body"><?php echo $tagid; ?></div>
          </div>

          <!-- Recover TAG SIZE -->
          <?php if ($tagsize != null){ ?>
          <p><span class="glyphicon glyphicon-tag"></span> TAG SIZE</p>
          <div class="panel panel-default">
            <div class="panel-body"><?php echo $tagsize; ?></div>
          </div>
          <?php } ?>

          <!-- Recover TAG MAX SIZE -->
          <?php if ($tagmaxsize != null){ ?>
          <p><span class="glyphicon glyphicon-tag"></span> TAG MAX SIZE</p>
          <div class="panel panel-default">
            <div class="panel-body"><?php echo $tagmaxsize; ?></div>
          </div>
          <?php } ?>

          <!-- Recover TAG TYPE -->
          <?php if ($tagtype != null){ ?>
          <p><span class="glyphicon glyphicon-tag"></span> TAG TYPE</p>
          <div class="panel panel-default">
            <div class="panel-body"><?php echo $tagtype; ?></div>
          </div>
          <?php } ?>

          <!-- Recover TAG IS WRITABLE -->
          <?php if ($tagiswritable != null){ ?>
          <p><span class="glyphicon glyphicon-tag"></span> TAG IS WRITABLE ?</p>
          <div class="panel panel-default">
            <div class="panel-body"><?php echo $tagiswritable; ?></div>
          </div>
          <?php } ?>

          <!-- Recover TAG CAN MAKE READ ONLY -->
          <?php if ($tagcanmakereadonly != null){ ?>
          <p><span class="glyphicon glyphicon-tag"></span> TAG CAN MAKE READ ONLY ?</p>
          <div class="panel panel-default">
            <div class="panel-body"><?php echo $tagcanmakereadonly; ?></div>
          </div>
          <?php } ?>

          <!-- Recover NDEF TEXT -->
          <?php if ($ndeftext != null){ ?>
          <p><span class="glyphicon glyphicon-tag"></span> NDEF-TEXT</p>
          <div class="panel panel-default">
            <div class="panel-body"><?php echo $ndeftext; ?></div>
          </div>
          <?php } ?>

          <!-- Recover NDEF URL -->
          <?php if ($ndefuri != null){ ?>
          <p><span class="glyphicon glyphicon-tag"></span> NDEF-URI</p>
          <div class="panel panel-default">
            <div class="panel-body"><?php echo $ndefuri; ?></div>
          </div>
          <?php } ?>

      	</div>
    	<?php } ?>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="https://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
  </body>
</html>
