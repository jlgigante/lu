<?php
require_once('include/config.php');
include("include/Utils.class.php");
include("content.php");


$rubrique = 'accueil';
if(!array_key_exists($rubrique, $menu)){	
	Utils::get404($smarty);
} 
//

$now = new DateTime();

$articlesEdito = Utils::contentManager($articles_content, $now, 0, 4);
$articlesVideos = Utils::contentManager($videos_content, $now, 0, 4);

$smarty->assign('aside', $articlesVideos);
$smarty->assign('article', $articlesEdito);
$smarty->display('index.tpl');