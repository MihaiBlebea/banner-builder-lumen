<?php

namespace App\Http\Controllers\Html5;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Banner;

class Html5Controller extends Controller
{
    // http://localhost:2777/banner-builder-lumen/public/index.php/html5/casino/120x600/en
    // ?camp=banner&cta=Click-here&hero=player&button=1&bg=1&offer=1
    public function index( Request $request, $product, $size, $lang) {

        //$domain = $landing->getDomainKey();
        $domain = 'netbetcom';

        if(!$request->input('cta'))
        {
            $cta = "Play now!";
        } else {
            $cta = $request->input('cta');
        }

        $hero = $request->input('hero');
        $campName = $request->input('camp');
        $button = $request->input('button');
        $bg = $request->input('bg');
        $offer = $request->input('offer');

        $banner = new Banner($domain, $product, $campName, $size, $lang);
        $banner->setElements($offer, $button, $bg, $cta, $hero);
        $template = $banner->getPathToTemplate();

        $var = ['banner' => $banner];

        return view($template, $var);
    }

    public function admin()
    {
        $domain = array('netbetro', 'netbetcom', 'netbetgr');
        $products = array('casino', 'sport');
        $campaigns = array('banner');
        $sizes = array('500x500', '120x600');
        $langs = array('en', 'fr', 'de');

        $buttons = array(1,2);
        $backgrounds = array(1,2,3);
        //$ctas = array('500x500', '120x600');
        $heros = array('player.png', 'basket.png', 'tennis.png');

        $var = [
            'domains' => $domain,
            'products' => $products,
            'campaigns' => $campaigns,
            'sizes' => $sizes,
            'langs' => $langs,
            'buttons' => $buttons,
            'backgrounds' => $backgrounds,
            'heros' => $heros,
        ];

        $template = 'pages.admin.index';
        return view($template, $var);
    }
}
