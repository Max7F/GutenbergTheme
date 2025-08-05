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
        font: 500 42px var(--font);
        color: var(--title_color);
    }
    h2 {
        font: 500 34px var(--font);
        color: var(--title_color);
    }
    h3 {
        font: 400 24px var(--font);
        color: var(--title_color);
    }
    h4 {
        font: 400 28px var(--font);
        color: var(--title_color);
    }
    h5 {
        font: 400 24px var(--font);
        color: var(--title_color);
    }
    h6 {
        font: 400 18px var(--font);
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
    .container{
        width: 100%;
        padding: 0 10px;
        margin: 0 auto;
        max-width: 1160px;
    }
    .button_basic{
        padding: 12px 40px;
        display: inline-block;
        font-size: 18px;
        line-height: 1.22;
        letter-spacing: .3px;
        border-radius: 25px;
        background-color: var(--main_color);
        border: 1px solid var(--main_color);
        color: #fff;
        text-align: center;
    }
    .button_basic:hover {
        background-color: #fff;
        color: var(--main_color);
    }
    a {
        transition: .3s ease-in-out;
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


</style>