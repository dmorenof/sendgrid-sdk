<?php

declare(strict_types=1);

namespace SendGridSDK\Responses\Errors\V3\Categories;

final class GetStatus400Response extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * The error returned.
     */
    public \SendGridSDK\Collections\Errors\V3\Categories\GetStatus400\GetStatus400ErrorsCollection $errors;
}
