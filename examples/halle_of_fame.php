<?php

if (!extension_loaded('in_memoriam')) {
    die('Extension "in_memoriam" are required!');
}

var_dump(\in_memoriam\get_hall_of_fame());
