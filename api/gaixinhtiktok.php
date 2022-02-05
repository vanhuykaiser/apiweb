<?php
$url = array(
"https://i.imgur.com/bIE0qpK.mp4",
"https://i.imgur.com/XvoEKCS.mp4",
"https://i.imgur.com/tMC7HQA.mp4",
"https://i.imgur.com/Xl2HpDd.mp4",
"https://i.imgur.com/OkE1FxU.mp4",
"https://i.imgur.com/1f8WTQn.mp4",
"https://i.imgur.com/GnPnQcY.mp4",
"https://i.imgur.com/DU5bMuJ.mp4",
"https://i.imgur.com/pJqo5dF.mp4",
"https://i.imgur.com/aPXMwog.mp4",
"https://i.imgur.com/0GAe6L8.mp4",
"https://i.imgur.com/kTg6HQY.mp4",
"https://i.imgur.com/kTg6HQY.mp4",
"https://i.imgur.com/3o2OW8J.mp4",
"https://i.imgur.com/9fYTwZk.mp4",
"https://i.imgur.com/3DmIJ1A.mp4",
"https://i.imgur.com/MAB9Md5.mp4",
"https://i.imgur.com/hU0GIDa.mp4",
"https://i.imgur.com/K601tWe.mp4",
"https://i.imgur.com/gf4aF0j.mp4",
"https://i.imgur.com/iByriFm.mp4",
"https://i.imgur.com/x2j6CmF.mp4",
"https://i.imgur.com/ghV6WRE.mp4",
"https://i.imgur.com/RJ0MzxB.mp4",
"https://i.imgur.com/CxMmz0u.mp4",
"https://i.imgur.com/0KslBt5.mp4",
"https://i.imgur.com/IJ8Ot9f.mp4",
"https://i.imgur.com/LSGdq0W.mp4",
"https://i.imgur.com/hGO4pbh.mp4",
"https://i.imgur.com/734OzKB.mp4",
"https://i.imgur.com/sXs5tE8.mp4",
"https://i.imgur.com/E2PDV2d.mp4",
"https://i.imgur.com/rieXmsP.mp4",
"https://i.imgur.com/TMccUBw.mp4",
"https://i.imgur.com/H8BnrhM.mp4",
"https://i.imgur.com/hw8oIT9.mp4",
"https://i.imgur.com/VwWGkHW.mp4",
"https://i.imgur.com/zAMfGkL.mp4",
"https://i.imgur.com/WB5VBuE.mp4",
"https://i.imgur.com/dabhhyM.mp4",
"https://i.imgur.com/WrOYXkW.mp4",
"https://i.imgur.com/rocqHUy.mp4",
);
$tuandz = array_rand($url);
$tuandeeptry = $url [$tuandz];
$gaixinhtik = array(
"data" => $tuandeeptry,
"author" => "Tuấn DeepTry",
"success" => "true",
);
$rdimg = json_encode($gaixinhtik , JSON_UNESCAPED_UNICODE);

$i = ['\/v\/','\/','Tuấn DeepTry'];
$t = ['/v/','/','Tuấn DeepTry'];
$j = str_replace($i, $t, $rdimg);
echo $j;
