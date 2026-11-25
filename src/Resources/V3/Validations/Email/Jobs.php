<?php

declare(strict_types=1);

namespace SendGridSDK\Resources\V3\Validations\Email;

final class Jobs extends \SendGridSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/v3/validations/email/jobs',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'errors' => [
            404 => '\\SendGridSDK\\DTOs\\Email\\ValidationError\\Response',
            500 => '\\SendGridSDK\\DTOs\\Email\\ValidationError\\Response',
        ],
        'errorResponses' => [
            404 => [
                'type' => '\\SendGridSDK\\DTOs\\Email\\ValidationError\\Response',
                'schemaNullable' => false,
            ],
            500 => [
                'type' => '\\SendGridSDK\\DTOs\\Email\\ValidationError\\Response',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\SendGridSDK\\DTOs\\GetValidationsEmailJobs200Response',
    ];

    /**
     * This request lists all of a user's Bulk Email Validation Jobs.
     *
     * **This endpoint returns a list of all of a user's Bulk Email Validation Jobs.**
     */
    public function get(): \SendGridSDK\DTOs\GetValidationsEmailJobs200Response
    {
        /** @var \SendGridSDK\DTOs\GetValidationsEmailJobs200Response $result */
        $result = $this->executeOperation(self::operation(self::GET));
        return $result;
    }

    private const array PUT = [
        'method' => 'PUT',
        'path' => '/v3/validations/email/jobs',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'errors' => [
            400 => '\\SendGridSDK\\DTOs\\Email\\ValidationError\\Response',
            500 => '\\SendGridSDK\\DTOs\\Email\\ValidationError\\Response',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\SendGridSDK\\DTOs\\Email\\ValidationError\\Response',
                'schemaNullable' => false,
            ],
            500 => [
                'type' => '\\SendGridSDK\\DTOs\\Email\\ValidationError\\Response',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\SendGridSDK\\DTOs\\PutValidationsEmailJobs200Response',
        'requestBody' => [
            'type' => '\\SendGridSDK\\Requests\\V3\\Validations\\Email\\Jobs\\Put',
            'nullable' => false,
            'required' => false,
            'rules' => [],
        ],
    ];

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
    public function put(?\SendGridSDK\Requests\V3\Validations\Email\Jobs\Put $payload = null): \SendGridSDK\DTOs\PutValidationsEmailJobs200Response
    {
        /** @var \SendGridSDK\DTOs\PutValidationsEmailJobs200Response $result */
        $result = func_num_args() > 0 ? $this->executeBody(self::operation(self::PUT), $payload) : $this->executeArguments(self::operation(self::PUT));
        return $result;
    }

    private const array GET_BY_JOB_ID = [
        'method' => 'GET',
        'path' => '/v3/validations/email/jobs/{job_id}',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'errors' => [
            404 => '\\SendGridSDK\\DTOs\\Email\\ValidationError\\Response',
            500 => '\\SendGridSDK\\DTOs\\Email\\ValidationError\\Response',
        ],
        'errorResponses' => [
            404 => [
                'type' => '\\SendGridSDK\\DTOs\\Email\\ValidationError\\Response',
                'schemaNullable' => false,
            ],
            500 => [
                'type' => '\\SendGridSDK\\DTOs\\Email\\ValidationError\\Response',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\SendGridSDK\\DTOs\\GetValidationsEmailJobsJobId200Response',
    ];

    /**
     * This request returns a single Bulk Email Validation Job.
     *
     * **This endpoint returns a specific Bulk Email Validation Job. You can use this endpoint to check on the progress of a Job.**
     *
     */
    public function getByJobId(string $job_id): \SendGridSDK\DTOs\GetValidationsEmailJobsJobId200Response
    {
        /** @var \SendGridSDK\DTOs\GetValidationsEmailJobsJobId200Response $result */
        $result = $this->executeArguments(self::operation(self::GET_BY_JOB_ID), path: ['job_id' => $job_id]);
        return $result;
    }
}
