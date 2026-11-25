<?php

declare(strict_types=1);

namespace SendGridSDK\Responses\V3\Contactdb\Recipients\Search\Post\RecipientsItem\CustomFieldsItem;

final class FieldsItemValueResponse extends \Dmorenof\SdkRuntime\AnyOf
{
    protected const array TYPES = ['int', 'string'];
    protected const array BRANCH_SCHEMAS = [
        [
            'kind' => 'integer',
        ],
        [
            'kind' => 'string',
        ],
    ];
    protected const array SCHEMA_DEFINITIONS = [];
}
