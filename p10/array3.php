<html>

<head>
    <style>
        table,
        tr,
        td {
            border: 1px solid black;
        }
    </style>
</head>

<body>
    <h2>associative array</h2>
    <?php
    $mobil = array(
        'merk' => 'toyota',
        'type' => 'fortuner',
        'year' => 2017
    );
    echo '<table>
    <tr>
    <th>Key</th>
    <th>Value</th>
    </tr>';

    foreach ($mobil as $key => $value) {
        echo '<tr>
        <td>' . $key . '</td>
        <td>' . $value . '</td>
        </tr>';
    }

    echo '</table>';
    ?>
</body>

</html>