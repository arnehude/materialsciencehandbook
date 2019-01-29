<?php
    function progressbar($mysqli, $item, $value){
        $sql_max = "SELECT max($item) FROM `materials`;";
        $max = mysqli_fetch_assoc(mysqli_query($mysqli, $sql_max))["max($item)"];        
        switch ($value) {
            case $value<0.1 && $value>0:                
                $value = $value*1000;
                $color = "background-color: lime;";
                break;
            case $value<1 && $value>0:                
                $value = $value*100;
                $color = "background-color: green;";
                break;
            case $value<10 && $value>1:                
                $value = $value*10;
                $color = "background-color: cyan;";
                break;
            case $value<100 && $value>10:                
                $value = $value*1;
                $color = "background-color: blue;";
                break;
            case $value>100 && $value<1000:                
                $value = $value/10;
                $color = "background-color: purple;";
                break;
            case $value>1000 && $value<10000:                
                $value = $value/100;
                $color = "background-color: magenta;";
                break;
            case $value>10000 && $value<100000:                
                $value = $value/1000;
                $color = "background-color: red;";
                break;
            case $value>100000 && $value<1000000:                
                $value = $value/10000;
                $color = "background-color: orange;";
                break;

            default:
                $value = $value;
                $color ="";
                break;
        }
        $progress = round(($max/100) * $value,2);
        return "<div class=\"progress-bar\" aria-valuenow=\"$value\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: $progress%;$color\"><span class=\"sr-only\">50%</span></div>";
    }
    function trueorfalse($value){
        if($value){
            return "{{TRUE}}";
        }else{
            return "{{FALSE}}";
        }
    }
    function red_or_green($value){
        if($value=="{{TRUE}}"){
            return "success";
        }elseif($value=="{{FALSE}}"){
            return "danger";
        }
    }
    function single_mat($mysqli, $id = null){
        if($id!= null){
                    $query = "SELECT * FROM `materials` WHERE `materials`.`id` = ".$id;
            if ($stmt = $mysqli->query($query))
            {   
                $n =0;
                while ($materials[$n] = $stmt->fetch_assoc()) {
                    $n++;
                }
                $stmt->free();
            }
        }
        //var_dump($materials);
        $materials[0]['price_per_kg'];
        
        
        $content = '<div>
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 col-xl-8">
                    <h1>'.$materials[0]['name'].'</h1>
                    <h4>'.$materials[0]['category'].'</h4>
                </div>
                <div class="col-12 col-md-6 col-xl-4"><img class="rounded img-fluid d-flex" src="./images/pictures/'.$materials[0]['picture'].'" width="200px" height="200px" style="margin: 0 auto;"></div>
            </div>
        </div>
    <div class="features-clean">
        <div class="container">
            <div class="row features">
                <div class="col-sm-6 col-lg-4 item">
                    <h3 class="name">{{SHOW_DENSITY}}</h3>
                    '.$materials[0]['density'].'&nbsp;kg/m^3
                    <div class="progress">                        
                        '.progressbar($mysqli, "density",$materials[0]['density']).'
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 item">
                    <h3 class="name" style="margin: 0 0 10px;">{{SHOW_BREAK_ELONGATION}}</h3>
                    '.$materials[0]['elongation_at_break'].'&nbsp;m
                    <div class="progress">                        
                        '.progressbar($mysqli, "elongation_at_break",$materials[0]['elongation_at_break']).'
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 item">
                    <h3 class="name">{{SHOW_MELTINGPOINT}}</h3>                    
                    '.$materials[0]['meltingpoint'].'&nbsp;K
                    <div class="progress">
                        '.progressbar($mysqli, "meltingpoint",$materials[0]['meltingpoint']).'
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 item">
                    <h3 class="name">{{SHOW_BREAKING_POINT}}</h3>
                    '.$materials[0]['breakingpoint'].'&nbsp;MPa
                    <div class="progress">
                        '.progressbar($mysqli, "breakingpoint",$materials[0]['breakingpoint']).'
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 item">
                    <h3 class="name">{{SHOW_YOUNGS_MODULE}}</h3>
                    '.$materials[0]['youngs_module'].'&nbsp;Pa
                    <div class="progress">
                        '.progressbar($mysqli, "youngs_module",$materials[0]['youngs_module']).'
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 item">
                    <h3 class="name">{{SHOW_PPK}}</h3>
                    '.$materials[0]['price_per_kg'].'&nbsp;€
                    <div class="progress">
                        '.progressbar($mysqli, "price_per_kg",$materials[0]['price_per_kg']).'
                    </div>
                </div>
                <div class="col-sm-12 col-lg-12 item">
                    <h3 class="name">{{SHOW_INSULATION}}</h3>
                    <div class="row justify-content-center align-items-center">
                        <div class="col" style="padding: 5px;"><span class="badge badge-'.red_or_green(trueorfalse($materials[0]['electric_insulator'])).'" style="font-size: 1em;margin: 0 auto;">'.trueorfalse($materials[0]['electric_insulator']).'</span>
                            <p>{{SHOW_INSULATION_ELECTRIC}}</p>
                        </div>
                        <div class="col" style="padding: 5px;"><span class="badge badge-'.red_or_green(trueorfalse($materials[0]['thermal_insulator'])).'" style="font-size: 1em;margin: 0 auto;">'.trueorfalse($materials[0]['thermal_insulator']).'</span>
                            <p>{{SHOW_INSULATION_THERMAL}}</p>
                        </div>
                        <div class="col" style="padding: 5px;"><span class="badge badge-'.red_or_green(trueorfalse($materials[0]['phonic_insulator'])).'" style="font-size: 1em;margin: 0 auto;">'.trueorfalse($materials[0]['phonic_insulator']).'</span>
                            <p>{{SHOW_INSULATION_PHONIC}}</p>
                        </div>
                        <div class="col" style="padding: 5px;"><span class="badge badge-'.red_or_green(trueorfalse($materials[0]['inflamable'])).'" style="font-size: 1em;margin: 0 auto;">'.trueorfalse($materials[0]['inflamable']).'</span>
                            <p>{{SHOW_FLAMMABILITY}}</p>
                        </div>
                    </div>
                </div>
        </div>
        <div class="container bg-dark border border-dark rounded">
        <div  style="padding: 10px;" class="row"><h4 style="color:white">Legend for highest values<h4></div>
        <div  style="padding: 10px;" class="row bg-light">            
            <div class="col">10^</div>
            <div class="col rounded" style="margin:2px;background-color: lime">-2</div>
            <div class="col rounded" style="margin:2px;background-color: green">-1</div>
            <div class="col rounded" style="margin:2px;background-color: cyan">0</div>
            <div class="col rounded" style="margin:2px;background-color: blue">1</div>
            <div class="col rounded" style="margin:2px;background-color: purple">2</div>
            <div class="col rounded" style="margin:2px;background-color: magenta">4</div>
            <div class="col rounded" style="margin:2px;background-color: red">5</div>
            <div class="col rounded" style="margin:2px;background-color: orange">6</div>
            <div class="col rounded" style="margin:2px;background-color: yellow">7</div>
        </div></div>
</div>';
        return $content;
    }
?>
