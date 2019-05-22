<?php

    function outputOrderRow($file, $title, $quantity, $price) {
        echo "<tr>";
        //TODO
        echo "<td><img src='images/books/tinysquare/{$file}'alt=''></td>";
        echo"<td>{$title}</td>";
        echo"<td>{$quantity}</td>";
        echo "<td>\${$price}.00/td>";
        $all=$quantity*$price;
        number_format($all,2);
        echo "<td>\${$all}.00</td>";
        echo "</tr>";
    }
?>