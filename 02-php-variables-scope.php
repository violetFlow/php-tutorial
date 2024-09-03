<?php
    $x = 4; // global scope
    function myTest() {
        $x = 5; // local scope
        echo "<p>Variable x inside function is: $x</p>"; // 5
    }
    myTest();

    echo "<p>Variable x outside function is: $x</p>" // 4 
?>