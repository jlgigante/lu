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


$lorem = "Vous voulez en savoir plus sur LU’Harmony ? Rendez-vous sur le stand LU au Salon International de l’Agriculture, du 21 février au 1er mars 2015. Et aussi sur <a href='http://www.lulechampdespossibles.fr' target=\"_blank\">www.lulechampdespossibles.fr</a>";


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

$art1 = "<strong>Du grain de blé au biscuit : tous engagés.</strong> Agriculteurs, organismes stockeurs, meuniers, sites de fabrication... Quand on sait que le blé est l’ingrédient principal de ses biscuits, on comprend pourquoi LU s’est entouré d’hommes et de femmes engagés, pour mettre en place la filière LU’Harmony. Chacun met son savoir-faire et son énergie à cultiver et à transformer le blé avec soin : ceux qui le cultivent selon la Charte LU’Harmony, ceux qui le collectent et le stockent dans des silos dédiés, ceux qui le transforment en farines et enfin ceux qui assemblent tous les ingrédients pour fabriquer les biscuits LU.

<strong>Une Charte exigeante à chaque étape de la culture du blé.</strong>
Cette filière, ce sont des milliers d’hommes et de femmes mobilisés au quotidien autour de 49 pratiques agricoles destinées à améliorer la culture du blé. Parmi elles, la rotation des parcelles, l’observation poussée du climat ou encore l’utilisation de technologies de pointe pour ne traiter qu’en derniers recours et de façon ciblée. Chaque intervention sur une parcelle de blé LU’Harmony est rigoureusement répertoriée et chaque année, des contrôles sont réalisés par un organisme indépendant sur 10 % des agriculteurs partenaires et 100 % des meuniers.

<strong>Des effets positifs sur la biodiversité locale.</strong> Ces pratiques agricoles contribuent à préserver la biodiversité locale ; c’est d’ailleurs un des engagements fondateurs de la Charte LU’Harmony.
Pourquoi ? Parce que 70 % des fruits et légumes (1) que nous mangeons dépendent directement des insectes pollinisateurs. Pour aller plus loin dans leur préservation et avoir une action positive directe, 3 % de la surface des champs de blé LU’Harmony sont dédiés à l’implantation d’une zone fleurie qui attire et nourrit une grande diversité de pollinisateurs. Et l’engagement porte ses fruits : en 5 ans la surface dédiée aux pollinisateurs est passée de 30 à 700 hectares.

<strong>Et demain.</strong> La Charte Harmony a essaimé en Europe. Par exemple, en Espagne les usines des biscuits Fontaneda utilisent des blés Harmony cultivés par des agriculteurs espagnols. Les bonnes pratiques n’ont pas fini de gagner du terrain !

Vous voulez en savoir plus sur LU’Harmony ? Rendez-vous sur le stand LU au Salon International de l’Agriculture, du 21 février au 1er mars 2015. Et aussi sur <a href='http://www.lulechampdespossibles.fr' target=\"_blank\">www.lulechampdespossibles.fr</a>


<small>(1) La FAO (l’Organisation de l’Alimentation et de l’Agriculture de l’ONU) estime que sur les 100 cultures qui produisent 90 % de l’alimentation mondiale, 71 dépendent de la pollinisation des abeilles.</small>
 ";


$art2 = "<strong>1.  Plus de 1 700 agriculteurs partenaires</strong> en France sélectionnés le plus près possible des sites de fabrication des biscuits LU.

<strong>2. 49 pratiques agricoles dans la charte LU’Harmony :</strong> parmi elles, la sélection des parcelles en fonction de la variété de blé, du précédent cultural et du travail du sol ou encore des pratiques spécifiques pour la biodiversité locale.

<strong>3. Des actions pour la biodiversité locale</strong> avec l’implantation à proximité des champs de blé LU’Harmony, d’espaces fleuris qui offrent aux insectes pollinisateurs le pollen et le nectar dont ils ont besoin pour se nourrir.

<strong>4. Un suivi du grain de blé au biscuit :</strong> une traçabilité bénéfique au consommateur qui connaît ainsi l’origine du blé utilisé dans les biscuits comme à l’agriculteur qui peut désormais connaître la destination finale de son blé.


<smal>Vous voulez en savoir plus sur LU’Harmony ? Rendez-vous sur le stand LU au Salon International de l’Agriculture, du 21 février au 1er mars 2015. Et aussi sur <a href='http://www.lulechampdespossibles.fr' target=\"_blank\">www.lulechampdespossibles.fr</a></smal>
";


$art3_1 = "Vous voulez en savoir plus sur LU’Harmony ? Rendez-vous sur le stand LU au Salon International de l’Agriculture, du 21 février au 1er mars 2015. Et aussi sur <a href='http://www.lulechampdespossibles.fr' target=\"_blank\">www.lulechampdespossibles.fr</a>";


$art3_2 = "<i>«Avec la filière LU’Harmony, j’ai pu visiter l’usine où est fabriqué le Véritable Petit Beurre et découvrir le devenir concret de mon blé. Une belle fierté!»</i>

<strong>Bruno Eon</strong>
Agriculteur en Pays de Loire.";




$art3_3 = "<i>«Je suis heureuse de contribuer à faire revenir les abeilles et les papillons sur mon territoire.»</i>


<strong>Elisabeth Bouchet</strong>
Agricultrice dans la Vienne.";


$articles_content = array('title' => 'Les conseils et astuces de la semaine',
    'slug' => 'articles',
    'content' => array(
        1 => array(
            'id' => 1,
            'title' => "Culture du blé : toute une filière se mobilise",
            'chapeau' => "Depuis 7 ans, LU  fédère toute la filière blé autour de pratiques agricoles plus respectueuses de l’environnement, de la biodiversité locale, et au service  de la qualité des biscuits. Bilan sur ces engagements longue portée.",
            'article' => $art1,
            "visuel" => array("1_1.jpg"),
            "video" => "",
            "date" => $semaine_1,
        ),

        2 => array(
            'id' => 2,
            'title' => "4 engagements autour de la culture du blé",
            'chapeau' => "La filière  LU’Harmony vise à cultiver le blé selon des pratiques plus respectueuses de l’environnement, de la biodiversité locale et au service de la qualité des biscuits.",
            'article' => $art2,
            "visuel" => array("2_1.jpg"),
            'video' => "",
            "date" => $semaine_1,
        ),

        3 => array(
            'id' => 3,
            'title' => "Pratiques agricoles LU’Harmony: bilan et témoignages",
            'chapeau' => "Découvrez le témoignage d’agriculteurs ainsi que les résultats terrain de la filière LU’Harmony.",
            'article' => $art3_1,
            'temoignages' => array($art3_1,$art3_2,$art3_3, ),
            "visuel" => array("3_1.jpg", "3_2.jpg","3_3.jpg","3_4.jpg"),
            'video' => "",
            "date" => $semaine_1,
        )

    )
);