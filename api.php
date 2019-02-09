<?php
require_once("TwitterAPIExchange.php");
$settings = array(
    'oauth_access_token' => "474943270-LvxODJhmitGdkvrAatBwWeEhHdTNofAwSrthV8L8",
    'oauth_access_token_secret' => "BEn32opH6VE0AWDcdIXSOlMXNwftIwh2VQtito5z7lo46",
    'consumer_key' => "18BVgMwFHxEVVGmLEcLWbzefD",
    'consumer_secret' => "4oZZ3S2I9DyQICSED51sui1YIeeFqtK0S9yW7sjL1FxQMQzzrY"
);
$url = 'https://api.twitter.com/1.1/statuses/user_timeline.json';
$requestMethod = 'GET';
$twitter = new TwitterAPIExchange($settings);


$dir    = 'slides';
$files = scandir($dir);
array_splice($files,0,2);

foreach ($files as $key => $value) 
{
 $files[$key] = "slides/".$value;
}


            $getfield = '?screen_name=elpuenteOk&count=1';        
            $json =  $twitter->setGetfield($getfield)
                        ->buildOauth($url, $requestMethod)
                        ->performRequest();
            $estado = (json_decode($json)[0]->text);



            $getfield = '?screen_name=GrupodeInvesti2&count=1';        
            $json =  $twitter->setGetfield($getfield)
                        ->buildOauth($url, $requestMethod)
                        ->performRequest();
            $liston = (json_decode($json)[0]->text);

$data = [
    'filelist'=>$files,
    'puente'=>$estado,
    'liston'=>$liston
];


header('Content-Type: application/json');
echo json_encode($data,JSON_UNESCAPED_UNICODE);







?>