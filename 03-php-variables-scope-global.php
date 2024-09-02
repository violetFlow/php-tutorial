<?php
    $x = 5;
    $y = 10;
    function myTest() {
        $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
        /*
        global $x, $y;
        $y = $x + $y;
        => outputs 15
        */
    }
    myTest();

    echo $y; // outputs 15
?>