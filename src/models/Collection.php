<?php

namespace Jordanbeattie\CraftcmsFaker\models;
use Countable;
use craft\base\Model;

class Collection extends Model implements Countable
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

    public function limit($limit)
    {
        $all_items = $this->all();
        $limited_items = array_splice($all_items, 0, $limit);
        return new Collection($limited_items);
    }

    public function count()
    {
        return count($this->all());
    }

    public function first()
    {
        return $this->all()[0];
    }

    public function nth($n)
    {
        $all = $this->all();
        return array_key_exists($n, $all) ? $all[$n] : $this->first();
    }

}