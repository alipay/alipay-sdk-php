<?php
/**
 * PromotionTaskRelation
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
 * PromotionTaskRelation Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class PromotionTaskRelation implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PromotionTaskRelation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'applyReason' => 'string',
        'commodityId' => 'string',
        'commodityName' => 'string',
        'createTime' => 'string',
        'promoterContactName' => 'string',
        'promoterContactPhone' => 'string',
        'promoterName' => 'string',
        'promoterPid' => 'string',
        'promotionId' => 'string',
        'promotionName' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'applyReason' => null,
        'commodityId' => null,
        'commodityName' => null,
        'createTime' => null,
        'promoterContactName' => null,
        'promoterContactPhone' => null,
        'promoterName' => null,
        'promoterPid' => null,
        'promotionId' => null,
        'promotionName' => null
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
        'applyReason' => 'apply_reason',
        'commodityId' => 'commodity_id',
        'commodityName' => 'commodity_name',
        'createTime' => 'create_time',
        'promoterContactName' => 'promoter_contact_name',
        'promoterContactPhone' => 'promoter_contact_phone',
        'promoterName' => 'promoter_name',
        'promoterPid' => 'promoter_pid',
        'promotionId' => 'promotion_id',
        'promotionName' => 'promotion_name'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'applyReason' => 'setApplyReason',
        'commodityId' => 'setCommodityId',
        'commodityName' => 'setCommodityName',
        'createTime' => 'setCreateTime',
        'promoterContactName' => 'setPromoterContactName',
        'promoterContactPhone' => 'setPromoterContactPhone',
        'promoterName' => 'setPromoterName',
        'promoterPid' => 'setPromoterPid',
        'promotionId' => 'setPromotionId',
        'promotionName' => 'setPromotionName'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'applyReason' => 'getApplyReason',
        'commodityId' => 'getCommodityId',
        'commodityName' => 'getCommodityName',
        'createTime' => 'getCreateTime',
        'promoterContactName' => 'getPromoterContactName',
        'promoterContactPhone' => 'getPromoterContactPhone',
        'promoterName' => 'getPromoterName',
        'promoterPid' => 'getPromoterPid',
        'promotionId' => 'getPromotionId',
        'promotionName' => 'getPromotionName'
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
        $this->container['applyReason'] = $data['applyReason'] ?? null;
        $this->container['commodityId'] = $data['commodityId'] ?? null;
        $this->container['commodityName'] = $data['commodityName'] ?? null;
        $this->container['createTime'] = $data['createTime'] ?? null;
        $this->container['promoterContactName'] = $data['promoterContactName'] ?? null;
        $this->container['promoterContactPhone'] = $data['promoterContactPhone'] ?? null;
        $this->container['promoterName'] = $data['promoterName'] ?? null;
        $this->container['promoterPid'] = $data['promoterPid'] ?? null;
        $this->container['promotionId'] = $data['promotionId'] ?? null;
        $this->container['promotionName'] = $data['promotionName'] ?? null;
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
     * Gets applyReason
     *
     * @return string|null
     */
    public function getApplyReason()
    {
        return $this->container['applyReason'];
    }

    /**
     * Sets applyReason
     *
     * @param string|null $applyReason 申请推广时填写的申请理由，自定义的内容
     *
     * @return self
     */
    public function setApplyReason($applyReason)
    {
        $this->container['applyReason'] = $applyReason;

        return $this;
    }

    /**
     * Gets commodityId
     *
     * @return string|null
     */
    public function getCommodityId()
    {
        return $this->container['commodityId'];
    }

    /**
     * Sets commodityId
     *
     * @param string|null $commodityId 服务商品ID
     *
     * @return self
     */
    public function setCommodityId($commodityId)
    {
        $this->container['commodityId'] = $commodityId;

        return $this;
    }

    /**
     * Gets commodityName
     *
     * @return string|null
     */
    public function getCommodityName()
    {
        return $this->container['commodityName'];
    }

    /**
     * Sets commodityName
     *
     * @param string|null $commodityName 服务商品名称
     *
     * @return self
     */
    public function setCommodityName($commodityName)
    {
        $this->container['commodityName'] = $commodityName;

        return $this;
    }

    /**
     * Gets createTime
     *
     * @return string|null
     */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
     * Sets createTime
     *
     * @param string|null $createTime 推广关系创建时间
     *
     * @return self
     */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;

        return $this;
    }

    /**
     * Gets promoterContactName
     *
     * @return string|null
     */
    public function getPromoterContactName()
    {
        return $this->container['promoterContactName'];
    }

    /**
     * Sets promoterContactName
     *
     * @param string|null $promoterContactName 推广服务商联系人名称
     *
     * @return self
     */
    public function setPromoterContactName($promoterContactName)
    {
        $this->container['promoterContactName'] = $promoterContactName;

        return $this;
    }

    /**
     * Gets promoterContactPhone
     *
     * @return string|null
     */
    public function getPromoterContactPhone()
    {
        return $this->container['promoterContactPhone'];
    }

    /**
     * Sets promoterContactPhone
     *
     * @param string|null $promoterContactPhone 推广服务商联系电话
     *
     * @return self
     */
    public function setPromoterContactPhone($promoterContactPhone)
    {
        $this->container['promoterContactPhone'] = $promoterContactPhone;

        return $this;
    }

    /**
     * Gets promoterName
     *
     * @return string|null
     */
    public function getPromoterName()
    {
        return $this->container['promoterName'];
    }

    /**
     * Sets promoterName
     *
     * @param string|null $promoterName 推广服务商的名称
     *
     * @return self
     */
    public function setPromoterName($promoterName)
    {
        $this->container['promoterName'] = $promoterName;

        return $this;
    }

    /**
     * Gets promoterPid
     *
     * @return string|null
     */
    public function getPromoterPid()
    {
        return $this->container['promoterPid'];
    }

    /**
     * Sets promoterPid
     *
     * @param string|null $promoterPid 推广服务商的pid
     *
     * @return self
     */
    public function setPromoterPid($promoterPid)
    {
        $this->container['promoterPid'] = $promoterPid;

        return $this;
    }

    /**
     * Gets promotionId
     *
     * @return string|null
     */
    public function getPromotionId()
    {
        return $this->container['promotionId'];
    }

    /**
     * Sets promotionId
     *
     * @param string|null $promotionId 推广任务id
     *
     * @return self
     */
    public function setPromotionId($promotionId)
    {
        $this->container['promotionId'] = $promotionId;

        return $this;
    }

    /**
     * Gets promotionName
     *
     * @return string|null
     */
    public function getPromotionName()
    {
        return $this->container['promotionName'];
    }

    /**
     * Sets promotionName
     *
     * @param string|null $promotionName 推广任务的名称
     *
     * @return self
     */
    public function setPromotionName($promotionName)
    {
        $this->container['promotionName'] = $promotionName;

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


