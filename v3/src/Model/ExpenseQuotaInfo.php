<?php
/**
 * ExpenseQuotaInfo
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
 * The version of the OpenAPI document: 2024-11-12
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
 * ExpenseQuotaInfo Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ExpenseQuotaInfo implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ExpenseQuotaInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'effectiveEndDate' => 'string',
        'effectiveStartDate' => 'string',
        'enterpriseId' => 'string',
        'freeze' => 'bool',
        'ownerId' => 'string',
        'ownerOpenId' => 'string',
        'ownerType' => 'string',
        'quotaAvailable' => 'string',
        'quotaId' => 'string',
        'quotaLocked' => 'string',
        'quotaTotal' => 'string',
        'quotaType' => 'string',
        'quotaUsed' => 'string',
        'targetId' => 'string',
        'targetType' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'effectiveEndDate' => null,
        'effectiveStartDate' => null,
        'enterpriseId' => null,
        'freeze' => null,
        'ownerId' => null,
        'ownerOpenId' => null,
        'ownerType' => null,
        'quotaAvailable' => null,
        'quotaId' => null,
        'quotaLocked' => null,
        'quotaTotal' => null,
        'quotaType' => null,
        'quotaUsed' => null,
        'targetId' => null,
        'targetType' => null
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
        'effectiveEndDate' => 'effective_end_date',
        'effectiveStartDate' => 'effective_start_date',
        'enterpriseId' => 'enterprise_id',
        'freeze' => 'freeze',
        'ownerId' => 'owner_id',
        'ownerOpenId' => 'owner_open_id',
        'ownerType' => 'owner_type',
        'quotaAvailable' => 'quota_available',
        'quotaId' => 'quota_id',
        'quotaLocked' => 'quota_locked',
        'quotaTotal' => 'quota_total',
        'quotaType' => 'quota_type',
        'quotaUsed' => 'quota_used',
        'targetId' => 'target_id',
        'targetType' => 'target_type'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'effectiveEndDate' => 'setEffectiveEndDate',
        'effectiveStartDate' => 'setEffectiveStartDate',
        'enterpriseId' => 'setEnterpriseId',
        'freeze' => 'setFreeze',
        'ownerId' => 'setOwnerId',
        'ownerOpenId' => 'setOwnerOpenId',
        'ownerType' => 'setOwnerType',
        'quotaAvailable' => 'setQuotaAvailable',
        'quotaId' => 'setQuotaId',
        'quotaLocked' => 'setQuotaLocked',
        'quotaTotal' => 'setQuotaTotal',
        'quotaType' => 'setQuotaType',
        'quotaUsed' => 'setQuotaUsed',
        'targetId' => 'setTargetId',
        'targetType' => 'setTargetType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'effectiveEndDate' => 'getEffectiveEndDate',
        'effectiveStartDate' => 'getEffectiveStartDate',
        'enterpriseId' => 'getEnterpriseId',
        'freeze' => 'getFreeze',
        'ownerId' => 'getOwnerId',
        'ownerOpenId' => 'getOwnerOpenId',
        'ownerType' => 'getOwnerType',
        'quotaAvailable' => 'getQuotaAvailable',
        'quotaId' => 'getQuotaId',
        'quotaLocked' => 'getQuotaLocked',
        'quotaTotal' => 'getQuotaTotal',
        'quotaType' => 'getQuotaType',
        'quotaUsed' => 'getQuotaUsed',
        'targetId' => 'getTargetId',
        'targetType' => 'getTargetType'
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
        $this->container['effectiveEndDate'] = $data['effectiveEndDate'] ?? null;
        $this->container['effectiveStartDate'] = $data['effectiveStartDate'] ?? null;
        $this->container['enterpriseId'] = $data['enterpriseId'] ?? null;
        $this->container['freeze'] = $data['freeze'] ?? null;
        $this->container['ownerId'] = $data['ownerId'] ?? null;
        $this->container['ownerOpenId'] = $data['ownerOpenId'] ?? null;
        $this->container['ownerType'] = $data['ownerType'] ?? null;
        $this->container['quotaAvailable'] = $data['quotaAvailable'] ?? null;
        $this->container['quotaId'] = $data['quotaId'] ?? null;
        $this->container['quotaLocked'] = $data['quotaLocked'] ?? null;
        $this->container['quotaTotal'] = $data['quotaTotal'] ?? null;
        $this->container['quotaType'] = $data['quotaType'] ?? null;
        $this->container['quotaUsed'] = $data['quotaUsed'] ?? null;
        $this->container['targetId'] = $data['targetId'] ?? null;
        $this->container['targetType'] = $data['targetType'] ?? null;
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
     * Gets effectiveEndDate
     *
     * @return string|null
     */
    public function getEffectiveEndDate()
    {
        return $this->container['effectiveEndDate'];
    }

    /**
     * Sets effectiveEndDate
     *
     * @param string|null $effectiveEndDate 额度失效时间
     *
     * @return self
     */
    public function setEffectiveEndDate($effectiveEndDate)
    {
        $this->container['effectiveEndDate'] = $effectiveEndDate;

        return $this;
    }

    /**
     * Gets effectiveStartDate
     *
     * @return string|null
     */
    public function getEffectiveStartDate()
    {
        return $this->container['effectiveStartDate'];
    }

    /**
     * Sets effectiveStartDate
     *
     * @param string|null $effectiveStartDate 额度生效时间
     *
     * @return self
     */
    public function setEffectiveStartDate($effectiveStartDate)
    {
        $this->container['effectiveStartDate'] = $effectiveStartDate;

        return $this;
    }

    /**
     * Gets enterpriseId
     *
     * @return string|null
     */
    public function getEnterpriseId()
    {
        return $this->container['enterpriseId'];
    }

    /**
     * Sets enterpriseId
     *
     * @param string|null $enterpriseId 企业ID
     *
     * @return self
     */
    public function setEnterpriseId($enterpriseId)
    {
        $this->container['enterpriseId'] = $enterpriseId;

        return $this;
    }

    /**
     * Gets freeze
     *
     * @return bool|null
     */
    public function getFreeze()
    {
        return $this->container['freeze'];
    }

    /**
     * Sets freeze
     *
     * @param bool|null $freeze 额度是否冻结，冻结后因公付不可用
     *
     * @return self
     */
    public function setFreeze($freeze)
    {
        $this->container['freeze'] = $freeze;

        return $this;
    }

    /**
     * Gets ownerId
     *
     * @return string|null
     */
    public function getOwnerId()
    {
        return $this->container['ownerId'];
    }

    /**
     * Sets ownerId
     *
     * @param string|null $ownerId 额度所属者ID owner_type为EMPLOYEE时为员工支付宝ID owner_type为ENTERPRISE_PAY_UID时为员工企业码ID owner_type为PHONE时为员工手机号 owner_type为ENTERPRISE时为企业ID
     *
     * @return self
     */
    public function setOwnerId($ownerId)
    {
        $this->container['ownerId'] = $ownerId;

        return $this;
    }

    /**
     * Gets ownerOpenId
     *
     * @return string|null
     */
    public function getOwnerOpenId()
    {
        return $this->container['ownerOpenId'];
    }

    /**
     * Sets ownerOpenId
     *
     * @param string|null $ownerOpenId owner_type为EMPLOYEE时为员工open_id owner_type为PHONE时为员工手机号 owner_type为ENTERPRISE_PAY_UID时为员工企业码ID
     *
     * @return self
     */
    public function setOwnerOpenId($ownerOpenId)
    {
        $this->container['ownerOpenId'] = $ownerOpenId;

        return $this;
    }

    /**
     * Gets ownerType
     *
     * @return string|null
     */
    public function getOwnerType()
    {
        return $this->container['ownerType'];
    }

    /**
     * Sets ownerType
     *
     * @param string|null $ownerType 额度所属者id类型
     *
     * @return self
     */
    public function setOwnerType($ownerType)
    {
        $this->container['ownerType'] = $ownerType;

        return $this;
    }

    /**
     * Gets quotaAvailable
     *
     * @return string|null
     */
    public function getQuotaAvailable()
    {
        return $this->container['quotaAvailable'];
    }

    /**
     * Sets quotaAvailable
     *
     * @param string|null $quotaAvailable 可用金额（单位分）
     *
     * @return self
     */
    public function setQuotaAvailable($quotaAvailable)
    {
        $this->container['quotaAvailable'] = $quotaAvailable;

        return $this;
    }

    /**
     * Gets quotaId
     *
     * @return string|null
     */
    public function getQuotaId()
    {
        return $this->container['quotaId'];
    }

    /**
     * Sets quotaId
     *
     * @param string|null $quotaId 额度ID
     *
     * @return self
     */
    public function setQuotaId($quotaId)
    {
        $this->container['quotaId'] = $quotaId;

        return $this;
    }

    /**
     * Gets quotaLocked
     *
     * @return string|null
     */
    public function getQuotaLocked()
    {
        return $this->container['quotaLocked'];
    }

    /**
     * Sets quotaLocked
     *
     * @param string|null $quotaLocked 锁定金额（单位分）
     *
     * @return self
     */
    public function setQuotaLocked($quotaLocked)
    {
        $this->container['quotaLocked'] = $quotaLocked;

        return $this;
    }

    /**
     * Gets quotaTotal
     *
     * @return string|null
     */
    public function getQuotaTotal()
    {
        return $this->container['quotaTotal'];
    }

    /**
     * Sets quotaTotal
     *
     * @param string|null $quotaTotal 总金额（单位分）
     *
     * @return self
     */
    public function setQuotaTotal($quotaTotal)
    {
        $this->container['quotaTotal'] = $quotaTotal;

        return $this;
    }

    /**
     * Gets quotaType
     *
     * @return string|null
     */
    public function getQuotaType()
    {
        return $this->container['quotaType'];
    }

    /**
     * Sets quotaType
     *
     * @param string|null $quotaType 额度类型
     *
     * @return self
     */
    public function setQuotaType($quotaType)
    {
        $this->container['quotaType'] = $quotaType;

        return $this;
    }

    /**
     * Gets quotaUsed
     *
     * @return string|null
     */
    public function getQuotaUsed()
    {
        return $this->container['quotaUsed'];
    }

    /**
     * Sets quotaUsed
     *
     * @param string|null $quotaUsed 已用金额（单位分）
     *
     * @return self
     */
    public function setQuotaUsed($quotaUsed)
    {
        $this->container['quotaUsed'] = $quotaUsed;

        return $this;
    }

    /**
     * Gets targetId
     *
     * @return string|null
     */
    public function getTargetId()
    {
        return $this->container['targetId'];
    }

    /**
     * Sets targetId
     *
     * @param string|null $targetId 额度维度ID 当 target_type=EXPENSE_TYPE 时，值为 MEAL（工作餐） 当target_type=RULE_GROUP_AGGREGATION 时，值为费控规则聚合ID 当target_type=INSTITUTION 时，值为制度ID
     *
     * @return self
     */
    public function setTargetId($targetId)
    {
        $this->container['targetId'] = $targetId;

        return $this;
    }

    /**
     * Gets targetType
     *
     * @return string|null
     */
    public function getTargetType()
    {
        return $this->container['targetType'];
    }

    /**
     * Sets targetType
     *
     * @param string|null $targetType 额度维度
     *
     * @return self
     */
    public function setTargetType($targetType)
    {
        $this->container['targetType'] = $targetType;

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


