<?php

declare(strict_types=1);

namespace SendGridSDK\Collections\ReverseDns;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\SendGridSDK\DTOs\ReverseDns\UsersDTO> */
final class UsersCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \SendGridSDK\DTOs\ReverseDns\UsersDTO::class;
}
