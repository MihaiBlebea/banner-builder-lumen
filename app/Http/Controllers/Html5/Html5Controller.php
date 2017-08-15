<?php

namespace App\Http\Controllers\Html5;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Banner;

class Html5Controller extends Controller
{
    // http://localhost:2777/banner-builder-lumen/public/index.php/html5/casino/120x600/en
    // ?camp=banner&cta=Click-here&hero=player&button=1&bg=1&offer=1

    //<iframe height="600" width="300" scrolling="no" style="overflow: hidden;border:0;" src="http://localhost:2777/banner-builder-lumen/public/index.php/html5/casino/300x600/en?camp=banner&amp;bg=bg_3.jpg&amp;button=button_2.tpl&amp;cta=Click&amp;hero=player.png"></iframe>
    public function index( Request $request, $product, $size, $lang) {

        //$domain = $landing->getDomainKey();
        $domain = 'netbetcom';

        if(!$request->input('cta'))
        {
            $cta = "Play now!";
        } else {
            $cta = $request->input('cta');
        }

        $temp = $request->input('temp');
        $hero = $request->input('hero');
        $campName = $request->input('camp');
        $button = $request->input('button');
        $bg = $request->input('bg');
        $text = $request->input('text');
        $textS = $request->input('textS');

        $banner = new Banner($domain, $product, $campName, $size, $lang);
        $banner->setElements($temp, $button, $bg, $cta, $hero, $text, $textS);
        $template = $banner->getPathToTemplate();

        $var = ['banner' => $banner];

        return view($template, $var);
    }

    public function admin()
    {
        $dirComponents = 'C:\laragon\www\banner-builder-lumen\resources\views';

        //$domain = array('netbetro', 'netbetcom', 'netbetgr');
        $products = array('casino', 'sport');
        $campaigns = array('banner');
        $sizes = array('300x600', '120x600');
        $langs = array('en', 'fr', 'ro');

        $templates = array_diff(scandir($dirComponents . '\banner-lab\templates'), array('.', '..'));
        $domain = array_diff(scandir($dirComponents . '\pages\html5'), array('.', '..'));
        $buttons = array_diff(scandir($dirComponents . '\banner-lab\components\buttons'), array('.', '..'));
        $backgrounds = array_diff(scandir($dirComponents . '\banner-lab\components\bg'), array('.', '..'));
        $heros = array_diff(scandir($dirComponents . '\banner-lab\components\img'), array('.', '..'));

        $var = [
            'domains' => $domain,
            'products' => $products,
            'campaigns' => $campaigns,
            'sizes' => $sizes,
            'langs' => $langs,
            'templates' => $templates,
            'buttons' => $buttons,
            'backgrounds' => $backgrounds,
            'heros' => $heros
        ];

        $template = 'pages.admin.index';
        return view($template, $var);
    }
}
