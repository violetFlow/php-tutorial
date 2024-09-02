<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    /*
        The differences are small:
        echo has no return value while print has a return value of 1 so it can be used in expressions.
        echo can take multiple parameters (although such usage is rare) while print can take one argument.
        echo is marginally faster than print. 
    */
    /* echo */
    echo "Hello";

    // same as:
    echo("Hello");

    echo "<h2>PHP is Fun!</h2>";
    echo "Hello world!<br>";
    echo "I'm about to learn PHP!<br>";
    echo "This ", "string ", "was ", "made ", "with multiple parameters.";

    $txt1 = "Learn PHP";
    $txt2 = "W3Schools.com";

    // double quotes case
    echo "<h2>$txt1</h2>";
    echo "<p>Study PHP at $txt2</p>";

    // single quotes case
    echo '<h2>' . $txt1 . '</h2>';
    echo '<p>Study PHP at ' . $txt2 . '</p>';

    /*  print */
    print "Hello";
    print("Hello");

    print "<h2>PHP is Fun!</h2>";
    print "Hello world!<br>";
    print "I'm about to learn PHP!<br>";

    // double quotes case
    echo "<h2>" . $txt1 . "</h2>";
    echo "<p>Study PHP at" . $txt2 . "</p>";

    // single quotes case
    echo '<h2>' . $txt1 . '</h2>';
    echo '<p>Study PHP at ' . $txt2 . '</p>';
?>
    
</body>
</html>