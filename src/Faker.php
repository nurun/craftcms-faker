<?php

namespace Jordanbeattie\CraftcmsFaker;
use \craft\web\twig\variables\CraftVariable;
use Jordanbeattie\CraftcmsFaker\variables\FakerVariable;
use yii\base\Event;

class Faker extends \craft\base\Plugin
{
    public function init()
    {
        parent::init();

        Event::on(
            CraftVariable::class,
            CraftVariable::EVENT_INIT,
            function (Event $event) {
                $variable = $event->sender;
                $variable->set('faker', FakerVariable::class);
            }
        );

    }
}
