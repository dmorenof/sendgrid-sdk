<?php

declare(strict_types=1);

namespace SendGridSDK\Responses\Errors\V3\Ips\Pools\ByPoolName\Ips;

final class PostStatus404Response extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * The error returned.
     */
    public \SendGridSDK\Collections\Errors\V3\Ips\Pools\ByPoolName\Ips\PostStatus404\PostStatus404ErrorsCollection $errors;
}
