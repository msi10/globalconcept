<?php
/*
Template Name: Prayer Plan
*/
?>

<?php get_header(); ?>
	
    <style media="all" type="text/css" style="display:none">
            /* ELEMENTS */
           
            /* OBJECTS */
            div.aligner {
                margin: 0px auto;
            }
            div.main {
                width: inherit;
                float: left;
                clear: both;
                padding: 20px 0px;
            }
            div.leftwrapper {
                width: 280px;
                float: left;
                clear: left;
                margin-right: 20px;
            }
            div.left {
                width: 280px;
                float: left;
                clear: both;
                background-color: #252525;
                -webkit-box-shadow: 0px 0px 3px 0px #b3b3b3;
                box-shadow: 0px 0px 3px 0px #b3b3b3;
            }
            div.left: hover {
                -webkit-box-shadow: 0px 0px 6px 0px #999999;
                box-shadow: 0px 0px 6px 0px #999999;
            }
            div.leftboxes,
            div.rightboxes {
                width: 280px;
                float: left;
                clear: both;
            }
            div.leftboxes div,
            div.rightboxes div {
                width: 280px;
                float: left;
                clear: both;
                margin-top: 20px;
                -webkit-box-shadow: 0px 0px 3px 0px #b3b3b3;
                box-shadow: 0px 0px 3px 0px #b3b3b3;
            }
            div.leftboxes div: hover, div.rightboxes div: hover {
                -webkit-box-shadow: 0px 0px 6px 0px #999999;
                box-shadow: 0px 0px 6px 0px #999999;
            }
            div.bismillah {
                width: 100%;
                float: left;
                clear: both;
                text-align: center;
                color: #666666;
                font-size: 11px;
                padding: 16px 0px;
                border-bottom: 1px solid #383838;
            }
            div.bismillah i {
                font-family: 'OSRI', Arial, sans-serif;
            }
            
            div.center {
                float: left;
                clear: none;
            }
            div.right,
            div.scright,
            div.mcright {
                width: 280px;
                float: left;
                clear: right;
                text-align: left;
                margin-left: 20px;
            }
            
            div.maincontent {
             /*   width: 640px; */
                float: left;
                clear: both;
                text-align: left;
                margin: 0px 20px 40px 20px;
            }
            div.maincontent.newscontent {
                width: 700px;
                margin: 0px;
            }
            div.maincontent p {
                font-size: 14px;
                line-height: 180%;
                margin-bottom: 20px;
            }
            div.maincontent p a,
            div.maincontent ul li a {
                color: #333333;
                text-decoration: underline;
            }
            div.maincontent span.important {
                display: block;
                padding: 20px;
                background-color: #f0f0f0;
                border-left: 10px solid #dbdbdb;
            }
            div.maincontent ul {
                list-style-type: square;
                font-size: 14px;
                line-height: 180%;
                margin-bottom: 20px;
            }
            div.maincontent ol {
                list-style-type: decimal;
                font-size: 14px;
                line-height: 180%;
                margin-bottom: 20px;
            }
            div.maincontent ul li,
            div.maincontent ol li {
                margin-left: 20px;
            }
            ul#naimggal {
                list-style-type: none;
            }
            ul#naimggal li {
                margin: 0px 1px 1px 0px;
            }
            div.maincontent h1,
            div.maincontent h2,
            div.maincontent h3,
            div.maincontent h4,
            div.maincontent h5,
            div.maincontent h6 {
                line-height: 140%;
                margin-bottom: 20px;
            }
            div.maincontent h1 {
                font-size: 28px;
            }
            div.maincontent h2 {
                font-size: 26px;
            }
            div.maincontent h3 {
                font-size: 24px;
            }
            div.maincontent h4 {
                font-size: 22px;
            }
            div.maincontent h5 {
                font-size: 20px;
            }
            div.maincontent h6 {
                font-size: 18px;
            }
            div.scleft {
                width: 100%;
                min-height: 300px;
                height: auto !important;
                height: 300px;
                float: left;
                clear: both;
            }
            div.mcleft {
                width: 1000px;
                min-height: 300px;
                height: auto !important;
                height: 300px;
                float: left;
                clear: left;
                background-color: #ffffff;
                -webkit-box-shadow: 0px 0px 3px 0px #b3b3b3;
                box-shadow: 0px 0px 3px 0px #b3b3b3;
            }
            div.scright {
                min-height: 300px;
                height: auto !important;
                height: 300px;
                display: none;
            }
            
            div.resultlist {
                width: 100%;
                float: left;
                clear: both;
                border-top: 1px solid #ebebeb;
            }
            div.resultitem {
                width: 100%;
                float: left;
                clear: both;
                border-bottom: 1px solid #ebebeb;
                padding: 20px 0px 10px 0px;
            }
            div.resultitem h2 {
                font-size: 20px;
                margin: 0px !important;
            }
            div.resultitem h2 a {
                color: #333333;
            }
            div.resultitem h2 a: hover {
                text-decoration: underline;
            }
            div.resultitem p {
                margin-bottom: 10px;
            }
            div.resultitem span.hit {
                background-color: #ebebeb;
            }
            div.resultbrowse {
                width: 100%;
                float: left;
                clear: both;
                text-align: center;
                font-size: 16px;
                padding-top: 20px;
            }
            div.resultbrowse a {
                display: inline-block;
                padding: 7px 8px;
                margin: 0px 1px;
                color: #333333;
            }
            div.resultbrowse a.current {
                font-family: 'OSS', Arial, sans-serif;
                background-color: #ebebeb;
                -webkit-border-radius: 5px;
                border-radius: 5px;
            }
            div.resultbrowse a.next {
                display: none;
            }
            div.leftboxes a,
            div.rightboxes a {
                width: 280px;
                height: 162px;
                float: left;
                clear: both;
                display: block;
                text-indent: -9999px;
                overflow: hidden;
                background-repeat: no-repeat;
                background-position: top left;
            }
           
            div.worldwide {
                width: 100%;
                float: left;
                clear: both;
                margin-top: 20px;
                font-size: 14px;
                line-height: 140%;
            }
            div.wwitem {
                width: 25%;
                float: left;
                clear: none;
                text-align: center;
                margin-bottom: 30px;
            }
            div.wwitem a {
                width: 100%;
                display: block;
                padding-top: 64px;
                background-repeat: no-repeat;
                background-position: top center;
            }
            div.wwitem a: hover {
                text-decoration: underline;
            }
            div.contactform {
                width: 100%;
                float: left;
                clear: both;
                font-size: 14px;
            }
            div.contactform div.formrow {
                width: 100%;
                float: left;
                clear: both;
                padding-bottom: 6px;
            }
            div.contactform span.labelspan {
                min-width: 100px;
                width: auto !important;
                max-width: 100%;
                float: left;
                clear: left;
                display: block;
                padding: 7px 0px;
                line-height: 140%;
                font-family: 'OSR', Arial, sans-serif;
            }
            div.contactform div.radiobtngroup {
                width: 300px;
                float: left;
                clear: right;
                padding-top: 7px;
            }
            div.contactform input[type="radio"] {
                width: 30px;
                float: left;
                clear: left;
                margin-top: 3px;
            }
            div.contactform div.radiobtngroup label {
                width: 270px;
                float: left;
                clear: right;
                display: block;
                padding-bottom: 6px;
                line-height: 140%;
            }
            div.contactform input[type="text"] {
                width: 300px;
                height: 20px;
                float: left;
                clear: right;
                padding: 6px;
                border: none;
                background-color: #ebebeb;
                font-size: 14px;
                font-family: 'OSL', Arial, sans-serif;
                color: #252525;
            }
            div.contactform textarea {
                width: 290px;
                min-width: 290px;
                max-width: 290px;
                height: 140px;
                min-height: 140px;
                max-height: 140px;
                padding: 5px;
                border: none;
                background-color: #ebebeb;
                font-size: 14px;
                font-family: 'OSL', Arial, sans-serif;
                color: #252525;
                float: left;
            }
            div.contactform textarea#versand {
                margin-left: 100px;
                clear: both;
            }
            div.contactform input[type="submit"] {
                width: 160px;
                height: 40px;
                float: left;
                clear: both;
                border: none;
                background-color: #999999;
                font-size: 14px;
                font-family: 'OSR', Arial, sans-serif;
                text-transform: uppercase;
                color: #ffffff;
                cursor: pointer;
                margin-left: 240px;
            }
            div.contactform input[type="submit"]: hover {
                background-color: #252525;
            }
            .tx-wecmap-map .infotitle {
                font-family: 'OSS', Arial, sans-serif;
                font-weight: normal;
            }
            a.callbutton {
                font-family: 'OSR', Arial, sans-serif;
                font-size: 28px;
                cursor: text;
                padding: 5px 10px;
                background-color: #ebebeb;
            }
            div.mlavideoframe {
                width: 100%;
                float: left;
                clear: both;
                position: relative;
                padding-bottom: 75%;
                padding-top: 30px;
                margin-bottom: 30px;
                height: 0;
                overflow: hidden;
            }
            div.mlavideoframe iframe {
                width: 100%;
                height: 100%;
                top: 0;
                left: 0;
                position: absolute;
            }
            a.wt_csstooltip,
            a.wt_csstooltip: link, a.wt_csstooltip: visited, a.wt_csstooltip: focus, a.wt_csstooltip: active, a.wt_csstooltip: hover, p a.wt_csstooltip, p a.wt_csstooltip: link, p a.wt_csstooltip: visited, p a.wt_csstooltip: focus, p a.wt_csstooltip: active, p a.wt_csstooltip: hover {
                text-decoration: none;
                border-bottom: 1px dotted;
            }
            a.wt_csstooltip: hover dfn {
                display: block !important;
                width: 280px;
                background-color: #252525;
                font-size: 12px;
                line-height: 140%;
                overflow: visible;
                padding: 6px 10px 10px 10px;
            }
            a.wt_csstooltip span.hidegt {
                font-size: 22px;
                color: #252525;
                margin: 10px 0px 0px 270px;
            }
            /* MEDIA-QUERIES */
            @media screen and (min-width: 1600px) {
                div.aligner {
                    width: 1600px;
                }
                div.center {
                    width: 1000px;
                }
            }
            @media screen and (max-width: 1600px) {
                div.aligner {
                    width: 1300px;
                }
                div.center {
                    width: 1000px;
                }
                div.right {
                    display: none;
                }
                div.scleft {
                    width: 700px;
                    clear: left;
                }
                div.boxwrapper {
                    width: 720px;
                }
                div.fsstartbox,
                div.newsstartbox {
                    width: 340px;
                    height: 362px;
                }
                div.fsstartimg,
                div.newsstartimg {
                    width: 340px;
                    height: 212px;
                    clear: both;
                }
                div.fsstarttxt,
                div.newsstarttxt {
                    width: 320px;
                    padding: 10px;
                    text-align: center;
                    clear: both;
                }

                div.fsstarttxt td,
                div.newsstarttxt td {
                    width: 320px;
                }
                div.libstartbox {
                    width: 700px;
                }
                div.libstarttxt,
                div.libstarttxt td {
                    width: 518px;
                }
                div.medialibstartbox {
                    width: 340px;
                    height: 322px;
                }
                div.medialibstartimg {
                    width: 340px;
                    height: 212px;
                    clear: both;
                }
                div.medialibstarttxt {
                    width: 320px;
                    height: 90px;
                    padding: 10px;
                    text-align: center;
                    clear: both;
                }
                div.scright {
                    display: block;
                }
                div.imggalstartbox {
                    width: 340px;
                    height: 152px;
                }
                div.imggalstartimg {
                    width: 152px;
                    height: 152px;
                    clear: left;
                }
                div.imggalstarttxt {
                    width: 168px;
                    height: 122px;
                    padding: 20px 10px 10px 10px;
                    text-align: left;
                    clear: right;
                }
                div.imggalstarttxt h3 {
                    font-size: 14px;
                }
            }
            @media screen and (max-width: 1300px) {
                div.aligner {
                    width: 1000px;
                }
                div.left {
                    display: none;
                }
                div.top {
                    display: block;
                }
                div.topnav {
                    display: block;
                }
                div.scrightbottom {
                    display: block;
                }
                div.mobtop {
                    display: none;
                }
                div.mobintro {
                    display: none;
                }
                div.innerrightnav {
                    display: none;
                }
                div.mcright {
                    display: block;
                }
                div.mcleft {
                    width: 700px;
                }
                div.maincontent {
                    margin: 30px;
                }
                div.leftboxes {
                    display: none;
                }
            }
            @media screen and (max-width: 990px) {
                body {
                    width: 100%;
                }
                div.aligner {
                    width: 100%;
                }
                div.scright {
                    display: none;
                }
                div.top {
                    display: none;
                }
                div.topnav {
                    display: none;
                }
                div.mobtop {
                    display: block;
                }
                div.mobintro,
                div.mobintrofixed {
                    display: block;
                }
                div.mobbottom {
                    display: block;
                }
                div.center {
                    width: 100%;
                }
                div.main {
                    padding: 0px;
                }
                div.startslider {
                    width: 100%;
                    height: auto;
                    margin-bottom: 10px;
                    -webkit-box-shadow: none;
                    box-shadow: none;
                }
                div.startslider: hover {
                    -webkit-box-shadow: none;
                    box-shadow: none;
                }
                div.startslider ul li a img {
                    width: 100%;
                    height: auto;
                    float: left;
                    clear: both;
                }
                div.startslider div.bx-controls {
                    display: none;
                }
                div.startslider: hover div.bx-controls {
                    display: none;
                }
                div.startslider div.bx-caption {
                    width: 100%;
                    height: auto;
                    font-size: 16px;
                    line-height: 140%;
                }
                div.startslider div.bx-caption span {
                    width: 94%;
                    padding: 3%;
                }
                div.scleft {
                    width: 100%;
                    clear: both;
                }
                div.boxwrapper {
                    width: 100%;
                }
                div.fsstartbox {
                    width: 100%;
                    height: auto;
                    margin: 0px 0px 4px 0px;
                }
                div.fsstartimg {
                    width: 40%;
                    height: auto;
                    clear: left;
                }
                div.fsstartimg img {
                    height: auto;
                }
                div.fsstarttxt {
                    width: 56%;
                    height: 98%;
                    padding: 1% 2%;
                    clear: right;
                    text-align: left;
                }
                div.fsstarttxt table,
                div.fsstarttxt td {
                    width: 100%;
                    height: 100%;
                }
                div.fsstarttxt h3 {
                    font-size: 14px;
                    padding: 0px;
                }
                div.fsstarttxt span.category,
                div.fsstarttxt span.date {
                    font-size: 12px;
                }
                div.newsstartbox {
                    width: 100%;
                    height: auto;
                    margin: 0px 0px 4px 0px;
                }
                div.newsstartimg {
                    width: 40%;
                    height: auto;
                    clear: left;
                }
                div.newsstartimg img {
                    height: auto;
                }
                div.newsstarttxt {
                    width: 56%;
                    height: 98%;
                    padding: 1% 2%;
                    clear: right;
                    text-align: left;
                }
                div.newsstarttxt table,
                div.newsstarttxt td {
                    width: 100%;
                    height: 100%;
                }
                div.newsstarttxt h3 {
                    font-size: 14px;
                    padding: 0px;
                }
                div.newsstarttxt span.category,
                div.newsstarttxt span.date {
                    font-size: 12px;
                }
                div.libstartbox {
                    width: 100%;
                    height: auto;
                    margin: 0px 0px 4px 0px;
                }
                div.libstartimg {
                    width: 30%;
                    height: auto;
                    clear: left;
                }
                div.libstartimg img {
                    width: 80%;
                    height: auto;
                    margin: 10%;
                }
                div.libstarttxt {
                    width: 66%;
                    height: 98%;
                    padding: 1% 2%;
                    clear: right;
                    text-align: left;
                }
                div.libstarttxt table,
                div.libstarttxt td {
                    width: 100%;
                    height: 100%;
                }
                div.libstarttxt h3 {
                    font-size: 14px;
                    padding: 0px;
                }
                div.libstarttxt span.category,
                div.libstarttxt span.date {
                    font-size: 12px;
                }
                div.medialibstartbox {
                    width: 100%;
                    height: auto;
                    margin: 0px 0px 4px 0px;
                }
                div.medialibstartimg {
                    width: 40%;
                    height: auto;
                    clear: left;
                }
                div.medialibstartimg img {
                    height: auto;
                }
                div.medialibstarttxt {
                    width: 56%;
                    height: 98%;
                    padding: 1% 2%;
                    clear: right;
                    text-align: left;
                }
                div.medialibstarttxt h3 {
                    font-size: 14px;
                    padding: 0px;
                }
                div.medialibstarttxt span.category {
                    font-size: 12px;
                }
                div.imggalstartbox {
                    width: 100%;
                    height: auto;
                    margin: 0px 0px 4px 0px;
                }
                div.imggalstartimg {
                    width: 30%;
                    height: auto;
                    clear: left;
                }
                div.imggalstartimg img {
                    height: auto;
                }
                div.imggalstarttxt {
                    width: 66%;
                    height: 98%;
                    padding: 1% 2%;
                    clear: right;
                    text-align: left;
                }
                div.imggalstarttxt h3 {
                    font-size: 14px;
                    padding: 0px;
                }
                div.imggalstarttxt span.category {
                    font-size: 12px;
                }
                div.mcright {
                    display: none;
                }
                div.mcleft {
                    width: 100%;
                    -webkit-box-shadow: none;
                    box-shadow: none;
                }
                div.maincontent {
                    width: 90%;
                    margin: 20px 5%;
                }
                div.newspagebrowser span.pbinactive {
                    width: 50%;
                    margin: 0px;
                }
                div.newspagebrowser span.pbinactive a {
                    width: 100%;
                    -webkit-box-shadow: none;
                    box-shadow: none;
                }
                div.maincontent p,
                div.maincontent ol,
                div.maincontent ul {
                    font-size: 16px;
                }
                div.maincontent p img {
                    width: 100% !important;
                    height: auto !important;
                }
                div.newsletterorder label,
                div.newsletterunorder label {
                    width: 100%;
                    padding-bottom: 6px;
                    clear: both;
                }
                div.newsletterorder input[type="text"],
                div.newsletterunorder input[type="text"] {
                    width: 90%;
                    padding-left: 5%;
                    padding-right: 5%;
                    margin-bottom: 6px;
                    clear: both;
                }
                div.newsletterorder input[type="submit"],
                div.newsletterunorder input[type="submit"] {
                    width: 100%;
                    padding-left: 5%;
                    padding-right: 5%;
                    margin-bottom: 6px;
                    clear: both;
                }
                div.searchbox div.searchfield {
                    width: 92%;
                    clear: both;
                }
                div.searchbox div.searchbutton {
                    width: 97%;
                    clear: both;
                }
                div.searchbox div.searchfield input {
                    -webkit-border-radius: 5px;
                    border-radius: 5px;
                }
                div.searchbox div.searchbutton input {
                    background-color: #252525;
                    margin-top: 6px;
                }
                div.leftboxes {
                    display: none;
                }
                div.worldwide {
                    font-size: 16px;
                }
                div.wwitem {
                    width: 50%;
                }
                div.contactform {
                    font-size: 16px;
                }
                div.contactform span.labelspan {
                    width: 100%;
                    clear: both;
                }
                div.contactform div.radiobtngroup {
                    width: 100%;
                    clear: both;
                }
                div.contactform input[type="text"] {
                    width: 95%;
                    clear: both;
                }
                div.contactform input[type="radio"] {
                    width: 10%;
                }
                div.contactform div.radiobtngroup label {
                    width: 85%;
                }
                div.contactform textarea#versand {
                    margin: 0px;
                }
                div.contactform textarea {
                    width: 95%;
                    min-width: 95%;
                    max-width: 95%;
                }
                div.contactform input[type="submit"] {
                    width: 100%;
                    background-color: #252525;
                    margin: 0px;
                }
                a.callbutton {
                    font-family: 'OSR', Arial, sans-serif;
                    font-size: 28px;
                    padding: 5px 10px;
                    background-color: #ebebeb;
                }
            }
           
    </style>
    <style media="all" type="text/css" style="display:none">
        body.ps-active,
        body.ps-building,
        div.ps-active,
        div.ps-building {
            background: #000;overflow:hidden;}body.ps-active *,div.ps-active *{-webkit-tap-highlight-color:rgba(255,255,255,0);display:none;}body.ps-active *:focus,div.ps-active *:focus{outline:0;}/**
            div.ps-document-overlay {
                background: #000;}/**
                div.ps-uilayer {
                    background: #000;cursor:pointer;}/**
                    div.ps-zoom-pan-rotate {
                        background: #000;}div.ps-zoom-pan-rotate *{display:block;}/**
                        div.ps-carousel-item-loading {
                            background: url(http://www.ahmadiyya.de/fileadmin/template/css/img/photoswipe-loader.gif) no-repeat center center;}div.ps-carousel-item-error{background:url(http://www.ahmadiyya.de/fileadmin/template/css/img/photoswipe-error.gif) no-repeat center center;}/**
                            /**/
                            /**/
                          
                              
    </style>
    <style media="all" type="text/css" style="display:none">
        div#salatlocation {
            width: 100%;
            float: left;
            clear: both;
            margin-top: 20px;
            padding-bottom: 10px;
        }
        div#salatlocation label {
            font-family: 'OSR', Arial, sans-serif;
            font-size: 14px;
            padding: 6px 10px 0px 0px;
            display: block;
            float: left;
            clear: left;
        }
        div#salatlocation input#address {
            width: 260px;
            height: 20px;
            padding: 6px;
            float: left;
            clear: none;
            font-family: 'OSL', Arial, sans-serif;
            font-size: 14px;
            border: none;
            background-color: #ebebeb;
        }
        div#salatlocation input.submit {
            height: 32px;
            padding: 0px 6px;
            float: left;
            clear: right;
            border: none;
            font-family: 'OSR', Arial, sans-serif;
            font-size: 14px;
            background-color: #999999;
            color: #ffffff;
            cursor: pointer;
        }
        div#salatlocation input.submit:hover {
            background-color: #252525;
        }
        div#salatlocinfo {
            width: 100%;
            margin-bottom: 20px;
            float: left;
            clear: both;
        }
        div#salatlocinfo ul {
            font-family: 'OSL', Arial, sans-serif;
            font-size: 12px;
            list-style-type: none;
        }
        div#salatlocinfo ul li {
            margin-left: 0px;
        }
        div#salatlocinfo ul li a {
            font-family: 'OSR', Arial, sans-serif;
            text-decoration: underline;
        }
        div#salatmap {
            width: 100%;
            height: 460px;
            float: left;
            clear: both;
            border: 1px solid #252525;
        }
        div#salatplan {
            width: 100%;
            float: left;
            clear: both;
            margin: 40px 0px 0px 0px;
        }
        div#salatheader {
            width: 100%;
            height: 40px;
            float: left;
            clear: both;
        }
        div#salatheader table {
            width: 100%;
        }
        div#salatheader td.salatheaderleft,
        div#salatheader td.salatheaderright {
            width: 39%;
            font-size: 22px;
        }
        div#salatheader td.caption {
            width: 22%;
            font-family: 'OSR', Arial, sans-serif;
            font-size: 22px;
            text-align: center;
        }
        div#salattimes {
            width: 100%;
            float: left;
            clear: both;
        }
        table#timetable {
            width: 100%;
        }
        table#timetable tr.head-row {
            text-align: center;
            font-family: 'OSS', Arial, sans-serif;
            font-size: 14px;
            background-color: #e5e5e5;
        }
        table#timetable tr.head-row td {
            padding: 10px 0px;
        }
        table#timetable tr {
            border-bottom: 1px solid #b3b3b3;
        }
        table#timetable td {
            font-size: 14px;
            padding: 6px 0px;
            text-align: center;
        }
        table#timetable tr.today-row {
            color: #ffffff;
            background-color: #000000;
        }
		 table#timetable tr.today-row  td{
            color: #ffffff;
            background-color: #000000;
        }
        div#salatprintbutton {
            width: 100%;
            margin: 20px 0px 0px 0px;
            float: left;
            clear: both;
            text-align: center;
        }
        div#salatprintbutton input {
            height: 32px;
            padding: 0px 6px;
            border: none;
            font-family: 'OSR', Arial, sans-serif;
            font-size: 14px;
            background-color: #999999;
            color: #ffffff;
            cursor: pointer;
        }
        div#salatprintbutton input:hover {
            background-color: #252525;
        }
     
        div#salatprinthead {
            width: 920px;
            height: 140px;
            margin: 30px 0px 0px 0px;
            float: left;
            clear: both;
          /*  display: none; */
            padding: 0px 0px 50px 0px;
            border-bottom: 1px solid #000000;
        }
        div#sphbismillah {
            width: 920px;
            height: 40px;
            margin: 0px 0px 10px 0px;
            float: left;
            clear: both;
            text-align: center;
            font-family: Arial, sans-serif;
        }
        div#sphmain {
            width: 920px;
            height: 100px;
            float: left;
            clear: both;
        }
        div#sphlogo {
            width: 456px;
            height: 100px;
            float: left;
            clear: left;
        }
        div#sphlogoleft {
            width: 120px;
            height: 100px;
            float: left;
            clear: left;
        }
        div#sphlogoright {
            font-family: Arial, sans-serif;
            padding: 16px 0px 0px 0px;
            font-size: 26px;
            line-height: 130%;
        }
        div#sphlogoright b {
            font-family: Arial, sans-serif;
            font-weight: bold;
        }
        div#sphslogan {
            width: 456px;
            padding: 30px 0px 0px 0px;
            float: left;
            clear: right;
            text-align: right;
            font-family: Arial, sans-serif;
            font-size: 16px;
        }
        div#sphloctitle {
            width: 920px;
            float: left;
            clear: both;
            text-align: center;
            font-family: Arial, sans-serif;
            font-size: 16px;
            line-height: 160%;
            margin: 20px 0px 0px 0px;
          /*  display: none; */
        }
        div#sphloctitle span.printloctitle {
            font-weight: bold;
        }
        div#salatprintfooter {
            width: 920px;
            float: left;
            clear: both;
            text-align: center;
            font-family: Arial, sans-serif;
            font-size: 13px;
            line-height: 160%;
            margin: 20px 0px 0px 0px;
          /*  display: none; */
        }
        div#salatprintfooter i {
            text-decoration: underline;
        }
        /**/
        @media screen and (max-width: 990px) {
            div#salatmap {
                height: 360px;
            }
            div#salatlocation label {
                width: 100%;
                padding: 6px 0px;
                clear: both;
            }
            div#salatlocation input#address {
                width: 95%;
                margin-bottom: 6px;
                clear: both;
            }
            div#salatlocation input.submit {
                width: 100%;
                margin-bottom: 6px;
                clear: both;
                background-color: #252525;
            }
            div#salatlocinfo ul {
                margin-left: 0px;
            }
            div#salatlocinfo ul li {
                margin-left: 0px;
            }
            div#salatheader td.salatheaderleft,
            div#salatheader td.salatheaderright {
                width: 15%;
            }
            div#salatheader td.caption {
                width: 70%;
            }
            table#timetable tr>td: nth-child(1) {
                display: none;
            }
            table#timetable tr>td: nth-child(4) {
                display: none;
            }
            div#salatprintbutton input {
                background-color: #252525;
            }
        }
		
	#sphloctitle,#salatprinthead{ 
