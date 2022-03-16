<?php

namespace Jordanbeattie\CraftcmsFaker\models;
use Jordanbeattie\CraftcmsFaker\models\Asset;
use Jordanbeattie\CraftcmsFaker\models\Collection;

class DonkeyTail extends Asset
{

    public $url, $canvas, $pins;

    public function __construct( $url = null, $pins = null )
    {
        $this->url = $url ?? null;
        $this->canvas = $this;
        $this->pins = $pins;
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