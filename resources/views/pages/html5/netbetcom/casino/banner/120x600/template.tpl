{extends file="banner-lab/templates/template_1.tpl"}

{assign "lpconf" "{$smarty.current_dir}/{$banner->lang}/config.conf"}
{config_load file=$lpconf}

{block name=head}

{/block}

{block name=style}
    {literal}
        .banner-container {
            width: 120px;
            height: 600px;
            background-color: red;
            overflow:hidden;
            background-image: url('https://climate.nasa.gov/assets/images_of_change/ioc_intro_image.png');
        }
        .header {
            background-color:#000;
            padding:3px;
        }
        .logo {
            max-width: 100%;
        }
        .body {
            padding: 5px;
        }
        .offer-text {
            color: #fff;
            font-size: 2.5em;
        }
        .button {
            
        }
        .footer {
            color:#fff;
            text-align:center;
        }
    {/literal}
{/block}

{block name=body}
    <div class="banner-container">
        <div class="header">
            <img class="logo" src="{$banner->getLogoPath()}" />
        </div>
        <div class="body">
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
                    {include file='banner-lab/components/buttons/button_1.tpl' cta = $banner->cta}
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
