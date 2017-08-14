{extends file="banner-lab/templates/template_1.tpl"}

{assign "lpconf" "{$smarty.current_dir}/{$lang}/config.conf"}
{config_load file=$lpconf}

{block name=head}
    <!-- <script src="{URL::to('/')}/../../resources/views/banner-lab/resources/js/animation.js"></script> -->
{/block}

{block name=style}

{/block}

{block name=body}
    This is banner no 1
    <div style="width:200px;height:200px;background-color:black">

    </div>
    <p class="offer-text">
        {#text1#}
    </p>
    <p class="offer-text">
        {#text2#}
    </p>
    <p class="offer-text">
        {#text3#}
    </p>
{/block}

{block name=footer}

{/block}
