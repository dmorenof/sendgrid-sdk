<?php

declare(strict_types=1);

namespace SendGridSDK\V3;

final class Templates extends \SendGridSDK\TwilioSendGridV3APISDK
{
    /** GET /v3/templates [operationId: ListTemplateTemplates] */
    /**
     * Retrieve paged transactional templates.
     *
     * **This endpoint allows you to retrieve all transactional templates.**
     */
    public static function get(\SendGridSDK\GetParams\V3\Templates $params): \SendGridSDK\Responses\V3\Templates\Get
    {
        return self::client()->resource(\SendGridSDK\Resources\V3\Templates::class)->get($params);
    }

    /** POST /v3/templates [operationId: CreateTemplate] */
    /**
     * Create a transactional template.
     *
     * **This endpoint allows you to create a transactional template.**
     */
    public static function post(?\SendGridSDK\PostParams\V3\Templates $params = null): \SendGridSDK\DTOs\TransactionalTemplate
    {
        return self::client()->resource(\SendGridSDK\Resources\V3\Templates::class)->post($params);
    }

    /** DELETE /v3/templates/{template_id} [operationId: DeleteTemplate] */
    /**
     * Delete a template.
     *
     * **This endpoint allows you to delete a transactional template.**
     */
    public static function deleteByTemplateId(string $template_id, ?\SendGridSDK\DeleteParams\V3\Templates\ByTemplateId $params = null): void
    {
        self::client()->resource(\SendGridSDK\Resources\V3\Templates::class)->deleteByTemplateId($template_id, $params);
    }

    /** GET /v3/templates/{template_id} [operationId: GetTemplate] */
    /**
     * Retrieve a single transactional template.
     *
     * **This endpoint allows you to retrieve a single transactional template.**
     */
    public static function getByTemplateId(string $template_id, ?\SendGridSDK\GetParams\V3\Templates\ByTemplateId $params = null): \SendGridSDK\DTOs\TransactionalTemplate
    {
        return self::client()->resource(\SendGridSDK\Resources\V3\Templates::class)->getByTemplateId($template_id, $params);
    }

    /** PATCH /v3/templates/{template_id} [operationId: UpdateTemplateTemplates] */
    /**
     * Edit a transactional template.
     *
     * **This endpoint allows you to edit the name of a transactional template.**
     *
     * To edit the template itself, [create a new transactional template version](https://docs.sendgrid.com/api-reference/transactional-templates-versions/create-a-new-transactional-template-version).
     */
    public static function patchByTemplateId(string $template_id, ?\SendGridSDK\PatchParams\V3\Templates\ByTemplateId $params = null): \SendGridSDK\DTOs\TransactionalTemplate
    {
        return self::client()->resource(\SendGridSDK\Resources\V3\Templates::class)->patchByTemplateId($template_id, $params);
    }

    /** POST /v3/templates/{template_id} [operationId: DuplicateTemplate] */
    /**
     * Duplicate a transactional template.
     *
     * **This endpoint allows you to duplicate a transactional template.**
     */
    public static function postByTemplateId(string $template_id, ?\SendGridSDK\PostParams\V3\Templates\ByTemplateId $params = null): \SendGridSDK\DTOs\TransactionalTemplate
    {
        return self::client()->resource(\SendGridSDK\Resources\V3\Templates::class)->postByTemplateId($template_id, $params);
    }
}
