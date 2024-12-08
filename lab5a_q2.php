<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 5a Q2</title>
</head>
<body>
    <?php  
        // Associative array for students
        $students = [
            ["Name" => "Alice", "Program" => "BIP", "Age" => 21],
            ["Name" => "Bob", "Program" => "BIS", "Age" => 20],
            ["Name" => "Raju", "Program" => "BIT", "Age" => 22]
        ];
    ?>

    <table border="1">
        <tr>
            <th>Name</th>
            <th>Program</th>
            <th>Age</th>
        </tr>
        <?php foreach ($students as $student) { ?>
            <tr>
                <td><?php echo $student["Name"]; ?></td>
                <td><?php echo $student["Program"]; ?></td>
                <td><?php echo $student["Age"]; ?></td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>
