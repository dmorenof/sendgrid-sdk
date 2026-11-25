<?php

declare(strict_types=1);

namespace SendGridSDK\Requests\V3\Mail\Send\Post\PersonalizationsItem;

/**
 * A collection property names that will be substituted by their corresponding property values in the `subject`, `reply-to` and `content` portions of a SendGrid Dynamic Template. Dynamic template data is available in a template using [Handlebars](https://docs.sendgrid.com/for-developers/sending-email/using-handlebars) syntax. This property should be used in combination with a Dynamic Template, which can be identified by a `template_id` starting with `d-`. See [**How to Send an Email with Dynamic Templates**](https://docs.sendgrid.com/ui/sending-email/how-to-send-an-email-with-dynamic-templates) for more information.
 */
final class TemplateDataRequest extends \Dmorenof\SdkRuntime\DTO
{
}
