<?php

namespace Jordanbeattie\CraftcmsFaker\variables;
use Craft;
use Jordanbeattie\CraftcmsFaker\models\AssetField;
use Jordanbeattie\CraftcmsFaker\models\Collection;
use Jordanbeattie\CraftcmsFaker\models\SuperTable;

Class FakerVariable
{
    
    public function assetField( $attributes )
    {
        $url = $attributes['url'] ?? 'https://picsum.photos/200';
        $title = $attributes['title'] ?? 'Default image title';
        $alt = $attributes['alt'] ?? $title;
        return new AssetField($url, $title, $alt);
    }

    public function collection( $items )
    {
        return new Collection( $items ); 
    }

    public function superTable( $items = null )
    {
        return new Collection( $items );
    }
    
}
