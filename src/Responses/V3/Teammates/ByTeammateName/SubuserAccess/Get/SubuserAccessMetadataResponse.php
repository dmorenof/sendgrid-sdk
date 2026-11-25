<?php

declare(strict_types=1);

namespace SendGridSDK\Responses\V3\Teammates\ByTeammateName\SubuserAccess\Get;

/**
 * This object contains response metadata. The presence of the `after_subuser_id` property in the metadata indicates that some items are still outstanding and have not been retrieved. You can use the `after_subuser_id` value to retrieve additional items with another request.
 */
final class SubuserAccessMetadataResponse extends \Dmorenof\SdkRuntime\DTO
{
    public \SendGridSDK\Responses\V3\Teammates\ByTeammateName\SubuserAccess\Get\Metadata\NextParamsResponse $next_params;
}
