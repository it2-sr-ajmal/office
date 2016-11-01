<!DOCTYPE html>
<html lang="en">

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{$project_title} | {$SECONDARY_SCRIPTS['title']}</title>

        {foreach $PRIMARY_SCRIPTS['script'] as $scr}
            <script src="{$RESOURCE_PATH}js/{$scr}.js"></script>
        {/foreach}
        {foreach $SECONDARY_SCRIPTS['script'] as $scr}
            <script src="{$RESOURCE_PATH}js/{$scr}.js"></script>
        {/foreach}
        {foreach $PRIMARY_SCRIPTS['style'] as $css}
            <link href="{$RESOURCE_PATH}css/{$css}.css" rel="stylesheet">
        {/foreach}
        {foreach $SECONDARY_SCRIPTS['style'] as $css}
            <link href="{$RESOURCE_PATH}css/{$css}.css" rel="stylesheet">
        {/foreach}
        
        <script src="{$RESOURCE_PATH}bootstrap/js/bootstrap.min.js"></script>
        <link href="{$RESOURCE_PATH}bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="{$RESOURCE_PATH}fonts/css/font-awesome.min.css" rel="stylesheet">
        <link href="{$RESOURCE_PATH}css/custom.css" rel="stylesheet">


        <script>
            NProgress.start();
        </script>

    </head>
    <body class="nav-md">


        <div class="container body">


            <div class="main_container">

{include file="layout/error_box.tpl" title="" name=""}