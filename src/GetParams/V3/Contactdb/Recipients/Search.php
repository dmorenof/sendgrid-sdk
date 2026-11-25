<?php

declare(strict_types=1);

namespace SendGridSDK\GetParams\V3\Contactdb\Recipients;

final class Search extends \Dmorenof\SdkRuntime\DTO
{
    public const array OPERATION_FIELDS = [
        'path' => [],
        'query' => [
            '{field_name}' => 'Field_name',
        ],
        'header' => [
            'on-behalf-of' => 'onBehalfOf',
        ],
    ];

    protected const array PROPERTY_MAP = [
        'on-behalf-of' => 'onBehalfOf',
        '{field_name}' => 'Field_name',
    ];
    protected const array WIRE_PROPERTY_MAP = [
        'onBehalfOf' => 'on-behalf-of',
        'Field_name' => '{field_name}',
    ];

    public ?string $onBehalfOf;
    public ?string $Field_name;
}
