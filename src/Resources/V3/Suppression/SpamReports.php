<?php

declare(strict_types=1);

namespace SendGridSDK\Resources\V3\Suppression;

final class SpamReports extends \SendGridSDK\Client
{
    private const array DELETE = [
        'method' => 'DELETE',
        'path' => '/v3/suppression/spam_reports',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'success' => [
            204,
        ],
        'requestBody' => [
            'type' => '\\SendGridSDK\\Requests\\V3\\Suppression\\SpamReports\\Delete',
            'nullable' => false,
            'required' => false,
            'rules' => [],
        ],
    ];

    /**
     * Delete spam reports
     *
     * **This endpoint allows you to delete your spam reports.**
     *
     * Deleting a spam report will remove the suppression, meaning email will once again be sent to the previously suppressed address. This should be avoided unless a recipient indicates they wish to receive email from you again. You can use our [bypass filters](https://sendgrid.com/docs/ui/sending-email/index-suppressions/#bypass-suppressions) to deliver messages to otherwise suppressed addresses when exceptions are required.
     *
     * There are two options for deleting spam reports:
     *
     * 1. You can delete all spam reports by setting the `delete_all` field to `true` in the request body.
     * 2. You can delete a list of select spam reports by specifying the email addresses in the `emails` array of the request body.
     */
    public function delete(?\SendGridSDK\DeleteParams\V3\Suppression\SpamReports $params = null): void
    {
        $this->executeArguments(self::operation(self::DELETE), parameters: $params);
        return;
    }

    private const array GET = [
        'method' => 'GET',
        'path' => '/v3/suppression/spam_reports',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'responseType' => '\\SendGridSDK\\Collections\\V3\\Suppression\\SpamReports\\Get\\SuppressionSpamReportsCollection',
    ];

    /**
     * Retrieve all spam reports
     *
     * **This endpoint allows you to retrieve a paginated list of all spam reports.**
     *
     * You can use the `limit` query parameter to set the page size. If your list contains more items than the page size permits, you can make multiple requests. Use the `offset` query parameter to control the position in the list from which to start retrieving additional items.
     */
    public function get(?\SendGridSDK\GetParams\V3\Suppression\SpamReports $params = null): \SendGridSDK\Collections\V3\Suppression\SpamReports\Get\SuppressionSpamReportsCollection
    {
        /** @var \SendGridSDK\Collections\V3\Suppression\SpamReports\Get\SuppressionSpamReportsCollection $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

    private const array DELETE_BY_EMAIL = [
        'method' => 'DELETE',
        'path' => '/v3/suppression/spam_reports/{email}',
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
     * Delete a specific spam report
     *
     * **This endpoint allows you to delete a specific spam report by email address.**
     *
     * Deleting a spam report will remove the suppression, meaning email will once again be sent to the previously suppressed address. This should be avoided unless a recipient indicates they wish to receive email from you again. You can use our [bypass filters](https://sendgrid.com/docs/ui/sending-email/index-suppressions/#bypass-suppressions) to deliver messages to otherwise suppressed addresses when exceptions are required.
     */
    public function deleteByEmail(string $email, ?\SendGridSDK\DeleteParams\V3\Suppression\SpamReports\ByEmail $params = null): void
    {
        $this->executeArguments(self::operation(self::DELETE_BY_EMAIL), path: ['email' => $email], parameters: $params);
        return;
    }

    private const array GET_BY_EMAIL = [
        'method' => 'GET',
        'path' => '/v3/suppression/spam_reports/{email}',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'responseType' => '\\SendGridSDK\\Collections\\V3\\Suppression\\SpamReports\\ByEmail\\Get\\SpamReportsByEmailCollection',
    ];

    /**
     * Retrieve a specific spam report
     *
     * **This endpoint allows you to retrieve a specific spam report by email address.**
     */
    public function getByEmail(string $email, ?\SendGridSDK\GetParams\V3\Suppression\SpamReports\ByEmail $params = null): \SendGridSDK\Collections\V3\Suppression\SpamReports\ByEmail\Get\SpamReportsByEmailCollection
    {
        /** @var \SendGridSDK\Collections\V3\Suppression\SpamReports\ByEmail\Get\SpamReportsByEmailCollection $result */
        $result = $this->executeArguments(self::operation(self::GET_BY_EMAIL), path: ['email' => $email], parameters: $params);
        return $result;
    }
}
