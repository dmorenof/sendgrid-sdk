<?php

declare(strict_types=1);

namespace SendGridSDK\Responses\Errors\V3\Teammates\ByTeammateName\SubuserAccess;

/**
 * An object containing an array of errors objects.
 */
final class GetStatus500Response extends \Dmorenof\SdkRuntime\DTO
{
    public \SendGridSDK\Collections\Errors\V3\Teammates\ByTeammateName\SubuserAccess\GetStatus500\GetStatus500ErrorsCollection $errors;
}
