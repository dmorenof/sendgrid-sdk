<?php

declare(strict_types=1);

namespace SendGridSDK\Collections\V3\Marketing\Contacts\Search\Emails\Post;

/** @extends \Dmorenof\SdkRuntime\TypedArray<string> */
final class EmailsEmailsCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = 'string';
    protected const array ITEM_VALIDATION = [
        'maxLength' => 100,
    ];
}
