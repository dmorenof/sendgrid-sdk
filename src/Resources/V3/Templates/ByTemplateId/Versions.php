<?php

declare(strict_types=1);

namespace SendGridSDK\Resources\V3\Templates\ByTemplateId;

final class Versions extends \SendGridSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/v3/templates/{template_id}/versions',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'success' => [
            201,
        ],
        'responseType' => '\\SendGridSDK\\DTOs\\TransactionalTemplate\\VersionOutput',
        'requestBody' => [
            'type' => '\\SendGridSDK\\DTOs\\TransactionalTemplate\\VersionCreate',
            'nullable' => false,
            'required' => false,
            'rules' => [],
        ],
    ];

    /**
     * Create a new transactional template version.
     *
     * **This endpoint allows you to create a new version of a template.**
     */
    public function post(string $template_id, ?\SendGridSDK\PostParams\V3\Templates\ByTemplateId\Versions $params = null): \SendGridSDK\DTOs\TransactionalTemplate\VersionOutput
    {
        /** @var \SendGridSDK\DTOs\TransactionalTemplate\VersionOutput $result */
        $result = $this->executeArguments(self::operation(self::POST), path: ['template_id' => $template_id], parameters: $params);
        return $result;
    }

    private const array DELETE_BY_VERSION_ID = [
        'method' => 'DELETE',
        'path' => '/v3/templates/{template_id}/versions/{version_id}',
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
     * Delete a transactional template version.
     *
     * **This endpoint allows you to delete a transactional template version.**
     */
    public function deleteByVersionId(\SendGridSDK\PathParams\V3\Templates\ByTemplateId\Versions\ByVersionId $identifier, ?\SendGridSDK\DeleteParams\V3\Templates\ByTemplateId\Versions\ByVersionId $params = null): void
    {
        $this->executeArguments(self::operation(self::DELETE_BY_VERSION_ID), path: $identifier, parameters: $params);
        return;
    }

    private const array GET_BY_VERSION_ID = [
        'method' => 'GET',
        'path' => '/v3/templates/{template_id}/versions/{version_id}',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'responseType' => '\\SendGridSDK\\DTOs\\TransactionalTemplate\\VersionOutput',
    ];

    /**
     * Retrieve a specific transactional template version.
     *
     * **This endpoint allows you to retrieve a specific version of a template.**
     */
    public function getByVersionId(\SendGridSDK\PathParams\V3\Templates\ByTemplateId\Versions\ByVersionId $identifier, ?\SendGridSDK\GetParams\V3\Templates\ByTemplateId\Versions\ByVersionId $params = null): \SendGridSDK\DTOs\TransactionalTemplate\VersionOutput
    {
        /** @var \SendGridSDK\DTOs\TransactionalTemplate\VersionOutput $result */
        $result = $this->executeArguments(self::operation(self::GET_BY_VERSION_ID), path: $identifier, parameters: $params);
        return $result;
    }

    private const array PATCH_BY_VERSION_ID = [
        'method' => 'PATCH',
        'path' => '/v3/templates/{template_id}/versions/{version_id}',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'responseType' => '\\SendGridSDK\\DTOs\\TransactionalTemplate\\VersionOutput',
        'requestBody' => [
            'type' => '\\SendGridSDK\\DTOs\\TransactionalTemplate\\VersionCreate',
            'nullable' => false,
            'required' => false,
            'rules' => [],
        ],
    ];

    /**
     * Edit a transactional template version.
     *
     * **This endpoint allows you to edit the content of your template version.**
     */
    public function patchByVersionId(\SendGridSDK\PathParams\V3\Templates\ByTemplateId\Versions\ByVersionId $identifier, ?\SendGridSDK\PatchParams\V3\Templates\ByTemplateId\Versions\ByVersionId $params = null): \SendGridSDK\DTOs\TransactionalTemplate\VersionOutput
    {
        /** @var \SendGridSDK\DTOs\TransactionalTemplate\VersionOutput $result */
        $result = $this->executeArguments(self::operation(self::PATCH_BY_VERSION_ID), path: $identifier, parameters: $params);
        return $result;
    }
}
