<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 5a Q1</title>
</head>
<body>
    <?php  
        // My details
        $name = "Nurkhairina Balqis Binti Mohamamd Joe";
        $matric_number = "AI220206";
        $course = "Bachelor in programming (BIP)";
        $year_of_study = "2022 - 2026";
        $address = "Shah Alam, Selangor";
    ?>

    <table border="1">
        <tr>
            <th>Details</th>
            <th>Information</th>
        </tr>
        <tr>
            <td>Name</td>
            <td><?php echo $name; ?></td>  
        </tr>
        <tr>
            <td>Matric Number</td>
            <td><?php echo $matric_number; ?></td>  
        </tr>
        <tr>
            <td>Course</td>
            <td><?php echo $course; ?></td>  
        </tr>
        <tr>
            <td>Year of Study</td>
            <td><?php echo $year_of_study; ?></td>  
        </tr>
        <tr>
            <td>Address</td>
            <td><?php echo $address; ?></td>  
        </tr>
    </table>
</body>
</html>
