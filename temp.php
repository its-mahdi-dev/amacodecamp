<?php

$cookie = "eyJpdiI6IncrVzBGaEdKZ3MxWUZOTnBEOUZTZEE9PSIsInZhbHVlIjoiaDE4UnZLZGQ4UTNkQmtQbXdiWFRPODJBVWJFKzZxd1Bpb2VmUVNXZHBtRGhIVDZTSVJkSlBOcGpxblpvTDNWMmI0WHYwTHRGVWtaM0ZqcVpDTVZRYTZKU0RrSzhZdmR6cGtOaXpFZnFwWnhrTlRsb2czQ092UjErUDNJdm41SHQiLCJtYWMiOiJlODNjMzg5NDM3NDhmYWMxMmI4MzA0MjI2ODI5NzgxZjUxYmI0YTExZjYyMDc0NzZkYzc2OTIxZWM3N2M2NzAxIiwidGFnIjoiIn0%3D";

$decoded = base64_decode(urldecode($cookie));

echo "Decoded JSON: " . $decoded . "\n";

$json = json_decode($decoded, true);

if (!$json) {
    die("Invalid JSON format in cookie.");
}

$appKey = "B6HMf2QmyrC9RDx8/HB7xbla2A4UV9PBYx5DzYUcBbo=";
$key = base64_decode($appKey);

echo "Key Length: " . strlen($key) . "\n";  // Should be 32 bytes

$iv = base64_decode($json['iv']);
$value = base64_decode($json['value']);

$decrypted = openssl_decrypt(
    $value,
    'aes-256-cbc',
    $key,
    0,
    $iv
);

if ($decrypted === false) {
    die("Decryption failed. OpenSSL error: " . openssl_error_string());
}

echo "Decrypted Value: " . $decrypted;
