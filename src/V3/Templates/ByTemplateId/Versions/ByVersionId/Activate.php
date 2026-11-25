<?php

declare(strict_types=1);

namespace SendGridSDK\V3\Templates\ByTemplateId\Versions\ByVersionId;

final class Activate extends \SendGridSDK\TwilioSendGridV3APISDK
{
    /** POST /v3/templates/{template_id}/versions/{version_id}/activate [operationId: ActivateTemplateVersion] */
    /**
     * Activate a transactional template version.
     *
     * **This endpoint allows you to activate a version of one of your templates.**
     */
    public static function post(\SendGridSDK\PathParams\V3\Templates\ByTemplateId\Versions\ByVersionId\Activate $identifier, ?\SendGridSDK\PostParams\V3\Templates\ByTemplateId\Versions\ByVersionId\Activate $params = null): \SendGridSDK\DTOs\TransactionalTemplate\VersionOutput
    {
        return self::client()->resource(\SendGridSDK\Resources\V3\Templates\ByTemplateId\Versions\ByVersionId\Activate::class)->post($identifier, $params);
    }
}
