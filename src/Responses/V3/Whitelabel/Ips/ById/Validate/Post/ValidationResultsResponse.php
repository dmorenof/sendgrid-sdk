<?php

declare(strict_types=1);

namespace SendGridSDK\Responses\V3\Whitelabel\Ips\ById\Validate\Post;

/**
 * The specific results of the validation.
 */
final class ValidationResultsResponse extends \Dmorenof\SdkRuntime\DTO
{
    public \SendGridSDK\Responses\V3\Whitelabel\Ips\ById\Validate\Post\ValidationResults\ARecordResponse $a_record;
}
