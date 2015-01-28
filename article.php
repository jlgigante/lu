<?php
require_once('include/config.php');
include("include/Utils.class.php");
include("content.php");

$rubrique = $_GET['rubrique'];
$id_article = $_GET['id'] ? $_GET['id'] : null;

$now = new DateTime();

if(!array_key_exists($rubrique, $menu)){	
	Utils::get404($smarty);
} 




function slugIt ($array){
    foreach($array['content'] as $k=>$v) {
        //echo $v['title'];
        $v['slug'] = Utils::format_url(strip_tags($v['title']));

        //var_dump( $v['slug'] );
        $cleaned_list['content'][]= $v;

    }
    //var_dump($cleaned_list);
    return $cleaned_list;
}



function prepareArray ($array, $currentId, $rubrique) {
    $cleaned_list = array();
    $now = new DateTime();


    foreach($array['content'] as $k=>$v){

        $v['slug'] = Utils::format_url(strip_tags($v['title']));

        if($v['id'] != $currentId){
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
    return $array;

}


switch ($rubrique) {
    case "videos":
        $article = $videos_content['content'][$_GET['id']];
        $videos = prepareArray($videos_content, $id_article, $rubrique);
        $articles = slugIt($articles_content);
        break;
    case "articles":

        $article = $articles_content['content'][$_GET['id']];

        $articles = prepareArray($articles_content, $id_article, $rubrique);
        $videos = slugIt($videos_content);


        break;
}



$smarty->assign('aside_articles', $articles);
$smarty->assign('aside_videos', $videos);
$smarty->assign('article', $article);
$smarty->assign('rubrique', $rubrique);
$smarty->display('article.tpl');

