<?php
$url = array(
    "https://i.postimg.cc/kDPnrhm1/39bc90425d16da36937378d10c7c1e74.jpg",
    "https://i.postimg.cc/G3WYhL3N/427eeead218af79b5eccaf01af461346.jpg",
    "https://i.postimg.cc/QMdKnVSB/45da0a127e59480f64c2b5542f47e788.png",
    "https://i.postimg.cc/dQkrYkFr/68747470733a2f2f73332e616d617a6f6e6177732e636f6d2f776174747061642d6d656469612d736572766963652f53746f.jpg",
    "https://i.postimg.cc/CKrnyY6c/726e03d0212184b239a075c47c29bace.jpg",
    "https://i.postimg.cc/Z5Zdpwdx/88e12407-s.webp",
    "https://i.postimg.cc/bwT2T10c/a5e7241c6fb145e1731c7b38f070a5b4.jpg",
    "https://i.postimg.cc/GhvD4WHp/a7aabc78f4321f3be19d9fba0b5760cc.jpg",
    "https://i.postimg.cc/h4dzYk80/d19f2c8fac550b1ee8badcb1303610cd.jpg",
    "https://i.postimg.cc/7Y1CHSWG/d677bd9a0b1a467e10fcb9be271aece2.png",
    "https://i.postimg.cc/Jn9ynx8J/d7b17a08bdc764e49e9576dbe4bd2a48.jpg",
    "https://i.postimg.cc/PrnpnS2n/dca39eb7eea1f51d5bdb34a511223dfe.png",
    "https://i.postimg.cc/gJwXm5Cm/df6692260eab50b9c5ac11f0ff15bbb0.jpg",
    "https://i.postimg.cc/W4ztwCbg/doraemon-m-1653999941-2909-1654000060.png",
    "https://i.postimg.cc/GtG4sD3f/doremon-va-nobita-5.jpg",
    "https://i.postimg.cc/pLqp8RxP/doremon-va-nobita-7.jpg",
    "https://i.postimg.cc/TPs170pS/e65979415013bd380475e8e10f9e8353.jpg",
    "https://i.postimg.cc/qvkNzgPm/ecbfcf59c8bfa1a448446bf42fe3c391.jpg",
    "https://i.postimg.cc/dQr368vH/f8a75a1cf607e8d85f22afc57d56d778.png",
    "https://i.postimg.cc/HsmxhVkp/fcd3-15940229993971756398820.webp",
    "https://i.postimg.cc/Gtw2rpPx/game-xep-hinh-doremon-hinh-anh-3-1.jpg",
    "https://i.postimg.cc/zGtGv7SB/grab02b97doraemon-9528.png",
    "https://i.postimg.cc/KjPYYyJS/hinh-anh-avatar-doremon-cute.jpg",
    "https://i.postimg.cc/PxmHWQZ1/hinh-anh-doremon-cuc-ky-dang-yeu.png",
    "https://i.postimg.cc/VN2sBNhP/hinh-anh-doremon-cute.jpg",
    "https://i.postimg.cc/htPGK6m6/hinh-anh-doremon-va-banh-ran.jpg",
    "https://i.postimg.cc/vm4HVn3v/hinh-anh-doremon4-1024x576.jpg",
    "https://i.postimg.cc/TYcwMfKn/Hinh-Anime-Doraemon-ngau-de-thuong.jpg",
    "https://i.postimg.cc/xTg0p5ZR/Hinh-Anime-Doremon-deo-kinh-ngau-de-thuong-780x470.png",
    "https://i.postimg.cc/T1JR6J3T/Hinh-Doremon-va-Nobita-dep-dang-yeu.jpg",
    "https://i.postimg.cc/4ygJqSZ8/hinh-nen-doremon-cute-ngau-49.jpg",
    "https://i.postimg.cc/GhbLjVXt/hinh-nen-doremon-dep-ngau-cho-dien-thoai-092724447.jpg",
    "https://i.postimg.cc/tR3RWpt8/imager-66463.jpg",
    "https://i.postimg.cc/kGsdZMT4/khidoraemontrongthegioigta10.png",
    "https://i.postimg.cc/hvcBpQb6/khidoraemontrongthegioigta13.png",
    "https://i.postimg.cc/6pmBt3t4/khidoraemontrongthegioigta2.png",
    "https://i.postimg.cc/26pmLKqz/khidoraemontrongthegioigta4.png",
    "https://i.postimg.cc/SQfqjVmh/photo-1-15874425796661491864636.webp",
    "https://i.postimg.cc/VN0m68kG/quay-ve-tuoi-tho-voi-5-game-doraemon-cuc-yeu-doraemon-anime-bluray-techrum-cover8ca97e7a09c22208.jpg",
);
$tuandz = array_rand($url);
$tuandeeptry = $url [$tuandz];
$mirai = array(
"data" => $tuandeeptry,
"author" => "TuanDeepTry",
"success" => "true",
);
$rdimg = json_encode($mirai);

$i = ['\/v\/','\/','TuanDeepTry'];
$t = ['/v/','/','TuanDeepTry'];
$j = str_replace($i, $t, $rdimg);
echo $j;
