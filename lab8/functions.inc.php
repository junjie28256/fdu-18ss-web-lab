<?php

    function outputOrderRow($file, $title, $quantity, $price) {
        $mmm = "images/books/tinysquare/" . $file;
        echo "<tr>";

        echo "<th>";
        echo "<img src = $mmm>";
        echo "</th>";

        echo "<th>";
        echo $title;
        echo "</th>";

        echo "<th>";
        echo $quantity;
        echo "</th>";

        echo "<th>";
        echo "$" . $price . ".00";
        echo "</th>";

        echo "<th>";
        echo "$" . $price * $quantity . ".00";
        echo "</th>";

        echo "<br>";
        echo "</tr>";
    }
?>