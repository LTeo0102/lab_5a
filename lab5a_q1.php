<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 5a Q1</title>
</head>
<body>
    <?php
    $name = "Lily Teo"; 
    $matricNumber = "AI220052"; 
    $course = "BIP"; 
    $year = "3"; 
    $address = "No 44, Jalan Kencana 1A/2, Taman Pura Kencana, 83300 Sri Gading, Batu Pahat, Johor"; 
    ?>
    <table border="1" cellpadding="5">
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
            <td><?php echo $matricNumber; ?></td>
        </tr>
        <tr>
            <td>Course</td>
            <td><?php echo $course; ?></td>
        </tr>
        <tr>
            <td>Year of Study</td>
            <td><?php echo $year; ?></td>
        </tr>
        <tr>
            <td>Address</td>
            <td><?php echo $address; ?></td>
        </tr>
    </table>
</body>
</html>
