<?php

namespace Jordanbeattie\CraftcmsFaker\models;
use Jordanbeattie\CraftcmsFaker\models\Collection;

class SuperTable extends Collection
{

    public $items;

    public function __construct( $items = null )
    {
        $this->items = $items;
    }

}