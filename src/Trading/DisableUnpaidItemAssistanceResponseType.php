<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing DisableUnpaidItemAssistanceResponseType
 *
 * Response of the <b>DisableUnpaidItemAssistance</b> call, which includes only the standard response fields like <b>Ack</b>, <b>Timestamp</b>, <b>Errors</b>, etc.
 * XSD Type: DisableUnpaidItemAssistanceResponseType
 */
class DisableUnpaidItemAssistanceResponseType extends AbstractResponseType
{
    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        parent::xmlSerialize($writer);
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
