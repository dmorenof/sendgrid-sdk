<?php

declare(strict_types=1);

namespace SendGridSDK\Requests\V3\Mail\Send\Post;

/**
 * A collection of different mail settings that you can use to specify how you would like this email to be handled. Mail settings provide extra functionality to your mail send. See [**Mail Settings**](https://docs.sendgrid.com/ui/account-and-settings/mail) for more information.
 */
final class MailSettingsRequest extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Allows you to bypass the bounce list to ensure that the email is delivered to recipients. Spam report and unsubscribe lists will still be checked; addresses on these other lists will not receive the message. This filter cannot be combined with the `bypass_list_management` filter. See the [the "Bypass suppressions" section of our **Suppressions Overview**](https://sendgrid.com/docs/ui/sending-email/index-suppressions/#bypass-suppressions) for more about bypass filters.
     */
    public \SendGridSDK\Requests\V3\Mail\Send\Post\MailSettings\BounceManagementRequest $bypass_bounce_management;
    /**
     * Allows you to bypass all unsubscribe groups and suppressions to ensure that the email is delivered to every single recipient. This should only be used in emergencies when it is absolutely necessary that every recipient receives your email. This filter cannot be combined with any other bypass filters. See the [the "Bypass suppressions" section of our **Suppressions Overview**](https://sendgrid.com/docs/ui/sending-email/index-suppressions/#bypass-suppressions) for more about bypass filters.
     */
    public \SendGridSDK\Requests\V3\Mail\Send\Post\MailSettings\ListManagementRequest $bypass_list_management;
    /**
     * Allows you to bypass the spam report list to ensure that the email is delivered to recipients. Bounce and unsubscribe lists will still be checked; addresses on these other lists will not receive the message. This filter cannot be combined with the `bypass_list_management` filter. See the [the "Bypass suppressions" section of our **Suppressions Overview**](https://sendgrid.com/docs/ui/sending-email/index-suppressions/#bypass-suppressions) for more about bypass filters.
     */
    public \SendGridSDK\Requests\V3\Mail\Send\Post\MailSettings\SpamManagementRequest $bypass_spam_management;
    /**
     * Allows you to bypass the global unsubscribe list to ensure that the email is delivered to recipients. Bounce and spam report lists will still be checked; addresses on these other lists will not receive the message. This filter applies only to global unsubscribes and will not bypass group unsubscribes. This filter cannot be combined with the `bypass_list_management` filter. See the [the "Bypass suppressions" section of our **Suppressions Overview**](https://sendgrid.com/docs/ui/sending-email/index-suppressions/#bypass-suppressions) for more about bypass filters.
     */
    public \SendGridSDK\Requests\V3\Mail\Send\Post\MailSettings\UnsubscribeManagementRequest $bypass_unsubscribe_management;
    /**
     * Inserts a custom footer at the bottom of the text and HTML bodies of your messages. Use the `html` and `text` properties to include the content of the footers to be inserted.
     */
    public \SendGridSDK\Requests\V3\Mail\Send\Post\MailSettings\SettingsFooterRequest $footer;
    /**
     * Sandbox Mode allows you to send a test email to ensure that your request body is valid and formatted correctly.
     */
    public \SendGridSDK\Requests\V3\Mail\Send\Post\MailSettings\SandboxModeRequest $sandbox_mode;
}
