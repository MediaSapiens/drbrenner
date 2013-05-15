<?php
$extensionPath = t3lib_extMgm::extPath('html5boilerplate4');

$autoloading = array(
	'tx_html5boilerplate4' => $extensionPath . 'Classes/class.tx_html5boilerplate4.php',
);

return $autoloading;
?>
