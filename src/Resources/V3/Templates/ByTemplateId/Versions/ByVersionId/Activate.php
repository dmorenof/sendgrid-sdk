<?php

declare(strict_types=1);

namespace SendGridSDK\Resources\V3\Templates\ByTemplateId\Versions\ByVersionId;

final class Activate extends \SendGridSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/v3/templates/{template_id}/versions/{version_id}/activate',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'responseType' => '\\SendGridSDK\\DTOs\\TransactionalTemplate\\VersionOutput',
    ];

    /**
     * Activate a transactional template version.
     *
     * **This endpoint allows you to activate a version of one of your templates.**
     */
    public function post(\SendGridSDK\PathParams\V3\Templates\ByTemplateId\Versions\ByVersionId\Activate $identifier, ?\SendGridSDK\PostParams\V3\Templates\ByTemplateId\Versions\ByVersionId\Activate $params = null): \SendGridSDK\DTOs\TransactionalTemplate\VersionOutput
    {
        /** @var \SendGridSDK\DTOs\TransactionalTemplate\VersionOutput $result */
        $result = $this->executeArguments(self::operation(self::POST), path: $identifier, parameters: $params);
        return $result;
    }
}
