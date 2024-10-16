<?php
/**
 * ZMGOCycleWithholdConfig
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
 * The version of the OpenAPI document: 2024-10-16
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
 * ZMGOCycleWithholdConfig Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ZMGOCycleWithholdConfig implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ZMGOCycleWithholdConfig';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'deductPlan' => 'string[]',
        'exemptionPeriod' => 'string',
        'period' => 'string',
        'periodType' => 'string',
        'supportCycleWithholdHighMode' => 'bool',
        'supportExemptionPeriod' => 'bool',
        'withholdMode' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'deductPlan' => null,
        'exemptionPeriod' => null,
        'period' => null,
        'periodType' => null,
        'supportCycleWithholdHighMode' => null,
        'supportExemptionPeriod' => null,
        'withholdMode' => null
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
        'deductPlan' => 'deduct_plan',
        'exemptionPeriod' => 'exemption_period',
        'period' => 'period',
        'periodType' => 'period_type',
        'supportCycleWithholdHighMode' => 'support_cycle_withhold_high_mode',
        'supportExemptionPeriod' => 'support_exemption_period',
        'withholdMode' => 'withhold_mode'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'deductPlan' => 'setDeductPlan',
        'exemptionPeriod' => 'setExemptionPeriod',
        'period' => 'setPeriod',
        'periodType' => 'setPeriodType',
        'supportCycleWithholdHighMode' => 'setSupportCycleWithholdHighMode',
        'supportExemptionPeriod' => 'setSupportExemptionPeriod',
        'withholdMode' => 'setWithholdMode'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'deductPlan' => 'getDeductPlan',
        'exemptionPeriod' => 'getExemptionPeriod',
        'period' => 'getPeriod',
        'periodType' => 'getPeriodType',
        'supportCycleWithholdHighMode' => 'getSupportCycleWithholdHighMode',
        'supportExemptionPeriod' => 'getSupportExemptionPeriod',
        'withholdMode' => 'getWithholdMode'
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
        $this->container['deductPlan'] = $data['deductPlan'] ?? null;
        $this->container['exemptionPeriod'] = $data['exemptionPeriod'] ?? null;
        $this->container['period'] = $data['period'] ?? null;
        $this->container['periodType'] = $data['periodType'] ?? null;
        $this->container['supportCycleWithholdHighMode'] = $data['supportCycleWithholdHighMode'] ?? null;
        $this->container['supportExemptionPeriod'] = $data['supportExemptionPeriod'] ?? null;
        $this->container['withholdMode'] = $data['withholdMode'] ?? null;
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
     * Gets deductPlan
     *
     * @return string[]|null
     */
    public function getDeductPlan()
    {
        return $this->container['deductPlan'];
    }

    /**
     * Sets deductPlan
     *
     * @param string[]|null $deductPlan 扣款计划
     *
     * @return self
     */
    public function setDeductPlan($deductPlan)
    {
        $this->container['deductPlan'] = $deductPlan;

        return $this;
    }

    /**
     * Gets exemptionPeriod
     *
     * @return string|null
     */
    public function getExemptionPeriod()
    {
        return $this->container['exemptionPeriod'];
    }

    /**
     * Sets exemptionPeriod
     *
     * @param string|null $exemptionPeriod 豁免期天数
     *
     * @return self
     */
    public function setExemptionPeriod($exemptionPeriod)
    {
        $this->container['exemptionPeriod'] = $exemptionPeriod;

        return $this;
    }

    /**
     * Gets period
     *
     * @return string|null
     */
    public function getPeriod()
    {
        return $this->container['period'];
    }

    /**
     * Sets period
     *
     * @param string|null $period 周期
     *
     * @return self
     */
    public function setPeriod($period)
    {
        $this->container['period'] = $period;

        return $this;
    }

    /**
     * Gets periodType
     *
     * @return string|null
     */
    public function getPeriodType()
    {
        return $this->container['periodType'];
    }

    /**
     * Sets periodType
     *
     * @param string|null $periodType 扣款周期类型，支持DAY-天模式，MONTH-月模式
     *
     * @return self
     */
    public function setPeriodType($periodType)
    {
        $this->container['periodType'] = $periodType;

        return $this;
    }

    /**
     * Gets supportCycleWithholdHighMode
     *
     * @return bool|null
     */
    public function getSupportCycleWithholdHighMode()
    {
        return $this->container['supportCycleWithholdHighMode'];
    }

    /**
     * Sets supportCycleWithholdHighMode
     *
     * @param bool|null $supportCycleWithholdHighMode 是否支持周期扣高级模式，高级模式下扣款计划中内一起的扣款金额可以进行定制
     *
     * @return self
     */
    public function setSupportCycleWithholdHighMode($supportCycleWithholdHighMode)
    {
        $this->container['supportCycleWithholdHighMode'] = $supportCycleWithholdHighMode;

        return $this;
    }

    /**
     * Gets supportExemptionPeriod
     *
     * @return bool|null
     */
    public function getSupportExemptionPeriod()
    {
        return $this->container['supportExemptionPeriod'];
    }

    /**
     * Sets supportExemptionPeriod
     *
     * @param bool|null $supportExemptionPeriod 是否支持豁免期，如果支持豁免期，用户开通后再豁免期内退出无需扣款
     *
     * @return self
     */
    public function setSupportExemptionPeriod($supportExemptionPeriod)
    {
        $this->container['supportExemptionPeriod'] = $supportExemptionPeriod;

        return $this;
    }

    /**
     * Gets withholdMode
     *
     * @return string|null
     */
    public function getWithholdMode()
    {
        return $this->container['withholdMode'];
    }

    /**
     * Sets withholdMode
     *
     * @param string|null $withholdMode 设置扣款模式，目前支持每月固定日期或固定时间间隔
     *
     * @return self
     */
    public function setWithholdMode($withholdMode)
    {
        $this->container['withholdMode'] = $withholdMode;

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


