<?php

namespace Jordanbeattie\CraftcmsFaker\models;
use Jordanbeattie\CraftcmsFaker\models\Collection;

class SuperTable extends Collection
{

    public $fields;

    public function __construct( $fields = null )
    {
        $this->fields = $fields;
    }

}