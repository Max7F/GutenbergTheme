<style>
/*Start Settings*/
:root {
    --main_color: #BFA87F;
    --second_color: #1C1C22;
    --hover_color: #000;
    --second_hover_color: #fff;
    --title_color: #48443B;
    --text_color: #162E3A;
    --bg_color: #F7F6F4;
    --font: 'Your Font';
}
body{
    font: 400 18px/1.33 var(--font);
    color: var(--text_color);
    margin: 0;
}
h1 {
    font: 500 42px var(--font_title);
    color: var(--title_color);
}
h2 {
    font: 500 34px var(--font_title);
    color: var(--title_color);
}
h3 {
    font: 400 24px var(--font_title);
    color: var(--title_color);
}
h4 {
    font: 400 28px var(--font_title);
    color: var(--title_color);
    font-weight: 700;
}
h5 {
    font: 400 24px var(--font_title);
    color: var(--title_color);
}
h6 {
    font: 400 18px var(--font_title);
    color: var(--title_color);
}
@media(max-width: 767px) {
    h1 {
        font-size: 24px;
    }
    h2 {
        font-size: 24px;
    }
    h3 {
        font-size: 18px;
    }
    body {
        font-size: 14px;
    }
}
.button_basic{
    display: inline-block;
    padding: 13px 30px;
    font-family: 'Lato', sans-serif;
    font-size: 18px;
    background-color: var(--main_color);
    color: var(--text_color);
    cursor: pointer;
}
input.form-control::-moz-placeholder,
textarea::-moz-placeholder{
    color: #7D7D7D;
    opacity: 1!important;
}
input.form-control::-webkit-input-placeholder,
textarea::-webkit-input-placeholder{
    color: #7D7D7D;
}
a,
a:hover,
a:focus{
    text-decoration: none;
}
ul,
ol{
    list-style-position: inside;
}
header ul,
header ol,
footer ul,
footer ol{
    padding: 0;
    margin: 0;
}
header ul,
footer ul{
    list-style: none;
}
/*End Start Settings*/

/*Standart Settings*/

.container{
    width: 100%;
    padding: 0 10px;
    margin: 0 auto;
    max-width: 1160px;
}

*,
:after,
:before{
    box-sizing: border-box;
}
body > .content{
    min-height: 650px;
    width: 100%;
    clear: both;
}
.customClear:before,
.customClear:after{
    content:"";
    display:block;
    height:0;
    overflow:hidden;
    clear:both;
}
a,
button,
input[type="submit"],
a img{
    transition:all 0.3s linear;
}
input:not([type="checkbox"]),
select{
    -moz-appearance: none;
    -webkit-appearance: none;
}
iframe,
img{
    max-width: 100%;
}
img{
    vertical-align: middle;
}
a img{
    border: none;
}
input,
textarea,
select{
    border-radius: 0;
    border: none;
    box-shadow: none;
}
.caret {
    display: none;
    width: 0;
    height: 0;
    margin-left: 2px;
    vertical-align: middle;
    border-top: 4px solid;
    border-right: 4px solid transparent;
    border-left: 4px solid transparent;
}
.logo:hover img{
    opacity: 0.7;
}
/*End Standart Settings*/

/* Header Styles */
header{
    position: relative;
    width: 100%;
    z-index: 999;
    background: #fff;
}
header .container{
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding-top: 26px;
    padding-bottom: 26px;
}
header nav ul {
    display: flex;
}
header nav li{
    position: relative;
}

header nav li.no_open > a {
    /*pointer-events: none;*/
    /*touch-action: none;*/
    cursor: default;

}


header nav li a{
    padding: 13px 26px;
    color: var(--text_color);
    display: block;
    text-decoration: none!important;
    font-size: 18px;
    line-height: 1.16;
    font-weight: 500;
    position: relative;
}
header nav li a:hover{
    color: var(--main_color);
}
header nav .menu-header-menu-container > ul > li{
    display: inline-block;
}
header nav .menu-header-menu-container > ul > li > a{
    text-transform: uppercase;
}
header nav .menu-item-has-children .sub-menu{
    position: absolute;
    top: calc(100% + 10px);
    max-width: 100%;
    left: 0;
    padding-top: 0;
    box-shadow: 0 4px 4px rgb(0 0 0 / 25%);
    display: block;
    overflow: hidden;
    height: 0;
    transition: .4s;
}
/* header .fixing.activated nav .menu-item-has-children .sub-menu {
     top: 120%;
}*/

