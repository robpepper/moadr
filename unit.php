<?php
   if(isset($_GET["campaignId"]) || isset($_GET["campaignid"]) ) {
      //echo "Welcome ". $_GET['weight']. "<br />";
      //echo "You are ". $_GET['weight']. " kgs in weight.";     
   //header('Access-Control-Allow-Origin: *');
   //header('Access-Control-Allow-Credentials: false');
   //header('Access-Control-Allow-Methods: GET,HEAD,OPTIONS,POST,PUT');
   //header('Access-Control-Allow-Headers: Access-Control-Allow-Origin, Accept, X-Request-With, Content-Type, Access-Control-Allow-Headers,Access-Control-Request-Method, Access-Control-Request-Headers');
   //undefined what if not passing in?
   $jsonp_callback = isset($_GET['callback'])?$_GET['callback']:(isset($_GET['jsoncallback'])?$_GET['jsoncallback']:null);
   //echo $jsonp_callback;
   $data = '{"response": {"SubMethod": {"Method":"DirectResponse", "URL": "http://moadr.com"}}}';
   //$json = json_encode($data);
   header('Content-Type: application/json');

   print $jsonp_callback? "$jsonp_callback($data)":$data;
   } else
	echo '{"error":"incorrect request"}';

?>
