<?php

namespace Nogrod\eBaySDK\BulkDataExchange;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing StartDownloadJobResponseType
 *
 * Type defining the root container of the <b>startDownloadJob</b> response. The response includes the <b>jobId</b> field and the standard output fields like <b>ack</b>, <b>timestamp</b>, <b>version</b>, and any errors/warnings that are generated by the request to start the job.
 * XSD Type: StartDownloadJobResponse
 */
class StartDownloadJobResponseType extends BaseServiceResponseType
{

    /**
     * Unique ID that is assigned for a job by the Bulk Data Exchange API
     *  after a successful <b>startDownloadJob</ b> call. This value is passed into the File Transfer API's <b>downloadJob</b> call.
     *
     * @var string $jobId
     */
    private $jobId = null;

    /**
     * Gets as jobId
     *
     * Unique ID that is assigned for a job by the Bulk Data Exchange API
     *  after a successful <b>startDownloadJob</ b> call. This value is passed into the File Transfer API's <b>downloadJob</b> call.
     *
     * @return string
     */
    public function getJobId()
    {
        return $this->jobId;
    }

    /**
     * Sets a new jobId
     *
     * Unique ID that is assigned for a job by the Bulk Data Exchange API
     *  after a successful <b>startDownloadJob</ b> call. This value is passed into the File Transfer API's <b>downloadJob</b> call.
     *
     * @param string $jobId
     * @return self
     */
    public function setJobId($jobId)
    {
        $this->jobId = $jobId;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        parent::xmlSerialize($writer);
        $value = $this->getJobId();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/services}jobId", $value);
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
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/services}jobId');
        if (null !== $value) {
            $this->setJobId($value);
        }
    }
}
