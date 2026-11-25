<?php

declare(strict_types=1);

namespace SendGridSDK\Responses\V3\Marketing\Contacts\Search\Emails\Post;

final class ResultMapResponse extends \Dmorenof\SdkRuntime\Map
{
    protected const string VALUE_TYPE = 'mixed';
    protected const bool VALUE_NULLABLE = false;
    protected const array MAP_VALIDATION = [
        'jsonSchema' => '{"type":"object","patternProperties":{"^[A-Za-z0-9\\\\._%\\\\+-]+@[A-Za-z0-9\\\\.-]+\\\\.[A-Za-z]{2,6}$":{"type":"object","properties":{"contact":{"type":"object","properties":{"id":{"type":"string"},"first_name":{"type":"string"},"last_name":{"type":"string"},"unique_name":{"type":"string"},"email":{"type":"string"},"phone_number_id":{"type":"string"},"external_id":{"type":"string"},"anonymous_id":{"type":"string"},"alternate_emails":{"type":"array","items":{"type":"string"}},"address_line_1":{"type":"string"},"address_line_2":{"type":"string"},"city":{"type":"string"},"state_province_region":{"type":"string"},"country":{"type":"string"},"postal_code":{"type":"string"},"phone_number":{"type":"string"},"whatsapp":{"type":"string"},"line":{"type":"string"},"facebook":{"type":"string"},"list_ids":{"type":"array","items":{"type":"string"}},"segment_ids":{"type":"array","items":{"type":"string"}},"custom_fields":{"type":"object"},"created_at":{"type":"string"},"updated_at":{"type":"string"},"_metadata":{"type":"object","properties":{"self":{"type":"string"}}}},"required":["id","list_ids","segment_ids","created_at","updated_at"]},"error":{"type":"string"}}}}}',
    ];
}
