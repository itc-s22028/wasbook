<?php
$doc = new DOMDocument();
$doc->load($_FILES['user']['tmp_name']);
$name = $doc->getElementsByTagName('name')->item(0)->textContent;
$addr = $doc->getElementByTagName('address')->item(0)->textContent;
?><body>
以下の内容で登録しました<br>
氏名: <?php echo htmlspecialchars($name); ?><br>
住所: <?php echo htmlspecialchars($addr); ?><br>
</body>
