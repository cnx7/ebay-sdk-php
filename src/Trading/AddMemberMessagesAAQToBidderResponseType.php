<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing AddMemberMessagesAAQToBidderResponseType
 *
 * Type defining the <b>AddMemberMessagesAAQToBidderResponseContainer</b> container, which consists of the <b>Ack</b> field (indicating the result of the send message operation) and the <b>CorrelationID</b> field (used to track multiple send message operations performed in one call).
 * XSD Type: AddMemberMessagesAAQToBidderResponseType
 */
class AddMemberMessagesAAQToBidderResponseType extends AbstractResponseType
{

    /**
     * Container consisting of the <b>Ack</b> field (indicating the result of the send message operation) and the <b>CorrelationID</b> field (used to track multiple send message operations performed in one call).
     *
     * @var \Nogrod\eBaySDK\Trading\AddMemberMessagesAAQToBidderResponseContainerType[] $addMemberMessagesAAQToBidderResponseContainer
     */
    private $addMemberMessagesAAQToBidderResponseContainer = [
        
    ];

    /**
     * Adds as addMemberMessagesAAQToBidderResponseContainer
     *
     * Container consisting of the <b>Ack</b> field (indicating the result of the send message operation) and the <b>CorrelationID</b> field (used to track multiple send message operations performed in one call).
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\AddMemberMessagesAAQToBidderResponseContainerType $addMemberMessagesAAQToBidderResponseContainer
     */
    public function addToAddMemberMessagesAAQToBidderResponseContainer(\Nogrod\eBaySDK\Trading\AddMemberMessagesAAQToBidderResponseContainerType $addMemberMessagesAAQToBidderResponseContainer)
    {
        $this->addMemberMessagesAAQToBidderResponseContainer[] = $addMemberMessagesAAQToBidderResponseContainer;
        return $this;
    }

    /**
     * isset addMemberMessagesAAQToBidderResponseContainer
     *
     * Container consisting of the <b>Ack</b> field (indicating the result of the send message operation) and the <b>CorrelationID</b> field (used to track multiple send message operations performed in one call).
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAddMemberMessagesAAQToBidderResponseContainer($index)
    {
        return isset($this->addMemberMessagesAAQToBidderResponseContainer[$index]);
    }

    /**
     * unset addMemberMessagesAAQToBidderResponseContainer
     *
     * Container consisting of the <b>Ack</b> field (indicating the result of the send message operation) and the <b>CorrelationID</b> field (used to track multiple send message operations performed in one call).
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAddMemberMessagesAAQToBidderResponseContainer($index)
    {
        unset($this->addMemberMessagesAAQToBidderResponseContainer[$index]);
    }

    /**
     * Gets as addMemberMessagesAAQToBidderResponseContainer
     *
     * Container consisting of the <b>Ack</b> field (indicating the result of the send message operation) and the <b>CorrelationID</b> field (used to track multiple send message operations performed in one call).
     *
     * @return \Nogrod\eBaySDK\Trading\AddMemberMessagesAAQToBidderResponseContainerType[]
     */
    public function getAddMemberMessagesAAQToBidderResponseContainer()
    {
        return $this->addMemberMessagesAAQToBidderResponseContainer;
    }

    /**
     * Sets a new addMemberMessagesAAQToBidderResponseContainer
     *
     * Container consisting of the <b>Ack</b> field (indicating the result of the send message operation) and the <b>CorrelationID</b> field (used to track multiple send message operations performed in one call).
     *
     * @param \Nogrod\eBaySDK\Trading\AddMemberMessagesAAQToBidderResponseContainerType[] $addMemberMessagesAAQToBidderResponseContainer
     * @return self
     */
    public function setAddMemberMessagesAAQToBidderResponseContainer(array $addMemberMessagesAAQToBidderResponseContainer)
    {
        $this->addMemberMessagesAAQToBidderResponseContainer = $addMemberMessagesAAQToBidderResponseContainer;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        parent::xmlSerialize($writer);
        $value = $this->getAddMemberMessagesAAQToBidderResponseContainer();
        if (null !== $value && !empty($this->getAddMemberMessagesAAQToBidderResponseContainer())) {
            $writer->write(array_map(function ($v) {
                return ["AddMemberMessagesAAQToBidderResponseContainer" => $v];
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
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}AddMemberMessagesAAQToBidderResponseContainer', true);
        if (null !== $value && !empty($value)) {
            $this->setAddMemberMessagesAAQToBidderResponseContainer(array_map(function ($v) {
                return \Nogrod\eBaySDK\Trading\AddMemberMessagesAAQToBidderResponseContainerType::fromKeyValue($v);
            }, $value));
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
