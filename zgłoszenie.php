<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wędkowanie - moje hobby</title>
</head>
<body>
    <?php
        $łowisko = $_POST['łowisko'];
        $data = $_POST['data'];
        $sędzia = $_POST['sędzia'];

        $db = new mysqli('localhost', 'root', '', 'egzamin2');

        $sql = "INSERT INTO zawody_wedkarskie (id, Karty_wedkarskie_id, Lowisko_id, data_zawodow, sedzia) VALUES (NULL, '2', '$łowisko', '$data', '$sędzia')";
        $wynik = $db->query($sql);
        $db->close();
    ?>
</body>
</html>