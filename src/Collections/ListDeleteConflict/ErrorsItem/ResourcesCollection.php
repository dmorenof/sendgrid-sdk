<?php

declare(strict_types=1);

namespace SendGridSDK\Collections\ListDeleteConflict\ErrorsItem;

final class ResourcesCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \SendGridSDK\DTOs\Mc\ListsInUseResource::class;
}
