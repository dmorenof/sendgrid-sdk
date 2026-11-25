<?php

declare(strict_types=1);

namespace SendGridSDK\Collections\V3\Marketing\Contacts\Imports\Put;

/** @extends \Dmorenof\SdkRuntime\TypedArray<string|null> */
final class FieldMappingsCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = 'string';
    protected const array COLLECTION_VALIDATION = [
        'uniqueItems' => false,
    ];
}
