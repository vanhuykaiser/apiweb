<?php
$url = array(
"https://i.postimg.cc/yNqdv0Sw/02.gif",
"https://i.postimg.cc/ZR4qhZHH/07.gif",
"https://i.postimg.cc/m2J2g7Vt/659-fucked.gif",
"https://i.postimg.cc/XJLYjhDb/729-toon-porn.gif",
"https://i.postimg.cc/0NpN3rYr/845-tifa.gif",
"https://i.postimg.cc/tJgCY5LV/864-Collection.gif",
"https://i.postimg.cc/rsYyW4kZ/890-how-to.gif",
"https://i.postimg.cc/m2tg4mYv/897-Nice-3-D-ride.gif",
"https://i.postimg.cc/MZspgCQ0/f69b1921db0f9b229ddeb852e50366478d7da1f9.gif",
"https://i.postimg.cc/jSfqwCkv/ksbuxiua5n741.gif",
"https://i.postimg.cc/j2VGDVZ1/lXtSw6u.gif",
"https://i.postimg.cc/zBHH5Qtv/marie-rose-dead-or-alive-001.gif",
"https://i.postimg.cc/BQvXZHpy/A5zBMnS.gif",
);
$tuandz = array_rand($url);
$tuandeeptry = $url [$tuandz];
$ditnhau = array(
"url" => $tuandeeptry,
"author" => "TuanDeepTry",
"success" => "true",
);
$rdimg = json_encode($ditnhau);

$i = ['\/v\/','\/','TuanDeepTry'];
$t = ['/v/','/','TuanDeepTry'];
$j = str_replace($i, $t, $rdimg);
echo $j;
