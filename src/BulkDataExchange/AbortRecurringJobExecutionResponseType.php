<?php

namespace Nogrod\eBaySDK\BulkDataExchange;

/**
 * Class representing AbortRecurringJobExecutionResponseType
 *
 * Type defining the root container of the <b>abortRecurringJobExecution</b> response. The response includes the standard output fields like <b>ack</b>, <b>timestamp</b>, <b>version</b>, and any errors/warnings that are generated by the request to abort the next scheduled recurring job. The <b>ack</b> values of 'Success' or 'Failure' will indicate whether or not the next scheduled recurring job was successfully aborted.
 *  <br><br>
 *  To remove a recurring job completely, use <b>deleteRecurringJob</b>. Use
 *  <b>getRecurringJobExecutionStatus</b> to see the last completed instance of a recurring job.
 * XSD Type: AbortRecurringJobExecutionResponse
 */
class AbortRecurringJobExecutionResponseType extends BaseServiceResponseType
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
