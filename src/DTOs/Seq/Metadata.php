<?php

declare(strict_types=1);

namespace SendGridSDK\DTOs\Seq;

/**
 * Metadata
 *
 * This object contains response metadata. The presence of the `after_key` property in the metadata indicates that some items are still outstanding and have not been retrieved. You can use the `after_key` value to retrieve additional items with another request.
 */
final class Metadata extends \Dmorenof\SdkRuntime\DTO
{
    public \SendGridSDK\DTOs\Seq\Metadata\NextParamsDTO $next_params;
}
