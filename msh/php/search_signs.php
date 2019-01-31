<?php

function search_signs(){
    $directory = './images/recycle';
    $scanned_directory = array_diff(scandir($directory), array('..', '.'));
    $output ='<div class="row">';
    
    foreach ($scanned_directory as $sign) {
        
        $output.= '<div class="input-group mb-2 col">
            <div class="input-group-prepend">
                <div class="input-group-text">
                    <input type="checkbox" id="img_'.$sign.'" name="MATERIAL_SIGN" value="'.$sign.'"/>'
                        . '<label class="form-check-label img-thumbnail" for="img_'.$sign.'">'
                            . '<img src="'.$directory.'/'.$sign.'" alt="'. str_replace(".png", "", $sign).'"  style="max-width:100px;max-height:100px;"/>'
                        . '</label>'
                .'</div>
            </div>
        </div>';
        
//        $output.= '<div class="form-check">'
//                    . '<input type="checkbox" id="img_'.$sign.'" name="MATERIAL_SIGN" value="'.$sign.'" class="form-check-input">'
//                        . '<label class="form-check-label img-thumbnail" for="img_'.$sign.'">'
//                            . '<img src="'.$directory.'/'.$sign.'" alt="'. str_replace(".png", "", $sign).'"  style="max-width:200px;max-height:200px;"/>'
//                        . '</label>'
//                    . '</input>'
//                . '</div><br/>';
    }
    return $output;
}
