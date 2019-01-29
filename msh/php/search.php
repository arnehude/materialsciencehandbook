<?php
//require_once $_SERVER['DOCUMENT_ROOT'].'/php/config.php';
function search ($input, $any = false){
    $mysqli = new mysqli(MYSQLI_HOST, MYSQLI_USER, MYSQLI_PASS, MYSQLI_BASE);
    $escaped = htmlspecialchars($input);
    
    $search_query = "SELECT `id`,`name`,`category`,`picture` FROM `materials` WHERE (`name` LIKE '%%$escaped%%') OR (`category` LIKE '%%$escaped%%') OR (`additional_information` LIKE '%%$escaped%%')";
    if($any)
        $search_query = "SELECT `id`,`name`,`category`,`picture` FROM `materials` WHERE 1')";

    $db_result = $mysqli->query($search_query);
    $count = mysqli_num_rows($db_result);
    
    if($count == 0){
      $output = "There were no search results!";

    }else{

      while ($row = mysqli_fetch_array($db_result)) {

        $id = $row ['id'];
        $name = $row ['name'];
        $picture = $row ['picture'];
        $category = $row ['category'];

        $return .= "<tr id=".$id.">"
                . "     "
                . "         <td>"
                . "             <a href=\"./?s=single_material&id=".$id."\"><img src=\"./images/pictures/"."$picture"."\" style=\"width: 70px;height: 70px;\"/></a>"
                . "         </td>"
                . "         <td><a href=\"./?s=single_material&id=".$id."\">"."$name"."</a></td>"
                . "         <td><a href=\"./?s=single_material&id=".$id."\">"."$category"."</a></td>"
                . "     "
                . "</tr>";

      }

    }
    $mysqli->close();
    return $return;
}
function hitcount($input){
    $mysqli = new mysqli(MYSQLI_HOST, MYSQLI_USER, MYSQLI_PASS, MYSQLI_BASE);
    $escaped = htmlspecialchars($input);
    $search_query = "SELECT `id`,`name`,`category`,`picture` FROM `materials` WHERE (`name` LIKE '%%$escaped%%') OR (`category` LIKE '%%$escaped%%') OR (`additional_information` LIKE '%%$escaped%%')";
    $db_result = $mysqli->query($search_query);
    $count = mysqli_num_rows($db_result);
    $mysqli->close();
    return $count;
}

function searched_for($input){
    $return = htmlspecialchars($input);
    return $return;
}
if(isset($input) || $input != '' || $input!= " "){
    $fkt['_SF_'] = searched_for($input);
    $fkt['_HC_'] = hitcount($input);
    $fkt['_RL_'] = search($input);
}else{
    $fkt['_SF_'] = searched_for("", true);
    $fkt['_HC_'] = hitcount("", true);
    $fkt['_RL_'] = search("", true);
}

?>
