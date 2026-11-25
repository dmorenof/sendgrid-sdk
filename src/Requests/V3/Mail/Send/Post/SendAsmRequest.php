<?php

declare(strict_types=1);

namespace SendGridSDK\Requests\V3\Mail\Send\Post;

/**
 * An object allowing you to specify how to handle unsubscribes. With SendGrid, an unsubscribe is the action an email recipient takes when they opt-out of receiving your messages. A suppression is the action you take as a sender to filter or suppress an unsubscribed address from your email send. From the perspective of the recipient, your suppression is the result of their unsubscribe. See [**Suppression Groups**](https://www.twilio.com/docs/sendgrid/api-reference/suppressions-unsubscribe-groups/create-a-new-suppression-group) for more information.
 */
final class SendAsmRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'group_id',
    ];

    protected const array VALIDATION = [
        'groups_to_display' => [
            'maxItems' => 25,
        ],
    ];

    /**
     * The unsubscribe group to associate with this email. See the [Suppressions API](https://docs.sendgrid.com/api-reference/suppressions/) to manage unsubscribe group IDs.
     */
    public int $group_id;
    /**
     * An array containing the unsubscribe groups that you would like to be displayed to a recipient on the unsubscribe preferences page. This page is displayed in the recipient's browser when they click the unsubscribe link in your message.
     */
    public \SendGridSDK\Collections\IntegerCollection $groups_to_display {
        set {
            $this->assigning('groups_to_display', $value);
            $this->groups_to_display = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'group_id' => is_int($value) ? $this->group_id = $value : parent::assignMember($name, $value),
            'groups_to_display' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_int($item)) ? $this->groups_to_display = new \SendGridSDK\Collections\IntegerCollection($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
