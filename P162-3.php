<!DOCTYPE html>
<html>
    <body>
        <table border=2>
            <?php
                for($y = 1;$y <= 9;$y++)
                {
                    echo "<tr>";
                    for($x = 1;$x <= $y;$x++)
                    {
                        echo "<td>".$x." ✖ ".$y." = ".$x*$y."</td>";
                    }
                    echo "</tr>";
                }
            ?>
        </table>
    </body>
</html>