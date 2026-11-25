<?php

declare(strict_types=1);

namespace SendGridSDK\Collections\V3\User\Webhooks\Parse\Settings\Get;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\SendGridSDK\DTOs\ParseSetting> */
final class SettingsResultCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \SendGridSDK\DTOs\ParseSetting::class;
}
