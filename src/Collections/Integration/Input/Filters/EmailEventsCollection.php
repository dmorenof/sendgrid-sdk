<?php

declare(strict_types=1);

namespace SendGridSDK\Collections\Integration\Input\Filters;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\SendGridSDK\Enums\Integrations\Items1> */
final class EmailEventsCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \SendGridSDK\Enums\Integrations\Items1::class;
}
