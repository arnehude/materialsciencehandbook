<?php
function rdm_material($mysqli){
    $sql = "SELECT COUNT(`id`) FROM `c7_msh`.`materials` WHERE 1";
    $stmt = $mysqli->query($sql);
    $count = mysqli_fetch_array($stmt);
    $rdm_number = rand(0, $count[0]-1);   
    return single_material($mysqli, $rdm_number);;
}
?>