<?php

declare(strict_types=1);

namespace SendGridSDK\Collections\TransactionalTemplate;

final class VersionsCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \SendGridSDK\DTOs\TransactionalTemplatesVersionOutputLean::class;
}
