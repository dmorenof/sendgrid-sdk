<?php

declare(strict_types=1);

namespace SendGridSDK\Resources\V3\Recipients;

final class Erasejob extends \SendGridSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/v3/recipients/erasejob',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'success' => [
            202,
        ],
        'errors' => [
            400 => '\\SendGridSDK\\Responses\\Errors\\V3\\Recipients\\Erasejob\\PostStatus400Response',
            401 => '\\SendGridSDK\\Responses\\Errors\\V3\\Recipients\\Erasejob\\PostStatus401Response',
            403 => '\\SendGridSDK\\Responses\\Errors\\V3\\Recipients\\Erasejob\\PostStatus403Response',
            404 => '\\SendGridSDK\\Responses\\Errors\\V3\\Recipients\\Erasejob\\PostStatus404Response',
            429 => null,
            500 => '\\SendGridSDK\\Responses\\Errors\\V3\\Recipients\\Erasejob\\PostStatus500Response',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\SendGridSDK\\Responses\\Errors\\V3\\Recipients\\Erasejob\\PostStatus400Response',
                'schemaNullable' => false,
            ],
            401 => [
                'type' => '\\SendGridSDK\\Responses\\Errors\\V3\\Recipients\\Erasejob\\PostStatus401Response',
                'schemaNullable' => false,
            ],
            403 => [
                'type' => '\\SendGridSDK\\Responses\\Errors\\V3\\Recipients\\Erasejob\\PostStatus403Response',
                'schemaNullable' => false,
            ],
            404 => [
                'type' => '\\SendGridSDK\\Responses\\Errors\\V3\\Recipients\\Erasejob\\PostStatus404Response',
                'schemaNullable' => false,
            ],
            429 => [
                'type' => null,
                'schemaNullable' => false,
            ],
            500 => [
                'type' => '\\SendGridSDK\\Responses\\Errors\\V3\\Recipients\\Erasejob\\PostStatus500Response',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\SendGridSDK\\DTOs\\RecipientsDataErasure\\JobId',
        'responseHeaders' => [
            400 => [
                'X-RateLimit-Limit' => [
                    'type' => 'integer',
                ],
                'X-RateLimit-Reset' => [
                    'type' => 'integer',
                ],
                'X-RateLimit-Remaining' => [
                    'type' => 'integer',
                ],
            ],
            401 => [
                'X-RateLimit-Limit' => [
                    'type' => 'integer',
                ],
                'X-RateLimit-Reset' => [
                    'type' => 'integer',
                ],
                'X-RateLimit-Remaining' => [
                    'type' => 'integer',
                ],
            ],
            403 => [
                'X-RateLimit-Limit' => [
                    'type' => 'integer',
                ],
                'X-RateLimit-Reset' => [
                    'type' => 'integer',
                ],
                'X-RateLimit-Remaining' => [
                    'type' => 'integer',
                ],
            ],
            404 => [
                'X-RateLimit-Limit' => [
                    'type' => 'integer',
                ],
                'X-RateLimit-Reset' => [
                    'type' => 'integer',
                ],
                'X-RateLimit-Remaining' => [
                    'type' => 'integer',
                ],
            ],
            429 => [
                'X-RateLimit-Limit' => [
                    'type' => 'integer',
                ],
                'X-RateLimit-Reset' => [
                    'type' => 'integer',
                ],
                'X-RateLimit-Remaining' => [
                    'type' => 'integer',
                ],
                'X-Envoy-Ratelimited' => [
                    'type' => 'boolean',
                ],
            ],
            500 => [
                'X-RateLimit-Limit' => [
                    'type' => 'integer',
                ],
                'X-RateLimit-Reset' => [
                    'type' => 'integer',
                ],
                'X-RateLimit-Remaining' => [
                    'type' => 'integer',
                ],
            ],
        ],
        'requestBody' => [
            'type' => '\\SendGridSDK\\DTOs\\RecipientsDataErasure\\EraseRecipients\\Request',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Erase recipients' email data
     *
     * **This operation allows you to delete your recipients' personal email data**
     *
     * The Delete Recipients' Email Data operation accepts a list of 5,000 `email_addresses` or a total payload size of 256Kb per request, whichever comes first. Upon a successful request with this operation, SendGrid will run a search on the email addresses provided against the SendGrid system to identify matches. SendGrid will then delete all personal data associated with the matched users such as the recipients' names, email addresses, subject lines, categories, and IP addresses.
     *
     * This endpoint is rate limited to 100 requests per minute. If more requests need to be made, consider using the batch option to include multiple email addresses in each request (up to 5,000 addresses per request).
     *
     * All email addresses are filtered for uniqueness and tested for structural validity—any invalid addresses will be returned in an error response.
     *
     * Please note that recipient data is deleted for the account making the request only—deletions do not cascade from a parent account to its Subusers' recipients. To delete a Subuser's recipients' data, you can use the `on-behalf-of` header.
     */
    public function post(\SendGridSDK\PostParams\V3\Recipients\Erasejob $params): \SendGridSDK\DTOs\RecipientsDataErasure\JobId
    {
        /** @var \SendGridSDK\DTOs\RecipientsDataErasure\JobId $result */
        $result = $this->executeArguments(self::operation(self::POST), parameters: $params);
        return $result;
    }
}
