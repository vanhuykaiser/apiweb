<?php
$url = array(
"https://i.postimg.cc/Y9fTSwZt/056c584d9335fcabf080ca43e583e3c4.gif",
"https://i.postimg.cc/sD2b3qcR/vlmHtVU.gif",
"https://i.postimg.cc/7hHdGWr0/Yui-Yuigahama-Wave-Teen-Romantic-SNAFU.gif",
"https://i.postimg.cc/Yq1nmyKh/184046559000202.gif",
"https://i.postimg.cc/ZnNfHwWs/1d2773f404529b2e038b168d6b157e0a.gif",
"https://i.postimg.cc/RZdgg60m/203730462001202.gif",
"https://i.postimg.cc/xjNF916G/8loS.gif",
"https://i.postimg.cc/q7ZjdPnZ/k-on-hi.gif",
"https://i.postimg.cc/QCcb1VzR/t-i-xu-ng.gif",
"https://i.postimg.cc/fLGCVY8c/tumblr-pql7h11dm-I1th206io1-1280.gif",
"https://i.postimg.cc/FHNPbgNG/waving-pikachu.gif",
"https://i.postimg.cc/YSSbZr4W/Yui-Hirasawa-k-on-hi-wave1.gif",
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
