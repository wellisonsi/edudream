<?php
require_once(dirname(__FILE__) . '/../lib/Coinbase.php');

// Create an application at https://coinbase.com/oauth/applications and set these values accordingly
$_CLIENT_ID = "c9977c25bf0903e0943bff25f52c653a5570203cf9309164cd6d1ada96a074ee";
$_CLIENT_SECRET = "3efb9f5f481d5f94622b28135bd41a4d01f6683d20c1bd24633e9c682f425c48";

// Note: your redirect URL should use HTTPS.
$_REDIRECT_URL = "http://" . $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF'];

$coinbaseOauth = new Coinbase_OAuth($_CLIENT_ID, $_CLIENT_SECRET, $_REDIRECT_URL);

if(isset($_GET['code'])) {

    // Request tokens
    $tokens = $coinbaseOauth->getTokens($_GET['code']);

    // The user is now authenticated! Access and refresh tokens are in $tokens
    // Store these tokens safely, and use them to make Coinbase API requests in the future.
    // For example:
    $coinbase = Coinbase::withOauth($coinbaseOauth, $tokens);

    try {
        echo 'Your email: ' . $coinbase->getUser()->email . '<br>';
        echo 'Your balance: ' . $coinbase->getBalance() . '<br>';
        echo $coinbase->createButton("Alpaca socks", "10.00", "CAD")->embedHtml;
    } catch (Coinbase_TokensExpiredException $e) {
        $newTokens = $coinbaseOauth->refreshTokens($tokens);
        // Store $newTokens and retry request
    }

    echo $coinbase->requestMoney('wellison.maceio@gmail.com', 50, "contractor hours in January (website redesign for 50 BTC)");
} else {

    // Redirect to Coinbase authorization page
    // The provided parameters specify the access your application will have to the
    // user's account; for a full list, see https://coinbase.com/docs/api/overview
    // You can pass as many scopes as you would like
    echo "<a href=\"" . $coinbaseOauth->createAuthorizeUrl("user", "balance", "buttons") . "\">Connect with Coinbase</a>";
}
