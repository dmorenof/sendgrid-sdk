<?php

declare(strict_types=1);

namespace SendGridSDK\DeleteParams\V3\Contactdb\Lists;

final class ByListId extends \Dmorenof\SdkRuntime\DTO
{
    public const array OPERATION_FIELDS = [
        'path' => [],
        'query' => [
            'delete_contacts' => 'delete_contacts',
        ],
        'header' => [
            'on-behalf-of' => 'onBehalfOf',
        ],
    ];

    protected const array PROPERTY_MAP = [
        'on-behalf-of' => 'onBehalfOf',
    ];
    protected const array WIRE_PROPERTY_MAP = [
        'onBehalfOf' => 'on-behalf-of',
    ];

    protected const array VALIDATION = [
        'delete_contacts' => [
            'jsonSchema' => '{"enum":[false,true]}',
        ],
    ];

    public ?string $onBehalfOf;
    public ?bool $delete_contacts {
        set {
            $this->assigning('delete_contacts', $value);
            $this->delete_contacts = $value;
        }
    }
}
