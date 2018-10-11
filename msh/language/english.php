<?php


$en['NAV_START']                        = "Navigation";
$en['NAV_INPUT_MATERIAL']               = "Add materials";
$en['NAV_LIST_ALL']                     = "List all";
$en['NAV_LIST_CATEGORY']                = "List by Category";
$en['NAV_SINGLE_MATERIAL']              = "Navigation";
$en['NAV_RANDOM_MATERIAL']              = "Random material";
$en['NAV_ABOUT']                        = "About";


$en['INPUT_MATERIAL_HEADING']           = "Insert material into database";
$en['MATERIAL_NAME']                    = "Name of the material";
$en['MATERIAL_DENSITY']                 = "Density";
$en['MATERIAL_PICTURE_NAME']            = "Picture of the material (<2 MByte, PNG)";
$en['MATERIAL_SIGN']                    = "How to recycle";

include_once './php/search_signs.php';
$en['MATERIAL_SIGNS']                   = search_signs();

$en['MATERIAL_ELECTRICAL_INSULATOR']    = "Value of electical insulation";
$en['MATERIAL_THERMAL_INSULATOR']       = "Value of thermal insulation";
$en['MATERIAL_PHONIC_INSULATOR']        = "Is the material a phonic insulatior?";
$en['MATERIAL_INFLAMABLE']              = "Is it inflameable?";
$en['MATERIAL_MECHANICAL_STRESS']       = "Mecanical stress till it bend";
$en['MATERIAL_ELONGATION_AT_BREAK']     = "Elongation at break";
$en['MATERIAL_BREAKINGPOINT']           = "Mecanical stress till it break";
$en['MATERIAL_PRICE_PER_KG']            = "Price per KG";
$en['MATERIAL_MELTINGPOINT']            = "Meltingpoint";
$en['MATERIAL_YOUNGS_MODULE']           = "Youngs Module";
$en['MATERIAL_ADDITIONAL_INFORMATION']  = "Additional information";


$en['TRUE']                             = "True";
$en['FALSE']                            = "False";
$en['SUBMIT']                           = "Submit";
?>