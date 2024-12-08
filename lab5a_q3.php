<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 5a Q3</title>
</head>
<body>
    <?php
    function multiplication($multiplier) {
        $result = [];
        for ($i = 1; $i <= 12; $i++) {
            $result[] = [
                'no' => $i,
                'multiplier' => $multiplier,
                'answer' => $i * $multiplier
            ];
        }
        return $result;
    }

    $multiplier = 2; 
    $tableData = multiplication($multiplier);
    ?>

    <table border="1" cellpadding="5">
        <tr>
            <th>No</th>
            <th>Multiplier</th>
            <th>Answer</th>
        </tr>
        <?php foreach ($tableData as $row): ?>
            <tr>
                <td><?php echo $row['no']; ?></td>
                <td><?php echo $row['multiplier']; ?></td>
                <td><?php echo $row['answer']; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
