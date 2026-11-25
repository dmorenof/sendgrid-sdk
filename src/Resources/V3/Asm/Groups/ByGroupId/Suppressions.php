<?php

declare(strict_types=1);

namespace SendGridSDK\Resources\V3\Asm\Groups\ByGroupId;

final class Suppressions extends \SendGridSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/v3/asm/groups/{group_id}/suppressions',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'responseType' => '\\SendGridSDK\\Collections\\StringCollection',
    ];

    /**
     * Retrieve all suppressions for a suppression group
     *
     * **This endpoint allows you to retrieve all suppressed email addresses belonging to the given group.**
     */
    public function get(string $group_id, ?\SendGridSDK\GetParams\V3\Asm\Groups\ByGroupId\Suppressions $params = null): \SendGridSDK\Collections\StringCollection
    {
        /** @var \SendGridSDK\Collections\StringCollection $result */
        $result = $this->executeArguments(self::operation(self::GET), path: ['group_id' => $group_id], parameters: $params);
        return $result;
    }

    private const array POST = [
        'method' => 'POST',
        'path' => '/v3/asm/groups/{group_id}/suppressions',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'success' => [
            201,
        ],
        'responseType' => '\\SendGridSDK\\Responses\\V3\\Asm\\Groups\\ByGroupId\\Suppressions\\Post',
        'requestBody' => [
            'type' => '\\SendGridSDK\\DTOs\\SuppressionsRequest',
            'nullable' => false,
            'required' => false,
            'rules' => [],
        ],
    ];

    /**
     * Add suppressions to a suppression group
     *
     * **This endpoint allows you to add email addresses to an unsubscribe group.**
     *
     * If you attempt to add suppressions to a group that has been deleted or does not exist, the suppressions will be added to the global suppressions list.
     */
    public function post(string $group_id, ?\SendGridSDK\PostParams\V3\Asm\Groups\ByGroupId\Suppressions $params = null): \SendGridSDK\Responses\V3\Asm\Groups\ByGroupId\Suppressions\Post
    {
        /** @var \SendGridSDK\Responses\V3\Asm\Groups\ByGroupId\Suppressions\Post $result */
        $result = $this->executeArguments(self::operation(self::POST), path: ['group_id' => $group_id], parameters: $params);
        return $result;
    }

    private const array DELETE_BY_EMAIL = [
        'method' => 'DELETE',
        'path' => '/v3/asm/groups/{group_id}/suppressions/{email}',
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
     * Delete a suppression from a suppression group
     *
     * **This endpoint allows you to remove a suppressed email address from the given suppression group.**
     *
     * Removing an address will remove the suppression, meaning email will once again be sent to the previously suppressed addresses. This should be avoided unless a recipient indicates they wish to receive email from you again. You can use our [bypass filters](https://sendgrid.com/docs/ui/sending-email/index-suppressions/#bypass-suppressions) to deliver messages to otherwise suppressed addresses when exceptions are required.
     */
    public function deleteByEmail(\SendGridSDK\PathParams\V3\Asm\Groups\ByGroupId\Suppressions\ByEmail $identifier, ?\SendGridSDK\DeleteParams\V3\Asm\Groups\ByGroupId\Suppressions\ByEmail $params = null): void
    {
        $this->executeArguments(self::operation(self::DELETE_BY_EMAIL), path: $identifier, parameters: $params);
        return;
    }
}
