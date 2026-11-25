<?php

declare(strict_types=1);

namespace SendGridSDK\Resources\V3;

final class VerifiedSenders extends \SendGridSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/v3/verified_senders',
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
        'responseType' => '\\SendGridSDK\\Responses\\V3\\VerifiedSenders\\Get',
    ];

    /**
     * Get All Verified Senders
     *
     * **This endpoint allows you to retrieve all the Sender Identities associated with an account.**
     *
     * This endpoint will return both verified and unverified senders.
     *
     * You can limit the number of results returned using the `limit`, `lastSeenID`, and `id` query string parameters.
     *
     * * `limit` allows you to specify an exact number of Sender Identities to return.
     * * `lastSeenID` will return senders with an ID number occuring after the passed in ID. In other words, the `lastSeenID` provides a starting point from which SendGrid will iterate to find Sender Identities associated with your account.
     * * `id` will return information about only the Sender Identity passed in the request.
     */
    public function get(?\SendGridSDK\GetParams\V3\VerifiedSenders $params = null): \SendGridSDK\Responses\V3\VerifiedSenders\Get
    {
        /** @var \SendGridSDK\Responses\V3\VerifiedSenders\Get $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

    private const array POST = [
        'method' => 'POST',
        'path' => '/v3/verified_senders',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'success' => [
            201,
        ],
        'errors' => [
            400 => '\\SendGridSDK\\Responses\\Errors\\Status400Variant17Response',
            401 => '\\SendGridSDK\\DTOs\\Verified\\SendersError\\Response',
            403 => '\\SendGridSDK\\DTOs\\Verified\\SendersError\\Response',
            404 => '\\SendGridSDK\\DTOs\\Verified\\SendersError\\Response',
            500 => '\\SendGridSDK\\Responses\\Errors\\Status500Response',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\SendGridSDK\\Responses\\Errors\\Status400Variant17Response',
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
                'type' => '\\SendGridSDK\\DTOs\\Verified\\SendersError\\Response',
                'schemaNullable' => false,
            ],
            500 => [
                'type' => '\\SendGridSDK\\Responses\\Errors\\Status500Response',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\SendGridSDK\\DTOs\\Verified\\Sender\\Response',
        'requestBody' => [
            'type' => '\\SendGridSDK\\DTOs\\Verified\\Sender\\Request',
            'nullable' => false,
            'required' => false,
            'rules' => [],
        ],
    ];

    /**
     * Create Verified Sender Request
     *
     * **This endpoint allows you to create a new Sender Identify**.
     *
     * Upon successful submission of a `POST` request to this endpoint, an identity will be created, and a verification email will be sent to the address assigned to the `from_email` field. You must complete the verification process using the sent email to fully verify the sender.
     *
     * If you need to resend the verification email, you can do so with the Resend Verified Sender Request, `/resend/{id}`, endpoint.
     *
     * If you need to authenticate a domain rather than a Single Sender, see the [Domain Authentication API](https://docs.sendgrid.com/api-reference/domain-authentication/authenticate-a-domain).
     */
    public function post(?\SendGridSDK\DTOs\Verified\Sender\Request $payload = null): \SendGridSDK\DTOs\Verified\Sender\Response
    {
        /** @var \SendGridSDK\DTOs\Verified\Sender\Response $result */
        $result = func_num_args() > 0 ? $this->executeBody(self::operation(self::POST), $payload) : $this->executeArguments(self::operation(self::POST));
        return $result;
    }

    private const array DELETE_BY_ID = [
        'method' => 'DELETE',
        'path' => '/v3/verified_senders/{id}',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'success' => [
            204,
        ],
        'errors' => [
            401 => '\\SendGridSDK\\DTOs\\Verified\\SendersError\\Response',
            403 => '\\SendGridSDK\\Responses\\Errors\\V3\\VerifiedSenders\\ById\\DeleteStatus403Response',
            404 => '\\SendGridSDK\\Responses\\Errors\\Status404Variant11Response',
            500 => '\\SendGridSDK\\Responses\\Errors\\Status500Response',
        ],
        'errorResponses' => [
            401 => [
                'type' => '\\SendGridSDK\\DTOs\\Verified\\SendersError\\Response',
                'schemaNullable' => false,
            ],
            403 => [
                'type' => '\\SendGridSDK\\Responses\\Errors\\V3\\VerifiedSenders\\ById\\DeleteStatus403Response',
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
     * Delete Verified Sender
     *
     * **This endpoint allows you to delete a Sender Identity**.
     *
     * Pass the `id` assigned to a Sender Identity to this endpoint to delete the Sender Identity from your account.
     *
     * You can retrieve the IDs associated with Sender Identities using the "Get All Verified Senders" endpoint.
     */
    public function deleteById(string $id): void
    {
        $this->executeArguments(self::operation(self::DELETE_BY_ID), path: ['id' => $id]);
        return;
    }

    private const array PATCH_BY_ID = [
        'method' => 'PATCH',
        'path' => '/v3/verified_senders/{id}',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'errors' => [
            400 => '\\SendGridSDK\\Responses\\Errors\\Status400Variant17Response',
            401 => '\\SendGridSDK\\DTOs\\Verified\\SendersError\\Response',
            403 => '\\SendGridSDK\\Responses\\Errors\\V3\\VerifiedSenders\\ById\\PatchStatus403Response',
            404 => '\\SendGridSDK\\Responses\\Errors\\Status404Variant11Response',
            500 => '\\SendGridSDK\\Responses\\Errors\\Status500Response',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\SendGridSDK\\Responses\\Errors\\Status400Variant17Response',
                'schemaNullable' => false,
            ],
            401 => [
                'type' => '\\SendGridSDK\\DTOs\\Verified\\SendersError\\Response',
                'schemaNullable' => false,
            ],
            403 => [
                'type' => '\\SendGridSDK\\Responses\\Errors\\V3\\VerifiedSenders\\ById\\PatchStatus403Response',
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
        'responseType' => '\\SendGridSDK\\DTOs\\Verified\\Sender\\Response',
        'requestBody' => [
            'type' => '\\SendGridSDK\\DTOs\\Verified\\Sender\\Request',
            'nullable' => false,
            'required' => false,
            'rules' => [],
        ],
    ];

    /**
     * Edit Verified Sender
     *
     * **This endpoint allows you to update an existing Sender Identity**.
     *
     * Pass the `id` assigned to a Sender Identity to this endpoint as a path parameter. Include any fields you wish to update in the request body in JSON format.
     *
     * You can retrieve the IDs associated with Sender Identities by passing a `GET` request to the Get All Verified Senders endpoint, `/verified_senders`.
     *
     * **Note:** Unlike a `PUT` request, `PATCH` allows you to update only the fields you wish to edit. Fields that are not passed as part of a request will remain unaltered.
     */
    public function patchById(string $id, ?\SendGridSDK\DTOs\Verified\Sender\Request $payload = null): \SendGridSDK\DTOs\Verified\Sender\Response
    {
        /** @var \SendGridSDK\DTOs\Verified\Sender\Response $result */
        $result = func_num_args() > 1 ? $this->executeBody(self::operation(self::PATCH_BY_ID), $payload, path: ['id' => $id]) : $this->executeArguments(self::operation(self::PATCH_BY_ID), path: ['id' => $id]);
        return $result;
    }
}
