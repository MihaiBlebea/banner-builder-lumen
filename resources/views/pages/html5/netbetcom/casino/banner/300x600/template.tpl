{extends file="banner-lab/templates/template_1.tpl"}

{assign "lpconf" "{$smarty.current_dir}/{$banner->lang}/config.conf"}
{config_load file=$lpconf}

{block name=head}

{/block}

{block name=style}

        .banner-container {
            width: 300px;
            height: 600px;
            background-color: red;
            overflow:hidden;
            background-image: url('{#bg_path#}/{$banner->background}');
        }
        .header {
            background-color:#000;
            padding:3px;
        }
        .logo {
            max-width: 50%;
        }
        .body {
            padding: 5px;
        }
        .cta-offer {
            text-align:center;
            margin-bottom:10px;
        }
        .hero {
            width:70%;
            margin-top:20px;
            margin-bottom:20px;
            display:block;
            margin:auto;
        }
        .offer-text {
            color: #fff;
            font-size: 3.5em;
            font-family: fantasy;
            margin-top:5px;
        }
        .button {
            margin-top:40px;
        }
        .footer {
            color:#fff;
            text-align:center;
        }

{/block}

{block name=body}
    <div class="banner-container">
        <div class="header">
            <img class="logo" src="{$banner->getLogoPath()}" />
        </div>
        <div class="body">
            <img class="hero" src="{#home_path#}/{$banner->getHeroPath()}" />
            <div class="cta-offer">
                <div class="offer-text">
                    {#text1#}
                </div>
                <div class="offer-text">
                    {#text2#}
                </div>
                <div class="offer-text">
                    {#text3#}
                </div>
                <div class="button">
                    {include file=$banner->getButtonsPath() cta = $banner->cta}
                </div>
            </div>
        </div>
        <div class="footer">
            {#terms#}
        </div>
    </div>
{/block}

{block name=footer}

{/block}
