<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html xmlns:fb="http://ogp.me/ns/fb#"><!--<![endif]-->
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>{$smarty.const.SITE_NAME}</title>
    <meta name="description" content="{$smarty.const.SITE_DESCRIPTION}">
    <!--         <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    {**}
    <!-- Bootstrap -->
    <link href="{$smarty.const.BASE_URL|escape}/css/bootstrap.css" rel="stylesheet" media="screen">
    <link href="{$smarty.const.BASE_URL|escape}/css/style.css" rel="stylesheet" media="screen">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="http://getbootstrap.com/docs-assets/js/html5shiv.js"></script>
    <script src="http://getbootstrap.com/docs-assets/js/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<script>
    {*{literal}*}
    {*(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){*}
    {*(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),*}
    {*m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)*}
    {*})(window,document,'script','//www.google-analytics.com/analytics.js','ga');*}
    {*ga('create', 'UA-51869433-1', 'nouvelobs.com');*}
    {*ga('send', 'pageview');*}
    {*{/literal}*}
</script>

<div id="fb-root"></div>
<script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/fr_FR/sdk.js#xfbml=1&appId=439120469495769&version=v2.0";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>