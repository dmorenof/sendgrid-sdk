<?php

declare(strict_types=1);

namespace SendGridSDK\V3\MailSettings;

final class AddressWhitelist extends \SendGridSDK\TwilioSendGridV3APISDK
{
    /** GET /v3/mail_settings/address_whitelist [operationId: ListAddressWhitelist] */
    /**
     * Retrieve address whitelist mail settings
     *
     * **This endpoint allows you to retrieve your current email address whitelist settings.**
     *
     * The Address Whitelist setting allows you to specify email addresses or domains for which mail should never be suppressed.
     *
     * For Regional Subusers - Utilizing this feature for Regional (EU) subusers will cause customer personal information to be stored outside of the EU.
     *
     * For example, if you own the domain `example.com`, and one or more of your recipients use `email&#64;example.com` addresses, placing `example.com` in the address whitelist setting instructs Twilio SendGrid to ignore all bounces, blocks, and unsubscribes logged for that domain. In other words, all bounces, blocks, and unsubscribes will still be sent to `example.com` as if they were sent under normal sending conditions.
     */
    public static function get(?\SendGridSDK\GetParams\V3\MailSettings\AddressWhitelist $params = null): \SendGridSDK\DTOs\Mail\SettingsAddressWhitelabel200
    {
        return self::client()->resource(\SendGridSDK\Resources\V3\MailSettings\AddressWhitelist::class)->get($params);
    }

    /** PATCH /v3/mail_settings/address_whitelist [operationId: UpdateAddressWhitelist] */
    /**
     * Update address whitelist mail settings
     *
     * **This endpoint allows you to update your current email address whitelist settings.**
     *
     * For Regional Subusers - Utilizing this feature for Regional (EU) subusers will cause customer personal information to be stored outside of the EU.
     *
     * You can select whether or not this setting should be enabled by assigning the `enabled` field a `true` or `false` value.
     *
     * Passing only the `enabled` field to this endpoint will not alter your current `list` of whitelist entries. However, any modifications to your `list` of entries will overwrite the entire list. For this reason, you must included all existing entries you wish to retain in your `list` in addition to any new entries you intend to add. To remove one or more `list` entries, pass a `list` with only the entries you wish to retain.
     *
     * You should not add generic domains such as `gmail.com` or `yahoo.com`  in your `list` because your emails will not honor recipients' unsubscribes. This may cause a legal violation of [CAN-SPAM](https://sendgrid.com/docs/glossary/can-spam/) and could damage your sending reputation.
     *
     * The Address Whitelist setting allows you to specify email addresses or domains for which mail should never be suppressed.
     *
     * For example, if you own the domain `example.com`, and one or more of your recipients use `email&#64;example.com` addresses, placing `example.com` in the address whitelist setting instructs Twilio SendGrid to ignore all bounces, blocks, and unsubscribes logged for that domain. In other words, all bounces, blocks, and unsubscribes will still be sent to `example.com` as if they were sent under normal sending conditions.
     */
    public static function patch(?\SendGridSDK\PatchParams\V3\MailSettings\AddressWhitelist $params = null): \SendGridSDK\DTOs\Mail\SettingsAddressWhitelabel200
    {
        return self::client()->resource(\SendGridSDK\Resources\V3\MailSettings\AddressWhitelist::class)->patch($params);
    }
}
