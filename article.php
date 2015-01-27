<?php
require_once('include/config.php');
include("include/Utils.class.php");


include("content.php");

$rubrique = $_GET['rubrique'];
$id_article = $_GET['id'];

$now = new DateTime();

if(!array_key_exists($rubrique, $menu)){	
	Utils::get404($smarty);
} 

switch ($rubrique) {
	case "videos":
		$articles = $videos_content;
		$plusArticles = $videos_content;
        $autresArticles = $articles_content;
		break;
	case "articles":
        $articles = $articles_content;
        $plusArticles = $articles_content;
        $autresArticles = $videos_content;

		break;
}


$cleaned_list = array();
foreach($articles['content'] as $k=>$v){
	if($v['id'] != $id_article){
		
		if(($pos = strpos($v['title'], ':') ) == true){
			$v['title'] = strstr($v['title'], ':', true);				
		}
		
		$v['slug'] = Utils::format_url(strip_tags($v['title']));
	
		if( isset($v['date']) ){
			$art_date = new DateTime($v['date']);
			if($art_date->getTimestamp() < $now->getTimestamp() ){
				$cleaned_list['content'][]= $v;		
			}
		} else {
			$cleaned_list['content'][]= $v;					
		}
	}	
}





//require_once 'mea.php';

//shuffle( $cleaned_list['content']);

krsort($cleaned_list['content']);

//$aside = Utils::contentManager($aside, $now, 0, 5);

$smarty->assign('aside', $cleaned_list);

var_dump($rubrique);

//$smarty->assign('cleaned_list', array_slice($cleaned_list['content'], 0, 2));
$article = $articles['content'][$_GET['id']];
$smarty->assign('articles', $articles);
$smarty->assign('article', $article);
$smarty->assign('rubrique', $rubrique);
$smarty->display('article.tpl');

