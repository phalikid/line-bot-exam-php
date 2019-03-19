<?php



require "vendor/autoload.php";

$access_token = 'B0jXLqAEYJq3LcL1zrxkIliR+YLBFUDfR2HL3PqBT9YOuTwKe6BWReXqbxVx9FXf8tHZpuuPkUMC+lLngSD3hcL/IOuVsVqbBCoPXT5STr5q5IWOb2Xcbo2aOpiRKpQ2DUC+BPWVK2ev0RZT+KO7agdB04t89/1O/w1cDnyilFU=';

$channelSecret = '9d9834f3f7dfa93a603e134254fc720a';

$pushID = 'U52ccf19c7d5b4ec8ba9def756ebce01c';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('สวัสดีครับ Hi Hello');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







