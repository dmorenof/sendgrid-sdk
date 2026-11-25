<?php

declare(strict_types=1);

namespace SendGridSDK\Resources\V3\Suppression;

final class InvalidEmails extends \SendGridSDK\Client
{
    private const array DELETE = [
        'method' => 'DELETE',
        'path' => '/v3/suppression/invalid_emails',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'success' => [
            204,
        ],
        'requestBody' => [
            'type' => '\\SendGridSDK\\Requests\\V3\\Suppression\\InvalidEmails\\Delete',
            'nullable' => false,
            'required' => false,
            'rules' => [],
        ],
    ];

    /**
     * Delete invalid emails
     *
     * **This endpoint allows you to remove email addresses from your invalid email address list.**
     *
     * There are two options for deleting invalid email addresses:
     *
     * 1) You can delete all invalid email addresses by setting `delete_all` to true in the request body.
     * 2) You can delete some invalid email addresses by specifying certain addresses in an array in the request body.
     */
    public function delete(?\SendGridSDK\DeleteParams\V3\Suppression\InvalidEmails $params = null): void
    {
        $this->executeArguments(self::operation(self::DELETE), parameters: $params);
        return;
    }

    private const array GET = [
        'method' => 'GET',
        'path' => '/v3/suppression/invalid_emails',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'responseType' => '\\SendGridSDK\\Collections\\V3\\Suppression\\InvalidEmails\\Get\\SuppressionInvalidEmailsCollection',
    ];

    /**
     * Retrieve all invalid emails
     *
     * **This endpoint allows you to retrieve a paginated list of all invalid email addresses.**
     *
     * You can use the `limit` query parameter to set the page size. If your list contains more items than the page size permits, you can make multiple requests. Use the `offset` query parameter to control the position in the list from which to start retrieving additional items.
     */
    public function get(?\SendGridSDK\GetParams\V3\Suppression\InvalidEmails $params = null): \SendGridSDK\Collections\V3\Suppression\InvalidEmails\Get\SuppressionInvalidEmailsCollection
    {
        /** @var \SendGridSDK\Collections\V3\Suppression\InvalidEmails\Get\SuppressionInvalidEmailsCollection $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

    private const array DELETE_BY_EMAIL = [
        'method' => 'DELETE',
        'path' => '/v3/suppression/invalid_emails/{email}',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'success' => [
            204,
        ],
    ];

    /**
     * Delete a specific invalid email
     *
     * **This endpoint allows you to remove a specific email address from the invalid email address list.**
     */
    public function deleteByEmail(string $email, ?\SendGridSDK\DeleteParams\V3\Suppression\InvalidEmails\ByEmail $params = null): void
    {
        $this->executeArguments(self::operation(self::DELETE_BY_EMAIL), path: ['email' => $email], parameters: $params);
        return;
    }

    private const array GET_BY_EMAIL = [
        'method' => 'GET',
        'path' => '/v3/suppression/invalid_emails/{email}',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'responseType' => '\\SendGridSDK\\Collections\\V3\\Suppression\\InvalidEmails\\Get\\SuppressionInvalidEmailsCollection',
        'responseValidation' => [
            'minItems' => 0,
            'maxItems' => 1,
        ],
    ];

    /**
     * Retrieve a specific invalid email
     *
     * **This endpoint allows you to retrieve a specific invalid email addresses.**
     */
    public function getByEmail(string $email, ?\SendGridSDK\GetParams\V3\Suppression\InvalidEmails\ByEmail $params = null): \SendGridSDK\Collections\V3\Suppression\InvalidEmails\Get\SuppressionInvalidEmailsCollection
    {
        /** @var \SendGridSDK\Collections\V3\Suppression\InvalidEmails\Get\SuppressionInvalidEmailsCollection $result */
        $result = $this->executeArguments(self::operation(self::GET_BY_EMAIL), path: ['email' => $email], parameters: $params);
        return $result;
    }
}
