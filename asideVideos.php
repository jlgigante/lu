<?php
/**
 * Created by PhpStorm.
 * User: jlgigante
 * Date: 28/01/15
 * Time: 19:17
 */

require_once('include/config.php');
include("include/Utils.class.php");
include("content.php");

$rubrique = $_GET['rubrique'];
$id_article = if ($_GET['id']) ? $_GET['id'] : '';


$now = new DateTime();

if(!array_key_exists($rubrique, $menu)){
    Utils::get404($smarty);
}


function prepareArray ($array, $currentId, $rubrique) {
    $cleaned_list = array();
    $now = new DateTime();
    $slug = $array['slug'];
    foreach($array['content'] as $k=>$v){

        $v['slug'] = Utils::format_url(strip_tags($v['title']));

        if($v['id'] != $id_article && $rubrique != $slug){
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



$smarty->assign('aside_videos', prepareArray($videos_content, $id_article, 'videos'));



//var_dump($articles);
$smarty->display('_aside_videos.tpl');

