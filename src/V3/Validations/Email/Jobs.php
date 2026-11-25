<?php

declare(strict_types=1);

namespace SendGridSDK\V3\Validations\Email;

final class Jobs extends \SendGridSDK\TwilioSendGridV3APISDK
{
    /** GET /v3/validations/email/jobs [operationId: GetValidationsEmailJobs] */
    /**
     * This request lists all of a user's Bulk Email Validation Jobs.
     *
     * **This endpoint returns a list of all of a user's Bulk Email Validation Jobs.**
     */
    public static function get(): \SendGridSDK\DTOs\GetValidationsEmailJobs200Response
    {
        return self::client()->resource(\SendGridSDK\Resources\V3\Validations\Email\Jobs::class)->get();
    }

    /** PUT /v3/validations/email/jobs [operationId: ListEmailJobForVerification] */
    /**
     * Request a presigned URL and headers for Bulk Email Address Validation list upload.
     *
     * **This endpoint returns a presigned URL and request headers. Use this information to upload a list of email addresses for verification.**
     *
     * Note that in a successful response the `content-type` header value matches the provided `file_type` parameter in the `PUT` request.
     *
     * Once you have an `upload_uri` and the `upload_headers`, you're ready to upload your email address list for verification. For the expected format of the email address list and a sample upload request, see the [Bulk Email Address Validation Overview page](https://www.twilio.com/docs/sendgrid/ui/managing-contacts/email-address-validation/bulk-email-address-validation-overview).
     *
     */
    public static function put(?\SendGridSDK\Requests\V3\Validations\Email\Jobs\Put $payload = null): \SendGridSDK\DTOs\PutValidationsEmailJobs200Response
    {
        if (func_num_args() <= 0) {
            return self::client()->resource(\SendGridSDK\Resources\V3\Validations\Email\Jobs::class)->put();
        }
        return self::client()->resource(\SendGridSDK\Resources\V3\Validations\Email\Jobs::class)->put($payload);
    }

    /** GET /v3/validations/email/jobs/{job_id} [operationId: GetEmailJobForVerification] */
    /**
     * This request returns a single Bulk Email Validation Job.
     *
     * **This endpoint returns a specific Bulk Email Validation Job. You can use this endpoint to check on the progress of a Job.**
     *
     */
    public static function getByJobId(string $job_id): \SendGridSDK\DTOs\GetValidationsEmailJobsJobId200Response
    {
        return self::client()->resource(\SendGridSDK\Resources\V3\Validations\Email\Jobs::class)->getByJobId($job_id);
    }
}
