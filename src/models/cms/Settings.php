<?php

namespace Jordanbeattie\CraftcmsFaker\models\cms;

use craft\base\Model;
use craft\helpers\App;

class Settings extends Model
{
    public $source = 'picsum';

    public function getSource(): string
    {
        return App::parseEnv($this->source);
    }

    public function getFakeImageUrl( $source, $width, $height )
    {
        $source = ($source ?? $this->getSource());
        $source = (in_array($source, ['picsum', 'placeholder']) ? $source : "picsum");
        $url = $source == "picsum"
                   ? "https://picsum.photos/"
                   : "https://via.placeholder.com/";
        $url .= $width . ( $source == "picsum" ? "/" : "x") . $height;
        $url .= "?text=" . $width . "x" . $height;
        $url .= "&color=#808080";
        return $url;
    }
}
