<?php

declare(strict_types=1);

namespace SendGridSDK\Requests\V3\Mail\Send;

final class Post extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'from',
        'personalizations',
    ];

    protected const array VALIDATION = [
        'categories' => [
            'maxItems' => 10,
            'uniqueItems' => true,
        ],
        'ip_pool_name' => [
            'minLength' => 2,
            'maxLength' => 64,
        ],
        'personalizations' => [
            'maxItems' => 1000,
            'uniqueItems' => false,
        ],
        'reply_to_list' => [
            'maxItems' => 1000,
            'uniqueItems' => true,
        ],
        'subject' => [
            'minLength' => 1,
        ],
    ];

    /**
     * An object allowing you to specify how to handle unsubscribes. With SendGrid, an unsubscribe is the action an email recipient takes when they opt-out of receiving your messages. A suppression is the action you take as a sender to filter or suppress an unsubscribed address from your email send. From the perspective of the recipient, your suppression is the result of their unsubscribe. See [**Suppression Groups**](https://www.twilio.com/docs/sendgrid/api-reference/suppressions-unsubscribe-groups/create-a-new-suppression-group) for more information.
     */
    public \SendGridSDK\Requests\V3\Mail\Send\Post\SendAsmRequest $asm;
    /**
     * An array of objects where you can define any attachments to be included with the message. Each object contains a `content` property, which must be a Base64 encoded string of the attachment itself, and `type`, `filename`, `disposition`, and `content_id` properties that tell SendGrid how to handle the attachment.
     */
    public \SendGridSDK\Collections\V3\Mail\Send\Post\SendAttachmentsCollection $attachments;
    /**
     * An ID representing a batch of emails to be sent at the same time. Including a `batch_id` in your request allows you to include this email in that batch. It also enables you to cancel or pause the delivery of that batch. See the [Scheduled Sends API](https://sendgrid.com/docs/api-reference/) for more information about scheduling your email.
     */
    public string $batch_id;
    /**
     * An array of category names assigned to this message. Categories allow you to group messages by categories you define. Categories should be used sparingly to create general groups that are relevant to you. Categories are not meant to be used to track individual mail sends. For more granular categorization and tracking, use the `custom_args` property. A category name cannot exceed 255 characters. See [**Working with Categories**](https://docs.sendgrid.com/for-developers/sending-email/categories) for more information.
     */
    public \SendGridSDK\Collections\Design\CommonProperties\CategoriesCollection $categories {
        set {
            $this->assigning('categories', $value);
            $this->categories = $value;
        }
    }
    /**
     * An array of objects, each containing a message body's content and [MIME type](https://developer.mozilla.org/en-US/docs/Web/HTTP/Basics_of_HTTP/MIME_types). You must specify at least one MIME type and may include multiple. To include more than one MIME type, add an object for each type to the array.
     */
    public \SendGridSDK\Collections\V3\Mail\Send\Post\SendContentCollection $content;
    /**
     * Values that are specific to the entire send that will be carried along with the email and its activity data. Substitutions will not be made on custom arguments, so any string that is assigned to this property will be assumed to be the custom argument that you would like to be used. This parameter is overridden by `custom_args` set at the personalizations level. Total `custom_args` size may not exceed 10,000 bytes.
     */
    public string $custom_args;
    public \SendGridSDK\DTOs\Mail\From $from;
    /**
     * A collection of JSON property name and property value pairs allowing you to specify handling instructions for your email. You may not override the following headers: `x-sg-id`, `x-sg-eid`, `received`, `dkim-signature`, `Content-Type`, `Content-Transfer-Encoding`, `To`, `From`, `Subject`, `Reply-To`, `CC`, `BCC`.
     */
    public \SendGridSDK\Requests\V3\Mail\Send\Post\SendHeadersRequest $headers;
    /**
     * The IP Pool that you would like to send this email from. IP Pools allow you to group your dedicated Twilio SendGrid IP addresses in order to have more control over your deliverability. See [**IP Pools**](https://docs.sendgrid.com/ui/account-and-settings/ip-pools) for more information.
     */
    public string $ip_pool_name {
        set {
            $this->assigning('ip_pool_name', $value);
            $this->ip_pool_name = $value;
        }
    }
    /**
     * A collection of different mail settings that you can use to specify how you would like this email to be handled. Mail settings provide extra functionality to your mail send. See [**Mail Settings**](https://docs.sendgrid.com/ui/account-and-settings/mail) for more information.
     */
    public \SendGridSDK\Requests\V3\Mail\Send\Post\MailSettingsRequest $mail_settings;
    /**
     * An array of messages and their metadata. Each object within the `personalizations` array can be thought of as a mail envelope—it defines who should receive an individual message and how that message should be handled. See [**Personalizations**](https://sendgrid.com/docs/for-developers/sending-email/personalizations/) for more information.
     */
    public \SendGridSDK\Collections\V3\Mail\Send\Post\SendPersonalizationsCollection $personalizations {
        set {
            $this->assigning('personalizations', $value);
            $this->personalizations = $value;
        }
    }
    public \SendGridSDK\DTOs\Mail\To $reply_to;
    /**
     * An array of recipients to whom replies will be sent. Each object in this array must contain a recipient's email address. Each object in the array may optionally contain a recipient's name. You can use either the `reply_to` property or `reply_to_list` property but not both.
     */
    public \SendGridSDK\Collections\V3\Mail\Send\Post\ToListCollection $reply_to_list {
        set {
            $this->assigning('reply_to_list', $value);
            $this->reply_to_list = $value;
        }
    }
    /**
     * A [unix timestamp](https://en.wikipedia.org/wiki/Unix_time) allowing you to specify when your email should be sent. A send cannot be scheduled more than 72 hours in advance. This property may be overridden by the `send_at` property set at the personalizations level.
     */
    public int $send_at;
    /**
     * The global or _message level_ subject of your email. Subject lines set in personalizations objects will override this global subject line. See line length limits specified in [RFC 2822](https://www.rfc-editor.org/rfc/rfc2822#section-2.1.1) for guidance on subject line character limits.
     */
    public string $subject {
        set {
            $this->assigning('subject', $value);
            $this->subject = $value;
        }
    }
    /**
     * An email template ID. A template that contains a subject and content—either text or html—will override any subject and content values specified at the `personalizations` or message level. If a template ID begins with `d-`, it is a dynamic template and will work with the `dynamic_template_data` property. If the template ID does not begin with `d-`, it is a standard SendGrid template and will work with the `substitutions` property. See [**How to Send an Email with Dynamic Templates**](https://docs.sendgrid.com/ui/sending-email/how-to-send-an-email-with-dynamic-templates) for more information about working with templates.
     */
    public string $template_id;
    /**
     * Settings to determine how you would like to track the metrics of how your recipients interact with your email. See [**Tracking Settings**](https://docs.sendgrid.com/ui/account-and-settings/tracking) for more information.
     */
    public \SendGridSDK\Requests\V3\Mail\Send\Post\TrackingSettingsRequest $tracking_settings;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'batch_id' => is_string($value) ? $this->batch_id = $value : parent::assignMember($name, $value),
            'categories' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->categories = new \SendGridSDK\Collections\Design\CommonProperties\CategoriesCollection($value) : parent::assignMember($name, $value),
            'custom_args' => is_string($value) ? $this->custom_args = $value : parent::assignMember($name, $value),
            'from' => $value instanceof \stdClass ? $this->from = new \SendGridSDK\DTOs\Mail\From($value) : parent::assignMember($name, $value),
            'ip_pool_name' => is_string($value) ? $this->ip_pool_name = $value : parent::assignMember($name, $value),
            'reply_to' => $value instanceof \stdClass ? $this->reply_to = new \SendGridSDK\DTOs\Mail\To($value) : parent::assignMember($name, $value),
            'reply_to_list' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->reply_to_list = new \SendGridSDK\Collections\V3\Mail\Send\Post\ToListCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \SendGridSDK\DTOs\Mail\To::class)) : parent::assignMember($name, $value),
            'send_at' => is_int($value) ? $this->send_at = $value : parent::assignMember($name, $value),
            'subject' => is_string($value) ? $this->subject = $value : parent::assignMember($name, $value),
            'template_id' => is_string($value) ? $this->template_id = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
