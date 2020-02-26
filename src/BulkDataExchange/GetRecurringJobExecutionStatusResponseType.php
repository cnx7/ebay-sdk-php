<?php

namespace Nogrod\eBaySDK\BulkDataExchange;

/**
 * Class representing GetRecurringJobExecutionStatusResponseType
 *
 * Type defining the root container of the <b>getRecurringJobExecutionStatus</b> response. The response includes one <b>jobProfile</b> container, and each container consists of unique identifiers for the recurring job, as well as data that indicates the current status of the recurring job. The response also includes the standard output fields like <b>ack</b>, <b>timestamp</b>, <b>version</b>, and any errors/warnings that are generated by the request to retrieve a specific recurring job.
 * XSD Type: GetRecurringJobExecutionStatusResponse
 */
class GetRecurringJobExecutionStatusResponseType extends BaseServiceResponseType
{

    /**
     * A <b>jobProfile</b> container is returned for a successfully retrieved recurring job. The <b>jobProfile</b> container consists of unique identifiers for the recurring job, as well as data that indicates the current status of the recurring job.
     *  <br><br>
     *  The job profile returns data about the state of the Bulk Data Exchange job,
     *  but does not return information about the status of the processing for any
     *  data file that is sent with the job request or returned with the job
     *  response.
     *
     * @var \Nogrod\eBaySDK\BulkDataExchange\JobProfileType $jobProfile
     */
    private $jobProfile = null;

    /**
     * Gets as jobProfile
     *
     * A <b>jobProfile</b> container is returned for a successfully retrieved recurring job. The <b>jobProfile</b> container consists of unique identifiers for the recurring job, as well as data that indicates the current status of the recurring job.
     *  <br><br>
     *  The job profile returns data about the state of the Bulk Data Exchange job,
     *  but does not return information about the status of the processing for any
     *  data file that is sent with the job request or returned with the job
     *  response.
     *
     * @return \Nogrod\eBaySDK\BulkDataExchange\JobProfileType
     */
    public function getJobProfile()
    {
        return $this->jobProfile;
    }

    /**
     * Sets a new jobProfile
     *
     * A <b>jobProfile</b> container is returned for a successfully retrieved recurring job. The <b>jobProfile</b> container consists of unique identifiers for the recurring job, as well as data that indicates the current status of the recurring job.
     *  <br><br>
     *  The job profile returns data about the state of the Bulk Data Exchange job,
     *  but does not return information about the status of the processing for any
     *  data file that is sent with the job request or returned with the job
     *  response.
     *
     * @param \Nogrod\eBaySDK\BulkDataExchange\JobProfileType $jobProfile
     * @return self
     */
    public function setJobProfile(\Nogrod\eBaySDK\BulkDataExchange\JobProfileType $jobProfile)
    {
        $this->jobProfile = $jobProfile;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        parent::xmlSerialize($writer);
        $value = $this->getJobProfile();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/services}jobProfile", $value);
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
        $value = self::mapArray($keyValue, '{http://www.ebay.com/marketplace/services}jobProfile');
        if (null !== $value) {
            $this->setJobProfile(\Nogrod\eBaySDK\BulkDataExchange\JobProfileType::fromKeyValue($value));
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
