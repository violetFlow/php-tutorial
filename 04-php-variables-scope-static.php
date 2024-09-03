<?php
    function myTest() {
        static $x = 0;
        echo $x;
        $x++;
    }

    myTest(); // outputs 0
    myTest(); // outputs 1
    myTest(); // outputs 2
?>