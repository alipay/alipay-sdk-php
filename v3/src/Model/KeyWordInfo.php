<?php
/**
 * KeyWordInfo
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
 * KeyWordInfo Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class KeyWordInfo implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'KeyWordInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'applyNo' => 'string',
        'auditKeyWord' => 'string',
        'auditReason' => 'string',
        'auditTime' => 'string',
        'configId' => 'string',
        'gmtCreate' => 'string',
        'keyWord' => 'string',
        'status' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'applyNo' => null,
        'auditKeyWord' => null,
        'auditReason' => null,
        'auditTime' => null,
        'configId' => null,
        'gmtCreate' => null,
        'keyWord' => null,
        'status' => null
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
        'applyNo' => 'apply_no',
        'auditKeyWord' => 'audit_key_word',
        'auditReason' => 'audit_reason',
        'auditTime' => 'audit_time',
        'configId' => 'config_id',
        'gmtCreate' => 'gmt_create',
        'keyWord' => 'key_word',
        'status' => 'status'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'applyNo' => 'setApplyNo',
        'auditKeyWord' => 'setAuditKeyWord',
        'auditReason' => 'setAuditReason',
        'auditTime' => 'setAuditTime',
        'configId' => 'setConfigId',
        'gmtCreate' => 'setGmtCreate',
        'keyWord' => 'setKeyWord',
        'status' => 'setStatus'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'applyNo' => 'getApplyNo',
        'auditKeyWord' => 'getAuditKeyWord',
        'auditReason' => 'getAuditReason',
        'auditTime' => 'getAuditTime',
        'configId' => 'getConfigId',
        'gmtCreate' => 'getGmtCreate',
        'keyWord' => 'getKeyWord',
        'status' => 'getStatus'
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
        $this->container['applyNo'] = $data['applyNo'] ?? null;
        $this->container['auditKeyWord'] = $data['auditKeyWord'] ?? null;
        $this->container['auditReason'] = $data['auditReason'] ?? null;
        $this->container['auditTime'] = $data['auditTime'] ?? null;
        $this->container['configId'] = $data['configId'] ?? null;
        $this->container['gmtCreate'] = $data['gmtCreate'] ?? null;
        $this->container['keyWord'] = $data['keyWord'] ?? null;
        $this->container['status'] = $data['status'] ?? null;
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
     * Gets applyNo
     *
     * @return string|null
     */
    public function getApplyNo()
    {
        return $this->container['applyNo'];
    }

    /**
     * Sets applyNo
     *
     * @param string|null $applyNo 审核单号
     *
     * @return self
     */
    public function setApplyNo($applyNo)
    {
        $this->container['applyNo'] = $applyNo;

        return $this;
    }

    /**
     * Gets auditKeyWord
     *
     * @return string|null
     */
    public function getAuditKeyWord()
    {
        return $this->container['auditKeyWord'];
    }

    /**
     * Sets auditKeyWord
     *
     * @param string|null $auditKeyWord 审核中的关键词
     *
     * @return self
     */
    public function setAuditKeyWord($auditKeyWord)
    {
        $this->container['auditKeyWord'] = $auditKeyWord;

        return $this;
    }

    /**
     * Gets auditReason
     *
     * @return string|null
     */
    public function getAuditReason()
    {
        return $this->container['auditReason'];
    }

    /**
     * Sets auditReason
     *
     * @param string|null $auditReason 审核人的备注信息
     *
     * @return self
     */
    public function setAuditReason($auditReason)
    {
        $this->container['auditReason'] = $auditReason;

        return $this;
    }

    /**
     * Gets auditTime
     *
     * @return string|null
     */
    public function getAuditTime()
    {
        return $this->container['auditTime'];
    }

    /**
     * Sets auditTime
     *
     * @param string|null $auditTime 审核时间，格式为 yyyy-MM-dd HH:mm:ss
     *
     * @return self
     */
    public function setAuditTime($auditTime)
    {
        $this->container['auditTime'] = $auditTime;

        return $this;
    }

    /**
     * Gets configId
     *
     * @return string|null
     */
    public function getConfigId()
    {
        return $this->container['configId'];
    }

    /**
     * Sets configId
     *
     * @param string|null $configId 关键词配置ID
     *
     * @return self
     */
    public function setConfigId($configId)
    {
        $this->container['configId'] = $configId;

        return $this;
    }

    /**
     * Gets gmtCreate
     *
     * @return string|null
     */
    public function getGmtCreate()
    {
        return $this->container['gmtCreate'];
    }

    /**
     * Sets gmtCreate
     *
     * @param string|null $gmtCreate 创建时间，格式为 yyyy-MM-dd HH:mm:ss
     *
     * @return self
     */
    public function setGmtCreate($gmtCreate)
    {
        $this->container['gmtCreate'] = $gmtCreate;

        return $this;
    }

    /**
     * Gets keyWord
     *
     * @return string|null
     */
    public function getKeyWord()
    {
        return $this->container['keyWord'];
    }

    /**
     * Sets keyWord
     *
     * @param string|null $keyWord 审核完成的关键词
     *
     * @return self
     */
    public function setKeyWord($keyWord)
    {
        $this->container['keyWord'] = $keyWord;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string|null $status 关键词当前状态
     *
     * @return self
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

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


