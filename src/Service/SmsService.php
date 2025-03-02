<?php
namespace App\Service;

use Twilio\Rest\Client;
use Twilio\Http\CurlClient;

class SmsService
{
    private $twilioClient;
    private $twilioPhoneNumber;

    public function __construct(string $accountSid, string $authToken, string $phoneNumber)
    {
        // Désactiver temporairement la vérification SSL (à éviter en production)
        $httpClient = new CurlClient([
            CURLOPT_SSL_VERIFYPEER => false,
            CURLOPT_SSL_VERIFYHOST => false
        ]);

        // Initialiser le client Twilio avec le client HTTP personnalisé
        $this->twilioClient = new Client($accountSid, $authToken, null, null, $httpClient);
        $this->twilioPhoneNumber = $phoneNumber;
    }

    public function sendSms(string $to, string $message): void
    {
        $this->twilioClient->messages->create(
            $to,
            [
                'from' => $this->twilioPhoneNumber,
                'body' => $message
            ]
        );
    }
}