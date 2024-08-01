<?php
  $mail = filter_input(INPUT_POST, 'mail');
  $descriptorspec = array(0 => array("pipe", "r"));
  $env = array('e_mail' => $mail);
  // sendmailコマンドに渡すメールアドレスを "$e_mail" として環境変数を参照
  $process = proc_open('/usr/sbin/sendmail -i "$e_mail"', $descriptorspec, $pipes, getcwd(), $env);

  if (is_resource($process)) { // 以下、コマンド実行成功の場合
    fwrite($pipes[0], file_get_contents('template.txt'));
    fclose($pipes[0]);
    proc_close($process);
  }
?>
<body>
お問い合わせを受け付けました
</body>
