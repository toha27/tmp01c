<?php
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://www.google.com");
curl_setopt($ch, CURLOPT_HEADER, false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); // store output in $result
$result = curl_exec($ch);

if ($result === false) {
    echo "cURL Error: " . curl_error($ch);
} else {
    echo $result;
}

curl_close($ch);
?>
