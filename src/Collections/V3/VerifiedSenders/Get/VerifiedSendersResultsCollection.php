<?php

declare(strict_types=1);

namespace SendGridSDK\Collections\V3\VerifiedSenders\Get;

final class VerifiedSendersResultsCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \SendGridSDK\DTOs\Verified\Sender\Response::class;
}
