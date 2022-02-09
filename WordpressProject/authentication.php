<?php
require __DIR__ . '/vendor/autoload.php';

use Automattic\WooCommerce\Client;
use Automattic\WooCommerce\HttpClient\HttpClientException;
$url = 'http://localhost/wordpress'; //$_POST['url'];
$ck = 'ck_e096071cf11d1b138445b563c1181a06ed4c197b'; //$_POST['ck'];
$cs = 'cs_3430d27c73c95fee399f91902e1f11a17cc2594e'; //$_POST['cs'];
$woocommerce = new Client($url,$ck,$cs,
    [
        'wp_api' => true,
        'version' => 'wc/v3',
        'query_string_auth' => true
    ]
);