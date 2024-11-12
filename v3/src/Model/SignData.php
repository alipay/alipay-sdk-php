<?php
/**
 * SignData
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
 * SignData Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class SignData implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'SignData';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'oriAppId' => 'string',
        'oriCharSet' => 'string',
        'oriOutBizNo' => 'string',
        'oriSign' => 'string',
        'oriSignType' => 'string',
        'partnerId' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'oriAppId' => null,
        'oriCharSet' => null,
        'oriOutBizNo' => null,
        'oriSign' => null,
        'oriSignType' => null,
        'partnerId' => null
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
        'oriAppId' => 'ori_app_id',
        'oriCharSet' => 'ori_char_set',
        'oriOutBizNo' => 'ori_out_biz_no',
        'oriSign' => 'ori_sign',
        'oriSignType' => 'ori_sign_type',
        'partnerId' => 'partner_id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'oriAppId' => 'setOriAppId',
        'oriCharSet' => 'setOriCharSet',
        'oriOutBizNo' => 'setOriOutBizNo',
        'oriSign' => 'setOriSign',
        'oriSignType' => 'setOriSignType',
        'partnerId' => 'setPartnerId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'oriAppId' => 'getOriAppId',
        'oriCharSet' => 'getOriCharSet',
        'oriOutBizNo' => 'getOriOutBizNo',
        'oriSign' => 'getOriSign',
        'oriSignType' => 'getOriSignType',
        'partnerId' => 'getPartnerId'
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
        $this->container['oriAppId'] = $data['oriAppId'] ?? null;
        $this->container['oriCharSet'] = $data['oriCharSet'] ?? null;
        $this->container['oriOutBizNo'] = $data['oriOutBizNo'] ?? null;
        $this->container['oriSign'] = $data['oriSign'] ?? null;
        $this->container['oriSignType'] = $data['oriSignType'] ?? null;
        $this->container['partnerId'] = $data['partnerId'] ?? null;
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
     * Gets oriAppId
     *
     * @return string|null
     */
    public function getOriAppId()
    {
        return $this->container['oriAppId'];
    }

    /**
     * Sets oriAppId
     *
     * @param string|null $oriAppId 签名商户开放平台应用APPID
     *
     * @return self
     */
    public function setOriAppId($oriAppId)
    {
        $this->container['oriAppId'] = $oriAppId;

        return $this;
    }

    /**
     * Gets oriCharSet
     *
     * @return string|null
     */
    public function getOriCharSet()
    {
        return $this->container['oriCharSet'];
    }

    /**
     * Sets oriCharSet
     *
     * @param string|null $oriCharSet 编码类型（大小写敏感）
     *
     * @return self
     */
    public function setOriCharSet($oriCharSet)
    {
        $this->container['oriCharSet'] = $oriCharSet;

        return $this;
    }

    /**
     * Gets oriOutBizNo
     *
     * @return string|null
     */
    public function getOriOutBizNo()
    {
        return $this->container['oriOutBizNo'];
    }

    /**
     * Sets oriOutBizNo
     *
     * @param string|null $oriOutBizNo ori_out_biz_no_001
     *
     * @return self
     */
    public function setOriOutBizNo($oriOutBizNo)
    {
        $this->container['oriOutBizNo'] = $oriOutBizNo;

        return $this;
    }

    /**
     * Gets oriSign
     *
     * @return string|null
     */
    public function getOriSign()
    {
        return $this->container['oriSign'];
    }

    /**
     * Sets oriSign
     *
     * @param string|null $oriSign 签名密文
     *
     * @return self
     */
    public function setOriSign($oriSign)
    {
        $this->container['oriSign'] = $oriSign;

        return $this;
    }

    /**
     * Gets oriSignType
     *
     * @return string|null
     */
    public function getOriSignType()
    {
        return $this->container['oriSignType'];
    }

    /**
     * Sets oriSignType
     *
     * @param string|null $oriSignType 签名算法（大小写敏感）
     *
     * @return self
     */
    public function setOriSignType($oriSignType)
    {
        $this->container['oriSignType'] = $oriSignType;

        return $this;
    }

    /**
     * Gets partnerId
     *
     * @return string|null
     */
    public function getPartnerId()
    {
        return $this->container['partnerId'];
    }

    /**
     * Sets partnerId
     *
     * @param string|null $partnerId 商户支付宝账号id
     *
     * @return self
     */
    public function setPartnerId($partnerId)
    {
        $this->container['partnerId'] = $partnerId;

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


