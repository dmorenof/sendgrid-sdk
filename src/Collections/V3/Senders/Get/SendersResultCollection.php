<?php

declare(strict_types=1);

namespace SendGridSDK\Collections\V3\Senders\Get;

final class SendersResultCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \SendGridSDK\DTOs\Sender\Id::class;
}
