<body><?php
	session_start();
	if (empty($_SESSION['user'])) {
		die("ログインしていません");
	}
	echo "ユーザー {$_SESSION['user']} でログイン中です";
?></body>
