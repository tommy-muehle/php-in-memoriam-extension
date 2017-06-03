--TEST--
Can get Marcel's image
--SKIPIF--
<?php if (!extension_loaded("in_memoriam")) print "skip"; ?>
--FILE--
<?php
echo \in_memoriam\show_marcel();
?>
--EXPECT--
data:image/jpeg;base64,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