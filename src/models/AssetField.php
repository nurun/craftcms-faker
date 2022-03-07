<?php

namespace Jordanbeattie\CraftcmsFaker\models;
use Jordanbeattie\CraftcmsFaker\models\Collection;

class AssetField extends Collection
{

    public $url, $title, $alt, $extension;

    public function __construct( $url = null, $title = null, $alt = null )
    {
        $this->url = $url ?? null;
        $this->title = $title ?? null;
        $this->alt = $alt ?? ($this->title ?? null);
        $this->extension = "png";
    }

    public function url()
    {
        return $this->url;
    }

    public function getUrl($attributes=null)
    {
        return $this->url;
    }

}