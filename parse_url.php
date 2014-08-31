<?php
$url="http://www.google.com.br:8080/email";
$resultado=parse_url($url);

echo "<pre>",print_r($resultado,true),"</pre>";