<?php
if (function_exists('curl_version')) {
    echo "✅ cURL is enabled\n";
} else {
    echo "❌ cURL is NOT enabled\n";
}

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://example.com");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$output = curl_exec($ch);

if ($output === false) {
    echo "❌ curl_exec() failed: " . curl_error($ch);
} else {
    echo "✅ curl_exec() succeeded";
}
curl_close($ch);
