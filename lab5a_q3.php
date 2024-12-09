<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 5a Q3</title>
</head>
<body>
    <?php  
        // Function to generate multiplication table
        function multiplication($multiplier) {
            $results = [];
            for ($i = 1; $i <= 12; $i++) {
                $results[] = [
                    "No" => $i,
                    "Multiplier" => $multiplier,
                    "Answer" => $i * $multiplier
                ];
            }
            return $results;
        }

        // Generate table for multiplier 5
        $multiplicationTable = multiplication(5);
    ?>

    <table border="1">
        <tr>
            <th>No</th>
            <th>Multiplier</th>
            <th>Answer</th>
        </tr>
        <?php foreach ($multiplicationTable as $row) { ?>
            <tr>
                <td><?php echo $row["No"]; ?></td>
                <td><?php echo $row["Multiplier"]; ?></td>
                <td><?php echo $row["Answer"]; ?></td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>
