<?php 
/**
 * Redirection page 
*/

include_once "../config.php";

// les informations sur les démos
$content_file = file_get_contents( DEMONSTRATIONS_FILE);
$data = json_decode($content_file);

$demo = $data->demonstrations[1];
// language
//---------
include_once INCLUDE_DIR . "/language.php";
 $pagelanguage = array(
    "title" => (array)$demo->title
 );
 $language = array_merge($language, $pagelanguage);

 $content = CONTENT_DIR . "/geotiff-rome.phtml";
 include_once TEMPLATE_DIR. "/layout.phtml";
