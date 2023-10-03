<?php
include 'connect.php'; // Kapcsolat az adatbázissal

// SQL lekérdezés az összes úticél lekéréséhez
$sql = "SELECT uticel FROM utak";

$result = mysqli_query($conn, $sql);

if (!$result) {
    die("Hiba a lekérdezésben: " . mysqli_error($conn));
}

// Úticélok tömbbe mentése
$uticelTomb = array();
while ($row = mysqli_fetch_assoc($result)) {
    $uticelTomb[] = $row['uticel'];
}

// JSON válasz elküldése
echo json_encode($uticelTomb);

mysqli_close($conn);
?>
