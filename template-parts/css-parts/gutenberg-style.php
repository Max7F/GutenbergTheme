<style>
    body .theme-browser .theme .theme-name{
        height: auto;
    }
    .wp-block-post-content h1 {
        font: 700 42px/1.2 var(--font_title);
    }
    .wp-block-post-content h2 {
        font: 500 52px/1.25 var(--font);
        color: var(--title_color);
        text-align: center;
    }
    .wp-block-post-content h3 {
        font: 400 24px var(--font);
        color: var(--title_color);
    }
    .wp-block-post-content h4 {
        font: 400 28px var(--font);
        color: var(--title_color);
        font-weight: 700;
    }
    .wp-block-post-content h5 {
        font: 400 24px var(--font);
        color: var(--title_color);
    }
    .wp-block-post-content h6 {
        font: 400 18px var(--font_title);
        color: var(--title_color);
    }
    @media(max-width: 767px) {
        .wp-block-post-content h1 {
            font-size: 24px;
        }
        .wp-block-post-content h2 {
            font-size: 24px;
        }
        .wp-block-post-content h3 {
            font-size: 18px;
        }
    }

    .block-editor__container .banner img{
        height: 100%;
    }
    .wp-block-post-content .container{
        width: 100%;
        padding: 0 15px;
        margin: 0 auto;
        max-width: 1230px;
    }
    .wp-block{
        max-width: 1300px;
    }
    .wp-block a,
    .wp-block a:hover,
    .wp-block a:focus{
        text-decoration: none;
    }
    .alignleft {
        float: left;
        margin: 7px 28px 28px 0;
        height: auto!important;
    }
    .alignright {
        float: right;
        margin: 7px 0 28px 28px;
        height: auto!important;
    }
    .aligncenter {
        clear: both;
        display: block;
        margin: 7px auto;
        height: auto!important;
    }
    .alignwide {
        margin: 0 auto;
        width: 100%;
        max-width: 1200px;
        justify-content: center;

    }
    .alignfull {
        margin-left: calc( -100vw / 2 + 100% / 2 );
        margin-right: calc( -100vw / 2 + 100% / 2 );
        max-width: 100vw;
        width: auto;
    }
    /*wp-admin block editor styles*/
    .block-editor .wp-block {
        max-width: 100%;
        padding: 0 15px;
    }
    .acf-field[data-type="textarea"] textarea{
        box-shadow: 0 0 0 transparent;
        border-radius: 4px;
        border: 1px solid #8c8f94;
    }
    /*End Standart Settings*/

</style>