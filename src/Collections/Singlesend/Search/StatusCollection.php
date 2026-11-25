<?php

declare(strict_types=1);

namespace SendGridSDK\Collections\Singlesend\Search;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\SendGridSDK\Enums\Mc\SinglesendsItems> */
final class StatusCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \SendGridSDK\Enums\Mc\SinglesendsItems::class;
    protected const array COLLECTION_VALIDATION = [
        'uniqueItems' => true,
    ];
}
