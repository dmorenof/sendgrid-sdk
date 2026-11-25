<?php

declare(strict_types=1);

namespace SendGridSDK\Collections\Email\LogsGetMessagesByFilter\Response;

final class MessagesCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \SendGridSDK\DTOs\Email\LogsMessage::class;
}
