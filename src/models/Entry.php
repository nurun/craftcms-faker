<?php

namespace Jordanbeattie\CraftcmsFaker\models;
use Jordanbeattie\CraftcmsFaker\models\Asset;
use Jordanbeattie\CraftcmsFaker\models\Collection;

class Entry extends Collection
{

    public $attributes;

    public function __construct( $attributes = null )
    {
        $this->attributes = $attributes ?? [];
    }

    public function getThumbnail()
    {
        return $this->image;
    }

    public function get()
    {
        $class = new \StdClass();
        foreach( $this->attributes as $key => $value )
        {
            $class->$key = $value;
        }
        return $class;
    }

}