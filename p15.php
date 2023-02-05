<html>
    <head>
        <title>Program 15</title>
    </head>
    <body>
        <h1>Chess Board</h1>

        <table border height="400" width="400">
            <?php
            for($r=1;$r<=8;$r++)
            {
                echo "<tr>";

                for ($c=1;$c<=8;$c++)
                {
                    $total = $r + $c;
                    if(($total % 2) == 0)
                    {
                        echo "<td width = '30' heigth = '30' bgcolor = 'black'></td>";
                    }
                    else
                    {
                        echo "<td width = '30' heigth = '30' bgcolor = 'white'></td>";
                    }
                    
                }
  
                echo "</tr>";
            }
            ?>
        </table>
    </body>
</html>