<?php

namespace Jordanbeattie\CraftcmsFaker\models;
use Jordanbeattie\CraftcmsFaker\models\Asset;
use Jordanbeattie\CraftcmsFaker\models\Collection;

class DonkeyTail extends Asset
{

    public $url, $title, $alt, $extension, $kind, $canvas, $pins;

    public function __construct( $url = null, $title = null, $alt = null, $kind = null )
    {
        $this->url = $url ?? null;
        $this->title = $title ?? null;
        $this->alt = $alt ?? ($this->title ?? null);
        $this->extension = "png";
        $this->kind = $kind ?? "image";
        $this->canvas = $this;
        $this->pins = [];
    }

    public function url()
    {
        return $this->url;
    }

    public function getUrl($attributes=null)
    {
        return $this->url;
    }

    public function setTransform($attributes=null)
    {
        return $this;
    }

}