<?php
//レスポンスを送る
$text = $_POST["text"];

echo json_encode(
	array(
		'text' => "テキスト".$text."テキスト",
		'username' => $username,
		'icon_url' => $icon_url
	)
);
