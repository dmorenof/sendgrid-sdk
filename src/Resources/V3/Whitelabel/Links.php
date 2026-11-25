<?php

declare(strict_types=1);

namespace SendGridSDK\Resources\V3\Whitelabel;

final class Links extends \SendGridSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/v3/whitelabel/links',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'responseType' => '\\SendGridSDK\\Collections\\V3\\Whitelabel\\Links\\Get\\WhitelabelLinksCollection',
    ];

    /**
     * Retrieve all branded links
     *
     * **This endpoint allows you to retrieve all branded links**.
     *
     * You can submit this request as one of your subusers if you include their ID in the `on-behalf-of` header in the request.
     */
    public function get(?\SendGridSDK\GetParams\V3\Whitelabel\Links $params = null): \SendGridSDK\Collections\V3\Whitelabel\Links\Get\WhitelabelLinksCollection
    {
        /** @var \SendGridSDK\Collections\V3\Whitelabel\Links\Get\WhitelabelLinksCollection $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

    private const array POST = [
        'method' => 'POST',
        'path' => '/v3/whitelabel/links',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'success' => [
            201,
        ],
        'responseType' => '\\SendGridSDK\\DTOs\\Link\\Branding200',
        'requestBody' => [
            'type' => '\\SendGridSDK\\Requests\\V3\\Whitelabel\\Links\\Post',
            'nullable' => false,
            'required' => false,
            'rules' => [],
        ],
    ];

    /**
     * Create a branded link
     *
     * **This endpoint allows you to create a new branded link.**
     *
     * To create the link branding, supply the root domain and, optionally, the subdomain — these go into separate fields in your request body. The root domain should match your FROM email address. If you provide a  subdomain, it must be different from the subdomain you used for authenticating your domain.
     *
     * You can submit this request as one of your subusers if you include their ID in the `on-behalf-of` header in the request.
     */
    public function post(?\SendGridSDK\PostParams\V3\Whitelabel\Links $params = null): \SendGridSDK\DTOs\Link\Branding200
    {
        /** @var \SendGridSDK\DTOs\Link\Branding200 $result */
        $result = $this->executeArguments(self::operation(self::POST), parameters: $params);
        return $result;
    }

    private const array DELETE_BY_ID = [
        'method' => 'DELETE',
        'path' => '/v3/whitelabel/links/{id}',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'success' => [
            204,
        ],
    ];

    /**
     * Delete a branded link
     *
     * **This endpoint allows you to delete a branded link.**
     *
     * Your request will receive a response with a 204 status code if the deletion was successful. The call does not return the link's details, so if you wish to record these make sure you call the  "Retrieve a branded link" endpoint *before* you request its deletion.
     *
     * You can submit this request as one of your subusers if you include their ID in the `on-behalf-of` header in the request.
     */
    public function deleteById(int $id, ?\SendGridSDK\DeleteParams\V3\Whitelabel\Links\ById $params = null): void
    {
        $this->executeArguments(self::operation(self::DELETE_BY_ID), path: ['id' => $id], parameters: $params);
        return;
    }

    private const array GET_BY_ID = [
        'method' => 'GET',
        'path' => '/v3/whitelabel/links/{id}',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'responseType' => '\\SendGridSDK\\DTOs\\Link\\Branding200',
    ];

    /**
     * Retrieve a branded link
     *
     * **This endpoint allows you to retrieve a specific branded link by providing its ID.**
     *
     * You can submit this request as one of your subusers if you include their ID in the `on-behalf-of` header in the request.
     */
    public function getById(int $id, ?\SendGridSDK\GetParams\V3\Whitelabel\Links\ById $params = null): \SendGridSDK\DTOs\Link\Branding200
    {
        /** @var \SendGridSDK\DTOs\Link\Branding200 $result */
        $result = $this->executeArguments(self::operation(self::GET_BY_ID), path: ['id' => $id], parameters: $params);
        return $result;
    }

    private const array PATCH_BY_ID = [
        'method' => 'PATCH',
        'path' => '/v3/whitelabel/links/{id}',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'responseType' => '\\SendGridSDK\\DTOs\\Link\\Branding200',
        'requestBody' => [
            'type' => '\\SendGridSDK\\Requests\\V3\\Whitelabel\\Links\\ById\\Patch',
            'nullable' => false,
            'required' => false,
            'rules' => [],
        ],
    ];

    /**
     * Update a branded link
     *
     * **This endpoint allows you to update a specific branded link. You can use this endpoint to change a branded link's default status.**
     *
     * You can submit this request as one of your subusers if you include their ID in the `on-behalf-of` header in the request.
     */
    public function patchById(int $id, ?\SendGridSDK\PatchParams\V3\Whitelabel\Links\ById $params = null): \SendGridSDK\DTOs\Link\Branding200
    {
        /** @var \SendGridSDK\DTOs\Link\Branding200 $result */
        $result = $this->executeArguments(self::operation(self::PATCH_BY_ID), path: ['id' => $id], parameters: $params);
        return $result;
    }
}
