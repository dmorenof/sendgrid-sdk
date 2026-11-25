<?php

declare(strict_types=1);

namespace SendGridSDK\Resources\V3\Contactdb\Recipients;

final class Search extends \SendGridSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/v3/contactdb/recipients/search',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'errors' => [
            400 => '\\SendGridSDK\\DTOs\\LmcContactdb\\Error\\Response',
            401 => '\\SendGridSDK\\DTOs\\LmcContactdb\\Error\\Response',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\SendGridSDK\\DTOs\\LmcContactdb\\Error\\Response',
                'schemaNullable' => false,
            ],
            401 => [
                'type' => '\\SendGridSDK\\DTOs\\LmcContactdb\\Error\\Response',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\SendGridSDK\\Responses\\V3\\Contactdb\\Recipients\\Search\\Get',
    ];

    /**
     * Search recipients
     *
     * **This endpoint allows you to perform a search on all of your Marketing Campaigns recipients.**
     *
     * field_name:
     *
     * * is a variable that is substituted for your actual custom field name from your recipient.
     * * Text fields must be url-encoded. Date fields are searchable only by unix timestamp (e.g. 2/2/2015 becomes 1422835200)
     * * If field_name is a 'reserved' date field, such as created_at or updated_at, the system will internally convert
     * your epoch time to a date range encompassing the entire day. For example, an epoch time of 1422835600 converts to
     * Mon, 02 Feb 2015 00:06:40 GMT, but internally the system will search from Mon, 02 Feb 2015 00:00:00 GMT through
     * Mon, 02 Feb 2015 23:59:59 GMT.
     */
    public function get(?\SendGridSDK\GetParams\V3\Contactdb\Recipients\Search $params = null): \SendGridSDK\Responses\V3\Contactdb\Recipients\Search\Get
    {
        /** @var \SendGridSDK\Responses\V3\Contactdb\Recipients\Search\Get $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

    private const array POST = [
        'method' => 'POST',
        'path' => '/v3/contactdb/recipients/search',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'errors' => [
            400 => null,
        ],
        'errorResponses' => [
            400 => [
                'type' => null,
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\SendGridSDK\\Responses\\V3\\Contactdb\\Recipients\\Search\\Post',
        'requestBody' => [
            'type' => '\\SendGridSDK\\Requests\\V3\\Contactdb\\Recipients\\Search\\Post',
            'nullable' => false,
            'required' => false,
            'rules' => [],
        ],
    ];

    /**
     * Search recipients
     *
     * Search using segment conditions without actually creating a segment.
     * Body contains a JSON object with `conditions`, a list of conditions as described below, and an optional `list_id`, which is a valid list ID for a list to limit the search on.
     *
     * Valid operators for create and update depend on the type of the field for which you are searching.
     *
     * - Dates:
     *   - `"eq"`, `"ne"`, `"lt"` (before), `"gt"` (after)
     *     - You may use MM/DD/YYYY for day granularity or an epoch for second granularity.
     *   - `"empty"`, `"not_empty"`
     *   - `"is within"`
     *     - You may use an [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) date format or the # of days.
     * - Text: `"contains"`, `"eq"` (is - matches the full field), `"ne"` (is not - matches any field where the entire field is not the condition value), `"empty"`, `"not_empty"`
     * - Numbers: `"eq"`, `"lt"`, `"gt"`, `"empty"`, `"not_empty"`
     * - Email Clicks and Opens: `"eq"` (opened), `"ne"` (not opened)
     *
     * Field values must all be a string.
     *
     * Search conditions using `"eq"` or `"ne"` for email clicks and opens should provide a "field" of either `clicks.campaign_identifier` or `opens.campaign_identifier`.
     *
     * The condition value should be a string containing the id of a completed campaign.
     *
     * Search conditions list may contain multiple conditions, joined by an `"and"` or `"or"` in the `"and_or"` field.
     *
     * The first condition in the conditions list must have an empty `"and_or"`, and subsequent conditions must all specify an `"and_or"`.
     */
    public function post(?\SendGridSDK\Requests\V3\Contactdb\Recipients\Search\Post $payload = null): \SendGridSDK\Responses\V3\Contactdb\Recipients\Search\Post
    {
        /** @var \SendGridSDK\Responses\V3\Contactdb\Recipients\Search\Post $result */
        $result = func_num_args() > 0 ? $this->executeBody(self::operation(self::POST), $payload) : $this->executeArguments(self::operation(self::POST));
        return $result;
    }
}
