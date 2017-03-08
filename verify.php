<?php
$access_token = '4uTnn+lvrI9WP5xIsUgMcXogI2A9MN6loYXgVuywDoTmFsXs+HatW1IOkBwix1t+XrWCWFdleTm6RD+K1Mkt+ePtGSf8aDXan9aIP7+mTUpXkRD7Q6e1/Gm6eGJt0qgblJ0IigLiOtl0+j9gVOd9mAdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
?>
