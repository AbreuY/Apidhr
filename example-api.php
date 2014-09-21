<?php
  // Using JSON Response
  $api_url="http://dhr.me/short/api?api=APIKEY&url=THELONGURLTOBESHORTENED&custom=CUSTOMALIAS";
  $res= @json_decode(file_get_contents($api_url),TRUE);
  if($res["error"]){
    echo $res["msg"];
  }else{
    echo $res["short"];
  }

  // Using Plain Text Response
  $api_url="http://dhr.me/short/api?api=APIKEY&url=THELONGURLTOBESHORTENED&custom=CUSTOMALIAS&format=text";
  $res= @file_get_contents($api_url);
  if($res){
    echo $res;
  }
?>
