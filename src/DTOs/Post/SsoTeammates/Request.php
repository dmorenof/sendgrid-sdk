<?php

declare(strict_types=1);

namespace SendGridSDK\DTOs\Post\SsoTeammates;

/**
 * The request body accepted by the POST endpoint that creates a new webhook.
 *
 * Single Sign-On Teammate Create Request Body
 * Example: {"email":"jane_doe&#64;example.com","first_name":"Jane","last_name":"Doe","is_admin":false,"has_restricted_subuser_access":true,"subuser_access":[{"id":12345,"permission_type":"restricted","scopes":["alerts.read","asm.groups.read","billing.read","ips.warmup.read","ips.pools.read","ips.pools.ips.read","ips.assigned.read","ips.read","mail_settings.read","mail_settings.bcc.read","mail_settings.address_whitelist.read","mail_settings.footer.read","mail_settings.forward_spam.read","mail_settings.plain_content.read","mail_settings.spam_check.read","mail_settings.bounce_purge.update","mail_settings.forward_bounce.read","partner_settings.read","partner_settings.new_relic.read","partner_settings.sendwithus.read","tracking_settings.read","tracking_settings.click.read","tracking_settings.subscription.read","tracking_settings.open.read","tracking_settings.google_analytics.read","user.webhooks.event.settings.read","user.webhooks.event.test.read","user.webhooks.parse.settings.read","stats.read","stats.global.read","categories.stats.read","categories.stats.sums.read","devices.stats.read","clients.stats.read","clients.phone.stats.read","clients.tablet.stats.read","clients.webmail.stats.read","clients.desktop.stats.read","geo.stats.read","mailbox_providers.stats.read","browsers.stats.read","subusers.stats.read","subusers.stats.sums.read","subusers.stats.monthly.read","user.webhooks.parse.stats.read","subusers.read","subusers.monitor.read","subusers.credits.read","subusers.credits.remaining.read","subusers.reputations.read","subusers.summary.read","templates.read","templates.versions.read","user.account.read","user.credits.read","user.email.read","user.profile.read","user.profile.update","user.timezone.read","user.username.read","user.settings.enforced_tls.read","api_keys.read","categories.read","mail_settings.template.read","mail.batch.read","user.scheduled_sends.read","access_settings.whitelist.read","access_settings.activity.read","suppression.read","messages.read","email_testing.read","sender_verification_eligible","sender_verification_legacy","2fa_exempt","2fa_required"]}]}
 */
final class Request extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'email',
        'first_name',
        'last_name',
    ];

    /**
     * Set this property to the Teammate's email address. This email address will also function as the Teammate's username and must match the address assigned to the user in your IdP. This address cannot be changed after the Teammate is created.
     * Format: email
     */
    public string $email;
    /**
     * Set this property to the Teammate's first name.
     */
    public string $first_name;
    /**
     * Set this property to `true` to give the Teammate permissions to operate only on behalf of a Subuser. This property value must be `true` if the `subuser_access` property is not empty. The `subuser_access` property determines which Subusers the Teammate may act on behalf of. If this property is set to `true`, you cannot specify individual `scopes`, assign a `persona`, or set `is_admin` to `true`—a Teammate cannot specify scopes for the parent account and have restricted Subuser access.
     */
    public bool $has_restricted_subuser_access;
    /**
     * Set this property to `true` if the Teammate has admin permissions. You should not include the `scopes` or `persona` properties when setting the `is_admin` property to `true`—an admin will be allocated all scopes. See [**Teammate Permissions**](https://docs.sendgrid.com/ui/account-and-settings/teammate-permissions) for a complete list of scopes.
     */
    public bool $is_admin;
    /**
     * Set this property to the Teammate's last name.
     */
    public string $last_name;
    /**
     * A persona represents a group of permissions often required by a type of Teammate such as a developer or marketer. Assigning a persona allows you to allocate a group of pre-defined permissions rather than assigning each scope individually. See [**Teammate Permissions**](https://docs.sendgrid.com/ui/account-and-settings/teammate-permissions) for a full list of the scopes assigned to each persona.
     */
    public \SendGridSDK\Enums\Persona $persona;
    /**
     * Add or remove permissions from a Teammate using this `scopes` property. See [**Teammate Permissions**](https://docs.sendgrid.com/ui/account-and-settings/teammate-permissions) for a complete list of available scopes. You should not include this propety in the request when using the `persona` property or when setting the `is_admin` property to `true`—assigning a `persona` or setting `is_admin` to `true` will allocate a group of permissions to the Teammate.
     */
    public \SendGridSDK\Collections\StringCollection $scopes;
    /**
     * Specify which Subusers the Teammate may access and act on behalf of with this property. If this property is populated, you must set the `has_restricted_subuser_access` property to `true`.
     */
    public \SendGridSDK\Collections\Post\SsoTeammates\Request\SubuserAccessCollection $subuser_access;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'email' => is_string($value) ? $this->email = $value : parent::assignMember($name, $value),
            'first_name' => is_string($value) ? $this->first_name = $value : parent::assignMember($name, $value),
            'has_restricted_subuser_access' => is_bool($value) ? $this->has_restricted_subuser_access = $value : parent::assignMember($name, $value),
            'is_admin' => is_bool($value) ? $this->is_admin = $value : parent::assignMember($name, $value),
            'last_name' => is_string($value) ? $this->last_name = $value : parent::assignMember($name, $value),
            'persona' => is_string($value) ? $this->persona = \SendGridSDK\Enums\Persona::from($value) : parent::assignMember($name, $value),
            'scopes' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->scopes = new \SendGridSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
