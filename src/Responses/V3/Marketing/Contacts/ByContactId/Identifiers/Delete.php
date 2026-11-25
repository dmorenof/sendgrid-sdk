<?php

declare(strict_types=1);

namespace SendGridSDK\Responses\V3\Marketing\Contacts\ByContactId\Identifiers;

/**
 * Indicates that the deletion is queued for processing. Check the job status with the Import Contacts Status endpoint.
 */
final class Delete extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'job_id',
    ];

    /**
     * The deletion job ID.
     */
    public \SendGridSDK\Responses\V3\Marketing\Contacts\ByContactId\Identifiers\Delete\JobIdResponse $job_id;
}
