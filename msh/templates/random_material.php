<?php
include './php/functions.php';
include './php/config.php';
$mysqli = new mysqli("localhost", "c7_msh", "ZvoBBd@mW9o2", "c7_msh");
$query = "SELECT id FROM `materials` WHERE 1";
$stmt = $mysqli->query($query);
$n=0;
while ($id = $stmt->fetch_assoc()) {
        $ids[$n] = $id['id'];
        $n++;
}
$material_id_to_show = array_rand($ids,1);
header("Location: /?s=single_material&id=$material_id_to_show");

