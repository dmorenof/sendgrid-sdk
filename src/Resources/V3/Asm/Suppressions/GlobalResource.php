<?php

declare(strict_types=1);

namespace SendGridSDK\Resources\V3\Asm\Suppressions;

final class GlobalResource extends \SendGridSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/v3/asm/suppressions/global',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'success' => [
            201,
        ],
        'responseType' => '\\SendGridSDK\\Responses\\V3\\Asm\\Suppressions\\GlobalResource\\Post',
        'requestBody' => [
            'type' => '\\SendGridSDK\\DTOs\\SuppressionsRequest',
            'nullable' => false,
            'required' => false,
            'rules' => [],
        ],
    ];

    /**
     * Add recipient addresses to the global suppression group.
     *
     * **This endpoint allows you to add one or more email addresses to the global suppressions group.**
     */
    public function post(?\SendGridSDK\PostParams\V3\Asm\Suppressions\GlobalResource $params = null): \SendGridSDK\Responses\V3\Asm\Suppressions\GlobalResource\Post
    {
        /** @var \SendGridSDK\Responses\V3\Asm\Suppressions\GlobalResource\Post $result */
        $result = $this->executeArguments(self::operation(self::POST), parameters: $params);
        return $result;
    }

    private const array DELETE_BY_EMAIL = [
        'method' => 'DELETE',
        'path' => '/v3/asm/suppressions/global/{email}',
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
     * Delete a Global Suppression
     *
     * **This endpoint allows you to remove an email address from the global suppressions group.**
     *
     * Deleting a suppression group will remove the suppression, meaning email will once again be sent to the previously suppressed addresses. This should be avoided unless a recipient indicates they wish to receive email from you again. You can use our [bypass filters](https://sendgrid.com/docs/ui/sending-email/index-suppressions/#bypass-suppressions) to deliver messages to otherwise suppressed addresses when exceptions are required.
     */
    public function deleteByEmail(string $email, ?\SendGridSDK\DeleteParams\V3\Asm\Suppressions\GlobalResource\ByEmail $params = null): void
    {
        $this->executeArguments(self::operation(self::DELETE_BY_EMAIL), path: ['email' => $email], parameters: $params);
        return;
    }

    private const array GET_BY_EMAIL = [
        'method' => 'GET',
        'path' => '/v3/asm/suppressions/global/{email}',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'responseType' => '\\SendGridSDK\\Responses\\V3\\Asm\\Suppressions\\GlobalResource\\ByEmail\\Get',
    ];

    /**
     * Retrieve a Global Suppression
     *
     * **This endpoint allows you to retrieve a global suppression. You can also use this endpoint to confirm if an email address is already globally suppresed.**
     *
     * If the email address you include in the URL path parameter `{email}` is already globally suppressed, the response will include that email address. If the address you enter for `{email}` is not globally suppressed, an empty JSON object `{}` will be returned.
     */
    public function getByEmail(string $email, ?\SendGridSDK\GetParams\V3\Asm\Suppressions\GlobalResource\ByEmail $params = null): \SendGridSDK\Responses\V3\Asm\Suppressions\GlobalResource\ByEmail\Get
    {
        /** @var \SendGridSDK\Responses\V3\Asm\Suppressions\GlobalResource\ByEmail\Get $result */
        $result = $this->executeArguments(self::operation(self::GET_BY_EMAIL), path: ['email' => $email], parameters: $params);
        return $result;
    }
}
