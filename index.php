<?php 
/**
 * Redirection page 
*/

include_once "config.php";

// language
//---------
include_once INCLUDE_DIR . "/language.php";
 $pagelanguage = array(
    "site_title" => array(
    		"fr" => "Démos du Projet Etalab",
    		"en" => "Demos Etalab Project"
    ),
    "title" => array( 
        "fr" => "Demo | ForM@Ter - Projet Etalab",
        "en" => "Demo | ForM@Ter - Etalab project"
    ),
    "slogan" => array(
        "fr" => "Vers un centre national de modélisation « Système Terre »",
        "en" => "Towards a national modeling center « Earh System »"
    ),
    "presentation1" => array( 
        "fr" => "Dans le cadre de la <a href='https://www.etalab.gouv.fr' target='_blank'>mission Etalab</a>, le <a href='https://www.poleterresolide.fr' target='_blank'>Pôle Terre Solide</a> a développé un prototype de <a href='https://www.poleterresolide.fr/projets/en-cours/etalab/' target='_blank'>plateforme de traitement à la demande</a>",
     		"en" => "As part of the <a href='https://www.etalab.gouv.fr' target='_blank'>Etalab mission</a>, the <a href='https://en.poleterresolide.fr' target='_blank'>Solid Earth Pole</a> is developping a <a href='https://www.poleterresolide.fr/projets/en-cours/etalab/' target='_blank'>on demand treatment platform</a>"
 	)
 );
 $language = array_merge($language, $pagelanguage);
 $home = true;
 include_once TEMPLATE_DIR. "/homelayout.phtml";
