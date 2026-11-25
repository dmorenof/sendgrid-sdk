<?php

declare(strict_types=1);

namespace SendGridSDK\Collections\V3\Marketing\Senders\Get;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\SendGridSDK\DTOs\Sender> */
final class SendersResultsCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \SendGridSDK\DTOs\Sender::class;
}
