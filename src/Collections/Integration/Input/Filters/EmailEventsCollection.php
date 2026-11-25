<?php

declare(strict_types=1);

namespace SendGridSDK\Collections\Integration\Input\Filters;

final class EmailEventsCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \SendGridSDK\Enums\Integrations\Items1::class;
}
