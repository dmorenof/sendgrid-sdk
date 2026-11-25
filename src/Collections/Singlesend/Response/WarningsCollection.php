<?php

declare(strict_types=1);

namespace SendGridSDK\Collections\Singlesend\Response;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\SendGridSDK\DTOs\Singlesend\Response\WarningsDTO> */
final class WarningsCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \SendGridSDK\DTOs\Singlesend\Response\WarningsDTO::class;
}
