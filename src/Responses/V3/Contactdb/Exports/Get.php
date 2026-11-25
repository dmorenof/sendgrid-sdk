<?php

declare(strict_types=1);

namespace SendGridSDK\Responses\V3\Contactdb\Exports;

final class Get extends \Dmorenof\SdkRuntime\DTO
{
    public \SendGridSDK\Responses\V3\Contactdb\Exports\Get\ExportsMetadataResponse $_metadata;
    public \SendGridSDK\Collections\V3\Contactdb\Exports\Get\ExportsResultCollection $result;
}
