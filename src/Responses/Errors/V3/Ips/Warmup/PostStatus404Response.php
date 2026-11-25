<?php

declare(strict_types=1);

namespace SendGridSDK\Responses\Errors\V3\Ips\Warmup;

final class PostStatus404Response extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * The errors that were encountered.
     */
    public \SendGridSDK\Collections\Errors\V3\Ips\Warmup\PostStatus404\PostStatus404ErrorsCollection $errors;
}
