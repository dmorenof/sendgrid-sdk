<?php

declare(strict_types=1);

namespace SendGridSDK\DTOs\Sso;

final class TeammatesRestrictedSubuserResponseProps extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * When this property is set to `true`, the Teammate has permissions to operate only on behalf of a Subuser. This property value is `true` when the `subuser_access` property is not empty. The `subuser_access` property determines which Subusers the Teammate may act on behalf of.
     */
    public bool $has_restricted_subuser_access;
    /**
     * Specifies which Subusers the Teammate may access and act on behalf of. If this property is populated, the `has_restricted_subuser_access` property will be `true`.
     */
    public \SendGridSDK\Collections\Sso\TeammatesRestrictedSubuserResponseProps\SubuserAccessCollection $subuser_access;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'has_restricted_subuser_access' => is_bool($value) ? $this->has_restricted_subuser_access = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
