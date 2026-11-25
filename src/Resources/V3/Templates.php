<?php

declare(strict_types=1);

namespace SendGridSDK\Resources\V3;

final class Templates extends \SendGridSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/v3/templates',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'errors' => [
            400 => '\\SendGridSDK\\Responses\\Errors\\V3\\Templates\\GetStatus400Response',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\SendGridSDK\\Responses\\Errors\\V3\\Templates\\GetStatus400Response',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\SendGridSDK\\Responses\\V3\\Templates\\Get',
    ];

    /**
     * Retrieve paged transactional templates.
     *
     * **This endpoint allows you to retrieve all transactional templates.**
     */
    public function get(\SendGridSDK\GetParams\V3\Templates $params): \SendGridSDK\Responses\V3\Templates\Get
    {
        /** @var \SendGridSDK\Responses\V3\Templates\Get $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

    private const array POST = [
        'method' => 'POST',
        'path' => '/v3/templates',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'success' => [
            201,
        ],
        'responseType' => '\\SendGridSDK\\DTOs\\TransactionalTemplate',
        'requestBody' => [
            'type' => '\\SendGridSDK\\Requests\\V3\\Templates\\Post',
            'nullable' => false,
            'required' => false,
            'rules' => [],
        ],
    ];

    /**
     * Create a transactional template.
     *
     * **This endpoint allows you to create a transactional template.**
     */
    public function post(?\SendGridSDK\PostParams\V3\Templates $params = null): \SendGridSDK\DTOs\TransactionalTemplate
    {
        /** @var \SendGridSDK\DTOs\TransactionalTemplate $result */
        $result = $this->executeArguments(self::operation(self::POST), parameters: $params);
        return $result;
    }

    private const array DELETE_BY_TEMPLATE_ID = [
        'method' => 'DELETE',
        'path' => '/v3/templates/{template_id}',
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
     * Delete a template.
     *
     * **This endpoint allows you to delete a transactional template.**
     */
    public function deleteByTemplateId(string $template_id, ?\SendGridSDK\DeleteParams\V3\Templates\ByTemplateId $params = null): void
    {
        $this->executeArguments(self::operation(self::DELETE_BY_TEMPLATE_ID), path: ['template_id' => $template_id], parameters: $params);
        return;
    }

    private const array GET_BY_TEMPLATE_ID = [
        'method' => 'GET',
        'path' => '/v3/templates/{template_id}',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'responseType' => '\\SendGridSDK\\DTOs\\TransactionalTemplate',
    ];

    /**
     * Retrieve a single transactional template.
     *
     * **This endpoint allows you to retrieve a single transactional template.**
     */
    public function getByTemplateId(string $template_id, ?\SendGridSDK\GetParams\V3\Templates\ByTemplateId $params = null): \SendGridSDK\DTOs\TransactionalTemplate
    {
        /** @var \SendGridSDK\DTOs\TransactionalTemplate $result */
        $result = $this->executeArguments(self::operation(self::GET_BY_TEMPLATE_ID), path: ['template_id' => $template_id], parameters: $params);
        return $result;
    }

    private const array PATCH_BY_TEMPLATE_ID = [
        'method' => 'PATCH',
        'path' => '/v3/templates/{template_id}',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'responseType' => '\\SendGridSDK\\DTOs\\TransactionalTemplate',
        'requestBody' => [
            'type' => '\\SendGridSDK\\Requests\\V3\\Templates\\ByTemplateId\\Patch',
            'nullable' => false,
            'required' => false,
            'rules' => [],
        ],
    ];

    /**
     * Edit a transactional template.
     *
     * **This endpoint allows you to edit the name of a transactional template.**
     *
     * To edit the template itself, [create a new transactional template version](https://docs.sendgrid.com/api-reference/transactional-templates-versions/create-a-new-transactional-template-version).
     */
    public function patchByTemplateId(string $template_id, ?\SendGridSDK\PatchParams\V3\Templates\ByTemplateId $params = null): \SendGridSDK\DTOs\TransactionalTemplate
    {
        /** @var \SendGridSDK\DTOs\TransactionalTemplate $result */
        $result = $this->executeArguments(self::operation(self::PATCH_BY_TEMPLATE_ID), path: ['template_id' => $template_id], parameters: $params);
        return $result;
    }

    private const array POST_BY_TEMPLATE_ID = [
        'method' => 'POST',
        'path' => '/v3/templates/{template_id}',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'success' => [
            201,
        ],
        'responseType' => '\\SendGridSDK\\DTOs\\TransactionalTemplate',
        'requestBody' => [
            'type' => '\\SendGridSDK\\Requests\\V3\\Templates\\ByTemplateId\\Post',
            'nullable' => false,
            'required' => false,
            'rules' => [],
        ],
    ];

    /**
     * Duplicate a transactional template.
     *
     * **This endpoint allows you to duplicate a transactional template.**
     */
    public function postByTemplateId(string $template_id, ?\SendGridSDK\PostParams\V3\Templates\ByTemplateId $params = null): \SendGridSDK\DTOs\TransactionalTemplate
    {
        /** @var \SendGridSDK\DTOs\TransactionalTemplate $result */
        $result = $this->executeArguments(self::operation(self::POST_BY_TEMPLATE_ID), path: ['template_id' => $template_id], parameters: $params);
        return $result;
    }
}
