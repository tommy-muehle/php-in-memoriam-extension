<?php

if (!extension_loaded('in_memoriam')) {
    die('Extension "in_memoriam" are required!');
}

var_dump(\in_memoriam\show_hall_of_fame());
