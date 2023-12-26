<?php

try {
    $url = 'https://jsonplaceholder.typicode.com/posts/1';
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_HTTPGET, true);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $response_json = curl_exec($ch);
curl_close($ch);
} catch (\Throwable $th) {
    echo $e->getMessage();
}


header('Content-Type: application/json; charset=utf-8');
print_r($response_json);