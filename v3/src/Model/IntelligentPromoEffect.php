<?php
/**
 * IntelligentPromoEffect
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * 支付宝开放平台API
 *
 * 支付宝开放平台v3协议文档
 *
 * The version of the OpenAPI document: 2023-10-26
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.2.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Alipay\OpenAPISDK\Model;

use \ArrayAccess;
use \Alipay\OpenAPISDK\ObjectSerializer;

/**
 * IntelligentPromoEffect Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class IntelligentPromoEffect implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'IntelligentPromoEffect';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'avgPrizeIncrease' => 'string',
        'cost' => 'string',
        'currentTotalAmount' => 'string',
        'effectId' => 'string',
        'gmtFrom' => 'string',
        'gmtTo' => 'string',
        'gmv' => 'string',
        'remainStockNum' => 'int',
        'repayRateIncrease' => 'string',
        'sendCountIncrease' => 'string',
        'takeCount' => 'int',
        'type' => 'string',
        'useCount' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'avgPrizeIncrease' => null,
        'cost' => null,
        'currentTotalAmount' => null,
        'effectId' => null,
        'gmtFrom' => null,
        'gmtTo' => null,
        'gmv' => null,
        'remainStockNum' => null,
        'repayRateIncrease' => null,
        'sendCountIncrease' => null,
        'takeCount' => null,
        'type' => null,
        'useCount' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'avgPrizeIncrease' => 'avg_prize_increase',
        'cost' => 'cost',
        'currentTotalAmount' => 'current_total_amount',
        'effectId' => 'effect_id',
        'gmtFrom' => 'gmt_from',
        'gmtTo' => 'gmt_to',
        'gmv' => 'gmv',
        'remainStockNum' => 'remain_stock_num',
        'repayRateIncrease' => 'repay_rate_increase',
        'sendCountIncrease' => 'send_count_increase',
        'takeCount' => 'take_count',
        'type' => 'type',
        'useCount' => 'use_count'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'avgPrizeIncrease' => 'setAvgPrizeIncrease',
        'cost' => 'setCost',
        'currentTotalAmount' => 'setCurrentTotalAmount',
        'effectId' => 'setEffectId',
        'gmtFrom' => 'setGmtFrom',
        'gmtTo' => 'setGmtTo',
        'gmv' => 'setGmv',
        'remainStockNum' => 'setRemainStockNum',
        'repayRateIncrease' => 'setRepayRateIncrease',
        'sendCountIncrease' => 'setSendCountIncrease',
        'takeCount' => 'setTakeCount',
        'type' => 'setType',
        'useCount' => 'setUseCount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'avgPrizeIncrease' => 'getAvgPrizeIncrease',
        'cost' => 'getCost',
        'currentTotalAmount' => 'getCurrentTotalAmount',
        'effectId' => 'getEffectId',
        'gmtFrom' => 'getGmtFrom',
        'gmtTo' => 'getGmtTo',
        'gmv' => 'getGmv',
        'remainStockNum' => 'getRemainStockNum',
        'repayRateIncrease' => 'getRepayRateIncrease',
        'sendCountIncrease' => 'getSendCountIncrease',
        'takeCount' => 'getTakeCount',
        'type' => 'getType',
        'useCount' => 'getUseCount'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }


    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['avgPrizeIncrease'] = $data['avgPrizeIncrease'] ?? null;
        $this->container['cost'] = $data['cost'] ?? null;
        $this->container['currentTotalAmount'] = $data['currentTotalAmount'] ?? null;
        $this->container['effectId'] = $data['effectId'] ?? null;
        $this->container['gmtFrom'] = $data['gmtFrom'] ?? null;
        $this->container['gmtTo'] = $data['gmtTo'] ?? null;
        $this->container['gmv'] = $data['gmv'] ?? null;
        $this->container['remainStockNum'] = $data['remainStockNum'] ?? null;
        $this->container['repayRateIncrease'] = $data['repayRateIncrease'] ?? null;
        $this->container['sendCountIncrease'] = $data['sendCountIncrease'] ?? null;
        $this->container['takeCount'] = $data['takeCount'] ?? null;
        $this->container['type'] = $data['type'] ?? null;
        $this->container['useCount'] = $data['useCount'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets avgPrizeIncrease
     *
     * @return string|null
     */
    public function getAvgPrizeIncrease()
    {
        return $this->container['avgPrizeIncrease'];
    }

    /**
     * Sets avgPrizeIncrease
     *
     * @param string|null $avgPrizeIncrease 平均客单价提升比例
     *
     * @return self
     */
    public function setAvgPrizeIncrease($avgPrizeIncrease)
    {
        $this->container['avgPrizeIncrease'] = $avgPrizeIncrease;

        return $this;
    }

    /**
     * Gets cost
     *
     * @return string|null
     */
    public function getCost()
    {
        return $this->container['cost'];
    }

    /**
     * Sets cost
     *
     * @param string|null $cost 成本
     *
     * @return self
     */
    public function setCost($cost)
    {
        $this->container['cost'] = $cost;

        return $this;
    }

    /**
     * Gets currentTotalAmount
     *
     * @return string|null
     */
    public function getCurrentTotalAmount()
    {
        return $this->container['currentTotalAmount'];
    }

    /**
     * Sets currentTotalAmount
     *
     * @param string|null $currentTotalAmount 当前效益
     *
     * @return self
     */
    public function setCurrentTotalAmount($currentTotalAmount)
    {
        $this->container['currentTotalAmount'] = $currentTotalAmount;

        return $this;
    }

    /**
     * Gets effectId
     *
     * @return string|null
     */
    public function getEffectId()
    {
        return $this->container['effectId'];
    }

    /**
     * Sets effectId
     *
     * @param string|null $effectId 营销活动的预期效果id
     *
     * @return self
     */
    public function setEffectId($effectId)
    {
        $this->container['effectId'] = $effectId;

        return $this;
    }

    /**
     * Gets gmtFrom
     *
     * @return string|null
     */
    public function getGmtFrom()
    {
        return $this->container['gmtFrom'];
    }

    /**
     * Sets gmtFrom
     *
     * @param string|null $gmtFrom 时间范围左值
     *
     * @return self
     */
    public function setGmtFrom($gmtFrom)
    {
        $this->container['gmtFrom'] = $gmtFrom;

        return $this;
    }

    /**
     * Gets gmtTo
     *
     * @return string|null
     */
    public function getGmtTo()
    {
        return $this->container['gmtTo'];
    }

    /**
     * Sets gmtTo
     *
     * @param string|null $gmtTo 时间范围右值
     *
     * @return self
     */
    public function setGmtTo($gmtTo)
    {
        $this->container['gmtTo'] = $gmtTo;

        return $this;
    }

    /**
     * Gets gmv
     *
     * @return string|null
     */
    public function getGmv()
    {
        return $this->container['gmv'];
    }

    /**
     * Sets gmv
     *
     * @param string|null $gmv 成交额
     *
     * @return self
     */
    public function setGmv($gmv)
    {
        $this->container['gmv'] = $gmv;

        return $this;
    }

    /**
     * Gets remainStockNum
     *
     * @return int|null
     */
    public function getRemainStockNum()
    {
        return $this->container['remainStockNum'];
    }

    /**
     * Sets remainStockNum
     *
     * @param int|null $remainStockNum 剩余库存数
     *
     * @return self
     */
    public function setRemainStockNum($remainStockNum)
    {
        $this->container['remainStockNum'] = $remainStockNum;

        return $this;
    }

    /**
     * Gets repayRateIncrease
     *
     * @return string|null
     */
    public function getRepayRateIncrease()
    {
        return $this->container['repayRateIncrease'];
    }

    /**
     * Sets repayRateIncrease
     *
     * @param string|null $repayRateIncrease 复购率提升比例
     *
     * @return self
     */
    public function setRepayRateIncrease($repayRateIncrease)
    {
        $this->container['repayRateIncrease'] = $repayRateIncrease;

        return $this;
    }

    /**
     * Gets sendCountIncrease
     *
     * @return string|null
     */
    public function getSendCountIncrease()
    {
        return $this->container['sendCountIncrease'];
    }

    /**
     * Sets sendCountIncrease
     *
     * @param string|null $sendCountIncrease 发券量提升比例
     *
     * @return self
     */
    public function setSendCountIncrease($sendCountIncrease)
    {
        $this->container['sendCountIncrease'] = $sendCountIncrease;

        return $this;
    }

    /**
     * Gets takeCount
     *
     * @return int|null
     */
    public function getTakeCount()
    {
        return $this->container['takeCount'];
    }

    /**
     * Sets takeCount
     *
     * @param int|null $takeCount 发券数量
     *
     * @return self
     */
    public function setTakeCount($takeCount)
    {
        $this->container['takeCount'] = $takeCount;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string|null
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string|null $type 营销活动效果类型。FORECAST：预估；STATISTICS：统计
     *
     * @return self
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets useCount
     *
     * @return int|null
     */
    public function getUseCount()
    {
        return $this->container['useCount'];
    }

    /**
     * Sets useCount
     *
     * @param int|null $useCount 核销量
     *
     * @return self
     */
    public function setUseCount($useCount)
    {
        $this->container['useCount'] = $useCount;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}

