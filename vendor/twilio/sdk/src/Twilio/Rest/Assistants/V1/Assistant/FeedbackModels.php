<?php
/**
 * This code was generated by
 * ___ _ _ _ _ _    _ ____    ____ ____ _    ____ ____ _  _ ____ ____ ____ ___ __   __
 *  |  | | | | |    | |  | __ |  | |__| | __ | __ |___ |\ | |___ |__/ |__|  | |  | |__/
 *  |  |_|_| | |___ | |__|    |__| |  | |    |__] |___ | \| |___ |  \ |  |  | |__| |  \
 *
 * Twilio - Assistants
 * This is the public Twilio REST API.
 *
 * NOTE: This class is auto generated by OpenAPI Generator.
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Twilio\Rest\Assistants\V1\Assistant;

use Twilio\Values;
abstract class FeedbackModels
{
    /**
     * @property string $messageId The message ID.
     * @property string $score The score to be given(0-1).
     * @property string $sessionId The Session ID.
     * @property string $text The text to be given as feedback.
    */
    public static function createAssistantsV1ServiceCreateFeedbackRequest(array $payload = []): AssistantsV1ServiceCreateFeedbackRequest
    {
        return new AssistantsV1ServiceCreateFeedbackRequest($payload);
    }

}

class AssistantsV1ServiceCreateFeedbackRequest implements \JsonSerializable
{
    /**
     * @property string $messageId The message ID.
     * @property string $score The score to be given(0-1).
     * @property string $sessionId The Session ID.
     * @property string $text The text to be given as feedback.
    */
        protected $messageId;
        protected $score;
        protected $sessionId;
        protected $text;
    public function __construct(array $payload = []) {
        $this->messageId = Values::array_get($payload, 'message_id');
        $this->score = Values::array_get($payload, 'score');
        $this->sessionId = Values::array_get($payload, 'session_id');
        $this->text = Values::array_get($payload, 'text');
    }

    public function toArray(): array
    {
        return $this->jsonSerialize();
    }

    public function jsonSerialize(): array
    {
        return [
            'message_id' => $this->messageId,
            'score' => $this->score,
            'session_id' => $this->sessionId,
            'text' => $this->text
        ];
    }
}

