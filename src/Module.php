<?php

namespace akam\demomodule;

class Module extends \yii\base\Module
{
    public function init()
    {
        parent::init();
        // инициализация модуля с помощью конфигурации, загруженной из config.php
        \Yii::configure($this, require __DIR__ . '/config/config.php');
    }
}
