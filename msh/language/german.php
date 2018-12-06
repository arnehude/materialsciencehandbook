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
$de['NAV_SEARCH']                       = "Suche";

$de['SEARCH_HEADING']                   = "Materialsuche";
$de['SEARCH_TEXT']                      = "Ihre Suche: ";
$de['SEARCH_PICTURE']                   = "Bild";
$de['SEARCH_NAME']                      = "Name";
$de['SEARCH_CATEGORY']                  = "Kategorie";
$de['SEARCH_RESULTS']                   = "Ergebnisse: ";

$de['INPUT_MATERIAL_HEADING']           = "Material zur Datenbank hinzufügen";
$de['MATERIAL_NAME']                    = "Materialname";
$de['MATERIAL_CATEGORY']                = "Kategorie";
$de['MATERIAL_DENSITY']                 = "Dichte";
$de['MATERIAL_PICTURE']                 = "Bild des Materials (<2 MByte, PNG)";
$de['MATERIAL_SIGN']                    = "Recyclingsymbole";


$de['MATERIAL_SIGNS']                   = search_signs();
$de['MATERIAL_PICTURES']                = search_pictures();

$de['MATERIAL_ELECTRICAL_INSULATOR']    = "Elektrischer Isolator?";
$de['MATERIAL_THERMAL_INSULATOR']       = "Wärmeisolator?";
$de['MATERIAL_PHONIC_INSULATOR']        = "Phonischer Isolator?";
$de['MATERIAL_INFLAMABLE']              = "Entzündlich?";
$de['MATERIAL_MECHANICAL_STRESS']       = "Biegespannung";
$de['MATERIAL_ELONGATION_AT_BREAK']     = "Bruchdehnung";
$de['MATERIAL_BREAKINGPOINT']           = "Bruchspannung";
$de['MATERIAL_PRICE_PER_KG']            = "Preis pro KG";
$de['MATERIAL_MELTINGPOINT']            = "Schmelzpunkt";
$de['MATERIAL_YOUNGS_MODULE']           = "Youngs Module";
$de['MATERIAL_ADDITIONAL_INFORMATION']  = "Zusätzliche Informationen";
$de['LIST_ALL_MATERIALS']               = material_output_list($mysqli);
$de['LIST_ALL_MATERIALS_DEV']           = material_output_list($mysqli, true);

$de['SHOW_SINGLE']                      = @single_mat($mysqli, @$_GET['id']);
$de['SHOW_DENSITY']                     = "Dichte";
$de['SHOW_MATERIAL_NAME']               = "Name";
$de['SHOW_CATEGORY']                    = "Kategorie";
$de['SHOW_TOPIC']                       = "Thema";
$de['SHOW_BREAK_ELONGATION']            = "Bruchdehnung";
$de['SHOW_MELTINGPOINT']                = "Schmelzpunkt";
$de['SHOW_BREAKING_POINT']              = "Bruchspannung";
$de['SHOW_YOUNGS_MODULE']               = "Youngs Modul";
$de['SHOW_PPK']                         = "Preis pro Kilogramm";
$de['SHOW_INSULATION']                  = "Insolator";
$de['SHOW_INSULATION_ELECTRIC']         = "Elektrisch";
$de['SHOW_INSULATION_THERMAL']          = "Thermal";
$de['SHOW_INSULATION_PHONIC']           = "Phonisch";
$de['SHOW_FLAMMABILITY']                = "Entzündlich";
$de['SHOW_ADDITIONAL_INFORMATION']      = "Zusätzliche Infromationen";

$de['TRUE']                             = "Ja";
$de['FALSE']                            = "Nein";
$de['SUBMIT']                           = "Abschicken";
?>
