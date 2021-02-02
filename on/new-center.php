<?php
if(!empty($_POST['center'])){
    $pdo = new PDO('mysql:host=localhost;dbname=geek', 'root', '', [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]);
    $center = $_POST['center'];
    $lat = $_POST['lat'];
    $lon = $_POST['lon'];
    $adress = $_POST['adress'];
    $tel = $_POST['tel'];

    $sql = $pdo->query("INSERT INTO center (center, lat, lon, adress, tel) VALUES
    ('$center', '$lat', '$lon', '$adress', '$tel)");
    echo '<h2>Centre de ' . $center .' bien ajouté</h2>';
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../src/style.css">
    <title>Ajouter un centre</title>
</head>
<body style="height: 100vh">
    <div style="height: 100vh; display: block;">
        <form action="" method="POST">
            <h2>Ajouter un centre</h2>
            <label>Nom du centre</label>
            <input type="text" name="center" required>
            <label>Lattitude</label>
            <input type="text" name="lat" required>
            <label>Longitude</label>
            <input type="text" name="lon" required>
            <label>Adress</label>
            <input type="text" name="adress" required>
            <label>Telephone</label>
            <input type="text" name="tel" placeholder="01 23 45 68 78 91" required>
            <input type="submit" value="Valider">
        </form>
    </div>
</body>
</html>