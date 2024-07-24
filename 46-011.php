<?php
	session_start();
$id = filter_input(INPUT_POST, 'id'); // 必ずログインに成功する（仕様）
$_SESSION['id'] = $id;
?><body>
<?php echo htmlspecialchars($id, ENT_COMPAT, 'UTF-8'); ?>さん、ログイン成功です<br>
<a href="46-012.php">個人情報</a>
</body>
