<?php

declare(strict_types=1);

namespace SendGridSDK\Collections\V3\Mail\Send\Post;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\SendGridSDK\Requests\V3\Mail\Send\Post\SendPersonalizationsRequest> */
final class SendPersonalizationsCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \SendGridSDK\Requests\V3\Mail\Send\Post\SendPersonalizationsRequest::class;
    protected const array COLLECTION_VALIDATION = [
        'uniqueItems' => false,
    ];
}
