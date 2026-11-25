<?php

declare(strict_types=1);

namespace SendGridSDK\V3\Templates\ByTemplateId;

final class Versions extends \SendGridSDK\TwilioSendGridV3APISDK
{
    /** POST /v3/templates/{template_id}/versions [operationId: CreateTemplateVersion] */
    /**
     * Create a new transactional template version.
     *
     * **This endpoint allows you to create a new version of a template.**
     */
    public static function post(string $template_id, ?\SendGridSDK\PostParams\V3\Templates\ByTemplateId\Versions $params = null): \SendGridSDK\DTOs\TransactionalTemplate\VersionOutput
    {
        return self::client()->resource(\SendGridSDK\Resources\V3\Templates\ByTemplateId\Versions::class)->post($template_id, $params);
    }

    /** DELETE /v3/templates/{template_id}/versions/{version_id} [operationId: DeleteTemplateVersion] */
    /**
     * Delete a transactional template version.
     *
     * **This endpoint allows you to delete a transactional template version.**
     */
    public static function deleteByVersionId(\SendGridSDK\PathParams\V3\Templates\ByTemplateId\Versions\ByVersionId $identifier, ?\SendGridSDK\DeleteParams\V3\Templates\ByTemplateId\Versions\ByVersionId $params = null): void
    {
        self::client()->resource(\SendGridSDK\Resources\V3\Templates\ByTemplateId\Versions::class)->deleteByVersionId($identifier, $params);
    }

    /** GET /v3/templates/{template_id}/versions/{version_id} [operationId: GetTemplateVersion] */
    /**
     * Retrieve a specific transactional template version.
     *
     * **This endpoint allows you to retrieve a specific version of a template.**
     */
    public static function getByVersionId(\SendGridSDK\PathParams\V3\Templates\ByTemplateId\Versions\ByVersionId $identifier, ?\SendGridSDK\GetParams\V3\Templates\ByTemplateId\Versions\ByVersionId $params = null): \SendGridSDK\DTOs\TransactionalTemplate\VersionOutput
    {
        return self::client()->resource(\SendGridSDK\Resources\V3\Templates\ByTemplateId\Versions::class)->getByVersionId($identifier, $params);
    }

    /** PATCH /v3/templates/{template_id}/versions/{version_id} [operationId: UpdateTemplateVersion] */
    /**
     * Edit a transactional template version.
     *
     * **This endpoint allows you to edit the content of your template version.**
     */
    public static function patchByVersionId(\SendGridSDK\PathParams\V3\Templates\ByTemplateId\Versions\ByVersionId $identifier, ?\SendGridSDK\PatchParams\V3\Templates\ByTemplateId\Versions\ByVersionId $params = null): \SendGridSDK\DTOs\TransactionalTemplate\VersionOutput
    {
        return self::client()->resource(\SendGridSDK\Resources\V3\Templates\ByTemplateId\Versions::class)->patchByVersionId($identifier, $params);
    }
}
