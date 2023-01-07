<?php

echo '
<body onload="this.form.submit();">
<form method="post" name="form" action="auth.php">
    <input type="hidden" name="requestType" value="logout">
</form>
</body>
';
