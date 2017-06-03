--TEST--
Can get Hall of Fame
--SKIPIF--
<?php if (!extension_loaded("in_memoriam")) print "skip"; ?>
--FILE--
<?php
print_r(\in_memoriam\get_hall_of_fame());
?>
--EXPECT--
Array
(
    [Martin Waury] => 09/2012 - 10/2014
    [Sascha Seyfert] => 11/2009 - 01/2017
    [Marcel Fuehrer] => 04/2013 - 05/2017
    [Patrick Paechnatz] => 01/2014 - 06/2017
    [Tommy Muehle] => 04/2010 - 06/2017
)
