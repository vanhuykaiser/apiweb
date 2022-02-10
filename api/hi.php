<?php
$url = array(
"https://i.postimg.cc/Y9fTSwZt/056c584d9335fcabf080ca43e583e3c4.gif",
"https://i.postimg.cc/Y0dV1ztV/anime-hi.gif",
"https://i.postimg.cc/sD2b3qcR/vlmHtVU.gif",
"https://i.postimg.cc/7hHdGWr0/Yui-Yuigahama-Wave-Teen-Romantic-SNAFU.gif",
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
