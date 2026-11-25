<?php

declare(strict_types=1);

namespace SendGridSDK\Collections\Contact\Response;

/** @extends \Dmorenof\SdkRuntime\TypedArray<string> */
final class AlternateEmailsCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = 'string';
    protected const array COLLECTION_VALIDATION = [
        'uniqueItems' => true,
    ];
    protected const array ITEM_VALIDATION = [
        'minLength' => 3,
        'maxLength' => 254,
    ];
}
