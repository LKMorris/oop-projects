<?php

$input = 'lee-morris@mail.com';
$pattern = "/^[_a-z0-9-.]*@[a-z0-9-]*(\.[a-z]{2,})$/i";

echo preg_match($pattern, $input) ? "MATCH" : "NO MATCH";

//$email = filter_var($input, FILTER_VALIDATE_EMAIL);
//echo $email;
