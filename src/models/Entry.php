<?php

namespace Jordanbeattie\CraftcmsFaker\models;
use Jordanbeattie\CraftcmsFaker\models\Asset;
use Jordanbeattie\CraftcmsFaker\models\Collection;

class Entry extends Collection
{

    public $attributes, $title, $slug, $url, $image;

    public function __construct( $title = null, $slug = null, $attributes = null )
    {
        $this->title = $title ?? "Fake entry title";
        $this->slug = $slug ?? "fake-entry-slug"; 
        $this->url = '#' . $this->slug;
        $this->attributes = $attributes ?? [];
        $this->image = new Asset();
        $this->section = [
            'name' => 'Homepage', 
            'handle' => 'homepage'
        ];
    }

    public function getThumbnail()
    {
        return $this->image;
    }

}