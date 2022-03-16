<?php

namespace Jordanbeattie\CraftcmsFaker\variables;
use Craft;
use Jordanbeattie\CraftcmsFaker\models\Asset;
use Jordanbeattie\CraftcmsFaker\models\Collection;
use Jordanbeattie\CraftcmsFaker\models\DonkeyTail;
use Jordanbeattie\CraftcmsFaker\models\Entry;
use Jordanbeattie\CraftcmsFaker\models\Link;
use Jordanbeattie\CraftcmsFaker\models\SuperTable;

Class FakerVariable
{
    
    public function asset( $attributes = null )
    {
        $url = $attributes['url'] ?? 'https://picsum.photos/200';
        $title = $attributes['title'] ?? 'Default image title';
        $alt = $attributes['alt'] ?? $title;
        $kind = $attributes['kind'] ?? null;
        return new Asset($url, $title, $alt, $kind);
    }

    public function collection( $items = null )
    {
        return new Collection( $items ); 
    }

    public function superTable( $items = null )
    {
        return new SuperTable( $items );
    }

    public function link( $attributes = null )
    {
        $url = $attributes['url'] ?? null;
        $text = $attributes['text'] ?? null;
        $target = $attributes['target'] ?? null;
        return new Link( $url, $text, $target );
    }

    public function entry( $attributes = null )
    {
        return new Entry( $attributes );
    }

    public function donkeyTail( $attributes = null )
    {
        $url = $attributes['url'] ?? 'https://picsum.photos/200';
        $pins = $arrtibutes['pins'] ?? [];
        return new DonkeyTail($url, $pins);
    }
    
}
