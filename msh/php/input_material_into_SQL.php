<?php
include $_SERVER['DOCUMENT_ROOT'].'/php/config.php';

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
    private function mysql(){
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
            return $connect;
        }
    }
    private function mysqlquery($query){  
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
            return mysqli_fetch_array(mysqli_query($connect, $query));
            $connect->close();
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
}

if (isset($_POST['submit'])){
    $mat = new materials;
    $mat->save_material($_POST);    
}