{extends file=$banner->template}

{assign "lpconf" "{$smarty.current_dir}/{$banner->lang}/config.conf"}
{config_load file=$lpconf}

{block name=head}

{/block}

{block name=style}

    .banner-container {
        width: 300px;
        height: 600px;
        background-image: url('{#bg_path#}/{$banner->background}');
    }
    .body {
        flex:5;
    }
    .hero-container {
        max-height: 200px;
    }
    .offer-text {
        font-size:{$banner->textS};
    }
    .button {

    }

{/block}

{block name=body}
    <div class="banner-container">
        <div class="header">
            <img class="logo" src="{$banner->getLogoPath()}" />
        </div>
        <div class="hero-container">
            <img class="hero" src="{#home_path#}/{$banner->getHeroPath()}" />
        </div>
        <div class="body">
            <div class="cta-offer">
                <div class="offer-text">
                    {*{$banner->text}*}
                    {foreach from=$banner->highlightTextElement() key=k item=i}
                        {if $k %2 == 1}
                            <div class="text-highlight">
                                {$i}
                            </div>
                        {else}
                            {$i}
                        {/if}
                    {/foreach}
                </div>
                <div class="button-holder">
                    {*{include file=$banner->getButtonsPath() cta = $banner->cta}*}
                    <button class="button">{$banner->cta}</button>
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
