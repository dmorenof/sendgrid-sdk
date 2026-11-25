<?php

declare(strict_types=1);

namespace SendGridSDK\Responses\Errors\V3\Scopes;

final class GetStatus401Response extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'errors',
    ];

    /**
     * This 401 response indicates that the user making the call doesn't have the authorization to view the list of scopes.
     */
    public \SendGridSDK\Collections\Errors\V3\Scopes\GetStatus401\GetStatus401ErrorsCollection $errors;
}
