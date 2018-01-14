<?php
$access_token = 'QvIdYbPdxGT9/8MI+SPeeVco9XY7R/WphGvVsRw66GXNZRsc/tjEG9/pixw2hgMv0slKja4weJOOJRnMTEwCGpVPA6Rz3UNk0Q92Hzw7bdEWWdDm11jlW/2oy5bgWykl2xReH1urBMaQF8eUyhggmAdB04t89/1O/w1cDnyilFU=
';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