header nav .menu-item-has-children .sub-menu li{
    width: 100%;
    max-width: 100%;
}
header nav .menu-item-has-children .sub-menu li a{
    padding: 12px 25px;
    display: block;
    background: #F7F6F4;
    color: var(--text_color);
    margin-top: 0;
    text-align: center;
    border-top: 1px solid rgba(22, 46, 58, 0.2);
    font-size: 14px;
}
header nav .menu-item-has-children .sub-menu li:first-child a{
    border-top: 9px solid var(--text_color);
}
header nav .menu-item-has-children .sub-menu li a:hover{
    color: var(--text_color);
}
header nav .menu-item-has-children .sub-menu .sub-menu{
    top: 0;
    left: 100%;
}
header nav .menu-item-has-children .sub-menu .caret{
    margin-left: 4px;
}
.openMenu{
    display: block!important;
}
/*sticky header*/
.fixing{
    top: -70px;
    transition: top 0.3s
}
.fixing.activated{
    position: fixed;
    width: 100%;
    left: 0;
    background: #fff;
    box-shadow: 0 5px 10px rgba(0,0,0,.16)
}
.fixing.activated .container{
    padding-top: 10px;
    padding-bottom: 10px;
}
/*end sticky header*/
/*mobile menu*/
.mobileMenu{
    display: none;
    cursor: pointer;
    height: 38px;
    padding: 8px 9px;
    margin-left: 15px;
    width: 50px;
}
.iconAnime{
    position: relative;
    height: 100%;
    width: 100%;
}
.iconAnime span{
    height: 3px;
    width: 100%;
    border-radius: 3px;
    background: var(--main_color);
    position: absolute;
    left: 0;
}
.iconAnime span:first-child{
    top: 0;
    transition: all 0.25s;
}
.iconAnime span:nth-child(2){
    top: calc(50% - 2px);
    transition: all 0.25s;
}
.iconAnime span:last-child{
    bottom: 0;
    transition: all 0.25s;
}
.mobileMenuOpen .iconAnime span:first-child{
    top: calc(50% - 4px);
    transform: rotate(225deg);
}
.mobileMenuOpen .iconAnime span:nth-child(2){
    top: calc(50% - 2px);
    display:none;
}
.mobileMenuOpen .iconAnime span:last-child{
    top: 7px;
    transform: rotate(135deg);
}
.menu-item-has-children .thereCaret.active{
    transform: rotate(90deg);
}
.menu-item-has-children .thereCaret{
    position: absolute;
    top: 0;
    right: 5px;
    cursor: pointer;
    vertical-align: middle;
    padding: 10px;
    display: flex;
    align-items: center;
    transition: .3s;
}
.thereCaret img{
    height: 25px;
    transition: 0.3s;
    display: block;
}
@media(min-width: 1200px) {
    header .menu-item-has-children .thereCaret {
        display: none;
    }
}
/*end mobile menu*/
/*End Header Styles*/

/*Responsivness*//*Responsivness*//*Responsivness*/

@media(min-width:1199px){
    header nav li a {
        position: relative;
    }

    header nav .hidden-overflow {
        overflow: inherit !important;
    }
    header nav .menu-item-has-children .sub-menu .sub-menu {
        overflow: hidden !important;
    }

    header nav li.menu-item-has-children > a:before {
        position: absolute;
        content: '';
        display: block;
        width: 100%;
        height: 30px;
        background: transparent;
        top: 100%;
        left: 0;
        pointer-events: none;
        z-index: 1;
        cursor: pointer;
    }

    header nav li.menu-item-has-children > a:hover:before {
        pointer-events: inherit;
        background: transparent;
    }
}
@media(min-width:1199px){
    .menu-item-has-children ul li a:hover{
        background: var(--main_color) !important;
        color: var(--text_color) !important;
    }
}

@media(max-width: 1199px) {
    header nav li a {
        font-size: 16px;
        padding: 13px 19px;
    }
    header nav .menu-item-has-children .sub-menu li a {
        font-size: 12px;
        width: 100%;
    }
    header nav li a {
        width: 100%;
    }

    header nav {
        padding: 0;
        margin-top: 0;
        background: var(--main_color);
        overflow: auto;

    }
    header nav::-webkit-scrollbar {
        width: 0;
    }

    header nav .menu-item-has-children .sub-menu {
        /*transition: .4s;
        overflow: hidden;
        height: 0;*/
    }
    header nav ul {
        flex-direction: column;
    }
    header nav li{
        display: block!important;
        text-align: left;
    }
    header nav li a {
        padding: 10px 15px;
        margin-top: 0;
        color: var(--text_color) !important;
        background: none!important;
        display: inline-block;
    }
    header nav li a:after {
        display: none;
    }
    .mobileMenu{
        display: block;
    }

    header nav {
        height: 0;
        position: absolute;
        top: 100%;
        left: 0;
        width: 100%;
        transition: .4s all;
    }

    .fixing .wrap-nav{
        overflow: hidden;
    }



    .menu-item-has-children ul li a{
        padding: 5px 15px;
    }
    .header-nav .menu-header-menu-container > ul > li{
        margin-right: 0!important;
    }
    .header-nav .menu-header-menu-container > ul > li > a{
        text-transform: uppercase;
        padding: 10px 15px!important;
    }
    .sub-menu{
        padding-left: 20px!important;
        text-transform: uppercase;
    }
    .sub-menu,
    .sub-menu .sub-menu{
        position: static!important;
    }

    header nav .menu-item-has-children .sub-menu {
        box-shadow: none;
    }
    header nav .menu-item-has-children .sub-menu li:first-child a {
        border-top: none;
    }
    header nav .menu-item-has-children .sub-menu li a {
        text-align: left;
    }
}
/*@media(max-width: 767px) {*/
/*    header .logo img {*/
/*        width: 100%;*/
/*        max-width: 160px;*/
/*    }*/
/*}*/
@media(max-width:600px){
    .fixing.activated{
        top:0!important;
    }
}
</style>
