<?php
// Create a curl handle
$ch = curl_init('https://contactlab.herokuapp.com/ajax.php/');

// Send HTTP request and follow redirections
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$siu = curl_exec($ch);

// Get the last effective URL
$effective_url = curl_getinfo($ch, CURLINFO_EFFECTIVE_URL);

// Decode the URL
$effective_url_decoded = curl_unescape($ch, $effective_url);

// Close the handle
curl_close($ch);

echo $siu
?>

https://ecommelabs.000webhostapp.com/quiz_6/view/form.php