display:none;
}	
@media print {  
footer , header , nav , #salatlocinfo , #c959, #salatlocation , #salatmap,.salatheaderleft,.salatheaderright,#salatprintbutton{
	display:none;
	}
	#sphloctitle,#salatprinthead{ 
display: block;

}
}

    </style>
     <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery-1.9.0.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.PrintArea.js"></script>
    
    
    <script language="javascript" type="text/javascript">
        function printDiv(divID) {
            //Get the HTML of div
            var divElements = document.getElementById(divID).innerHTML;
            //Get the HTML of whole page
            var oldPage = document.body.innerHTML;

            //Reset the page's HTML with div's HTML only
            document.body.innerHTML = 
              "<html><head><title></title></head><body>" + 
              divElements + "</body>";

            //Print Page
            window.print();

            //Restore orignal HTML
            document.body.innerHTML = oldPage;

          
        }
    </script>
    
    <section id="three-third">
    	<article>
			
            
           <div class="aligner">
        <div class="main">
            
            
            
            
            <div class="center">
                <div class="startcontent">
                    <div class="scmain">
                        <div class="">
                            <div class="maincontent">
                                <div id="c959" class="csc-default">
                                    <div class="csc-header csc-header-n1">
                                        <h1 class="csc-firstHeader"><?php _e( 'Salat Timings', 'globalconcept'  ) ?></h1>
                                    </div>
                                </div>
                                <a id="c961"></a>
                                <div id="salatlocinfo">
                                    <ul>
                                        <li><b><?php _e( 'Information about how to use the Salat Time Calculator:' , 'globalconcept' ) ?></b>
                                        </li>
                                        <li>» <?php _e( 'Please type the location in the form below.' , 'globalconcept' ) ?></li>
                                        <li>» <?php _e( 'You may compare your typed location with the location displayed on the map.', 'globalconcept'  ) ?></li>
                                        <li>» <?php _e( 'The line on the map indicates the direction to the Kaaba (Mecca).', 'globalconcept'  ) ?></li>
                                        <li>» <?php _e( 'Please note that there may be minor variations in the calculated timings.', 'globalconcept'  ) ?></li>
                                                                            </ul>
                                </div>
                                <a id="c960"></a>
                                <div id="salatlocation">
                                    <form onsubmit="codeAddress(); return false;">
                                        <label><?php _e( 'Your Location:', 'globalconcept'  ) ?></label>
                                        <input id="address" type="text" value="" />
                                        <input class="submit" type="button" value="Create Salat Timings" onclick="codeAddress()" />
                                    </form>
                                </div>
                                <a id="c962"></a>
                                <div id="salatmap"></div>
                                <a id="c963"></a>
                                <span style="float: left;clear: both;" id="salatprintarea" class="salatprintarea"> 
                                <div id="salatprinthead">
                                    <div id="sphbismillah">
                                    <!--
                                      <img src="bg_sphbismillah.gif" width="109" height="18" alt="Bismillah" /> --> 
                                        <br /><?php _e( 'In the Name of Allah, The Gracious, The Merciful', 'globalconcept'  ) ?></div>
                                    <div id="sphmain">
                                        <div id="sphlogo">
                                            <div id="sphlogoleft">
                                                <img src="<?php bloginfo('template_url'); ?>/img/logo.png" width="100" height="100" alt="Logo" />
                                            </div>
                                            <div id="sphlogoright"><b><?php _e( 'Ahmadiyya Muslim Jamaat' , 'globalconcept' ) ?></b>
                                                <br /><?php bloginfo( 'name' ); ?></div>
                                        </div>
                                        <div id="sphslogan"><?php bloginfo( 'description' ); ?></div>
                                    </div>
                                </div>
                               
                               
                              
                                <div id="sphloctitle"><?php _e( 'Salat Timings for:', 'globalconcept'  ) ?> <span class="printloctitle"></span>
                                </div>
                                <div id="salatplan">
                                    <div id="salatheader">
                                        <table>
                                            <tr>
                                                <td class="salatheaderleft">
                                                    <div align="right"><a href="javascript:displayMonth(-1)">«</a>
                                                    </div>
                                                </td>
                                                <td id="table-title" class="caption"></td>
                                                <td class="salatheaderright"><a href="javascript:displayMonth(+1)">»</a>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                    <div id="salattimes">
                                        <table id="timetable">
                                            <tbody></tbody>
                                        </table>
                                    </div>
                                </div>
                                <a id="c965"></a>
                                <div id="salatprintfooter"><?php _e( 'These Salat Timings were created on ', 'globalconcept'  ) ?><?php echo get_site_url(); ?><?php _e( '<br />These information are supplied without liability.', 'globalconcept' ) ?></div>
                                <a id="c966"></a>
                                
                                   </span>
                                   <center>
                                <div id="salatprintbutton">
                                    <form>
