<?php
//レスポンスを送る

echo json_encode(
	array(
		'text' => $text."テキスト",
		'username' => $username,
		'icon_url' => $icon_url
	)
);
