<?php

namespace Nogrod\eBaySDK\BulkDataExchange;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing GetRecurringJobExecutionHistoryResponseType
 *
 * Type defining the root container of the <b>getRecurringJobExecutionHistory</b> response. The response includes one or more <b>jobProfile</b> containers, and each container consists of unique identifiers for the recurring job, as well as data that indicates the current status of the recurring job. The response also includes the standard output fields like <b>ack</b>, <b>timestamp</b>, <b>version</b>, and any errors/warnings that are generated by the request to retrieve a specific recurring job.
 * XSD Type: GetRecurringJobExecutionHistoryResponse
 */
class GetRecurringJobExecutionHistoryResponseType extends BaseServiceResponseType
{

    /**
     * A <b>jobProfile</b> container is returned for each successfully retrieved recurring job. The <b>jobProfile</b> container consists of unique identifiers for the recurring job, as well as data that indicates the current status of the recurring job.
     *  <br><br>
     *  The job profile returns data about the state of the Bulk Data Exchange job,
     *  but does not return information about the status of the processing for any
     *  data file that is sent with the job request or returned with the job
     *  response.
     *
     * @var \Nogrod\eBaySDK\BulkDataExchange\JobProfileType[] $jobProfile
     */
    private $jobProfile = [
        
    ];

    /**
     * Adds as jobProfile
     *
     * A <b>jobProfile</b> container is returned for each successfully retrieved recurring job. The <b>jobProfile</b> container consists of unique identifiers for the recurring job, as well as data that indicates the current status of the recurring job.
     *  <br><br>
     *  The job profile returns data about the state of the Bulk Data Exchange job,
     *  but does not return information about the status of the processing for any
     *  data file that is sent with the job request or returned with the job
     *  response.
     *
     * @return self
     * @param \Nogrod\eBaySDK\BulkDataExchange\JobProfileType $jobProfile
     */
    public function addToJobProfile(\Nogrod\eBaySDK\BulkDataExchange\JobProfileType $jobProfile)
    {
        $this->jobProfile[] = $jobProfile;
        return $this;
    }

    /**
     * isset jobProfile
     *
     * A <b>jobProfile</b> container is returned for each successfully retrieved recurring job. The <b>jobProfile</b> container consists of unique identifiers for the recurring job, as well as data that indicates the current status of the recurring job.
     *  <br><br>
     *  The job profile returns data about the state of the Bulk Data Exchange job,
     *  but does not return information about the status of the processing for any
     *  data file that is sent with the job request or returned with the job
     *  response.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetJobProfile($index)
    {
        return isset($this->jobProfile[$index]);
    }

    /**
     * unset jobProfile
     *
     * A <b>jobProfile</b> container is returned for each successfully retrieved recurring job. The <b>jobProfile</b> container consists of unique identifiers for the recurring job, as well as data that indicates the current status of the recurring job.
     *  <br><br>
     *  The job profile returns data about the state of the Bulk Data Exchange job,
     *  but does not return information about the status of the processing for any
     *  data file that is sent with the job request or returned with the job
     *  response.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetJobProfile($index)
    {
        unset($this->jobProfile[$index]);
    }

    /**
     * Gets as jobProfile
     *
     * A <b>jobProfile</b> container is returned for each successfully retrieved recurring job. The <b>jobProfile</b> container consists of unique identifiers for the recurring job, as well as data that indicates the current status of the recurring job.
     *  <br><br>
     *  The job profile returns data about the state of the Bulk Data Exchange job,
     *  but does not return information about the status of the processing for any
     *  data file that is sent with the job request or returned with the job
     *  response.
     *
     * @return \Nogrod\eBaySDK\BulkDataExchange\JobProfileType[]
     */
    public function getJobProfile()
    {
        return $this->jobProfile;
    }

    /**
     * Sets a new jobProfile
     *
     * A <b>jobProfile</b> container is returned for each successfully retrieved recurring job. The <b>jobProfile</b> container consists of unique identifiers for the recurring job, as well as data that indicates the current status of the recurring job.
     *  <br><br>
     *  The job profile returns data about the state of the Bulk Data Exchange job,
     *  but does not return information about the status of the processing for any
     *  data file that is sent with the job request or returned with the job
     *  response.
     *
     * @param \Nogrod\eBaySDK\BulkDataExchange\JobProfileType[] $jobProfile
     * @return self
     */
    public function setJobProfile(array $jobProfile)
    {
        $this->jobProfile = $jobProfile;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        parent::xmlSerialize($writer);
        $value = $this->getJobProfile();
        if (null !== $value && !empty($this->getJobProfile())) {
            $writer->write(array_map(function ($v) {
                return ["jobProfile" => $v];
            }, $value));
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
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/services}jobProfile', true);
        if (null !== $value && !empty($value)) {
            $this->setJobProfile(array_map(function ($v) {
                return \Nogrod\eBaySDK\BulkDataExchange\JobProfileType::fromKeyValue($v);
            }, $value));
        }
    }
}
