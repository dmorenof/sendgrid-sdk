<?php

declare(strict_types=1);

namespace SendGridSDK\Collections\Email\LogsGetMessagesByFilter\Response;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\SendGridSDK\DTOs\Email\LogsMessage> */
final class MessagesCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \SendGridSDK\DTOs\Email\LogsMessage::class;
}
