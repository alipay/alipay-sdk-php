<?php
/**
 * ZhimaMerchantSubsidiariesApplyModel
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
 * ZhimaMerchantSubsidiariesApplyModel Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ZhimaMerchantSubsidiariesApplyModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ZhimaMerchantSubsidiariesApplyModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'pid' => 'string',
        'serviceId' => 'string',
        'smid' => 'string',
        'subMerchantContactNumber' => 'string',
        'subMerchantJumpLink' => 'string',
        'subMerchantLogoUrl' => 'string',
        'subMerchantName' => 'string',
        'subPid' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'pid' => null,
        'serviceId' => null,
        'smid' => null,
        'subMerchantContactNumber' => null,
        'subMerchantJumpLink' => null,
        'subMerchantLogoUrl' => null,
        'subMerchantName' => null,
        'subPid' => null
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
        'pid' => 'pid',
        'serviceId' => 'service_id',
        'smid' => 'smid',
        'subMerchantContactNumber' => 'sub_merchant_contact_number',
        'subMerchantJumpLink' => 'sub_merchant_jump_link',
        'subMerchantLogoUrl' => 'sub_merchant_logo_url',
        'subMerchantName' => 'sub_merchant_name',
        'subPid' => 'sub_pid'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'pid' => 'setPid',
        'serviceId' => 'setServiceId',
        'smid' => 'setSmid',
        'subMerchantContactNumber' => 'setSubMerchantContactNumber',
        'subMerchantJumpLink' => 'setSubMerchantJumpLink',
        'subMerchantLogoUrl' => 'setSubMerchantLogoUrl',
        'subMerchantName' => 'setSubMerchantName',
        'subPid' => 'setSubPid'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'pid' => 'getPid',
        'serviceId' => 'getServiceId',
        'smid' => 'getSmid',
        'subMerchantContactNumber' => 'getSubMerchantContactNumber',
        'subMerchantJumpLink' => 'getSubMerchantJumpLink',
        'subMerchantLogoUrl' => 'getSubMerchantLogoUrl',
        'subMerchantName' => 'getSubMerchantName',
        'subPid' => 'getSubPid'
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
        $this->container['pid'] = $data['pid'] ?? null;
        $this->container['serviceId'] = $data['serviceId'] ?? null;
        $this->container['smid'] = $data['smid'] ?? null;
        $this->container['subMerchantContactNumber'] = $data['subMerchantContactNumber'] ?? null;
        $this->container['subMerchantJumpLink'] = $data['subMerchantJumpLink'] ?? null;
        $this->container['subMerchantLogoUrl'] = $data['subMerchantLogoUrl'] ?? null;
        $this->container['subMerchantName'] = $data['subMerchantName'] ?? null;
        $this->container['subPid'] = $data['subPid'] ?? null;
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
     * Gets pid
     *
     * @return string|null
     */
    public function getPid()
    {
        return $this->container['pid'];
    }

    /**
     * Sets pid
     *
     * @param string|null $pid 商户pid
     *
     * @return self
     */
    public function setPid($pid)
    {
        $this->container['pid'] = $pid;

        return $this;
    }

    /**
     * Gets serviceId
     *
     * @return string|null
     */
    public function getServiceId()
    {
        return $this->container['serviceId'];
    }

    /**
     * Sets serviceId
     *
     * @param string|null $serviceId 信用服务id
     *
     * @return self
     */
    public function setServiceId($serviceId)
    {
        $this->container['serviceId'] = $serviceId;

        return $this;
    }

    /**
     * Gets smid
     *
     * @return string|null
     */
    public function getSmid()
    {
        return $this->container['smid'];
    }

    /**
     * Sets smid
     *
     * @param string|null $smid 二级商户进件id
     *
     * @return self
     */
    public function setSmid($smid)
    {
        $this->container['smid'] = $smid;

        return $this;
    }

    /**
     * Gets subMerchantContactNumber
     *
     * @return string|null
     */
    public function getSubMerchantContactNumber()
    {
        return $this->container['subMerchantContactNumber'];
    }

    /**
     * Sets subMerchantContactNumber
     *
     * @param string|null $subMerchantContactNumber 子商户联系电话
     *
     * @return self
     */
    public function setSubMerchantContactNumber($subMerchantContactNumber)
    {
        $this->container['subMerchantContactNumber'] = $subMerchantContactNumber;

        return $this;
    }

    /**
     * Gets subMerchantJumpLink
     *
     * @return string|null
     */
    public function getSubMerchantJumpLink()
    {
        return $this->container['subMerchantJumpLink'];
    }

    /**
     * Sets subMerchantJumpLink
     *
     * @param string|null $subMerchantJumpLink 子商户跳转链接
     *
     * @return self
     */
    public function setSubMerchantJumpLink($subMerchantJumpLink)
    {
        $this->container['subMerchantJumpLink'] = $subMerchantJumpLink;

        return $this;
    }

    /**
     * Gets subMerchantLogoUrl
     *
     * @return string|null
     */
    public function getSubMerchantLogoUrl()
    {
        return $this->container['subMerchantLogoUrl'];
    }

    /**
     * Sets subMerchantLogoUrl
     *
     * @param string|null $subMerchantLogoUrl 子商户logo地址
     *
     * @return self
     */
    public function setSubMerchantLogoUrl($subMerchantLogoUrl)
    {
        $this->container['subMerchantLogoUrl'] = $subMerchantLogoUrl;

        return $this;
    }

    /**
     * Gets subMerchantName
     *
     * @return string|null
     */
    public function getSubMerchantName()
    {
        return $this->container['subMerchantName'];
    }

    /**
     * Sets subMerchantName
     *
     * @param string|null $subMerchantName 子商户名
     *
     * @return self
     */
    public function setSubMerchantName($subMerchantName)
    {
        $this->container['subMerchantName'] = $subMerchantName;

        return $this;
    }

    /**
     * Gets subPid
     *
     * @return string|null
     */
    public function getSubPid()
    {
        return $this->container['subPid'];
    }

    /**
     * Sets subPid
     *
     * @param string|null $subPid 子商户id
     *
     * @return self
     */
    public function setSubPid($subPid)
    {
        $this->container['subPid'] = $subPid;

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


