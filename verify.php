<?php
$access_token = 'YkU7+AIDSCI7CBeSVoq2BCNpcGBDvcGwZvcxiTy9eo0y2TZc2sY/Fdw8DDujhJ5u1wCgAojU7UQ03kvqtzpHMLHgTFL36OB4iqkD5buGyoH17aK5ioSmIFozmv51tDZpT23xNGFAUHbUKVriey8YWAdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
