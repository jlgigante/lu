<?php

$semaine_1 = "2014-06-30";
$semaine_2 = "2014-07-09";
$semaine_3 = "2015-07-15";
$semaine_4 = "2015-07-22";
$semaine_5 = "2015-07-30";


/*
 * MEnu
 */

$menu = array(
    'accueil' => 'Acceuil',
    'videos' => 'Videos',
    'articles' => 'Articles',
);

$smarty->assign('menu', $menu);


$lorem = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc cursus magna vel enim convallis, eget consectetur neque pretium. Duis porta tellus vel nibh euismod, vitae scelerisque sapien vehicula. Suspendisse ut imperdiet neque, ut laoreet arcu. Curabitur interdum placerat massa ac varius. Aenean dignissim lacinia rhoncus. Aliquam erat volutpat. Curabitur quis eros in nulla dapibus consequat. Phasellus at nibh id nisi ornare euismod. Donec non laoreet orci. Etiam lacinia pellentesque purus, pellentesque tincidunt massa venenatis luctus. Vestibulum commodo eros id auctor congue. Morbi nec placerat elit. Cras sem tortor, sollicitudin a consequat eu, aliquet ut neque. Morbi vulputate neque id leo.";


$videos_content = array('title' => 'Videos',
    'slug' => 'videos',
    'content' => array(
        1 => array(
            'id' => 1,
            'title' => "Découvrez d’où vient le blé des biscuits LU",
            'chapeau' => "",
            'article' => $lorem,
            "visuel" => array("1_1.jpg"),
            "video" => "UMpHb61F2Vk",
            "date" => $semaine_1,
        ),

        2 => array(
            'id' => 2,
            'title' => "Comprendre la charte LU’Harmony en 30 secondes",
            'chapeau' => "",
            'article' => $lorem,
            "visuel" => array("2_1.jpg"),
            //Kim Novak dans Vertigo :
            'video' => "gcm4y_-ZuEI",
            "date" => $semaine_1,
        ),


        3 => array(
            'id' => 3,
            'title' => "Que fait Lu pour la biodiversité ?",
            'chapeau' => "",
            'article' => $lorem,
            "visuel" => array("3_1.jpg"),
            "video_title" => "La chanson de Zorino",
            'video' => "_IYVrngIOas",
            "date" => $semaine_1,
        ),


        4 => array(
            'id' => 4,
            'title' => "Du grain de blé au biscuit LU",
            'chapeau' => "",
            'article' => $lorem,
            /* 								'video_title'	=>	"title video 5", */
            "visuel" => array("4_1.jpg"),
            'video' => "AMGhNUQHwaQ",
            "date" => $semaine_1,
        )
    )
);

/**
 * CONSEILS
 *
 */

$articles_content = array('title' => 'Les conseils et astuces de la semaine',
    'slug' => 'articles',
    'content' => array(
        1 => array(
            'id' => 1,
            'title' => "Culture du blé : toute une filière se mobilise",
            'chapeau' => "",
            'article' => "Quand on sait que le blé est l’ingrédient principal de ses biscuits, on comprend pourquoi LU s’est entouré d’hommes et de femmes engagés, pour mettre en place la filière LU’Harmony.",
            "visuel" => array("1_1.jpg"),
            "video" => "",
            "date" => $semaine_1,
        ),

        2 => array(
            'id' => 2,
            'title' => "4 engagements autour de la culture du blé",
            'chapeau' => "",
            'article' => "1. Plus de 1 700 agriculteurs partenaires en France sélectionnés le plus près possible des sites de fabrication des biscuits LU.\n

2. 49 pratiques agricoles dans la charte LU’Harmony : parmi elles, la sélection des parcelles en fonction de la variété de blé, du précédent cultural et du travail du sol ou encore des pratiques spécifiques pour la biodiversité locale.\r\n

3. Des actions pour la biodiversité locale avec l’implantation à proximité des champs de blé LU’Harmony, d’espaces fleuris qui offrent aux insectes pollinisateurs le pollen et le nectar dont ils ont besoin pour se nourrir.\r\n

4. un suivi du grain de blé au biscuit : une traçabilité bénéfique au consommateur qui connaît ainsi l’origine du blé utilisé dans les biscuits comme à l’agriculteur qui peut désormais connaître la destination finale de son blé.",
            "visuel" => array("2_1.jpg"),
            'video' => "",
            "date" => $semaine_1,
        ),

        3 => array(
            'id' => 3,
            'title' => "Pratiques agricoles LU’Harmony : bilan et témoignages",
            'chapeau' => "",
            'article' => "S’il est important de renouveler sa literie plusieurs fois dans une vie pour bien dormir, cela est également vrai pour la couette et les oreillers. Eux aussi perdent progressivement leurs qualités en s’affaissant ou en perdant de la chaleur. Quand vient le moment de renouveler son lit, autant donc faire d’une pierre deux coups pour être sûr de savourer le meilleur des sommeils. ",
            "visuel" => array("2_1.jpg"),
            'video' => "",
            "date" => $semaine_1,
        )

    )
);