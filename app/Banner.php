<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    public $domain;
    public $product;
    public $campaign;
    public $size;
    public $lang;

    public $path;

    public $logo;
    public $offer;
    public $button;
    public $cta;
    public $ctaLink;
    public $background;

    public function __construct($domain, $product, $campaign, $size, $lang)
    {
        $this->domain = $domain;
        $this->product = $product;
        $this->campaign = $campaign;
        $this->size = $size;

        if(!$lang)
        {
            $this->lang = 'en';
        } else {
            $this->lang = $lang;
        }

        $this->path = 'pages.html5.' . $domain . '.' . $product . '.' . $campaign . '.' . $size . '.template';

        $this->ctaLink = "http://go.netbet.ro";
        $this->logo = "logo_1.png";
    }

    public function setElements($offer, $button, $background, $cta)
    {
        $this->offer = $offer;
        $this->button = $button;
        $this->background = $background;
        $this->cta = $cta;
    }

    public function getPathToTemplate()
    {
        return $this->path;
    }

    public function getLogoPath()
    {
        return 'https://bookiesbonuses.com/assets/local/Company/logos/_400xAUTO_fit_center-center/netbet_logo_transp.png';
    }

    public function getButtonsPath()
    {
        return 'banner-lab/components/buttons';
    }
}
