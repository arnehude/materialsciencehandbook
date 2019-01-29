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
    foreach ($materials as $material) {
        foreach ($material as $key => $value) {
            $content .=  $key.':___________________'.$value.'<br/>';
        }
        $content.='<br/><br/>';
        $n++;
    }

    return $content;
}

function equals_true($value){
    if($value==1){
        return "checked";
    }
    
}
function material_output_list($mysqli, $dev = false){
    $query_id_asc = "SELECT * FROM `materials` ORDER BY `materials`.`id` ASC";
    $query_id_des = "SELECT * FROM `materials`  ORDER BY `materials`.`id` DESC";
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
    
    if($dev){
        $o = 1;
        foreach ($materials as $material) {
            $o++;
            $even = "";
            if (($o % 2) == 1){
                $even = "even";
            }
        $content .= '<tr id="r'.$o.'" class="'.$even.'">
                    <form name="mat'.$material['id'].'" action="/php/update_material.php" method="post" class="form-horizontal">
                        <td style="width: 20px;"><input type="hidden" name="ID" value="'.$material['id'].'"/>'.$material['id'].'</td>
                        <td><input name="MATERIAL_NAME" type="text" class="form-control input-md" value="'.$material['name'].'"/></td>
                        <td><input name="MATERIAL_CATEGORY" type="text" class="form-control input-md" value="'.$material['category'].'"/></td>
                        <td><input name="MATERIAL_DENSITY" type="text" class="form-control input-md xsm" value="'.$material['density'].'"/></td>
                        <!--<td><input type="radio"> &nbsp;</td>-->
                        <!--<td><input type="radio"> &nbsp;</td>-->
                        <td><div class="form-check"><input name="MATERIAL_ELECTRICAL_INSULATOR" class="form-check-input" type="checkbox" value="1" '.equals_true($material['electric_insulator']).'></div></td>
                        <td><div class="form-check"><input name="MATERIAL_THERMAL_INSULATOR" class="form-check-input" type="checkbox" value="1" '.equals_true($material['thermal_insulator']).'></div></td>
                        <td><div class="form-check"><input name="MATERIAL_PHONIC_INSULATOR" class="form-check-input" type="checkbox" value="1" '.equals_true($material['phonic_insulator']).'></div></td>
                        <td><div class="form-check"><input name="MATERIAL_INFLAMABLE" class="form-check-input" type="checkbox" value="1" '.equals_true($material['inflamable']).'></div></td>
                        <td><input name="MATERIAL_MECHANICAL_STRESS" type="text" class="form-control input-sm xsm" value="'.$material['mechanical_stress'].'"></td>
                        <td><input name="MATERIAL_ELONGATION_AT_BREAK" type="text" class="form-control input-sm xsm" value="'.$material['elongation_at_break'].'"></td>
                        <td><input name="MATERIAL_BREAKINGPOINT" type="text" class="form-control input-sm xsm" value="'.$material['breakingpoint'].'"></td>
                        <td><input name="MATERIAL_PRICE_PER_KG" type="text" class="form-control input-sm xsm" value="'.$material['price_per_kg'].'"></td>
                        <td><input name="MATERIAL_MELTINGPOINT" type="text" class="form-control input-sm xsm" value="'.$material['meltingpoint'].'"></td>
                        <td><input name="MATERIAL_YOUNGS_MODULE" type="text" class="form-control input-sm xsm" value="'.$material['youngs_module'].'"></td>
                        <td>
                            <button class="btn btn-success" type="submit" name="edit" value="1" style="margin-left: 5px;"><i class="fa fa-check" style="font-size: 15px;"></i></button>
                            <button onclick="erase('.$material['id'].')" class="btn btn-danger" type="submit" name="delete" value="1" style="margin-left: 5px;"><i class="fa fa-trash" style="font-size: 15px;"></i></button>
                        </td>
                    </form>
                    </tr>';
        $n++;
        }   
    } elseif (!$dev) {
        foreach ($materials as $material) {           
        $content .= '<tr>
                        <td><a href="/?s=single_material&id='.$material['id'].'"><img src="./images/pictures/'.$material['picture'].'" alt="'.$material['name'].'" width="100" height="100" /></a></td>
                        <td><a href="/?s=single_material&id='.$material['id'].'">'.$material['name'].'</a></td>
                        <td><a href="/?s=single_material&id='.$material['id'].'">'.$material['category'].'</a></td>
                    </tr>';
        $n++;
        } 
    }
    return $content;
}
function show_all_materials($mysqli){
    $query_id_asc = "SELECT * FROM `materials` ORDER BY `materials`.`id` ASC";
    $query_id_des = "SELECT * FROM `materials`  ORDER BY `materials`.`id` DESC";
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
    if($dev == true){
        foreach ($materials as $material) {           
        $content .= '                    <tr class="row">
                        <td><input name="MATERIAL_NAME" type="text" class="form-control input-md" value="'.$material['name'].'"/></td>
                        <td><input name="MATERIAL_CATEGORY" type="text" class="form-control input-md" value="'.$material['category'].'"/></td>
                        <td><div class="form-check"><input name="MATERIAL_ELECTRICAL_INSULATOR" class="form-check-input" type="checkbox" value="1" '.equals_true($material['electric_insulator']).'></div></td>
                        <td><div class="form-check"><input name="MATERIAL_THERMAL_INSULATOR" class="form-check-input" type="checkbox" value="1" '.equals_true($material['thermal_insulator']).'></div></td>
                        <td><div class="form-check"><input name="MATERIAL_PHONIC_INSULATOR" class="form-check-input" type="checkbox" value="1" '.equals_true($material['phonic_insulator']).'></div></td>
                        <td><div class="form-check"><input name="MATERIAL_INFLAMABLE" class="form-check-input" type="checkbox" value="1" '.equals_true($material['inflamable']).'></div></td>
                        <td><input name="MATERIAL_MECHANICAL_STRESS" type="text" class="form-control input-sm" value="'.$material['mechanical_stress'].'"></td>
                        <td><input name="MATERIAL_ELONGATION_AT_BREAK" type="text" class="form-control input-sm" value="'.$material['elongation_at_break'].'"></td>
                        <td><input name="MATERIAL_BREAKINGPOINT" type="text" class="form-control input-sm" value="'.$material['breakingpoint'].'"></td>
                        <td><input name="MATERIAL_PRICE_PER_KG" type="text" class="form-control input-sm" value="'.$material['price_per_kg'].'"></td>
                        <td><input name="MATERIAL_MELTINGPOINT" type="text" class="form-control input-sm" value="'.$material['meltingpoint'].'"></td>
                        <td><input name="MATERIAL_YOUNGS_MODULE" type="text" class="form-control input-sm" value="'.$material['youngs_module'].'"></td>
                        <td>
                            <button class="btn btn-success" type="submit" name="edit" value="1" style="margin-left: 5px;"><i class="fa fa-check" style="font-size: 15px;"></i></button>
                            <button class="btn btn-danger" type="submit" name="delete" value="1" style="margin-left: 5px;"><i class="fa fa-trash" style="font-size: 15px;"></i></button>
                        </td>
                    </form>
                    </tr>';
        $n++;
        }  
    }elseif($dev == false){
        $content .= ' <tr>
                        <td><input name="MATERIAL_NAME" type="text" class="form-control input-md" value="'.$material['name'].'"/></td>
                        <td><input name="MATERIAL_CATEGORY" type="text" class="form-control input-md" value="'.$material['category'].'"/></td>
                    </tr>';
        $n++;
    }
    return $content;
}
