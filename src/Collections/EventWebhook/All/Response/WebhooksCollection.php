<?php

declare(strict_types=1);

namespace SendGridSDK\Collections\EventWebhook\All\Response;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\SendGridSDK\DTOs\EventWebhook\Signed\Response> */
final class WebhooksCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \SendGridSDK\DTOs\EventWebhook\Signed\Response::class;
}
