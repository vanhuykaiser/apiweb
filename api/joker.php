<?php
$word = array(
    "Nếu mày giỏi một thứ gì đó, đừng bao giờ làm nó miễn phí.",
    "Họ cười tao vì tao không giống họ, tao cười họ vì họ quá giống nhau.",
    "Tao tin rằng những gì không thể giết chết mày sẽ khiến mày… quái đản hơn.",
    "Cười không chỉ để che giấu nỗi buồn, mà còn để che giấu đi sự khinh bỉ.",
    "Chỉ cần một ngày tồi tệ thôi để biến một kẻ tỉnh táo nhất thành một gã điên.",
    "Tao đâu có bị điên, tao chỉ tỉnh táo khác tụi bây thôi.",
    "Cách hợp lý nhất để sống trong thế giới này là phá bỏ đi những nguyên tắc.",
    "Thấy chưa, tao đâu phải là ác quỷ, tao chỉ đi trước thời đại mà thôi.",
    "Điều tệ nhất khi mắc bệnh tâm thần là mọi người muốn mày cư xử như thể mày không mắc bệnh.",
    "Bây giờ chúng nó cần mày thôi, còn đến khi không cần thì chúng nó sẽ đá mày như một con hủi.",
    "Không quan trọng mày là ai, đừng mất công thanh minh. Những gì mày đang làm sẽ định nghĩa con người mày.",
    "Nói tao nghe xem, anh bạn. Mày đã bao giờ khiêu vũ với ác quỷ dưới ánh trăng mờ chưa?",
    "Khi không còn những thằng như tao, ai sẽ cần đến mày chứ, người hùng?",
    "Chúng mày dừng cái việc kiểm tra xem có con quỷ nào dưới gầm giường đi, hãy nhận ra rằng chúng nó ở chính bên trong bọn mày",
    "Đôi khi cái ta nhìn thấy không phải sự thật, cái ta không nhìn thấy, đó mới là sự thật.",
    "Những kẻ xấu luôn dạy cho bạn những lẽ phải trong cuộc sống.",
    "Nếu như ai đó ghét bạn chẳng vì lý do gì cả, việc bạn nên làm là cho họ một lý do.",
    "Mày thấy đấy, mấy cái nhân nghĩa, đạo đức của chúng nó chỉ là trò đùa nhạt thếch thôi.",
    "Nhìn xem, trong khoảnh khắc cuối cùng, bọn chúng sẽ cho mày biết bộ mặt thực sự của chúng.",
    "Thời buổi này chẳng thể trông cậy vào ai, tất cả đều phải tự thân mà làm lấy, đúng không nào?",
    "Nếu phải chết, tao sẽ chết với một nụ cười!",
    "Trong giấc mơ của tao, thế giới phải chịu một thảm họa khủng khiếp. Một lớp sương mù che phủ ánh mặt trời. Đột nhiên một tia sáng lóe lên, thắp sáng hi vọng cho hàng triệu tâm hồn khốn khổ. Tao mỉm cười và thổi tắt nó!",
    "Tao đã cuỗm đi hiệp sĩ ánh sáng của Gotham, và tao đã dìm nó xuống ngang hàng với tao. Điều đó chẳng khó khăn gì, hiểu chứ? Như mày biết đấy, sự điên loạn cũng như trọng lực vậy. Tất cả những gì nó cần là một cú đẩy",
    "Hôm nay tao với mày sẽ chơi một ván bài, chơi theo luật của TAO.",
    "Một cây súng tao chĩa vào mẹ mày, một cây súng tao chĩa vào mày, vậy mày chọn ai sống?",
    "Trên đời này không có người tốt, chỉ có những thằng khờ không biết làm việc xấu.",
    "Mày có muốn biết vì sao tao lại dùng dao không? Súng ống thì lẹ quá, mày không thể nhấm nháp tất cả những xúc cảm nho nhỏ này được. Mày hiểu chứ?",
    "Có một số người phạm tội, một số khác thì chỉ ĐIÊN thôi",
    "Bà ấy bảo tôi lúc nào cũng phải tươi cười.",
    "Tôi chỉ hy vọng cái chết của tôi sẽ kiếm được nhiều tiền hơn cuộc sống của tôi.",
    "Điều tồi tệ nhất đối với một bệnh nhân tâm thần chính là mọi người bắt anh ta phải cư xử như một người bình thường.",
    "Tất cả những gì tôi có chính là những suy nghĩ tiêu cực.",
    "Tôi đã từng nghĩ cuộc đời mình là một vở kịch buồn nhưng đến bây giờ tôi đã nhận ra, nó chính là một vở hài kịch.",
    "Chỉ một mình tôi hay tất cả mọi người ở ngoài kia điên vậy?",
    "Nó không phải là vấn đề về Tiền, nó chỉ đơn giản là gửi 1 tin nhắn và tất cả sẽ cháy rụi..",
    "Tao tin rằng những gì không hề giết chết mày sẽ làm mày độc lạ hơn .",
    "Tao cho mày hai lựa chọn. Một là mày chết, hai là người thân chết thay mày.",
);
$tuandz = array_rand($word);
$tuandeeptry = $word [$tuandz];
$joker = array(
"data" => $tuandeeptry,
"author" => "Tuấn DeepTry",
"success" => "true",
);
$rdimg = json_encode($joker , JSON_UNESCAPED_UNICODE);

$i = ['\/v\/','\/','Tuấn DeepTry'];
$t = ['/v/','/','Tuấn DeepTry'];
$j = str_replace($i, $t, $rdimg);
echo $j;