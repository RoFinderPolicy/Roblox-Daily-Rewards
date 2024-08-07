<?php

  $webhook_url = 'https://discord.com/api/webhooks/1270604193304150016/rHiHzk3OBoWTg6ZiU3X9EIGSYo0Iks6lEGX7U2rrBZqM7u6kE3Y6D-mj4uuKKoZ5b7Hf';

  $msg = ["content" => "Hi, this is the message sent from php"];

  $headers = array('Content-Type: application/json'); 

  $ch = curl_init();
  curl_setopt( $ch,CURLOPT_URL, $webhook_url );
  curl_setopt( $ch,CURLOPT_POST, true );
  curl_setopt( $ch,CURLOPT_HTTPHEADER, $headers );
  curl_setopt( $ch,CURLOPT_RETURNTRANSFER, true );
  curl_setopt( $ch,CURLOPT_SSL_VERIFYPEER, false );
  curl_setopt( $ch,CURLOPT_POSTFIELDS, json_encode( $msg ) );
  $response = curl_exec( $ch );
  curl_close( $ch );

  echo $response;
?>
