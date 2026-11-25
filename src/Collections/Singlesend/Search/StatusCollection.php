<?php

declare(strict_types=1);

namespace SendGridSDK\Collections\Singlesend\Search;

final class StatusCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \SendGridSDK\Enums\Mc\SinglesendsItems::class;
    protected const array COLLECTION_VALIDATION = [
        'uniqueItems' => true,
    ];
}
