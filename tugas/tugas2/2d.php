<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2d</title>

    <style>
        table {
            border: 1 px solid;
        }
    </style>
</head>

<body>
    <table cellspacing="0px" cellpading="5px">
        <?php
        for ($row = 1; $row <= 5; $row++) {
            echo "<tr>";
            for ($col = 1; $col <= 5; $col++) {
                $total = $row + $col;
                if ($total % 2 == 0) {
                    echo "<td height=50px width=50px bgcolor=black></td>";
                } else {
                    echo "<td height=50px width=50px bgcolor=white></td>";
                }
            }
            echo "</tr>";
        }
        ?>
    </table>
</body>

</html>