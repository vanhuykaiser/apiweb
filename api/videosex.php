<?php
$url = array(
"https://i.imgur.com/WHuWqkn.mp4",
"https://i.imgur.com/xSm0Zd4.mp4",
"https://i.imgur.com/sb7jUeA.mp4",
"https://i.imgur.com/fYa6ObQ.mp4",
"https://i.imgur.com/ME6kPAR.mp4",
"https://i.imgur.com/FbPTvNO.mp4",
"https://i.imgur.com/dUQP0jS.mp4",
"https://i.imgur.com/cxPMJ0s.mp4",
"https://i.imgur.com/hB7EUWd.mp4",
"https://i.imgur.com/fTrxYYu.mp4",
"https://i.imgur.com/yU7srOD.mp4",
"https://i.imgur.com/HtA95oO.mp4",
"https://i.imgur.com/RDY7yQC.mp4",
"https://i.imgur.com/LZ5Nu8b.mp4",
"https://i.imgur.com/U3y67Dj.mp4",
"https://i.imgur.com/Un7Af9t.mp4",
"https://i.imgur.com/lvLW12l.mp4",
"https://i.imgur.com/H5jpSAO.mp4",
"https://i.imgur.com/j2YT5Jn.mp4",
"https://i.imgur.com/gi4Lmb4.mp4",
"https://i.imgur.com/0dc1sgt.mp4",
"https://i.imgur.com/lyBMJ1O.mp4",
"https://i.imgur.com/1nl7tFO.mp4",
"https://i.imgur.com/dUQP0jS.mp4",
"https://i.imgur.com/1nl7tFO.mp4",
"https://i.imgur.com/H5jpSAO.mp4",
"https://i.imgur.com/j2YT5Jn.mp4",
"https://i.imgur.com/0dc1sgt.mp4",
"https://i.imgur.com/U3y67Dj.mp4",
"https://i.imgur.com/yU7srOD.mp4",
"https://i.imgur.com/fTrxYYu.mp4",
"https://i.imgur.com/FbPTvNO.mp4",
"https://i.imgur.com/sb7jUeA.mp4",
"https://i.imgur.com/RDY7yQC.mp4",
"https://i.imgur.com/dUQP0jS.mp4",
"https://i.imgur.com/lvLW12l.mp4",
"https://i.imgur.com/Un7Af9t.mp4",
"https://i.imgur.com/gi4Lmb4.mp4",
"https://i.imgur.com/H5jpSAO.mp4",
"https://i.imgur.com/hB7EUWd.mp4",
"https://i.imgur.com/fTrxYYu.mp4",
"https://i.imgur.com/xSm0Zd4.mp4",
"https://i.imgur.com/WHuWqkn.mp4",
"https://i.imgur.com/ME6kPAR.mp4",
"https://i.imgur.com/fTrxYYu.mp4",
"https://i.imgur.com/dUQP0jS.mp4",
"https://i.imgur.com/cxPMJ0s.mp4",
"https://i.imgur.com/Bwfcf1E.mp4",
"https://i.imgur.com/IxuxwUL.mp4",
"https://i.imgur.com/Wu6Vq4F.mp4",
"https://i.imgur.com/vN4O25E.mp4",
"https://i.imgur.com/K1R9Jgs.mp4",
"https://i.imgur.com/3k3EveT.mp4",
"https://i.imgur.com/MBEikW1.mp4",
"https://i.imgur.com/prcCJjD.mp4",
"https://i.imgur.com/04UQ5kb.mp4",
"https://i.imgur.com/4XtX34v.mp4",
"https://i.imgur.com/1kzUVvL.mp4",
"https://i.imgur.com/SmtVEQR.mp4",
"https://i.imgur.com/aNciiBh.mp4",
"https://i.imgur.com/dDHcsfA.mp4",
"https://i.imgur.com/kJWV8uI.mp4",
"https://i.imgur.com/QhJ8Xt7.mp4",
"https://i.imgur.com/PrXHeia.mp4",
);
$tuandz = array_rand($url);
$tuandeeptry = $url [$tuandz];
$videosex = array(
"url" => $tuandeeptry,
"author" => "TuanDeepTry",
"success" => "true",
);
$rdimg = json_encode($videosex);

$i = ['\/v\/','\/','TuanDeepTry'];
$t = ['/v/','/','TuanDeepTry'];
$j = str_replace($i, $t, $rdimg);
echo $j;
