<?php

declare(strict_types=1);

namespace SendGridSDK\Collections\AllSegments200;

final class ListIdsCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = 'string';
    protected const array COLLECTION_VALIDATION = [
        'uniqueItems' => true,
    ];
}
