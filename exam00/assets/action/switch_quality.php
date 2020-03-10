<?php

echo shell_exec('./switch_quality.sh');
header("Cache-Control: no-cache, must-revalidate");
header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
header("Content-Type: application/xml; charset=utf-8");
header("Location: ../../index.php");

?>