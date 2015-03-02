<?php
require_once(dirname(__FILE__) . '/../lib/Coinbase.php');

// Create an API key at https://coinbase.com/account/api and set these values accordingly
$_API_KEY = "BzWuRTLQc0MDzQe1";
$_API_SECRET = "r8huPrKQNsPbTBT4sUEtvMlAMj6jPYqP";

$coinbase = Coinbase::withApiKey($_API_KEY, $_API_SECRET);
$response = $coinbase->createButton("Ordem de serviço #1234", "42.95", "BTC", "donation", array(
            "description" => "1 conquista no valor de 42.95",
            "type" => "buy_now",
        ));
echo $response->embedHtml;

