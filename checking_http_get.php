<?php
// This is a script example for NFC Tools conditional block : HTTP GET
// Add your conditional block like this : 
// Your request : http//mydomain.tld/checking_http_get.php?id=5
// Return value : ok

if (isset($_GET["id"]) && $_GET["id"] == 5){
  exit("ok");
}else{
  exit("nok");
}

?>
