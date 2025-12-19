<?php
$coins = array(
    'bitcoin' => 'https://www.coingecko.com/fr/pi%C3%A8ces/bitcoin',
    'ethereum' => 'https://www.coingecko.com/fr/pi%C3%A8ces/ethereum',
    'binancecoin' => 'https://www.coingecko.com/fr/pi%C3%A8ces/binance-coin'
);

function getCoinPrice($url) {
    // Crée un contexte avec User-Agent
    $opts = array(
        'http' => array(
            'method' => "GET",
            'header' => "User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64)\r\n"
        )
    );
    $context = stream_context_create($opts);
    $html = @file_get_contents($url, false, $context);
    if (!$html) {
        return null;
    }

    // Recherche du prix dans le HTML
    $pattern = '/<span data-target="price.price"[^>]*>([^<]+)<\/span>/';
    if (preg_match($pattern, $html, $matches)) {
        return trim($matches[1]);
    }
    return null;
}

foreach ($coins as $name => $url) {
    $price = getCoinPrice($url);
    if ($price) {
        echo strtoupper($name) . " : " . $price . "\n";
    } else {
        echo strtoupper($name) . " : prix introuvable\n";
    }
}
?>