<!--                                        <input type="button" value="Gebetsplan ausdrucken" onclick="javascript:printDiv('salatprintarea')" />
-->                                        <input type="button" value="<?php _e( 'Print Salat Timings', 'globalconcept'  ) ?>" onclick="window.print();return false;" />
                                        
                                        
                                    </form>
                                </div>
                                <center>
                                <a id="c967"></a>
                               
                                 <script type="text/javascript" src="main.js" style="display:none">
								  </script>
                                <script type="text/javascript" style="display:none">
                                    <!--
                                    var weekdays = new Array(7);

                                    function initWeekdays() {
                                        weekdays[0] = "<?php _e( 'Sun', 'globalconcept'  ) ?>";
                                        weekdays[1] = "<?php _e( 'Mon', 'globalconcept'  ) ?>";
                                        weekdays[2] = "<?php _e( 'Tue', 'globalconcept'  ) ?>";
                                        weekdays[3] = "<?php _e( 'Wed', 'globalconcept'  ) ?>";
                                        weekdays[4] = "<?php _e( 'Thu', 'globalconcept'  ) ?>";
                                        weekdays[5] = "<?php _e( 'Fri', 'globalconcept'  ) ?>";
                                        weekdays[6] = "<?php _e( 'Sat', 'globalconcept'  ) ?>";
                                    }

                                    function getDayName(modifier) {
                                        initWeekdays();
                                        var current_date = new Date(jahr, monat - 1, tag);
                                        var weekday_value = current_date.getDay();
                                        var weekday_modified_value = weekday_value + modifier;
                                        if (weekday_modified_value > 6) weekday_modified_value = 0;
                                        if (weekday_modified_value < 0) weekday_modified_value = 6;
                                        return weekdays[(weekday_modified_value)];
                                    }

                                    function calcSohar(sa, su) {
                                        var saArray = sa.split(':');
                                        var saHH = parseInt(saArray[0], 10);
                                        var saMM = parseInt(saArray[1], 10);
                                        var saInt = saHH + (saMM / 60);
                                        var suArray = su.split(':');
                                        var suHH = parseInt(suArray[0], 10);
                                        var suMM = parseInt(suArray[1], 10);
                                        var suInt = suHH + (suMM / 60);
                                        var soharInt = saInt + ((suInt - saInt) / 2);
                                        var soharMMInt = soharInt - Int(soharInt);
                                        var soharMM = soharMMInt * 60;
                                        var sohar = twoDigits(parseInt(soharInt - soharMMInt)) + ':' + twoDigits(soharMM);
                                        return sohar;
                                    }

                                    function calcAszr(sa, su) {
                                        var sohar = '' + calcSohar(sa, su);
                                        var soharArray = sohar.split(':');
                                        var soharHH = parseInt(soharArray[0], 10);
                                        var soharMM = parseInt(soharArray[1], 10);
                                        var soharInt = soharHH + (soharMM / 60);
                                        var suArray = su.split(':');
                                        var suHH = parseInt(suArray[0], 10);
                                        var suMM = parseInt(suArray[1], 10);
                                        var suInt = suHH + (suMM / 60);
                                        var aszrInt = soharInt + ((suInt - soharInt) / 2);
                                        var aszrMMInt = aszrInt - Int(aszrInt);
                                        var aszrMM = aszrMMInt * 60;
                                        var aszr = twoDigits(parseInt(aszrInt - aszrMMInt)) + ':' + twoDigits(aszrMM);
                                        return aszr;
                                    }

                                    function calcTime(tag, monat, jahr, currentstr, addtime, onedigithour) {
                                        var timearray = currentstr.split(':');
                                        var stunden = parseInt(timearray[0], 10);
                                        var minuten = parseInt(timearray[1], 10);
                                        var d = new Date(jahr, monat, tag, stunden, minuten, 00);
                                        var m = d.getMinutes();
                                        var nm = parseInt(d.getMinutes(), 10) + parseInt(addtime, 10);
                                        d.setMinutes(parseInt(nm), 10);
                                        var result = '';
                                        if (onedigithour) {
                                            result = d.getHours() + ':' + twoDigits(d.getMinutes());
                                        } else {
                                            result = twoDigits(d.getHours()) + ':' + twoDigits(d.getMinutes());
                                        }
                                        return result;
                                    }

                                    function twoDigits(src) {
                                        var srcint = parseInt(src, 10);
                                        var tar = '' + srcint;
                                        if (srcint <= 9) tar = '0' + tar;
                                        return tar;
                                    }

                                    function generateDayStr(jahr, monat, tag) {
                                        var dayStr = '';
                                        if (monat <= 9) dayStr = dayStr + '0' + monat;
                                        else dayStr = dayStr + '' + monat; if (tag <= 9) dayStr = dayStr + '0' + tag;
                                        else dayStr = dayStr + '' + tag;
                                        return dayStr;
                                    }

                                    function getDayDataOnPosition(tag, monat, jahr, placeX, placeY, placeZone) {
                                        var dayData = new Array();
                                        var sunrise = getSunRise(tag, monat, jahr, placeX, placeY, placeZone);
                                        var sunset = getSunSet(tag, monat, jahr, placeX, placeY, placeZone);
                                        dayData = createRamadhanDay("", tag, monat, jahr, calcTime(tag, monat, jahr, sunrise, -90, false), calcTime(tag, monat, jahr, sunrise, +0, true), calcTime(tag, monat, jahr, calcSohar(sunrise, sunset), +15, false), calcTime(tag, monat, jahr, calcAszr(sunrise, sunset), +15, false), calcTime(tag, monat, jahr, sunset, +0, false), calcTime(tag, monat, jahr, sunset, +2, false), calcTime(tag, monat, jahr, sunset, +82, false), "", "");
                                        return dayData;
                                    }

                                    function createRamadhanDay(daytxt, day, month, year, fajr, SA, sohar, asr, SU, magrib, ishaa, dayplustxt, dayminustxt) {
                                        var currentRamadhanDay = new Array();
                                        currentRamadhanDay['daytxt'] = daytxt;
                                        currentRamadhanDay['day'] = day;
                                        currentRamadhanDay['month'] = month;
                                        currentRamadhanDay['year'] = year;
                                        currentRamadhanDay['fajr'] = fajr;
                                        currentRamadhanDay['SA'] = SA;
                                        currentRamadhanDay['sohar'] = sohar;
                                        currentRamadhanDay['asr'] = asr;
                                        currentRamadhanDay['SU'] = SU;
                                        currentRamadhanDay['magrib'] = magrib;
                                        currentRamadhanDay['ishaa'] = ishaa;
                                        currentRamadhanDay['dayplustxt'] = dayplustxt;
                                        currentRamadhanDay['dayminustxt'] = dayminustxt;
                                        return currentRamadhanDay;
                                    }

                                    function getNamazTimesObject(dateDate, intLng, intLat, intTimezone) {
                                        var skycalcresultArray = getDayDataOnPosition(dateDate.getDate(), dateDate.getMonth() + 1, dateDate.getFullYear(), intLat, intLng, intTimezone);
                                        var times = {
                                            imsak: 0,
                                            fajr: skycalcresultArray["fajr"] + '',
                                            sunrise: skycalcresultArray["SA"] + '',
                                            dhuhr: skycalcresultArray["sohar"] + '',
                                            asr: skycalcresultArray["asr"] + '',
                                            sunset: skycalcresultArray["SU"] + '',
                                            maghrib: skycalcresultArray["magrib"] + '',
                                            isha: skycalcresultArray["ishaa"] + ''
                                        };
                                        return times;
                                    }

                                     //-->
                                </script>
                                <script type="text/javascript" style="display:none">
                                    <!--
                                    function getSunRise(day, month, year, x, y, zone) {
                                        var currentposition = new SunriseSunset(year, month, day, y, x);
                                        return HHMM(currentposition.sunriseLocalHours(zone));
                                    }

                                    function getSunSet(day, month, year, x, y, zone) {
                                        var currentposition = new SunriseSunset(year, month, day, y, x);
                                        return HHMM(currentposition.sunsetLocalHours(zone));
                                    }

                                    function round100000(x) {
                                        return (Math.round(100000. * x) / 100000.);
                                    }

                                    function round10000(x) {
                                        return (Math.round(10000. * x) / 10000.);
                                    }

                                    function round1000(x) {
                                        return (Math.round(1000. * x) / 1000.);
                                    }

                                    function round100(x) {
                                        return (Math.round(100. * x) / 100.);
                                    }

                                    function round10(x) {
                                        return (Math.round(10. * x) / 10.);
                                    }

                                    function Int(x) {
                                        if (x < 0) {
                                            return (Math.ceil(x));
                                        } else return (Math.floor(x));
                                    }

                                    function HHMM(hh) {
                                        if (hh == 0) return (empty);
                                        m = (hh - Math.floor(hh)) * 60.;
                                        var h = Int(hh);
                                        if (m >= 59.5) {
                                            h++;
                                            m -= 60.;
                                        }
                                        m = Math.round(m);
                                        if (h < 10) h = "0" + h;
                                        h = h + ":";
                                        if (m < 10) h = h + "0";
                                        h = h + m;
                                        return (h + " = " + round1000(hh));
                                    } //
                                     //--> 21.8199 = 21:49 GMT
                                     //--> 7.9070  = 07:54 GMT
                                     //--> 6.8199  = 06:49 at GMT+9
                                     //--> 16.9070 = 16:54 at GMT+9
                                     //--> true
                                    var SunriseSunset = function (utcFullYear, utcMonth, utcDay, latitude, longitude) {
                                        this.zenith = 90 + 50 / 60;
                                        this.utcFullYear = utcFullYear;
                                        this.utcMonth = utcMonth;
                                        this.utcDay = utcDay;
                                        this.latitude = latitude;
                                        this.longitude = longitude;
                                        this.rising = true;
                                        this.lngHour = this.longitude / 15;
                                    };
                                    SunriseSunset.prototype = {
                                        sin: function (deg) {
                                            return Math.sin(deg * Math.PI / 180);
                                        },
                                        cos: function (deg) {
                                            return Math.cos(deg * Math.PI / 180);
                                        },
                                        tan: function (deg) {
                                            return Math.tan(deg * Math.PI / 180);
                                        },
                                        asin: function (x) {
                                            return (180 / Math.PI) * Math.asin(x);
                                        },
                                        acos: function (x) {
                                            return (180 / Math.PI) * Math.acos(x);
                                        },
                                        atan: function (x) {
                                            return (180 / Math.PI) * Math.atan(x);
                                        },
                                        getDOY: function () {
                                            var month = this.utcMonth,
                                                year = this.utcFullYear,
                                                day = this.utcDay;
                                            var N1 = Math.floor(275 * month / 9);
                                            var N2 = Math.floor((month + 9) / 12);
                                            var N3 = (1 + Math.floor((year - 4 * Math.floor(year / 4) + 2) / 3));
                                            var N = N1 - (N2 * N3) + day - 30;
                                            return N;
                                        },
                                        approximateTime: function () {
                                            var doy = this.getDOY();
                                            if (this.rising) {
                                                return doy + ((6 - this.lngHour) / 24);
                                            } else {
                                                return doy + ((18 - this.lngHour) / 24);
                                            }
                                        },
                                        meanAnomaly: function () {
                                            var t = this.approximateTime();
                                            return (0.9856 * t) - 3.289;
                                        },
                                        trueLongitude: function () {
                                            var M = this.meanAnomaly();
                                            var L = M + (1.916 * this.sin(M)) + (0.020 * this.sin(2 * M)) + 282.634;
                                            return L % 360;
                                        },
                                        rightAscension: function () {
                                            var L = this.trueLongitude();
                                            var RA = this.atan(0.91764 * this.tan(L));
                                            RA %= 360;
                                            var Lquadrant = (Math.floor(L / 90)) * 90;
                                            var RAquadrant = (Math.floor(RA / 90)) * 90;
                                            RA = RA + (Lquadrant - RAquadrant);
                                            RA /= 15;
                                            return RA;
                                        },
                                        sinDec: function () {
                                            var L = this.trueLongitude(),
                                                sinDec = 0.39782 * this.sin(L);
                                            return sinDec;
                                        },
                                        cosDec: function () {
                                            return this.cos(this.asin(this.sinDec()));
                                        },
                                        localMeanTime: function () {
                                            var cosH = (this.cos(this.zenith) - (this.sinDec() * this.sin(this.latitude))) / (this.cosDec() * this.cos(this.latitude));
                                            if (cosH > 1) {
                                                return "the sun never rises on this location (on the specified date)";
                                            } else if (cosH < -1) {
                                                return "the sun never sets on this location (on the specified date)";
                                            } else {
                                                var H = this.rising ? 360 - this.acos(cosH) : this.acos(cosH);
                                                H /= 15;
                                                var RA = this.rightAscension();
                                                var t = this.approximateTime();
                                                var T = H + RA - (0.06571 * t) - 6.622;
                                                return T;
                                            }
                                        },
                                        hoursRange: function (h) {
                                            return (h + 24) % 24;
                                        },
                                        UTCTime: function () {
                                            var T = this.localMeanTime();
                                            var UT = T - this.lngHour;
                                            return this.hoursRange(UT);
                                        },
                                        sunriseUtcHours: function () {
                                            this.rising = true;
                                            return this.UTCTime();
                                        },
                                        sunsetUtcHours: function () {
                                            this.rising = false;
                                            return this.UTCTime();
                                        },
                                        sunriseLocalHours: function (gmt) {
                                            return this.hoursRange(gmt + this.sunriseUtcHours());
                                        },
                                        sunsetLocalHours: function (gmt) {
                                            return this.hoursRange(gmt + this.sunsetUtcHours());
                                        },
                                        isDaylight: function (utcCurrentHours) {
                                            var sunriseHours = this.sunriseUtcHours(),
                                                sunsetHours = this.sunsetUtcHours();
                                            if (sunsetHours < sunriseHours) {
                                                if (utcCurrentHours > sunriseHours) {
                                                    return true;
                                                } else if (utcCurrentHours < sunsetHours) {
                                                    return true;
                                                } else {
                                                    return false;
                                                }
                                            }
                                            if (utcCurrentHours >= sunriseHours) {
                                                return utcCurrentHours < sunsetHours;
                                            }
                                            return false;
                                        }
                                    };

                                    function SunriseSunsetTest() {
                                        var testcases = {
                                            'Los Angeles': {
                                                'lat': 34.05,
                                                'lon': -118.23333333,
                                                'tests': [{
                                                    'year': 2011,
                                                    'month': 1,
                                                    'day': 22,
                                                    'utcHours': 19.6666666,
                                                    'isDaylight': true
                                                }]
                                            },
                                            'Berlin': {
                                                'lat': 52.5,
                                                'lon': 13.366666667,
                                                'tests': [{
                                                    'year': 2011,
                                                    'month': 1,
                                                    'day': 25,
                                                    'utcHours': 1.25,
                                                    'isDaylight': false
                                                }, {
                                                    'year': 2011,
                                                    'month': 2,
                                                    'day': 22,
                                                    'utcHours': 2.5,
                                                    'isDaylight': false
                                                }]
                                            },
                                            'Tokyo': {
                                                'lat': 35 + 40 / 60,
                                                'lon': 139 + 45 / 60,
                                                'tests': [{
                                                    'year': 2011,
                                                    'month': 1,
                                                    'day': 23,
                                                    'utcHours': 1.5,
                                                    'isDaylight': true
                                                }, {
                                                    'year': 2011,
                                                    'month': 1,
                                                    'day': 23,
                                                    'utcHours': 22.5,
                                                    'isDaylight': true
                                                }]
                                            },
                                            'Seoul': {
                                                'lat': 37.55,
                                                'lon': 126.966666667,
                                                'tests': [{
                                                    'year': 2011,
                                                    'month': 4,
                                                    'day': 10,
                                                    'utcHours': 15 + 30 / 60,
                                                    'isDaylight': false
                                                }]
                                            },
                                            'New Delhi': {
                                                'lat': 35 + 40 / 60,
                                                'lon': 139 + 45 / 60,
                                                'tests': []
                                            },
                                            'Sydney': {
                                                'lat': -(33 + 55 / 60),
                                                'lon': 151 + 17 / 60,
                                                'tests': [{
                                                    'year': 2011,
                                                    'month': 5,
                                                    'day': 1,
                                                    'utcHours': 17 + 53 / 60,
                                                    'isDaylight': false
                                                }]
                                            },
                                            'Santiago': {
                                                'lat': -(33 + 26 / 60),
                                                'lon': -(70 + 40 / 60),
                                                'tests': [{
                                                    'year': 2011,
                                                    'month': 5,
                                                    'day': 1,
                                                    'utcHours': 17 + 54 / 60,
                                                    'isDaylight': true
                                                }]
                                            }
                                        };
                                        var tests_run = 0;
                                        var tests_failed = 0;
                                        for (var city_name in testcases) {
                                            var city = testcases[city_name];
                                            for (var i = 0; i < city.tests.length; i++) {
                                                var t = city.tests[i];
                                                var ss = new SunriseSunset(t.year, t.month, t.day, city.lat, city.lon);
                                                var expected = t.isDaylight;
                                                var result = ss.isDaylight(t.utcHours);
                                                var passed = result === expected;
                                                tests_run++;
                                                if (!passed) tests_failed++;
                                                print(city_name, t.year, t.month, t.day, t.utcHours, "passed:", passed);
                                                if (!passed) {
                                                    print("sunriseUtcHours=" + ss.sunriseUtcHours() +
                                                        ", sunsetUtcHours=" + ss.sunsetUtcHours());
                                                }
                                            }
                                        }
                                        print("tests: " + tests_run, "failed: " + tests_failed);
                                    }

                                     //-->
                                </script>
                                <script type="text/javascript" style="display:none">
                                    <!--
                                    function PrayTimes(method) {
                                        var
                                        timeNames = {
                                            imsak: 'Imsak',
                                            fajr: 'Fajr',
                                            sunrise: 'Sunrise',
                                            dhuhr: 'Dhuhr',
                                            asr: 'Asr',
                                            sunset: 'Sunset',
                                            maghrib: 'Maghrib',
                                            isha: 'Isha',
                                            midnight: 'Midnight'
                                        }, methods = {
                                                MWL: {
                                                    name: 'Muslim World League',
                                                    params: {
                                                        fajr: 18,
                                                        isha: 17
                                                    }
                                                },
                                                ISNA: {
                                                    name: 'Islamic Society of North America (ISNA)',
                                                    params: {
                                                        fajr: 15,
                                                        isha: 15
                                                    }
                                                },
                                                Egypt: {
                                                    name: 'Egyptian General Authority of Survey',
                                                    params: {
                                                        fajr: 19.5,
                                                        isha: 17.5
                                                    }
                                                },
                                                Makkah: {
                                                    name: 'Umm Al-Qura University, Makkah',
                                                    params: {
                                                        fajr: 18.5,
                                                        isha: '90 min'
                                                    }
                                                },
                                                Karachi: {
                                                    name: 'University of Islamic Sciences, Karachi',
                                                    params: {
                                                        fajr: 18,
                                                        isha: 18
                                                    }
                                                },
                                                Tehran: {
                                                    name: 'Institute of Geophysics, University of Tehran',
                                                    params: {
                                                        fajr: 17.7,
                                                        isha: 14,
                                                        maghrib: 4.5,
                                                        midnight: 'Jafari'
                                                    }
                                                },
                                                Jafari: {
                                                    name: 'Shia Ithna-Ashari, Leva Institute, Qum',
                                                    params: {
                                                        fajr: 16,
                                                        isha: 14,
                                                        maghrib: 4,
                                                        midnight: 'Jafari'
                                                    }
                                                },
                                                AMJ: {
                                                    name: 'Ahmadiyya Muslim Jamaat Deutschland',
                                                    params: {
                                                        fajr: 0,
                                                        isha: '80 min',
                                                        maghrib: '2 min',
                                                        midnight: 'Standard'
                                                    }
                                                }
                                            }, defaultParams = {
                                                maghrib: '0 min',
                                                midnight: 'Standard'
                                            }, calcMethod = 'AMJ',
                                            setting = {
                                                imsak: '10 min',
                                                dhuhr: '0 min',
                                                asr: 'Standard',
                                                highLats: 'NightMiddle'
                                            }, timeFormat = '24h',
                                            timeSuffixes = ['am', 'pm'],
                                            invalidTime = '-----',
                                            numIterations = 1,
                                            offset = {}, lat, lng, elv, timeZone, jDate;
                                        var defParams = defaultParams;
                                        for (var i in methods) {
                                            var params = methods[i].params;
                                            for (var j in defParams)
                                                if ((typeof (params[j]) == 'undefined'))
                                                    params[j] = defParams[j];
                                        };
                                        calcMethod = methods[method] ? method : calcMethod;
                                        var params = methods[calcMethod].params;
                                        for (var id in params)
                                            setting[id] = params[id];
                                        for (var i in timeNames)
                                            offset[i] = 0;
                                        return {
                                            setMethod: function (method) {
                                                method = 'AMJ';
                                                if (methods[method]) {
                                                    this.adjust(methods[method].params);
                                                    calcMethod = method;
                                                }
                                            },
                                            adjust: function (params) {
                                                for (var id in params)
                                                    setting[id] = params[id];
                                            },
                                            tune: function (timeOffsets) {
                                                for (var i in timeOffsets)
                                                    offset[i] = timeOffsets[i];
                                            },
                                            getMethod: function () {
                                                return calcMethod;
                                            },
                                            getSetting: function () {
                                                return setting;
                                            },
                                            getOffsets: function () {
                                                return offset;
                                            },
                                            getDefaults: function () {
                                                return methods;
                                            },
                                            getTimes: function (date, coords, timezone, dst, format) {
                                                this.setMethod("AMJ");
                                                lat = 1 * coords[0];
                                                lng = 1 * coords[1];
                                                elv = coords[2] ? 1 * coords[2] : 0;
                                                timeFormat = format || timeFormat;
                                                if (date.constructor === Date)
                                                    date = [date.getFullYear(), date.getMonth() + 1, date.getDate()];
                                                if (typeof (timezone) == 'undefined' || timezone == 'auto')
                                                    timezone = this.getTimeZone(date);
                                                if (typeof (dst) == 'undefined' || dst == 'auto')
                                                    dst = this.getDst(date);
                                                timeZone = 1 * timezone + (1 * dst ? 1 : 0);
                                                jDate = this.julian(date[0], date[1], date[2]) - lng / (15 * 24);
                                                return this.computeTimes();
                                            },
                                            getFormattedTime: function (time, format, suffixes) {
                                                if (isNaN(time))
                                                    return invalidTime;
                                                if (format == 'Float') return time;
                                                suffixes = suffixes || timeSuffixes;
                                                time = DMath.fixHour(time + 0.5 / 60);
                                                var hours = Math.floor(time);
                                                var minutes = Math.floor((time - hours) * 60);
                                                var suffix = (format == '12h') ? suffixes[hours < 12 ? 0 : 1] : '';
                                                hours = (format == '24h') ? this.twoDigitsFormat(hours) : ((hours + 12 - 1) % 12 + 1);
                                                return hours + ':' + this.twoDigitsFormat(minutes) + (suffix ? ' ' + suffix : '');
                                            },
                                            midDay: function (time) {
                                                var eqt = this.sunPosition(jDate + time).equation;
                                                var noon = DMath.fixHour(12 - eqt);
                                                return noon;
                                            },
                                            sunAngleTime: function (angle, time, direction) {
                                                var decl = this.sunPosition(jDate + time).declination;
                                                var noon = this.midDay(time);
                                                var t = 1 / 15 * DMath.arccos((-DMath.sin(angle) - DMath.sin(decl) * DMath.sin(lat)) / (DMath.cos(decl) * DMath.cos(lat)));
                                                return noon + (direction == 'ccw' ? -t : t);
                                            },
                                            asrTime: function (factor, time) {
                                                var decl = this.sunPosition(jDate + time).declination;
                                                var angle = -DMath.arccot(factor + DMath.tan(Math.abs(lat - decl)));
                                                return this.sunAngleTime(angle, time);
                                            },
                                            sunPosition: function (jd) {
                                                var D = jd - 2451545.0;
                                                var g = DMath.fixAngle(357.529 + 0.98560028 * D);
                                                var q = DMath.fixAngle(280.459 + 0.98564736 * D);
                                                var L = DMath.fixAngle(q + 1.915 * DMath.sin(g) + 0.020 * DMath.sin(2 * g));
                                                var R = 1.00014 - 0.01671 * DMath.cos(g) - 0.00014 * DMath.cos(2 * g);
                                                var e = 23.439 - 0.00000036 * D;
                                                var RA = DMath.arctan2(DMath.cos(e) * DMath.sin(L), DMath.cos(L)) / 15;
                                                var eqt = q / 15 - DMath.fixHour(RA);
                                                var decl = DMath.arcsin(DMath.sin(e) * DMath.sin(L));
                                                return {
                                                    declination: decl,
                                                    equation: eqt
                                                };
                                            },
                                            julian: function (year, month, day) {
                                                if (month <= 2) {
                                                    year -= 1;
                                                    month += 12;
                                                };
                                                var A = Math.floor(year / 100);
                                                var B = 2 - A + Math.floor(A / 4);
                                                var JD = Math.floor(365.25 * (year + 4716)) + Math.floor(30.6001 * (month + 1)) + day + B - 1524.5;
                                                return JD;
                                            },
                                            computePrayerTimes: function (times) {
                                                times = this.dayPortion(times);
                                                var params = setting;
                                                var imsak = this.sunAngleTime(this.eval(params.imsak), times.imsak);
                                                var fajr = this.sunAngleTime(this.eval(params.fajr), times.fajr);
                                                var sunrise = this.sunAngleTime(this.riseSetAngle(), times.sunrise);
                                                var dhuhr = this.midDay(times.dhuhr);
                                                var asr = this.asrTime(this.asrFactor(params.asr), times.asr);
                                                var sunset = this.sunAngleTime(this.riseSetAngle(), times.sunset);
                                                var maghrib = this.sunAngleTime(this.eval(params.maghrib), times.maghrib);
                                                var isha = this.sunAngleTime(this.eval(params.isha), times.isha);
                                                return {
                                                    imsak: imsak,
                                                    fajr: fajr,
                                                    sunrise: sunrise,
                                                    dhuhr: dhuhr,
                                                    asr: asr,
                                                    sunset: sunset,
                                                    maghrib: maghrib,
                                                    isha: isha
                                                };
                                            },
                                            computeTimes: function () {
                                                var times = {
                                                    imsak: 5,
                                                    fajr: 5,
                                                    sunrise: 6,
                                                    dhuhr: 12,
                                                    asr: 13,
                                                    sunset: 18,
                                                    maghrib: 18,
                                                    isha: 18
                                                };
                                                for (var i = 1; i <= numIterations; i++)
                                                    times = this.computePrayerTimes(times);
                                                times = this.adjustTimes(times);
                                                times.midnight = (setting.midnight == 'Jafari') ? times.maghrib + this.timeDiff(times.maghrib, times.fajr) / 2 : times.sunset + this.timeDiff(times.sunset, times.sunrise) / 2;
                                                times = this.tuneTimes(times);
                                                return this.modifyFormats(times);
                                            },
                                            adjustTimes: function (times) {
                                                var params = setting;
                                                for (var i in times)
                                                    times[i] += timeZone - lng / 15;
                                                if (params.highLats != 'None')
                                                    times = this.adjustHighLats(times);
                                                if (this.isMin(params.imsak))
                                                    times.imsak = times.fajr - this.eval(params.imsak) / 60;
                                                if (this.isMin(params.maghrib))
                                                    times.maghrib = times.sunset + this.eval(params.maghrib) / 60;
                                                if (this.isMin(params.isha))
                                                    times.isha = times.maghrib + this.eval(params.isha) / 60;
                                                times.dhuhr += this.eval(params.dhuhr) / 60;
                                                return times;
                                            },
                                            asrFactor: function (asrParam) {
                                                var factor = {
                                                    Standard: 1,
                                                    Hanafi: 2
                                                }[asrParam];
                                                return factor || this.eval(asrParam);
                                            },
                                            riseSetAngle: function () {
                                                var angle = 0.0347 * Math.sqrt(elv);
                                                return 0.833 + angle;
                                            },
                                            tuneTimes: function (times) {
                                                for (var i in times)
                                                    times[i] += offset[i] / 60;
                                                return times;
                                            },
                                            modifyFormats: function (times) {
                                                for (var i in times)
                                                    times[i] = this.getFormattedTime(times[i], timeFormat);
                                                return times;
                                            },
                                            adjustHighLats: function (times) {
                                                var params = setting;
                                                var nightTime = this.timeDiff(times.sunset, times.sunrise);
                                                times.imsak = this.adjustHLTime(times.imsak, times.sunrise, this.eval(params.imsak), nightTime, 'ccw');
                                                times.fajr = this.adjustHLTime(times.fajr, times.sunrise, this.eval(params.fajr), nightTime, 'ccw');
                                                times.isha = this.adjustHLTime(times.isha, times.sunset, this.eval(params.isha), nightTime);
                                                times.maghrib = this.adjustHLTime(times.maghrib, times.sunset, this.eval(params.maghrib), nightTime);
                                                return times;
                                            },
                                            adjustHLTime: function (time, base, angle, night, direction) {
                                                var portion = this.nightPortion(angle, night);
                                                var timeDiff = (direction == 'ccw') ? this.timeDiff(time, base) : this.timeDiff(base, time);
                                                if (isNaN(time) || timeDiff > portion)
                                                    time = base + (direction == 'ccw' ? -portion : portion);
                                                return time;
                                            },
                                            nightPortion: function (angle, night) {
                                                var method = setting.highLats;
                                                var portion = 1 / 2
                                                if (method == 'AngleBased')
                                                    portion = 1 / 60 * angle;
                                                if (method == 'OneSeventh')
                                                    portion = 1 / 7;
                                                return portion * night;
                                            },
                                            dayPortion: function (times) {
                                                for (var i in times)
                                                    times[i] /= 24;
                                                return times;
                                            },
                                            getTimeZone: function (date) {
                                                var year = date[0];
                                                var t1 = this.gmtOffset([year, 0, 1]);
                                                var t2 = this.gmtOffset([year, 6, 1]);
                                                return Math.min(t1, t2);
                                            },
                                            getDst: function (date) {
                                                return 1 * (this.gmtOffset(date) != this.getTimeZone(date));
                                            },
                                            gmtOffset: function (date) {
                                                var localDate = new Date(date[0], date[1] - 1, date[2], 12, 0, 0, 0);
                                                var GMTString = localDate.toGMTString();
                                                var GMTDate = new Date(GMTString.substring(0, GMTString.lastIndexOf(' ') - 1));
                                                var hoursDiff = (localDate - GMTDate) / (1000 * 60 * 60);
                                                return hoursDiff;
                                            },
                                            eval: function (str) {
                                                return 1 * (str + '').split(/[^0-9.+-]/)[0];
                                            },
                                            isMin: function (arg) {
                                                return (arg + '').indexOf('min') != -1;
                                            },
                                            timeDiff: function (time1, time2) {
                                                return DMath.fixHour(time2 - time1);
                                            },
                                            twoDigitsFormat: function (num) {
                                                return (num < 10) ? '0' + num : num;
                                            }
                                        }
                                    } //-
                                    var DMath = {
                                        dtr: function (d) {
                                            return (d * Math.PI) / 180.0;
                                        },
                                        rtd: function (r) {
                                            return (r * 180.0) / Math.PI;
                                        },
                                        sin: function (d) {
                                            return Math.sin(this.dtr(d));
                                        },
                                        cos: function (d) {
                                            return Math.cos(this.dtr(d));
                                        },
                                        tan: function (d) {
                                            return Math.tan(this.dtr(d));
                                        },
                                        arcsin: function (d) {
                                            return this.rtd(Math.asin(d));
                                        },
                                        arccos: function (d) {
                                            return this.rtd(Math.acos(d));
                                        },
                                        arctan: function (d) {
                                            return this.rtd(Math.atan(d));
                                        },
                                        arccot: function (x) {
                                            return this.rtd(Math.atan(1 / x));
                                        },
                                        arctan2: function (y, x) {
                                            return this.rtd(Math.atan2(y, x));
                                        },
                                        fixAngle: function (a) {
                                            return this.fix(a, 360);
                                        },
                                        fixHour: function (a) {
                                            return this.fix(a, 24);
                                        },
                                        fix: function (a, b) {
                                            a = a - b * (Math.floor(a / b));
                                            return (a < 0) ? a + b : a;
                                        }
                                    }
                                    var prayTimes = new PrayTimes();
                                    prayTimes.setMethod("AMJ");
                                     //-->
                                </script>
                                <script type="text/javascript" style="display:none">
                                    <!--
                                    var currentDate = new Date();
                                    var timeFormat = 1;
                                    var lat = 50.1109221;
                                    var lng = 8.6821267;

