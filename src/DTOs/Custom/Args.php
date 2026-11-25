<?php

declare(strict_types=1);

namespace SendGridSDK\DTOs\Custom;

/** @extends \Dmorenof\SdkRuntime\Map<string> */
final class Args extends \Dmorenof\SdkRuntime\Map
{
    protected const string VALUE_TYPE = 'string';
    protected const bool VALUE_NULLABLE = false;
}
