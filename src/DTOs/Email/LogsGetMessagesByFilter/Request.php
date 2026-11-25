<?php

declare(strict_types=1);

namespace SendGridSDK\DTOs\Email\LogsGetMessagesByFilter;

final class Request extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'limit' => [
            'minimum' => 1,
            'maximum' => 1000,
        ],
        'subusers' => [
            'maxItems' => 1,
        ],
    ];

    /**
     * Number of messages to return (1–1000).
     */
    public int $limit {
        set {
            $this->assigning('limit', $value);
            $this->limit = $value;
        }
    }
    /**
     * **Allowed event fields, operators, and functions**
     *
     * - sg_message_id: `=`, `IN`
     * - subject: `=`, `LIKE`, `containsAll()`
     * - to_email: `=`, `LIKE`
     * - from_email: `=`, `LIKE`
     * - status: `IN`
     * - event: `IN`
     *   - accepted values: `bounce`, `click`, `deferred`, `delivered`, `dropped`, `open`, `processed`, `spamreport`, `group_unsubscribe`, `group_resubscribe`, `unsubscribe`
     * - reason: `=`, `LIKE`, `containsAll()`
     * - api_key_id: `=`
     *   - the ID of the API key used to send the message, not the key itself
     * - outbound_ip: `=`, `LIKE`
     * - categories: `IN`, `LIKE`, `LIKE ANY`
     * - sg_message_id_created_at: `>`, `<`, `>=`, `<=`
     *
     *
     * **Notes:**
     *
     * - multiple conditions (up to 160) can be combined with `AND`
     * - nesting is not allowed
     * - `IN` operator accepts a list of string values: `field IN ('value1', 'value2')`
     * - `status` and `event` accept only `IN`, even for a single value: `status IN ('delivered')`
     * - `sg_message_id` accepts `=` for a single ID or `IN` for multiple
     * - `LIKE` operator performs case-insensitive prefix search: `field LIKE 'prefix%'`
     * - the pattern must end with `%` and must have a non-empty prefix before `%`
     * - `LIKE ANY` operator performs case-insensitive prefix search against multiple patterns (max 5): `categories LIKE ANY ('prefix1%', 'prefix2%')`
     * - interior `%`, `_`, and `\` characters in patterns are treated as literals (escaped automatically)
     * - `containsAll` is a function: `containsAll(field, "keyword1 keyword2", "keyword3 keyword4", ..)`
     * - `containsAll` performs case-insensitive full-text keyword search and is only supported on `subject` and `reason`
     * - `containsAll` matches rows containing every given keyword, in any position, regardless of order
     * - each argument may hold one or more space-separated keywords; so `containsAll(subject, "invoice overdue")` and `containsAll(subject, "invoice", "overdue")` are acceptable
     * - `subject` and `reason` split keywords differently, so the same string can behave differently on each field:
     *   - on `subject`, every character that is not a letter or digit splits keywords, so `"5.2.2"` becomes the three keywords `5`, `2`, `2` and `"order_id"` becomes `order` and `id`
     *   - on `reason`, `.` and `_` do **not** split keywords, so `"5.2.2"` or `"order_id"` stays a single keyword. All other punctuation (spaces, `,`, `-`, `:`, `/`, `&#64;`, and similar) still splits keywords.
     *
     * Example: "sg_message_id_created_at > TIMESTAMP \"2025-01-01T00:00:00Z\" AND sg_message_id_created_at < TIMESTAMP \"2025-02-01T00:00:00Z\" AND status IN ('delivered', 'processed') AND categories IN ('newsletter', 'marketing')"
     */
    public string $query;
    /**
     * For requests authenticated as the parent account,
     * this argument must be passed if the desired messages belong to a subuser.
     * You can only call this endpoint for 1 subuser at a time.
     *
     * Example: ["20223230"]
     */
    public \SendGridSDK\Collections\StringCollection $subusers {
        set {
            $this->assigning('subusers', $value);
            $this->subusers = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'limit' => is_int($value) ? $this->limit = $value : parent::assignMember($name, $value),
            'query' => is_string($value) ? $this->query = $value : parent::assignMember($name, $value),
            'subusers' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->subusers = new \SendGridSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
