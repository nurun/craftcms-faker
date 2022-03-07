<?php

namespace Jordanbeattie\CraftcmsFaker\models;
use craft\base\Model;

class Collection extends Model
{

    public $items;

    public function __construct( $items = null )
    {
        $this->items = $items;
    }

    public function all()
    {
        if( !is_null($this->items) )
        {
            return $this->items;
        }
        return [$this];
    }

    public function one()
    {
        if(!is_null($this->items) )
        {
            return $this->items[0];
        }
        return $this; 
    }

}