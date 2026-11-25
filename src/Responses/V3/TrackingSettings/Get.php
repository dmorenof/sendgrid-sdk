<?php

declare(strict_types=1);

namespace SendGridSDK\Responses\V3\TrackingSettings;

final class Get extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * The list of all tracking settings.
     */
    public \SendGridSDK\Collections\V3\TrackingSettings\Get\TrackingSettingsResultCollection $result;
}
