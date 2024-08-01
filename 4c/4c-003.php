<?php
// 注意:このダウンロードスクリプトにはクロスサイト・スクリプティング脆弱性があります
//
define('UPLOADPATH', '/var/upload');
$mimes = array('gif' => 'image/gif', 'jpg' => 'image/jpeg',
'png' => 'image/png',);

$file = $_GET['file'];
$info = pathinfo($file);
$ext = strtolower($info['extension']);
$content_type = $mimes[$ext];
if (! $content_type) {
	die('拡張子はgif、jpg、pngのいずれかを指定してください');
}
header('Content-Type: ' . $content_type);
readfile(UPLOADPATH . '/' . basename($file));
?>
