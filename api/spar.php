<?php
$url = array(
"https://i.imgur.com/jXOwoHx.gif",
"http://kenh14cdn.com/thumb_w/660/2018/7/19/gif-2-15319836727292050186373.gif",
"https://i.postimg.cc/15M8gyDW/1or7sa.gif",
"https://i.postimg.cc/cLb6mT9w/2ce5a017f6556ff103bce87b273b89b7.gif",
"https://i.postimg.cc/15Rt1bbD/anime-kick.gif",
"https://i.postimg.cc/5206LD3f/Anime-083428-6224795.gif",
"https://i.postimg.cc/j5V2V2rj/giphy.gif",
"https://i.postimg.cc/sXpX3zV4/kick-anime.gif",
"https://i.postimg.cc/X72vjQ0m/kick-anime-1.gif",
"https://i.postimg.cc/3NYwRqN5/OHNW.gif",
"https://i.postimg.cc/PJy58MvL/tumblr-1ae35cc7d78b5e579d5baabe3f0c03db-00a2d481-540.gif",
"https://i.postimg.cc/kMv4Z7Yn/tumblr-nyc5ygy2a-Z1uz35lto1-540.gif",
);
$tuandz = array_rand($url);
$tuandeeptry = $url [$tuandz];
$spar = array(
"url" => $tuandeeptry,
"author" => "Tuấn DeepTry",
"success" => "true",
);
$rdimg = json_encode($spar);

$i = ['\/v\/','\/','Tuấn DeepTry'];
$t = ['/v/','/','Tuấn DeepTry'];
$j = str_replace($i, $t, $rdimg);
echo $j;
