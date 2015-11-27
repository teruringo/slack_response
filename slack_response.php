<?php
//レスポンスを送る
$text = $_POST['text'];
$str = array_values(array_filter(preg_split('/[ 　]/u', $_POST['text'])));
if ($str[1] == "wiki") {
	$text = "https://ja.wikipedia.org/wiki/".rawurlencode($str[2]);
}elseif ($str[1] == ggr) {
	$text = "https://www.google.co.jp/search?q=".rawurlencode($str[2]);
}else{
	$text = "いまはwikiとggrしかないようです・・・　「ぱぱぱ　wiki ほにゃらら」「ぱぱぱ　ggr　ほにゃらら」	と入力くださいな";
}


//Slackに返す
echo json_encode(
	array(
		'text' => $text,
		'username' => $username,
		'icon_url' => $icon_url
	)
);
