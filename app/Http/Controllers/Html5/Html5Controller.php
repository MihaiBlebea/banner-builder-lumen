<?php

namespace App\Http\Controllers\Html5;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
//use App\Models\Landing;

class Html5Controller extends Controller
{
    // http://localhost:2777/banner-builder-lumen/public/index.php/html5/casino/120x600/en?camp=banner
    public function index( Request $request, $product, $size,  $lang){

        //$domain = $landing->getDomainKey();
        $domain = 'netbetcom';
        //$cta = $landing->getCtaUrlByProduct($request->input(), $domain,$lang,$product);
        $campName = $request->input('camp');

        $cta = 'click here';

        //$template = 'pages.html5.' . $domain . '.' . $product . '.' . $campName . '.' . $size . '.' . $lang . '.template';
        $template = 'pages.html5.' . $domain . '.' . $product . '.' . $campName . '.' . $size . '.template';

        $var = [
          'cta' => $cta,
          'lang' => $lang
        ];

        return view($template, $var);
    }

}
