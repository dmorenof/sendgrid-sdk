<?php

declare(strict_types=1);

namespace SendGridSDK\Responses\V3\MailSettings;

final class Get extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'result',
    ];

    /**
     * The list of all mail settings.
     */
    public \SendGridSDK\Collections\V3\MailSettings\Get\MailSettingsResultCollection $result;
}
