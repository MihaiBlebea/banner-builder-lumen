<?php

namespace App\Http\Controllers\Html5;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Banner;

class Html5Controller extends Controller
{
    // http://localhost:2777/banner-builder-lumen/public/index.php/html5/casino/120x600/en?camp=banner
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

}
