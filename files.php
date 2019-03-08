<?php
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
    'filelist'=>$files
];


header('Content-Type: application/json');
echo json_encode($data,JSON_UNESCAPED_UNICODE);







?>