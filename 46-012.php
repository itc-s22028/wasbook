<?php
	session_start();
?><body>
現在のユーザID：<?php echo htmlspecialchars($_SESSION['id'], ENT_COMPAT, 'UTF-8'); ?><br>
</body>
