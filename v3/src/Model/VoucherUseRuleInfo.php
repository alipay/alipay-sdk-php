<?php
/**
 * VoucherUseRuleInfo
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
 * VoucherUseRuleInfo Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class VoucherUseRuleInfo implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'VoucherUseRuleInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'quantityLimitPerUser' => 'int',
        'quantityLimitPerUserPeriodType' => 'string',
        'voucherMaxUseTimes' => 'int',
        'voucherUseExtInfo' => 'string',
        'voucherUseTimeInfo' => '\Alipay\OpenAPISDK\Model\VoucherUseTimeInfo'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'quantityLimitPerUser' => null,
        'quantityLimitPerUserPeriodType' => null,
        'voucherMaxUseTimes' => null,
        'voucherUseExtInfo' => null,
        'voucherUseTimeInfo' => null
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
        'quantityLimitPerUser' => 'quantity_limit_per_user',
        'quantityLimitPerUserPeriodType' => 'quantity_limit_per_user_period_type',
        'voucherMaxUseTimes' => 'voucher_max_use_times',
        'voucherUseExtInfo' => 'voucher_use_ext_info',
        'voucherUseTimeInfo' => 'voucher_use_time_info'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'quantityLimitPerUser' => 'setQuantityLimitPerUser',
        'quantityLimitPerUserPeriodType' => 'setQuantityLimitPerUserPeriodType',
        'voucherMaxUseTimes' => 'setVoucherMaxUseTimes',
        'voucherUseExtInfo' => 'setVoucherUseExtInfo',
        'voucherUseTimeInfo' => 'setVoucherUseTimeInfo'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'quantityLimitPerUser' => 'getQuantityLimitPerUser',
        'quantityLimitPerUserPeriodType' => 'getQuantityLimitPerUserPeriodType',
        'voucherMaxUseTimes' => 'getVoucherMaxUseTimes',
        'voucherUseExtInfo' => 'getVoucherUseExtInfo',
        'voucherUseTimeInfo' => 'getVoucherUseTimeInfo'
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
        $this->container['quantityLimitPerUser'] = $data['quantityLimitPerUser'] ?? null;
        $this->container['quantityLimitPerUserPeriodType'] = $data['quantityLimitPerUserPeriodType'] ?? null;
        $this->container['voucherMaxUseTimes'] = $data['voucherMaxUseTimes'] ?? null;
        $this->container['voucherUseExtInfo'] = $data['voucherUseExtInfo'] ?? null;
        $this->container['voucherUseTimeInfo'] = $data['voucherUseTimeInfo'] ?? null;
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
     * Gets quantityLimitPerUser
     *
     * @return int|null
     */
    public function getQuantityLimitPerUser()
    {
        return $this->container['quantityLimitPerUser'];
    }

    /**
     * Sets quantityLimitPerUser
     *
     * @param int|null $quantityLimitPerUser 核销次数限制。
     *
     * @return self
     */
    public function setQuantityLimitPerUser($quantityLimitPerUser)
    {
        $this->container['quantityLimitPerUser'] = $quantityLimitPerUser;

        return $this;
    }

    /**
     * Gets quantityLimitPerUserPeriodType
     *
     * @return string|null
     */
    public function getQuantityLimitPerUserPeriodType()
    {
        return $this->container['quantityLimitPerUserPeriodType'];
    }

    /**
     * Sets quantityLimitPerUserPeriodType
     *
     * @param string|null $quantityLimitPerUserPeriodType 周期限领配置,限制每人在固定周期内领取张数(voucher_quantity_limit_per_user),默认LIFE_CYCLE
     *
     * @return self
     */
    public function setQuantityLimitPerUserPeriodType($quantityLimitPerUserPeriodType)
    {
        $this->container['quantityLimitPerUserPeriodType'] = $quantityLimitPerUserPeriodType;

        return $this;
    }

    /**
     * Gets voucherMaxUseTimes
     *
     * @return int|null
     */
    public function getVoucherMaxUseTimes()
    {
        return $this->container['voucherMaxUseTimes'];
    }

    /**
     * Sets voucherMaxUseTimes
     *
     * @param int|null $voucherMaxUseTimes 券最大核销次数。
     *
     * @return self
     */
    public function setVoucherMaxUseTimes($voucherMaxUseTimes)
    {
        $this->container['voucherMaxUseTimes'] = $voucherMaxUseTimes;

        return $this;
    }

    /**
     * Gets voucherUseExtInfo
     *
     * @return string|null
     */
    public function getVoucherUseExtInfo()
    {
        return $this->container['voucherUseExtInfo'];
    }

    /**
     * Sets voucherUseExtInfo
     *
     * @param string|null $voucherUseExtInfo 自定义扩展信息
     *
     * @return self
     */
    public function setVoucherUseExtInfo($voucherUseExtInfo)
    {
        $this->container['voucherUseExtInfo'] = $voucherUseExtInfo;

        return $this;
    }

    /**
     * Gets voucherUseTimeInfo
     *
     * @return \Alipay\OpenAPISDK\Model\VoucherUseTimeInfo|null
     */
    public function getVoucherUseTimeInfo()
    {
        return $this->container['voucherUseTimeInfo'];
    }

    /**
     * Sets voucherUseTimeInfo
     *
     * @param \Alipay\OpenAPISDK\Model\VoucherUseTimeInfo|null $voucherUseTimeInfo voucherUseTimeInfo
     *
     * @return self
     */
    public function setVoucherUseTimeInfo($voucherUseTimeInfo)
    {
        $this->container['voucherUseTimeInfo'] = $voucherUseTimeInfo;

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

