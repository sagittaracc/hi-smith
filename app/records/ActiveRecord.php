<?php

namespace app\records;

use suql\syntax\SuQL;
use app\modifiers\CustomModifierExample;
use suql\db\Container;

abstract class ActiveRecord extends SuQL
{
    protected static $schemeClass = 'app\\schema\\AppScheme';
    protected static $builderClass = 'suql\\builder\\MySQLBuilder';

    public function create()
    {
        return [];
    }

    protected function modifierList()
    {
        return array_merge(
            parent::modifierList(),
            [
                CustomModifierExample::class,
            ]
        );
    }

    public function getDb()
    {
        return Container::get('connection');
    }
}