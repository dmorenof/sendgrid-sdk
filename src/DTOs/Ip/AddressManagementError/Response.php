<?php

declare(strict_types=1);

namespace SendGridSDK\DTOs\Ip\AddressManagementError;

/**
 * IP Address Management Error Response Schema
 */
final class Response extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * An array of error objects.
     */
    public \SendGridSDK\Collections\Ip\AddressManagementError\Response\ErrorsCollection $errors;
}
