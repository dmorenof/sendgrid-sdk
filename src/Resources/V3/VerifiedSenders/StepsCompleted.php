<?php

declare(strict_types=1);

namespace SendGridSDK\Resources\V3\VerifiedSenders;

final class StepsCompleted extends \SendGridSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/v3/verified_senders/steps_completed',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'errors' => [
            401 => '\\SendGridSDK\\DTOs\\Verified\\SendersError\\Response',
            403 => '\\SendGridSDK\\DTOs\\Verified\\SendersError\\Response',
            404 => '\\SendGridSDK\\DTOs\\Verified\\SendersError\\Response',
            500 => '\\SendGridSDK\\Responses\\Errors\\Status500Response',
        ],
        'errorResponses' => [
            401 => [
                'type' => '\\SendGridSDK\\DTOs\\Verified\\SendersError\\Response',
                'schemaNullable' => false,
            ],
            403 => [
                'type' => '\\SendGridSDK\\DTOs\\Verified\\SendersError\\Response',
                'schemaNullable' => false,
            ],
            404 => [
                'type' => '\\SendGridSDK\\DTOs\\Verified\\SendersError\\Response',
                'schemaNullable' => false,
            ],
            500 => [
                'type' => '\\SendGridSDK\\Responses\\Errors\\Status500Response',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\SendGridSDK\\Responses\\V3\\VerifiedSenders\\StepsCompleted\\Get',
    ];

    /**
     * Completed Steps
     *
     * **This endpoint allows you to determine which of SendGrid’s verification processes have been completed for an account**.
     *
     * This endpoint returns boolean values, `true` and `false`, for [Domain Authentication](https://sendgrid.com/docs/for-developers/sending-email/sender-identity/#domain-authentication), `domain_verified`, and [Single Sender Verification](https://sendgrid.com/docs/for-developers/sending-email/sender-identity/#single-sender-verification), `sender_verified`, for the account.
     *
     * An account may have one, both, or neither verification steps completed. If you need to authenticate a domain rather than a Single Sender, see the "Authenticate a domain" endpoint.
     */
    public function get(): \SendGridSDK\Responses\V3\VerifiedSenders\StepsCompleted\Get
    {
        /** @var \SendGridSDK\Responses\V3\VerifiedSenders\StepsCompleted\Get $result */
        $result = $this->executeOperation(self::operation(self::GET));
        return $result;
    }
}
