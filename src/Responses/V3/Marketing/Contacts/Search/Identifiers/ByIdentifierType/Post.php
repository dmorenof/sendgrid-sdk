<?php

declare(strict_types=1);

namespace SendGridSDK\Responses\V3\Marketing\Contacts\Search\Identifiers\ByIdentifierType;

/**
 * An object containing the contacts that match the searched identifier values.
 * Example: {"result":{"jane_doe&#64;example.com":{"contact":{"address_line_1":"","address_line_2":"","alternate_emails":["janedoe&#64;example1.com"],"city":"","country":"","email":"jane_doe&#64;example.com","phone_number_id":"+14152279968","external_id":"extid_1709597080488434000_1_1","anonymous_id":"anonid_1709597080488436000_1_1","first_name":"Jane","id":"asdf-Jkl-zxCvBNm","last_name":"Doe","list_ids":[],"segment_ids":[],"postal_code":"","state_province_region":"","phone_number":"","whatsapp":"","line":"","facebook":"","unique_name":"","custom_fields":[],"created_at":"2021-03-02T15:25:47Z","updated_at":"2021-03-30T15:26:16Z","_metadata":{"self":"<metadata_url>"}}}}}
 */
final class Post extends \Dmorenof\SdkRuntime\DTO
{
    public \SendGridSDK\Responses\V3\Marketing\Contacts\Search\Identifiers\ByIdentifierType\Post\ResultMapResponse $result;
}
