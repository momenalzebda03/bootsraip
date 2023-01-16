<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>my laptop</title>
</head>

<body>
    <?php

    $id = $_GET["my_id"];

    $data = new mysqli("localhost", "root", "", "data_string");

    $table = $data->query("select * from table_bootsraip where id = $id");

    if ($table->num_rows > 0) {
        while ($row = $table->fetch_assoc()) {
            print $row["small1"];
        }
    }
    ?>
</body>

</html>