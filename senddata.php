<?php
/**
 * Created by PhpStorm.
 * User: mikung
 * Date: 02/02/2560
 * Time: 21:26
 */
require "vendor/autoload.php";

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient('3/cEBpOR0mjAMUtnHKrSrx3N6FnMVNPYfXBIwMO6HNGaljxuxTxZz2fGrmZYFwqfV3dvAWMa7FEGrmOONfbZ7or1wxYgpjbtFMS0Mkk+RftjvYSrUpThxAHGiivf2M662z2zM5P8BSKby0dJiBG3GQdB04t89/1O/w1cDnyilFU=');
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => 'a6b4b1a80d9f25eb0a719fc92cef7d86']);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('Pak Min-kun');
$response = $bot->pushMessage('U90d4da92752f6e692797e75d993d0d6e', $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();
