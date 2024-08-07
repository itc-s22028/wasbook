<?php
	//省略
	$token = $_SERVER['HTTP'_X_CSRF_TOKEN'];
	if (empty($token) || $token !== $_COKIE['CSRF_TOKEN']) {
		header('HTTP/1.1 403 Forbidden');
		//セキュリティ上の問題なのでログを生成する
		error_log('** CSRF detected **');
		die('正規の経路から仕様ください' . $token);
	}
	//以下略
