<?php
$url = array(
"https://i.postimg.cc/QtnqrGbm/vlmHtVU.gif",
);
$tuandz = array_rand($url);
$tuandeeptry = $url [$tuandz];
$hi = array(
"data" => $tuandeeptry,
"author" => "TuanDeepTry",
"success" => "true",
);
$rdimg = json_encode($hi);

$i = ['\/v\/','\/','TuanDeepTry'];
$t = ['/v/','/','TuanDeepTry'];
$j = str_replace($i, $t, $rdimg);
echo $j;
