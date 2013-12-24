<?php
    header("Content-type: text/css; charset: UTF-8");
    define('URL', '/img/');
   
    $absolute_path = $_SERVER['SCRIPT_FILENAME'];
    $imgURL = 'Home_Page/img';
    $img = $_SERVER["DOCUMENT_ROOT"];

    $staticURL = "http://static.downwithdestruction.net/";
?>
html,body {
    background: #191919 url('..<?php echo URL ?>bg-footer.png') top left repeat;
    margin: 0;
    padding: 0;
    font-family: "Trebuchet MS", Vernada, Arial, sans-serif;
    font-size: 12px;
}
h1, h2, h3, h4, h5, h6 {
    font-family: 'Shadows Into Light', cursive;
    font-weight: normal;
}
h1 {
    font-size: 26px;
    line-height: 28px;
}
h2 {
    font-size: 22px;
    line-height: 24px;
}
h3 {
    font-size: 18px;
    line-height: 20px;
}
a:link, a:visited {
    text-decoration: none;
    color: #fafafa;
}
a:link:hover, a:visited:hover {
    text-decoration: underline;
    color: #dadada;
}
a.btn:link:hover {
    text-decoration: none !important;
}
.unselectable {
    -moz-user-select: -moz-none;
    -khtml-user-select: none;
    -webkit-user-select: none;
    -o-user-select: none;
    user-select: none;
}
div.clear {
    clear: both;
}
div.header {
    display: block;
    height: 130px;
    background: #ad0000 url('..<?php echo URL ?>header.png') top left repeat-x;
    border-bottom: 2px solid #4b0000;
}
div.header div.headwrap {
    width: 900px;
    margin: 0px auto;
}
div.header div.headwrap img.logo {
    float: left;
    margin-top: 20px;
}
div.header div.headwrap div.userbox {
    background: #780900;
    padding: 5px;
    float: right;
    border: 1px solid #680600;
    width: 210px;
    margin-top: 25px;
    border-radius: 4px;
    -moz-border-radius: 4px;
    -webkit-border-radius: 4px;
    -khtml-border-radius: 4px;
    color: #ededed;
}
div.header div.headwrap div.userbox img {
    float: left;
    margin: 0 7px 0 0;
    width: 58px;
    height: 58px;
}
div.header div.headwrap div.userbox strong {
    display: block;
    float: left;
}
.navi {
    padding-top: 1pt;
    text-align: center;
    vertical-align: middle;
}
div.header div.headwrap div.navigation {
    margin-top:4px;
}
div.header div.headwrap div.navigation ul, div.header div.navi ul.navi-ul  {
    /*margin: 0;*/
    padding: 0;
    list-style: none;
}
div.header div.headwrap div.navigation ul li, div.header div.navi ul.navi-ul li.navi-li {
    display: inline-block;
    padding-top: 6px;
}
div.header div.headwrap div.navigation ul li a, div.header div.navi ul.navi-ul li.navi-li a {
    padding: 6px 14px;
    color: #fafafa;
    border-radius: 4px;
    -moz-border-radius: 4px;
    -webkit-border-radius: 4px;
    -o-border-radius: 4px;
    opacity: .65;
    -webkit-transition: 300ms linear 0s;
    -moz-transition: 300ms linear 0s;
    -o-transition: 300ms linear 0s;
    transition: 300ms linear 0s;
    margin-right: 40px;
    background: rgba(65,0,0,0.2);
    font-size: 25px;
}
div.header div.headwrap div.navigation ul li a.active,
div.header div.headwrap div.navigation ul li a:hover,
div.header div.navi ul.navi-ul li.navi-li a:active,
div.header div.navi ul.navi-ul li.navi-li a:hover {
    background: #5a0000;
    opacity: 1;
    text-decoration: none !important;
}
div.wrap {
    display: block;
    background: #ededed url('..<?php echo URL ?>forums/backgrounds/carbon_fibre.png');
    padding: 20px 0;
    border-bottom: 2px solid #141414;
    min-height: 400px;
}
div.innerWrap {
    width: 900px;
    margin: 0px auto;
    color: #eaeaea;
}
div.communities ul {
    margin: 0;
    padding: 0;
    list-style: none;
    position: relative;
}
div.communities ul li {
    float: left;
    position: relative;
    width: 49%;
    margin: .5% 0;
    padding: 0;
    height: 340px;
    -webkit-transition: 300ms linear 0s;
    -moz-transition: 300ms linear 0s;
    -o-transition: 300ms linear 0s;
    transition: 300ms linear 0s;
    opacity: .5;
    cursor: pointer;
    margin-right: 5px;
}
div.communities ul li.full {
    width:100%;
}
/*
div.communities ul li:hover {
    z-index: 9000;
    -webkit-box-shadow:0 0 10px #ba0000; 
    -moz-box-shadow: 0 0 10px #ba0000; 
    box-shadow:0 0 10px #ba0000;
    -o-box-shadow: 0 0 10px #ba0000;
    opacity: 1;
}
*/
div.communities ul li img {
    width: 100%;
    height: 100%;
    float: left;
}
img.gtaBackgroundBlock:hover, img.minecraftBackgroundBlock:hover {
    z-index: 9000;
    -webkit-box-shadow:0 0 10px #ba0000; 
    -moz-box-shadow: 0 0 10px #ba0000; 
    box-shadow:0 0 10px #ba0000;
    -o-box-shadow: 0 0 10px #ba0000;
    opacity: 1;
}
img.gtaBackgroundBlock {
    background: transparent url(..<?php echo URL ?>GTA-Online.jpg) 0 -70px no-repeat;
    background-size: cover;
    opacity: .7;
    border-radius: 50%;
}
img.minecraftBackgroundBlock {
    background: transparent url(..<?php echo URL ?>minecraft_background.png) 0 -60px no-repeat;
    background-size: cover;
    opacity: .7;
    border-radius: 50%;
}
div.communities ul li h1 {
    margin: 0px;
    position: absolute;
    bottom: 40px;
    left: 21%;
    bottom: 5px;
    left: 5px;
    color: #ededed;
    padding: 3px 5px;
    background: #000000;
    opacity: .8;
    font-size: 50px;
    border-radius: 4px;
    -moz-border-radius: 4px;
    -webkit-border-radius: 4px;
    -o-border-radius: 4px;
    text-align: center;
}
div.communities ul li div.status {
    position: absolute;
    top: 0px;
    right: 15px;
    opacity: .75;
    color: #ededed;
    padding: 3px 6px;
    font-size: 14px;
    border-bottom-left-radius: 4px;
    border-bottom-right-radius: 4px;
    -moz-border-bottom-left-radius: 4px;
    -moz-border-bottom-right-radius: 4px;
    -webkit-border-bottom-left-radius: 4px;
    -webkit-border-bottom-right-radius: 4px;
    -o-border-bottom-left-radius: 4px;
    -o-border-bottom-right-radius: 4px;
}
div.communities ul li div.status.online {
    background: #009900;
}
div.communities ul li div.status.offline {
    background: #990000;
}
table.serviceStatus {
    width: 50%;
    float:left;
    font-size: 14px;
}
table.serviceStatus.mini {
    width: 40%;
    float:none;
    font-size: 12px;
}
table.serviceStatus tr {
    opacity: .65;
    -webkit-transition: 300ms linear 0s;
    -moz-transition: 300ms linear 0s;
    -o-transition: 300ms linear 0s;
    transition: 300ms linear 0s;
    cursor: default;
}
table.serviceStatus tr:hover {
    opacity: 1;
    z-index: 9000;
}
table.serviceStatus tr th {
    padding: 4px 8px;
    font-weight: normal;
    text-align: right;
    width: 45%;
}
span.status {
    padding: 4px 8px;
    text-align: left;
    border-radius: 4px;
    -moz-border-radius: 4px;
    -webkit-border-radius: 4px;
    -o-border-radius: 4px;
    color: #ffffff;
    display:block;
    background: #adadad;
}
span.status.up {
    background: #009900;
}
span.status.down {
    background: #990000;
}
div.footer {
    display: block;
    color: #eaeaea;
    padding: 5px 0px;
    width: 900px;
    margin: 0px auto 50px auto;
}
div.footer div.col {
    width: 200px;
    float: left;
    margin: 0px 4px;
}
div.footer div.col.xtra {
    width: 268px !important;
}
div.footer div.col ul {
    margin: 0;
    padding: 0;
    list-style: none;
}
div.overlay {
    background: #000;
    opacity: .55;
    width:100%;
    height:100%;
    position:fixed;
    top:0;
    left:0;
    z-index:9500;
    display: none;
}
div.overlayContent {
    width: 880px;
    background: #f4f4f4;
    opacity: .9;
    height: 380px;
    position: fixed;
    top: 50%;
    left: 50%;
    border: 1px solid #8b8b8b;
    margin-left: -461px;
    margin-top: -211px;
    z-index: 9600;
    padding: 20px;
    -webkit-box-shadow:0 0 10px #676767; 
    -moz-box-shadow: 0 0 10px #676767; 
    box-shadow:0 0 10px #676767;
    -o-box-shadow: 0 0 10px #676767;
    border-radius: 4px;
    -moz-border-radius: 4px;
    -webkit-border-radius: 4px;
    -o-border-radius: 4px;
    display:none;
}
div.overlayContent h1,
div.overlayContent h2,
div.overlayContent h3 {
    margin: 0;
    padding: 0;
}
div.overlayContent div.content {
    width: 650px;
    height: 100%;
    float: left;
    position:relative;
}
div.overlayContent div.content div.toolbar {
    position: absolute;
    bottom: 0px;
    right: 0px;
}
div.overlayContent div.sidebar {
    margin-left: 660px;
    width:220px;
}
.noAnimate {
    -webkit-transition: none !important;
    -moz-transition: none !important;
    -o-transition: none !important;
    transition: none !important;
}

.footer-sponsor {
    display: block;
    padding: 15px 0px 0px;
}

.footer-sponsor img {
    opacity: .25;
    filter: alpha(opacity=25);
}

.footer-sponsor a:hover {
    text-decoration: none !important;
}
