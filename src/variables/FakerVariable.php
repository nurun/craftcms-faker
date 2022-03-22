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
        $fakeUrl = 'https://picsum.photos/200/200';
        if( !is_null($attributes) && array_key_exists('width', $attributes) && array_key_exists('height', $attributes) )
        {
            $fakeUrl = "https://picsum.photos/" . $attributes['width'] . "/" . $attributes['height'];
        }
        $url = $attributes['url'] ?? $fakeUrl;
        $title = $attributes['title'] ?? 'Default image title';
        $alt = $attributes['alt'] ?? $title;
        $kind = $attributes['kind'] ?? null;

        return new Asset($url, $title, $alt, $kind);
    }

    public function collection( $items = null )
    {
        return new Collection( $items ); 
    }

    public function supertable( $items = null )
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

    public function donkeytail( $attributes = null )
    {
        $url = $attributes['url'] ?? 'https://picsum.photos/200';
        $pins = $attributes['pins'] ?? [];
        return new DonkeyTail($url, $pins);
    }

    public function navigation( $totalItems )
    {
        $items = [];
        for ($i=0; $i < $totalItems; $i++) { 
            array_push($items, [
                'url' => '#page-' . $i,
                'title' => 'Page ' . $i,
                'active' => $i == 0,
                'newWindow' => false, 
                'customAttributes' => []
            ]);
        }
        return new Collection($items);
    }
    
}
