<?php

require './php/lang_requirements.php';


$fr['NAV_START']                        = "Navigation";
$fr['NAV_INPUT_MATERIAL']               = "Ajout d'un matériaux (développement)";
$fr['NAV_MATERIAL_LIST']                = "Liste des matériaux (For DEV-Purposes)";
$fr['NAV_LIST_ALL']                     = "Toutes les listes";
$fr['NAV_LIST_CATEGORY']                = "Listes par catégorie";
$fr['NAV_SINGLE_MATERIAL']              = "Navigation";
$fr['NAV_RANDOM_MATERIAL']              = "Matériaux aléatoire";
$fr['NAV_ABOUT']                        = "à propos";


$fr['INPUT_MATERIAL_HEADING']           = "Insérer un matériaux dans la database";
$fr['MATERIAL_NAME']                    = "Nom du matériau";
$fr['MATERIAL_CATEGORY']                = "Catégorie";
$fr['MATERIAL_DENSITY']                 = "Densité";
$fr['MATERIAL_PICTURE']                 = "Photo du matériau (<2 MByte, PNG)";
$fr['MATERIAL_SIGN']                    = "Comment le recycler";


$fr['MATERIAL_SIGNS']                   = search_signs();
$fr['MATERIAL_PICTURES']                = search_pictures();

$fr['MATERIAL_ELECTRICAL_INSULATOR']    = "Valeur d'isolation électrique";
$fr['MATERIAL_THERMAL_INSULATOR']       = "Valeur d'isolation thermique";
$fr['MATERIAL_PHONIC_INSULATOR']        = "Est-ce-que le matériau est un isolant sonore?";
$fr['MATERIAL_INFLAMABLE']              = "Est-il inflammable?";
$fr['MATERIAL_MECHANICAL_STRESS']       = "Contrainte méchanique maximum d'élasticité";
$fr['MATERIAL_ELONGATION_AT_BREAK']     = "Elongation à la rupture";
$fr['MATERIAL_BREAKINGPOINT']           = "contrainte méchanique à la rupture";
$fr['MATERIAL_PRICE_PER_KG']            = "Prix par Kg";
$fr['MATERIAL_MELTINGPOINT']            = "température de fusion";
$fr['MATERIAL_YOUNGS_MODULE']           = "Module d'Young";
$fr['MATERIAL_ADDITIONAL_INFORMATION']  = "Information supplémentaire";
$fr['LIST_ALL_MATERIALS']               = get_materials($mysqli);;

$fr['TRUE']                             = "vrai";
$fr['FALSE']                            = "faux";
$fr['SUBMIT']                           = "soumettre";









?>