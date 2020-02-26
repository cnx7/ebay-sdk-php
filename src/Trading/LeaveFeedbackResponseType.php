<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing LeaveFeedbackResponseType
 *
 * Base response for the <b>LeaveFeedback</b> call. The response includes a <b>FeedbackID</b> value, which is automatically generated by eBay if the caller is successfully at submitting the Feedback entry.
 * XSD Type: LeaveFeedbackResponseType
 */
class LeaveFeedbackResponseType extends AbstractResponseType
{

    /**
     * The unique identifier of the Feedback entry that has been submitted by the caller.
     *
     * @var string $feedbackID
     */
    private $feedbackID = null;

    /**
     * Gets as feedbackID
     *
     * The unique identifier of the Feedback entry that has been submitted by the caller.
     *
     * @return string
     */
    public function getFeedbackID()
    {
        return $this->feedbackID;
    }

    /**
     * Sets a new feedbackID
     *
     * The unique identifier of the Feedback entry that has been submitted by the caller.
     *
     * @param string $feedbackID
     * @return self
     */
    public function setFeedbackID($feedbackID)
    {
        $this->feedbackID = $feedbackID;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        parent::xmlSerialize($writer);
        $value = $this->getFeedbackID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}FeedbackID", $value);
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader)
    {
        return self::fromKeyValue($reader->parseInnerTree([]));
    }

    public static function fromKeyValue($keyValue)
    {
        $self = new self();
        $self->setKeyValue($keyValue);
        return $self;
    }

    public function setKeyValue($keyValue)
    {
        parent::setKeyValue($keyValue);
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}FeedbackID');
        if (null !== $value) {
            $this->setFeedbackID($value);
        }
    }

    public static function mapArray(array $array, string $name, bool $isArray = false)
    {
        $result = [];
        foreach ($array as $item) {
            if ($item['name'] !== $name) {
                continue;
            }
            if ($isArray) {
                $result[] = $item['value'];
            } else {
                return $item['value'];
            }
        }
        return $isArray ? $result : null;
    }
}
