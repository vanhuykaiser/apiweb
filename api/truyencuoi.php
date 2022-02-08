<?php
$word = array(
"Chuyện Luật Sư\n\nMột ông luật sư vừa mở cửa chiếc xe BMW bước xuống đường thì bỗng đâu có một xe khác phóng nhanh qua và quạt mất cái cửa xe của chiếc BMW. Khi cảnh sát đến hiện trường thì thấy ông ta đang nhảy dựng lên có vẻ tức giận lắm, thấy vị cảnh sát ông ta gằn giọng phàn nàn: Ông xem, chúng làm thiệt hại nặng nề cho cái xe BMW mới của tôi đến thế này này.
Vị cảnh sát quan sát hiện trường rồi nói: Bọn luật sư các ông chỉ coi vật chất là trên hết! Ông chỉ quan tâm đến cái xe BMW mắc dịch này mà chẳng biết rằng cái cánh tay trái của ông cũng đã bị quật rụng mất tiêu rồi!
Ông luật sư kinh hoảng khi nhìn thấy cánh tay mình đã cụt mất và kêu toáng lên: Tôi phải tìm nó ngay. Tôi đeo cái đồng hồ Rolex ở cổ tay đó, mau mau tìm giùm tôi đi, mau lên mau lên!"
);
$tuandz = array_rand($word);
$tuandeeptry = $word [$tuandz];
$truyencuoi = array(
"data" => $tuandeeptry,
"author" => "TuanDeepTry",
"success" => "true",
);
$rdimg = json_encode($truyencuoi , JSON_UNESCAPED_UNICODE);

$i = ['\/v\/','\/','TuanDeepTry'];
$t = ['/v/','/','TuanDeepTry'];
$j = str_replace($i, $t, $rdimg);
echo $j;