// Here set lat and lang according to the site.
<?php 
	
	$tokens = explode('/', get_bloginfo('siteurl'));
	$suburl = $tokens[sizeof($tokens)-1];
	if($suburl=='al')
	{
		?>
		var lat = 41.331650;
        var lng = 19.831800;
		var capname = 'Tirane';
		<?php
	}
	else if($suburl =='is')
	{
		 ?>
		var lat = 64.135338;
        var lng = -21.895210;
		var capname = 'Reykjavik';
		
		
		<?php
	}
	else if($suburl =='kg')
	{
		 ?>
		var lat = 42.870022;
        var lng = 74.587883;
		var capname = 'Bishkek';
		
		<?php
	}	
	else if($suburl =='ru')
	{
		 ?>
		var lat = 55.755826;
        var lng = 37.617300;
		var capname = 'Moscow';
		<?php
	}
	else if($suburl =='uz')
	{
		 ?>
		var lat = 41.266667;
        var lng = 69.216667;
		var capname = 'Tashkent';
		<?php
	}
	else if($suburl =='lu')
	{
		 ?>
		var lat =49.815273;
        var lng =6.129583;
		var capname = 'Luxembourg';
		<?php
	}
	else
	{
		?>
		var lat = 50.1109221;
        var lng = 8.6821267;
		var capname = 'Frankfurt am Main';
		<?php
	}
	?>

