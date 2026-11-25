<?php

declare(strict_types=1);

namespace SendGridSDK\Responses\V3\Messages\ByMsgId;

/**
 * Message
 * Example: {"from_email":"test&#64;test.com","msg_id":"in aliquip id aliqua","subject":"est incididunt adipisicing pariatur","to_email":"send&#64;test.com","status":"not_delivered","template_id":"123e4567-e89b-12d3-a456-426655440000","asm_group_id":11376349,"teammate":"","api_key_id":"sdfsdfsdf123","originating_ip":"2.3.4.5","events":[{"event_name":"bounced","processed":"2017-10-13T18:56:21Z","url":"http://3LX,MU}N=B8'd,K}>bEma{l~!ad%peIF}y>qHfLPWQ$l9b\\!6.1H?$Z9H\"il-_gZD>/JPYsGqH4x4_3v090TCtnFalXGFiAdooDxgrDAYNXShUywSxwYr8gKeyc/4sal4VJ3IxEWsG74V5MYQ0mz27jhy7n5DHsUtApQ6zXHS13uO5vYBlJHpJRfuT6/F5nIpkHre2w3eTtN7M6pg9V5stjnnsavKkzQxyTv15CMSDLFwR_BTZwofhWpyBU7B9ypYL79vT97N3LDZyoaM/fNsOLPIqfGBer_Mx9_StergbQYANyOmOSjR6pZof01ky/ZcNDhpu3CkSl4MTtQ3NMCX780pOKQ5SYIPigyvz9IC9WtrCNcOkTxdOPdY0_4MJU4EuTTPmGvO/14KaJCDjIjgrbIqpzuUEL5mET0t2VeVlwvtnOnlHaBE8sic20ze2E0Xt3ETqXyzVJRjLDKh/LWkW8OVp_xkLBCCW7LQngRukKcOiWjMXeCEhYI9HoZ0RsMEWZC8KzRaHc4OI0uXPD4M9pav1LGrI/_0t_RnBnfnqGKsBJr0kdQi/Y6QN_aeawIqX5hDNIU3MF/wWKVWLS0ZFbDfK6KVv5oAid83EpwKoazAMA8MTfEXvHQLO7k7XYWX1Il3eGXL6/wCA96I1SOabzJkZHo2HsFpIC/VBk52Lnpp0xtDH/OCdlQ5e4PpxXQeklp70LPOndr7QKSYEQNUc48n36ixvTjhgpgO8wHsFFYqGcuBMHg9oaCARppQomiQDWYuVPVDynJHdsM1_gWl4/NSs8Y9PL7DrQXOu0UiFRRE0TUsvgqyUgJzlGjUnRziyYeROO75D0K_3aTtbGbCmhaxecos40a1w0PDCNkFp1W/iHwY7922drhsoM6ShwqqwGpAh5HLuU6Q5gqyckeai6YN7HCh9DdHPhhJcatgtMHZDKfQUBVt9ecUlDgiCFF_OnRX/GpzttcsL8E2FoXL9_eAWvSqjodROqx7MZCA/ORdnR/IssPCYP1kTHTIL5mZxv4UGEpyNjUzt4GdSJJTm0nztltWDYX8_Ezl2JvpLVnGVTJxobb4yQIJhe3n64khbOFyFLKHWEniIolm/AxpZQYmseWlVqrIz3YXU59XaSbTTrdCHNhvwF1ogXiiggN6TZ2B3QY_mBEtAp/SD0ONPVqEUkTNAFWTgnnlv6ZIMdMbTw5uZwtFRlB7qDvQouml9kujGmRu6k7zZMTOwWowRNtpboLUcL2NzkVgK6N1Zi2vq/Nt4NJvM5_l1dpIIbwJv_CIcZQZOqPtRWULa2iVxfmJJQaqgLQPwSHQH1zuRJMhraEsPjqVQRC0pZpSt/24VBDN8y31Ye/y_ekWxMdZCvr978C/WrdcTi29kxjJLyT9BII7BsgT5vLuI2l7ntqRAhAUWMs/h9JR0i8RbX5OfB46q41/TfmSdgi97bCR2HfgflyypXwKhRfKYU2MVpu2Dd90WQUlm7hZV8dSfGusuMj/nPMpRVWcbnvlAdsehJCPbLv6n4qdLSPeoMBo32acAGgu1BwBG8JsBgbH43yYi5X7UdGRWKqm_ZbqaDEKH3ncU/uA8EOJb41VfGho4LUeOi1IeYwVAhFEyO6YbteYZecEubrNFZrWWjZUqhzouzY95TeWU8E4StCXVPKlYPiFiwUSX20kG0lVtDbAy/7u4f4x0cYlFOvI1UN1qoOExmNxnxzQQFeM5exWfW2JrRXq5e0UdAJr4q2o9Y_0WaGfhL/nP6Ei06YajDKr11dK5H0LX/9CGTC37HFZeopyopzP_7fvGFkqIRoGTS48pLaIFz3gwpQNlWXUFCsd/PnRlsqJ3SBQSgp_AQe2cP6iBNy2bJI8lkxwY5YVDDdjxusuCcafdjfs2aUa/4tr_iMnNBnd27GxjQI28_JGJlfbOaajVJOxuPMT4ELpYCfPiFjdSbJyE0/gCwtj0rgDKSLWJnOPJ5TAJ935gCqeIsBhOhfcZX413GdilBZRRYEjCVKfOuWzHZ3GW/8yjyk5e_WMNv5F6xggl07w90DBwpx/Q/iWfncqMuSfoeFeqHQkDL9F5W19j1cGuAcyfIYMAXztHXpgTKh9vZcsLYC7LcgKr4FQj3JjEvtnDG2PjcMjGF/MnbCRCz22Ho410_vE9M1Hpq0wdk_i5DbZKNoSwlPgey9URkpuX146TcDdsx_VWDenCepY5HwMr9CPOY9hzUs/c5AWeUMXk/gvsI81Jkv5rHpEnNBUZXYzfqkwQfffhmrc/StLCtzRRlja8dpsEWdkzoKR9Kdxq1qAs5f0sdrGjVRLTT_s1Q2P59zhA/QmS4bubi64cYot3gSIgdNnkjA2GjCp1ETVa548_U9B6boTKDVmaKJlVIDvqL84RC3WI7Er/8opi2lZ48W83Ur47BRh38oOnI0agrCyZz8bp1w_gfVRlSO8PS0i/l_/qxq5xpLbhPkdxVoyZVsNAZchfnmkIHyIk5IK6EUDXdMR21y6OvKW50ZbooAtk9ymynBj4dAYMsd25RV7FE1I1vRTsiDw52/.E5WC0Ymo2zn.qelSbhzr-4laArYiWP.dwJB6qm_6rs0Rm5UXYaYtUNbh76_jJp_X1xQUCDSgbr2KOkDU0\"Q/-4dV\"Yk3QGg[(O86=Pf\"e17K4'r{)kicofHSXcMmP&#64;>VF^`~4j4F*L/1]tD+Lw!WI!&#64;]*OZm6C`M$u96}*O<U;_cZ84k.|nIqpAaeiroItOenDBL","bounce_type":"hard","http_user_agent":"in tempor ex dolore est","mx_server":"quis proident","server_response":"some error message"}],"categories":["hi","bye"],"unique_args":"{'key': 'value'}","outbound_ip":"1.2.3.4","outbound_ip_type":"dedicated"}
 */
