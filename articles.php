<?php
require_once('include/config.php');
include("include/Utils.class.php");
//var_dump($baseUrl);

/* var_dump(basename($_SERVER['REQUEST_URI'])); */


include("content.php");

$now = new DateTime();

$rubrique = $_GET['rubrique'];

//$id_article = $_GET['id'];


$now = new DateTime();


if(!array_key_exists($rubrique, $menu)){	
	Utils::get404($smarty);
} 


switch ($rubrique) {
	case "votre-sommeil":
		$articles = $sommeil_content;
		$aside = $conseils_content;
		break;
	case "conseils-et-astuces":
		$articles = $conseils_content;
		$aside = $sommeil_content;
		break;
}



//PAGINATION
$current = 1;
if(isset($_GET['page'])) 
	$current = $_GET['page'];


$list_articles = Utils::contentManager($articles, $now);


$total_articles = count($list_articles['content']);

//var_dump($total_articles);

//$articles = Utils::contentManager($articles, $now, $start, $offset);

//$total_articles = 6;
$offset = 6;
$start = ceil(($current-1) * $offset);


//var_dump($start);


$pagination = Utils::getGenericPagination($current, $total_articles, $offset, 10, true, false);

// bidouille 
if($total_articles-$start <= $offset)
	$offset = $total_articles-$start;

$articles = Utils::contentManager($articles, $now, $start, $offset);

//var_dump($aside);

$aside = Utils::contentManager($aside, $now, $start, 3);





$smarty->assign('articles', $articles);
$smarty->assign('aside', $aside);

$smarty->assign('rubrique', $rubrique);

$smarty->assign('pagination', $pagination);


$customJS = array(
			'custom_articles.js', 
			'jquery-scrollto.js',
			);
$smarty->assign('customJS', $customJS);

$smarty->display('articles.tpl');

