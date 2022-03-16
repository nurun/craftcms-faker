<?php

namespace Jordanbeattie\CraftcmsFaker\models;
use Jordanbeattie\CraftcmsFaker\models\Collection;

class Asset extends Collection
{

    public $url, $title, $alt, $extension, $kind;

    public function __construct( $url = null, $title = null, $alt = null, $kind = null )
    {
        $this->url = $url ?? null;
        $this->title = $title ?? null;
        $this->alt = $alt ?? ($this->title ?? null);
        $this->extension = "png";
        $this->kind = $kind ?? "image";
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