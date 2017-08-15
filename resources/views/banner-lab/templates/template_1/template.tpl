{* Smarty 3 *}
<html>
    <head>
        <title>Banner</title>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.js"></script>
        <!-- <script src="{URL::to('/')}/../../resources/views/banner-lab/resources/js/animation.js"></script> -->
        <link rel="stylesheet" type="text/css" href="{$banner->resourcesPath}/banner-lab/templates/template_1/style.css">
        {block name=head}{/block}

        <style>
            {block name=style}{/block}
        </style>
    </head>
    <body>
        {block name=body}{/block}

        <script src="{$banner->resourcesPath}/banner-lab/templates/template_1/animation.js"></script>
    </body>
</html>
