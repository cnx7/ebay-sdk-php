<?php

namespace Nogrod\eBaySDK\BulkDataExchange;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing RecurringJobDetailType
 *
 * Type defining the <b>recurringJobDetail</b> container that is returned for each recurring job defined for the seller. The <b>recurringJobDetail</b> container consists of a unique identifier for the recurring job, the current status of the recurring job ('Active' or 'Suspended), the frequency of the recurring job (daily, weekly, monthly), and the download job type.
 * XSD Type: RecurringJobDetail
 */
class RecurringJobDetailType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * The unique identifier of a recurring job that is assigned by the Bulk Data Exchange API after a successful <b>createRecurringJob</ b> call. This value is passed into the request of other recurring job calls of the File Transfer API.
     *
     * @var string $recurringJobId
     */
    private $recurringJobId = null;

    /**
     * This timestamp indicates the date and time that the Bulk Data Exchange job was created.
     *
     * @var \DateTime $creationTime
     */
    private $creationTime = null;

    /**
     * This field is only returned if an intraday frequency was set up for the recurring job. If an intraday frequency is set up for a recurring job, job instances will be executed according to the frequency (in minutes) set in the <b>frequencyInMinutes</b> field.
     *
     * @var int $frequencyInMinutes
     */
    private $frequencyInMinutes = null;

    /**
     * Specifies the report you want to download. Each Bulk Data Exchange
     *  job can only have one job type per job. For instance, if you are
     *  downloading a <b>SoldReport</b>, it will only have predefined <b>SoldReport</b>
     *  data within the file.
     *
     *  <br><br>
     *  <dl>
     *  <lh><b>Applicable values</b>:<br></lh>
     *
     *  <dt><b>ActiveInventoryReport</b></dt>
     *  <dd>A report that contains all of the active listings for a specific
     *  seller ID. The eBay servers read the credential information passed in by
     *  the seller's application to determine which seller's data to retrieve.
     *  </dd>
     *
     *  <dt><b>FeeSettlementReport</b></dt>
     *  <dd>A report that contains all of the fees that you have incurred
     *  as invoices are generated by the eBay servers. This report gives large
     *  merchants the ability to look at their fees for many listings in one file.
     *  </dd>
     *
     *  <dt><b>SoldReport</b></dt>
     *  <dd>Lists all items that have been sold by this seller (sold items
     *  that were submitted to the Large Merchant Service by the seller's
     *  application).
     *  <br><br>
     *  When an item is sold, the eBay application creates an 'order' for the
     *  seller. If only one item is sold, there is one order ID and one line item
     *  ID associated with the sale. However, if multiple items are sold as part
     *  of the same transaction, there is one order ID for the sale, and multiple
     *  line item IDs - one line item ID for each item sold.
     *  <br><br>
     *  Therefore, <b>SoldReport</b> returns the order IDs and line item IDs for
     *  every order associated with the seller who is making the request. Sellers
     *  use this information to make inventory updates and start order fulfillment.
     *  <br><br>
     *  When orders have been fulfilled, the seller will probably want to remove
     *  them from the list of all orders that comes back every time they receive a
     *  <b>SoldReport</b>. To do this, they can acknowledge each order that has been
     *  fulfilled (using order ID or line item ID) by uploading a list of the
     *  fulfilled order information using an <b>OrderAck</b> request.
     *  <br><br>
     *  After you upload a data file with an <b>OrderAck</b> request, the orders (or line
     *  items within an order) will no longer appear in <b>SoldReport</b>. After you
     *  send the first <b>OrderAck</b> call, future <b>SoldReport</b> responses will only
     *  contain unacknowledged orders and line items.
     *  </dd>
     *
     *  </dl>
     *
     * @var string $downloadJobType
     */
    private $downloadJobType = null;

    /**
     * The current state of a recurring Bulk Data Exchange job.
     *
     * @var string $jobStatus
     */
    private $jobStatus = null;

    /**
     * This container is only returned if a monthly recurrence was set up for the recurring job. If a recurring job is set up to run on a monthly basis, the day of month and the time of day is returned under the <b>monthlyRecurrence</b> container.
     *
     * @var \Nogrod\eBaySDK\BulkDataExchange\MonthlyRecurrenceType $monthlyRecurrence
     */
    private $monthlyRecurrence = null;

    /**
     * This container is only returned if a weekly recurrence was set up for the recurring job. If a recurring job is set up to run on a weekly basis, the day of week and the time of day is returned under the <b>weeklyRecurrence</b> container.
     *
     * @var \Nogrod\eBaySDK\BulkDataExchange\WeeklyRecurrenceType $weeklyRecurrence
     */
    private $weeklyRecurrence = null;

    /**
     * This container is only returned if a daily recurrence was set up for the recurring job. If a recurring job is set up to run on a daily basis, the time of day is returned under the <b>dailyRecurrence</b> container.
     *
     * @var \Nogrod\eBaySDK\BulkDataExchange\DailyRecurrenceType $dailyRecurrence
     */
    private $dailyRecurrence = null;

    /**
     * Gets as recurringJobId
     *
     * The unique identifier of a recurring job that is assigned by the Bulk Data Exchange API after a successful <b>createRecurringJob</ b> call. This value is passed into the request of other recurring job calls of the File Transfer API.
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
     * The unique identifier of a recurring job that is assigned by the Bulk Data Exchange API after a successful <b>createRecurringJob</ b> call. This value is passed into the request of other recurring job calls of the File Transfer API.
     *
     * @param string $recurringJobId
     * @return self
     */
    public function setRecurringJobId($recurringJobId)
    {
        $this->recurringJobId = $recurringJobId;
        return $this;
    }

    /**
     * Gets as creationTime
     *
     * This timestamp indicates the date and time that the Bulk Data Exchange job was created.
     *
     * @return \DateTime
     */
    public function getCreationTime()
    {
        return $this->creationTime;
    }

    /**
     * Sets a new creationTime
     *
     * This timestamp indicates the date and time that the Bulk Data Exchange job was created.
     *
     * @param \DateTime $creationTime
     * @return self
     */
    public function setCreationTime(\DateTime $creationTime)
    {
        $this->creationTime = $creationTime;
        return $this;
    }

    /**
     * Gets as frequencyInMinutes
     *
     * This field is only returned if an intraday frequency was set up for the recurring job. If an intraday frequency is set up for a recurring job, job instances will be executed according to the frequency (in minutes) set in the <b>frequencyInMinutes</b> field.
     *
     * @return int
     */
    public function getFrequencyInMinutes()
    {
        return $this->frequencyInMinutes;
    }

    /**
     * Sets a new frequencyInMinutes
     *
     * This field is only returned if an intraday frequency was set up for the recurring job. If an intraday frequency is set up for a recurring job, job instances will be executed according to the frequency (in minutes) set in the <b>frequencyInMinutes</b> field.
     *
     * @param int $frequencyInMinutes
     * @return self
     */
    public function setFrequencyInMinutes($frequencyInMinutes)
    {
        $this->frequencyInMinutes = $frequencyInMinutes;
        return $this;
    }

    /**
     * Gets as downloadJobType
     *
     * Specifies the report you want to download. Each Bulk Data Exchange
     *  job can only have one job type per job. For instance, if you are
     *  downloading a <b>SoldReport</b>, it will only have predefined <b>SoldReport</b>
     *  data within the file.
     *
     *  <br><br>
     *  <dl>
     *  <lh><b>Applicable values</b>:<br></lh>
     *
     *  <dt><b>ActiveInventoryReport</b></dt>
     *  <dd>A report that contains all of the active listings for a specific
     *  seller ID. The eBay servers read the credential information passed in by
     *  the seller's application to determine which seller's data to retrieve.
     *  </dd>
     *
     *  <dt><b>FeeSettlementReport</b></dt>
     *  <dd>A report that contains all of the fees that you have incurred
     *  as invoices are generated by the eBay servers. This report gives large
     *  merchants the ability to look at their fees for many listings in one file.
     *  </dd>
     *
     *  <dt><b>SoldReport</b></dt>
     *  <dd>Lists all items that have been sold by this seller (sold items
     *  that were submitted to the Large Merchant Service by the seller's
     *  application).
     *  <br><br>
     *  When an item is sold, the eBay application creates an 'order' for the
     *  seller. If only one item is sold, there is one order ID and one line item
     *  ID associated with the sale. However, if multiple items are sold as part
     *  of the same transaction, there is one order ID for the sale, and multiple
     *  line item IDs - one line item ID for each item sold.
     *  <br><br>
     *  Therefore, <b>SoldReport</b> returns the order IDs and line item IDs for
     *  every order associated with the seller who is making the request. Sellers
     *  use this information to make inventory updates and start order fulfillment.
     *  <br><br>
     *  When orders have been fulfilled, the seller will probably want to remove
     *  them from the list of all orders that comes back every time they receive a
     *  <b>SoldReport</b>. To do this, they can acknowledge each order that has been
     *  fulfilled (using order ID or line item ID) by uploading a list of the
     *  fulfilled order information using an <b>OrderAck</b> request.
     *  <br><br>
     *  After you upload a data file with an <b>OrderAck</b> request, the orders (or line
     *  items within an order) will no longer appear in <b>SoldReport</b>. After you
     *  send the first <b>OrderAck</b> call, future <b>SoldReport</b> responses will only
     *  contain unacknowledged orders and line items.
     *  </dd>
     *
     *  </dl>
     *
     * @return string
     */
    public function getDownloadJobType()
    {
        return $this->downloadJobType;
    }

    /**
     * Sets a new downloadJobType
     *
     * Specifies the report you want to download. Each Bulk Data Exchange
     *  job can only have one job type per job. For instance, if you are
     *  downloading a <b>SoldReport</b>, it will only have predefined <b>SoldReport</b>
     *  data within the file.
     *
     *  <br><br>
     *  <dl>
     *  <lh><b>Applicable values</b>:<br></lh>
     *
     *  <dt><b>ActiveInventoryReport</b></dt>
     *  <dd>A report that contains all of the active listings for a specific
     *  seller ID. The eBay servers read the credential information passed in by
     *  the seller's application to determine which seller's data to retrieve.
     *  </dd>
     *
     *  <dt><b>FeeSettlementReport</b></dt>
     *  <dd>A report that contains all of the fees that you have incurred
     *  as invoices are generated by the eBay servers. This report gives large
     *  merchants the ability to look at their fees for many listings in one file.
     *  </dd>
     *
     *  <dt><b>SoldReport</b></dt>
     *  <dd>Lists all items that have been sold by this seller (sold items
     *  that were submitted to the Large Merchant Service by the seller's
     *  application).
     *  <br><br>
     *  When an item is sold, the eBay application creates an 'order' for the
     *  seller. If only one item is sold, there is one order ID and one line item
     *  ID associated with the sale. However, if multiple items are sold as part
     *  of the same transaction, there is one order ID for the sale, and multiple
     *  line item IDs - one line item ID for each item sold.
     *  <br><br>
     *  Therefore, <b>SoldReport</b> returns the order IDs and line item IDs for
     *  every order associated with the seller who is making the request. Sellers
     *  use this information to make inventory updates and start order fulfillment.
     *  <br><br>
     *  When orders have been fulfilled, the seller will probably want to remove
     *  them from the list of all orders that comes back every time they receive a
     *  <b>SoldReport</b>. To do this, they can acknowledge each order that has been
     *  fulfilled (using order ID or line item ID) by uploading a list of the
     *  fulfilled order information using an <b>OrderAck</b> request.
     *  <br><br>
     *  After you upload a data file with an <b>OrderAck</b> request, the orders (or line
     *  items within an order) will no longer appear in <b>SoldReport</b>. After you
     *  send the first <b>OrderAck</b> call, future <b>SoldReport</b> responses will only
     *  contain unacknowledged orders and line items.
     *  </dd>
     *
     *  </dl>
     *
     * @param string $downloadJobType
     * @return self
     */
    public function setDownloadJobType($downloadJobType)
    {
        $this->downloadJobType = $downloadJobType;
        return $this;
    }

    /**
     * Gets as jobStatus
     *
     * The current state of a recurring Bulk Data Exchange job.
     *
     * @return string
     */
    public function getJobStatus()
    {
        return $this->jobStatus;
    }

    /**
     * Sets a new jobStatus
     *
     * The current state of a recurring Bulk Data Exchange job.
     *
     * @param string $jobStatus
     * @return self
     */
    public function setJobStatus($jobStatus)
    {
        $this->jobStatus = $jobStatus;
        return $this;
    }

    /**
     * Gets as monthlyRecurrence
     *
     * This container is only returned if a monthly recurrence was set up for the recurring job. If a recurring job is set up to run on a monthly basis, the day of month and the time of day is returned under the <b>monthlyRecurrence</b> container.
     *
     * @return \Nogrod\eBaySDK\BulkDataExchange\MonthlyRecurrenceType
     */
    public function getMonthlyRecurrence()
    {
        return $this->monthlyRecurrence;
    }

    /**
     * Sets a new monthlyRecurrence
     *
     * This container is only returned if a monthly recurrence was set up for the recurring job. If a recurring job is set up to run on a monthly basis, the day of month and the time of day is returned under the <b>monthlyRecurrence</b> container.
     *
     * @param \Nogrod\eBaySDK\BulkDataExchange\MonthlyRecurrenceType $monthlyRecurrence
     * @return self
     */
    public function setMonthlyRecurrence(\Nogrod\eBaySDK\BulkDataExchange\MonthlyRecurrenceType $monthlyRecurrence)
    {
        $this->monthlyRecurrence = $monthlyRecurrence;
        return $this;
    }

    /**
     * Gets as weeklyRecurrence
     *
     * This container is only returned if a weekly recurrence was set up for the recurring job. If a recurring job is set up to run on a weekly basis, the day of week and the time of day is returned under the <b>weeklyRecurrence</b> container.
     *
     * @return \Nogrod\eBaySDK\BulkDataExchange\WeeklyRecurrenceType
     */
    public function getWeeklyRecurrence()
    {
        return $this->weeklyRecurrence;
    }

    /**
     * Sets a new weeklyRecurrence
     *
     * This container is only returned if a weekly recurrence was set up for the recurring job. If a recurring job is set up to run on a weekly basis, the day of week and the time of day is returned under the <b>weeklyRecurrence</b> container.
     *
     * @param \Nogrod\eBaySDK\BulkDataExchange\WeeklyRecurrenceType $weeklyRecurrence
     * @return self
     */
    public function setWeeklyRecurrence(\Nogrod\eBaySDK\BulkDataExchange\WeeklyRecurrenceType $weeklyRecurrence)
    {
        $this->weeklyRecurrence = $weeklyRecurrence;
        return $this;
    }

    /**
     * Gets as dailyRecurrence
     *
     * This container is only returned if a daily recurrence was set up for the recurring job. If a recurring job is set up to run on a daily basis, the time of day is returned under the <b>dailyRecurrence</b> container.
     *
     * @return \Nogrod\eBaySDK\BulkDataExchange\DailyRecurrenceType
     */
    public function getDailyRecurrence()
    {
        return $this->dailyRecurrence;
    }

    /**
     * Sets a new dailyRecurrence
     *
     * This container is only returned if a daily recurrence was set up for the recurring job. If a recurring job is set up to run on a daily basis, the time of day is returned under the <b>dailyRecurrence</b> container.
     *
     * @param \Nogrod\eBaySDK\BulkDataExchange\DailyRecurrenceType $dailyRecurrence
     * @return self
     */
    public function setDailyRecurrence(\Nogrod\eBaySDK\BulkDataExchange\DailyRecurrenceType $dailyRecurrence)
    {
        $this->dailyRecurrence = $dailyRecurrence;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "http://www.ebay.com/marketplace/services");
        $value = $this->getRecurringJobId();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/services}recurringJobId", $value);
        }
        $value = $this->getCreationTime();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/services}creationTime", $value);
        }
        $value = $this->getFrequencyInMinutes();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/services}frequencyInMinutes", $value);
        }
        $value = $this->getDownloadJobType();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/services}downloadJobType", $value);
        }
        $value = $this->getJobStatus();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/services}jobStatus", $value);
        }
        $value = $this->getMonthlyRecurrence();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/services}monthlyRecurrence", $value);
        }
        $value = $this->getWeeklyRecurrence();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/services}weeklyRecurrence", $value);
        }
        $value = $this->getDailyRecurrence();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/services}dailyRecurrence", $value);
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
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/services}recurringJobId');
        if (null !== $value) {
            $this->setRecurringJobId($value);
        }
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/services}creationTime');
        if (null !== $value) {
            $this->setCreationTime(new \DateTime($value));
        }
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/services}frequencyInMinutes');
        if (null !== $value) {
            $this->setFrequencyInMinutes($value);
        }
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/services}downloadJobType');
        if (null !== $value) {
            $this->setDownloadJobType($value);
        }
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/services}jobStatus');
        if (null !== $value) {
            $this->setJobStatus($value);
        }
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/services}monthlyRecurrence');
        if (null !== $value) {
            $this->setMonthlyRecurrence(\Nogrod\eBaySDK\BulkDataExchange\MonthlyRecurrenceType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/services}weeklyRecurrence');
        if (null !== $value) {
            $this->setWeeklyRecurrence(\Nogrod\eBaySDK\BulkDataExchange\WeeklyRecurrenceType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/services}dailyRecurrence');
        if (null !== $value) {
            $this->setDailyRecurrence(\Nogrod\eBaySDK\BulkDataExchange\DailyRecurrenceType::fromKeyValue($value));
        }
    }
}
