<?php //
require './php/lang_requirements.php';
$en['NAV_START']                        = "Navigation";
$en['NAV_INPUT_MATERIAL']               = "Add materials (For DEV-Purposes)";
$en['NAV_MATERIAL_LIST']                = "Material list (For DEV-Purposes)";
$en['NAV_LIST_ALL']                     = "List all";
$en['NAV_LIST_CATEGORY']                = "List by Category";
$en['NAV_SINGLE_MATERIAL']              = "Navigation";
$en['NAV_RANDOM_MATERIAL']              = "Random material";
$en['NAV_ABOUT']                        = "About";
$en['NAV_SEARCH']                       = "Search";

$en['SEARCH_HEADING']                   = "Search for Materials";
$en['SEARCH_TEXT']                      = "You have searched for: ";
$en['SEARCH_PICTURE']                   = "Picture";
$en['SEARCH_NAME']                      = "Name";
$en['SEARCH_CATEGORY']                  = "Category";
$en['SEARCH_RESULTS']                   = "Results: ";

$en['INPUT_MATERIAL_HEADING']           = "Insert material into database";
$en['MATERIAL_NAME']                    = "Name of the material";
$en['MATERIAL_CATEGORY']                = "Category";
$en['MATERIAL_DENSITY']                 = "Density";
$en['MATERIAL_PICTURE']                 = "Picture of the material (<2 MByte, PNG)";
$en['MATERIAL_SIGN']                    = "How to recycle";


$en['MATERIAL_SIGNS']                   = search_signs();
$en['MATERIAL_PICTURES']                = search_pictures();

$en['MATERIAL_ELECTRICAL_INSULATOR']    = "Value of electrical insulation";
$en['MATERIAL_THERMAL_INSULATOR']       = "Value of thermal insulation";
$en['MATERIAL_PHONIC_INSULATOR']        = "Is the material a phonic insulator?";
$en['MATERIAL_INFLAMABLE']              = "Is it inflammable?";
$en['MATERIAL_MECHANICAL_STRESS']       = "Mechanical stress till it bends";
$en['MATERIAL_ELONGATION_AT_BREAK']     = "Elongation at break";
$en['MATERIAL_BREAKINGPOINT']           = "Mechanical stress till it breaks";
$en['MATERIAL_PRICE_PER_KG']            = "Price per KG";
$en['MATERIAL_MELTINGPOINT']            = "Meltingpoint";
$en['MATERIAL_YOUNGS_MODULE']           = "Youngs Module";
$en['MATERIAL_ADDITIONAL_INFORMATION']  = "Additional information";
$en['LIST_ALL_MATERIALS']               = material_output_list($mysqli);
$en['LIST_ALL_MATERIALS_DEV']           = material_output_list($mysqli, true);

$en['SHOW_SINGLE']                      = @single_mat($mysqli, @$_GET['id']);
$en['SHOW_DENSITY']                     = "Density";
$en['SHOW_MATERIAL_NAME']               = "Name";
$en['SHOW_CATEGORY']                    = "Category";
$en['SHOW_TOPIC']                       = "Topic";
$en['SHOW_BREAK_ELONGATION']            = "Elongation at Break";
$en['SHOW_MELTINGPOINT']                = "Meltingpoint";
$en['SHOW_BREAKING_POINT']              = "Breaking stress";
$en['SHOW_YOUNGS_MODULE']               = "Youngs module";
$en['SHOW_PPK']                         = "Price per kilogramm";
$en['SHOW_INSULATION']                  = "Insulation";
$en['SHOW_INSULATION_ELECTRIC']         = "Electric";
$en['SHOW_INSULATION_THERMAL']          = "Thermal";
$en['SHOW_INSULATION_PHONIC']           = "Phonic";
$en['SHOW_FLAMMABILITY']                = "Flammable";
$en['SHOW_ADDITIONAL_INFORMATION']      = "Additional information";
        
$en['TRUE']                             = "True";
$en['FALSE']                            = "False";
$en['SUBMIT']                           = "Submit";
?>