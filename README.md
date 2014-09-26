Apidhr
======

**Registering for an API Key**

As before, an API key is required for requests to be processed by the system. 
Once a user registers, an API key is automatically generated for this user. The API key must attached to request via the api parameter. Register for free on [DHR URL SHORTENER](http://dhr.me)


**Using the API in PHP**

To use the API in your PHP application, you have to send a GET request through **file_get_contents** or cURL: Both are reliable methods. 

See the this example using **file_get_contents**.

```php
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
```

