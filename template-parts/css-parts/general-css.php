<style>
    /*Start Settings*/
    :root {
        --main_color: #3F9ED8;
        --second_color: #1C1C22;
        --hover_color: #000;
        --second_hover_color: #fff;
        --title_color: #121212;
        --text_color: #808080;
        --bg_color: #F7F6F4;
        --font: "Lexend", sans-serif;
    }

    body{
        font: 400 16px/1.5 var(--font);
        color: var(--text_color);
        margin: 0;
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
    .container{
        width: 100%;
        padding: 0 20px;
        margin: 0 auto;
        max-width: 1240px;
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