final class Get extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'api_key_id',
        'asm_group_id',
        'categories',
        'events',
        'originating_ip',
        'outbound_ip',
        'outbound_ip_type',
        'teammate',
        'template_id',
        'unique_args',
    ];

    protected const array VALIDATION = [
        'api_key_id' => [
            'minLength' => 3,
            'maxLength' => 50,
            'pattern' => '^[A-Za-z0-9]+',
        ],
        'asm_group_id' => [
            'minimum' => 1,
        ],
        'teammate' => [
            'minLength' => 0,
            'maxLength' => 64,
            'pattern' => '^$|^[A-Za-z0-9]+',
        ],
    ];

    /**
     * The ID of the API Key used to authenticate the sending request for the message.
     */
    public string $api_key_id {
        set {
            $this->assigning('api_key_id', $value);
            $this->api_key_id = $value;
        }
    }
    /**
     * The unsubscribe group associated with this email.
     */
    public int $asm_group_id {
        set {
            $this->assigning('asm_group_id', $value);
            $this->asm_group_id = $value;
        }
    }
    /**
     * Categories users associated to the message
     */
    public \SendGridSDK\Collections\StringCollection $categories;
    /**
     * List of events related to email message
     */
    public \SendGridSDK\Collections\V3\Messages\ByMsgId\Get\ByMsgIdEventsCollection $events;
    /**
     * The 'From' email address used to deliver the message. This address should be a verified sender in your Twilio SendGrid account.
     * Format: email
     */
    public string $from_email;
    /**
     * A unique ID assigned to the message. This ID can be used to retrieve activity data for the specific message.
     */
    public string $msg_id;
    /**
     * This is the IP of the user who sent the message.
     * Format: ipv4
     */
    public string $originating_ip;
    /**
     * IP used to send to the remote Mail Transfer Agent.
     * Format: ipv4
     */
    public string $outbound_ip;
    /**
     * Whether or not the outbound IP is dedicated vs shared
     */
    public \SendGridSDK\Enums\OutboundIp\Type $outbound_ip_type;
    /**
     * The message's status.
     */
    public \SendGridSDK\Enums\Email\ActivityStatus3 $status;
    /**
     * The email's subject line.
     */
    public string $subject;
    /**
     * Teammate's username
     */
    public string $teammate {
        set {
            $this->assigning('teammate', $value);
            $this->teammate = $value;
        }
    }
    /**
     * The ID associated with a Twilio SendGrid email template used to format the message.
     */
    public string $template_id;
    /**
     * The intended recipient's email address.
     * Format: email
     */
    public string $to_email;
    /**
     * JSON hash of key-value pairs associated with the message.
     */
    public string $unique_args;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'api_key_id' => is_string($value) ? $this->api_key_id = $value : parent::assignMember($name, $value),
            'asm_group_id' => is_int($value) ? $this->asm_group_id = $value : parent::assignMember($name, $value),
            'categories' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->categories = new \SendGridSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            'from_email' => is_string($value) ? $this->from_email = $value : parent::assignMember($name, $value),
            'msg_id' => is_string($value) ? $this->msg_id = $value : parent::assignMember($name, $value),
            'originating_ip' => is_string($value) ? $this->originating_ip = $value : parent::assignMember($name, $value),
            'outbound_ip' => is_string($value) ? $this->outbound_ip = $value : parent::assignMember($name, $value),
            'outbound_ip_type' => is_string($value) ? $this->outbound_ip_type = \SendGridSDK\Enums\OutboundIp\Type::from($value) : parent::assignMember($name, $value),
            'status' => is_string($value) ? $this->status = \SendGridSDK\Enums\Email\ActivityStatus3::from($value) : parent::assignMember($name, $value),
            'subject' => is_string($value) ? $this->subject = $value : parent::assignMember($name, $value),
            'teammate' => is_string($value) ? $this->teammate = $value : parent::assignMember($name, $value),
            'template_id' => is_string($value) ? $this->template_id = $value : parent::assignMember($name, $value),
            'to_email' => is_string($value) ? $this->to_email = $value : parent::assignMember($name, $value),
            'unique_args' => is_string($value) ? $this->unique_args = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
