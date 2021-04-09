<?php

foreach(array_diff(scandir(__DIR__), [basename(__FILE__)]) as $requirement)
    if(pathinfo($requirement, PATHINFO_EXTENSION) == 'php')
        require $requirement;