<?php

declare(strict_types=1);

namespace SendGridSDK\Collections\FullSegment;

final class ContactsSampleCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \SendGridSDK\DTOs\Contact\Response::class;
}
