<?php

declare(strict_types=1);

namespace SendGridSDK\Responses\V3\Validations\Email\Post\Result;

/**
 * Granular checks for email address validity.
 */
final class ResultChecksResponse extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'additional',
        'domain',
        'local_part',
    ];

    /**
     * Additional checks on the email address.
     */
    public \SendGridSDK\Responses\V3\Validations\Email\Post\Result\Checks\ChecksAdditionalResponse $additional;
    /**
     * Checks on the domain portion of the email address.
     */
    public \SendGridSDK\Responses\V3\Validations\Email\Post\Result\Checks\ChecksDomainResponse $domain;
    /**
     * Checks on the local part of the email address.
     */
    public \SendGridSDK\Responses\V3\Validations\Email\Post\Result\Checks\LocalPartResponse $local_part;
}
