<?php
$lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
$lang = $lang == "fr" ? "fr": "en";

if (isset($_GET['lang']) && in_array($_GET['lang'], array('fr', 'en'))) {
	$lang = $_GET['lang'];
}
$urlGet = explode("?","http://" . $_SERVER["HTTP_HOST"].$_SERVER['REQUEST_URI']);
$language =   array(
	"url_new"=> array(
			"fr" => "https://www.poleterresolide.fr",
			"en" => "https://en.poleterresolide.fr"),
	"etalab_on_formater" => array(
			"fr" => "Page du projet",
			"en" => "Project page"
	),
	"url_etalab_on_formater" => array(
			"fr" => "https://www.poleterresolide.fr/projets/en-cours/etalab/",
			"en" => "https://www.poleterresolide.fr/projets/en-cours/etalab/"
	),
	"language" => array(
	        "fr" => "Français",
			"en" => "English"
	),
	"url_language" => array(
			"fr" => $urlGet[0]. "?lang=fr",
			"en" => $urlGet[0]. "?lang=en"
	),
	"locale" => array(
		"fr" => "fr_FR",
		"en" => "en_US"
    ),
    "alternate" => array(
		"en" => "fr_FR",
		"fr" => "en_US"
    ));
function printer( $name){
	global $lang, $language;
	if( isset( $language[ $name ]) && isset( $language[ $name ][ $lang])){
		echo $language[$name][$lang];
	}else{
		echo $name;
	}
}