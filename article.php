<?php
require_once('include/config.php');
include("include/Utils.class.php");
include("content.php");

$rubrique = $_GET['rubrique'];
$id_article = $_GET['id'] ? $_GET['id'] : null;


var_dump($id_article);
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



function prepareArray ($array, $currentId, $rubrique) {
    $cleaned_list = array();
    $now = new DateTime();
    $slug = $array['slug'];

    foreach($array['content'] as $k=>$v){

        $v['slug'] = Utils::format_url(strip_tags($v['title']));


        if($v['id'] != $currentId && $rubrique != $slug){
            if(($pos = strpos($v['title'], ':') ) == true){
                $v['title'] = strstr($v['title'], ':', true);
            }

            if( isset($v['date']) ){
                $art_date = new DateTime($v['date']);
                if($art_date->getTimestamp() < $now->getTimestamp() ){
                    $cleaned_list['content'][]= $v;
                }
            } else {
                $cleaned_list['content'][]= $v;
            }
            $array = $cleaned_list;
        }
    }
    var_dump($array);
    return $array;

}

//var_dump(prepareArray($autresArticles, $id_article, $rubrique));

$smarty->assign('aside_articles', prepareArray($plusArticles, $id_article, $rubrique));
$smarty->assign('aside_videos', prepareArray($autresArticles, $id_article, $rubrique));



//var_dump($articles);
//$smarty->assign('cleaned_list', array_slice($cleaned_list['content'], 0, 2));
$article = $articles['content'][$_GET['id']];
//$smarty->assign('articles', $articles);
$smarty->assign('article', $article);
$smarty->assign('rubrique', $rubrique);
$smarty->display('article.tpl');

