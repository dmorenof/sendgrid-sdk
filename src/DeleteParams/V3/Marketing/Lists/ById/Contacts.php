<?php

declare(strict_types=1);

namespace SendGridSDK\DeleteParams\V3\Marketing\Lists\ById;

final class Contacts extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'contact_ids',
    ];
    public const array OPERATION_FIELDS = [
        'path' => [],
        'query' => [
            'contact_ids' => 'contact_ids',
        ],
        'header' => [],
    ];

    protected const array VALIDATION = [
        'contact_ids' => [
            'minLength' => 1,
        ],
    ];

    public string $contact_ids {
        set {
            $this->assigning('contact_ids', $value);
            $this->contact_ids = $value;
        }
    }
}
