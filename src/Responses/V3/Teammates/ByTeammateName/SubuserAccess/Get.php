<?php

declare(strict_types=1);

namespace SendGridSDK\Responses\V3\Teammates\ByTeammateName\SubuserAccess;

/**
 * Example: {"has_restricted_subuser_access":true,"subuser_access":[{"id":1234,"username":"examplesubuser","email":"subuser&#64;example.com","disabled":true,"permission_type":"admin","scopes":["billing.read"]}],"_metadata":{"next_params":{"limit":0,"after_subuser_id":0,"username":"string"}}}
 */
final class Get extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * This object contains response metadata. The presence of the `after_subuser_id` property in the metadata indicates that some items are still outstanding and have not been retrieved. You can use the `after_subuser_id` value to retrieve additional items with another request.
     */
    public \SendGridSDK\Responses\V3\Teammates\ByTeammateName\SubuserAccess\Get\SubuserAccessMetadataResponse $_metadata;
    /**
     * When this property is set to `true`, the Teammate has permissions to operate only on behalf of a Subuser. This property value is `true` when the `subuser_access` property is not empty. The `subuser_access` property determines which Subusers the Teammate may act on behalf of.
     */
    public bool $has_restricted_subuser_access;
    /**
     * Specifies which Subusers the Teammate may access and act on behalf of. If this property is populated, the `has_restricted_subuser_access` property will be `true`.
     */
    public \SendGridSDK\Collections\V3\Teammates\ByTeammateName\SubuserAccess\Get\SubuserAccessCollection $subuser_access;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'has_restricted_subuser_access' => is_bool($value) ? $this->has_restricted_subuser_access = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
