<?php

declare(strict_types=1);

namespace SendGridSDK\Collections\Errors\Status400Variant9;

final class Status400Variant9ErrorsCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \SendGridSDK\DTOs\Custom\FieldsError::class;
    protected const array COLLECTION_VALIDATION = [
        'uniqueItems' => true,
    ];
}
