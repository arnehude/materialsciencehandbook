<?php
    function trueorfalse($value){
        if($value){
            return "{{TRUE}}";
        }else{
            return "{{FALSE}}";
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
                <div class="col-sm-6 col-lg-4 item"><i class="fa fa-circle icon"></i>
                    <h3 class="name">{{SHOW_DENSITY}}</h3>
                    '.$materials[0]['density'].'&nbsp;
                    <div class="progress">                        
                        <div class="progress-bar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%;"><span class="sr-only">50%</span></div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 item"><i class="fa fa-text-width icon"></i>
                    <h3 class="name" style="margin: 0 0 10px;">{{SHOW_BREAK_ELONGATION}}</h3>
                    '.$materials[0]['elongation_at_break'].'&nbsp;
                    <div class="progress">                        
                        <div class="progress-bar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%;"><span class="sr-only">50%</span></div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 item"><i class="fa fa-thermometer-empty icon"></i>
                    <h3 class="name">{{SHOW_MELTINGPOINT}}</h3>                    
                    '.$materials[0]['meltingpoint'].'&nbsp;
                    <div class="progress">
                        <div class="progress-bar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%;"><span class="sr-only">50%</span></div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 item"><i class="fa fa-compress icon"></i>
                    <h3 class="name">{{SHOW_BREAKING_POINT}}</h3>
                    '.$materials[0]['breakingpoint'].'&nbsp;
                    <div class="progress">
                        <div class="progress-bar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%;"><span class="sr-only">50%</span></div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 item"><i class="fa fa-chain-broken icon"></i>
                    <h3 class="name">{{SHOW_YOUNGS_MODULE}}</h3>
                    '.$materials[0]['youngs_module'].'&nbsp;
                    <div class="progress">
                        <div class="progress-bar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%;"><span class="sr-only">50%</span></div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 item"><i class="fa fa-gears icon"></i>
                    <h3 class="name">{{SHOW_PPK}}</h3>
                    '.$materials[0]['price_per_kg'].'&nbsp;
                    <div class="progress">
                        <div class="progress-bar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%;"><span class="sr-only">50%</span></div>
                    </div>
                </div>
                <div class="col-sm-12 col-lg-12 item"><i class="fa fa-minus-square-o icon"></i>
                    <h3 class="name">{{SHOW_INSULATION}}</h3>
                    <div class="row justify-content-center align-items-center">
                        <div class="col" style="padding: 5px;"><span class="badge badge-primary" style="font-size: 1em;margin: 0 auto;">'.trueorfalse($materials[0]['electric_insulator']).'</span>
                            <p>{{SHOW_INSULATION_ELECTRIC}}</p>
                        </div>
                        <div class="col" style="padding: 5px;"><span class="badge badge-primary" style="font-size: 1em;margin: 0 auto;">'.trueorfalse($materials[0]['thermal_insulator']).'</span>
                            <p>{{SHOW_INSULATION_THERMAL}}</p>
                        </div>
                        <div class="col" style="padding: 5px;"><span class="badge badge-primary" style="font-size: 1em;margin: 0 auto;">'.trueorfalse($materials[0]['phonic_insulator']).'</span>
                            <p>{{SHOW_INSULATION_PHONIC}}</p>
                        </div>
                        <div class="col" style="padding: 5px;"><span class="badge badge-primary" style="font-size: 1em;margin: 0 auto;">'.trueorfalse($materials[0]['inflamable']).'</span>
                            <p>{{SHOW_FLAMMABILITY}}</p>
                        </div>
                    </div>
                </div>
        </div>
</div>';
        return $content;
    }

?>
