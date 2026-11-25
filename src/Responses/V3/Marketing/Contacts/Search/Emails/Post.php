<?php

declare(strict_types=1);

namespace SendGridSDK\Responses\V3\Marketing\Contacts\Search\Emails;

/**
 * An object containing one or more of the email addresses matching the searched addresses in your contacts.
 * Example: {"result":{"jane_doe&#64;example.com":{"contact":{"address_line_1":"","address_line_2":"","alternate_emails":["janedoe&#64;example1.com"],"city":"","country":"","email":"jane_doe&#64;example.com","first_name":"Jane","id":"asdf-Jkl-zxCvBNm","last_name":"Doe","list_ids":[],"segment_ids":[],"postal_code":"","state_province_region":"","phone_number":"","whatsapp":"","line":"","facebook":"","unique_name":"","custom_fields":[],"created_at":"2021-03-02T15:25:47Z","updated_at":"2021-03-30T15:26:16Z","_metadata":{"self":"<metadata_url>"}}},"john_doe&#64;example.com":{"contact":{"address_line_1":"","address_line_2":"","alternate_emails":[],"city":"","country":"","email":"john_doe&#64;example.com","first_name":"Jane","id":"asdf-Jkl-qWeRTy","last_name":"Doe","list_ids":[],"segment_ids":[],"postal_code":"","state_province_region":"","phone_number":"","whatsapp":"","line":"","facebook":"","unique_name":"","custom_fields":[],"created_at":"2020-01-02T15:25:47Z","updated_at":"2020-12-20T15:26:16Z","_metadata":{"self":"<metadata_url>"}}},"joann_doe&#64;example.com":{"error":"contact not found"}}}
 */
final class Post extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'result' => [
            'jsonSchema' => '{"type":"object","patternProperties":{"^[A-Za-z0-9\\\\._%\\\\+-]+@[A-Za-z0-9\\\\.-]+\\\\.[A-Za-z]{2,6}$":{"type":"object","properties":{"contact":{"type":"object","properties":{"id":{"type":"string"},"first_name":{"type":"string"},"last_name":{"type":"string"},"unique_name":{"type":"string"},"email":{"type":"string"},"phone_number_id":{"type":"string"},"external_id":{"type":"string"},"anonymous_id":{"type":"string"},"alternate_emails":{"type":"array","items":{"type":"string"}},"address_line_1":{"type":"string"},"address_line_2":{"type":"string"},"city":{"type":"string"},"state_province_region":{"type":"string"},"country":{"type":"string"},"postal_code":{"type":"string"},"phone_number":{"type":"string"},"whatsapp":{"type":"string"},"line":{"type":"string"},"facebook":{"type":"string"},"list_ids":{"type":"array","items":{"type":"string"}},"segment_ids":{"type":"array","items":{"type":"string"}},"custom_fields":{"type":"object"},"created_at":{"type":"string"},"updated_at":{"type":"string"},"_metadata":{"type":"object","properties":{"self":{"type":"string"}}}},"required":["id","list_ids","segment_ids","created_at","updated_at"]},"error":{"type":"string"}}}}}',
        ],
    ];

    public \SendGridSDK\Responses\V3\Marketing\Contacts\Search\Emails\Post\ResultMapResponse $result {
        set {
            $this->assigning('result', $value);
            $this->result = $value;
        }
    }
}
