<?php
/**
 * Created by PhpStorm.
 * User: mikung
 * Date: 02/02/2560
 * Time: 21:26
 */
require __DIR__."vendor/autoload.php";
$access_token = 'DqC0E6bwB9GJjUsZdCdyhtC1b6KXlp/DXoBnzPbt1/v+z0p0FCzHk5XAbO9nm2HQL8AoawkXmbJmMabvXfKrdJeueUzpp27IKe8kDox3Y4U2hjOjsM2l32hIc47h7TrPHrhtfeRQyXLwALD3yP1EJAdB04t89/1O/w1cDnyilFU=';
$secret = 'ec68c63b493064bedb0c8eccf7f328d6';
$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient("$access_token");
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => "$secret"]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello');
$response = $bot->pushMessage('<to>', $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();