<?php

declare(strict_types=1);

namespace SendGridSDK\Requests\V3\Mail\Send\Post\PersonalizationsItem;

final class SubstitutionsMapRequest extends \Dmorenof\SdkRuntime\Map
{
    protected const string VALUE_TYPE = 'string';
    protected const bool VALUE_NULLABLE = false;
    protected const array MAP_VALIDATION = [
        'maxProperties' => 10000,
    ];
}
