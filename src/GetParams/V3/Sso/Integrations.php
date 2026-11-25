<?php

declare(strict_types=1);

namespace SendGridSDK\GetParams\V3\Sso;

final class Integrations extends \Dmorenof\SdkRuntime\DTO
{
    public const array OPERATION_FIELDS = [
        'path' => [],
        'query' => [
            'si' => 'si',
        ],
        'header' => [],
    ];

    public ?bool $si;
}
