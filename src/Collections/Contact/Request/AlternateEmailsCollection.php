<?php

declare(strict_types=1);

namespace SendGridSDK\Collections\Contact\Request;

final class AlternateEmailsCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = 'string';
    protected const array ITEM_VALIDATION = [
        'maxLength' => 254,
    ];
}
