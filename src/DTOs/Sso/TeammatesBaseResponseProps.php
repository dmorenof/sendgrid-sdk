<?php

declare(strict_types=1);

namespace SendGridSDK\DTOs\Sso;

final class TeammatesBaseResponseProps extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Teammate's email address. This email address also functions as the Teammate's username and must match the address assigned to the user in your IdP. This address cannot be changed after the Teammate is created.
     * Format: email
     */
    public string $email;
    /**
     * The Teammate's first name.
     */
    public string $first_name;
    /**
     * Indicates if the Teammate has administrator permissions. When set to `true`, the Teammate is an admin.
     */
    public bool $is_admin;
    /**
     * Indicates how the Teammate authenticates with SendGrid. When set to `true`, the Teammate will access SendGrid via SSO and their IdP. When set to `false`, the Teammate will authenticate directly with SendGrid via a username and password.
     */
    public bool $is_sso;
    /**
     * The Teammate's last name.
     */
    public string $last_name;
    /**
     * The permissions or scopes currently assigned to the Teammate. See [**Teammate Permissions**](https://docs.sendgrid.com/ui/account-and-settings/teammate-permissions) for a complete list of available scopes.
     */
    public \SendGridSDK\Collections\StringCollection $scopes;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'email' => is_string($value) ? $this->email = $value : parent::assignMember($name, $value),
            'first_name' => is_string($value) ? $this->first_name = $value : parent::assignMember($name, $value),
            'is_admin' => is_bool($value) ? $this->is_admin = $value : parent::assignMember($name, $value),
            'is_sso' => is_bool($value) ? $this->is_sso = $value : parent::assignMember($name, $value),
            'last_name' => is_string($value) ? $this->last_name = $value : parent::assignMember($name, $value),
            'scopes' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->scopes = new \SendGridSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