//$("#address").val(capname);
var elem = document.getElementById("address");
elem.value = capname;


                                    function displayMonth(offset) {
                                        var method = 'AMJ';
                                        prayTimes.setMethod(method);
                                        prayTimes.tune({
                                            sunrise: -821,
                                            sunset: -60,
                                            midnight: -60,
                                            fajr: -911,
                                            dhuhr: -46,
                                            asr: -65,
                                            maghrib: -60,
                                            isha: -60
                                        });
                                        currentDate.setMonth(currentDate.getMonth() + 1 * offset);
                                        var month = currentDate.getMonth();
                                        var year = currentDate.getFullYear();
                                        var title = monthFullName(month) + ' ' + year;
                                        $('table-title').innerHTML = title;
                                        makeTable(year, month, lat, lng, gmtOffset);
                                    }

                                    function getLastSunday(intMonth, intFullYear) {
                                        if ((intMonth == 10) && (intFullYear == 2012)) {
                                            return 28;
                                        }
                                        if ((intMonth == 10) && (intFullYear == 2013)) {
                                            return 27;
                                        }
                                        if ((intMonth == 10) && (intFullYear == 2014)) {
                                            return 26;
                                        }
                                        if ((intMonth == 10) && (intFullYear == 2015)) {
                                            return 25;
                                        }
                                        if ((intMonth == 3) && (intFullYear == 2013)) {
                                            return 31;
                                        }
                                        if ((intMonth == 3) && (intFullYear == 2014)) {
                                            return 30;
                                        }
                                        if ((intMonth == 3) && (intFullYear == 2015)) {
                                            return 29;
                                        }
                                    }

                                    function getWinterTimeModifier(date) {
                                        var result = 0;
                                        if (((date.getMonth() + 1 == 10) && (date.getDate() >= getLastSunday(10, date.getFullYear()) - 0)) || (date.getMonth() + 1 >= 11)) {
                                            result = 1;
                                        }
                                        if (((date.getMonth() + 1 == 3) && (date.getDate() <= getLastSunday(3, date.getFullYear()) - 1)) || (date.getMonth() + 1 <= 2)) {
                                            result = 1;
                                        }
                                        return result;
                                    }

                                    function makeTable(year, month, lat, lng, gmtOffset) {
                                        initWeekdays();
                                        var items = {
                                            weekday: '',
                                            day: 'Day',
                                            fajr: 'Fajr',
                                            sunrise: 'Sunrise',
                                            dhuhr: 'Zohar',
                                            asr: 'Аssr',
                                            maghrib: 'Maghrib',
                                            isha: 'Isha'
                                        };
                                        var tbody = document.createElement('tbody');
                                        tbody.appendChild(makeTableRow(items, items, 'head-row'));
                                        var date = new Date(year, month, 1);
                                        var endDate = new Date(year, month + 1, 1);
                                        var format = timeFormat ? '12hNS' : '24h';
                                        while (date < endDate) {
                                            var realdate = new Date(date.getFullYear(), date.getMonth(), date.getDate());
                                            var gmtOffsetReal = gmtOffset - getWinterTimeModifier(date);
                                            var times = getNamazTimesObject(realdate, lat, lng, gmtOffsetReal);
                                            times.weekday = weekdays[date.getDay()];
                                            times.day = date.getDate();
                                            var today = new Date();
                                            var isToday = (date.getMonth() == today.getMonth()) && (date.getDate() == today.getDate());
                                            var klass = isToday ? 'today-row' : '';
                                            tbody.appendChild(makeTableRow(times, items, klass));
                                            date.setDate(date.getDate() + 1);
                                        }
                                        removeAllChild($('timetable'));
                                        $('timetable').appendChild(tbody);
                                    }

                                    function makeTableRow(data, items, klass) {
                                        var row = document.createElement('tr');
                                        for (var i in items) {
                                            var cell = document.createElement('td');
                                            cell.innerHTML = data[i];
                                            cell.style.width = ((i == 'weekday') || (i == 'day')) ? '2.5em' : '3.7em';
                                            row.appendChild(cell);
                                        }
                                        row.className = klass;
                                        return row;
                                    }

                                    function removeAllChild(node) {
                                        if (node == undefined || node == null)
                                            return;
                                        while (node.firstChild)
                                            node.removeChild(node.firstChild);
                                    }

                                    function switchFormat(offset) {
                                        var formats = ['24 Stunden', '12 Stunden'];
                                        timeFormat = (timeFormat + offset) % 2;
                                        $('time-format').innerHTML = formats[timeFormat];
                                        update_timetable();
                                    }

                                    function update_timetable() {
                                        displayMonth(0);
                                    }

                                    function monthFullName(month) {
                                        var monthName = new Array('<?php _e( 'January', 'globalconcept'  ) ?>', '<?php _e( 'February', 'globalconcept'  ) ?>', '<?php _e( 'March', 'globalconcept'  ) ?>', '<?php _e( 'April', 'globalconcept'  ) ?>', '<?php _e( 'May', 'globalconcept'  ) ?>', '<?php _e( 'June', 'globalconcept'  ) ?>', '<?php _e( 'July', 'globalconcept'  ) ?>', '<?php _e( 'August', 'globalconcept'  ) ?>', '<?php _e( 'September', 'globalconcept'  ) ?>', '<?php _e( 'October', 'globalconcept'  ) ?>', '<?php _e( 'November', 'globalconcept'  ) ?>', '<?php _e( 'December', 'globalconcept'  ) ?>');
                                        return monthName[month];
                                    }

                                    function $(id) {
                                        return document.getElementById(id);
                                    }
                                    var geocoder;
                                    var map;
                                    var markersArray = [];
                                    var polylineArray = [];
                                    var infowindow = new google.maps.InfoWindow();

                                    function initialize() {
                                        geocoder = new google.maps.Geocoder();
                                        var latlng = new google.maps.LatLng(lat, lng);
                                        var myOptions = {
                                            zoom: 8,
                                            center: latlng,
                                            panControl: false,
                                            mapTypeControl: false,
                                            streetViewControl: false,
                                            mapTypeId: google.maps.MapTypeId.ROADMAP
                                        }
                                        map = new google.maps.Map(document.getElementById("salatmap"), myOptions);
                                        initializeClickListener();
                                    }

                                    function initializeClickListener() {
                                        google.maps.event.addListener(map, 'click', function (event) {
                                            placeMarker(event.latLng);
                                            generateTimetableWithTzFor(event.latLng);
                                            addressLookup(event.latLng);
                                        });
                                    }

                                    function addMarker(location) {
                                        var marker = new google.maps.Marker({
                                            position: location,
                                            map: map,
                                            icon: 'salat_marker.png'
                                        });
                                        markersArray.push(marker);
                                    }

                                    function addPolyline(locations) {
                                        var myLine = new google.maps.Polyline({
                                            path: locations,
                                            strokeColor: "#000000",
                                            strokeOpacity: 0.5,
                                            strokeWeight: 5,
                                            geodesic: true,
                                            map: map
                                        });
                                        polylineArray.push(myLine);
                                    }

                                    function placeMarker(location) {
                                        deleteOverlays();
                                        addMarker(location);
                                        showQiblahFor(location);
                                        map.setCenter(location);
                                    }

                                    function infoWindowForLastMarker(text) {
                                        infowindow.setContent(text);
                                        infowindow.open(map, markersArray[markersArray.length - 1]);
                                        infowindow.close();
                                    }

                                    function deleteOverlays() {
                                        infowindow.close();
                                        if (markersArray) {
                                            for (i in markersArray) {
                                                markersArray[i].setMap(null);
                                            }
                                            markersArray.length = 0;
                                        }
                                        if (polylineArray) {
                                            for (i in polylineArray) {
                                                polylineArray[i].setMap(null);
                                            }
                                            polylineArray.length = 0;
                                        }
                                    }

                                    function codeAddress() {
                                        var address = document.getElementById("address").value;
										//alert(address);
                                        geocoder.geocode({
                                            'address': address
                                        }, function (results, status) {
											//alert(status);
											console.log('****'+status+'******');
                                            if (status == google.maps.GeocoderStatus.OK) {
                                                placeMarker(results[0].geometry.location);
                                                infoWindowForLastMarker(address);
                                                generateTimetableWithTzFor(results[0].geometry.location);
                                            } else {
                                                alert("Der gewünschte Standort konnte nicht gefunden werden.");
                                            }
                                        });
                                    }

                                    function addressLookup(location) {
                                        var address = "Standort auf der Karte";
                                        geocoder.geocode({
                                            'latLng': location
                                        }, function (results, status) {
                                            if (status == google.maps.GeocoderStatus.OK) {
                                                $('address').value = results[0].formatted_address;
                                                infoWindowForLastMarker(results[0].formatted_address);
                                            } else {
                                                $('address').value = 'Standort auf der Karte';
                                            }
                                        });
                                    }

