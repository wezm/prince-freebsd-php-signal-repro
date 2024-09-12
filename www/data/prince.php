<?php
require('../prince-php-wrapper/src/Prince.php');

use Prince\Prince;

$prince = new Prince('/usr/local/bin/prince');

header('Content-Type: application/pdf');

$msgs = array();
$prince->convertFileToPassthru('index.html', $msgs);
if (count($msgs) > 0) {
	$content=var_export($msgs, true);
	error_log($content);
}

?>
