<?php

declare(strict_types=1);

namespace SendGridSDK\Collections\Design\CommonProperties;

final class CategoriesCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = 'string';
    protected const array COLLECTION_VALIDATION = [
        'uniqueItems' => true,
    ];
    protected const array ITEM_VALIDATION = [
        'maxLength' => 255,
    ];
}
