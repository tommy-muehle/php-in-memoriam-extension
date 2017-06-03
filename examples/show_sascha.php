<?php

if (!extension_loaded('in_memoriam')) {
    die('Extension "in_memoriam" are required!');
}

// you can also show_marcel, show_patrick, show_martin and of course show_tommy :-)
echo '<img src="data:' . \in_memoriam\show_sascha() . '"/>';
