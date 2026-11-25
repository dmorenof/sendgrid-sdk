<?php

declare(strict_types=1);

namespace SendGridSDK\Collections\Integration\Patch\Filters;

final class EmailEventsCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \SendGridSDK\Enums\Integrations\Items::class;
}
