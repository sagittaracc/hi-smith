<?php

namespace app\schema;

use suql\core\Scheme;

class AppScheme extends Scheme
{
    function __construct()
    {
        // $this->addTableList([
        //     'users' => 'u',
        //     'user_group' => 'ug',
        //     'groups' => 'g',
        // ]);

        // $this->rel('{{u}}', '{{ug}}', '{{u}}.id = {{ug}}.user_id');
        // $this->rel('{{ug}}', '{{g}}', '{{ug}}.group_id = {{g}}.id');
    }
}