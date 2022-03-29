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

    public function getFakeImageUrl( $source = null, $width = null, $height = null )
    {
        $width = $width ?? "200";
        $height = $height ?? "200";
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

    public function getFakeVideoUrl()
    {
        $baseUrl = "https://raw.githubusercontent.com/jordannbeattie/craftcms-faker/master/src/assets/video/";
        $videos = ['light.mp4', 'dark.mp4'];
        return $baseUrl  . $videos[array_rand($videos)];
    }

}
