<?php
define('APP_URL', 'http://demo.formater');
define('IMAGES_URL', APP_URL . "/images/");
define('APP_DIR', __DIR__ );
define('DEMONSTRATIONS_FILE', APP_DIR . '/data/demonstrations.json');
define('TEMPLATE_DIR', realpath( APP_DIR.'/templates'));
define('INCLUDE_DIR', realpath( APP_DIR.'/include'));
define('ARTICLE_DIR', realpath( APP_DIR.'/article'));
define('CONTENT_DIR', realpath( APP_DIR.'/content'));

// load demonstrations informations
$content_file = file_get_contents( DEMONSTRATIONS_FILE);
$data = json_decode($content_file);