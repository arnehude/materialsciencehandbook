<?php
 require './php/lang_requirements.php';


$de['NAV_START']                        = "Navigation";
$de['NAV_INPUT_MATERIAL']               = "Materialien hinzufügen(Aus DEV-Gründen)";
$de['NAV_MATERIAL_LIST']                = "Materialliste (Aus DEV-Gründen)";
$de['NAV_LIST_ALL']                     = "Alle anzeigen";
$de['NAV_LIST_CATEGORY']                = "Kategorien";
$de['NAV_SINGLE_MATERIAL']              = "Navigation";
$de['NAV_RANDOM_MATERIAL']              = "Zufälliges Material";
$de['NAV_ABOUT']                        = "Über uns";


$de['INPUT_MATERIAL_HEADING']           = "Material zur Datenbank hinzufügen";
$de['MATERIAL_NAME']                    = "Materialname";
$de['MATERIAL_CATEGORY']                = "Kategorie";
$de['MATERIAL_DENSITY']                 = "Dichte";
$de['MATERIAL_PICTURE']                 = "Bild des Materials (<2 MByte, PNG)";
$de['MATERIAL_SIGN']                    = "Recyclingzeichen";


$de['MATERIAL_SIGNS']                   = search_signs();
$de['MATERIAL_PICTURES']                = search_pictures();

$de['MATERIAL_ELECTRICAL_INSULATOR']    = "Elektrischer Isolator?";
$de['MATERIAL_THERMAL_INSULATOR']       = "Wärmeisolator?";
$de['MATERIAL_PHONIC_INSULATOR']        = "Phonischer Isolator?";
$de['MATERIAL_INFLAMABLE']              = "Entzündlich?";
$de['MATERIAL_MECHANICAL_STRESS']       = "Biegespannung";
$de['MATERIAL_ELONGATION_AT_BREAK']     = "Bruchdehnung";
$de['MATERIAL_BREAKINGPOINT']           = "Bruchspanning";
$de['MATERIAL_PRICE_PER_KG']            = "Preis pro KG";
$de['MATERIAL_MELTINGPOINT']            = "Schmelzpunkt";
$de['MATERIAL_YOUNGS_MODULE']           = "Youngs Module";
$de['MATERIAL_ADDITIONAL_INFORMATION']  = "Zusätzliche Informationen";
$de['LIST_ALL_MATERIALS']               = get_materials($mysqli);;

$de['TRUE']                             = "Ja";
$de['FALSE']                            = "Nein";
$de['SUBMIT']                           = "Abschicken";
?>
