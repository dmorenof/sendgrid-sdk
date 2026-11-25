<?php

declare(strict_types=1);

namespace SendGridSDK\Responses\V3\Marketing\Contacts;

/**
 * The deletion job has been accepted and is being processed.
 */
final class Delete extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'job_id',
    ];

    /**
     * The deletion job ID.
     */
    public \SendGridSDK\Responses\V3\Marketing\Contacts\Delete\JobIdResponse $job_id;
}
