<?php

declare(strict_types=1);

namespace SendGridSDK\Requests\V3\Mail\Send\Post;

final class SendPersonalizationsRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'to',
    ];

    protected const array VALIDATION = [
        'bcc' => [
            'maxItems' => 1000,
        ],
        'cc' => [
            'maxItems' => 1000,
        ],
        'custom_args' => [
            'maxProperties' => 10000,
        ],
        'subject' => [
            'minLength' => 1,
        ],
        'substitutions' => [
            'maxProperties' => 10000,
        ],
    ];

    /**
     * An array of recipients to whom a blind carbon copy of your email will be sent. Each object in this array must contain a recipient's email address. Each object in the array may optionally contain a recipient's name.
     */
    public \SendGridSDK\Collections\V3\Mail\Send\Post\PersonalizationsItem\PersonalizationsItemBccCollection $bcc {
        set {
            $this->assigning('bcc', $value);
            $this->bcc = $value;
        }
    }
    /**
     * An array of recipients to whom a copy of the email will be sent. Each object in this array must contain a recipient's email address. Each object in the array may optionally contain a recipient's name.
     */
    public \SendGridSDK\Collections\V3\Mail\Send\Post\PersonalizationsItem\PersonalizationsItemBccCollection $cc {
        set {
            $this->assigning('cc', $value);
            $this->cc = $value;
        }
    }
    /**
     * Values that are specific to this personalization that will be carried along with the email and its activity data. Substitutions will not be made on custom arguments, so any string that is assigned to this property will be assumed to be the custom argument that you would like to be used. This field may not exceed 10,000 bytes.
     */
    public \SendGridSDK\Requests\V3\Mail\Send\Post\PersonalizationsItem\CustomArgsRequest $custom_args {
        set {
            $this->assigning('custom_args', $value);
            $this->custom_args = $value;
        }
    }
    /**
     * A collection property names that will be substituted by their corresponding property values in the `subject`, `reply-to` and `content` portions of a SendGrid Dynamic Template. Dynamic template data is available in a template using [Handlebars](https://docs.sendgrid.com/for-developers/sending-email/using-handlebars) syntax. This property should be used in combination with a Dynamic Template, which can be identified by a `template_id` starting with `d-`. See [**How to Send an Email with Dynamic Templates**](https://docs.sendgrid.com/ui/sending-email/how-to-send-an-email-with-dynamic-templates) for more information.
     */
    public \SendGridSDK\Requests\V3\Mail\Send\Post\PersonalizationsItem\TemplateDataRequest $dynamic_template_data;
    public \SendGridSDK\DTOs\Mail\From $from;
    /**
     * A collection of JSON property name and property value pairs allowing you to specify handling instructions for your email. You may not override the following headers: `x-sg-id`, `x-sg-eid`, `received`, `dkim-signature`, `Content-Type`, `Content-Transfer-Encoding`, `To`, `From`, `Subject`, `Reply-To`, `CC`, `BCC`.
     */
    public \SendGridSDK\Requests\V3\Mail\Send\Post\PersonalizationsItem\PersonalizationsItemHeadersRequest $headers;
    /**
     * A [unix timestamp](https://en.wikipedia.org/wiki/Unix_time) allowing you to specify when your email should be sent. A send cannot be scheduled more than 72 hours in advance.
     */
    public int $send_at;
    /**
     * The subject of your email. See line length limits specified in [RFC 2822](https://www.rfc-editor.org/rfc/rfc2822#section-2.1.1) for guidance on subject line character limits.
     */
    public string $subject {
        set {
            $this->assigning('subject', $value);
            $this->subject = $value;
        }
    }
    /**
     * A collection property names that will be substituted by their corresponding property values in the `subject`, `reply-to` and `content` portions of your message. Name and value pairs follow the pattern `"substitution_tag":"value to substitute"`. The total collective size of your substitutions may not exceed 100,000 bytes per personalization object. Substitutions allow you to insert data without using SendGrid's Dynamic Templates. This property should not be used in combination with a Dynamic Template, which can be identified by a `template_id` starting with `d-`. See [**Substitution Tags**](https://docs.sendgrid.com/for-developers/sending-email/substitution-tags) for more information.
     */
    public \SendGridSDK\Requests\V3\Mail\Send\Post\PersonalizationsItem\SubstitutionsMapRequest $substitutions {
        set {
            $this->assigning('substitutions', $value);
            $this->substitutions = $value;
        }
    }
    /**
     * An array of recipients to whom the email will be sent. Each object in this array must contain a recipient's email address. Each object in the array may optionally contain a recipient's name.
     */
    public \SendGridSDK\Collections\V3\Mail\Send\Post\PersonalizationsItem\PersonalizationsItemBccCollection $to;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'bcc' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->bcc = new \SendGridSDK\Collections\V3\Mail\Send\Post\PersonalizationsItem\PersonalizationsItemBccCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \SendGridSDK\DTOs\Mail\To::class)) : parent::assignMember($name, $value),
            'cc' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->cc = new \SendGridSDK\Collections\V3\Mail\Send\Post\PersonalizationsItem\PersonalizationsItemBccCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \SendGridSDK\DTOs\Mail\To::class)) : parent::assignMember($name, $value),
            'from' => $value instanceof \stdClass ? $this->from = new \SendGridSDK\DTOs\Mail\From($value) : parent::assignMember($name, $value),
            'send_at' => is_int($value) ? $this->send_at = $value : parent::assignMember($name, $value),
            'subject' => is_string($value) ? $this->subject = $value : parent::assignMember($name, $value),
            'to' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->to = new \SendGridSDK\Collections\V3\Mail\Send\Post\PersonalizationsItem\PersonalizationsItemBccCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \SendGridSDK\DTOs\Mail\To::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