/*
                                    function generateTimetableWithTzFor(location) {
                                        lat = location.lat();
                                        lng = location.lng();
                                        var s = document.createElement('script');
                                        s.src = "http://ws.geonames.org/timezoneJSON?lat=" + location.lat() +
                                            "&lng=" + location.lng() + "&callback=onTimezoneLoaded";
                                        document.getElementsByTagName("head")[0].appendChild(s);
                                    }
*/
function generateTimetableWithTzFor(location) {
   // setup coordinates
   lat = location.lat();
   lng = location.lng();

   // New Timezone Interface (aqm:18012014)
   var strTimezoneServiceUrl = "http://api.geonames.org/timezone?username=globalconcept&lat="+lat+"&lng="+lng;
   jQuery.get(strTimezoneServiceUrl, function(xmlTimezoneInfo) { 
	 $objTimezoneInfo = jQuery(xmlTimezoneInfo);
        var strTimezone = jQuery($objTimezoneInfo.find("dstOffset")).text(); 
        var intTimezone = parseInt(strTimezone,10);
        var objTimezoneWrap = { dstOffset : intTimezone };
        onTimezoneLoaded(objTimezoneWrap);
       });

   // Old Timezone Interface 
   /*
    var s = document.createElement('script');
    s.src = "http://ws.geonames.org/timezoneJSON?lat=" + location.lat() + "&lng=" + location.lng() + "&callback=onTimezoneLoaded";
    document.getElementsByTagName("head")[0].appendChild(s);
   */
}

                                    function onTimezoneLoaded(obj) {
                                        gmtOffset = obj.dstOffset;
                                        update_timetable();
                                    }

                                    function showQiblahFor(location) {
                                        var qiblahLat = 21.42251;
                                        var qiblahLng = 39.82619;
                                        var coordinates = [location, new google.maps.LatLng(qiblahLat, qiblahLng)];
                                        addPolyline(coordinates);
                                    }
                                    initialize();
                                    codeAddress();
                                    switchFormat(timeFormat);
                                     //-->
                                </script>
                                <!--//-->
                            </div>
                           
                        </div>
                        
                    </div>
                </div>
            </div>

            
        </div>
    </div>
    
    <script style="display:none" type="text/javascript">
        <!--
         //jQuery(document).ready(function() {
         //	setTimeout(function () {window.scrollTo(0, 1);}, 0);
         //});
