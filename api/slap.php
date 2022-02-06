<?php
$url = array(
"https://i.postimg.cc/Mc7rWvFv/12334wrwd534wrdf-1.gif",
"https://i.postimg.cc/R3LGk2Wt/12334wrwd534wrdf-2.gif",
"https://i.postimg.cc/CRj489H2/12334wrwd534wrdf-3.gif",
"https://i.postimg.cc/MMr0xwqn/12334wrwd534wrdf-4.gif",
"https://i.postimg.cc/KK2Jsm8F/12334wrwd534wrdf-5.gif",
"https://i.postimg.cc/dZLBT14R/12334wrwd534wrdf-6.gif",
"https://i.postimg.cc/Fd1cT63N/12334wrwd534wrdf-7.gif",
"https://i.postimg.cc/rKRjVDdM/12334wrwd534wrdf-8.gif",
"https://i.postimg.cc/G2fsCYtS/anime-slap.gif",
"https://i.postimg.cc/C5fnL1fM/slap-anime.gif",
"https://i.postimg.cc/ydxStn1Z/VW0cOyL.gif",
"https://i.postimg.cc/MK3r9SzH/3Ii6.gif",
"https://i.postimg.cc/cJyhz12x/6a60d1eaf8c7317f7dfb0a892789c490.gif",
"https://i.postimg.cc/kgtwwRjY/akari-slap.gif",
"https://i.postimg.cc/PJxQDCp4/anime-slap.gif",
"https://i.postimg.cc/LstDFKFz/anime-slap-1.gif",
"https://i.postimg.cc/W4Trrdxk/anime-slap-2.gif",
"https://i.postimg.cc/rwWC5Xmv/anime-slapping.gif",
"https://i.postimg.cc/m21QGfQt/d6wv007-5fbf8755-5fca-4e12-b04a-ab43156ac7d4.gif",
"https://i.postimg.cc/L4NyspYD/giphy.gif",
"https://i.postimg.cc/sXznMf46/giphy-1.gif",
"https://i.postimg.cc/59RwGNQh/slap-anime.gif",
"https://i.postimg.cc/VL2WSLYq/tumblr-dfb46fdafbc9622e2de3d57fdac1770d-5b4ecb8c-500.gif",
"https://i.postimg.cc/636rs80X/VF8X.gif",
"https://i.postimg.cc/MKnYKj8Z/VW0cOyL.gif",
);
$tuandz = array_rand($url);
$tuandeeptry = $url [$tuandz];
$slap = array(
"url" => $tuandeeptry,
"author" => "TuanDeepTry",
"success" => "true",
);
$rdimg = json_encode($slap);

$i = ['\/v\/','\/','TuanDeepTry'];
$t = ['/v/','/','TuanDeepTry'];
$j = str_replace($i, $t, $rdimg);
echo $j;
