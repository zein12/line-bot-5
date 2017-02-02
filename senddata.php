<?php
/**
 * Created by PhpStorm.
 * User: mikung
 * Date: 02/02/2560
 * Time: 21:26
 */
require "vendor/autoload.php";

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient('DqC0E6bwB9GJjUsZdCdyhtC1b6KXlp/DXoBnzPbt1/v+z0p0FCzHk5XAbO9nm2HQL8AoawkXmbJmMabvXfKrdJeueUzpp27IKe8kDox3Y4U2hjOjsM2l32hIc47h7TrPHrhtfeRQyXLwALD3yP1EJAdB04t89/1O/w1cDnyilFU=');
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => 'ec68c63b493064bedb0c8eccf7f328d6']);

//$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('นายมิคุง');

$template = '{
    "type": "template",
  "altText": "this is a confirm template",
  "template": {
        "type": "confirm",
      "text": "Are you sure?",
      "actions": [
          {
              "type": "message",
            "label": "Yes",
            "text": "yes"
          },
          {
              "type": "message",
            "label": "No",
            "text": "no"
          }
      ]
  }
}';
$text = 'จะมาประชุมมัย';
$action[] = [{
              "type": "message",
            "label": "Yes",
            "text": "yes"
          },
          {
              "type": "message",
            "label": "No",
            "text": "no"
          }];
//$templatebuilder =  new \LINE\LINEBot\MessageBuilder\TemplateMessageBuilder(new ConfirmTemplateBuilder('Do it?', [
    new MessageTemplateActionBuilder('Yes', 'Yes!'),
    new MessageTemplateActionBuilder('No', 'No!'));
//$response = $bot->pushMessage('U90d4da92752f6e692797e75d993d0d6e', $textMessageBuilder);
$response = $bot->pushMessage('U90d4da92752f6e692797e75d993d0d6e', new TemplateMessageBuilder(
    'Confirm alt text',
    new ConfirmTemplateBuilder('Do it?', [
        new MessageTemplateActionBuilder('Yes', 'Yes!'),
        new MessageTemplateActionBuilder('No', 'No!'),
    ])
));
echo $response->getHTTPStatus() . ' ' . $response->getRawBody();