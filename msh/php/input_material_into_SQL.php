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
        }
        else{
            echo 'UNDEFINED ERROR';
        }
    }
    public function get_material($post){
        $data['customer'] = $this->filter($post['customer']);
        $data['pricecat'] = $this->filter($post['pricecat']);
        $data['weight'] = $this->filter($post['weight']);
        $data['printer'] = $this->filter($post['printer']);      
        $data['filament'] = $this->filter($post['filament']);      
        $data['description'] = $this->filter($post['description']);
        return $data;        
    }
    
    public function save_material($mysqli,$post){
        $data = $this->get_material($post);
        $query_history =
            "   INSERT INTO `history` 
                (`username`, `operator`, `weight`, `pricecat`, `price`, `filament`, `printer`, `printedat`, `description`) 
        VALUES  (   '".$data['customer']."',  
                    '".$data['operator']."', 
                    '".$data['weight']."', 
                    '".$data['pricecat']."', 
                    '".$data['filament']."', 
                    '".$data['printer']."');";
        
        if($mysqli->query($query_history)){
            $url = "/?s=history";
            header("Location: $url");
        }else{
            echo 'error';
        }
    }
}

if (isset($_POST['submit'])){
    $print = new materials;
    $print->save_material($mysqli,$_POST);    
}