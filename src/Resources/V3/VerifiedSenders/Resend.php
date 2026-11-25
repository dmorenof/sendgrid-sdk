<?php

declare(strict_types=1);

namespace SendGridSDK\Resources\V3\VerifiedSenders;

final class Resend extends \SendGridSDK\Client
{
    private const array POST_BY_ID = [
        'method' => 'POST',
        'path' => '/v3/verified_senders/resend/{id}',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'success' => [
            204,
        ],
        'errors' => [
            400 => '\\SendGridSDK\\Responses\\Errors\\V3\\VerifiedSenders\\Resend\\ById\\PostStatus400Response',
            401 => '\\SendGridSDK\\DTOs\\Verified\\SendersError\\Response',
            403 => '\\SendGridSDK\\DTOs\\Verified\\SendersError\\Response',
            404 => '\\SendGridSDK\\Responses\\Errors\\Status404Variant11Response',
            500 => '\\SendGridSDK\\Responses\\Errors\\Status500Response',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\SendGridSDK\\Responses\\Errors\\V3\\VerifiedSenders\\Resend\\ById\\PostStatus400Response',
                'schemaNullable' => false,
            ],
            401 => [
                'type' => '\\SendGridSDK\\DTOs\\Verified\\SendersError\\Response',
                'schemaNullable' => false,
            ],
            403 => [
                'type' => '\\SendGridSDK\\DTOs\\Verified\\SendersError\\Response',
                'schemaNullable' => false,
            ],
            404 => [
                'type' => '\\SendGridSDK\\Responses\\Errors\\Status404Variant11Response',
                'schemaNullable' => false,
            ],
            500 => [
                'type' => '\\SendGridSDK\\Responses\\Errors\\Status500Response',
                'schemaNullable' => false,
            ],
        ],
    ];

    /**
     * Resend Verified Sender Request
     *
     * **This endpoint allows you to resend a verification email to a specified Sender Identity**.
     *
     * Passing the `id` assigned to a Sender Identity to this endpoint will resend a verification email to the `from_address` associated with the Sender Identity. This can be useful if someone loses their verification email or needs to have it resent for any other reason.
     *
     * You can retrieve the IDs associated with Sender Identities by passing a "Get All Verified Senders" endpoint.
     */
    public function postById(string $id): void
    {
        $this->executeArguments(self::operation(self::POST_BY_ID), path: ['id' => $id]);
        return;
    }
}
