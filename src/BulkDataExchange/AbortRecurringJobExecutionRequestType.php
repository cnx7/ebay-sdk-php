<?php

namespace Nogrod\eBaySDK\BulkDataExchange;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing AbortRecurringJobExecutionRequestType
 *
 * Deletes the next instance of a recurring job. The recurring job will resume with
 *  subsequent job instance. Use <b>getRecurringJobExecutionHistory</b> and <b>getRecurringJobExecutionStatus</b> to identify any reporting
 *  gaps.
 * XSD Type: AbortRecurringJobExecutionRequest
 */
class AbortRecurringJobExecutionRequestType extends BaseServiceRequestType
{
    /**
     * Unique ID assigned by the Bulk Data Exchange API for managing your
     *  recurring job. The specified <b>recurringJobId</b> value will control which recurring job will be deleted in its next instance.
     *  <br/><br/>
     *  <b>recurringJobId</b> values are
     *  returned in <b>createRecurringJob</b> responses, and
     *  you can also use <b>getRecurringJobs</b> to
     *  retrieve <b>recurringJobId</b> values for any recurring jobs you have created.
     *
     * @var string $recurringJobId
     */
    private $recurringJobId = null;

    /**
     * Gets as recurringJobId
     *
     * Unique ID assigned by the Bulk Data Exchange API for managing your
     *  recurring job. The specified <b>recurringJobId</b> value will control which recurring job will be deleted in its next instance.
     *  <br/><br/>
     *  <b>recurringJobId</b> values are
     *  returned in <b>createRecurringJob</b> responses, and
     *  you can also use <b>getRecurringJobs</b> to
     *  retrieve <b>recurringJobId</b> values for any recurring jobs you have created.
     *
     * @return string
     */
    public function getRecurringJobId()
    {
        return $this->recurringJobId;
    }

    /**
     * Sets a new recurringJobId
     *
     * Unique ID assigned by the Bulk Data Exchange API for managing your
     *  recurring job. The specified <b>recurringJobId</b> value will control which recurring job will be deleted in its next instance.
     *  <br/><br/>
     *  <b>recurringJobId</b> values are
     *  returned in <b>createRecurringJob</b> responses, and
     *  you can also use <b>getRecurringJobs</b> to
     *  retrieve <b>recurringJobId</b> values for any recurring jobs you have created.
     *
     * @param string $recurringJobId
     * @return self
     */
    public function setRecurringJobId($recurringJobId)
    {
        $this->recurringJobId = $recurringJobId;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        parent::xmlSerialize($writer);
        $value = $this->getRecurringJobId();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/services}recurringJobId", $value);
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
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/services}recurringJobId');
        if (null !== $value) {
            $this->setRecurringJobId($value);
        }
    }
}