/*
        jQuery(document).ready(function () {
            jQuery('a.wt_csstooltip span.hidegt').click(function () {
                jQuery('a.wt_csstooltip dfn').toggle();
            });
        });

        jQuery(document).ready(function () {
            jQuery('div.startslider img').each(function () {
                jQuery(this).removeAttr('width')
                jQuery(this).removeAttr('height');
            });
        });

        jQuery(document).ready(function () {
            jQuery('.mobmenuopen').click(function () {
                //jQuery('#mobcontact').hide();
                jQuery('#mobmenu').slideToggle();
            });
            jQuery('.mobcontactopen').click(function () {
                jQuery('#mobmenu').hide();
                jQuery('#mobcontact').slideToggle();
            });
            jQuery('.mipagemenuopen').click(function () {
                jQuery('.mipagemenuopen').toggle();
                jQuery('.mipagemenuclose').toggle();
                jQuery('.mipagenav').slideToggle();
                jQuery('.mipagemenu').toggleClass('autoheight');
            });
            jQuery('.mipagemenuclose').click(function () {
                jQuery('.mipagemenuopen').toggle();
                jQuery('.mipagemenuclose').toggle();
                jQuery('.mipagenav').slideToggle();
                jQuery('.mipagemenu').toggleClass('autoheight');
            });
        });


        jQuery(document).ready(function () {
            jQuery('div.startslider ul').bxSlider({
                mode: 'fade',
                captions: true,
                speed: 500,
                randomStart: false,
                infiniteLoop: true,
                touchEnabled: true,
                swipeThreshold: 50,
                oneToOneTouch: true,
                adaptiveHeight: true,
                adaptiveHeightSpeed: 0,
                preventDefaultSwipeX: true,
                preventDefaultSwipeY: false,
                pager: false,
                controls: true,
                pause: 8000,
                autoStart: true,
                autoHover: true,
                auto: true,
                nextText: '<span class="icon-angle-right"></span>',
                prevText: '<span class="icon-angle-left"></span>'
            });
        });


        jQuery(document).ready(function () {
            jQuery("div.tabcontent").hide();
            jQuery("div#tabcontainer div.tabcontent:first").show();
            jQuery("div#tabcontainer ul li a").click(function () {
                var activeTab = $(this).attr("rel");
                jQuery("div#tabcontainer ul li a").removeClass("active");
                jQuery(this).addClass("active");
                jQuery("div#tabcontainer div.tabcontent").hide();
                jQuery(activeTab).fadeIn();
            });
        });


        jQuery(document).ready(function () {
            jQuery("div#tabcontainersmall div.tabcontent:first").show();
            jQuery("div#tabcontainersmall ul li a").click(function () {
                var activeTab = $(this).attr("rel");
                jQuery("div#tabcontainersmall ul li a").removeClass("active");
                jQuery(this).addClass("active");
                jQuery("div#tabcontainersmall div.tabcontent").hide();
                jQuery(activeTab).fadeIn();
            });
        });


        jQuery(document).ready(function () {
            jQuery('div.iqorderedlist ol').makeacolumnlists({
                cols: 3,
                colWidth: 210,
                equalHeight: false,
                startN: 1
            });
            jQuery('span.iqshowsitemap').click(function () {
                jQuery(this).toggle();
                jQuery('span.iqhidesitemap').toggle();
                jQuery('div.iqorderedlist div.sitemap').slideToggle('slow');
            });
            jQuery('span.iqhidesitemap').click(function () {
                jQuery(this).toggle();
                jQuery('span.iqshowsitemap').toggle();
                jQuery('div.iqorderedlist div.sitemap').slideToggle('slow');
            });
            jQuery('div.quranverse span.important').click(function () {
                jQuery(this).toggleClass('importantopen');
            });
        });
*/
        jQuery(document).ready(function () {
            jQuery('div#salatlocation form input#address').keyup(function () {
                var value = jQuery(this).val();
                jQuery('div#sphloctitle span.printloctitle').text(value);
            }).keyup();
        });



