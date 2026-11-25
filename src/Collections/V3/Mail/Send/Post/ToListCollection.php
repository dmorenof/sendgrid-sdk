<?php

declare(strict_types=1);

namespace SendGridSDK\Collections\V3\Mail\Send\Post;

final class ToListCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \SendGridSDK\DTOs\Mail\To::class;
    protected const array COLLECTION_VALIDATION = [
        'uniqueItems' => true,
    ];
}
