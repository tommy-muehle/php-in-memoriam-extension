--TEST--
Can find beloved former colleagues in phpinfo()
--SKIPIF--
<?php if (!extension_loaded("in_memoriam")) print "skip"; ?>
--FILE--
<?php
ob_start();
$info = phpinfo(INFO_MODULES);
$phpinfo = ob_get_clean();
var_dump(preg_match('/Beloved former colleagues/', $phpinfo));
?>
--EXPECT--
int(1)
