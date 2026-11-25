<?php

declare(strict_types=1);

namespace SendGridSDK\Collections\Errors\V3\Marketing\Contacts\Imports\PutStatus400;

final class PutStatus400ErrorsCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \SendGridSDK\DTOs\ContactsError::class;
    protected const array COLLECTION_VALIDATION = [
        'uniqueItems' => true,
    ];
}
