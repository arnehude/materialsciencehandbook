<?php
function get_materials($mysqli){
    $query_id_asc = "SELECT * FROM `materials` WHERE 1 ORDER BY `materials`.`id` ASC";
    $query_id_des = "SELECT * FROM `materials` WHERE 1 ORDER BY `materials`.`id` DESC";
    $query_name_asc = "SELECT * FROM `materials` WHERE 1 ORDER BY `materials`.`name` ASC";
    $query_name_dsc = "SELECT * FROM `materials` WHERE 1 ORDER BY `materials`.`name` DESC";
    $query = $query_id_asc;
    if ($stmt = $mysqli->query($query))
    {   
        $n =0;
        while ($materials[$n] = $stmt->fetch_assoc()) {
            $n++;
        }
        $stmt->free();
    }
    $n = 0;
    $content ="";
    foreach ($materials[$n] as $key => $value) {
        $n++;
        $content .=  $key.':___________________'.$value.'<br/>';
    }
    return $content;
}