//-->
    </script>
    <script src="http://s7.addthis.com/js/250/addthis_widget.js#pubid=ra-5040dad172e79691" type="text/javascript"></script>
    <script style="display:none" type="text/javascript">
        <!--
        main();

        function main() {
            var ieVer = getIeVersion();
            var isXP = (navigator.userAgent.indexOf('Windows NT 5.1') > -1);
            if (ieVer >= 9) {
                return;
            }
            var u = navigator.userAgent;
            var isIEMobile = (u.indexOf("IEMobile") > -1 || u.indexOf("ZuneWP7") > -1 || u.indexOf("Windows CE") > -1 || u.indexOf("WM5 PIE") > -1);
            var isIE = (ieVer && !isIEMobile)
            if (!isIE) {
                return;
            }
            if (document.cookie.indexOf('notificationdisplayed=true') == -1 || queryParam('shownotificationbar') == 'always') {
                if (ieVer == 8) {
                    if (!isXP) {
                        var nBar = new ieInfoBar({
                            message: 'Installieren Sie jetzt den kostenlosen <a href="http://msdn.microsoft.com/de-de/ie/default.aspx" target="_blank"><strong>Internet Explorer&nbsp;9</strong></a>! Mit dem standardkonformen IE9 wird das Internet schneller, einfacher und ansprechender.',
                            icon: 'http://www.microsoft.com/germany/msdn/components/ie/alert.gif'
                        });
                        nBar.show(50);
                        createDocCookie('notificationdisplayed', 'true', 3 * 24);
                    }
                }
                if (ieVer <= 7 && ieVer >= 4) {
                    if (!isXP) {
                        var nBar = new ieInfoBar({
                            message: '<font color="red"><strong>ACHTUNG:</strong></font> Mit Ihrer veralteten Version von Internet Explorer gehen Sie unn&ouml;tige Risiken ein: <a href="http://msdn.microsoft.com/de-de/ie/default.aspx" target="_blank">Installieren Sie <strong><u>jetzt</u></strong> den kostenlosen Internet Explorer&nbsp;9</a>, der ein deutlich <strong>h&ouml;heres Schutzniveau</strong> bietet: <i>standardkonform, schneller, einfacher und sicherer</i>!',
                            icon: 'http://www.microsoft.com/germany/msdn/components/ie/alert.gif'
                        });
                        nBar.show(50);
                        createDocCookie('notificationdisplayed', 'true', 6);
                    } else {
                        var nBar = new ieInfoBar({
                            message: '<font color="red"><strong>ACHTUNG:</strong></font> Mit Ihrer veralteten Version von Internet Explorer gehen Sie unn&ouml;tige Risiken ein: <a href="http://msdn.microsoft.com/de-de/ie/aa740471.aspx" target="_blank">Installieren Sie <strong><u>jetzt</u></strong> den kostenlosen Internet Explorer&nbsp;8</a>, der ein deutlich <strong>h&ouml;heres Schutzniveau</strong> bietet: <i>schneller, einfacher und sicherer</i>!',
                            icon: 'http://www.microsoft.com/germany/msdn/components/ie/alert.gif'
                        });
                        nBar.show(50);
                        createDocCookie('notificationdisplayed', 'true', 6);
                    }
                }
                /*@cc_on
    @if(@_jscript_version<=5.6&&@_jscript_version>=3.0)
    window.onscroll=legacySetBar;window.onresize=legacySetBar;/*@end
    @*/
            }
        }

        function getIeVersion() {
            var ieVer = null;
            /*@cc_on
    @if(@_jscript_version==9)ieVer=9;@elif(@_jscript_version==5.8)ieVer=8;@elif(@_jscript_version==5.7)ieVer=7;@elif(@_jscript_version==10)ieVer=10;@elif(@_jscript_version==5.6)ieVer=6;@elif(@_jscript_version==5.5)ieVer=5.5;@elif(@_jscript_version==5)ieVer=5;@elif(@_jscript_version==5.01)ieVer=5;@elif(@_jscript_version==3)ieVer=4;@elif(@_jscript_version==1)ieVer=3;@else @*/
            /*@end
    @*/
            if (ieVer == 7 && !window.XMLHttpRequest) {
                ieVer = 6;
            }
            return ieVer;
        }

        function legacySetBar(bar) {
            if (!bar) {
                bar = document.getElementById('ieInfoBar');
            }
            if (bar) {
                if (document.documentElement && document.documentElement.clientWidth) {
                    bar.style.width = document.documentElement.clientWidth;
                } else if (document.body && document.body.clientWidth) {
                    bar.style.width = document.body.clientWidth;
                }
                if (document.documentElement && document.documentElement.scrollTop) {
                    bar.style.top = document.documentElement.scrollTop;
                } else if (document.body && document.body.scrollTop) {
                    bar.style.top = document.body.scrollTop;
                }
            };
        };

        function createDocCookie(name, value, hours) {
            if (hours) {
                var date = new Date();
                date.setTime(date.getTime() + hours * 3600000);
                var expires = '; expires=' + date.toGMTString();
            } else {

                var expires = '';
            }
            document.cookie = name + '=' + value + expires + '; path=/';
        }

        function queryParam(param) {
            var retVal = '';
            var hRef = window.location.href;
            if (hRef.indexOf('?') > -1) {
                var queryString = hRef.substr(hRef.indexOf('?')).toLowerCase();
                var queryStringArray = queryString.split('&');
                for (var i = 0; i < queryStringArray.length; i++) {
                    if (queryStringArray[i].indexOf(param + '=') > -1) {
                        var aParam = queryStringArray[i].split('=');
                        retVal = aParam[1];
                        break;
                    }
                }
            }
            return retVal;
        }

        function ieInfoBar(params) {
            var ieVer = getIeVersion();
            if (!document.createElement || !ieVer) {
                return;
            }
            if (!params) {
                params = {};
            }
            var ibTag = document.createElement('div');
            ibTag.id = 'ieInfoBar';
            ibTag.style.cssText = 'position: absolute; padding-top: 3px; padding-bottom: 3px; display: block; z-Index: 50000; left: 0; right: 0; border-bottom: 1px black groove; width:100%;';
            ibTag.style.backgroundColor = params.backColor || '#ffffe1';
            ibTag.style.fontColor = params.foreColor || '#000000';
            if (ieVer <= 6 && ieVer >= 4) {
                if (document.documentElement && document.documentElement.clientWidth) {
                    ibTag.style.width = document.documentElement.clientWidth;
                } else if (document.body && document.body.clientWidth) {
                    ibTag.style.width = document.body.clientWidth;
                }
            };
            var iconTag = document.createElement('img');
            iconTag.style.cssText = 'width: 14px; height: 16px; float: left; border: 0px; margin-right: 5px; margin-left: 7px;';
            iconTag.src = params.icon || 'http://www.microsoft.com/germany/msdn/components/ie/alert.gif';
            var textTag = document.createElement('div');
            textTag.innerHTML = params.message || '';
            textTag.style.cssText = 'text-align:left; padding-left: 26px; padding-right: 24px; font-family: Arial; font-size: small; cursor: default;';
            var closeTag = document.createElement('img');
            closeTag.style.cssText = 'width: 18px; height: 18px; float: right; border: 0px; margin-right: 7px; cursor: default;';
            closeTag.src = 'http://www.microsoft.com/germany/msdn/components/ie/x.gif';
            closeTag.onclick = function () {
                ibTag.style.display = 'none';
            };
            ibTag.appendChild(closeTag);
            ibTag.appendChild(iconTag);
            ibTag.appendChild(textTag);
            this.InfoBar = ibTag;
            document.body.insertBefore(ibTag, document.body.firstChild);
            ibTag.style.top = document.body.scrollTop - parseInt(this.InfoBar.offsetHeight) + 'px';
            this.show = function (speed) {
                var me = this;
                if (parseInt(this.InfoBar.style.top) < 0) {
                    ibTag.style.top = parseInt(ibTag.style.top) + 2 + 'px';
                    setTimeout(function () {
                        me.show(speed)
                    }, speed || 50);
                } else {
                    if (ieVer <= 6 && ieVer >= 4) {
                        this.InfoBar.style.top = (document.compatMode == 'CSS1Compat') ? document.documentElement.scrollTop + 'px' : body.scrollTop + 'px';
                    } else {
                        this.InfoBar.style.top = 0;
                        if (document.compatMode != 'BackCompat') {
                            this.InfoBar.style.position = "fixed";
                        }
                    }
                }
            }
        }
         //-->
    </script>
            
            
            
		</article>
	</section>
    <?php // get_sidebar(); ?>
<?php get_footer(); ?>