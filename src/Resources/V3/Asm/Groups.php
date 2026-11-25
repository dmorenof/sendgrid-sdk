<?php

declare(strict_types=1);

namespace SendGridSDK\Resources\V3\Asm;

final class Groups extends \SendGridSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/v3/asm/groups',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'responseType' => '\\SendGridSDK\\Collections\\V3\\Asm\\Groups\\Get\\AsmGroupsCollection',
    ];

    /**
     * Retrieve all suppression groups associated with the user.
     *
     * **This endpoint allows you to retrieve a list of all suppression groups created by this user.**
     *
     * This endpoint can also return information for multiple group IDs that you include in your request. To add a group ID to your request, simply append `?id=123456&id=123456`, with the appropriate group IDs.
     */
    public function get(?\SendGridSDK\GetParams\V3\Asm\Groups $params = null): \SendGridSDK\Collections\V3\Asm\Groups\Get\AsmGroupsCollection
    {
        /** @var \SendGridSDK\Collections\V3\Asm\Groups\Get\AsmGroupsCollection $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

    private const array POST = [
        'method' => 'POST',
        'path' => '/v3/asm/groups',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'success' => [
            201,
        ],
        'responseType' => '\\SendGridSDK\\Responses\\V3\\Asm\\Groups\\Post',
        'requestBody' => [
            'type' => '\\SendGridSDK\\DTOs\\SuppressionGroupRequestBaseProps',
            'nullable' => false,
            'required' => false,
            'rules' => [],
        ],
    ];

    /**
     * Create a new suppression group
     *
     * **This endpoint allows you to create a new suppression group.**
     *
     * To add an email address to the suppression group, [create a Suppression](https://docs.sendgrid.com/api-reference/suppressions-suppressions/add-suppressions-to-a-suppression-group).
     */
    public function post(?\SendGridSDK\PostParams\V3\Asm\Groups $params = null): \SendGridSDK\Responses\V3\Asm\Groups\Post
    {
        /** @var \SendGridSDK\Responses\V3\Asm\Groups\Post $result */
        $result = $this->executeArguments(self::operation(self::POST), parameters: $params);
        return $result;
    }

    private const array DELETE_BY_GROUP_ID = [
        'method' => 'DELETE',
        'path' => '/v3/asm/groups/{group_id}',
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
     * Delete a Suppression Group
     *
     * **This endpoint allows you to delete a suppression group.**
     *
     * If a recipient uses the "one-click unsubscribe" option on an email associated with a deleted group, that recipient will be added to the global suppression list.
     *
     * Deleting a suppression group will remove the suppression, meaning email will once again be sent to the previously suppressed addresses. This should be avoided unless a recipient indicates they wish to receive email from you again. You can use our [bypass filters](https://sendgrid.com/docs/ui/sending-email/index-suppressions/#bypass-suppressions) to deliver messages to otherwise suppressed addresses when exceptions are required.
     */
    public function deleteByGroupId(string $group_id, ?\SendGridSDK\DeleteParams\V3\Asm\Groups\ByGroupId $params = null): void
    {
        $this->executeArguments(self::operation(self::DELETE_BY_GROUP_ID), path: ['group_id' => $group_id], parameters: $params);
        return;
    }

    private const array GET_BY_GROUP_ID = [
        'method' => 'GET',
        'path' => '/v3/asm/groups/{group_id}',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'responseType' => '\\SendGridSDK\\Responses\\V3\\Asm\\Groups\\ByGroupId\\Get',
    ];

    /**
     * Get information on a single suppression group.
     *
     * **This endpoint allows you to retrieve a single suppression group.**
     */
    public function getByGroupId(string $group_id, ?\SendGridSDK\GetParams\V3\Asm\Groups\ByGroupId $params = null): \SendGridSDK\Responses\V3\Asm\Groups\ByGroupId\Get
    {
        /** @var \SendGridSDK\Responses\V3\Asm\Groups\ByGroupId\Get $result */
        $result = $this->executeArguments(self::operation(self::GET_BY_GROUP_ID), path: ['group_id' => $group_id], parameters: $params);
        return $result;
    }

    private const array PATCH_BY_GROUP_ID = [
        'method' => 'PATCH',
        'path' => '/v3/asm/groups/{group_id}',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'success' => [
            201,
        ],
        'responseType' => '\\SendGridSDK\\DTOs\\SuppressionGroup',
        'requestBody' => [
            'type' => '\\SendGridSDK\\Requests\\V3\\Asm\\Groups\\ByGroupId\\Patch',
            'nullable' => false,
            'required' => false,
            'rules' => [],
        ],
    ];

    /**
     * Update a suppression group.
     *
     * **This endpoint allows you to update or change a suppression group.**
     */
    public function patchByGroupId(string $group_id, ?\SendGridSDK\PatchParams\V3\Asm\Groups\ByGroupId $params = null): \SendGridSDK\DTOs\SuppressionGroup
    {
        /** @var \SendGridSDK\DTOs\SuppressionGroup $result */
        $result = $this->executeArguments(self::operation(self::PATCH_BY_GROUP_ID), path: ['group_id' => $group_id], parameters: $params);
        return $result;
    }
}
