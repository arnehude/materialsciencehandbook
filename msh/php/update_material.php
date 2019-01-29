<?php

/*
 * Material Properties      
 * ID                       int(10)
 * Name                     varchar(70)
 * Density                  float(20)
 * Picture                  int(10)
 * warninglabels            int(10)
 * electical insulator      float(10)
 * thermal insulator        float(10)
 * phonic insulator         bool
 * inflamable               bool
 * mechanical stress        float(10)
 * elongation at break      float(10)
 * price per kg             float(10)
 * meltingpoint             float(10)
 * breakingpoint            float(10)
 * Youngs modul             float(10)     (Elasitizität)
 * additional text          text(1000)
 */

class materials{    
    function __construct(){
    }    
    public function filter($string){
        return filter_var($string, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    }            
    private function mysqlquery($query){
        include $_SERVER['DOCUMENT_ROOT'].'/php/config.php';
        $connect = mysqli_connect(
                MYSQLI_HOST, 
                MYSQLI_USER, 
                MYSQLI_PASS, 
                MYSQLI_BASE);
        
        if(!$connect){
            echo mysqli_error($connect);
            echo 'NO CONNECTION TO DATABASE';
        }
        elseif ($connect) { 
            //echo 'DB OK';   
            return (mysqli_query($connect, $query));
        }
        else{
            echo 'UNDEFINED ERROR';
        }
    }
    public function get_material($post){
        foreach ($post as $key => $value) {
            $data[$key] = $this->filter($value);
        }
        return $data;        
    }
    public function erase_material($post){
        var_dump($post);
        $erase_sql = "DELETE FROM `materials` WHERE `materials`.`id` = ".$post['ID']."";
        if($this->mysqlquery($erase_sql)){
            $url = "/?s=list_all_dev";
            header("Location: $url");
        }else{
            var_dump($erase_sql);
            echo 'error';
        }
    }
    public function save_material($post){
        $mysqli = $this->mysql();
        $d = $this->get_material($post);
        
        $sql = "INSERT INTO `materials` (
            `name`,
            `category`,
            `density`,
            `picture`,
            `sign`,
            `electric_insulator`,
            `thermal_insulator`,
            `phonic_insulator`,
            `inflamable`,
            `mechanical_stress`,
            `elongation_at_break`,
            `breakingpoint`,
            `price_per_kg`,
            `meltingpoint`,
            `youngs_module`,
            `additional_information`,
            `added`)
            VALUES 
            ('".$d['MATERIAL_NAME']."',
              '".$d['MATERIAL_CATEGORY']."',
              '".$d['MATERIAL_DENSITY']."',
              '".$d['MATERIAL_PICTURE_NAME']."',
              '".$d['MATERIAL_SIGN_NAME']."',
                  
              '".$d['MATERIAL_ELECTRICAL_INSULATOR']."',
              '".$d['MATERIAL_THERMAL_INSULATOR']."',
              '".$d['MATERIAL_PHONIC_INSULATOR']."',
              '".$d['MATERIAL_INFLAMABLE']."',
              '".$d['MATERIAL_MECHANICAL_STRESS']."',
                  
              '".$d['MATERIAL_ELONGATION_AT_BREAK']."',
              '".$d['MATERIAL_BREAKINGPOINT']."',
              '".$d['MATERIAL_PRICE_PER_KG']."',
              '".$d['MATERIAL_MELTINGPOINT']."',
              '".$d['MATERIAL_YOUNGS_MODULE']."',
                  
              '".$d['MATERIAL_ADDITIONAL_INFORMATION']."',
            'CURRENT_TIMESTAMP');";       
        if($mysqli->query($sql)){
            $url = "/?s=input_material";
            header("Location: $url");
        }else{
            echo 'error';
        }
    }
    public function update_material($post){
        $d = $this->get_material($post);
        $sql = "UPDATE `materials` "
                . "SET "
                . "`name`                   = '".$d['MATERIAL_NAME']."',"
                . "`category`               = '".$d['MATERIAL_CATEGORY']."', "
                . "`density`                = '".$d['MATERIAL_DENSITY']."', "
                . "`picture`                = '".$d['MATERIAL_PICTURE_NAME']."', "
                . "`sign`                   = '".$d['MATERIAL_SIGN']."', "
                . "`electric_insulator`     = '".$d['MATERIAL_ELECTRICAL_INSULATOR']."', "
                . "`thermal_insulator`      = '".$d['MATERIAL_THERMAL_INSULATOR']."', "
                . "`phonic_insulator`       = '".$d['MATERIAL_PHONIC_INSULATOR']."', "
                . "`inflamable`             = '".$d['MATERIAL_INFLAMABLE']."', "
                . "`mechanical_stress`      = '".$d['MATERIAL_MECHANICAL_STRESS']."', "
                . "`elongation_at_break`    = '".$d['MATERIAL_ELONGATION_AT_BREAK']."', "
                . "`breakingpoint`          = '".$d['MATERIAL_BREAKINGPOINT']."', "
                . "`price_per_kg`           = '".$d['MATERIAL_PRICE_PER_KG']."', "
                . "`meltingpoint`           = '".$d['MATERIAL_MELTINGPOINT']."', "
                . "`youngs_module`          = '".$d['MATERIAL_YOUNGS_MODULE']."' "
                . ""
                . "WHERE "
                . "`materials`.`id` = ".$d['ID'].";";

        if($this->mysqlquery($sql)){
            $url = "/?s=list_all_dev";
            header("Location: $url");
        }else{
            var_dump($sql);
            echo 'error';
        }
    }
}

if (isset($_POST['ID'])){
    if($_POST['delete']==1 && isset($_POST['ID'])){
        $mat = new materials;
        $mat->erase_material($_POST);
    }
    if($_POST['edit']==1 && isset($_POST['ID'])){
        $mat = new materials;
        $mat->update_material($_POST);
    }
}