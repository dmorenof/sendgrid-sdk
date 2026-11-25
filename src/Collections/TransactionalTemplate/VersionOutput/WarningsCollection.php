<?php

declare(strict_types=1);

namespace SendGridSDK\Collections\TransactionalTemplate\VersionOutput;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\SendGridSDK\DTOs\TransactionalTemplate\Warning> */
final class WarningsCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \SendGridSDK\DTOs\TransactionalTemplate\Warning::class;
}
