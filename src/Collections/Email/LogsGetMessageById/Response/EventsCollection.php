<?php

declare(strict_types=1);

namespace SendGridSDK\Collections\Email\LogsGetMessageById\Response;

final class EventsCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \SendGridSDK\DTOs\Email\OneOfLogsEvent::class;
}
