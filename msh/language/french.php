<?php

require './php/lang_requirements.php';

$fr['NAV_START']                        = "Navigation";
$fr['NAV_INPUT_MATERIAL']               = "Ajouter un matériau";
$fr['NAV_MATERIAL_LIST']                = "Liste des matériaux";
$fr['NAV_LIST_ALL']                     = "Liste de tous les matériaux";
$fr['NAV_LIST_CATEGORY']                = "Liste par catégories";
$fr['NAV_SINGLE_MATERIAL']              = "Navigation";
$fr['NAV_RANDOM_MATERIAL']              = "Matériau aléatoire";
$fr['NAV_ABOUT']                        = "A propos";
$fr['NAV_SEARCH']                       = "Recherche";
$fr['NAV_LANGUAGE']                     = "Language";
$fr['NAV_EN']                           = "Anglais";
$fr['NAV_FR']                           = "Français";
$fr['NAV_DE']                           = "Allemand";

$fr['SEARCH_HEADING']                   = "Rechercher un matériau";
$fr['SEARCH_TEXT']                      = "Vous avez cherchez pour: ";
$fr['SEARCH_PICTURE']                   = "Image";
$fr['SEARCH_NAME']                      = "Nom";
$fr['SEARCH_CATEGORY']                  = "Catégorie";
$fr['SEARCH_RESULTS']                   = "Resultats: ";

$fr['INPUT_MATERIAL_HEADING']           = "Ajouter un matériau à la base de données";
$fr['MATERIAL_NAME']                    = "Nom du matériau";
$fr['MATERIAL_CATEGORY']                = "Catégorie";
$fr['MATERIAL_DENSITY']                 = "Densité";
$fr['MATERIAL_PICTURE']                 = "Image du matériau (<2 MByte, PNG)";
$fr['MATERIAL_SIGN']                    = "Comment le recycler";


$fr['MATERIAL_SIGNS']                   = search_signs();
$fr['MATERIAL_PICTURES']                = search_pictures();

$fr['MATERIAL_ELECTRICAL_INSULATOR']    = "Est-ce biodégradable ?";
$fr['MATERIAL_THERMAL_INSULATOR']       = "Est-ce renouvelable ?";
$fr['MATERIAL_PHONIC_INSULATOR']        = "Est-ce recyclable ?";
$fr['MATERIAL_INFLAMABLE']              = "Est-ce inflammable ?";
$fr['MATERIAL_MECHANICAL_STRESS']       = "Mechanical stress till it bends";
$fr['MATERIAL_ELONGATION_AT_BREAK']     = "Déformation à rupture";
$fr['MATERIAL_BREAKINGPOINT']           = "Contrainte à rupture";
$fr['MATERIAL_PRICE_PER_KG']            = "Prix au kg";
$fr['MATERIAL_MELTINGPOINT']            = "Température de fusion";
$fr['MATERIAL_YOUNGS_MODULE']           = "Module de Young";
$fr['MATERIAL_ADDITIONAL_INFORMATION']  = "Informations supplémentaires";
$fr['LIST_ALL_MATERIALS']               = material_output_list($mysqli);
$fr['LIST_ALL_MATERIALS_DEV']           = material_output_list($mysqli, true);

$fr['SHOW_SINGLE']                      = @single_mat($mysqli, @$_GET['id']);
$fr['SHOW_DENSITY']                     = "Densité";
$fr['SHOW_MATERIAL_NAME']               = "Nom";
$fr['SHOW_CATEGORY']                    = "Categorie";
$fr['SHOW_TOPIC']                       = "Sujet";
$fr['SHOW_BREAK_ELONGATION']            = "Déformation à rupture";
$fr['SHOW_MELTINGPOINT']                = "Température de fusion";
$fr['SHOW_BREAKING_POINT']              = "Contrainte à rupture";
$fr['SHOW_YOUNGS_MODULE']               = "Module de Young";
$fr['SHOW_PPK']                         = "Prix au kg";
$fr['SHOW_INSULATION']                  = "Propriétés particulières";
$fr['SHOW_INSULATION_ELECTRIC']         = "Biodégradable";
$fr['SHOW_INSULATION_THERMAL']          = "Renouvelable";
$fr['SHOW_INSULATION_PHONIC']           = "Recyclable";
$fr['SHOW_FLAMMABILITY']                = "Inflammable";
$fr['SHOW_ADDITIONAL_INFORMATION']      = "Information supplémentaires";
$fr['SHOW_LEGEND']                      = "Légende pour la valeur de la puissance décimale";

$fr['TRUE']                             = "Vrai";
$fr['FALSE']                            = "Faux";
$fr['SUBMIT']                           = "soumettre";









?>