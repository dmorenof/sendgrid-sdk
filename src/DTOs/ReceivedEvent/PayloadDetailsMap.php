<?php

declare(strict_types=1);

namespace SendGridSDK\DTOs\ReceivedEvent;

/** @extends \Dmorenof\SdkRuntime\Map<int> */
final class PayloadDetailsMap extends \Dmorenof\SdkRuntime\Map
{
    protected const string VALUE_TYPE = 'int';
    protected const bool VALUE_NULLABLE = false;
}
